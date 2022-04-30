<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * New! Manage your store activity from the Home screen.
 */
class ManageStoreActivityFromHomeScreen
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-manage-store-activity-from-home-screen';
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
}