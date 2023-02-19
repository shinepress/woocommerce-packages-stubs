<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * CustomerAccount class.
 */
class CustomerAccount extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    const TEXT_ONLY = 'text_only';
    const ICON_ONLY = 'icon_only';
    const DISPLAY_ALT = 'alt';
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'customer-account';
    /**
     * Render the block.
     *
     * @param array    $attributes Block attributes.
     * @param string   $content Block content.
     * @param WP_Block $block Block instance.
     *
     * @return string Rendered block output.
     */
    protected function render($attributes, $content, $block)
    {
    }
}