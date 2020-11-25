<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * WC_Admin_Notes_Set_Up_Additional_Payment_Types
 */
class WC_Admin_Notes_Set_Up_Additional_Payment_Types
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-set-up-additional-payment-types';
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Executes when the WooCommerce Payments plugin is activated. Possibly
     * adds the note if it isn't already in the database and if it matches any
     * criteria (see get_note()).
     */
    public static function on_activate_wcpay()
    {
    }
    /**
     * Executes when the WooCommerce Payments plugin is deactivated. Possibly
     * hard-deletes the note if it is in the database. Hard-delete is used
     * instead of soft-delete or actioning the note because we need to
     * show the note if the plugin is activated again.
     */
    public static function on_deactivate_wcpay()
    {
    }
    /**
     * Get the note.
     */
    public static function get_note()
    {
    }
}