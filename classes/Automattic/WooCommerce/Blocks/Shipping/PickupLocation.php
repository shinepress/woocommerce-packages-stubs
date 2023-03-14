<?php

namespace Automattic\WooCommerce\Blocks\Shipping;

/**
 * Local Pickup Shipping Method.
 */
class PickupLocation extends \WC_Shipping_Method
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Init function.
     */
    public function init()
    {
    }
    /**
     * Calculate shipping.
     *
     * @param array $package Package information.
     */
    public function calculate_shipping($package = array())
    {
    }
    /**
     * See if the method is available.
     *
     * @param array $package Package information.
     * @return bool
     */
    public function is_available($package)
    {
    }
    /**
     * Translates meta data for the shipping method.
     *
     * @param string $label Meta label.
     * @param string $name Meta key.
     * @param mixed  $product Product if applicable.
     * @return string
     */
    public function translate_meta_data($label, $name, $product)
    {
    }
    /**
     * Admin options screen.
     *
     * See also WC_Shipping_Method::admin_options().
     */
    public function admin_options()
    {
    }
}