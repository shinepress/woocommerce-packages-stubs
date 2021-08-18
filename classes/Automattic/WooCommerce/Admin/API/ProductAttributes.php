<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * Product categories controller.
 *
 * @extends WC_REST_Product_Attributes_Controller
 */
class ProductAttributes extends \WC_REST_Product_Attributes_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc-analytics';
    /**
     * Register the routes for custom product attributes.
     */
    public function register_routes()
    {
    }
    /**
     * Get the query params for collections
     *
     * @return array
     */
    public function get_collection_params()
    {
    }
    /**
     * Get the Attribute's schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
    }
    /**
     * Get all attributes, with support for searching (which includes custom attributes).
     *
     * @param WP_REST_Request $request The API request.
     * @return WP_REST_Response
     */
    public function get_items($request)
    {
    }
    /**
     * Get a single attribute by it's slug.
     *
     * @param WP_REST_Request $request The API request.
     * @return WP_REST_Response
     */
    public function get_item_by_slug($request)
    {
    }
    /**
     * Query custom attributes by name or slug.
     *
     * @param string $args Search arguments, either name or slug.
     * @return array Matching attributes, formatted for response.
     */
    protected function get_custom_attributes($args)
    {
    }
}