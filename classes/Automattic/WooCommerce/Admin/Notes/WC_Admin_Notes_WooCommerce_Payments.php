<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * WC_Admin_Notes_WooCommerce_Payments
 */
class WC_Admin_Notes_WooCommerce_Payments
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-woocommerce-payments';
    /**
     * Name of the note for use in the database.
     */
    const PLUGIN_SLUG = 'woocommerce-payments';
    /**
     * Name of the note for use in the database.
     */
    const PLUGIN_FILE = 'woocommerce-payments/woocommerce-payments.php';
    /**
     * Attach hooks.
     */
    public function __construct()
    {
    }
    /**
     * Maybe add a note on WooCommerce Payments for US based sites older than a week without the plugin installed.
     */
    public static function possibly_add_note()
    {
    }
    /**
     * Add a note about WooCommerce Payments.
     */
    public static function add_note()
    {
    }
    /**
     * Check if the WooCommerce Payments plugin is active or installed.
     */
    protected static function is_installed()
    {
    }
    /**
     * Install WooCommerce Payments when note is actioned.
     *
     * @param WC_Admin_Note $note Note being acted upon.
     */
    public function install($note)
    {
    }
}