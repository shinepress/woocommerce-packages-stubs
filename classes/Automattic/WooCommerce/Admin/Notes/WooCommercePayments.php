<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * WooCommerce_Payments
 */
class WooCommercePayments
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
     *
     * @return Note
     */
    public static function get_note()
    {
    }
    /**
     * Check if the WooCommerce Payments plugin is active or installed.
     */
    protected static function is_installed()
    {
    }
    /**
     * Install and activate WooCommerce Payments.
     *
     * @return boolean Whether the plugin was successfully activated.
     */
    private function install_and_activate_wcpay()
    {
    }
    /**
     * Install & activate WooCommerce Payments plugin, and redirect to setup.
     */
    public function install_on_action()
    {
    }
}