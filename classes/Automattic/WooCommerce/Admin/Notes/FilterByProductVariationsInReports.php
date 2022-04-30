<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * FilterByProductVariationsInReports.
 */
class FilterByProductVariationsInReports
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-filter-by-product-variations-in-reports';
    /**
     * Get the note
     *
     * @return Note|null
     */
    public static function get_note()
    {
    }
    /**
     * Returns whether or not there are variable products.
     *
     * @return bool If there are variable products
     */
    private static function are_products_with_variations()
    {
    }
}