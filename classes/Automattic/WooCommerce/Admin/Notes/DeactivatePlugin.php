<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * Deactivate_Plugin.
 */
class DeactivatePlugin
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-deactivate-plugin';
    /**
     * Attach hooks.
     */
    public function __construct()
    {
    }
    /**
     * Get the note.
     *
     * @return Note
     */
    public static function get_note()
    {
    }
    /**
     * Delete the note if the version is higher than the included.
     */
    public static function delete_note()
    {
    }
    /**
     * Deactivate feature plugin.
     */
    public function deactivate_feature_plugin()
    {
    }
    /**
     * Deactivation redirect
     *
     * @param  string $nonce The nonce.
     */
    public static function deactivate_redirect($nonce)
    {
    }
}