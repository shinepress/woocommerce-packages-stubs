<?php

namespace Automattic\WooCommerce\Blocks\RestApi\StoreApi\Schemas;

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
     * Returns schema properties.
     *
     * @return array
     */
    abstract protected function get_properties();
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