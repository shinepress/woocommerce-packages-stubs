<?php

namespace Automattic\WooCommerce\Blocks\StoreApi\Routes;

/**
 * CartUpdateCustomer class.
 *
 * Updates the customer billing and shipping address and returns an updated cart--things such as taxes may be recalculated.
 *
 * @internal This API is used internally by Blocks--it is still in flux and may be subject to revisions.
 */
class CartUpdateCustomer extends \Automattic\WooCommerce\Blocks\StoreApi\Routes\AbstractCartRoute
{
    /**
     * Billing address schema instance.
     *
     * @var BillingAddressSchema
     */
    protected $billing_address_schema;
    /**
     * Shipping address schema instance.
     *
     * @var ShippingAddressSchema
     */
    protected $shipping_address_schema;
    /**
     * Constructor.
     *
     * @param CartSchema            $schema Schema class for this route.
     * @param ShippingAddressSchema $shipping_address_schema Billing address schema class for this route.
     * @param BillingAddressSchema  $billing_address_schema Billing address schema class for this route.
     */
    public function __construct(\Automattic\WooCommerce\Blocks\StoreApi\Schemas\CartSchema $schema, \Automattic\WooCommerce\Blocks\StoreApi\Schemas\ShippingAddressSchema $shipping_address_schema, \Automattic\WooCommerce\Blocks\StoreApi\Schemas\BillingAddressSchema $billing_address_schema)
    {
    }
    /**
     * Get the namespace for this route.
     *
     * @return string
     */
    public function get_namespace()
    {
    }
    /**
     * Get the path of this REST route.
     *
     * @return string
     */
    public function get_path()
    {
    }
    /**
     * Get method arguments for this REST route.
     *
     * @return array An array of endpoints.
     */
    public function get_args()
    {
    }
    /**
     * Handle the request and return a valid response for this endpoint.
     *
     * @throws RouteException On error.
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response
     */
    protected function get_route_post_response(\WP_REST_Request $request)
    {
    }
    /**
     * Format provided address fields.
     *
     * @throws RouteException Thrown on error.
     * @param array $address Address fields.
     * @param array $allowed_countries Countries that must be used.
     * @return array
     */
    protected function prepare_address_fields($address, $allowed_countries)
    {
    }
}