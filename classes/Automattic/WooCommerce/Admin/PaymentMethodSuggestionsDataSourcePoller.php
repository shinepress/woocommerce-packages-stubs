<?php

namespace Automattic\WooCommerce\Admin;

/**
 * Specs data source poller class for payment gateway suggestions.
 */
class PaymentMethodSuggestionsDataSourcePoller extends \Automattic\WooCommerce\Admin\DataSourcePoller
{
    const ID = 'payment_method_suggestions';
    /**
     * Option name for dismissed payment method suggestions.
     */
    const RECOMMENDED_PAYMENT_PLUGINS_DISMISS_OPTION = 'woocommerce_setting_payments_recommendations_hidden';
    /**
     * Default data sources array.
     */
    const DATA_SOURCES = array('https://woocommerce.com/wp-json/wccom/payment-gateway-suggestions/1.0/payment-method/suggestions.json');
    /**
     * Class instance.
     *
     * @var Analytics instance
     */
    protected static $instance = null;
    /**
     * Get class instance.
     */
    public static function get_instance()
    {
    }
    /**
     * Gets the payment method suggestions after validating the specs.
     *
     * @return array visible specs.
     */
    public function get_suggestions()
    {
    }
    /**
     * Should recommendations be displayed?
     *
     * @return bool
     */
    private function allow_recommendations()
    {
    }
}