<?php

namespace Automattic\WooCommerce\Blocks\StoreApi\Schemas;

/**
 * Class CartExtensionsSchema
 *
 * @internal This API is used internally by Blocks--it is still in flux and may be subject to revisions.
 */
class CartExtensionsSchema extends \Automattic\WooCommerce\Blocks\StoreApi\Schemas\AbstractSchema
{
    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'cart-extensions';
    /**
     * The schema item identifier.
     *
     * @var string
     */
    const IDENTIFIER = 'cart-extensions';
    /**
     * Cart extensions schema properties.
     *
     * @return array
     */
    public function get_properties()
    {
    }
    /**
     * Handle the request and return a valid response for this endpoint.
     *
     * @param \WP_REST_Request $request Request containing data for the extension callback.
     * @throws RouteException When callback is not callable or parameters are incorrect.
     *
     * @return array
     */
    public function get_item_response($request = null)
    {
    }
}