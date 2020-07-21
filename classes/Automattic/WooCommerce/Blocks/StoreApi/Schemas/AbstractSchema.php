<?php

namespace Automattic\WooCommerce\Blocks\StoreApi\Schemas;

/**
 * AbstractBlock class.
 *
 * @since 2.5.0
 */
abstract class AbstractSchema
{
    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'Schema';
    /**
     * Returns the full item schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
    }
    /**
     * Returns the public schema.
     *
     * @return array
     */
    public function get_public_item_schema()
    {
    }
    /**
     * Retrieves an array of endpoint arguments from the item schema for the controller.
     *
     * @param string $method Optional. HTTP method of the request.
     * @return array Endpoint arguments.
     */
    public function get_endpoint_args_for_item_schema($method = \WP_REST_Server::CREATABLE)
    {
    }
    /**
     * Force all schema properties to be readonly.
     *
     * @param array $properties Schema.
     * @return array Updated schema.
     */
    protected function force_schema_readonly($properties)
    {
    }
    /**
     * Returns consistent currency schema used across endpoints for prices.
     *
     * @return array
     */
    protected function get_store_currency_properties()
    {
    }
    /**
     * Prepares a list of store currency data to return in responses.
     *
     * @todo Core could use a more defined currency object format, making use of
     * constants for currency format rather than strings, and holding this type
     * of information instead of plugins/blocks needed to normalize things
     * themselves.
     *
     * @return array
     */
    protected function get_store_currency_response()
    {
    }
    /**
     * Convert monetary values from WooCommerce to string based integers, using
     * the smallest unit of a currency.
     *
     * @param string|float $amount Monetary amount with decimals.
     * @param int          $decimals Number of decimals the amount is formatted with.
     * @param int          $rounding_mode Defaults to the PHP_ROUND_HALF_UP constant.
     * @return string      The new amount.
     */
    protected function prepare_money_response($amount, $decimals = 2, $rounding_mode = PHP_ROUND_HALF_UP)
    {
    }
    /**
     * Prepares HTML based content, such as post titles and content, for the API response.
     *
     * The wptexturize, convert_chars, and trim functions are also used in the `the_title` filter.
     * The function wp_kses_post removes disallowed HTML tags.
     *
     * @param string|array $response Data to format.
     * @return string|array Formatted data.
     */
    protected function prepare_html_response($response)
    {
    }
}