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
    const VERSION = '2.2.6';
    /**
     * Package active.
     *
     * @var bool
     */
    private static $package_active = false;
    /**
     * Active version
     *
     * @var bool
     */
    private static $active_version = null;
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
    /**
     * Checks if embedded WCA version is newer than standalone WCA
     * and adds/removes DeactivatePlugin note as necessary.
     */
    public static function check_outdated_wca_plugin()
    {
    }
    /**
     * Checks if notes have been initialized.
     */
    private static function is_notes_initialized()
    {
    }
}