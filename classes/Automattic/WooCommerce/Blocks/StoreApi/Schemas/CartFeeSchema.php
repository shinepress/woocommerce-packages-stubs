<?php

namespace Automattic\WooCommerce\Blocks\StoreApi\Schemas;

/**
 * CartFeeSchema class.
 *
 * @internal This API is used internally by Blocks--it is still in flux and may be subject to revisions.
 */
class CartFeeSchema extends \Automattic\WooCommerce\Blocks\StoreApi\Schemas\AbstractSchema
{
    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'cart_fee';
    /**
     * The schema item identifier.
     *
     * @var string
     */
    const IDENTIFIER = 'cart-fee';
    /**
     * Cart schema properties.
     *
     * @return array
     */
    public function get_properties()
    {
    }
    /**
     * Convert a WooCommerce cart fee to an object suitable for the response.
     *
     * @param array $fee Cart fee data.
     * @return array
     */
    public function get_item_response($fee)
    {
    }
}