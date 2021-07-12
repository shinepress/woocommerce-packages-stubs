<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * Marketing
 */
class Marketing
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
     *
     * @return Note
     */
    public static function get_note()
    {
    }
}