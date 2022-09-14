<?php

namespace Automattic\WooCommerce\StoreApi;

/**
 * Authentication class.
 */
class Authentication
{
    /**
     * Hook into WP lifecycle events.
     */
    public function init()
    {
    }
    /**
     * The Store API does not require authentication.
     *
     * @param \WP_Error|mixed $result Error from another authentication handler, null if we should handle it, or another value if not.
     * @return \WP_Error|null|bool
     */
    public function check_authentication($result)
    {
    }
    /**
     * When the login cookies are set, they are not available until the next page reload. For the Store API, specifically
     * for returning updated nonces, we need this to be available immediately.
     *
     * @param string $logged_in_cookie The value for the logged in cookie.
     */
    public function set_logged_in_cookie($logged_in_cookie)
    {
    }
    /**
     * Check if is request to the Store API.
     *
     * @return bool
     */
    protected function is_request_to_store_api()
    {
    }
}