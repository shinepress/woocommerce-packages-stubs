<?php

namespace Automattic\WooCommerce\Blocks\StoreApi\Schemas;

/**
 * ProductCategorySchema class.
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