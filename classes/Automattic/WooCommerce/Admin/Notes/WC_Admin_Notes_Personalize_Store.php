<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * WC_Admin_Notes_Personalize_Store
 */
class WC_Admin_Notes_Personalize_Store
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-personalize-store';
    /**
     * Possibly add the note.
     */
    public static function possibly_add_personalize_store_note()
    {
    }
}