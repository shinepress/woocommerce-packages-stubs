<?php

namespace Automattic\WooCommerce\Blocks\StoreApi\Routes;

/**
 * Checkout class.
 *
 * @internal This API is used internally by Blocks--it is still in flux and may be subject to revisions.
 */
class Checkout extends \Automattic\WooCommerce\Blocks\StoreApi\Routes\AbstractRoute
{
    /**
     * Holds the current order being processed.
     *
     * @var WC_Order
     */
    private $order = null;
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
     * @param WP_REST_Request $request Request object.
     * @return WP_Error|WP_REST_Response
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
     * Prepare a single item for response. Handles setting the status based on the payment result.
     *
     * @param mixed           $item Item to format to schema.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response $response Response data.
     */
    public function prepare_item_for_response($item, \WP_REST_Request $request)
    {
    }
    /**
     * Convert the cart into a new draft order, or update an existing draft order, and return an updated cart response.
     *
     * @throws RouteException On error.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response
     */
    protected function get_route_response(\WP_REST_Request $request)
    {
    }
    /**
     * Update the current order.
     *
     * @internal Customer data is updated first so OrderController::update_addresses_from_cart uses up to date data.
     *
     * @throws RouteException On error.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response
     */
    protected function get_route_update_response(\WP_REST_Request $request)
    {
    }
    /**
     * Update and process an order.
     *
     * 1. Obtain Draft Order
     * 2. Process Request
     * 3. Process Customer
     * 4. Validate Order
     * 5. Process Payment
     *
     * @throws RouteException On error.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response
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
     * @return WP_Error WP Error object.
     */
    protected function get_route_error_response($error_code, $error_message, $http_status_code = 500, $additional_data = [])
    {
    }
    /**
     * Gets draft order data from the customer session.
     *
     * @return array
     */
    private function get_draft_order_id()
    {
    }
    /**
     * Updates draft order data in the customer session.
     *
     * @param integer $order_id Draft order ID.
     */
    private function set_draft_order_id($order_id)
    {
    }
    /**
     * Whether the passed argument is a draft order or an order that is
     * pending/failed and the cart hasn't changed.
     *
     * @param \WC_Order $order_object Order object to check.
     * @return boolean Whether the order is valid as a draft order.
     */
    private function is_valid_draft_order($order_object)
    {
    }
    /**
     * Create or update a draft order based on the cart.
     *
     * @throws RouteException On error.
     */
    private function create_or_update_draft_order()
    {
    }
    /**
     * Updates the current customer session using data from the request (e.g. address data).
     *
     * Address session data is synced to the order itself later on by OrderController::update_order_from_cart()
     *
     * @param WP_REST_Request $request Full details about the request.
     */
    private function update_customer_from_request(\WP_REST_Request $request)
    {
    }
    /**
     * Update the current order using the posted values from the request.
     *
     * @param WP_REST_Request $request Full details about the request.
     */
    private function update_order_from_request(\WP_REST_Request $request)
    {
    }
    /**
     * For orders which do not require payment, just update status.
     *
     * @param WP_REST_Request $request Request object.
     * @return PaymentResult
     */
    private function process_without_payment(\WP_REST_Request $request)
    {
    }
    /**
     * Fires an action hook instructing active payment gateways to process the payment for an order and provide a result.
     *
     * @throws RouteException On error.
     * @param WP_REST_Request $request Request object.
     * @return PaymentResult
     */
    private function process_payment(\WP_REST_Request $request)
    {
    }
    /**
     * Gets the chosen payment method ID from the request.
     *
     * @throws RouteException On error.
     * @param WP_REST_Request $request Request object.
     * @return string
     */
    private function get_request_payment_method_id(\WP_REST_Request $request)
    {
    }
    /**
     * Gets the chosen payment method from the request.
     *
     * @throws RouteException On error.
     * @param WP_REST_Request $request Request object.
     * @return \WC_Payment_Gateway
     */
    private function get_request_payment_method(\WP_REST_Request $request)
    {
    }
    /**
     * Gets and formats payment request data.
     *
     * @param WP_REST_Request $request Request object.
     * @return array
     */
    private function get_request_payment_data(\WP_REST_Request $request)
    {
    }
    /**
     * Order processing relating to customer account.
     *
     * Creates a customer account as needed (based on request & store settings) and  updates the order with the new customer ID.
     * Updates the order with user details (e.g. address).
     *
     * @internal CreateAccount class includes feature gating logic (i.e. this may not create an account depending on build).
     * @internal Checkout signup is feature gated to WooCommerce 4.7 and newer; Because it requires updated my-account/lost-password screen in 4.7+ for setting initial password.
     * @todo OrderController (and CartController) should be injected into Checkout Route Class.
     *
     * @throws RouteException API error object with error details.
     * @param WP_REST_Request $request Request object.
     */
    private function process_customer(\WP_REST_Request $request)
    {
    }
}