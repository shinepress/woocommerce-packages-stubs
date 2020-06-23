<?php

namespace Automattic\WooCommerce\Admin\Features;

/**
 * Contains backend logic for the Analytics feature.
 */
class Analytics
{
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
     * Hook into WooCommerce.
     */
    public function __construct()
    {
    }
    /**
     * Preload data from the countries endpoint.
     *
     * @param array $endpoints Array of preloaded endpoints.
     * @return array
     */
    public function add_preload_endpoints($endpoints)
    {
    }
    /**
     * Adds fields so that we can store user preferences for the columns to display on a report.
     *
     * @param array $user_data_fields User data fields.
     * @return array
     */
    public function add_user_data_fields($user_data_fields)
    {
    }
    /**
     * Registers report pages.
     */
    public function register_pages()
    {
    }
}