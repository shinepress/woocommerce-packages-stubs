<?php

namespace Automattic\WooCommerce\Admin;

/**
 * Install Class.
 */
class Install
{
    /**
     * Plugin version option name.
     */
    const VERSION_OPTION = 'woocommerce_admin_version';
    /**
     * DB updates and callbacks that need to be run per version.
     *
     * @var array
     */
    protected static $db_updates = array('0.20.1' => array('wc_admin_update_0201_order_status_index', 'wc_admin_update_0201_db_version'), '0.23.0' => array('wc_admin_update_0230_rename_gross_total', 'wc_admin_update_0230_db_version'), '0.25.1' => array('wc_admin_update_0251_remove_unsnooze_action', 'wc_admin_update_0251_db_version'), '1.1.0' => array('wc_admin_update_110_remove_facebook_note', 'wc_admin_update_110_db_version'), '1.3.0' => array('wc_admin_update_130_remove_dismiss_action_from_tracking_opt_in_note', 'wc_admin_update_130_db_version'), '1.4.0' => array('wc_admin_update_140_change_deactivate_plugin_note_type', 'wc_admin_update_140_db_version'), '1.6.0' => array('wc_admin_update_160_remove_facebook_note', 'wc_admin_update_160_db_version'), '1.7.0' => array('wc_admin_update_170_homescreen_layout', 'wc_admin_update_170_db_version'));
    /**
     * Migrated option names mapping. New => old.
     *
     * @var array
     */
    protected static $migrated_options = array('woocommerce_onboarding_profile' => 'wc_onboarding_profile', 'woocommerce_admin_install_timestamp' => 'wc_admin_install_timestamp', 'woocommerce_onboarding_opt_in' => 'wc_onboarding_opt_in', 'woocommerce_admin_import_stats' => 'wc_admin_import_stats', 'woocommerce_admin_version' => 'wc_admin_version', 'woocommerce_admin_last_orders_milestone' => 'wc_admin_last_orders_milestone', 'woocommerce_admin-wc-helper-last-refresh' => 'wc-admin-wc-helper-last-refresh', 'woocommerce_admin_report_export_status' => 'wc_admin_report_export_status', 'woocommerce_task_list_complete' => 'woocommerce_task_list_complete', 'woocommerce_task_list_hidden' => 'woocommerce_task_list_hidden', 'woocommerce_extended_task_list_complete' => 'woocommerce_extended_task_list_complete', 'woocommerce_extended_task_list_hidden' => 'woocommerce_extended_task_list_hidden');
    /**
     * Hook in tabs.
     */
    public static function init()
    {
    }
    /**
     * Migrate option values to their new keys/names.
     */
    public static function migrate_options()
    {
    }
    /**
     * Check WC Admin version and run the updater is required.
     *
     * This check is done on all requests and runs if the versions do not match.
     */
    public static function check_version()
    {
    }
    /**
     * Install WC Admin.
     */
    public static function install()
    {
    }
    /**
     * Get database schema.
     *
     * @return string
     */
    protected static function get_schema()
    {
    }
    /**
     * Create database tables.
     */
    public static function create_tables()
    {
    }
    /**
     * Return a list of tables. Used to make sure all WC Admin tables are dropped
     * when uninstalling the plugin in a single site or multi site environment.
     *
     * @return array WC tables.
     */
    public static function get_tables()
    {
    }
    /**
     * Adds new tables.
     *
     * @param array $wc_tables List of WooCommerce tables.
     * @return array
     */
    public static function add_tables($wc_tables)
    {
    }
    /**
     * Uninstall tables when MU blog is deleted.
     *
     * @param array $tables List of tables that will be deleted by WP.
     *
     * @return string[]
     */
    public static function wpmu_drop_tables($tables)
    {
    }
    /**
     * Get list of DB update callbacks.
     *
     * @return array
     */
    public static function get_db_update_callbacks()
    {
    }
    /**
     * Is a DB update needed?
     *
     * @return boolean
     */
    public static function needs_db_update()
    {
    }
    /**
     * See if we need to show or run database updates during install.
     */
    private static function maybe_update_db_version()
    {
    }
    /**
     * Push all needed DB updates to the queue for processing.
     */
    private static function update()
    {
    }
    /**
     * Update WC Admin version to current.
     *
     * @param string|null $version New WooCommerce Admin DB version or null.
     */
    public static function update_db_version($version = null)
    {
    }
    /**
     * Schedule cron events.
     */
    public static function create_events()
    {
    }
    /**
     * Delete obsolete notes.
     */
    protected static function delete_obsolete_notes()
    {
    }
    /**
     * Drop WooCommerce Admin tables.
     *
     * @return void
     */
    public static function drop_tables()
    {
    }
}