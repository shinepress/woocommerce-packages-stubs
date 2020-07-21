<?php

namespace Automattic\WooCommerce\Blocks\StoreApi\Schemas;

/**
 * CartItemSchema class.
 *
 * @since 2.5.0
 */
class CartItemSchema extends \Automattic\WooCommerce\Blocks\StoreApi\Schemas\ProductSchema
{
    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'cart_item';
    /**
     * Image attachment schema instance.
     *
     * @var ImageAttachmentSchema
     */
    protected $image_attachment_schema;
    /**
     * Constructor.
     *
     * @param ImageAttachmentSchema $image_attachment_schema Image attachment schema instance.
     */
    public function __construct(\Automattic\WooCommerce\Blocks\StoreApi\Schemas\ImageAttachmentSchema $image_attachment_schema)
    {
    }
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
     * Get the quantity limit for an item in the cart.
     *
     * @param \WC_Product $product Product instance.
     * @return int
     */
    protected function get_product_quantity_limit(\WC_Product $product)
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
     * Returns the remaining stock for a product if it has stock.
     *
     * This also factors in draft orders.
     *
     * @param \WC_Product $product Product instance.
     * @return integer|null
     */
    protected function get_remaining_stock(\WC_Product $product)
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
}