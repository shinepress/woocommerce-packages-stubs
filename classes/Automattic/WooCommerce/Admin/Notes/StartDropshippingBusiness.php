<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * Start_Dropshipping_Business.
 */
class StartDropshippingBusiness
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-start-dropshipping-business';
    /**
     * Get the note.
     *
     * @return Note|null
     */
    public static function get_note()
    {
    }
}