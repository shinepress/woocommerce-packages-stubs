<?php

namespace Automattic\WooCommerce\Admin\RemoteInboxNotifications;

/**
 * Handles stored state setup for products.
 */
class StoredStateSetupForProducts
{
    /**
     * Initialize the class
     */
    public static function init()
    {
    }
    /**
     * Set initial stored state values.
     *
     * @param object $stored_state The stored state.
     *
     * @return object The stored state.
     */
    public static function init_stored_state($stored_state)
    {
    }
    /**
     * Are there products query.
     *
     * @return bool
     */
    private static function are_there_products()
    {
    }
    /**
     * Runs on product importer steps.
     */
    public static function run_on_product_importer()
    {
    }
    /**
     * Runs when a post status transitions, but we're only interested if it is
     * a product being published.
     *
     * @param string $new_status The new status.
     * @param string $old_status The old status.
     * @param Post   $post       The post.
     */
    public static function run_on_transition_post_status($new_status, $old_status, $post)
    {
    }
}