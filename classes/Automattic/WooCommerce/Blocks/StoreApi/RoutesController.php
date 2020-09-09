<?php

namespace Automattic\WooCommerce\Blocks\StoreApi;

/**
 * RoutesController class.
 */
class RoutesController
{
    /**
     * Stores schemas.
     *
     * @var SchemaController
     */
    protected $schemas;
    /**
     * Stores routes.
     *
     * @var AbstractRoute[]
     */
    protected $routes = [];
    /**
     * Constructor.
     *
     * @param SchemaController $schemas Schema controller class passed to each route.
     */
    public function __construct(\Automattic\WooCommerce\Blocks\StoreApi\SchemaController $schemas)
    {
    }
    /**
     * Get a route class instance.
     *
     * @throws Exception If the schema does not exist.
     *
     * @param string $name Name of schema.
     * @return AbstractRoute
     */
    public function get($name)
    {
    }
    /**
     * Register defined list of routes with WordPress.
     */
    public function register_routes()
    {
    }
    /**
     * Load route class instances.
     */
    protected function initialize()
    {
    }
}