<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * Cart class.
 *
 * @internal
 */
class Cart extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'cart';
    /**
     * Registers the block type with WordPress.
     */
    public function register_block_type()
    {
    }
    /**
     * Append frontend scripts when rendering the Cart block.
     *
     * @param array|\WP_Block $attributes Block attributes, or an instance of a WP_Block. Defaults to an empty array.
     * @param string          $content    Block content. Default empty string.
     * @return string Rendered block type output.
     */
    public function render($attributes = array(), $content = '')
    {
    }
    /**
     * Extra data passed through from server to client for block.
     *
     * @param array $attributes  Any attributes that currently are available from the block.
     *                           Note, this will be empty in the editor context when the block is
     *                           not in the post content on editor load.
     */
    protected function enqueue_data(array $attributes = [])
    {
    }
    /**
     * Removes accents from an array of values, sorts by the values, then returns the original array values sorted.
     *
     * @param array $array Array of values to sort.
     * @return array Sorted array.
     */
    protected function deep_sort_with_accents($array)
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
     * Hydrate the cart block with data from the API.
     *
     * @param AssetDataRegistry $data_registry Data registry instance.
     */
    protected function hydrate_from_api(\Automattic\WooCommerce\Blocks\Assets\AssetDataRegistry $data_registry)
    {
    }
    /**
     * Render skeleton markup for the cart block.
     */
    protected function get_skeleton()
    {
    }
}