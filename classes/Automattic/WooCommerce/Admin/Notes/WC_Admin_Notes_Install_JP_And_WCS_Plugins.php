<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * WC_Admin_Notes_Install_JP_And_WCS_Plugins
 */
class WC_Admin_Notes_Install_JP_And_WCS_Plugins
{
    const NOTE_NAME = 'wc-admin-install-jp-and-wcs-plugins';
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Possibly add the Install Jetpack and WooCommerceServices plugins note.
     *
     * @param string $slug The slug of the plugin being installed.
     */
    public static function possibly_add_install_jp_and_wcs_note($slug)
    {
    }
    /**
     * Action the Install Jetpack and WooCommerce Services note, if any exists,
     * and as long as both the Jetpack and WooCommerce Services plugins have been
     * activated.
     */
    public static function action_note()
    {
    }
    /**
     * Install the Jetpack and WooCommerce Services plugins in response to the action
     * being clicked in the admin note.
     *
     * @param WC_Admin_Note $note The note being actioned.
     */
    public function install_jp_and_wcs_plugins($note)
    {
    }
    /**
     * Installs and activates the specified plugin.
     *
     * @param string $plugin The plugin slug.
     */
    private function install_and_activate_plugin($plugin)
    {
    }
}