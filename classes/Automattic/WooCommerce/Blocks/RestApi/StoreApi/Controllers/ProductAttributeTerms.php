<?php

namespace Automattic\WooCommerce\Blocks\RestApi\StoreApi\Controllers;

/**
 * Product attribute terms API.
 *
 * @since 2.5.0
 */
class ProductAttributeTerms extends \WP_REST_Controller
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
    protected $rest_base = 'products/attributes/(?P<attribute_id>[\d]+)/terms';
    /**
     * Schema class instance.
     *
     * @var TermSchema
     */
    protected $schema;
    /**
     * Query class instance.
     *
     * @var TermQuery
     */
    protected $term_query;
    /**
     * Setup API class.
     */
    public function __construct()
    {
    }
    /**
     * Register the routes.
     */
    public function register_routes()
    {
    }
    /**
     * Item schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
    }
    /**
     * Prepare a single item for response.
     *
     * @param \WP_Term         $item Term object.
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response $response Response data.
     */
    public function prepare_item_for_response($item, $request)
    {
    }
    /**
     * Get a collection of attribute terms.
     *
     * @param \WP_REST_Request $request Full details about the request.
     * @return RestError|\WP_REST_Response
     */
    public function get_items($request)
    {
    }
    /**
     * Get the query params for collections of attributes.
     *
     * @return array
     */
    public function get_collection_params()
    {
    }
}