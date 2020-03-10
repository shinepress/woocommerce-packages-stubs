<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * WC_Admin_Notes_Facebook_Extension
 */
class WC_Admin_Notes_Facebook_Extension
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-facebook-extension';
    /**
     * Attach hooks.
     */
    public function __construct()
    {
    }
    /**
     * Possibly add Facebook extension note.
     */
    public static function possibly_add_facebook_note()
    {
    }
    /**
     * Install Facebook extension when note is actioned.
     *
     * @param WC_Admin_Note $note Note being acted upon.
     */
    public function install_facebook_extension($note)
    {
    }
}