<?php

namespace Automattic\WooCommerce\Admin\Features;

/**
 * Determine if the mobile app banner shows on Android devices
 */
class MobileAppBanner
{
    /**
     * Class instance.
     *
     * @var Analytics instance
     */
    protected static $instance = null;
    /**
     * Get class instance.
     */
    public static function get_instance()
    {
    }
    /**
     * Hook into WooCommerce.
     */
    public function __construct()
    {
    }
    /**
     * Adds fields so that we can store user preferences for the mobile app banner
     *
     * @param array $user_data_fields User data fields.
     * @return array
     */
    public function add_user_data_fields($user_data_fields)
    {
    }
}