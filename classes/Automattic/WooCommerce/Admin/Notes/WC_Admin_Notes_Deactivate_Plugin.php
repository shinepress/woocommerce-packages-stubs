<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * WC_Admin_Notes_Deactivate_Plugin.
 */
class WC_Admin_Notes_Deactivate_Plugin
{
    const NOTE_NAME = 'wc-admin-deactivate-plugin';
    /**
     * Attach hooks.
     */
    public function __construct()
    {
    }
    /**
     * Creates the note to deactivate the older version.
     */
    public static function add_note()
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
}