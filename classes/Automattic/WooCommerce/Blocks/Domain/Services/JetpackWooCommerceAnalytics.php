<?php

namespace Automattic\WooCommerce\Blocks\Domain\Services;

/**
 * Service class to integrate Blocks with the Jetpack WooCommerce Analytics extension,
 */
class JetpackWooCommerceAnalytics
{
    /**
     * Instance of the asset API.
     *
     * @var AssetApi
     */
    protected $asset_api;
    /**
     * Instance of the asset data registry.
     *
     * @var AssetDataRegistry
     */
    protected $asset_data_registry;
    /**
     * Instance of the block templates controller.
     *
     * @var BlockTemplatesController
     */
    protected $block_templates_controller;
    /**
     * Whether the required Jetpack WooCommerce Analytics classes are available.
     *
     * @var bool
     */
    protected $is_compatible;
    /**
     * Constructor.
     *
     * @param AssetApi                 $asset_api Instance of the asset API.
     * @param AssetDataRegistry        $asset_data_registry Instance of the asset data registry.
     * @param BlockTemplatesController $block_templates_controller Instance of the block templates controller.
     */
    public function __construct(\Automattic\WooCommerce\Blocks\Assets\Api $asset_api, \Automattic\WooCommerce\Blocks\Assets\AssetDataRegistry $asset_data_registry, \Automattic\WooCommerce\Blocks\BlockTemplatesController $block_templates_controller)
    {
    }
    /**
     * Hook into WP.
     */
    public function init()
    {
    }
    /**
     * Gets product categories or varation attributes as a formatted concatenated string
     *
     * @param object $product WC_Product.
     * @return string
     */
    public function get_product_categories_concatenated($product)
    {
    }
    /**
     * Gather relevant product information. Taken from Jetpack WooCommerce Analytics Module.
     *
     * @param \WC_Product $product product.
     * @return array
     */
    public function get_product_details($product)
    {
    }
    /**
     * Save the order received page view event properties to the asset data registry. The front end will consume these
     * later.
     *
     * @param int $order_id The order ID.
     *
     * @return void
     */
    public function output_order_received_page_view_properties($order_id)
    {
    }
    /**
     * Check compatibility with Jetpack WooCommerce Analytics.
     *
     * @return void
     */
    public function check_compatibility()
    {
    }
    /**
     * Initialize if compatible.
     */
    public function init_if_compatible()
    {
    }
    /**
     * Register scripts.
     */
    public function register_assets()
    {
    }
    /**
     * Enqueue the Google Tag Manager script if prerequisites are met.
     */
    public function enqueue_scripts()
    {
    }
    /**
     * Enqueue the Google Tag Manager script if prerequisites are met.
     */
    public function register_script_data()
    {
    }
    /**
     * Get the current user id
     *
     * @return int
     */
    private function get_user_id()
    {
    }
    /**
     * Default event properties which should be included with all events.
     *
     * @return array Array of standard event props.
     */
    public function get_common_properties()
    {
    }
    /**
     * Get info about the cart & checkout pages, in particular whether the store is using shortcodes or Gutenberg blocks.
     * This info is cached in a transient.
     *
     * @return array
     */
    public function get_cart_checkout_info()
    {
    }
    /**
     * Get the additional blocks used in a post or template.
     *
     * @param string $content The post content.
     * @param array  $exclude The blocks to exclude.
     *
     * @return array The additional blocks.
     */
    private function get_additional_blocks($content, $exclude = array())
    {
    }
    /**
     * Get the nested blocks from a block array.
     *
     * @param array    $blocks  The blocks array to find nested blocks inside.
     * @param string[] $exclude Blocks to exclude, won't find nested blocks within any of the supplied blocks.
     *
     * @return array
     */
    private function get_nested_blocks($blocks, $exclude = array())
    {
    }
    /**
     * Track local pickup settings changes via Store API
     *
     * @param bool              $served Whether the request has already been served.
     * @param \WP_REST_Response $result The response object.
     * @param \WP_REST_Request  $request The request object.
     * @return bool
     */
    public function track_local_pickup($served, $result, $request)
    {
    }
}