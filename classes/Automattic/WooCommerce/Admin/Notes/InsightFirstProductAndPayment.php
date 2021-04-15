<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * Insight_First_Sale.
 */
class InsightFirstProductAndPayment
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-insight-first-product-and-payment';
    /**
     * Get the note.
     *
     * @return Note
     */
    public static function get_note()
    {
    }
}