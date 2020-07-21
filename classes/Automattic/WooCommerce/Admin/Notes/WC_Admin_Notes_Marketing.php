<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * WC_Admin_Notes_Marketing
 */
class WC_Admin_Notes_Marketing
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-marketing-intro';
    /**
     * Get the note.
     */
    public static function get_note()
    {
    }
}