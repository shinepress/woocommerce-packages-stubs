<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * Adds a note when the profiler is completed.
 */
class UpdateStoreDetails
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-update-store-details';
    /**
     * Get the note.
     *
     * @return Note
     */
    public static function get_note()
    {
    }
}