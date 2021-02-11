<?php

namespace Automattic\WooCommerce\Admin;

/**
 * Loader Class.
 */
class Loader
{
    /**
     * App entry point.
     */
    const APP_ENTRY_POINT = 'wc-admin';
    /**
     * Class instance.
     *
     * @var Loader instance
     */
    protected static $instance = null;
    /**
     * An array of classes to load from the includes folder.
     *
     * @var array
     */
    protected static $classes = array();
    /**
     * WordPress capability required to use analytics features.
     *
     * @var string
     */
    protected static $required_capability = null;
    /**
     * Get class instance.
     */
    public static function get_instance()
    {
    }
    /**
     * Constructor.
     * Hooks added here should be removed in `wc_admin_initialize` via the feature plugin.
     */
    public function __construct()
    {
    }
    /**
     * Add custom tables to $wpdb object.
     */
    public static function define_tables()
    {
    }
    /**
     * Gets a build configured array of enabled WooCommerce Admin features/sections.
     *
     * @return array Enabled Woocommerce Admin features/sections.
     */
    public static function get_features()
    {
    }
    /**
     * Gets WordPress capability required to use analytics features.
     *
     * @return string
     */
    public static function get_analytics_capability()
    {
    }
    /**
     * Helper function indicating whether the current user has the required analytics capability.
     *
     * @return bool
     */
    public static function user_can_analytics()
    {
    }
    /**
     * Returns if a specific wc-admin feature is enabled.
     *
     * @param  string $feature Feature slug.
     * @return bool Returns true if the feature is enabled.
     */
    public static function is_feature_enabled($feature)
    {
    }
    /**
     * Determines if a minified JS file should be served.
     *
     * @param  boolean $script_debug Only serve unminified files if script debug is on.
     * @return boolean If js asset should use minified version.
     */
    public static function should_use_minified_js_file($script_debug)
    {
    }
    /**
     * Gets the URL to an asset file.
     *
     * @param  string $file File name (without extension).
     * @param  string $ext File extension.
     * @return string URL to asset.
     */
    public static function get_url($file, $ext)
    {
    }
    /**
     * Gets the file modified time as a cache buster if we're in dev mode, or the plugin version otherwise.
     *
     * @param string $ext File extension.
     * @return string The cache buster value to use for the given file.
     */
    public static function get_file_version($ext)
    {
    }
    /**
     * Gets the path for the asset depending on file type.
     *
     * @param  string $ext File extension.
     * @return string Folder path of asset.
     */
    private static function get_path($ext)
    {
    }
    /**
     * Class loader for enabled WooCommerce Admin features/sections.
     */
    public static function load_features()
    {
    }
    /**
     * Connects existing WooCommerce pages.
     *
     * @todo The entry point for the embed needs moved to this class as well.
     */
    public static function register_page_handler()
    {
    }
    /**
     * Registers the store details (profiler) page.
     */
    public static function register_store_details_page()
    {
    }
    /**
     * Remove the menu item for the app entry point page.
     */
    public static function remove_app_entry_page_menu_item()
    {
    }
    /**
     * Registers all the neccessary scripts and styles to show the admin experience.
     */
    public static function register_scripts()
    {
    }
    /**
     * Generate a filename to cache translations from JS chunks.
     *
     * @param string $domain Text domain.
     * @param string $locale Locale being retrieved.
     * @return string Filename.
     */
    public static function get_combined_translation_filename($domain, $locale)
    {
    }
    /**
     * Find and combine translation chunk files.
     *
     * Only targets files that aren't represented by a registered script (e.g. not passed to wp_register_script()).
     *
     * @param string $lang_dir Path to language files.
     * @param string $domain Text domain.
     * @param string $locale Locale being retrieved.
     * @return array Combined translation chunk data.
     */
    public static function get_translation_chunk_data($lang_dir, $domain, $locale)
    {
    }
    /**
     * Combine translation chunks when files are updated.
     *
     * This function combines JSON translation data auto-extracted by GlotPress
     * from Webpack-generated JS chunks into a single file that can be used in
     * subsequent requests. This is necessary since the JS chunks are not known
     * to WordPress via wp_register_script() and wp_set_script_translations().
     *
     * @param Language_Pack_Upgrader $instance Upgrader instance.
     * @param array                  $hook_extra Info about the upgraded language packs.
     */
    public static function combine_translation_chunk_files($instance, $hook_extra)
    {
    }
    /**
     * Load translation strings from language packs for dynamic imports.
     *
     * @param string $file File location for the script being translated.
     * @param string $handle Script handle.
     * @param string $domain Text domain.
     *
     * @return string New file location for the script being translated.
     */
    public static function load_script_translation_file($file, $handle, $domain)
    {
    }
    /**
     * Loads the required scripts on the correct pages.
     */
    public static function load_scripts()
    {
    }
    /**
     * Render a preload link tag for a dependency, optionally
     * checked against a provided allowlist.
     *
     * See: https://macarthur.me/posts/preloading-javascript-in-wordpress
     *
     * @param WP_Dependency $dependency The WP_Dependency being preloaded.
     * @param string        $type Dependency type - 'script' or 'style'.
     * @param array         $allowlist Optional. List of allowed dependency handles.
     */
    public static function maybe_output_preload_link_tag($dependency, $type, $allowlist = array())
    {
    }
    /**
     * Output a preload link tag for dependencies (and their sub dependencies)
     * with an optional allowlist.
     *
     * See: https://macarthur.me/posts/preloading-javascript-in-wordpress
     *
     * @param string $type Dependency type - 'script' or 'style'.
     * @param array  $allowlist Optional. List of allowed dependency handles.
     */
    public static function output_header_preload_tags_for_type($type, $allowlist = array())
    {
    }
    /**
     * Output preload link tags for all enqueued stylesheets and scripts.
     *
     * See: https://macarthur.me/posts/preloading-javascript-in-wordpress
     */
    public static function output_header_preload_tags()
    {
    }
    /**
     * Returns true if we are on a JS powered admin page or
     * a "classic" (non JS app) powered admin page (an embedded page).
     */
    public static function is_admin_or_embed_page()
    {
    }
    /**
     * Returns true if we are on a JS powered admin page.
     */
    public static function is_admin_page()
    {
    }
    /**
     *  Returns true if we are on a "classic" (non JS app) powered admin page.
     *
     * TODO: See usage in `admin.php`. This needs refactored and implemented properly in core.
     */
    public static function is_embed_page()
    {
    }
    /**
     * Returns breadcrumbs for the current page.
     */
    private static function get_embed_breadcrumbs()
    {
    }
    /**
     * Outputs breadcrumbs via PHP for the initial load of an embedded page.
     *
     * @param array $section Section to create breadcrumb from.
     */
    private static function output_heading($section)
    {
    }
    /**
     * Set up a div for the header embed to render into.
     * The initial contents here are meant as a place loader for when the PHP page initialy loads.
     */
    public static function embed_page_header()
    {
    }
    /**
     * Adds body classes to the main wp-admin wrapper, allowing us to better target elements in specific scenarios.
     *
     * @param string $admin_body_class Body class to add.
     */
    public static function add_admin_body_classes($admin_body_class = '')
    {
    }
    /**
     * Adds an iOS "Smart App Banner" for display on iOS Safari.
     * See https://developer.apple.com/library/archive/documentation/AppleApplications/Reference/SafariWebContent/PromotingAppswithAppBanners/PromotingAppswithAppBanners.html
     */
    public static function smart_app_banner()
    {
    }
    /**
     * Removes notices that should not be displayed on WC Admin pages.
     */
    public static function remove_notices()
    {
    }
    /**
     * Runs before admin notices action and hides them.
     */
    public static function inject_before_notices()
    {
    }
    /**
     * Runs after admin notices and closes div.
     */
    public static function inject_after_notices()
    {
    }
    /**
     * Edits Admin title based on section of wc-admin.
     *
     * @param string $admin_title Modifies admin title.
     * @todo Can we do some URL rewriting so we can figure out which page they are on server side?
     */
    public static function update_admin_title($admin_title)
    {
    }
    /**
     * Set up a div for the app to render into.
     */
    public static function page_wrapper()
    {
    }
    /**
     * Hooks extra neccessary data into the component settings array already set in WooCommerce core.
     *
     * @param array $settings Array of component settings.
     * @return array Array of component settings.
     */
    public static function add_component_settings($settings)
    {
    }
    /**
     * Format order statuses by removing a leading 'wc-' if present.
     *
     * @param array $statuses Order statuses.
     * @return array formatted statuses.
     */
    public static function get_order_statuses($statuses)
    {
    }
    /**
     * Get all order statuses present in analytics tables that aren't registered.
     *
     * @return array Unregistered order statuses.
     */
    public static function get_unregistered_order_statuses()
    {
    }
    /**
     * Register the admin settings for use in the WC REST API
     *
     * @param array $groups Array of setting groups.
     * @return array
     */
    public static function add_settings_group($groups)
    {
    }
    /**
     * Add WC Admin specific settings
     *
     * @param array $settings Array of settings in wc admin group.
     * @return array
     */
    public static function add_settings($settings)
    {
    }
    /**
     * Gets custom settings used for WC Admin.
     *
     * @param array $settings Array of settings to merge into.
     * @return array
     */
    public static function get_custom_settings($settings)
    {
    }
    /**
     * Return an object defining the currecy options for the site's current currency
     *
     * @return  array  Settings for the current currency {
     *     Array of settings.
     *
     *     @type string $code       Currency code.
     *     @type string $precision  Number of decimals.
     *     @type string $symbol     Symbol for currency.
     * }
     */
    public static function get_currency_settings()
    {
    }
    /**
     * Registers WooCommerce specific user data to the WordPress user API.
     */
    public static function register_user_data()
    {
    }
    /**
     * For all the registered user data fields (  Loader::get_user_data_fields ), fetch the data
     * for returning via the REST API.
     *
     * @param WP_User $user Current user.
     */
    public static function get_user_data_values($user)
    {
    }
    /**
     * For all the registered user data fields ( Loader::get_user_data_fields ), update the data
     * for the REST API.
     *
     * @param array   $values   The new values for the meta.
     * @param WP_User $user     The current user.
     * @param string  $field_id The field id for the user meta.
     */
    public static function update_user_data_values($values, $user, $field_id)
    {
    }
    /**
     * We store some WooCommerce specific user meta attached to users endpoint,
     * so that we can track certain preferences or values such as the inbox activity panel last open time.
     * Additional fields can be added in the function below, and then used via wc-admin's currentUser data.
     *
     * @return array Fields to expose over the WP user endpoint.
     */
    public static function get_user_data_fields()
    {
    }
    /**
     * Helper to update user data fields.
     *
     * @param int    $user_id  User ID.
     * @param string $field Field name.
     * @param mixed  $value  Field value.
     */
    public static function update_user_data_field($user_id, $field, $value)
    {
    }
    /**
     * Helper to retrive user data fields.
     *
     * Migrates old key prefixes as well.
     *
     * @param int    $user_id  User ID.
     * @param string $field Field name.
     * @return mixed The user field value.
     */
    public static function get_user_data_field($user_id, $field)
    {
    }
    /**
     * Injects wp-shared-settings as a dependency if it's present.
     */
    public static function inject_wc_settings_dependencies()
    {
    }
    /**
     * Delete woocommerce_onboarding_homepage_post_id field when the homepage is deleted
     *
     * @param int $post_id The deleted post id.
     */
    public static function delete_homepage($post_id)
    {
    }
}