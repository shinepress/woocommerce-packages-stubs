<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * WC_Admin_Notes_Google_Ads_And_Marketing
 */
class WC_Admin_Notes_Google_Ads_And_Marketing
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-google-ads-and-marketing';
    /**
     * Name of plugin file.
     */
    const PLUGIN_FILE = 'kliken-marketing-for-google/kliken-marketing-for-google.php';
    /**
     * Possibly add note.
     */
    public static function possibly_add_note()
    {
    }
    /**
     * Get the note.
     */
    public static function get_note()
    {
    }
    /**
     * Determine if Google Ads and Marketing is already active or installed
     *
     * @return bool
     */
    protected static function is_google_ads_and_marketing_installed()
    {
    }
    /**
     * Determine the number of orders in the last month
     *
     * @return int
     */
    protected static function orders_last_month()
    {
    }
}