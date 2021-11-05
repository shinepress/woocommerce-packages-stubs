<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * Tracking_Opt_In
 */
class TrackingOptIn
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-usage-tracking-opt-in';
    /**
     * Attach hooks.
     */
    public function __construct()
    {
    }
    /**
     * Get the note.
     *
     * @return Note|null
     */
    public static function get_note()
    {
    }
    /**
     * Opt in to usage tracking when note is actioned.
     *
     * @param Note $note Note being acted upon.
     */
    public function opt_in_to_tracking($note)
    {
    }
}