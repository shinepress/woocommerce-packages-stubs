<?php

namespace Automattic\WooCommerce\Blocks\StoreApi\Schemas;

/**
 * AbstractSchema class.
 *
 * For REST Route Schemas
 *
 * @internal This API is used internally by Blocks--it is still in flux and may be subject to revisions.
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
     * Rest extend instance
     *
     * @var ExtendRestApi
     */
    protected $extend;
    /**
     * Extending key that gets added to endpoint.
     *
     * @var string
     */
    const EXTENDING_KEY = 'extensions';
    /**
     * Constructor.
     *
     * @param ExtendRestApi $extend Rest Extending instance.
     */
    public function __construct(\Automattic\WooCommerce\Blocks\Domain\Services\ExtendRestApi $extend)
    {
    }
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
     * Returns extended data for a specific endpoint.
     *
     * @param string $endpoint The endpoint identifer.
     * @param array  ...$passed_args An array of arguments to be passed to callbacks.
     * @return object the data that will get added.
     */
    protected function get_extended_data($endpoint, ...$passed_args)
    {
    }
    /**
     * Returns extended schema for a specific endpoint.
     *
     * @param string $endpoint The endpoint identifer.
     * @param array  ...$passed_args An array of arguments to be passed to callbacks.
     * @return array the data that will get added.
     */
    protected function get_extended_schema($endpoint, ...$passed_args)
    {
    }
    /**
     * Apply a schema get_item_response callback to an array of items and return the result.
     *
     * @param AbstractSchema $schema Schema class instance.
     * @param array          $items Array of items.
     * @return array Array of values from the callback function.
     */
    protected function get_item_responses_from_schema(\Automattic\WooCommerce\Blocks\StoreApi\Schemas\AbstractSchema $schema, $items)
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
     * Adds currency data to an array of monetary values.
     *
     * @param array $values Monetary amounts.
     * @return array Monetary amounts with currency data appended.
     */
    protected function prepare_currency_response($values)
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
     * @param string|array $response Data to format.
     * @return string|array Formatted data.
     */
    protected function prepare_html_response($response)
    {
    }
}