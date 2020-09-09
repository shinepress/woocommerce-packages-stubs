<?php

namespace Automattic\WooCommerce\Admin\RemoteInboxNotifications;

/**
 * Specs data source poller class.
 * This handles polling specs from JSON endpoints, and
 * stores the specs in to the database as an option.
 */
class DataSourcePoller
{
    const DATA_SOURCES = array('https://woocommerce.com/wp-json/wccom/inbox-notifications/1.0/notifications.json');
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
     * @param Array $specs_to_merge_in The specs to merge in to $specs.
     * @param Array $specs             The list of specs being merged into.
     */
    private static function merge_specs($specs_to_merge_in, &$specs)
    {
    }
    /**
     * Validate the spec.
     *
     * @param object $spec The spec to validate.
     *
     * @return bool The result of the validation.
     */
    private static function validate_spec($spec)
    {
    }
    /**
     * Validate the action.
     *
     * @param object $action The action to validate.
     *
     * @return bool The result of the validation.
     */
    private static function validate_action($action)
    {
    }
}