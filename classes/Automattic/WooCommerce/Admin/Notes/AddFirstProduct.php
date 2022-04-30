<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * Add_First_Product.
 */
class AddFirstProduct
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-add-first-product-note';
    /**
     * Get the note.
     *
     * @return Note
     */
    public static function get_note()
    {
    }
}