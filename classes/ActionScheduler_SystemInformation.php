<?php


/**
 * Provides information about active and registered instances of Action Scheduler.
 */
class ActionScheduler_SystemInformation
{
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
     * @return array
     */
    public static function active_source(): array
    {
    }
    /**
     * Returns the directory path for the currently active installation of Action Scheduler.
     *
     * @return string
     */
    public static function active_source_path(): string
    {
    }
    /**
     * Get registered sources.
     *
     * It is not always possible to obtain this information. For instance, if earlier versions (<=3.9.0) of
     * Action Scheduler register themselves first, then the necessary data about registered sources will
     * not be available.
     *
     * @return array<string, string>
     */
    public static function get_sources()
    {
    }
}