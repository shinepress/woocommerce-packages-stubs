<?php

namespace Automattic\WooCommerce\Admin\Features\WcPayPromotion;

/**
 * Specs data source poller class for WooCommerce Payment Promotion.
 */
class WcPayPromotionDataSourcePoller extends \Automattic\WooCommerce\Admin\DataSourcePoller
{
    const ID = 'payment_method_promotion';
    /**
     * Default data sources array.
     */
    const DATA_SOURCES = array('https://woocommerce.com/wp-json/wccom/payment-gateway-suggestions/1.0/payment-method/promotions.json');
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
}