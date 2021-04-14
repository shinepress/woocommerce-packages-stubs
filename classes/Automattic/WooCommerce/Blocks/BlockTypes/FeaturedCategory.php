<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * FeaturedCategory class.
 */
class FeaturedCategory extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractDynamicBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'featured-category';
    /**
     * Default attribute values, should match what's set in JS `registerBlockType`.
     *
     * @var array
     */
    protected $defaults = array('align' => 'none', 'contentAlign' => 'center', 'dimRatio' => 50, 'focalPoint' => false, 'height' => false, 'mediaId' => 0, 'mediaSrc' => '', 'showDesc' => true);
    /**
     * Render the Featured Category block.
     *
     * @param array  $attributes Block attributes.
     * @param string $content    Block content.
     * @return string Rendered block type output.
     */
    protected function render($attributes, $content)
    {
    }
    /**
     * Get the styles for the wrapper element (background image, color).
     *
     * @param array    $attributes Block attributes. Default empty array.
     * @param \WP_Term $category Term object.
     * @return string
     */
    public function get_styles($attributes, $category)
    {
    }
    /**
     * Get class names for the block container.
     *
     * @param array $attributes Block attributes. Default empty array.
     * @return string
     */
    public function get_classes($attributes)
    {
    }
    /**
     * Returns the main product image URL.
     *
     * @param \WP_Term $category Term object.
     * @param string   $size    Image size, defaults to 'full'.
     * @return string
     */
    public function get_image($category, $size = 'full')
    {
    }
}