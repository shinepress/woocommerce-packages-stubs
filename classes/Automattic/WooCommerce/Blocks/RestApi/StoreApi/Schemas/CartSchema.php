<?php

namespace Automattic\WooCommerce\Blocks\RestApi\StoreApi\Schemas;

/**
 * CartSchema class.
 *
 * @since 2.5.0
 */
class CartSchema extends \Automattic\WooCommerce\Blocks\RestApi\StoreApi\Schemas\AbstractSchema
{
    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'cart';
    /**
     * Cart schema properties.
     *
     * @return array
     */
    protected function get_properties()
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
}