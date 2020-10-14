<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * Marketing Controller.
 *
 * @extends WC_REST_Data_Controller
 */
class Marketing extends \WC_REST_Data_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc-admin';
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'marketing';
    /**
     * Register routes.
     */
    public function register_routes()
    {
    }
    /**
     * Return installed marketing extensions data.
     *
     * @param \WP_REST_Request $request Request data.
     *
     * @return \WP_Error|\WP_REST_Response
     */
    public function get_recommended_plugins($request)
    {
    }
    /**
     * Return installed marketing extensions data.
     *
     * @param \WP_REST_Request $request Request data.
     *
     * @return \WP_Error|\WP_REST_Response
     */
    public function get_knowledge_base_posts($request)
    {
    }
}