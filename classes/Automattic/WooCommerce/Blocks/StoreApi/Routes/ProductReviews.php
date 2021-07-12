<?php

namespace Automattic\WooCommerce\Blocks\StoreApi\Routes;

/**
 * ProductReviews class.
 *
 * @internal This API is used internally by Blocks--it is still in flux and may be subject to revisions.
 */
class ProductReviews extends \Automattic\WooCommerce\Blocks\StoreApi\Routes\AbstractRoute
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
     * Get a collection of reviews.
     *
     * @throws RouteException On error.
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response
     */
    protected function get_route_response(\WP_REST_Request $request)
    {
    }
    /**
     * Prepends internal property prefix to query parameters to match our response fields.
     *
     * @param string $query_param Query parameter.
     * @return string
     */
    protected function normalize_query_param($query_param)
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