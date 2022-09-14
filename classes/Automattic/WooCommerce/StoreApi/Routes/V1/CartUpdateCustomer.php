<?php

namespace Automattic\WooCommerce\StoreApi\Routes\V1;

/**
 * CartUpdateCustomer class.
 *
 * Updates the customer billing and shipping address and returns an updated cart--things such as taxes may be recalculated.
 */
class CartUpdateCustomer extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractCartRoute
{
    use \Automattic\WooCommerce\StoreApi\Utilities\DraftOrderTrait;
    /**
     * The route identifier.
     *
     * @var string
     */
    const IDENTIFIER = 'cart-update-customer';
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
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response
     */
    protected function get_route_post_response(\WP_REST_Request $request)
    {
    }
    /**
     * Get full customer billing address.
     *
     * @param \WC_Customer $customer Customer object.
     * @return array
     */
    protected function get_customer_billing_address(\WC_Customer $customer)
    {
    }
}