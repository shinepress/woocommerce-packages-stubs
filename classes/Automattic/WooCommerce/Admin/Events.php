<?php

namespace Automattic\WooCommerce\Admin;

/**
 * Events Class.
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
     * Note: Order_Milestones::other_milestones is hooked to this as well.
     */
    public function do_wc_admin_daily()
    {
    }
    /**
     * Adds notes that should be added.
     */
    protected function possibly_add_notes()
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
    /**
     * Checks if merchant email notifications are enabled.
     *
     * @return bool Whether merchant email notifications are enabled.
     */
    protected function is_merchant_email_notifications_enabled()
    {
    }
}