<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * NavigationFeedbackFollowUp
 */
class NavigationFeedbackFollowUp
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-navigation-feedback-follow-up';
    /**
     * Should this note exist? (The navigation feature should exist.)
     */
    public static function is_applicable()
    {
    }
    /**
     * Get the note.
     *
     * @return Note
     */
    public static function get_note()
    {
    }
}