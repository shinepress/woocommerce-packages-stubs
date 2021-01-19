<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * NavigationFeedback
 */
class NavigationFeedback
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-navigation-feedback';
    /**
     * Get the note.
     *
     * @return Note
     */
    public static function get_note()
    {
    }
}