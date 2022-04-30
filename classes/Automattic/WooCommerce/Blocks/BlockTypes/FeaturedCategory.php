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
     * Global style enabled for this block.
     *
     * @var array
     */
    protected $global_style_wrapper = array('text_color', 'font_size', 'border_color', 'border_radius', 'border_width', 'background_color', 'text_color');
    /**
     * Default attribute values, should match what's set in JS `registerBlockType`.
     *
     * @var array
     */
    protected $defaults = array('align' => 'none', 'contentAlign' => 'center', 'dimRatio' => 50, 'focalPoint' => false, 'height' => false, 'mediaId' => 0, 'mediaSrc' => '', 'showDesc' => true);
    /**
     * Get block attributes.
     *
     * @return array
     */
    protected function get_block_type_attributes()
    {
    }
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
    /**
     * Extra data passed through from server to client for block.
     *
     * @param array $attributes  Any attributes that currently are available from the block.
     *                           Note, this will be empty in the editor context when the block is
     *                           not in the post content on editor load.
     */
    protected function enqueue_data(array $attributes = [])
    {
    }
}