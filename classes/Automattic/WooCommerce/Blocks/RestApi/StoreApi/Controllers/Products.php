<?php

namespace Automattic\WooCommerce\Blocks\RestApi\StoreApi\Controllers;

/**
 * Products API.
 *
 * @since 2.5.0
 */
class Products extends \WP_REST_Controller
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
    protected $rest_base = 'products';
    /**
     * Schema class instance.
     *
     * @var ProductSchema
     */
    protected $schema;
    /**
     * Query class instance.
     *
     * @var ProductQuery
     */
    protected $product_query;
    /**
     * Setup API class.
     */
    public function __construct()
    {
    }
    /**
     * Register the routes for products.
     */
    public function register_routes()
    {
    }
    /**
     * Product item schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
    }
    /**
     * Prepare a single item for response.
     *
     * @param \WC_Product      $item Product object.
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response $response Response data.
     */
    public function prepare_item_for_response($item, $request)
    {
    }
    /**
     * Get a single item.
     *
     * @param \WP_REST_Request $request Full details about the request.
     * @return RestError|\WP_REST_Response
     */
    public function get_item($request)
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