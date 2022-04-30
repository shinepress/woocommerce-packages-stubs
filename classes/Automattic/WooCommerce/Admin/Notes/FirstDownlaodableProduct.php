<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * FirstDownlaodableProduct.
 */
class FirstDownlaodableProduct
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-first-downloadable-product';
    /**
     * Get the note.
     *
     * @return Note
     */
    public static function get_note()
    {
    }
}