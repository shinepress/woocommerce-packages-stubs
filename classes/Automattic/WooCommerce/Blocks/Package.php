<?php

namespace Automattic\WooCommerce\Blocks;

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
    const VERSION = '2.4.5';
    /**
     * Stores if init has ran yet.
     *
     * @var boolean
     */
    protected static $did_init = false;
    /**
     * Init the package - load the blocks library and define constants.
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
     * Return the path to the package.
     *
     * @return string
     */
    public static function get_path()
    {
    }
    /**
     * Check dependencies exist.
     *
     * @return boolean
     */
    protected static function has_dependencies()
    {
    }
    /**
     * See if files have been built or not.
     *
     * @return bool
     */
    protected static function is_built()
    {
    }
    /**
     * Add a notice stating that the build has not been done yet.
     */
    protected static function add_build_notice()
    {
    }
    /**
     * Remove core blocks (for 3.6 and below).
     */
    protected static function remove_core_blocks()
    {
    }
}