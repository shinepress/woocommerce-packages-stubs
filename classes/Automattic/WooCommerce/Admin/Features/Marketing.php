<?php

namespace Automattic\WooCommerce\Admin\Features;

/**
 * Contains backend logic for the Marketing feature.
 */
class Marketing
{
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
     * Registers report pages.
     */
    public function register_pages()
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
     * @return array
     */
    public function get_knowledge_base_posts()
    {
    }
}