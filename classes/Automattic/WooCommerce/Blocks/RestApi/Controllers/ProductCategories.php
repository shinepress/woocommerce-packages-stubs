<?php

namespace Automattic\WooCommerce\Blocks\RestApi\Controllers;

/**
 * REST API Product Categories controller class.
 */
class ProductCategories extends \WC_REST_Product_Categories_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/blocks';
    /**
     * Register the routes for products.
     */
    public function register_routes()
    {
    }
    /**
     * Check permissions.
     *
     * @param \WP_REST_Request $request Full details about the request.
     * @param string           $context Request context.
     * @return bool|\WP_Error
     */
    protected function check_permissions($request, $context = 'read')
    {
    }
    /**
     * Prepare a single product category output for response.
     *
     * @param \WP_Term         $item    Term object.
     * @param \WP_REST_Request $request Request instance.
     * @return \WP_REST_Response
     */
    public function prepare_item_for_response($item, $request)
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