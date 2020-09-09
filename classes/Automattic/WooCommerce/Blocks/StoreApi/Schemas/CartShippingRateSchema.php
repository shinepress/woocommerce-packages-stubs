<?php

namespace Automattic\WooCommerce\Blocks\StoreApi\Schemas;

/**
 * CartShippingRateSchema class.
 */
class CartShippingRateSchema extends \Automattic\WooCommerce\Blocks\StoreApi\Schemas\AbstractSchema
{
    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'cart-shipping-rate';
    /**
     * Cart schema properties.
     *
     * @return array
     */
    public function get_properties()
    {
    }
    /**
     * Schema for a single rate.
     *
     * @return array
     */
    protected function get_rate_properties()
    {
    }
    /**
     * Convert a shipping rate from WooCommerce into a valid response.
     *
     * @param array $package Shipping package complete with rates from WooCommerce.
     * @return array
     */
    public function get_item_response($package)
    {
    }
    /**
     * Prepare an array of rates from a package for the response.
     *
     * @param array $package Shipping package complete with rates from WooCommerce.
     * @return array
     */
    protected function prepare_rates_response($package)
    {
    }
    /**
     * Response for a single rate.
     *
     * @param WC_Shipping_Rate $rate Rate object.
     * @param string           $selected_rate Selected rate.
     * @return array
     */
    protected function get_rate_response($rate, $selected_rate = '')
    {
    }
    /**
     * Gets a prop of the rate object, if callable.
     *
     * @param WC_Shipping_Rate $rate Rate object.
     * @param string           $prop Prop name.
     * @return string
     */
    protected function get_rate_prop($rate, $prop)
    {
    }
    /**
     * Converts rate meta data into a suitable response object.
     *
     * @param WC_Shipping_Rate $rate Rate object.
     * @return array
     */
    protected function get_rate_meta_data($rate)
    {
    }
}