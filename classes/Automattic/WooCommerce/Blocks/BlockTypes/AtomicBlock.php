<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * AtomicBlock class.
 *
 * @internal
 */
class AtomicBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Inject attributes and block name.
     *
     * @param array  $attributes Block attributes.
     * @param string $content    Block content.
     * @return string Rendered block type output.
     */
    protected function render($attributes, $content)
    {
    }
    /**
     * Get the editor script data for this block type.
     *
     * @param string $key Data to get, or default to everything.
     * @return null
     */
    protected function get_block_type_editor_script($key = null)
    {
    }
    /**
     * Get the editor style handle for this block type.
     *
     * @return null
     */
    protected function get_block_type_editor_style()
    {
    }
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
     * Get the frontend style handle for this block type.
     *
     * @return null
     */
    protected function get_block_type_style()
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