<?php

namespace Automattic\WooCommerce\Blocks\StoreApi\Schemas;

/**
 * ProductCategorySchema class.
 *
 * @internal This API is used internally by Blocks--it is still in flux and may be subject to revisions.
 */
class ProductCategorySchema extends \Automattic\WooCommerce\Blocks\StoreApi\Schemas\TermSchema
{
    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'product-category';
    /**
     * The schema item identifier.
     *
     * @var string
     */
    const IDENTIFIER = 'product-category';
    /**
     * Image attachment schema instance.
     *
     * @var ImageAttachmentSchema
     */
    protected $image_attachment_schema;
    /**
     * Constructor.
     *
     * @param ExtendRestApi         $extend Rest Extending instance.
     * @param ImageAttachmentSchema $image_attachment_schema Image attachment schema instance.
     */
    public function __construct(\Automattic\WooCommerce\Blocks\Domain\Services\ExtendRestApi $extend, \Automattic\WooCommerce\Blocks\StoreApi\Schemas\ImageAttachmentSchema $image_attachment_schema)
    {
    }
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
    /**
     * Get total number of reviews for products in a category.
     *
     * @param \WP_Term $term Term object.
     * @return int
     */
    protected function get_category_review_count($term)
    {
    }
}