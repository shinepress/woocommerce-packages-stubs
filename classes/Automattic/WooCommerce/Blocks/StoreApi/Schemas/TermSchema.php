<?php

namespace Automattic\WooCommerce\Blocks\StoreApi\Schemas;

/**
 * TermSchema class.
 *
 * @internal This API is used internally by Blocks--it is still in flux and may be subject to revisions.
 * @since 2.5.0
 */
class TermSchema extends \Automattic\WooCommerce\Blocks\StoreApi\Schemas\AbstractSchema
{
    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'term';
    /**
     * The schema item identifier.
     *
     * @var string
     */
    const IDENTIFIER = 'term';
    /**
     * Term properties.
     *
     * @return array
     */
    public function get_properties()
    {
    }
    /**
     * Convert a term object into an object suitable for the response.
     *
     * @param \WP_Term $term Term object.
     * @return array
     */
    public function get_item_response($term)
    {
    }
}