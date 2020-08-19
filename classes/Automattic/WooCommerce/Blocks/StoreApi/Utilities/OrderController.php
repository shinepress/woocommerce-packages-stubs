<?php

namespace Automattic\WooCommerce\Blocks\StoreApi\Utilities;

/**
 * OrderController class.
 */
class OrderController
{
    /**
     * Create order and set props based on global settings.
     *
     * @throws RouteException Exception if invalid data is detected.
     *
     * @return \WC_Order A new order object.
     */
    public function create_order_from_cart()
    {
    }
    /**
     * Update an order using data from the current cart.
     *
     * @param \WC_Order $order The order object to update.
     */
    public function update_order_from_cart(\WC_Order $order)
    {
    }
    /**
     * Copies order data to customer object (not the session), so values persist for future checkouts.
     *
     * @param \WC_Order $order Order object.
     */
    public function sync_customer_data_with_order(\WC_Order $order)
    {
    }
    /**
     * Final validation ran before payment is taken.
     *
     * By this point we have an order populated with customer data and items.
     *
     * @throws RouteException Exception if invalid data is detected.
     *
     * @param \WC_Order $order Order object.
     */
    public function validate_order_before_payment(\WC_Order $order)
    {
    }
    /**
     * Check email restrictions of a coupon against the order.
     *
     * @throws \Exception Exception if invalid data is detected.
     *
     * @param \WC_Coupon $coupon Coupon object applied to the cart.
     * @param \WC_Order  $order Order object.
     */
    protected function validate_coupon_email_restriction(\WC_Coupon $coupon, $order)
    {
    }
    /**
     * Check usage restrictions of a coupon against the order.
     *
     * @throws \Exception Exception if invalid data is detected.
     *
     * @param \WC_Coupon $coupon Coupon object applied to the cart.
     * @param \WC_Order  $order Order object.
     */
    protected function validate_coupon_usage_limit(\WC_Coupon $coupon, $order)
    {
    }
    /**
     * Changes default order status to draft for orders created via this API.
     *
     * @return string
     */
    public function default_order_status()
    {
    }
    /**
     * Create order line items.
     *
     * @param \WC_Order $order The order object to update.
     */
    protected function update_line_items_from_cart(\WC_Order $order)
    {
    }
    /**
     * Update address data from cart and/or customer session data.
     *
     * @param \WC_Order $order The order object to update.
     */
    protected function update_addresses_from_cart(\WC_Order $order)
    {
    }
}