<?php

namespace Automattic\WooCommerce\StoreApi\Schemas\V1;

/**
 * AddressSchema class.
 *
 * Provides a generic address schema for composition in other schemas.
 */
abstract class AbstractAddressSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema
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
     * Get list of states for a country.
     *
     * @param string $country Country code.
     * @return array Array of state names indexed by state keys.
     */
    protected function get_states_for_country($country)
    {
    }
    /**
     * Validate provided state against a countries list of defined states.
     *
     * If there are no defined states for a country, any given state is valid.
     *
     * @param string $state State name or code (sanitized).
     * @param string $country Country code.
     * @return boolean Valid or not valid.
     */
    protected function validate_state($state, $country)
    {
    }
    /**
     * Format a state based on the country. If country has defined states, will return a valid upper case state code.
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