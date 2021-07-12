<?php

namespace Automattic\WooCommerce\Admin\Features\PaymentGatewaySuggestions;

/**
 * Remote Payment Methods engine.
 * This goes through the specs and gets eligible payment gateways.
 */
class Init
{
    const SPECS_TRANSIENT_NAME = 'woocommerce_admin_payment_gateway_suggestions_specs';
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Go through the specs and run them.
     */
    public static function get_methods()
    {
    }
    /**
     * Delete the specs transient.
     */
    public static function delete_specs_transient()
    {
    }
    /**
     * Get specs or fetch remotely if they don't exist.
     */
    public static function get_specs()
    {
    }
    /**
     * Localize the provided method.
     *
     * @param array $specs The specs to localize.
     * @return array Localized specs.
     */
    public static function localize($specs)
    {
    }
}