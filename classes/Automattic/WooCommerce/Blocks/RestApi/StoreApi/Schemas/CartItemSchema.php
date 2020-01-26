<?php

namespace Automattic\WooCommerce\Blocks\RestApi\StoreApi\Schemas;

/**
 * AbstractBlock class.
 *
 * @since 2.5.0
 */
class CartItemSchema extends \Automattic\WooCommerce\Blocks\RestApi\StoreApi\Schemas\AbstractSchema
{
    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'cart_item';
    /**
     * Cart schema properties.
     *
     * @return array
     */
    protected function get_properties()
    {
    }
    /**
     * Check given ID exists,
     *
     * @param integer $product_id Product ID.
     * @return bool
     */
    public function product_id_exists($product_id)
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
     * Get product attribute taxonomy name.
     *
     * @param string      $slug   Taxonomy name.
     * @param \WC_Product $object Product data.
     * @return string
     */
    protected function get_attribute_taxonomy_name($slug, $object)
    {
    }
}