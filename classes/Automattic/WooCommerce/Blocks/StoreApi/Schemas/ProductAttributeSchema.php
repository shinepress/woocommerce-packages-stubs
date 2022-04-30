<?php

namespace Automattic\WooCommerce\Blocks\StoreApi\Schemas;

/**
 * ProductAttributeSchema class.
 *
 * @internal This API is used internally by Blocks--it is still in flux and may be subject to revisions.
 * @since 2.5.0
 */
class ProductAttributeSchema extends \Automattic\WooCommerce\Blocks\StoreApi\Schemas\AbstractSchema
{
    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'product_attribute';
    /**
     * The schema item identifier.
     *
     * @var string
     */
    const IDENTIFIER = 'product-attribute';
    /**
     * Term properties.
     *
     * @return array
     */
    public function get_properties()
    {
    }
    /**
     * Convert an attribute object into an object suitable for the response.
     *
     * @param object $attribute Attribute object.
     * @return array
     */
    public function get_item_response($attribute)
    {
    }
}