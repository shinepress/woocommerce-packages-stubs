<?php

namespace Automattic\WooCommerce\Blocks\StoreApi\Routes;

/**
 * Products class.
 */
class Products extends \Automattic\WooCommerce\Blocks\StoreApi\Routes\AbstractRoute
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
     * Get method arguments for this REST route.
     *
     * @return array An array of endpoints.
     */
    public function get_args()
    {
    }
    /**
     * Get a collection of posts and add the post title filter option to \WP_Query.
     *
     * @throws RouteException On error.
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response
     */
    protected function get_route_response(\WP_REST_Request $request)
    {
    }
    /**
     * Prepare links for the request.
     *
     * @param \WC_Product      $item Product object.
     * @param \WP_REST_Request $request Request object.
     * @return array
     */
    protected function prepare_links($item, $request)
    {
    }
    /**
     * Get the query params for collections of products.
     *
     * @return array
     */
    public function get_collection_params()
    {
    }
}