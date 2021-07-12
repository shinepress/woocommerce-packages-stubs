<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * New_Sales_Record
 */
class NewSalesRecord
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-new-sales-record';
    /**
     * Option name for the sales record date in ISO 8601 (YYYY-MM-DD) date.
     */
    const RECORD_DATE_OPTION_KEY = 'woocommerce_sales_record_date';
    /**
     * Option name for the sales record amount.
     */
    const RECORD_AMOUNT_OPTION_KEY = 'woocommerce_sales_record_amount';
    /**
     * Returns the total of yesterday's sales.
     *
     * @param string $date Date for sales to sum (i.e. YYYY-MM-DD).
     * @return floatval
     */
    public static function sum_sales_for_date($date)
    {
    }
    /**
     * Possibly add a sales record note.
     */
    public static function possibly_add_note()
    {
    }
}