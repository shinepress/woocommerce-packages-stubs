<?php

namespace Automattic\WooCommerce\Blocks;

/**
 * RestApi class.
 */
class RestApi
{
    /**
     * Constructor
     */
    public function __construct()
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
     * @return array|null
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
     * Check if is request to the Store API.
     *
     * @return bool
     */
    protected function is_request_to_store_api()
    {
    }
}