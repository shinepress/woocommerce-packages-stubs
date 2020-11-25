<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * AbstractDynamicBlock class.
 */
abstract class AbstractDynamicBlock
{
    /**
     * Block namespace.
     *
     * @var string
     */
    protected $namespace = 'woocommerce';
    /**
     * Block namespace.
     *
     * @var string
     */
    protected $block_name = '';
    /**
     * Registers the block type with WordPress.
     */
    public function register_block_type()
    {
    }
    /**
     * Include and render a dynamic block.
     *
     * @param array  $attributes Block attributes. Default empty array.
     * @param string $content    Block content. Default empty string.
     * @return string Rendered block type output.
     */
    abstract public function render($attributes = array(), $content = '');
    /**
     * Get block attributes.
     *
     * @return array
     */
    protected function get_attributes()
    {
    }
    /**
     * Get the schema for the alignment property.
     *
     * @return array Property definition for align.
     */
    protected function get_schema_align()
    {
    }
    /**
     * Get the schema for a list of IDs.
     *
     * @return array Property definition for a list of numeric ids.
     */
    protected function get_schema_list_ids()
    {
    }
    /**
     * Get the schema for a boolean value.
     *
     * @param  string $default  The default value.
     * @return array Property definition.
     */
    protected function get_schema_boolean($default = true)
    {
    }
    /**
     * Get the schema for a numeric value.
     *
     * @param  string $default  The default value.
     * @return array Property definition.
     */
    protected function get_schema_number($default)
    {
    }
    /**
     * Get the schema for a string value.
     *
     * @param  string $default  The default value.
     * @return array Property definition.
     */
    protected function get_schema_string($default = '')
    {
    }
}