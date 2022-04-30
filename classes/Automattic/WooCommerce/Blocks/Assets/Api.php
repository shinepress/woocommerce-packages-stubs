<?php

namespace Automattic\WooCommerce\Blocks\Assets;

/**
 * The Api class provides an interface to various asset registration helpers.
 *
 * Contains asset api methods
 *
 * @since 2.5.0
 */
class Api
{
    /**
     * Stores inline scripts already enqueued.
     *
     * @var array
     */
    private $inline_scripts = [];
    /**
     * Reference to the Package instance
     *
     * @var Package
     */
    private $package;
    /**
     * Constructor for class
     *
     * @param Package $package An instance of Package.
     */
    public function __construct(\Automattic\WooCommerce\Blocks\Domain\Package $package)
    {
    }
    /**
     * Get the file modified time as a cache buster if we're in dev mode.
     *
     * @param string $file Local path to the file (relative to the plugin
     *                     directory).
     * @return string The cache buster value to use for the given file.
     */
    protected function get_file_version($file)
    {
    }
    /**
     * Retrieve the url to an asset for this plugin.
     *
     * @param string $relative_path An optional relative path appended to the
     *                              returned url.
     *
     * @return string
     */
    protected function get_asset_url($relative_path = '')
    {
    }
    /**
     * Registers a script according to `wp_register_script`, additionally
     * loading the translations for the file.
     *
     * @since 2.5.0
     *
     * @param string $handle        Name of the script. Should be unique.
     * @param string $relative_src  Relative url for the script to the path
     *                              from plugin root.
     * @param array  $dependencies  Optional. An array of registered script
     *                              handles this script depends on. Default
     *                              empty array.
     * @param bool   $has_i18n      Optional. Whether to add a script
     *                              translation call to this file. Default:
     *                              true.
     *
     * @throws Exception If the registered script has a dependency on itself.
     */
    public function register_script($handle, $relative_src, $dependencies = [], $has_i18n = true)
    {
    }
    /**
     * Registers a style according to `wp_register_style`.
     *
     * @since 2.5.0
     * @since 2.6.0 Change src to be relative source.
     *
     * @param string $handle       Name of the stylesheet. Should be unique.
     * @param string $relative_src Relative source of the stylesheet to the plugin path.
     * @param array  $deps         Optional. An array of registered stylesheet handles this stylesheet depends on. Default empty array.
     * @param string $media        Optional. The media for which this stylesheet has been defined. Default 'all'. Accepts media types like
     *                             'all', 'print' and 'screen', or media queries like '(orientation: portrait)' and '(max-width: 640px)'.
     */
    public function register_style($handle, $relative_src, $deps = [], $media = 'all')
    {
    }
    /**
     * Returns the appropriate asset path for loading either legacy builds or
     * current builds.
     *
     * @param   string $filename  Filename for asset path (without extension).
     * @param   string $type      File type (.css or .js).
     *
     * @return  string             The generated path.
     */
    public function get_block_asset_build_path($filename, $type = 'js')
    {
    }
    /**
     * Adds an inline script, once.
     *
     * @param string $handle Script handle.
     * @param string $script Script contents.
     */
    public function add_inline_script($handle, $script)
    {
    }
}