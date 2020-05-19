<?php

namespace Automattic\WooCommerce\Blocks\RestApi\Controllers;

/**
 * Cart API.
 */
class Cart extends \WP_REST_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/blocks';
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'cart';
    /**
     * Register routes.
     */
    public function register_routes()
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
     * Adds an item to the cart.
     *
     * @param \WP_REST_Request $request Full details about the request.
     * @return \WP_Error|\WP_REST_Response
     */
    public function add_item($request)
    {
    }
    /**
     * Convert a woo cart item to JSON schema.
     *
     * @param array $cart_item Cart item array.
     * @return array
     */
    protected function get_object_for_response($cart_item)
    {
    }
    /**
     * Based on the core cart class but returns errors rather than rendering notices directly.
     *
     * @param int   $product_id contains the id of the product to add to the cart.
     * @param int   $quantity contains the quantity of the item to add.
     * @param int   $variation_id ID of the variation being added to the cart.
     * @param array $variation attribute values.
     * @param array $cart_item_data extra cart item data we want to pass into the item.
     * @return string|\WP_Error
     */
    protected function add_to_cart($product_id = 0, $quantity = 1, $variation_id = 0, $variation = array(), $cart_item_data = array())
    {
    }
}