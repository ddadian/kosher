<?php

namespace GoDaddy\WordPress\MWC\Core\Features\Commerce\Webhooks;

use GoDaddy\WordPress\MWC\Common\Components\Exceptions\ComponentClassesNotDefinedException;
use GoDaddy\WordPress\MWC\Common\Components\Exceptions\ComponentLoadFailedException;
use GoDaddy\WordPress\MWC\Common\Components\Traits\HasComponentsFromContainerTrait;
use GoDaddy\WordPress\MWC\Common\Features\AbstractFeature;
use GoDaddy\WordPress\MWC\Core\Features\Commerce\Traits\IntegrationEnabledOnTestTrait;

class CommerceWebhooks extends AbstractFeature
{
    use HasComponentsFromContainerTrait;
    use IntegrationEnabledOnTestTrait;

    /** @var class-string[] alphabetically ordered list of components to load */
    protected array $componentClasses = [];

    /**
     * {@inheritDoc}
     */
    public static function getName() : string
    {
        return 'commerce_webhooks';
    }

    /**
     * Loads the feature.
     *
     * @return void
     * @throws ComponentClassesNotDefinedException|ComponentLoadFailedException
     */
    public function load() : void
    {
        $this->loadComponents();
    }
}
