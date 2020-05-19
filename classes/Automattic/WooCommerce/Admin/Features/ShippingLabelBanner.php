<?php

namespace Automattic\WooCommerce\Admin\Features;

/**
 * Shows print shipping label banner on edit order page.
 */
class ShippingLabelBanner
{
    /**
     * Singleton for the display rules class
     *
     * @var ShippingLabelBannerDisplayRules
     */
    private $shipping_label_banner_display_rules;
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Gets an array of plugins that can be installed & activated via shipping label prompt.
     *
     * @param array $plugins Array of plugin slugs to be allowed.
     *
     * @return array
     */
    public static function get_shipping_banner_allowed_plugins($plugins)
    {
    }
    /**
     * Check if WooCommerce Shipping makes sense for this merchant.
     *
     * @return bool
     */
    private function should_show_meta_box()
    {
    }
    /**
     * Add metabox to order page.
     *
     * @param string   $post_type current post type.
     * @param \WP_Post $post Current post object.
     */
    public function add_meta_boxes($post_type, $post)
    {
    }
    /**
     * Count shippable items
     *
     * @param \WC_Order $order Current order.
     * @return int
     */
    private function count_shippable_items(\WC_Order $order)
    {
    }
    /**
     * Adds JS to order page to render shipping banner.
     *
     * @param string $hook current page hook.
     */
    public function add_print_shipping_label_script($hook)
    {
    }
    /**
     * Render placeholder metabox.
     *
     * @param \WP_Post $post current post.
     * @param array    $args empty args.
     */
    public function meta_box($post, $args)
    {
    }
    /**
     * Return the settings for the component for wc-api to use. If onboarding
     * is active, return its settings. Otherwise, loads "activePlugins" since
     * that's the ones we need to get installation status for WCS and Jetpack.
     *
     * @param array $settings Component settings.
     * @return array
     */
    public function component_settings($settings)
    {
    }
}