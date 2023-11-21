<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * CollectionPriceFilter class.
 */
final class CollectionPriceFilter extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'collection-price-filter';
    const MIN_PRICE_QUERY_VAR = 'min_price';
    const MAX_PRICE_QUERY_VAR = 'max_price';
    /**
     * Render the block.
     *
     * @param array    $attributes Block attributes.
     * @param string   $content    Block content.
     * @param WP_Block $block      Block instance.
     * @return string Rendered block type output.
     */
    protected function render($attributes, $content, $block)
    {
    }
    /**
     * Get the price slider HTML.
     *
     * @param array $store_data The data passing to Interactivity Store.
     * @param array $attributes Block attributes.
     */
    private function get_price_slider($store_data, $attributes)
    {
    }
}