<?php

namespace Automattic\WooCommerce\Blocks\StoreApi\Routes;

/**
 * Cart class.
 */
abstract class AbstractCartRoute extends \Automattic\WooCommerce\Blocks\StoreApi\Routes\AbstractRoute
{
    /**
     * Get the route response based on the type of request.
     *
     * @param \WP_REST_Request $request Request object.
     * @return \WP_Error|\WP_REST_Response
     */
    public function get_response(\WP_REST_Request $request)
    {
    }
    /**
     * If shipping/tax data has changed on the server since last calculation, trigger a recalculation now.
     *
     * @return void
     */
    protected function maybe_recalculate_totals()
    {
    }
    /**
     * Get route response when something went wrong.
     *
     * @param string $error_code String based error code.
     * @param string $error_message User facing error message.
     * @param int    $http_status_code HTTP status. Defaults to 500.
     * @param array  $additional_data  Extra data (key value pairs) to expose in the error response.
     * @return \WP_Error WP Error object.
     */
    protected function get_route_error_response($error_code, $error_message, $http_status_code = 500, $additional_data = [])
    {
    }
}