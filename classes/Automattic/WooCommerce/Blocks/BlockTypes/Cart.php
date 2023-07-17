<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * Cart class.
 *
 * @internal
 */
class Cart extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'cart';
    /**
     * Chunks build folder.
     *
     * @var string
     */
    protected $chunks_folder = 'cart-blocks';
    /**
     * Get the editor script handle for this block type.
     *
     * @param string $key Data to get, or default to everything.
     * @return array|string;
     */
    protected function get_block_type_editor_script($key = null)
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
     * Enqueue frontend assets for this block, just in time for rendering.
     *
     * @param array $attributes  Any attributes that currently are available from the block.
     */
    protected function enqueue_assets(array $attributes)
    {
    }
    /**
     * Append frontend scripts when rendering the Cart block.
     *
     * @param array    $attributes Block attributes.
     * @param string   $content    Block content.
     * @param WP_Block $block      Block instance.
     * @return string Rendered block type output.
     */
    protected function render($attributes, $content, $block)
    {
    }
    /**
     * Extra data passed through from server to client for block.
     *
     * @param array $attributes  Any attributes that currently are available from the block.
     *                           Note, this will be empty in the editor context when the block is
     *                           not in the post content on editor load.
     */
    protected function enqueue_data(array $attributes = [])
    {
    }
    /**
     * Hydrate the cart block with data from the API.
     */
    protected function hydrate_from_api()
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
     * Get list of Cart block & its inner-block types.
     *
     * @return array;
     */
    public static function get_cart_block_types()
    {
    }
}