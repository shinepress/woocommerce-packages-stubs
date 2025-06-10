<?php


/**
 * Class ActionScheduler_Versions
 */
class ActionScheduler_Versions
{
    /**
     * ActionScheduler_Versions instance.
     *
     * @var ActionScheduler_Versions
     */
    private static $instance = \null;
    /**
     * Versions.
     *
     * @var array<string, callable>
     */
    private $versions = array();
    /**
     * Registered sources.
     *
     * @var array<string, string>
     */
    private $sources = array();
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
     * Get registered sources.
     *
     * Use with caution: this method is only available as of Action Scheduler's 3.9.1
     * release and, owing to the way Action Scheduler is loaded, it's possible that the
     * class definition used at runtime will belong to an earlier version.
     *
     * @since 3.9.1
     *
     * @return array<string, string>
     */
    public function get_sources()
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
     * Get instance.
     *
     * @return ActionScheduler_Versions
     * @codeCoverageIgnore
     */
    public static function instance()
    {
    }
    /**
     * Initialize.
     *
     * @codeCoverageIgnore
     */
    public static function initialize_latest_version()
    {
    }
    /**
     * Returns information about the plugin or theme which contains the current active version
     * of Action Scheduler.
     *
     * If this cannot be determined, or if Action Scheduler is being loaded via some other
     * method, then it will return an empty array. Otherwise, if populated, the array will
     * look like the following:
     *
     *     [
     *         'type' => 'plugin', # or 'theme'
     *         'name' => 'Name',
     *     ]
     *
     * @deprecated 3.9.2 Use ActionScheduler_SystemInformation::active_source().
     *
     * @return array
     */
    public function active_source(): array
    {
    }
    /**
     * Returns the directory path for the currently active installation of Action Scheduler.
     *
     * @deprecated 3.9.2 Use ActionScheduler_SystemInformation::active_source_path().
     *
     * @return string
     */
    public function active_source_path(): string
    {
    }
}