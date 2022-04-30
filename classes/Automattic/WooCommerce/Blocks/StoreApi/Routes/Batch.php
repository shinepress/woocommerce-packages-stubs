<?php

namespace Automattic\WooCommerce\Blocks\StoreApi\Routes;

/**
 * Batch Route class.
 *
 * @internal This API is used internally by Blocks--it is still in flux and may be subject to revisions.
 */
class Batch extends \Automattic\WooCommerce\Blocks\StoreApi\Routes\AbstractRoute implements \Automattic\WooCommerce\Blocks\StoreApi\Routes\RouteInterface
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
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Get arguments for this REST route.
     *
     * @return array An array of endpoints.
     */
    public function get_args()
    {
    }
    /**
     * Get the route response.
     *
     * @see WP_REST_Server::serve_batch_request_v1
     * https://developer.wordpress.org/reference/classes/wp_rest_server/serve_batch_request_v1/
     *
     * @throws RouteException On error.
     *
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response
     */
    public function get_response(\WP_REST_Request $request)
    {
    }
}