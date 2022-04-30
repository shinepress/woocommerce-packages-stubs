<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * Mini Cart class.
 *
 * @internal
 */
class MiniCart extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'mini-cart';
    /**
     * Array of scripts that will be lazy loaded when interacting with the block.
     *
     * @var string[]
     */
    protected $scripts_to_lazy_load = array();
    /**
     * Get the editor script handle for this block type.
     *
     * @param string $key Data to get, or default to everything.
     * @return array|string;
     */
    protected function get_block_type_editor_script($key = null)
    {
    }
    /**
     * Get the frontend script handle for this block type.
     *
     * @see $this->register_block_type()
     * @param string $key Data to get, or default to everything.
     * @return array|string
     */
    protected function get_block_type_script($key = null)
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
     * Hydrate the cart block with data from the API.
     */
    protected function hydrate_from_api()
    {
    }
    /**
     * Returns the script data given its handle.
     *
     * @param string $handle Handle of the script.
     *
     * @return \_WP_Dependency|null Object containing the script data if found, or null.
     */
    protected function get_script_from_handle($handle)
    {
    }
    /**
     * Recursively appends a scripts and its dependencies into the scripts_to_lazy_load array.
     *
     * @param \_WP_Dependency $script Object containing script data.
     */
    protected function append_script_and_deps_src($script)
    {
    }
    /**
     * Append frontend scripts when rendering the Mini Cart block.
     *
     * @param array  $attributes Block attributes.
     * @param string $content    Block content.
     *
     * @return string Rendered block type output.
     */
    protected function render($attributes, $content)
    {
    }
    /**
     * Render the markup for the Mini Cart block.
     *
     * @param array $attributes Block attributes.
     *
     * @return string The HTML markup.
     */
    protected function get_markup($attributes)
    {
    }
    /**
     * Render the markup of the Cart contents.
     *
     * @param array $cart_contents Array of contents in the cart.
     *
     * @return string The HTML markup.
     */
    protected function get_cart_contents_markup($cart_contents)
    {
    }
    /**
     * Render the skeleton of a Cart item.
     *
     * @return string The skeleton HTML markup.
     */
    protected function get_cart_item_markup()
    {
    }
    /**
     * Get the supports array for this block type.
     *
     * @see $this->register_block_type()
     * @return string;
     */
    protected function get_block_type_supports()
    {
    }
}