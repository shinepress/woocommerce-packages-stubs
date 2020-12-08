<?php

namespace Automattic\WooCommerce\Blocks\StoreApi\Utilities;

/**
 * Stock Reservation class.
 * Handle product stock reservation during checkout.
 *
 * @internal This API is used internally by Blocks--it is still in flux and may be subject to revisions.
 */
final class ReserveStock
{
    /**
     * Is stock reservation enabled?
     *
     * @var boolean
     */
    private $enabled = true;
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Is stock reservation enabled?
     *
     * @return boolean
     */
    protected function is_enabled()
    {
    }
    /**
     * Query for any existing holds on stock for this item.
     *
     * @param \WC_Product $product Product to get reserved stock for.
     * @param integer     $exclude_order_id Optional order to exclude from the results.
     *
     * @return integer Amount of stock already reserved.
     */
    public function get_reserved_stock(\WC_Product $product, $exclude_order_id = 0)
    {
    }
    /**
     * Put a temporary hold on stock for an order if enough is available.
     *
     * @throws ReserveStockException If stock cannot be reserved.
     *
     * @param \WC_Order $order Order object.
     * @param int       $minutes How long to reserve stock in minutes. Defaults to woocommerce_hold_stock_minutes.
     */
    public function reserve_stock_for_order(\WC_Order $order, $minutes = 0)
    {
    }
    /**
     * Release a temporary hold on stock for an order.
     *
     * @param \WC_Order $order Order object.
     */
    public function release_stock_for_order(\WC_Order $order)
    {
    }
    /**
     * Reserve stock for a product by inserting rows into the DB.
     *
     * @throws ReserveStockException If a row cannot be inserted.
     *
     * @param int       $product_id Product ID which is having stock reserved.
     * @param int       $stock_quantity Stock amount to reserve.
     * @param \WC_Order $order Order object which contains the product.
     * @param int       $minutes How long to reserve stock in minutes.
     */
    private function reserve_stock_for_product($product_id, $stock_quantity, \WC_Order $order, $minutes)
    {
    }
    /**
     * Returns query statement for getting current `_stock` of a product.
     *
     * @todo Once merged to woo core data store, this method can be removed.
     * @internal MAX function below is used to make sure result is a scalar.
     * @param int $product_id Product ID.
     * @return string|void Query statement.
     */
    private function get_query_for_stock($product_id)
    {
    }
    /**
     * Returns query statement for getting reserved stock of a product.
     *
     * @param int     $product_id Product ID.
     * @param integer $exclude_order_id Optional order to exclude from the results.
     * @return string|void Query statement.
     */
    private function get_query_for_reserved_stock($product_id, $exclude_order_id = 0)
    {
    }
}