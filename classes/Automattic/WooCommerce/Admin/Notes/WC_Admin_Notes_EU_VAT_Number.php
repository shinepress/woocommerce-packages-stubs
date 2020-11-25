<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * WC_Admin_Notes_EU_VAT_Number
 */
class WC_Admin_Notes_EU_VAT_Number
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-eu-vat-number';
    /**
     * Get the note.
     */
    public static function get_note()
    {
    }
}