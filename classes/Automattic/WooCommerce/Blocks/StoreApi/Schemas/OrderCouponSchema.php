<?php

namespace Automattic\WooCommerce\Blocks\StoreApi\Schemas;

/**
 * OrderCouponSchema class.
 *
 * @internal This API is used internally by Blocks--it is still in flux and may be subject to revisions.
 */
class OrderCouponSchema extends \Automattic\WooCommerce\Blocks\StoreApi\Schemas\AbstractSchema
{
    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'order_coupon';
    /**
     * Cart schema properties.
     *
     * @return array
     */
    public function get_properties()
    {
    }
    /**
     * Convert an order coupon to an object suitable for the response.
     *
     * @param \WC_Order_Item_Coupon $coupon Order coupon array.
     * @return array
     */
    public function get_item_response(\WC_Order_Item_Coupon $coupon)
    {
    }
}