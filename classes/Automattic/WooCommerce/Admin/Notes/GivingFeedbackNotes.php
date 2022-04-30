<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * Giving_Feedback_Notes
 */
class GivingFeedbackNotes
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-store-notice-giving-feedback-2';
    /**
     * Get the note.
     *
     * @return Note
     */
    protected static function get_note()
    {
    }
}