<?php

namespace Automattic\WooCommerce\Blocks\StoreApi\Routes;

/**
 * Checkout class.
 */
class Checkout extends \Automattic\WooCommerce\Blocks\StoreApi\Routes\AbstractRoute
{
    /**
     * Get the path of this REST route.
     *
     * @return string
     */
    public function get_path()
    {
    }
    /**
     * Enforce nonces for all checkout endpoints.
     *
     * @param \WP_REST_Request $request Request object.
     * @return \WP_Error|\WP_REST_Response
     */
    public function get_response(\WP_REST_Request $request)
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
     * Update the order.
     *
     * @throws RouteException On error.
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response
     */
    protected function get_route_update_response(\WP_REST_Request $request)
    {
    }
    /**
     * Update and process payment for the order.
     *
     * @throws RouteException On error.
     * @param \WP_REST_Request $request Request object.
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
     * Gets draft order data from the customer session.
     *
     * @return array
     */
    protected function get_draft_order_id()
    {
    }
    /**
     * Updates draft order data in the customer session.
     *
     * @param integer $order_id Draft order ID.
     */
    protected function set_draft_order_id($order_id)
    {
    }
    /**
     * Get an order object, either using a current draft order, or returning a new one.
     *
     * @param integer $order_id Draft order ID.
     * @return \WC_Order|boolean Either the draft order, or false if one has not yet been created.
     */
    protected function get_draft_order_object($order_id)
    {
    }
    /**
     * Create or update a draft order based on the cart.
     *
     * @throws RouteException On error.
     *
     * @return \WC_Order Order object.
     */
    protected function create_or_update_draft_order()
    {
    }
    /**
     * Update an order using the posted values from the request.
     *
     * @param \WC_Order        $order Object to prepare for the response.
     * @param \WP_REST_Request $request Full details about the request.
     */
    protected function update_order_from_request(\WC_Order $order, \WP_REST_Request $request)
    {
    }
    /**
     * For orders which do not require payment, just update status.
     *
     * @param \WC_Order        $order Order object.
     * @param \WP_REST_Request $request Request object.
     * @return PaymentResult
     */
    protected function process_without_payment(\WC_Order $order, \WP_REST_Request $request)
    {
    }
    /**
     * Fires an action hook instructing active payment gateways to process the payment for an order and provide a result.
     *
     * @throws RouteException On error.
     * @param \WC_Order        $order Order object.
     * @param \WP_REST_Request $request Request object.
     * @return PaymentResult
     */
    protected function process_payment(\WC_Order $order, \WP_REST_Request $request)
    {
    }
    /**
     * Gets the chosen payment method ID from the request.
     *
     * @throws RouteException On error.
     * @param \WP_REST_Request $request Request object.
     * @return string
     */
    protected function get_request_payment_method_id(\WP_REST_Request $request)
    {
    }
    /**
     * Gets the chosen payment method from the request.
     *
     * @throws RouteException On error.
     * @param \WP_REST_Request $request Request object.
     * @return \WC_Payment_Gateway
     */
    protected function get_request_payment_method(\WP_REST_Request $request)
    {
    }
    /**
     * Gets and formats payment request data.
     *
     * @param \WP_REST_Request $request Request object.
     * @return array
     */
    protected function get_request_payment_data(\WP_REST_Request $request)
    {
    }
}