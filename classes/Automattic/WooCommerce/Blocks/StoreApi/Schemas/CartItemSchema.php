<?php

namespace Automattic\WooCommerce\Blocks\StoreApi\Schemas;

/**
 * CartItemSchema class.
 *
 * @internal This API is used internally by Blocks--it is still in flux and may be subject to revisions.
 * @since 2.5.0
 */
class CartItemSchema extends \Automattic\WooCommerce\Blocks\StoreApi\Schemas\ProductSchema
{
    use \Automattic\WooCommerce\Blocks\StoreApi\Utilities\DraftOrderTrait;
    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'cart_item';
    /**
     * The schema item identifier.
     *
     * @var string
     */
    const IDENTIFIER = 'cart-item';
    /**
     * Cart schema properties.
     *
     * @return array
     */
    public function get_properties()
    {
    }
    /**
     * Convert a WooCommerce cart item to an object suitable for the response.
     *
     * @param array $cart_item Cart item array.
     * @return array
     */
    public function get_item_response($cart_item)
    {
    }
    /**
     * Get an array of pricing data.
     *
     * @param \WC_Product $product Product instance.
     * @param string      $tax_display_mode If returned prices are incl or excl of tax.
     * @return array
     */
    protected function prepare_product_price_response(\WC_Product $product, $tax_display_mode = '')
    {
    }
    /**
     * Format variation data, for example convert slugs such as attribute_pa_size to Size.
     *
     * @param array       $variation_data Array of data from the cart.
     * @param \WC_Product $product Product data.
     * @return array
     */
    protected function format_variation_data($variation_data, $product)
    {
    }
    /**
     * Format cart item data removing any HTML tag.
     *
     * @param array $cart_item Cart item array.
     * @return array
     */
    protected function get_item_data($cart_item)
    {
    }
    /**
     * Remove HTML tags from cart item data and set the `hidden` property to `__experimental_woocommerce_blocks_hidden`.
     *
     * @param array $item_data_element Individual element of a cart item data.
     * @return array
     */
    protected function format_item_data_element($item_data_element)
    {
    }
}