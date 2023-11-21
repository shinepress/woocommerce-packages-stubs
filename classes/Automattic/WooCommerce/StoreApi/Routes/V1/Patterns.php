<?php

namespace Automattic\WooCommerce\StoreApi\Routes\V1;

/**
 * Patterns class.
 */
class Patterns extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractRoute
{
    /**
     * The route identifier.
     *
     * @var string
     */
    const IDENTIFIER = 'patterns';
    /**
     * The schema item identifier.
     *
     * @var string
     */
    const SCHEMA_TYPE = 'patterns';
    /**
     * Get the path of this REST route.
     *
     * @return string
     */
    public function get_path()
    {
    }
    /**
     * Get method arguments for this REST route.
     *
     * @return array An array of endpoints.
     */
    public function get_args()
    {
    }
    /**
     * Permission callback.
     *
     * @throws RouteException If the user is not allowed to make this request.
     *
     * @return true|\WP_Error
     */
    public function is_authorized()
    {
    }
    /**
     * Ensure the content and images in patterns are powered by AI.
     *
     * @param  \WP_REST_Request $request Request object.
     *
     * @return bool|string|\WP_Error|\WP_REST_Response
     */
    protected function get_route_post_response(\WP_REST_Request $request)
    {
    }
}