<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * WC_Admin_Notes_First_Product.
 */
class WC_Admin_Notes_First_Product
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-first-product';
    /**
     * Get the note.
     */
    public static function get_note()
    {
    }
}