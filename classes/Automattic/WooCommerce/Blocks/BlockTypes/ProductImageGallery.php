<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * ProductImageGallery class.
 */
class ProductImageGallery extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'product-image-gallery';
    /**
     *  Register the context
     *
     * @var string
     */
    protected function get_block_type_uses_context()
    {
    }
    /**
     * Include and render the block.
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