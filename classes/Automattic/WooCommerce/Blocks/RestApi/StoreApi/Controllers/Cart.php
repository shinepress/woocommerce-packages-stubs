<?php

namespace Automattic\WooCommerce\Blocks\RestApi\StoreApi\Controllers;

/**
 * Cart API.
 *
 * @since 2.5.0
 */
class Cart extends \WP_REST_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/store';
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'cart';
    /**
     * Schema class instance.
     *
     * @var object
     */
    protected $schema;
    /**
     * Setup API class.
     */
    public function __construct()
    {
    }
    /**
     * Register routes.
     */
    public function register_routes()
    {
    }
    /**
     * Get the cart.
     *
     * @param \WP_REST_Request $request Full details about the request.
     * @return \WP_Error|\WP_REST_Response
     */
    public function get_item($request)
    {
    }
    /**
     * Cart item schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
    }
    /**
     * Prepares a single item output for response.
     *
     * @param array            $cart    Cart array.
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response Response object.
     */
    public function prepare_item_for_response($cart, $request)
    {
    }
}