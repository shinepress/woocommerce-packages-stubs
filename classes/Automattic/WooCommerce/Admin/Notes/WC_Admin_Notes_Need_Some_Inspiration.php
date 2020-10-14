<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * WC_Admin_Notes_Need_Some_Inspiration.
 */
class WC_Admin_Notes_Need_Some_Inspiration
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-need-some-inspiration';
    /**
     * Get the note.
     */
    public static function get_note()
    {
    }
}