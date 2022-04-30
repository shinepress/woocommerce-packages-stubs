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
    use \Automattic\WooCommerce\Blocks\StoreApi\Utilities\DraftOrderTrait;
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
     * Get full customer billing address.
     *
     * @param \WC_Customer $customer Customer object.
     * @return array
     */
    protected function get_customer_billing_address(\WC_Customer $customer)
    {
    }
}