<?php

namespace Automattic\WooCommerce\Blocks\RestApi\StoreApi\Controllers;

/**
 * Product attributes API.
 *
 * @since 2.5.0
 */
class ProductAttributes extends \WP_REST_Controller
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
    protected $rest_base = 'products/attributes';
    /**
     * Schema class instance.
     *
     * @var ProductAttributeSchema
     */
    protected $schema;
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
     * @param object           $item Attribute object.
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
     * Get a collection of attributes.
     *
     * @param \WP_REST_Request $request Full details about the request.
     * @return RestError|\WP_REST_Response
     */
    public function get_items($request)
    {
    }
}