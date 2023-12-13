<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * CollectionStockFilter class.
 */
final class CollectionStockFilter extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'collection-stock-filter';
    const STOCK_STATUS_QUERY_VAR = 'filter_stock_status';
    /**
     * Extra data passed through from server to client for block.
     *
     * @param array $stock_statuses  Any stock statuses that currently are available from the block.
     *                               Note, this will be empty in the editor context when the block is
     *                               not in the post content on editor load.
     */
    protected function enqueue_data(array $stock_statuses = [])
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
     * Stock filter HTML
     *
     * @param array $stock_counts       An array of stock counts.
     * @param array $attributes Block attributes. Default empty array.
     * @return string Rendered block type output.
     */
    private function get_stock_filter_html($stock_counts, $attributes)
    {
    }
}