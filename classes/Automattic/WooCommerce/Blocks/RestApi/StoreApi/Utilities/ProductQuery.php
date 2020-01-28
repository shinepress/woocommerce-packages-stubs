<?php

namespace Automattic\WooCommerce\Blocks\RestApi\StoreApi\Utilities;

/**
 * Product Query class.
 *
 * @since 2.5.0
 */
class ProductQuery
{
    /**
     * Prepare query args to pass to WP_Query for a REST API request.
     *
     * @param \WP_REST_Request $request Request data.
     * @return array
     */
    public function prepare_objects_query($request)
    {
    }
    /**
     * Get objects.
     *
     * @param \WP_REST_Request $request Request data.
     * @return array
     */
    public function get_objects($request)
    {
    }
    /**
     * Add in conditional search filters for products.
     *
     * @param array     $args Query args.
     * @param \WC_Query $wp_query WC_Query object.
     * @return array
     */
    public function add_query_clauses($args, $wp_query)
    {
    }
    /**
     * Add meta query.
     *
     * @param array $args       Query args.
     * @param array $meta_query Meta query.
     * @return array
     */
    protected function add_meta_query($args, $meta_query)
    {
    }
    /**
     * Join wc_product_meta_lookup to posts if not already joined.
     *
     * @param string $sql SQL join.
     * @return string
     */
    protected function append_product_sorting_table_join($sql)
    {
    }
}