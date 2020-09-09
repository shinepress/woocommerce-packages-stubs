<?php

namespace Automattic\WooCommerce\Admin\Features;

/**
 * Contains backend logic for the activity panel feature.
 */
class ActivityPanels
{
    /**
     * Class instance.
     *
     * @var ActivityPanels instance
     */
    protected static $instance = null;
    /**
     * Low Stock Transient Name.
     */
    const LOW_STOCK_TRANSIENT_NAME = 'woocommerce_admin_low_out_of_stock_count';
    /**
     * Get class instance.
     */
    public static function get_instance()
    {
    }
    /**
     * Hook into WooCommerce.
     */
    public function __construct()
    {
    }
    /**
     * Adds fields so that we can store activity panel last read and open times.
     *
     * @param array $user_data_fields User data fields.
     * @return array
     */
    public function add_user_data_fields($user_data_fields)
    {
    }
    /**
     * Determines if there are out of stock or low stock products.
     *
     * @return boolean
     */
    public function has_low_stock_products()
    {
    }
    /**
     * Clears transient for out of stock indicator
     *
     * @return boolean
     */
    public static function clear_low_out_of_stock_count_transient()
    {
    }
    /**
     * Add alert count to the component settings.
     *
     * @param array $settings Component settings.
     */
    public function component_settings($settings)
    {
    }
}