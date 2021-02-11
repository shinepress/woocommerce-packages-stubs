<?php

namespace Automattic\WooCommerce\Admin\Notes\MerchantEmailNotifications;

/**
 * Merchant email notifications.
 * This gets all non-sent notes type `email` and sends them.
 */
class MerchantEmailNotifications
{
    /**
     * Initialize the merchant email notifications.
     */
    public static function init()
    {
    }
    /**
     * Trigger the note action.
     */
    public static function trigger_notification_action()
    {
    }
    /**
     * Send all the notifications type `email`.
     */
    public static function run()
    {
    }
    /**
     * Send the notification to the merchant.
     *
     * @param object $note The note to send.
     */
    public static function send_merchant_notification($note)
    {
    }
    /**
     * Get email addresses by role to notify.
     *
     * @param object $note The note to send.
     * @return array Emails to notify
     */
    public static function get_notification_email_addresses($note)
    {
    }
}