<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * ProductQuery class.
 */
class ProductQuery extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'product-query';
    /**
     * The Block with its attributes before it gets rendered
     *
     * @var array
     */
    protected $parsed_block;
    /**
     * Initialize this block type.
     *
     * - Hook into WP lifecycle.
     * - Register the block with WordPress.
     * - Hook into pre_render_block to update the query.
     */
    protected function initialize()
    {
    }
    /**
     * Remove the query block filter and parse the custom query
     *
     * This function is supposed to be called by the `query_loop_block_query_vars`
     * filter. It de-registers the filter to make sure it runs only once and doesn't end
     * up hi-jacking future Query Loop blocks.
     *
     * It needs unfortunately to be `public` or otherwise the filter can't call it.
     *
     * @param WP_Query $query The WordPress Query.
     * @return array
     */
    public function get_query_by_attributes_once($query)
    {
    }
    /**
     * Update the query for the product query block.
     *
     * @param string|null $pre_render   The pre-rendered content. Default null.
     * @param array       $parsed_block The block being rendered.
     */
    public function update_query($pre_render, $parsed_block)
    {
    }
    /**
     * Return a custom query based on the attributes.
     *
     * @param WP_Query $query         The WordPress Query.
     * @param WP_Block $parsed_block  The block being rendered.
     * @return array
     */
    public function get_query_by_attributes($query, $parsed_block)
    {
    }
    /**
     * Return a query for on sale products.
     *
     * @param array $variation_props Dedicated attributes for the variation.
     * @return array
     */
    private function get_on_sale_products_query($variation_props)
    {
    }
}