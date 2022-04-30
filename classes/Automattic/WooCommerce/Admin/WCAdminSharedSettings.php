<?php

namespace Automattic\WooCommerce\Admin;

/**
 * \Automattic\WooCommerce\Admin\WCAdminSharedSettings class.
 */
class WCAdminSharedSettings
{
    /**
     * Settings prefix used for the window.wcSettings object.
     *
     * @var string
     */
    private $settings_prefix = 'admin';
    /**
     * Class instance.
     *
     * @var WCAdminSharedSettings instance
     */
    protected static $instance = null;
    /**
     * Hook into WooCommerce Blocks.
     */
    protected function __construct()
    {
    }
    /**
     * Get class instance.
     *
     * @return object Instance.
     */
    public static function get_instance()
    {
    }
    /**
     * Adds settings to the Blocks AssetDataRegistry when woocommerce_blocks is loaded.
     *
     * @return void
     */
    public function on_woocommerce_blocks_loaded()
    {
    }
}