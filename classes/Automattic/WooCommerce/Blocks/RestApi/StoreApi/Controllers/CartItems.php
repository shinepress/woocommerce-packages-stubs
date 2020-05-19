<?php

namespace Automattic\WooCommerce\Blocks\RestApi\StoreApi\Controllers;

/**
 * Cart API.
 *
 * @since 2.5.0
 */
class CartItems extends \WP_REST_Controller
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
    protected $rest_base = 'cart/items';
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
     * Get a collection of cart items.
     *
     * @param \WP_REST_Request $request Full details about the request.
     * @return \WP_Error|\WP_REST_Response
     */
    public function get_items($request)
    {
    }
    /**
     * Get a single cart items.
     *
     * @param \WP_REST_Request $request Full details about the request.
     * @return \WP_Error|\WP_REST_Response
     */
    public function get_item($request)
    {
    }
    /**
     * Creates one item from the collection.
     *
     * @param \WP_REST_Request $request Full data about the request.
     * @return \WP_Error|\WP_REST_Response Response object on success, or WP_Error object on failure.
     */
    public function create_item($request)
    {
    }
    /**
     * Update a single cart item.
     *
     * @param \WP_Rest_Request $request Full data about the request.
     * @return \WP_Error|\WP_REST_Response Response object on success, or WP_Error object on failure.
     */
    public function update_item($request)
    {
    }
    /**
     * Delete a single cart item.
     *
     * @param \WP_Rest_Request $request Full data about the request.
     * @return \WP_Error|\WP_REST_Response Response object on success, or WP_Error object on failure.
     */
    public function delete_item($request)
    {
    }
    /**
     * Deletes all items in the cart.
     *
     * @param \WP_Rest_Request $request Full data about the request.
     * @return \WP_Error|\WP_REST_Response Response object on success, or WP_Error object on failure.
     */
    public function delete_items($request)
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
     * @param array            $cart_item    Cart item array.
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response Response object.
     */
    public function prepare_item_for_response($cart_item, $request)
    {
    }
}