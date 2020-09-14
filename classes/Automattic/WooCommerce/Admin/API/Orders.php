<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * Orders controller.
 *
 * @extends WC_REST_Orders_Controller
 */
class Orders extends \WC_REST_Orders_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc-analytics';
    /**
     * Get the query params for collections.
     *
     * @return array
     */
    public function get_collection_params()
    {
    }
    /**
     * Prepare objects query.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return array
     */
    protected function prepare_objects_query($request)
    {
    }
    /**
     * Get formatted item data.
     *
     * @param  WC_Data $object WC_Data instance.
     * @return array
     */
    protected function get_formatted_item_data($object)
    {
    }
}