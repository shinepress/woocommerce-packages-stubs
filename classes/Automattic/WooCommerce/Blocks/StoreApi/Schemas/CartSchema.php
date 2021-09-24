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
     * The schema item identifier.
     *
     * @var string
     */
    const IDENTIFIER = 'cart';
    /**
     * Item schema instance.
     *
     * @var CartItemSchema
     */
    public $item_schema;
    /**
     * Coupon schema instance.
     *
     * @var CartCouponSchema
     */
    public $coupon_schema;
    /**
     * Fee schema instance.
     *
     * @var CartFeeSchema
     */
    public $fee_schema;
    /**
     * Shipping rates schema instance.
     *
     * @var CartShippingRateSchema
     */
    public $shipping_rate_schema;
    /**
     * Shipping address schema instance.
     *
     * @var ShippingAddressSchema
     */
    public $shipping_address_schema;
    /**
     * Billing address schema instance.
     *
     * @var BillingAddressSchema
     */
    public $billing_address_schema;
    /**
     * Error schema instance.
     *
     * @var ErrorSchema
     */
    public $error_schema;
    /**
     * Constructor.
     *
     * @param ExtendRestApi          $extend Rest Extending instance.
     * @param CartItemSchema         $item_schema Item schema instance.
     * @param CartCouponSchema       $coupon_schema Coupon schema instance.
     * @param CartFeeSchema          $fee_schema Fee schema instance.
     * @param CartShippingRateSchema $shipping_rate_schema Shipping rates schema instance.
     * @param ShippingAddressSchema  $shipping_address_schema Shipping address schema instance.
     * @param BillingAddressSchema   $billing_address_schema Billing address schema instance.
     * @param ErrorSchema            $error_schema Error schema instance.
     */
    public function __construct(\Automattic\WooCommerce\Blocks\Domain\Services\ExtendRestApi $extend, \Automattic\WooCommerce\Blocks\StoreApi\Schemas\CartItemSchema $item_schema, \Automattic\WooCommerce\Blocks\StoreApi\Schemas\CartCouponSchema $coupon_schema, \Automattic\WooCommerce\Blocks\StoreApi\Schemas\CartFeeSchema $fee_schema, \Automattic\WooCommerce\Blocks\StoreApi\Schemas\CartShippingRateSchema $shipping_rate_schema, \Automattic\WooCommerce\Blocks\StoreApi\Schemas\ShippingAddressSchema $shipping_address_schema, \Automattic\WooCommerce\Blocks\StoreApi\Schemas\BillingAddressSchema $billing_address_schema, \Automattic\WooCommerce\Blocks\StoreApi\Schemas\ErrorSchema $error_schema)
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