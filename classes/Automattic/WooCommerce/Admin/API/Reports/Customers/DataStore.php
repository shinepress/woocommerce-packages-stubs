<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Customers;

/**
 * Admin\API\Reports\Customers\DataStore.
 */
class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
{
    /**
     * Table used to get the data.
     *
     * @var string
     */
    protected static $table_name = 'wc_customer_lookup';
    /**
     * Cache identifier.
     *
     * @var string
     */
    protected $cache_key = 'customers';
    /**
     * Mapping columns to data type to return correct response types.
     *
     * @var array
     */
    protected $column_types = array('id' => 'intval', 'user_id' => 'intval', 'orders_count' => 'intval', 'total_spend' => 'floatval', 'avg_order_value' => 'floatval');
    /**
     * Data store context used to pass to filters.
     *
     * @var string
     */
    protected $context = 'customers';
    /**
     * Assign report columns once full table name has been assigned.
     */
    protected function assign_report_columns()
    {
    }
    /**
     * Set up all the hooks for maintaining and populating table data.
     */
    public static function init()
    {
    }
    /**
     * Trigger a customer update if their "last active" meta value was changed.
     * Function expects to be hooked into the `updated_user_meta` action.
     *
     * @param int    $meta_id ID of updated metadata entry.
     * @param int    $user_id ID of the user being updated.
     * @param string $meta_key Meta key being updated.
     */
    public static function update_registered_customer_via_last_active($meta_id, $user_id, $meta_key)
    {
    }
    /**
     * Maps ordering specified by the user to columns in the database/fields in the data.
     *
     * @param string $order_by Sorting criterion.
     * @return string
     */
    protected function normalize_order_by($order_by)
    {
    }
    /**
     * Fills WHERE clause of SQL request with date-related constraints.
     *
     * @param array  $query_args Parameters supplied by the user.
     * @param string $table_name Name of the db table relevant for the date constraint.
     */
    protected function add_time_period_sql_params($query_args, $table_name)
    {
    }
    /**
     * Updates the database query with parameters used for Customers report: categories and order status.
     *
     * @param array $query_args Query arguments supplied by the user.
     */
    protected function add_sql_query_params($query_args)
    {
    }
    /**
     * Returns the report data based on parameters supplied by the user.
     *
     * @param array $query_args  Query parameters.
     * @return stdClass|WP_Error Data.
     */
    public function get_data($query_args)
    {
    }
    /**
     * Returns an existing customer ID for an order if one exists.
     *
     * @param object $order WC Order.
     * @return int|bool
     */
    public static function get_existing_customer_id_from_order($order)
    {
    }
    /**
     * Get or create a customer from a given order.
     *
     * @param object $order WC Order.
     * @return int|bool
     */
    public static function get_or_create_customer_from_order($order)
    {
    }
    /**
     * Retrieve a guest ID (when user_id is null) by email.
     *
     * @param string $email Email address.
     * @return false|array Customer array if found, boolean false if not.
     */
    public static function get_guest_id_by_email($email)
    {
    }
    /**
     * Retrieve a registered customer row id by user_id.
     *
     * @param string|int $user_id User ID.
     * @return false|int Customer ID if found, boolean false if not.
     */
    public static function get_customer_id_by_user_id($user_id)
    {
    }
    /**
     * Retrieve the oldest orders made by a customer.
     *
     * @param int $customer_id Customer ID.
     * @return array Orders.
     */
    public static function get_oldest_orders($customer_id)
    {
    }
    /**
     * Update the database with customer data.
     *
     * @param int $user_id WP User ID to update customer data for.
     * @return int|bool|null Number or rows modified or false on failure.
     */
    public static function update_registered_customer($user_id)
    {
    }
    /**
     * Check if a user ID is a valid customer or other user role with past orders.
     *
     * @param int $user_id User ID.
     * @return bool
     */
    protected static function is_valid_customer($user_id)
    {
    }
    /**
     * Delete a customer lookup row.
     *
     * @param int $customer_id Customer ID.
     */
    public static function delete_customer($customer_id)
    {
    }
    /**
     * Initialize query objects.
     */
    protected function initialize_queries()
    {
    }
}