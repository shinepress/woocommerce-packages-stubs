<?php

namespace Automattic\WooCommerce\Blocks;

/**
 * RestApi class.
 */
class RestApi
{
    /**
     * Initialize class features.
     */
    public static function init()
    {
    }
    /**
     * Register REST API routes.
     */
    public static function register_rest_routes()
    {
    }
    /**
     * Get routes for a namespace.
     *
     * @param string $namespace Namespace to retrieve.
     * @return array|null
     */
    public static function get_routes_from_namespace($namespace)
    {
    }
    /**
     * If we're making a cart request, we may need to load some additonal classes from WC Core so we're ready to deal with requests.
     *
     * Note: We load the session here early so guest nonces are in place.
     *
     * @todo check compat < WC 3.6. Make specific to cart endpoint.
     * @param mixed $return Value being filtered.
     * @return mixed
     */
    public static function maybe_init_cart_session($return)
    {
    }
    /**
     * Return a list of controller classes for this REST API namespace.
     *
     * @return array
     */
    protected static function get_controllers()
    {
    }
}