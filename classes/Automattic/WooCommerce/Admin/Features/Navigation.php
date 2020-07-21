<?php

namespace Automattic\WooCommerce\Admin\Features;

/**
 * Contains logic for the WooCommerce Navigation.
 */
class Navigation
{
    /**
     * Class instance.
     *
     * @var Navigation instance
     */
    protected static $instance = null;
    /**
     * Array index of menu capability.
     *
     * @var int
     */
    const CAPABILITY = 1;
    /**
     * Array index of menu callback.
     *
     * @var int
     */
    const CALLBACK = 2;
    /**
     * Array index of menu callback.
     *
     * @var int
     */
    const SLUG = 3;
    /**
     * Array index of menu CSS class string.
     *
     * @var int
     */
    const CSS_CLASSES = 4;
    /**
     * Store top level categories.
     *
     * @var array
     */
    protected static $categories = array();
    /**
     * Store related menu items.
     *
     * @var array
     */
    protected static $menu_items = array();
    /**
     * Screen IDs of registered pages.
     *
     * @var array
     */
    protected static $screen_ids = array();
    /**
     * Registered post types.
     *
     * @var array
     */
    protected static $post_types = array();
    /**
     * Registered callbacks or URLs with migration boolean as key value pairs.
     *
     * @var array
     */
    protected static $callbacks = array();
    /**
     * Check if we're on a WooCommerce page
     *
     * @return bool
     */
    public function is_woocommerce_page()
    {
    }
    /**
     * Get class instance.
     */
    final public static function instance()
    {
    }
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Add navigation classes to body.
     *
     * @param string $classes Classes.
     * @return string
     */
    public function add_body_class($classes)
    {
    }
    /**
     * Add registered admin settings.
     */
    public function add_admin_settings()
    {
    }
    /**
     * Add the core menu items to the new navigation
     */
    public function add_core_menu_items()
    {
    }
    /**
     * Convert a WordPress menu callback to a URL.
     *
     * @param string $callback Menu callback.
     * @return string
     */
    public static function get_callback_url($callback)
    {
    }
    /**
     * Adds a top level menu item to the navigation.
     *
     * @param string $title Menu title.
     * @param string $capability WordPress capability.
     * @param string $slug Menu slug.
     * @param string $url URL or menu callback.
     * @param string $icon Menu icon.
     * @param int    $order Menu order.
     * @param bool   $migrate Migrate the menu option and hide the old one.
     */
    public static function add_menu_category($title, $capability, $slug, $url = null, $icon = null, $order = null, $migrate = true)
    {
    }
    /**
     * Adds a child menu item to the navigation.
     *
     * @param string $parent_slug Parent item slug.
     * @param string $title Menu title.
     * @param string $capability WordPress capability.
     * @param string $slug Menu slug.
     * @param string $url URL or menu callback.
     * @param string $icon Menu icon.
     * @param int    $order Menu order.
     * @param bool   $migrate Migrate the menu option and hide the old one.
     */
    public static function add_menu_item($parent_slug, $title, $capability, $slug, $url = null, $icon = null, $order = null, $migrate = true)
    {
    }
    /**
     * Get the parent menu item if one exists.
     *
     * @param string $url URL or callback.
     * @return string|null
     */
    public static function get_parent_menu_item($url)
    {
    }
    /**
     * Hides all WP admin menus items and adds screen IDs to check for new items.
     *
     * @param array $menu Menu items.
     * @return array
     */
    public static function migrate_menu_items($menu)
    {
    }
    /**
     * Adds a screen ID to the list and automatically finds the parent if none is given.
     *
     * @param string      $url URL or callback for page.
     * @param string|null $parent Parent slug.
     */
    public static function add_screen_id($url, $parent = null)
    {
    }
    /**
     * Add the menu to the page output.
     */
    public function add_menu_settings()
    {
    }
}