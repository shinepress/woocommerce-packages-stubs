<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * ProductImage class.
 */
class ProductImage extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'product-image';
    /**
     * API version name.
     *
     * @var string
     */
    protected $api_version = '2';
    /**
     * Get block supports. Shared with the frontend.
     * IMPORTANT: If you change anything here, make sure to update the JS file too.
     *
     * @return array
     */
    protected function get_block_type_supports()
    {
    }
    /**
     * It is necessary to register and enqueues assets during the render phase because we want to load assets only if the block has the content.
     */
    protected function register_block_type_assets()
    {
    }
    /**
     * Register the context.
     */
    protected function get_block_type_uses_context()
    {
    }
    /**
     * Get the block's attributes.
     *
     * @param array $attributes Block attributes. Default empty array.
     * @return array  Block attributes merged with defaults.
     */
    private function parse_attributes($attributes)
    {
    }
    /**
     * Render on Sale Badge.
     *
     * @param \WC_Product $product Product object.
     * @param array       $attributes Attributes.
     * @return string
     */
    private function render_on_sale_badge($product, $attributes)
    {
    }
    /**
     * Render anchor.
     *
     * @param \WC_Product $product Product object.
     * @param array       $attributes Attributes.
     * @return string
     */
    private function render_anchor($product, $attributes)
    {
    }
    /**
     * Render Image.
     *
     * @param \WC_Product $product Product object.
     * @return string
     */
    private function render_image($product)
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
     * Include and render the block
     *
     * @param array    $attributes Block attributes. Default empty array.
     * @param string   $content    Block content. Default empty string.
     * @param WP_Block $block      Block instance.
     * @return string Rendered block type output.
     */
    protected function render($attributes, $content, $block)
    {
    }
}