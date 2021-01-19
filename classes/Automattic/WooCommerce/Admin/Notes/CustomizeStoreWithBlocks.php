<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * Customize_Store_With_Blocks.
 */
class CustomizeStoreWithBlocks
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-customize-store-with-blocks';
    /**
     * Get the note.
     *
     * @return Note
     */
    public static function get_note()
    {
    }
}