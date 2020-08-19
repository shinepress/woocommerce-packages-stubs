<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * WC_Admin_Notes_Mobile_App
 */
class WC_Admin_Notes_Mobile_App
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-mobile-app';
    /**
     * Get the note.
     */
    public static function get_note()
    {
    }
}