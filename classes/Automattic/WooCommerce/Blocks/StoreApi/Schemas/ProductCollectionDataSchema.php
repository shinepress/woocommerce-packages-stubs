<?php

namespace Automattic\WooCommerce\Blocks\StoreApi\Schemas;

/**
 * ProductCollectionDataSchema class.
 *
 * @since 2.5.0
 */
class ProductCollectionDataSchema extends \Automattic\WooCommerce\Blocks\StoreApi\Schemas\AbstractSchema
{
    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'product-collection-data';
    /**
     * Product collection data schema properties.
     *
     * @return array
     */
    public function get_properties()
    {
    }
    /**
     * Format data.
     *
     * @param array $data Collection data to format and return.
     * @return array
     */
    public function get_item_response($data)
    {
    }
}