<?php

namespace Automattic\WooCommerce\Blocks\StoreApi\Schemas;

/**
 * ErrorSchema class.
 *
 * @internal This API is used internally by Blocks--it is still in flux and may be subject to revisions.
 * @since 2.5.0
 */
class ErrorSchema extends \Automattic\WooCommerce\Blocks\StoreApi\Schemas\AbstractSchema
{
    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'error';
    /**
     * The schema item identifier.
     *
     * @var string
     */
    const IDENTIFIER = 'error';
    /**
     * Product schema properties.
     *
     * @return array
     */
    public function get_properties()
    {
    }
    /**
     * Convert a WooCommerce product into an object suitable for the response.
     *
     * @param \WP_Error $error Error object.
     * @return array
     */
    public function get_item_response(\WP_Error $error)
    {
    }
}