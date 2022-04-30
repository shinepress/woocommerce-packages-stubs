<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * Adds a note when the profiler was skipped.
 */
class CompleteStoreDetails
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-complete-store-details';
    /**
     * Get the note.
     *
     * @return Note
     */
    public static function get_note()
    {
    }
}