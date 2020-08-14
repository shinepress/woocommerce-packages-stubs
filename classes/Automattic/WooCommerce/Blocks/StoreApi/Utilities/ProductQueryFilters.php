<?php

namespace Automattic\WooCommerce\Blocks\StoreApi\Utilities;

/**
 * Product Query filters class.
 *
 * @since 2.5.0
 */
class ProductQueryFilters
{
    /**
     * Get filtered min price for current products.
     *
     * @param \WP_REST_Request $request The request object.
     * @return array
     */
    public function get_filtered_price($request)
    {
    }
    /**
     * Get attribute counts for the current products.
     *
     * @param \WP_REST_Request $request The request object.
     * @param array            $attributes Attributes to count, either names or ids.
     * @return array termId=>count pairs.
     */
    public function get_attribute_counts($request, $attributes = [])
    {
    }
    /**
     * Get rating counts for the current products.
     *
     * @param \WP_REST_Request $request The request object.
     * @return array rating=>count pairs.
     */
    public function get_rating_counts($request)
    {
    }
}