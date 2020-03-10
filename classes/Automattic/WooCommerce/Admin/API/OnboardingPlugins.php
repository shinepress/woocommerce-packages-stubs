<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * Onboarding Plugins Controller.
 *
 * @package WooCommerce Admin/API
 * @extends WC_REST_Data_Controller
 */
class OnboardingPlugins extends \WC_REST_Data_Controller
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
    protected $rest_base = 'onboarding/plugins';
    /**
     * Register routes.
     */
    public function register_routes()
    {
    }
    /**
     * Check if a given request has access to manage plugins.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function update_item_permissions_check($request)
    {
    }
    /**
     * Installs the requested plugin.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|array Plugin Status
     */
    public function install_plugin($request)
    {
    }
    /**
     * Returns a list of active plugins.
     *
     * @return array Active plugins
     */
    public function active_plugins()
    {
    }
    /**
     * Activate the requested plugin.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|array Plugin Status
     */
    public function activate_plugins($request)
    {
    }
    /**
     * Generates a Jetpack Connect URL.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|array Connection URL for Jetpack
     */
    public function connect_jetpack($request)
    {
    }
    /**
     *  Kicks off the WCCOM Connect process.
     *
     * @return WP_Error|array Connection URL for WooCommerce.com
     */
    public function request_wccom_connect()
    {
    }
    /**
     * Finishes connecting to WooCommerce.com.
     *
     * @param  object $rest_request Request details.
     * @return WP_Error|array Contains success status.
     */
    public function finish_wccom_connect($rest_request)
    {
    }
    /**
     * Returns a URL that can be used to connect to PayPal.
     *
     * @return WP_Error|array Connect URL.
     */
    public function connect_paypal()
    {
    }
    /**
     * Returns a URL that can be used to connect to Square.
     *
     * @return WP_Error|array Connect URL.
     */
    public function connect_square()
    {
    }
    /**
     * Get the schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
    }
    /**
     * Get the schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_connect_schema()
    {
    }
}