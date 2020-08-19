<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * WC_Admin_Notes_Online_Clothing_Store.
 */
class WC_Admin_Notes_Online_Clothing_Store
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-online-clothing-store';
    /**
     * Returns whether the industries includes fashion-apparel-accessories.
     *
     * @param array $industries The industries to search.
     *
     * @return bool Whether the industries includes fashion-apparel-accessories.
     */
    private static function is_in_fashion_industry($industries)
    {
    }
    /**
     * Get the note.
     */
    public static function get_note()
    {
    }
}