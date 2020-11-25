<?php

namespace Automattic\WooCommerce\Admin\Schedulers;

/**
 * OrdersScheduler Class.
 */
class OrdersScheduler extends \Automattic\WooCommerce\Admin\Schedulers\ImportScheduler
{
    /**
     * Slug to identify the scheduler.
     *
     * @var string
     */
    public static $name = 'orders';
    /**
     * Attach order lookup update hooks.
     */
    public static function init()
    {
    }
    /**
     * Add customer dependencies.
     *
     * @return array
     */
    public static function get_dependencies()
    {
    }
    /**
     * Get the order/refund IDs and total count that need to be synced.
     *
     * @param int      $limit Number of records to retrieve.
     * @param int      $page  Page number.
     * @param int|bool $days Number of days prior to current date to limit search results.
     * @param bool     $skip_existing Skip already imported orders.
     */
    public static function get_items($limit = 10, $page = 1, $days = false, $skip_existing = false)
    {
    }
    /**
     * Get total number of rows imported.
     */
    public static function get_total_imported()
    {
    }
    /**
     * Schedule this import if the post is an order or refund.
     *
     * @param int $post_id Post ID.
     */
    public static function possibly_schedule_import($post_id)
    {
    }
    /**
     * Imports a single order or refund to update lookup tables for.
     * If an error is encountered in one of the updates, a retry action is scheduled.
     *
     * @param int $order_id Order or refund ID.
     * @return void
     */
    public static function import($order_id)
    {
    }
    /**
     * Delete a batch of orders.
     *
     * @param int $batch_size Number of items to delete.
     * @return void
     */
    public static function delete($batch_size)
    {
    }
}