<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * AtomicBlock class.
 */
class AtomicBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Inject attributes and block name.
     *
     * @param array|\WP_Block $attributes Block attributes, or an instance of a WP_Block. Defaults to an empty array.
     * @param string          $content    Block content. Default empty string.
     * @return string Rendered block type output.
     */
    public function render($attributes = [], $content = '')
    {
    }
    /**
     * Registers the block type with WordPress.
     */
    public function register_block_type()
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
}