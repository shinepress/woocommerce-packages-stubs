<?php

namespace Automattic\WooCommerce\Blocks\RestApi\Controllers;

/**
 * REST API Product Tags controller class.
 */
class ProductTags extends \WC_REST_Product_Tags_Controller
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
}