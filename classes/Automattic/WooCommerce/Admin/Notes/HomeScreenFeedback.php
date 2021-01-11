<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * Home_Screen_Feedback.
 */
class HomeScreenFeedback
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-home-screen-feedback';
    const HOMESCREEN_ACCESSED_OPTION_NAME = 'wc_admin_note_home_screen_feedback_homescreen_accessed';
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Watch for the homescreen being accessed (by checking to see if it's
     * enabled) and set a time stamp for when it is.
     */
    public function on_init()
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