<?php

namespace Automattic\WooCommerce\Blocks\Domain\Services;

/**
 * Service class to provide utility functions to extend REST API.
 */
final class ExtendRestApi
{
    /**
     * Holds the Package instance
     *
     * @var Package
     */
    private $package;
    /**
     * Holds the formatters class instance.
     *
     * @var Formatters
     */
    private $formatters;
    /**
     * Constructor
     *
     * @param Package    $package An instance of the package class.
     * @param Formatters $formatters An instance of the formatters class.
     */
    public function __construct(\Automattic\WooCommerce\Blocks\Domain\Package $package, \Automattic\WooCommerce\Blocks\StoreApi\Formatters $formatters)
    {
    }
    /**
     * Returns a formatter instance.
     *
     * @param string $name Formatter name.
     * @return FormatterInterface
     */
    public function get_formatter($name)
    {
    }
    /**
     * Valid endpoints to extend
     *
     * @var array
     */
    private $endpoints = [\Automattic\WooCommerce\Blocks\StoreApi\Schemas\CartItemSchema::IDENTIFIER, \Automattic\WooCommerce\Blocks\StoreApi\Schemas\CartSchema::IDENTIFIER];
    /**
     * Data to be extended
     *
     * @var array
     */
    private $extend_data = [];
    /**
     * Array of payment requirements
     *
     * @var array
     */
    private $payment_requirements = [];
    /**
     * An endpoint that validates registration method call
     *
     * @param array $args {
     *     An array of elements that make up a post to update or insert.
     *
     *     @type string   $endpoint The endpoint to extend.
     *     @type string   $namespace Plugin namespace.
     *     @type callable $schema_callback Callback executed to add schema data.
     *     @type callable $data_callback Callback executed to add endpoint data.
     * }
     *
     * @throws Exception On failure to register.
     * @return boolean True on success.
     */
    public function register_endpoint_data($args)
    {
    }
    /**
     * Returns the registered endpoint data
     *
     * @param string $endpoint    A valid identifier.
     * @param array  $passed_args Passed arguments from the Schema class.
     * @return object Returns an casted object with registered endpoint data.
     * @throws Exception If a registered callback throws an error, or silently logs it.
     */
    public function get_endpoint_data($endpoint, array $passed_args = [])
    {
    }
    /**
     * Registers and validates payment requirements callbacks.
     *
     * @param array $args {
     *     Array of registration data.
     *
     *     @type callable $data_callback Callback executed to add payment requirements data.
     * }
     *
     * @throws Exception On failure to register.
     * @return boolean True on success.
     */
    public function register_payment_requirements($args)
    {
    }
    /**
     * Returns the additional payment requirements.
     *
     * @param array $initial_requirements list of requirements that should be added to the collected requirements.
     * @return array Returns a list of payment requirements.
     * @throws Exception If a registered callback throws an error, or silently logs it.
     */
    public function get_payment_requirements(array $initial_requirements = ['products'])
    {
    }
    /**
     * Returns the registered endpoint schema
     *
     * @param string $endpoint    A valid identifier.
     * @param array  $passed_args Passed arguments from the Schema class.
     * @return array Returns an array with registered schema data.
     * @throws Exception If a registered callback throws an error, or silently logs it.
     */
    public function get_endpoint_schema($endpoint, array $passed_args = [])
    {
    }
    /**
     * Throws error and/or silently logs it.
     *
     * @param string|Throwable $exception_or_error Error message or Exception.
     * @throws Exception An error to throw if we have debug enabled and user is admin.
     */
    private function throw_exception($exception_or_error)
    {
    }
    /**
     * Format schema for an extension.
     *
     * @param string $namespace Error message or Exception.
     * @param array  $schema An error to throw if we have debug enabled and user is admin.
     *
     * @return array Formatted schema.
     */
    private function format_extensions_properties($namespace, $schema)
    {
    }
}