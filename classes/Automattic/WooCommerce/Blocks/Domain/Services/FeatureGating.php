<?php

namespace Automattic\WooCommerce\Blocks\Domain\Services;

/**
 * Service class that handles the feature flags.
 *
 * @internal
 */
class FeatureGating
{
    /**
     * Current flag value.
     *
     * @var int
     */
    private $flag;
    const EXPERIMENTAL_FLAG = 3;
    const FEATURE_PLUGIN_FLAG = 2;
    const CORE_FLAG = 1;
    /**
     * Constructor
     *
     * @param int $flag Hardcoded flag value. Useful for tests.
     */
    public function __construct($flag = 0)
    {
    }
    /**
     * Set correct flag.
     */
    public function init()
    {
    }
    /**
     * Returns the current flag value.
     *
     * @return int
     */
    public function get_flag()
    {
    }
    /**
     * Checks if we're executing the code in an experimental build mode.
     *
     * @return boolean
     */
    public function is_experimental_build()
    {
    }
    /**
     * Checks if we're executing the code in an feature plugin or experimental build mode.
     *
     * @return boolean
     */
    public function is_feature_plugin_build()
    {
    }
}