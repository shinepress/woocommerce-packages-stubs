<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * Welcome to WooCommerce for store users.
 */
class WelcomeToWooCommerceForStoreUsers
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-welcome-to-woocommerce-for-store-users';
    /**
     * Attach hooks.
     */
    public function __construct()
    {
    }
    /**
     * Get the note.
     *
     * @return Note|null
     */
    public static function get_note()
    {
    }
}