<?php

namespace Automattic\WooCommerce\Blocks\StoreApi\Schemas;

/**
 * ShippingAddressSchema class.
 *
 * Provides a generic shipping address schema for composition in other schemas.
 *
 * @internal This API is used internally by Blocks--it is still in flux and may be subject to revisions.
 * @since 2.5.0
 */
class ShippingAddressSchema extends \Automattic\WooCommerce\Blocks\StoreApi\Schemas\AbstractAddressSchema
{
    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'shipping_address';
    /**
     * The schema item identifier.
     *
     * @var string
     */
    const IDENTIFIER = 'shipping-address';
    /**
     * Convert a term object into an object suitable for the response.
     *
     * @param \WC_Order|\WC_Customer $address An object with shipping address.
     *
     * @throws RouteException When the invalid object types are provided.
     * @return stdClass
     */
    public function get_item_response($address)
    {
    }
}