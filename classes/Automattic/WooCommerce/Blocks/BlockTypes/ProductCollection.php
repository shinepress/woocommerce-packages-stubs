<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * ProductCollection class.
 */
class ProductCollection extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'product-collection';
    /**
     * All query args from WP_Query.
     *
     * @var array
     */
    protected $valid_query_vars;
    /**
     * Orderby options not natively supported by WordPress REST API
     *
     * @var array
     */
    protected $custom_order_opts = array('popularity', 'rating');
    /**
     * Get the frontend script handle for this block type.
     *
     * @param string $key Data to get, or default to everything.
     */
    protected function get_block_type_script($key = null)
    {
    }
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
     * Update the query for the product query block in Editor.
     *
     * @param array           $args    Query args.
     * @param WP_REST_Request $request Request.
     */
    public function update_rest_query($args, $request): array
    {
    }
    /**
     * Get final query args based on provided values
     *
     * @param array $common_query_values Common query values.
     * @param array $query               Query from block context.
     */
    private function get_final_query_args($common_query_values, $query)
    {
    }
    /**
     * Return a custom query based on attributes, filters and global WP_Query.
     *
     * @param WP_Query $query The WordPress Query.
     * @param WP_Block $block The block being rendered.
     * @param int      $page  The page number.
     *
     * @return array
     */
    public function build_query($query, $block, $page)
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
     * Merge in the first parameter the keys "post_in", "meta_query" and "tax_query" of the second parameter.
     *
     * @param array[] ...$queries Query arrays to be merged.
     * @return array
     */
    private function merge_queries(...$queries)
    {
    }
    /**
     * Return query params to support custom sort values
     *
     * @param string $orderby  Sort order option.
     *
     * @return array
     */
    private function get_custom_orderby_query($orderby)
    {
    }
    /**
     * Return a query for on sale products.
     *
     * @param bool $is_on_sale Whether to query for on sale products.
     *
     * @return array
     */
    private function get_on_sale_products_query($is_on_sale)
    {
    }
    /**
     * Return or initialize $valid_query_vars.
     *
     * @return array
     */
    private function get_valid_query_vars()
    {
    }
    /**
     * Merge two array recursively but replace the non-array values instead of
     * merging them. The merging strategy:
     *
     * - If keys from merge array doesn't exist in the base array, create them.
     * - For array items with numeric keys, we merge them as normal.
     * - For array items with string keys:
     *
     *   - If the value isn't array, we'll use the value comming from the merge array.
     *     $base = ['orderby' => 'date']
     *     $new  = ['orderby' => 'meta_value_num']
     *     Result: ['orderby' => 'meta_value_num']
     *
     *   - If the value is array, we'll use recursion to merge each key.
     *     $base = ['meta_query' => [
     *       [
     *         'key'     => '_stock_status',
     *         'compare' => 'IN'
     *         'value'   =>  ['instock', 'onbackorder']
     *       ]
     *     ]]
     *     $new  = ['meta_query' => [
     *       [
     *         'relation' => 'AND',
     *         [...<max_price_query>],
     *         [...<min_price_query>],
     *       ]
     *     ]]
     *     Result: ['meta_query' => [
     *       [
     *         'key'     => '_stock_status',
     *         'compare' => 'IN'
     *         'value'   =>  ['instock', 'onbackorder']
     *       ],
     *       [
     *         'relation' => 'AND',
     *         [...<max_price_query>],
     *         [...<min_price_query>],
     *       ]
     *     ]]
     *
     *     $base = ['post__in' => [1, 2, 3, 4, 5]]
     *     $new  = ['post__in' => [3, 4, 5, 6, 7]]
     *     Result: ['post__in' => [1, 2, 3, 4, 5, 3, 4, 5, 6, 7]]
     *
     * @param array $base First array.
     * @param array $new  Second array.
     */
    private function array_merge_recursive_replace_non_array_properties($base, $new)
    {
    }
    /**
     * Return a query for products depending on their stock status.
     *
     * @param array $stock_statuses An array of acceptable stock statuses.
     * @return array
     */
    private function get_stock_status_query($stock_statuses)
    {
    }
    /**
     * Return a query for product visibility depending on their stock status.
     *
     * @param array $stock_query Stock status query.
     *
     * @return array Tax query for product visibility.
     */
    private function get_product_visibility_query($stock_query)
    {
    }
    /**
     * Merge tax_queries from various queries.
     *
     * @param array ...$queries Query arrays to be merged.
     * @return array
     */
    private function merge_tax_queries(...$queries)
    {
    }
    /**
     * Return the `tax_query` for the requested attributes
     *
     * @param array $attributes  Attributes and their terms.
     *
     * @return array
     */
    private function get_product_attributes_query($attributes = array())
    {
    }
    /**
     * Return a query to filter products by taxonomies (product categories, product tags, etc.)
     *
     * For example:
     * User could provide "Product Categories" using "Filters" ToolsPanel available in Inspector Controls.
     * We use this function to extract its query from $tax_query.
     *
     * For example, this is how the query for product categories will look like in $tax_query array:
     * Array
     *    (
     *        [taxonomy] => product_cat
     *        [terms] => Array
     *            (
     *                [0] => 36
     *            )
     *    )
     *
     * For product tags, taxonomy would be "product_tag"
     *
     * @param array $tax_query Query to filter products by taxonomies.
     * @return array Query to filter products by taxonomies.
     */
    private function get_filter_by_taxonomies_query($tax_query): array
    {
    }
}