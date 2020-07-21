<?php

namespace Automattic\WooCommerce\Admin\Features;

/**
 * Contains backend logic for the dashboard feature.
 */
class AnalyticsDashboard
{
    /**
     * Menu slug.
     */
    const MENU_SLUG = 'wc-admin';
    /**
     * Class instance.
     *
     * @var AnalyticsDashboard instance
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
     * Preload data from API endpoints.
     *
     * @param array $endpoints Array of preloaded endpoints.
     * @return array
     */
    public function add_preload_endpoints($endpoints)
    {
    }
    /**
     * Adds fields so that we can store performance indicators, row settings, and chart type settings for users.
     *
     * @param array $user_data_fields User data fields.
     * @return array
     */
    public function add_user_data_fields($user_data_fields)
    {
    }
    /**
     * Preload options to prime state of the application.
     *
     * @param array $options Array of options to preload.
     * @return array
     */
    public function preload_options($options)
    {
    }
    /**
     * Registers dashboard page.
     */
    public function register_page()
    {
    }
    /**
     * Update the WooCommerce menu structure to make our main dashboard/handler
     * the top level link for 'WooCommerce'.
     */
    public function update_link_structure()
    {
    }
}