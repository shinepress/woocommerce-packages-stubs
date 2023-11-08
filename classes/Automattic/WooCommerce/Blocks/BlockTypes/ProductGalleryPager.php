<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * ProductGalleryPager class.
 */
class ProductGalleryPager extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'product-gallery-pager';
    /**
     * It isn't necessary register block assets because it is a server side block.
     */
    protected function register_block_type_assets()
    {
    }
    /**
     *  Register the context
     *
     * @return string[]
     */
    protected function get_block_type_uses_context()
    {
    }
    /**
     * Include and render the block.
     *
     * @param array    $attributes Block attributes. Default empty array.
     * @param string   $content    Block content. Default empty string.
     * @param WP_Block $block      Block instance.
     * @return string Rendered block type output.
     */
    protected function render($attributes, $content, $block)
    {
    }
    /**
     * Renders the pager based on the given display mode.
     *
     * @param string $pager_display_mode The display mode for the pager. Possible values are 'dots', 'digits', and 'off'.
     *
     * @return string|null The rendered pager HTML, or null if the pager is disabled.
     */
    private function render_pager($pager_display_mode)
    {
    }
    /**
     * Renders the digits pager HTML.
     *
     * @return string The rendered digits pager HTML.
     */
    private function render_digits_pager()
    {
    }
    /**
     * Renders the dots pager HTML.
     *
     * @return string The rendered dots pager HTML.
     */
    private function render_dots_pager()
    {
    }
    /**
     * Returns the dot icon SVG code.
     *
     * @return string The dot icon SVG code.
     */
    private function get_dot_icon()
    {
    }
    /**
     * Returns the selected dot icon SVG code.
     *
     * @return string The selected dot icon SVG code.
     */
    private function get_selected_dot_icon()
    {
    }
}