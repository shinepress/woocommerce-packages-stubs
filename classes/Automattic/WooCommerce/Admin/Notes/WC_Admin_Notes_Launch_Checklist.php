<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * WC_Admin_Notes_Launch_Checklist
 */
class WC_Admin_Notes_Launch_Checklist
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-launch-checklist';
    /**
     * Get the note.
     */
    public static function get_note()
    {
    }
}