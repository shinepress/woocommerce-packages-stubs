<?php

namespace Automattic\WooCommerce\StoreApi\Routes\V1;

/**
 * Abstract Cart Route
 */
abstract class AbstractCartRoute extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractRoute
{
    use \Automattic\WooCommerce\StoreApi\Utilities\DraftOrderTrait;
    /**
     * The routes schema.
     *
     * @var string
     */
    const SCHEMA_TYPE = 'cart';
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
     * Order controller class instance.
     *
     * @var OrderController
     */
    protected $order_controller;
    /**
     * Constructor.
     *
     * @param SchemaController $schema_controller Schema Controller instance.
     * @param AbstractSchema   $schema Schema class for this route.
     */
    public function __construct(\Automattic\WooCommerce\StoreApi\SchemaController $schema_controller, \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema $schema)
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
     * Add nonce headers to a response object.
     *
     * @param \WP_REST_Response $response The response object.
     * @return \WP_REST_Response
     */
    protected function add_nonce_headers(\WP_REST_Response $response)
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
     * Triggered after an update to cart data. Re-calculates totals and updates draft orders (if they already exist) to
     * keep all data in sync.
     *
     * @param \WP_REST_Request $request Request object.
     */
    protected function cart_updated(\WP_REST_Request $request)
    {
    }
    /**
     * Ensures the cart totals are calculated before an API response is generated.
     */
    protected function calculate_totals()
    {
    }
    /**
     * For non-GET endpoints, require and validate a nonce to prevent CSRF attacks.
     *
     * Nonces will mismatch if the logged in session cookie is different! If using a client to test, set this cookie
     * to match the logged in cookie in your browser.
     *
     * @param \WP_REST_Request $request Request object.
     * @return \WP_Error|boolean
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