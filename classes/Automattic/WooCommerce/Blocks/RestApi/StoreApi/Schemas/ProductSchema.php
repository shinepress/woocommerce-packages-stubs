<?php

namespace Automattic\WooCommerce\Blocks\RestApi\StoreApi\Schemas;

/**
 * ProductSchema class.
 *
 * @since 2.5.0
 */
class ProductSchema extends \Automattic\WooCommerce\Blocks\RestApi\StoreApi\Schemas\AbstractSchema
{
    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'product';
    /**
     * Product schema properties.
     *
     * @return array
     */
    protected function get_properties()
    {
    }
    /**
     * Convert a WooCommerce product into an object suitable for the response.
     *
     * @param array $product Product object.
     * @return array
     */
    public function get_item_response($product)
    {
    }
    /**
     * Get an array of pricing data.
     *
     * @param \WC_Product|\WC_Product_Variation $product Product instance.
     * @return array
     */
    protected function get_prices($product)
    {
    }
    /**
     * Get price range from certain product types.
     *
     * @param \WC_Product|\WC_Product_Variation $product Product instance.
     * @return arary|null
     */
    protected function get_price_range($product)
    {
    }
}