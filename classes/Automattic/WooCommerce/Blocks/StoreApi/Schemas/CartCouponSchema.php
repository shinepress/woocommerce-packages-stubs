<?php

namespace Automattic\WooCommerce\Blocks\StoreApi\Schemas;

/**
 * CartCouponSchema class.
 *
 * @internal This API is used internally by Blocks--it is still in flux and may be subject to revisions.
 * @since 2.5.0
 */
class CartCouponSchema extends \Automattic\WooCommerce\Blocks\StoreApi\Schemas\AbstractSchema
{
    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'cart_coupon';
    /**
     * Cart schema properties.
     *
     * @return array
     */
    public function get_properties()
    {
    }
    /**
     * Check given coupon exists.
     *
     * @param string $coupon_code Coupon code.
     * @return bool
     */
    public function coupon_exists($coupon_code)
    {
    }
    /**
     * Convert a WooCommerce cart item to an object suitable for the response.
     *
     * @param string $coupon_code Coupon code from the cart.
     * @return array
     */
    public function get_item_response($coupon_code)
    {
    }
}