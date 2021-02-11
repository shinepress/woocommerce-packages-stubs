<?php

namespace Automattic\WooCommerce\Blocks;

/**
 * Assets class.
 * Initializes block assets.
 *
 * @internal
 */
class Assets
{
    /**
     * Initialize class features on init.
     *
     * @since 2.5.0
     * Moved most initialization to BootStrap and AssetDataRegistry
     * classes as a part of ongoing refactor
     */
    public static function init()
    {
    }
    /**
     * Register block scripts & styles.
     *
     * @since 2.5.0
     * Moved data related enqueuing to new AssetDataRegistry class
     * as part of ongoing refactoring.
     */
    public static function register_assets()
    {
    }
    /**
     * Add body classes.
     *
     * @param array $classes Array of CSS classnames.
     * @return array Modified array of CSS classnames.
     */
    public static function add_theme_body_class($classes = [])
    {
    }
    /**
     * Add theme class to admin body.
     *
     * @param array $classes String with the CSS classnames.
     * @return array Modified string of CSS classnames.
     */
    public static function add_theme_admin_body_class($classes = '')
    {
    }
    /**
     * Returns block-related data for enqueued wc-block-settings script.
     *
     * This is used to map site settings & data into JS-accessible variables.
     *
     * @param array $settings The original settings array from the filter.
     *
     * @since 2.4.0
     * @since 2.5.0 returned merged data along with incoming $settings
     */
    public static function get_wc_block_data($settings)
    {
    }
    /**
     * Format a page object into a standard array of data.
     *
     * @param WP_Post|int $page Page object or ID.
     * @return array
     */
    protected static function format_page_resource($page)
    {
    }
    /**
     * Get the file modified time as a cache buster if we're in dev mode.
     *
     * @param string $file Local path to the file.
     * @return string The cache buster value to use for the given file.
     */
    protected static function get_file_version($file)
    {
    }
    /**
     * Queues a block script in the frontend.
     *
     * @since 2.3.0
     * @since 2.6.0 Changed $name to $script_name and added $handle argument.
     * @since 2.9.0 Made it so scripts are not loaded in admin pages.
     *
     * @param string $script_name  Name of the script used to identify the file inside build folder.
     * @param string $handle       Optional. Provided if the handle should be different than the script name. `wc-` prefix automatically added.
     * @param array  $dependencies Optional. An array of registered script handles this script depends on. Default empty array.
     */
    public static function register_block_script($script_name, $handle = '', $dependencies = [])
    {
    }
    /**
     * Registers a style according to `wp_register_style`.
     *
     * @since 2.0.0
     *
     * @param string $handle Name of the stylesheet. Should be unique.
     * @param string $src    Full URL of the stylesheet, or path of the stylesheet relative to the WordPress root directory.
     * @param array  $deps   Optional. An array of registered stylesheet handles this stylesheet depends on. Default empty array.
     * @param string $media  Optional. The media for which this stylesheet has been defined. Default 'all'. Accepts media types like
     *                       'all', 'print' and 'screen', or media queries like '(orientation: portrait)' and '(max-width: 640px)'.
     */
    protected static function register_style($handle, $src, $deps = [], $media = 'all')
    {
    }
}