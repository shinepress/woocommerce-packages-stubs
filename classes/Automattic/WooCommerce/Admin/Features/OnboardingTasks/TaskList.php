<?php

namespace Automattic\WooCommerce\Admin\Features\OnboardingTasks;

/**
 * Task List class.
 */
class TaskList
{
    /**
     * Task traits.
     */
    use \Automattic\WooCommerce\Admin\Features\OnboardingTasks\TaskTraits;
    /**
     * Option name hidden task lists.
     */
    const HIDDEN_OPTION = 'woocommerce_task_list_hidden_lists';
    /**
     * Option name of completed task lists.
     */
    const COMPLETED_OPTION = 'woocommerce_task_list_completed_lists';
    /**
     * ID.
     *
     * @var string
     */
    public $id = '';
    /**
     * Title.
     *
     * @var string
     */
    public $title = '';
    /**
     * Tasks.
     *
     * @var array
     */
    public $tasks = array();
    /**
     * Sort keys.
     *
     * @var array
     */
    public $sort_by = array();
    /**
     * Constructor
     *
     * @param array $data Task list data.
     */
    public function __construct($data = array())
    {
    }
    /**
     * Check if the task list is hidden.
     *
     * @return bool
     */
    public function is_hidden()
    {
    }
    /**
     * Check if the task list is visible.
     *
     * @return bool
     */
    public function is_visible()
    {
    }
    /**
     * Hide the task list.
     *
     * @return bool
     */
    public function hide()
    {
    }
    /**
     * Undo hiding of the task list.
     *
     * @return bool
     */
    public function unhide()
    {
    }
    /**
     * Check if all viewable tasks are complete.
     *
     * @return bool
     */
    public function is_complete()
    {
    }
    /**
     * Check if a task list has previously been marked as complete.
     *
     * @return bool
     */
    public function has_previously_completed()
    {
    }
    /**
     * Add task to the task list.
     *
     * @param Task $task Task class.
     */
    public function add_task($task)
    {
    }
    /**
     * Get only visible tasks in list.
     *
     * @return array
     */
    public function get_viewable_tasks()
    {
    }
    /**
     * Track list completion of viewable tasks.
     */
    public function possibly_track_completion()
    {
    }
    /**
     * Sorts the attached tasks array.
     *
     * @param array $sort_by list of columns with sort order.
     * @return TaskList returns $this, for chaining.
     */
    public function sort_tasks($sort_by = array())
    {
    }
    /**
     * Get the list for use in JSON.
     *
     * @return array
     */
    public function get_json()
    {
    }
}