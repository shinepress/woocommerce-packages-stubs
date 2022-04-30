<?php

namespace Automattic\WooCommerce\Blocks;

/**
 * RestApi class.
 * Registers controllers in the blocks REST API namespace.
 *
 * @internal This API is used internally by Blocks--it is still in flux and may be subject to revisions.
 */
class RestApi
{
    /**
     * Stores Rest Routes instance
     *
     * @var RoutesController
     */
    private $routes;
    /**
     * Constructor
     *
     * @param RoutesController $routes Rest Routes instance.
     */
    public function __construct(\Automattic\WooCommerce\Blocks\StoreApi\RoutesController $routes)
    {
    }
    /**
     * Initialize class features.
     */
    protected function init()
    {
    }
    /**
     * Register REST API routes.
     */
    public function register_rest_routes()
    {
    }
    /**
     * Get routes for a namespace.
     *
     * @param string $namespace Namespace to retrieve.
     * @return array
     */
    public function get_routes_from_namespace($namespace)
    {
    }
    /**
     * The Store API does not require authentication.
     *
     * @param \WP_Error|mixed $result Error from another authentication handler, null if we should handle it, or another value if not.
     * @return \WP_Error|null|bool
     */
    public function store_api_authentication($result)
    {
    }
    /**
     * When the login cookies are set, they are not available until the next page reload. For the Store API, specifically
     * for returning updated nonces, we need this to be available immediately.
     *
     * @param string $logged_in_cookie The value for the logged in cookie.
     */
    public function store_api_logged_in_cookie($logged_in_cookie)
    {
    }
    /**
     * Check if is request to the Store API.
     *
     * @return bool
     */
    protected function is_request_to_store_api()
    {
    }
}