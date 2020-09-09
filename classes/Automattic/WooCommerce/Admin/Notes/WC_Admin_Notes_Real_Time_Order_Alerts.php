<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * WC_Admin_Notes_Real_Time_Order_Alerts
 */
class WC_Admin_Notes_Real_Time_Order_Alerts
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-real-time-order-alerts';
    /**
     * Get the note.
     */
    public static function get_note()
    {
    }
}