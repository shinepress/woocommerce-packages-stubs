<?php

namespace Automattic\WooCommerce\Admin;

/**
 * Class PluginsHelper
 */
class PluginsHelper
{
    /**
     * Get the path to the plugin file relative to the plugins directory from the plugin slug.
     *
     * E.g. 'woocommerce' returns 'woocommerce/woocommerce.php'
     *
     * @param string $slug Plugin slug to get path for.
     *
     * @return string|false
     */
    public static function get_plugin_path_from_slug($slug)
    {
    }
    /**
     * Get an array of installed plugin slugs.
     *
     * @return array
     */
    public static function get_installed_plugin_slugs()
    {
    }
    /**
     * Get an array of active plugin slugs.
     *
     * @return array
     */
    public static function get_active_plugin_slugs()
    {
    }
    /**
     * Checks if a plugin is installed.
     *
     * @param string $plugin Path to the plugin file relative to the plugins directory or the plugin directory name.
     *
     * @return bool
     */
    public static function is_plugin_installed($plugin)
    {
    }
    /**
     * Checks if a plugin is active.
     *
     * @param string $plugin Path to the plugin file relative to the plugins directory or the plugin directory name.
     *
     * @return bool
     */
    public static function is_plugin_active($plugin)
    {
    }
    /**
     * Get plugin data.
     *
     * @param string $plugin Path to the plugin file relative to the plugins directory or the plugin directory name.
     *
     * @return array|false
     */
    public static function get_plugin_data($plugin)
    {
    }
}