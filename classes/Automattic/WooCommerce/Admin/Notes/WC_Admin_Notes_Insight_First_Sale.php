<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * WC_Admin_Notes_Insight_First_Sale.
 */
class WC_Admin_Notes_Insight_First_Sale
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-insight-first-sale';
    /**
     * Get the note.
     */
    public static function get_note()
    {
    }
}