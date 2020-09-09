<?php

namespace Automattic\WooCommerce\Blocks\StoreApi\Schemas;

/**
 * ImageAttachmentSchema class.
 */
class ImageAttachmentSchema extends \Automattic\WooCommerce\Blocks\StoreApi\Schemas\AbstractSchema
{
    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'image';
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
     * @param int $attachment_id Image attachment ID.
     * @return array|null
     */
    public function get_item_response($attachment_id)
    {
    }
}