<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * Onboarding Profile controller.
 *
 * @extends WC_REST_Data_Controller
 */
class OnboardingProfile extends \WC_REST_Data_Controller
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
    protected $rest_base = 'onboarding/profile';
    /**
     * Register routes.
     */
    public function register_routes()
    {
    }
    /**
     * Check whether a given request has permission to read onboarding profile data.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_items_permissions_check($request)
    {
    }
    /**
     * Check whether a given request has permission to edit onboarding profile data.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function update_items_permissions_check($request)
    {
    }
    /**
     * Return all onboarding profile data.
     *
     * @param  WP_REST_Request $request Request data.
     * @return WP_Error|WP_REST_Response
     */
    public function get_items($request)
    {
    }
    /**
     * Filter the industries.
     *
     * @param  array $industries list of industries.
     * @return array
     */
    public function filter_industries($industries)
    {
    }
    /**
     * Update onboarding profile data.
     *
     * @param  WP_REST_Request $request Request data.
     * @return WP_Error|WP_REST_Response
     */
    public function update_items($request)
    {
    }
    /**
     * Prepare objects query.
     *
     * @param  array $params The params sent in the request.
     * @return array
     */
    protected function prepare_objects_query($params)
    {
    }
    /**
     * Prepare the data object for response.
     *
     * @param object          $item Data object.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response $response Response data.
     */
    public function prepare_item_for_response($item, $request)
    {
    }
    /**
     * Get onboarding profile properties.
     *
     * @return array
     */
    public static function get_profile_properties()
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
     * Get the query params for collections.
     *
     * @return array
     */
    public function get_collection_params()
    {
    }
}