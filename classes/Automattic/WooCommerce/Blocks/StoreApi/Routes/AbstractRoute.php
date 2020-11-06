<?php

namespace Automattic\WooCommerce\Blocks\StoreApi\Routes;

/**
 * AbstractRoute class.
 *
 * @internal This API is used internally by Blocks--it is still in flux and may be subject to revisions.
 */
abstract class AbstractRoute implements \Automattic\WooCommerce\Blocks\StoreApi\Routes\RouteInterface
{
    /**
     * Schema class instance.
     *
     * @var AbstractSchema
     */
    protected $schema;
    /**
     * Constructor.
     *
     * @param AbstractSchema $schema Schema class for this route.
     */
    public function __construct(\Automattic\WooCommerce\Blocks\StoreApi\Schemas\AbstractSchema $schema)
    {
    }
    /**
     * Get the namespace for this route.
     *
     * @return string
     */
    public function get_namespace()
    {
    }
    /**
     * Get item schema properties.
     *
     * @return array
     */
    public function get_item_schema()
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
     * Get route response for GET requests.
     *
     * When implemented, should return a \WP_REST_Response.
     *
     * @throws RouteException On error.
     * @param \WP_REST_Request $request Request object.
     */
    protected function get_route_response(\WP_REST_Request $request)
    {
    }
    /**
     * Get route response for POST requests.
     *
     * When implemented, should return a \WP_REST_Response.
     *
     * @throws RouteException On error.
     * @param \WP_REST_Request $request Request object.
     */
    protected function get_route_post_response(\WP_REST_Request $request)
    {
    }
    /**
     * Get route response for PUT requests.
     *
     * When implemented, should return a \WP_REST_Response.
     *
     * @throws RouteException On error.
     * @param \WP_REST_Request $request Request object.
     */
    protected function get_route_update_response(\WP_REST_Request $request)
    {
    }
    /**
     * Get route response for DELETE requests.
     *
     * When implemented, should return a \WP_REST_Response.
     *
     * @throws RouteException On error.
     * @param \WP_REST_Request $request Request object.
     */
    protected function get_route_delete_response(\WP_REST_Request $request)
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
     * Prepare a single item for response.
     *
     * @param mixed            $item Item to format to schema.
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response $response Response data.
     */
    public function prepare_item_for_response($item, \WP_REST_Request $request)
    {
    }
    /**
     * Retrieves the context param.
     *
     * Ensures consistent descriptions between endpoints, and populates enum from schema.
     *
     * @param array $args Optional. Additional arguments for context parameter. Default empty array.
     * @return array Context parameter details.
     */
    protected function get_context_param($args = array())
    {
    }
    /**
     * Prepares a response for insertion into a collection.
     *
     * @param \WP_REST_Response $response Response object.
     * @return array|mixed Response data, ready for insertion into collection data.
     */
    protected function prepare_response_for_collection(\WP_REST_Response $response)
    {
    }
    /**
     * Prepare links for the request.
     *
     * @param mixed            $item Item to prepare.
     * @param \WP_REST_Request $request Request object.
     * @return array
     */
    protected function prepare_links($item, $request)
    {
    }
    /**
     * Retrieves the query params for the collections.
     *
     * @return array Query parameters for the collection.
     */
    public function get_collection_params()
    {
    }
    /**
     * Makes the cart and sessions available to a route by loading them from core.
     */
    protected function maybe_load_cart()
    {
    }
}