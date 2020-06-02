<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * WC_Admin_Notes_Mobile_App
 */
class WC_Admin_Notes_Mobile_App
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-mobile-app';
    /**
     * Possibly add mobile app note.
     */
    public static function possibly_add_mobile_app_note()
    {
    }
}