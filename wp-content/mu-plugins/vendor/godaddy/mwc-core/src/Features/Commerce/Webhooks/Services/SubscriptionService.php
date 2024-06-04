<?php

namespace GoDaddy\WordPress\MWC\Core\Features\Commerce\Webhooks\Services;

use Exception;
use GoDaddy\WordPress\MWC\Common\Configuration\Configuration;
use GoDaddy\WordPress\MWC\Common\Exceptions\BaseException;
use GoDaddy\WordPress\MWC\Common\Helpers\StringHelper;
use GoDaddy\WordPress\MWC\Common\Helpers\TypeHelper;
use GoDaddy\WordPress\MWC\Common\Repositories\WordPress\SiteRepository;
use GoDaddy\WordPress\MWC\Common\Traits\CanGetNewInstanceTrait;
use GoDaddy\WordPress\MWC\Core\Features\Commerce\Exceptions\Contracts\CommerceExceptionContract;
use GoDaddy\WordPress\MWC\Core\Features\Commerce\Exceptions\GatewayRequest404Exception;
use GoDaddy\WordPress\MWC\Core\Features\Commerce\Models\Contracts\CommerceContextContract;
use GoDaddy\WordPress\MWC\Core\Features\Commerce\Providers\DataObjects\Context;
use GoDaddy\WordPress\MWC\Core\Features\Commerce\Webhooks\Operations\Contracts\CreateWebhookSubscriptionOperationContract;
use GoDaddy\WordPress\MWC\Core\Features\Commerce\Webhooks\Operations\CreateWebhookSubscriptionOperation;
use GoDaddy\WordPress\MWC\Core\Features\Commerce\Webhooks\Providers\Contracts\WebhookProviderContract;
use GoDaddy\WordPress\MWC\Core\Features\Commerce\Webhooks\Providers\DataObjects\CreateSubscriptionInput;
use GoDaddy\WordPress\MWC\Core\Features\Commerce\Webhooks\Providers\DataObjects\ListSubscriptionsInput;
use GoDaddy\WordPress\MWC\Core\Features\Commerce\Webhooks\Services\Contracts\SubscriptionServiceContract;
use GoDaddy\WordPress\MWC\Core\Features\Commerce\Webhooks\Services\Responses\Contracts\CreateSubscriptionResponseContract;
use GoDaddy\WordPress\MWC\Core\Features\Commerce\Webhooks\Services\Responses\Contracts\ListSubscriptionsResponseContract;
use GoDaddy\WordPress\MWC\Core\Features\Commerce\Webhooks\Services\Responses\CreateSubscriptionResponse;
use GoDaddy\WordPress\MWC\Core\Features\Commerce\Webhooks\Services\Responses\ListSubscriptionsResponse;

/**
 * Webhook subscription service.
 */
class SubscriptionService implements SubscriptionServiceContract
{
    use CanGetNewInstanceTrait;

    /** @var CommerceContextContract Commerce Context */
    protected CommerceContextContract $commerceContext;

    /** @var WebhookProviderContract provider to the external API's CRUD operations */
    protected WebhookProviderContract $webhookProvider;

    public function __construct(CommerceContextContract $commerceContext, WebhookProviderContract $webhookProvider)
    {
        $this->commerceContext = $commerceContext;
        $this->webhookProvider = $webhookProvider;
    }

    /**
     * {@inheritDoc}
     */
    public function listSubscriptions() : ListSubscriptionsResponseContract
    {
        try {
            return $this->webhookProvider->subscriptions()->list(
                $this->getListSubscriptionsInput()
            );
        } catch(GatewayRequest404Exception $e) {
            // this indicates there are no subscriptions
            return ListSubscriptionsResponse::getNewInstance();
        }
    }

    /**
     * Gets the input for listing subscriptions.
     *
     * @return ListSubscriptionsInput
     */
    protected function getListSubscriptionsInput() : ListSubscriptionsInput
    {
        return ListSubscriptionsInput::getNewInstance([
            'storeId' => $this->commerceContext->getStoreId(),
        ]);
    }

    /**
     * {@inheritDoc}
     */
    public function createSubscription(CreateWebhookSubscriptionOperationContract $operation) : CreateSubscriptionResponseContract
    {
        $input = $this->getCreateSubscriptionInput($operation);

        $subscription = $this->webhookProvider->subscriptions()->create($input);

        return new CreateSubscriptionResponse($subscription);

        // @TODO in a future story add the newly created subscription to the database
    }

    /**
     * Gets the input for creating a subscription.
     *
     * @param CreateWebhookSubscriptionOperationContract $operation
     * @return CreateSubscriptionInput
     */
    protected function getCreateSubscriptionInput(CreateWebhookSubscriptionOperationContract $operation) : CreateSubscriptionInput
    {
        return CreateSubscriptionInput::getNewInstance([
            'name'        => $operation->getName(),
            'description' => $operation->getDescription(),
            'deliveryUrl' => $operation->getDeliveryUrl(),
            'eventTypes'  => $operation->getEventTypes(),
            'context'     => Context::getNewInstance(['storeId' => $this->commerceContext->getStoreId()]),
            'isEnabled'   => $operation->getIsEnabled(),
        ]);
    }

    /**
     * Creates a new subscription, using the configuration values.
     *
     * @return CreateSubscriptionResponseContract
     * @throws BaseException|CommerceExceptionContract|Exception
     */
    public function createSubscriptionFromConfig() : CreateSubscriptionResponseContract
    {
        // @TODO NOTE this is just an example and config values are subject to change. This method should be finalized once the config has been created.

        $deliveryBaseUrl = StringHelper::trailingSlash(TypeHelper::string(Configuration::get('commerce.webhooks.deliveryBaseUrl'), '') ?: SiteRepository::getSiteUrl());
        $deliveryPath = Configuration::get('commerce.webhooks.deliveryPath', '');

        $operation = new CreateWebhookSubscriptionOperation();
        $operation->setDeliveryUrl($deliveryBaseUrl.$deliveryPath);
        $operation->setEventTypes(
            TypeHelper::arrayOfStrings(Configuration::get('commerce.webhooks.supportedWebhookEventTypes', []))
        );

        return $this->createSubscription($operation);
    }
}
