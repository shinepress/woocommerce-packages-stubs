<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * Insight_First_Sale.
 */
class InsightFirstSale
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
     *
     * @return Note
     */
    public static function get_note()
    {
    }
}