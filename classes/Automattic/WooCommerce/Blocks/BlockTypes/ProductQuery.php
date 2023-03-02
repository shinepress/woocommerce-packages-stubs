<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

// phpcs:disable WordPress.DB.SlowDBQuery.slow_db_query_tax_query
// phpcs:disable WordPress.DB.SlowDBQuery.slow_db_query_meta_query
// phpcs:disable WordPress.DB.SlowDBQuery.slow_db_query_meta_key
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
     * Orderby options not natively supported by WordPress REST API
     *
     * @var array
     */
    protected $custom_order_opts = array('popularity', 'rating');
    /**
     * All the query args related to the filter by attributes block.
     *
     * @var array
     */
    protected $attributes_filter_query_args = array();
    /** This is a feature flag to enable the custom inherit Global Query implementation.
     * This is not intended to be a permanent feature flag, but rather a temporary.
     * It is also necessary to enable this feature flag on the PHP side: `assets/js/blocks/product-query/utils.tsx:83`.
     * https://github.com/woocommerce/woocommerce-blocks/pull/7382
     *
     * @var boolean
     */
    protected $is_custom_inherit_global_query_implementation_enabled = false;
    /**
     * All query args from WP_Query.
     *
     * @var array
     */
    protected $valid_query_vars;
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
     * Update the query for the product query block.
     *
     * @param string|null $pre_render   The pre-rendered content. Default null.
     * @param array       $parsed_block The block being rendered.
     */
    public function update_query($pre_render, $parsed_block)
    {
    }
    /**
     * Update the query for the product query block in Editor.
     *
     * @param array           $args    Query args.
     * @param WP_REST_Request $request Request.
     */
    public function update_rest_query($args, $request)
    {
    }
    /**
     * Return a custom query based on attributes, filters and global WP_Query.
     *
     * @param WP_Query $query The WordPress Query.
     * @return array
     */
    public function build_query($query)
    {
    }
    /**
     * Extends allowed `collection_params` for the REST API
     *
     * By itself, the REST API doesn't accept custom `orderby` values,
     * even if they are supported by a custom post type.
     *
     * @param array $params  A list of allowed `orderby` values.
     *
     * @return array
     */
    public function extend_rest_query_allowed_params($params)
    {
    }
    /**
     * Set the query vars that are used by filter blocks.
     *
     * @param array $public_query_vars Public query vars.
     * @return array
     */
    public function set_query_vars($public_query_vars)
    {
    }
}