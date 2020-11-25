<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * ReviewsByProduct class.
 */
class ReviewsByProduct extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'reviews-by-product';
    /**
     * Registers the block type with WordPress.
     */
    public function register_block_type()
    {
    }
    /**
     * Register/enqueue scripts used for this block.
     *
     * @param array $attributes  Any attributes that currently are available from the block.
     */
    protected function enqueue_scripts(array $attributes = [])
    {
    }
}