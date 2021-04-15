<?php

namespace Automattic\WooCommerce\Admin\Features;

/**
 * Contains backend logic for the Analytics feature.
 */
class Analytics
{
    /**
     * Clear cache tool identifier.
     */
    const CACHE_TOOL_ID = 'clear_woocommerce_analytics_cache';
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
     * Register the cache clearing tool on the WooCommerce > Status > Tools page.
     *
     * @param array $debug_tools Available debug tool registrations.
     * @return array Filtered debug tool registrations.
     */
    public function register_cache_clear_tool($debug_tools)
    {
    }
    /**
     * Registers report pages.
     */
    public function register_pages()
    {
    }
    /**
     * Get report pages.
     */
    public static function get_report_pages()
    {
    }
    /**
     * "Clear" analytics cache by invalidating it.
     */
    public function run_clear_cache_tool()
    {
    }
}