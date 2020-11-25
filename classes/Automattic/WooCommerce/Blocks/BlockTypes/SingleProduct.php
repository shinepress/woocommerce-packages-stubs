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
     * Registers the block type with WordPress.
     */
    public function register_block_type()
    {
    }
    /**
     * Register/enqueue scripts used for this block.
     *
     * @param array $attributes  Any attributes that currently are available from the block.
     *                           Note, this will be empty in the editor context when the block is
     *                           not in the post content on editor load.
     */
    protected function enqueue_scripts(array $attributes = [])
    {
    }
    /**
     * Render the block on the frontend.
     *
     * @param array  $attributes Block attributes. Default empty array.
     * @param string $content    Block content. Default empty string.
     * @return string Rendered block type output.
     */
    public function render($attributes = array(), $content = '')
    {
    }
}