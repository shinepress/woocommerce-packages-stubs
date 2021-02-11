<?php

namespace Automattic\WooCommerce\Admin\Features;

/**
 * Contains backend logic for the homescreen feature.
 */
class Homescreen
{
    /**
     * Menu slug.
     */
    const MENU_SLUG = 'wc-admin';
    /**
     * Class instance.
     *
     * @var Homescreen instance
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
     * Adds fields so that we can store performance indicators, row settings, and chart type settings for users.
     *
     * @param array $user_data_fields User data fields.
     * @return array
     */
    public function add_user_data_fields($user_data_fields)
    {
    }
    /**
     * Registers home page.
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
    /**
     * Gets an array of plugins that can be installed & activated via the home screen.
     *
     * @param array $plugins Array of plugin slugs to be allowed.
     *
     * @return array
     */
    public static function get_homescreen_allowed_plugins($plugins)
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
     * Add data to the shared component settings.
     *
     * @param array $settings Shared component settings.
     */
    public function component_settings($settings)
    {
    }
}