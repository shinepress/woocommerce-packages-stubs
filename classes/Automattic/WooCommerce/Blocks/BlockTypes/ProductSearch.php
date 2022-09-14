<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * ProductSearch class.
 */
class ProductSearch extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'product-search';
    /**
     * Get the frontend script handle for this block type.
     *
     * @param string $key Data to get, or default to everything.
     * @return null
     */
    protected function get_block_type_script($key = null)
    {
    }
    /**
     * Render the block.
     *
     * @param array  $attributes Block attributes.
     * @param string $content    Block content.
     * @return string Rendered block type output.
     */
    protected function render($attributes, $content)
    {
    }
}