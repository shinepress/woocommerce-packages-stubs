<?php

namespace Automattic\WooCommerce\Admin\Features\RemoteFreeExtensions;

/**
 * Remote Payment Methods engine.
 * This goes through the specs and gets eligible payment methods.
 */
class Init
{
    const SPECS_TRANSIENT_NAME = 'woocommerce_admin_remote_free_extensions_specs';
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Go through the specs and run them.
     */
    public static function get_extensions()
    {
    }
    /**
     * Delete the specs transient.
     */
    public static function delete_specs_transient()
    {
    }
    /**
     * Get specs or fetch remotely if they don't exist.
     */
    public static function get_specs()
    {
    }
}