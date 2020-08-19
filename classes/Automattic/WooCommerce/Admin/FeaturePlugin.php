<?php

namespace Automattic\WooCommerce\Admin;

/**
 * Feature plugin main class.
 *
 * @internal This file will not be bundled with woo core, only the feature plugin.
 * @internal Note this is not called WC_Admin due to a class already existing in core with that name.
 */
class FeaturePlugin
{
    /**
     * The single instance of the class.
     *
     * @var object
     */
    protected static $instance = null;
    /**
     * Constructor
     *
     * @return void
     */
    protected function __construct()
    {
    }
    /**
     * Get class instance.
     *
     * @return object Instance.
     */
    final public static function instance()
    {
    }
    /**
     * Init the feature plugin, only if we can detect both Gutenberg and WooCommerce.
     */
    public function init()
    {
    }
    /**
     * Install DB and create cron events when activated.
     *
     * @return void
     */
    public function on_activation()
    {
    }
    /**
     * Remove WooCommerce Admin scheduled actions on deactivate.
     *
     * @return void
     */
    public function on_deactivation()
    {
    }
    /**
     * Setup plugin once all other plugins are loaded.
     *
     * @return void
     */
    public function on_plugins_loaded()
    {
    }
    /**
     * Define Constants.
     */
    protected function define_constants()
    {
    }
    /**
     * Load Localisation files.
     */
    protected function load_plugin_textdomain()
    {
    }
    /**
     * Include WC Admin classes.
     */
    public function includes()
    {
    }
    /**
     * Set up our admin hooks and plugin loader.
     */
    protected function hooks()
    {
    }
    /**
     * Get an array of dependency error messages.
     *
     * @return array
     */
    protected function get_dependency_errors()
    {
    }
    /**
     * Returns true if all dependencies for the wc-admin plugin are loaded.
     *
     * @return bool
     */
    public function has_satisfied_dependencies()
    {
    }
    /**
     * Deactivates this plugin.
     */
    public function deactivate_self()
    {
    }
    /**
     * Notify users of the plugin requirements.
     */
    public function render_dependencies_notice()
    {
    }
    /**
     * Overwrites the allowed features array using a local `feature-config.php` file.
     *
     * @param array $features Array of feature slugs.
     */
    public function replace_supported_features($features)
    {
    }
    /**
     * Adds a menu item for the wc-admin devdocs.
     */
    public function register_devdocs_page()
    {
    }
    /**
     * Define constant if not already set.
     *
     * @param string      $name  Constant name.
     * @param string|bool $value Constant value.
     */
    protected function define($name, $value)
    {
    }
    /**
     * Prevent cloning.
     */
    private function __clone()
    {
    }
    /**
     * Prevent unserializing.
     */
    private function __wakeup()
    {
    }
}