<?php

namespace Automattic\WooCommerce\Blocks\StoreApi\Schemas;

/**
 * ProductSchema class.
 *
 * @since 2.5.0
 */
class ProductSchema extends \Automattic\WooCommerce\Blocks\StoreApi\Schemas\AbstractSchema
{
    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'product';
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
     * Product schema properties.
     *
     * @return array
     */
    public function get_properties()
    {
    }
    /**
     * Convert a WooCommerce product into an object suitable for the response.
     *
     * @param \WC_Product $product Product instance.
     * @return array
     */
    public function get_item_response($product)
    {
    }
    /**
     * Get list of product images.
     *
     * @param \WC_Product $product Product instance.
     * @return array
     */
    protected function get_images(\WC_Product $product)
    {
    }
    /**
     * Gets remaining stock amount for a product.
     *
     * @param \WC_Product $product Product instance.
     * @return integer|null
     */
    protected function get_remaining_stock(\WC_Product $product)
    {
    }
    /**
     * If a product has low stock, return the remaining stock amount for display.
     *
     * @param \WC_Product $product Product instance.
     * @return integer|null
     */
    protected function get_low_stock_remaining(\WC_Product $product)
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
     * WooCommerce can return prices including or excluding tax; choose the correct method based on tax display mode.
     *
     * @param string $tax_display_mode Provided tax display mode.
     * @return string Valid tax display mode.
     */
    protected function get_tax_display_mode($tax_display_mode = '')
    {
    }
    /**
     * WooCommerce can return prices including or excluding tax; choose the correct method based on tax display mode.
     *
     * @param string $tax_display_mode If returned prices are incl or excl of tax.
     * @return string Function name.
     */
    protected function get_price_function_from_tax_display_mode($tax_display_mode)
    {
    }
    /**
     * Get price range from certain product types.
     *
     * @param \WC_Product $product Product instance.
     * @param string      $tax_display_mode If returned prices are incl or excl of tax.
     * @return object|null
     */
    protected function get_price_range(\WC_Product $product, $tax_display_mode = '')
    {
    }
}