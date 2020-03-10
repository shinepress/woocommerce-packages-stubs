<?php

namespace Automattic\WooCommerce\Admin\Composer;

/**
 * Main package class.
 */
class Package
{
    /**
     * Version.
     *
     * @var string
     */
    const VERSION = '1.0.0';
    /**
     * Package active.
     *
     * @var bool
     */
    private static $package_active = false;
    /**
     * Init the package.
     *
     * Only initialize for WP 5.3 or greater.
     */
    public static function init()
    {
    }
    /**
     * Return the version of the package.
     *
     * @return string
     */
    public static function get_version()
    {
    }
    /**
     * Return the active version of WC Admin.
     *
     * @return string
     */
    public static function get_active_version()
    {
    }
    /**
     * Return whether the package is active.
     *
     * @return bool
     */
    public static function is_package_active()
    {
    }
    /**
     * Return the path to the package.
     *
     * @return string
     */
    public static function get_path()
    {
    }
    /**
     * Add deactivation hook for versions of the plugin that don't have the deactivation note.
     */
    public static function on_deactivation()
    {
    }
}