<?php

namespace Automattic\WooCommerce\Admin\Features\OnboardingTasks;

/**
 * Task Lists class.
 */
class TaskLists
{
    /**
     * Class instance.
     *
     * @var TaskLists instance
     */
    protected static $instance = null;
    /**
     * An array of all registered lists.
     *
     * @var array
     */
    protected static $lists = array();
    /**
     * Boolean value to indicate if default tasks have been added.
     *
     * @var boolean
     */
    protected static $default_tasks_loaded = false;
    /**
     * Array of default tasks.
     *
     * @var array
     */
    const DEFAULT_TASKS = array('StoreDetails', 'Purchase', 'Products', 'WooCommercePayments', 'Payments', 'Tax', 'Shipping', 'Marketing', 'Appearance');
    /**
     * Get class instance.
     */
    final public static function instance()
    {
    }
    /**
     * Initialize the task lists.
     */
    public static function init()
    {
    }
    /**
     * Initialize default lists.
     */
    public static function init_default_lists()
    {
    }
    /**
     * Initialize tasks.
     */
    public static function init_tasks()
    {
    }
    /**
     * Temporarily store the active task to persist across page loads when neccessary.
     * Most tasks do not need this.
     */
    public static function set_active_task()
    {
    }
    /**
     * Add a task list.
     *
     * @param array $args Task list properties.
     * @return WP_Error|Task
     */
    public static function add_list($args)
    {
    }
    /**
     * Add task to a given task list.
     *
     * @param string $list_id List ID to add the task to.
     * @param array  $args Task properties.
     * @return WP_Error|Task
     */
    public static function add_task($list_id, $args)
    {
    }
    /**
     * Add default task lists.
     */
    public static function maybe_add_default_tasks()
    {
    }
    /**
     * Add default extended task lists.
     *
     * @param array $extended_tasks list of extended tasks.
     */
    public static function maybe_add_extended_tasks($extended_tasks)
    {
    }
    /**
     * Get all task lists.
     *
     * @return array
     */
    public static function get_lists()
    {
    }
    /**
     * Clear all task lists.
     */
    public static function clear_lists()
    {
    }
    /**
     * Get visible task lists.
     */
    public static function get_visible()
    {
    }
    /**
     * Retrieve a task list by ID.
     *
     * @param String $id Task list ID.
     *
     * @return TaskList|null
     */
    public static function get_list($id)
    {
    }
    /**
     * Retrieve single task.
     *
     * @param String $id Task ID.
     * @param String $task_list_id Task list ID.
     *
     * @return Object
     */
    public static function get_task($id, $task_list_id = null)
    {
    }
}