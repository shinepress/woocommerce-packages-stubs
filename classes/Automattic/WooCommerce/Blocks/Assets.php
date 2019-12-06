<?php

namespace Automattic\WooCommerce\Blocks;

/**
 * Assets class.
 */
class Assets
{
    /**
     * Initialize class features on init.
     */
    public static function init()
    {
    }
    /**
     * Register block scripts & styles.
     */
    public static function register_assets()
    {
    }
    /**
     * Print wcSettings in all pages. This is a temporary fix until we find a better
     * solution to share settings between WooCommerce Admin and WooCommerce Blocks.
     * See https://github.com/woocommerce/woocommerce-gutenberg-products-block/issues/932
     */
    public static function print_shared_settings()
    {
    }
    /**
     * Attach data to registered assets using inline scripts.
     */
    public static function maybe_add_asset_data()
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
     * Returns javascript to inject as data for enqueued wc-shared-settings script.
     *
     * @return string;
     * @since 2.4.0
     */
    protected static function get_wc_settings_data()
    {
    }
    /**
     * Returns block-related data for enqueued wc-shared-settings script.
     *
     * This is used to map site settings & data into JS-accessible variables.
     *
     * @since 2.4.0
     */
    protected static function get_wc_block_data()
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
     * Registers a script according to `wp_register_script`, additionally loading the translations for the file.
     *
     * @since 2.0.0
     *
     * @param string $handle    Name of the script. Should be unique.
     * @param string $src       Full URL of the script, or path of the script relative to the WordPress root directory.
     * @param array  $deps      Optional. An array of registered script handles this script depends on. Default empty array.
     * @param bool   $has_i18n  Optional. Whether to add a script translation call to this file. Default 'true'.
     */
    protected static function register_script($handle, $src, $deps = [], $has_i18n = true)
    {
    }
    /**
     * Queues a block script.
     *
     * @since 2.3.0
     *
     * @param string $name Name of the script used to identify the file inside build folder.
     */
    public static function register_block_script($name)
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