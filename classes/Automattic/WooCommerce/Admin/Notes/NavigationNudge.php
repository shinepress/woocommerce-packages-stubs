<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * Navigation Nudge.
 */
class NavigationNudge
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-navigation-nudge';
    /**
     * Attach hooks.
     */
    public function __construct()
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
    /**
     * Actions the note when the option is toggled.
     *
     * @param string $old_value Old value.
     * @param string $value     New value.
     */
    public static function action_note($old_value, $value)
    {
    }
}