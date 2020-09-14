<?php

namespace Automattic\WooCommerce\Blocks\Domain\Services;

/**
 * Service class for adding DraftOrder functionality to WooCommerce core.
 */
class DraftOrders
{
    const DB_STATUS = 'wc-checkout-draft';
    const STATUS = 'checkout-draft';
    /**
     * Holds the Package instance
     *
     * @var Package
     */
    private $package;
    /**
     * Constructor
     *
     * @param Package $package An instance of the package class.
     */
    public function __construct(\Automattic\WooCommerce\Blocks\Domain\Package $package)
    {
    }
    /**
     * Set all hooks related to adding Checkout Draft order functionality to Woo Core.
     */
    public function init()
    {
    }
    /**
     * Installation related logic for Draft order functionality.
     *
     * @internal
     */
    public function install()
    {
    }
    /**
     * Remove cronjobs if they exist (but only from admin).
     *
     * @internal
     */
    public function uninstall()
    {
    }
    /**
     * Maybe create cron events.
     */
    protected function maybe_create_cronjobs()
    {
    }
    /**
     * Unschedule cron jobs that are present.
     */
    protected function maybe_remove_cronjobs()
    {
    }
    /**
     * Register custom order status for orders created via the API during checkout.
     *
     * Draft order status is used before payment is attempted, during checkout, when a cart is converted to an order.
     *
     * @param array $statuses Array of statuses.
     * @internal
     * @return array
     */
    public function register_draft_order_status(array $statuses)
    {
    }
    /**
     * Register custom order post status for orders created via the API during checkout.
     *
     * @param array $statuses Array of statuses.
     * @internal
     * @return array
     */
    public function register_draft_order_post_status(array $statuses)
    {
    }
    /**
     * Append draft status to a list of statuses.
     *
     * @param array $statuses Array of statuses.
     * @internal
     * @return array
     */
    public function append_draft_order_post_status($statuses)
    {
    }
    /**
     * Delete draft orders older than a day in batches of 20.
     *
     * Ran on a daily cron schedule.
     *
     * @internal
     */
    public function delete_expired_draft_orders()
    {
    }
    /**
     * Asserts whether incoming order results are expected given the query
     * this service class executes.
     *
     * @param WC_Order[] $order_results The order results being asserted.
     * @param int        $expected_batch_size The expected batch size for the results.
     * @throws Exception If any assertions fail, an exception is thrown.
     */
    private function assert_order_results($order_results, $expected_batch_size)
    {
    }
}