<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * Checkout class.
 *
 * @internal
 */
class Checkout extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'checkout';
    /**
     * Registers the block type with WordPress.
     */
    public function register_block_type()
    {
    }
    /**
     * Append frontend scripts when rendering the block.
     *
     * @param array|\WP_Block $attributes Block attributes, or an instance of a WP_Block. Defaults to an empty array.
     * @param string          $content    Block content. Default empty string.
     * @return string Rendered block type output.
     */
    public function render($attributes = array(), $content = '')
    {
    }
    /**
     * Check if we're viewing a checkout page endpoint, rather than the main checkout page itself.
     *
     * @return boolean
     */
    protected function is_checkout_endpoint()
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
     * Get customer payment methods for use in checkout.
     *
     * @param AssetDataRegistry $data_registry Data registry instance.
     */
    protected function hydrate_customer_payment_methods(\Automattic\WooCommerce\Blocks\Assets\AssetDataRegistry $data_registry)
    {
    }
    /**
     * Hydrate the checkout block with data from the API.
     *
     * @param AssetDataRegistry $data_registry Data registry instance.
     */
    protected function hydrate_from_api(\Automattic\WooCommerce\Blocks\Assets\AssetDataRegistry $data_registry)
    {
    }
    /**
     * Render skeleton markup for the checkout block.
     */
    protected function get_skeleton()
    {
    }
    /**
     * Callback for woocommerce_payment_methods_list_item filter to add token id
     * to the generated list.
     *
     * @param array     $list_item The current list item for the saved payment method.
     * @param \WC_Token $token     The token for the current list item.
     *
     * @return array The list item with the token id added.
     */
    public static function include_token_id_with_payment_methods($list_item, $token)
    {
    }
}