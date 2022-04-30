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
    protected function init()
    {
    }
    /**
     * Check core dependencies exist.
     *
     * @return boolean
     */
    protected function has_core_dependencies()
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
     * Register core dependencies with the container.
     */
    protected function register_dependencies()
    {
    }
    /**
     * Register payment method integrations with the container.
     */
    protected function register_payment_methods()
    {
    }
}