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
    const NOTE_NAME_INTRO = 'wc-admin-marketing-intro';
    /**
     * Maybe add a note introducing the marketing hub.
     */
    public static function possibly_add_note_intro()
    {
    }
}