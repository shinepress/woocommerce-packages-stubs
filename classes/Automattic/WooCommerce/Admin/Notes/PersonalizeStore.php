<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * Personalize_Store
 */
class PersonalizeStore
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-personalize-store';
    /**
     * Get the note.
     *
     * @return Note
     */
    public static function get_note()
    {
    }
}