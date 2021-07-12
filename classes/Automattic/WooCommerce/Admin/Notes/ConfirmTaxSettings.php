<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * ConfirmTaxSettings.
 */
class ConfirmTaxSettings
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-confirm-tax-settings';
    /**
     * Get the note.
     *
     * @return Note
     */
    public static function get_note()
    {
    }
}