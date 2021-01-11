<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * Need_Some_Inspiration.
 */
class NeedSomeInspiration
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
     *
     * @return Note
     */
    public static function get_note()
    {
    }
}