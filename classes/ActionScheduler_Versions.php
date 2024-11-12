<?php


/**
 * Class ActionScheduler_Versions
 */
class ActionScheduler_Versions
{
    /**
     * @var ActionScheduler_Versions
     */
    private static $instance = \NULL;
    /** @var array<string, callable> */
    private $versions = array();
    /**
     * Register version's callback.
     *
     * @param string   $version_string          Action Scheduler version.
     * @param callable $initialization_callback Callback to initialize the version.
     */
    public function register($version_string, $initialization_callback)
    {
    }
    /**
     * Get all versions.
     */
    public function get_versions()
    {
    }
    /**
     * Get latest version registered.
     */
    public function latest_version()
    {
    }
    /**
     * Get callback for latest registered version.
     */
    public function latest_version_callback()
    {
    }
    /**
     * @return ActionScheduler_Versions
     * @codeCoverageIgnore
     */
    public static function instance()
    {
    }
    /**
     * @codeCoverageIgnore
     */
    public static function initialize_latest_version()
    {
    }
}