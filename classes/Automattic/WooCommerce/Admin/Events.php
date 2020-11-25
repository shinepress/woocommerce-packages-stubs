<?php

namespace Automattic\WooCommerce\Admin;

/**
 * WC_Admin_Events Class.
 */
class Events
{
    /**
     * The single instance of the class.
     *
     * @var object
     */
    protected static $instance = null;
    /**
     * Constructor
     *
     * @return void
     */
    protected function __construct()
    {
    }
    /**
     * Get class instance.
     *
     * @return object Instance.
     */
    final public static function instance()
    {
    }
    /**
     * Cron event handlers.
     */
    public function init()
    {
    }
    /**
     * Daily events to run.
     *
     * Note: WC_Admin_Notes_Order_Milestones::other_milestones is hooked to this as well.
     */
    public function do_wc_admin_daily()
    {
    }
    /**
     * Checks if remote inbox notifications are enabled.
     *
     * @return bool Whether remote inbox notifications are enabled.
     */
    protected function is_remote_inbox_notifications_enabled()
    {
    }
}