<?php

namespace Automattic\WooCommerce\Blocks\RestApi\Controllers;

/**
 * REST API variations controller class.
 */
class Variations extends \WC_REST_Product_Variations_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/blocks';
    /**
     * Register the routes for variations.
     */
    public function register_routes()
    {
    }
    /**
     * Check if a given request has access to read items.
     *
     * @param  \WP_REST_Request $request Full details about the request.
     * @return \WP_Error|boolean
     */
    public function get_items_permissions_check($request)
    {
    }
    /**
     * Prepare a single variation output for response.
     *
     * @param  \WC_Data         $object  Object data.
     * @param  \WP_REST_Request $request Request object.
     * @return \WP_REST_Response
     */
    public function prepare_object_for_response($object, $request)
    {
    }
    /**
     * Get the Product's schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
    }
}