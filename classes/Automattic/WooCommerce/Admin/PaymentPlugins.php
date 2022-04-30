<?php

namespace Automattic\WooCommerce\Admin;

/**
 * Contains backend logic for retrieving payment plugin recommendations.
 */
class PaymentPlugins
{
    /**
     * Name of recommended plugins filter.
     */
    const FILTER_NAME = 'woocommerce_admin_recommended_payment_plugins';
    /**
     * Name of recommended plugins transient.
     *
     * @var string
     */
    const RECOMMENDED_PLUGINS_TRANSIENT = 'wc_recommended_payment_plugins';
    /**
     * Class instance.
     *
     * @var PaymentPlugins instance
     */
    protected static $instance = null;
    /**
     * Get class instance.
     */
    public static function get_instance()
    {
    }
    /**
     * Load recommended payment plugins from WooCommerce.com
     *
     * @return array
     */
    public function get_recommended_plugins()
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