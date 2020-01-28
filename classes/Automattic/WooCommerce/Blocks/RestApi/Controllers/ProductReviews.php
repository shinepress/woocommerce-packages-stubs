<?php

namespace Automattic\WooCommerce\Blocks\RestApi\Controllers;

/**
 * REST API Product Reviews controller class.
 */
class ProductReviews extends \WC_REST_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/blocks';
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'products/reviews';
    /**
     * Register the routes for product reviews.
     */
    public function register_routes()
    {
    }
    /**
     * Check if a given request has access to read the attributes.
     *
     * @param  \WP_REST_Request $request Full details about the request.
     * @return \WP_Error|boolean
     */
    public function get_items_permissions_check($request)
    {
    }
    /**
     * Get all reviews.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return array|WP_Error
     */
    public function get_items($request)
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
     * Prepare a single product review output for response.
     *
     * @param \WP_Comment      $review Product review object.
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response $response Response data.
     */
    public function prepare_item_for_response($review, $request)
    {
    }
    /**
     * Get the Product Review's schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
    }
    /**
     * Get the query params for collections.
     *
     * @return array
     */
    public function get_collection_params()
    {
    }
}