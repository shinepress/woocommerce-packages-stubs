<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * REST API Data countries controller class.
 *
 * @extends WC_REST_Data_Countries_Controller
 */
class DataCountries extends \WC_REST_Data_Countries_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc-analytics';
}