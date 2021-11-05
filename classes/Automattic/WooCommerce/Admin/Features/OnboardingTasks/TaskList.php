<?php

namespace Automattic\WooCommerce\Admin\Features\OnboardingTasks;

/**
 * Task List class.
 */
class TaskList
{
    /**
     * Option name hidden task lists.
     */
    const HIDDEN_OPTION = 'woocommerce_task_list_hidden_lists';
    /**
     * Option name completed task lists.
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
     * Title.
     *
     * @var array
     */
    protected $tasks = array();
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
    public function show()
    {
    }
    /**
     * Check if the task list is complete.
     *
     * @return bool
     */
    public function is_complete()
    {
    }
    /**
     * Add task to the task list.
     *
     * @param array $args Task properties.
     */
    public function add_task($args)
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