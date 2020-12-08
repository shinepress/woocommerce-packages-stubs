<?php

namespace Automattic\WooCommerce\Blocks\StoreApi\Schemas;

/**
 * ProductReviewSchema class.
 *
 * @internal This API is used internally by Blocks--it is still in flux and may be subject to revisions.
 */
class ProductReviewSchema extends \Automattic\WooCommerce\Blocks\StoreApi\Schemas\AbstractSchema
{
    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'product_review';
    /**
     * Image attachment schema instance.
     *
     * @var ImageAttachmentSchema
     */
    protected $image_attachment_schema;
    /**
     * Constructor.
     *
     * @param ImageAttachmentSchema $image_attachment_schema Image attachment schema instance.
     */
    public function __construct(\Automattic\WooCommerce\Blocks\StoreApi\Schemas\ImageAttachmentSchema $image_attachment_schema)
    {
    }
    /**
     * Product review schema properties.
     *
     * @return array
     */
    public function get_properties()
    {
    }
    /**
     * Convert a WooCommerce product into an object suitable for the response.
     *
     * @param \WP_Comment $review Product review object.
     * @return array
     */
    public function get_item_response(\WP_Comment $review)
    {
    }
}