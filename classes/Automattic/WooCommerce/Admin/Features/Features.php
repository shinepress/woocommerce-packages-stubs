<?php

namespace Automattic\WooCommerce\Admin\Features;

/**
 * Features Class.
 */
class Features
{
    /**
     * Class instance.
     *
     * @var Loader instance
     */
    protected static $instance = null;
    /**
     * Get class instance.
     */
    public static function get_instance()
    {
    }
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Gets a build configured array of enabled WooCommerce Admin features/sections.
     *
     * @return array Enabled Woocommerce Admin features/sections.
     */
    public static function get_features()
    {
    }
    /**
     * Gets the beta feature options as an associative array that can be toggled on or off.
     *
     * @return array
     */
    public static function get_beta_feature_options()
    {
    }
    /**
     * Returns if a specific wc-admin feature exists in the current environment.
     *
     * @param  string $feature Feature slug.
     * @return bool Returns true if the feature exists.
     */
    public static function exists($feature)
    {
    }
    /**
     * Get the feature class as a string.
     *
     * @param string $feature Feature name.
     * @return string|null
     */
    public static function get_feature_class($feature)
    {
    }
    /**
     * Class loader for enabled WooCommerce Admin features/sections.
     */
    public static function load_features()
    {
    }
    /**
     * Check if a feature is enabled.  Defaults to true for all features unless they are in beta.
     *
     * @param string $feature Feature slug.
     * @return bool
     */
    public static function is_enabled($feature)
    {
    }
    /**
     * Disable a toggleable beta feature.
     *
     * @param string $feature Feature name.
     * @return bool
     */
    public static function disable($feature)
    {
    }
    /**
     * Disable features when opting out of tracking.
     *
     * @param string $old_value Old value.
     * @param string $value New value.
     */
    public static function maybe_disable_features($old_value, $value)
    {
    }
    /**
     * Adds the Features section to the advanced tab of WooCommerce Settings
     *
     * @param array $sections Sections.
     * @return array
     */
    public static function add_features_section($sections)
    {
    }
    /**
     * Adds the Features settings.
     *
     * @param array  $settings Settings.
     * @param string $current_section Current section slug.
     * @return array
     */
    public static function add_features_settings($settings, $current_section)
    {
    }
    /**
     * Conditionally loads the beta features tracking modal.
     *
     * @param array $settings Settings.
     * @return array
     */
    public static function maybe_load_beta_features_modal($settings)
    {
    }
    /**
     * Loads the required scripts on the correct pages.
     */
    public static function load_scripts()
    {
    }
    /**
     * Adds body classes to the main wp-admin wrapper, allowing us to better target elements in specific scenarios.
     *
     * @param string $admin_body_class Body class to add.
     */
    public static function add_admin_body_classes($admin_body_class = '')
    {
    }
}