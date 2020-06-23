<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * WC_Admin_Notes_Tracking_Opt_In
 */
class WC_Admin_Notes_Tracking_Opt_In
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
     * Possibly add Usage Tracking Opt In extension note.
     */
    public static function possibly_add_tracking_opt_in_note()
    {
    }
    /**
     * Opt in to usage tracking when note is actioned.
     *
     * @param WC_Admin_Note $note Note being acted upon.
     */
    public function opt_in_to_tracking($note)
    {
    }
}