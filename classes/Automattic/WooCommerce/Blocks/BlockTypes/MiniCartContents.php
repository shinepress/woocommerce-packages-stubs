<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * Mini Cart class.
 *
 * @internal
 */
class MiniCartContents extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'mini-cart-contents';
    /**
     * Get the editor script handle for this block type.
     *
     * @param string $key Data to get, or default to everything.
     *
     * @return array|string;
     */
    protected function get_block_type_editor_script($key = null)
    {
    }
    /**
     * Get the frontend script handle for this block type.
     *
     * @param string $key Data to get, or default to everything.
     *
     * @return null
     */
    protected function get_block_type_script($key = null)
    {
    }
    /**
     * Render the markup for the Mini Cart contents block.
     *
     * @param array  $attributes Block attributes.
     * @param string $content    Block content.
     *
     * @return string Rendered block type output.
     */
    protected function render($attributes, $content)
    {
    }
}