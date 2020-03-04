<?php

namespace Automattic\WooCommerce\Blocks\Domain;

/**
 * Takes care of bootstrapping the plugin.
 *
 * @since 2.5.0
 */
class Bootstrap
{
    /**
     * Holds the Dependency Injection Container
     *
     * @var Container
     */
    private $container;
    /**
     * Holds the Package instance
     *
     * @var Package
     */
    private $package;
    /**
     * Constructor
     *
     * @param Container $container  The Dependency Injection Container.
     */
    public function __construct(\Automattic\WooCommerce\Blocks\Registry\Container $container)
    {
    }
    /**
     * Init the package - load the blocks library and define constants.
     */
    public function init()
    {
    }
    /**
     * Check dependencies exist.
     *
     * @return boolean
     */
    protected function has_dependencies()
    {
    }
    /**
     * See if files have been built or not.
     *
     * @return bool
     */
    protected function is_built()
    {
    }
    /**
     * Add a notice stating that the build has not been done yet.
     */
    protected function add_build_notice()
    {
    }
    /**
     * Remove core blocks.
     *
     * Older installs of WooCommerce (3.6 and below) did not use the blocks package and instead included classes directly.
     * This code disables those core classes when running blocks as a feature plugin. Newer versions which use the Blocks package are unaffected.
     *
     * When the feature plugin supports only WooCommerce 3.7+ this method can be removed.
     */
    protected function remove_core_blocks()
    {
    }
}