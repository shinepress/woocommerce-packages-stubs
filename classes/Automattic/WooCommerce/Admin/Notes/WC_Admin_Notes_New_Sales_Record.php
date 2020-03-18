<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * WC_Admin_Notes_New_Sales_Record
 */
class WC_Admin_Notes_New_Sales_Record
{
    const NOTE_NAME = 'wc-admin-new-sales-record';
    const RECORD_DATE_OPTION_KEY = 'woocommerce_sales_record_date';
    // ISO 8601 (YYYY-MM-DD) date.
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
    public static function possibly_add_sales_record_note()
    {
    }
}