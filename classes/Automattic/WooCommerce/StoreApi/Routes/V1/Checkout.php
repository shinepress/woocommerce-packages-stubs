<?php

namespace Automattic\WooCommerce\StoreApi\Routes\V1;

/**
 * Checkout class.
 */
class Checkout extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractCartRoute
{
    use \Automattic\WooCommerce\StoreApi\Utilities\DraftOrderTrait;
    /**
     * The route identifier.
     *
     * @var string
     */
    const IDENTIFIER = 'checkout';
    /**
     * The routes schema.
     *
     * @var string
     */
    const SCHEMA_TYPE = 'checkout';
    /**
     * Get the path of this REST route.
     *
     * @return string
     */
    public function get_path()
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
     * Get method arguments for this REST route.
     *
     * @return array An array of endpoints.
     */
    public function get_args()
    {
    }
    /**
     * Prepare a single item for response. Handles setting the status based on the payment result.
     *
     * @param mixed            $item Item to format to schema.
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response $response Response data.
     */
    public function prepare_item_for_response($item, \WP_REST_Request $request)
    {
    }
    /**
     * Convert the cart into a new draft order, or update an existing draft order, and return an updated cart response.
     *
     * @throws RouteException On error.
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response
     */
    protected function get_route_response(\WP_REST_Request $request)
    {
    }
    /**
     * Process an order.
     *
     * 1. Obtain Draft Order
     * 2. Process Request
     * 3. Process Customer
     * 4. Validate Order
     * 5. Process Payment
     *
     * @throws RouteException On error.
     * @throws InvalidStockLevelsInCartException On error.
     *
     * @param \WP_REST_Request $request Request object.
     *
     * @return \WP_REST_Response
     */
    protected function get_route_post_response(\WP_REST_Request $request)
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
    /**
     * Get route response when something went wrong.
     *
     * @param \WP_Error $error_object User facing error message.
     * @param int       $http_status_code HTTP status. Defaults to 500.
     * @param array     $additional_data  Extra data (key value pairs) to expose in the error response.
     * @return \WP_Error WP Error object.
     */
    protected function get_route_error_response_from_object($error_object, $http_status_code = 500, $additional_data = [])
    {
    }
}