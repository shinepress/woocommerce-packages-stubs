<?php

namespace Automattic\WooCommerce\Blocks\StoreApi\Schemas;

/**
 * AddressSchema class.
 *
 * Provides a generic address schema for composition in other schemas.
 *
 * @internal This API is used internally by Blocks--it is still in flux and may be subject to revisions.
 * @since 4.1.0
 */
abstract class AbstractAddressSchema extends \Automattic\WooCommerce\Blocks\StoreApi\Schemas\AbstractSchema
{
    /**
     * Term properties.
     *
     * @internal Note that required properties don't require values, just that they are included in the request.
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
     * Format a state based on the country. If country has defined states, will return an upper case state code.
     *
     * @param string $state State name or code (sanitized).
     * @param string $country Country code.
     * @return string
     */
    protected function format_state($state, $country)
    {
    }
    /**
     * Validate the given address object.
     *
     * @see rest_validate_value_from_schema
     *
     * @param array            $address Value being sanitized.
     * @param \WP_REST_Request $request The Request.
     * @param string           $param The param being sanitized.
     * @return true|\WP_Error
     */
    public function validate_callback($address, $request, $param)
    {
    }
}