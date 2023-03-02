<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * SingleProduct class.
 */
class SingleProduct extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'single-product';
    /**
     * Enqueue frontend assets for this block, just in time for rendering.
     *
     * @param array $attributes  Any attributes that currently are available from the block.
     */
    protected function enqueue_assets(array $attributes)
    {
    }
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
     * Hydrate the Single Product block with data from the API.
     *
     * @param int $product_id ID of the product.
     */
    protected function hydrate_from_api(int $product_id)
    {
    }
}