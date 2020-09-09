<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * WC_Admin_Notes_Historical_Data.
 */
class WC_Admin_Notes_Historical_Data
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-historical-data';
    /**
     * Attach hooks.
     */
    public function __construct()
    {
    }
    /**
     * Update status of note to actioned on data import trigger.
     */
    public static function update_status_to_actioned()
    {
    }
    /**
     * Get the note.
     */
    public static function get_note()
    {
    }
}