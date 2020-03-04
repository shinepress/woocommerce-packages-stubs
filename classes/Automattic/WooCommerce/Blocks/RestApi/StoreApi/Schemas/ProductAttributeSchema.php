<?php

namespace Automattic\WooCommerce\Blocks\RestApi\StoreApi\Schemas;

/**
 * ProductAttributeSchema class.
 *
 * @since 2.5.0
 */
class ProductAttributeSchema extends \Automattic\WooCommerce\Blocks\RestApi\StoreApi\Schemas\AbstractSchema
{
    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'product_attribute';
    /**
     * Term properties.
     *
     * @return array
     */
    protected function get_properties()
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