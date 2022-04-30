<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * Set_Up_Additional_Payment_Types
 */
class SetUpAdditionalPaymentTypes
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
     * Executes when the WooCommerce Payments plugin is activated. It does nothing
     * if WooCommerce Payments plugin is not included in onboarding business extensions,
     * otherwise it possibly adds the note if it isn't already in the database and if
     * it matches any criteria (see get_note()).
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
     * Check if this note should exist.
     */
    public static function is_applicable()
    {
    }
    /**
     * Get the note.
     *
     * @return Note
     */
    public static function get_note()
    {
    }
}