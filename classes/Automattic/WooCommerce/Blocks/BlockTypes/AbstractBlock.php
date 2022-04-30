<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * AbstractBlock class.
 */
abstract class AbstractBlock
{
    /**
     * Block namespace.
     *
     * @var string
     */
    protected $namespace = 'woocommerce';
    /**
     * Block name within this namespace.
     *
     * @var string
     */
    protected $block_name = '';
    /**
     * Tracks if assets have been enqueued.
     *
     * @var boolean
     */
    protected $enqueued_assets = false;
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
     * Instance of the integration registry.
     *
     * @var IntegrationRegistry
     */
    protected $integration_registry;
    /**
     * Constructor.
     *
     * @param AssetApi            $asset_api Instance of the asset API.
     * @param AssetDataRegistry   $asset_data_registry Instance of the asset data registry.
     * @param IntegrationRegistry $integration_registry Instance of the integration registry.
     * @param string              $block_name Optionally set block name during construct.
     */
    public function __construct(\Automattic\WooCommerce\Blocks\Assets\Api $asset_api, \Automattic\WooCommerce\Blocks\Assets\AssetDataRegistry $asset_data_registry, \Automattic\WooCommerce\Blocks\Integrations\IntegrationRegistry $integration_registry, $block_name = '')
    {
    }
    /**
     * The default render_callback for all blocks. This will ensure assets are enqueued just in time, then render
     * the block (if applicable).
     *
     * @param array|WP_Block $attributes Block attributes, or an instance of a WP_Block. Defaults to an empty array.
     * @param string         $content    Block content. Default empty string.
     * @return string Rendered block type output.
     */
    public function render_callback($attributes = [], $content = '')
    {
    }
    /**
     * Enqueue assets used for rendering the block in editor context.
     *
     * This is needed if a block is not yet within the post content--`render` and `enqueue_assets` may not have ran.
     */
    public function enqueue_editor_assets()
    {
    }
    /**
     * Initialize this block type.
     *
     * - Hook into WP lifecycle.
     * - Register the block with WordPress.
     */
    protected function initialize()
    {
    }
    /**
     * Register script and style assets for the block type before it is registered.
     *
     * This registers the scripts; it does not enqueue them.
     */
    protected function register_block_type_assets()
    {
    }
    /**
     * Registers the block type with WordPress.
     */
    protected function register_block_type()
    {
    }
    /**
     * Get the block type.
     *
     * @return string
     */
    protected function get_block_type()
    {
    }
    /**
     * Get the render callback for this block type.
     *
     * Dynamic blocks should return a callback, for example, `return [ $this, 'render' ];`
     *
     * @see $this->register_block_type()
     * @return callable|null;
     */
    protected function get_block_type_render_callback()
    {
    }
    /**
     * Get the editor script data for this block type.
     *
     * @see $this->register_block_type()
     * @param string $key Data to get, or default to everything.
     * @return array|string
     */
    protected function get_block_type_editor_script($key = null)
    {
    }
    /**
     * Get the editor style handle for this block type.
     *
     * @see $this->register_block_type()
     * @return string|null
     */
    protected function get_block_type_editor_style()
    {
    }
    /**
     * Get the frontend script handle for this block type.
     *
     * @see $this->register_block_type()
     * @param string $key Data to get, or default to everything.
     * @return array|string
     */
    protected function get_block_type_script($key = null)
    {
    }
    /**
     * Get the frontend style handle for this block type.
     *
     * @see $this->register_block_type()
     * @return string|null
     */
    protected function get_block_type_style()
    {
    }
    /**
     * Get the supports array for this block type.
     *
     * @see $this->register_block_type()
     * @return string;
     */
    protected function get_block_type_supports()
    {
    }
    /**
     * Get block attributes.
     *
     * @return array;
     */
    protected function get_block_type_attributes()
    {
    }
    /**
     * Parses block attributes from the render_callback.
     *
     * @param array|WP_Block $attributes Block attributes, or an instance of a WP_Block. Defaults to an empty array.
     * @return array
     */
    protected function parse_render_callback_attributes($attributes)
    {
    }
    /**
     * Render the block. Extended by children.
     *
     * @param array  $attributes Block attributes.
     * @param string $content    Block content.
     * @return string Rendered block type output.
     */
    protected function render($attributes, $content)
    {
    }
    /**
     * Enqueue frontend assets for this block, just in time for rendering.
     *
     * @internal This prevents the block script being enqueued on all pages. It is only enqueued as needed. Note that
     * we intentionally do not pass 'script' to register_block_type.
     *
     * @param array $attributes  Any attributes that currently are available from the block.
     */
    protected function enqueue_assets(array $attributes)
    {
    }
    /**
     * Injects block attributes into the block.
     *
     * @param string $content HTML content to inject into.
     * @param array  $attributes Key value pairs of attributes.
     * @return string Rendered block with data attributes.
     */
    protected function inject_html_data_attributes($content, array $attributes)
    {
    }
    /**
     * Converts block attributes to HTML data attributes.
     *
     * @param array $attributes Key value pairs of attributes.
     * @return string Rendered HTML attributes.
     */
    protected function get_html_data_attributes(array $attributes)
    {
    }
    /**
     * Data passed through from server to client for block.
     *
     * @param array $attributes  Any attributes that currently are available from the block.
     *                           Note, this will be empty in the editor context when the block is
     *                           not in the post content on editor load.
     */
    protected function enqueue_data(array $attributes = [])
    {
    }
    /**
     * Register/enqueue scripts used for this block on the frontend, during render.
     *
     * @param array $attributes Any attributes that currently are available from the block.
     */
    protected function enqueue_scripts(array $attributes = [])
    {
    }
    /**
     * Script to append the correct sizing class to a block skeleton.
     *
     * @return string
     */
    protected function get_skeleton_inline_script()
    {
    }
}