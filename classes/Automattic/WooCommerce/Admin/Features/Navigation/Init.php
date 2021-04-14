<?php

namespace Automattic\WooCommerce\Admin\Features\Navigation;

/**
 * Contains logic for the Navigation
 */
class Init
{
    /**
     * Option name used to toggle this feature.
     */
    const TOGGLE_OPTION_NAME = 'woocommerce_navigation_enabled';
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
     * Determine if sufficient versions are present to support Navigation feature
     */
    public function is_nav_compatible()
    {
    }
    /**
     * Overwrites the allowed features array using a local `feature-config.php` file.
     *
     * @param array $features Array of feature slugs.
     */
    public function maybe_remove_nav_feature($features)
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
     * Reloads the page when the option is toggled to make sure all nav features are loaded.
     *
     * @param string $old_value Old value.
     * @param string $value     New value.
     */
    public static function reload_page_on_toggle($old_value, $value)
    {
    }
    /**
     * Enqueue the opt out scripts.
     */
    public function maybe_enqueue_opt_out_scripts()
    {
    }
}