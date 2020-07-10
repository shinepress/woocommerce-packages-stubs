<?php

namespace Automattic\WooCommerce\Blocks;

/**
 * Library class.
 */
class Library
{
    /**
     * Initialize block library features.
     */
    public static function init()
    {
    }
    /**
     * Register custom tables within $wpdb object.
     */
    public static function define_tables()
    {
    }
    /**
     * Register blocks, hooking up assets and render functions as needed.
     */
    public static function register_blocks()
    {
    }
    /**
     * Register atomic blocks on the PHP side.
     */
    protected static function register_atomic_blocks()
    {
    }
    /**
     * Register custom order status for orders created via the API during checkout.
     *
     * Draft order status is used before payment is attempted, during checkout, when a cart is converted to an order.
     *
     * @param array $statuses Array of statuses.
     * @return array
     */
    public static function register_draft_order_status(array $statuses)
    {
    }
    /**
     * Register custom order post status for orders created via the API during checkout.
     *
     * @param array $statuses Array of statuses.
     * @return array
     */
    public static function register_draft_order_post_status(array $statuses)
    {
    }
    /**
     * Append draft status to a list of statuses.
     *
     * @param array $statuses Array of statuses.
     * @return array
     */
    public static function append_draft_order_post_status($statuses)
    {
    }
    /**
     * Delete draft orders older than a day in batches of 20.
     *
     * Ran on a daily cron schedule.
     */
    public static function delete_expired_draft_orders()
    {
    }
}