<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * Mobile_App
 */
class MobileApp
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
     *
     * @return Note
     */
    public static function get_note()
    {
    }
}