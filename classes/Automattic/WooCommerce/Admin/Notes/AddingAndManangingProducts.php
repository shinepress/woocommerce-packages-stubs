<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * Class AddingAndManangingProducts
 *
 * @package Automattic\WooCommerce\Admin\Notes
 */
class AddingAndManangingProducts
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-adding-and-managing-products';
    /**
     * Get the note.
     *
     * @return Note|null
     */
    public static function get_note()
    {
    }
}