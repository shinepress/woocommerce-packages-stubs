<?php

namespace Automattic\WooCommerce\Blocks\RestApi\StoreApi\Controllers;

/**
 * ProductCollectionData API.
 *
 * @since 2.5.0
 */
class ProductCollectionData extends \WP_REST_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/store';
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'products/collection-data';
    /**
     * Register the routes for products.
     */
    public function register_routes()
    {
    }
    /**
     * Return the schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
    }
    /**
     * Get a collection of posts and add the post title filter option to \WP_Query.
     *
     * @param \WP_REST_Request $request Full details about the request.
     * @return RestError|\WP_REST_Response
     */
    public function get_items($request)
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