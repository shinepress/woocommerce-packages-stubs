<?php

namespace Automattic\WooCommerce\Blocks\RestApi\Controllers;

/**
 * REST API Products controller class.
 */
class Products extends \WC_REST_Products_Controller
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
    protected $rest_base = 'products';
    /**
     * Register the routes for products.
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
     * Check if a given request has access to read an item.
     *
     * @param  \WP_REST_Request $request Full details about the request.
     * @return \WP_Error|boolean
     */
    public function get_item_permissions_check($request)
    {
    }
    /**
     * Change REST API permissions so that authors have access to this API.
     *
     * This code only runs for methods of this class. @see Products::get_items below.
     *
     * @param bool $permission Does the current user have access to the API.
     * @return bool
     */
    public function force_edit_posts_permission($permission)
    {
    }
    /**
     * Get a collection of posts.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function get_items($request)
    {
    }
    /**
     * Make extra product orderby features supported by WooCommerce available to the WC API.
     * This includes 'price', 'popularity', and 'rating'.
     *
     * @param WP_REST_Request $request Request data.
     * @return array
     */
    protected function prepare_objects_query($request)
    {
    }
    /**
     * Get product data.
     *
     * @param \WC_Product|\WC_Product_Variation $product Product instance.
     * @param string                            $context Request context. Options: 'view' and 'edit'.
     * @return array
     */
    protected function get_product_data($product, $context = 'view')
    {
    }
    /**
     * Get the images for a product or product variation.
     *
     * @param \WC_Product|\WC_Product_Variation $product Product instance.
     * @return array
     */
    protected function get_images($product)
    {
    }
    /**
     * Update the collection params.
     *
     * Adds new options for 'orderby', and new parameters 'category_operator', 'attribute_operator'.
     *
     * @return array
     */
    public function get_collection_params()
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