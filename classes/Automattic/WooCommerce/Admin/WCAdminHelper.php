<?php

namespace Automattic\WooCommerce\Admin;

/**
 * Class WCAdminHelper
 */
class WCAdminHelper
{
    /**
     * WC Admin timestamp option name.
     */
    const WC_ADMIN_TIMESTAMP_OPTION = 'woocommerce_admin_install_timestamp';
    /**
     * Get the number of seconds that the store has been active.
     *
     * @return number Number of seconds.
     */
    public static function get_wcadmin_active_for_in_seconds()
    {
    }
    /**
     * Test how long WooCommerce Admin has been active.
     *
     * @param int $seconds Time in seconds to check.
     * @return bool Whether or not WooCommerce admin has been active for $seconds.
     */
    public static function is_wc_admin_active_for($seconds)
    {
    }
}