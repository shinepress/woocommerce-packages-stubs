<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * AllReviews class.
 */
class AllReviews extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'all-reviews';
    /**
     * Registers the block type with WordPress.
     */
    public function register_block_type()
    {
    }
    /**
     * Append frontend scripts when rendering the Product Categories List block.
     *
     * @param array  $attributes Block attributes. Default empty array.
     * @param string $content    Block content. Default empty string.
     * @return string Rendered block type output.
     */
    public function render($attributes = array(), $content = '')
    {
    }
}