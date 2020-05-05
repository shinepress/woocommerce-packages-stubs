<?php


/**
 * Class ActionScheduler
 * @codeCoverageIgnore
 */
abstract class ActionScheduler
{
    private static $plugin_file = '';
    /** @var ActionScheduler_ActionFactory */
    private static $factory = \NULL;
    public static function factory()
    {
    }
    public static function store()
    {
    }
    public static function lock()
    {
    }
    public static function logger()
    {
    }
    public static function runner()
    {
    }
    public static function admin_view()
    {
    }
    /**
     * Get the absolute system path to the plugin directory, or a file therein
     * @static
     * @param string $path
     * @return string
     */
    public static function plugin_path($path)
    {
    }
    /**
     * Get the absolute URL to the plugin directory, or a file therein
     * @static
     * @param string $path
     * @return string
     */
    public static function plugin_url($path)
    {
    }
    public static function autoload($class)
    {
    }
    /**
     * Initialize the plugin
     *
     * @static
     * @param string $plugin_file
     */
    public static function init($plugin_file)
    {
    }
    /**
     * Issue deprecated warning if an Action Scheduler function is called in the shutdown hook.
     *
     * @param string $function_name The name of the function being called.
     */
    public static function check_shutdown_hook($function_name)
    {
    }
    /**
     * Determine if the class is one of our abstract classes.
     *
     * @since 3.0.0
     *
     * @param string $class The class name.
     *
     * @return bool
     */
    protected static function is_class_abstract($class)
    {
    }
    /**
     * Determine if the class is one of our migration classes.
     *
     * @since 3.0.0
     *
     * @param string $class The class name.
     *
     * @return bool
     */
    protected static function is_class_migration($class)
    {
    }
    /**
     * Determine if the class is one of our WP CLI classes.
     *
     * @since 3.0.0
     *
     * @param string $class The class name.
     *
     * @return bool
     */
    protected static function is_class_cli($class)
    {
    }
    final public function __clone()
    {
    }
    final public function __wakeup()
    {
    }
    final private function __construct()
    {
    }
    /** Deprecated **/
    public static function get_datetime_object($when = \null, $timezone = 'UTC')
    {
    }
}