<?php

namespace Automattic\WooCommerce\Blocks\StoreApi\Schemas;

/**
 * CartSchema class.
 *
 * @internal This API is used internally by Blocks--it is still in flux and may be subject to revisions.
 * @since 2.5.0
 */
class CartSchema extends \Automattic\WooCommerce\Blocks\StoreApi\Schemas\AbstractSchema
{
    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'cart';
    /**
     * Item schema instance.
     *
     * @var CartItemSchema
     */
    protected $item_schema;
    /**
     * Coupon schema instance.
     *
     * @var CartCouponSchema
     */
    protected $coupon_schema;
    /**
     * Shipping rates schema instance.
     *
     * @var CartShippingRateSchema
     */
    protected $shipping_rate_schema;
    /**
     * Shipping address schema instance.
     *
     * @var ShippingAddressSchema
     */
    protected $shipping_address_schema;
    /**
     * Error schema instance.
     *
     * @var ErrorSchema
     */
    protected $error_schema;
    /**
     * Constructor.
     *
     * @param CartItemSchema         $item_schema Item schema instance.
     * @param CartCouponSchema       $coupon_schema Coupon schema instance.
     * @param CartShippingRateSchema $shipping_rate_schema Shipping rates schema instance.
     * @param ShippingAddressSchema  $shipping_address_schema Shipping address schema instance.
     * @param ErrorSchema            $error_schema Error schema instance.
     */
    public function __construct(\Automattic\WooCommerce\Blocks\StoreApi\Schemas\CartItemSchema $item_schema, \Automattic\WooCommerce\Blocks\StoreApi\Schemas\CartCouponSchema $coupon_schema, \Automattic\WooCommerce\Blocks\StoreApi\Schemas\CartShippingRateSchema $shipping_rate_schema, \Automattic\WooCommerce\Blocks\StoreApi\Schemas\ShippingAddressSchema $shipping_address_schema, \Automattic\WooCommerce\Blocks\StoreApi\Schemas\ErrorSchema $error_schema)
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
     * Convert a woo cart into an object suitable for the response.
     *
     * @param \WC_Cart $cart Cart class instance.
     * @return array
     */
    public function get_item_response($cart)
    {
    }
    /**
     * Get tax lines from the cart and format to match schema.
     *
     * @param \WC_Cart $cart Cart class instance.
     * @return array
     */
    protected function get_tax_lines($cart)
    {
    }
    /**
     * Get cart validation errors.
     *
     * @param \WC_Cart $cart Cart class instance.
     * @return array
     */
    protected function get_cart_errors($cart)
    {
    }
}