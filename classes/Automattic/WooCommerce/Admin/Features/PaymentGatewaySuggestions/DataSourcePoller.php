<?php

namespace Automattic\WooCommerce\Admin\Features\PaymentGatewaySuggestions;

/**
 * Specs data source poller class.
 * This handles polling specs from JSON endpoints.
 */
class DataSourcePoller
{
    const DATA_SOURCES = array('https://woocommerce.com/wp-json/wccom/payment-methods/1.0/methods.json');
    /**
     * The logger instance.
     *
     * @var WC_Logger|null
     */
    protected static $logger = null;
    /**
     * Get the logger instance.
     *
     * @return WC_Logger
     */
    private static function get_logger()
    {
    }
    /**
     * Reads the data sources for specs and persists those specs.
     *
     * @return bool Whether any specs were read.
     */
    public static function read_specs_from_data_sources()
    {
    }
    /**
     * Read a single data source and return the read specs
     *
     * @param string $url The URL to read the specs from.
     *
     * @return array The specs that have been read from the data source.
     */
    private static function read_data_source($url)
    {
    }
    /**
     * Merge the specs.
     *
     * @param Array  $specs_to_merge_in The specs to merge in to $specs.
     * @param Array  $specs             The list of specs being merged into.
     * @param string $url               The url of the feed being merged in (for error reporting).
     */
    private static function merge_specs($specs_to_merge_in, &$specs, $url)
    {
    }
    /**
     * Validate the spec.
     *
     * @param object $spec The spec to validate.
     * @param string $url  The url of the feed that provided the spec.
     *
     * @return bool The result of the validation.
     */
    private static function validate_spec($spec, $url)
    {
    }
}