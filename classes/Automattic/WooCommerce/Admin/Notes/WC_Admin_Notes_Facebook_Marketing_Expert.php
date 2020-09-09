<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * WC_Admin_Notes_Facebook_Marketing_Expert
 */
class WC_Admin_Notes_Facebook_Marketing_Expert
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-facebook-marketing-expert';
    /**
     * Name of plugin file.
     */
    const PLUGIN_FILE = 'facebook-for-woocommerce/facebook-for-woocommerce.php';
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
     * Determine if Facebook for WooCommerce is already active or installed
     *
     * @return bool
     */
    protected static function is_facebook_for_woocommerce_installed()
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