<?php

namespace Automattic\WooCommerce\Admin\Features;

/**
 * Contains backend logic for the Marketing feature.
 */
class Marketing
{
    use \Automattic\WooCommerce\Admin\Features\CouponsMovedTrait;
    /**
     * Name of recommended plugins transient.
     *
     * @var string
     */
    const RECOMMENDED_PLUGINS_TRANSIENT = 'wc_marketing_recommended_plugins';
    /**
     * Name of knowledge base post transient.
     *
     * @var string
     */
    const KNOWLEDGE_BASE_TRANSIENT = 'wc_marketing_knowledge_base';
    /**
     * Class instance.
     *
     * @var Marketing instance
     */
    protected static $instance = null;
    /**
     * Get class instance.
     */
    public static function get_instance()
    {
    }
    /**
     * Hook into WooCommerce.
     */
    public function __construct()
    {
    }
    /**
     * Add main marketing menu item.
     *
     * Uses priority of 9 so other items can easily be added at the default priority (10).
     */
    public function add_parent_menu_item()
    {
    }
    /**
     * Registers report pages.
     */
    public function register_pages()
    {
    }
    /**
     * Register the main Marketing page, which is Marketing > Overview.
     *
     * This is done separately because we need to ensure the page is registered properly and
     * that the link is done properly. For some reason the normal page registration process
     * gives us the wrong menu link.
     */
    protected function register_overview_page()
    {
    }
    /**
     * Preload options to prime state of the application.
     *
     * @param array $options Array of options to preload.
     * @return array
     */
    public function preload_options($options)
    {
    }
    /**
     * Add settings for marketing feature.
     *
     * @param array $settings Component settings.
     * @return array
     */
    public function component_settings($settings)
    {
    }
    /**
     * Load recommended plugins from WooCommerce.com
     *
     * @return array
     */
    public function get_recommended_plugins()
    {
    }
    /**
     * Load knowledge base posts from WooCommerce.com
     *
     * @param string $category Category of posts to retrieve.
     * @return array
     */
    public function get_knowledge_base_posts($category)
    {
    }
}