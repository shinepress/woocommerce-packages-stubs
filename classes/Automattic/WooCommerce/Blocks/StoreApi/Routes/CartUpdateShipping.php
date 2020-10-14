<?php

namespace Automattic\WooCommerce\Blocks\StoreApi\Routes;

/**
 * CartUpdateShipping class.
 *
 * @internal This API is used internally by Blocks--it is still in flux and may be subject to revisions.
 */
class CartUpdateShipping extends \Automattic\WooCommerce\Blocks\StoreApi\Routes\AbstractCartRoute
{
    /**
     * Get the namespace for this route.
     *
     * @return string
     */
    public function get_namespace()
    {
    }
    /**
     * Get the path of this REST route.
     *
     * @return string
     */
    public function get_path()
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
     * Handle the request and return a valid response for this endpoint.
     *
     * @throws RouteException On error.
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response
     */
    protected function get_route_post_response(\WP_REST_Request $request)
    {
    }
    /**
     * Format the request address.
     *
     * @throws RouteException On error.
     * @param \WP_REST_Request $request Full details about the request.
     * @return \WP_REST_Response
     */
    public function validate_shipping_address($request)
    {
    }
}