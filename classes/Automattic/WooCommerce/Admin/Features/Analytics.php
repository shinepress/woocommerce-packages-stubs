<?php

namespace Automattic\WooCommerce\Admin\Features;

/**
 * Contains backend logic for the Analytics feature.
 */
class Analytics
{
    /**
     * Option name used to toggle this feature.
     */
    const TOGGLE_OPTION_NAME = 'woocommerce_analytics_enabled';
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
     * Add the feature toggle to the features settings.
     *
     * @param array $features Feature sections.
     * @return array
     */
    public static function add_feature_toggle($features)
    {
    }
    /**
     * Reloads the page when the option is toggled to make sure all Analytics features are loaded.
     *
     * @param string $old_value Old value.
     * @param string $value     New value.
     */
    public static function reload_page_on_toggle($old_value, $value)
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