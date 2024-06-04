<?php

namespace GoDaddy\WordPress\MWC\Core\Features\Commerce\Webhooks\Services\Contracts;

use Exception;
use GoDaddy\WordPress\MWC\Common\Exceptions\BaseException;
use GoDaddy\WordPress\MWC\Core\Features\Commerce\Exceptions\Contracts\CommerceExceptionContract;
use GoDaddy\WordPress\MWC\Core\Features\Commerce\Webhooks\Operations\Contracts\CreateWebhookSubscriptionOperationContract;
use GoDaddy\WordPress\MWC\Core\Features\Commerce\Webhooks\Services\Responses\Contracts\CreateSubscriptionResponseContract;
use GoDaddy\WordPress\MWC\Core\Features\Commerce\Webhooks\Services\Responses\Contracts\ListSubscriptionsResponseContract;

/**
 * Contract for webhook subscription services.
 */
interface SubscriptionServiceContract
{
    /**
     * Creates a new webhook subscription.
     *
     * @param CreateWebhookSubscriptionOperationContract $operation
     *
     * @return CreateSubscriptionResponseContract
     * @throws CommerceExceptionContract|BaseException|Exception
     */
    public function createSubscription(CreateWebhookSubscriptionOperationContract $operation) : CreateSubscriptionResponseContract;

    /**
     * Gets the list of webhooks the store is subscribed to.
     *
     * @return ListSubscriptionsResponseContract
     * @throws CommerceExceptionContract|BaseException|Exception
     */
    public function listSubscriptions() : ListSubscriptionsResponseContract;
}
