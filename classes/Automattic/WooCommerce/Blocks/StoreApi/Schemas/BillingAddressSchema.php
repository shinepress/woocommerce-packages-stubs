<?php

namespace Automattic\WooCommerce\Blocks\StoreApi\Schemas;

/**
 * BillingAddressSchema class.
 *
 * Provides a generic billing address schema for composition in other schemas.
 *
 * @internal This API is used internally by Blocks--it is still in flux and may be subject to revisions.
 */
class BillingAddressSchema extends \Automattic\WooCommerce\Blocks\StoreApi\Schemas\AbstractAddressSchema
{
    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'billing_address';
    /**
     * The schema item identifier.
     *
     * @var string
     */
    const IDENTIFIER = 'billing-address';
    /**
     * Term properties.
     *
     * @return array
     */
    public function get_properties()
    {
    }
    /**
     * Sanitize and format the given address object.
     *
     * @param array            $address Value being sanitized.
     * @param \WP_REST_Request $request The Request.
     * @param string           $param The param being sanitized.
     * @return array
     */
    public function sanitize_callback($address, $request, $param)
    {
    }
    /**
     * Validate the given address object.
     *
     * @param array            $address Value being sanitized.
     * @param \WP_REST_Request $request The Request.
     * @param string           $param The param being sanitized.
     * @return true|\WP_Error
     */
    public function validate_callback($address, $request, $param)
    {
    }
    /**
     * Convert a term object into an object suitable for the response.
     *
     * @param \WC_Order|\WC_Customer $address An object with billing address.
     *
     * @throws RouteException When the invalid object types are provided.
     * @return stdClass
     */
    public function get_item_response($address)
    {
    }
}