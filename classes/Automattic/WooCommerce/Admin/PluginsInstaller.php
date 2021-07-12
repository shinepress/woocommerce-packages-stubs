<?php

namespace Automattic\WooCommerce\Admin;

/**
 * Class PluginsInstaller
 */
class PluginsInstaller
{
    /**
     * Message option name.
     */
    const MESSAGE_OPTION = 'woocommerce_admin_plugin_installer_message';
    /**
     * Constructor
     */
    public static function init()
    {
    }
    /**
     * Check if an install or activation is being requested via URL query.
     */
    public static function possibly_install_activate_plugins()
    {
    }
    /**
     * Display the results of installation and activation on the page.
     *
     * @param array $install_result Result of installation.
     * @param array $activate_result Result of activation.
     */
    public static function cache_results($install_result, $activate_result)
    {
    }
    /**
     * Display the results of installation and activation on the page.
     */
    public static function display_message()
    {
    }
    /**
     * Redirect back to the referring page if one exists.
     */
    public static function redirect_to_referer()
    {
    }
}