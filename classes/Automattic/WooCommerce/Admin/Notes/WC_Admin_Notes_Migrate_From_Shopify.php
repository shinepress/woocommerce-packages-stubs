<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * WC_Admin_Notes_Migrate_From_Shopify.
 */
class WC_Admin_Notes_Migrate_From_Shopify
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-migrate-from-shopify';
    /**
     * Get the note.
     */
    public static function get_note()
    {
    }
}