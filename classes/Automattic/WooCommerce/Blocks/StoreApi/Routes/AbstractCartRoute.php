<?php

namespace Automattic\WooCommerce\Blocks\StoreApi\Routes;

/**
 * Abstract Cart Route
 *
 * @internal This API is used internally by Blocks--it is still in flux and may be subject to revisions.
 */
abstract class AbstractCartRoute extends \Automattic\WooCommerce\Blocks\StoreApi\Routes\AbstractRoute
{
    /**
     * Schema class for this route's response.
     *
     * @var AbstractSchema|CartSchema
     */
    protected $schema;
    /**
     * Schema class for the cart.
     *
     * @var CartSchema
     */
    protected $cart_schema;
    /**
     * Cart controller class instance.
     *
     * @var CartController
     */
    protected $cart_controller;
    /**
     * Constructor accepts two types of schema; one for the item being returned, and one for the cart as a whole. These
     * may be the same depending on the route.
     *
     * @param CartSchema     $cart_schema Schema class for the cart.
     * @param AbstractSchema $item_schema Schema class for this route's items if it differs from the cart schema.
     * @param CartController $cart_controller Cart controller class.
     */
    public function __construct(\Automattic\WooCommerce\Blocks\StoreApi\Schemas\CartSchema $cart_schema, \Automattic\WooCommerce\Blocks\StoreApi\Schemas\AbstractSchema $item_schema = null, \Automattic\WooCommerce\Blocks\StoreApi\Utilities\CartController $cart_controller)
    {
    }
    /**
     * Get the route response based on the type of request.
     *
     * @param \WP_REST_Request $request Request object.
     * @return \WP_Error|\WP_REST_Response
     */
    public function get_response(\WP_REST_Request $request)
    {
    }
    /**
     * Checks if a nonce is required for the route.
     *
     * @param \WP_REST_Request $request Request.
     * @return bool
     */
    protected function requires_nonce(\WP_REST_Request $request)
    {
    }
    /**
     * Ensures the cart totals are calculated before an API response is generated.
     */
    protected function calculate_totals()
    {
    }
    /**
     * If there is a draft order, releases stock.
     *
     * @return void
     */
    protected function maybe_release_stock()
    {
    }
    /**
     * For non-GET endpoints, require and validate a nonce to prevent CSRF attacks.
     *
     * Nonces will mismatch if the logged in session cookie is different! If using a client to test, set this cookie
     * to match the logged in cookie in your browser.
     *
     * @throws RouteException On error.
     *
     * @param \WP_REST_Request $request Request object.
     */
    protected function check_nonce(\WP_REST_Request $request)
    {
    }
    /**
     * Get route response when something went wrong.
     *
     * @param string $error_code String based error code.
     * @param string $error_message User facing error message.
     * @param int    $http_status_code HTTP status. Defaults to 500.
     * @param array  $additional_data  Extra data (key value pairs) to expose in the error response.
     * @return \WP_Error WP Error object.
     */
    protected function get_route_error_response($error_code, $error_message, $http_status_code = 500, $additional_data = [])
    {
    }
}