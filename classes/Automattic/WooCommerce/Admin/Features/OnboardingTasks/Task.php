<?php

namespace Automattic\WooCommerce\Admin\Features\OnboardingTasks;

/**
 * Task class.
 */
class Task
{
    /**
     * Task traits.
     */
    use \Automattic\WooCommerce\Admin\Features\OnboardingTasks\TaskTraits;
    /**
     * ID.
     *
     * @var string
     */
    public $id = '';
    /**
     * Parent task list ID.
     *
     * @var string
     */
    public $parent_id = '';
    /**
     * Title.
     *
     * @var string
     */
    public $title = '';
    /**
     * Content.
     *
     * @var string
     */
    public $content = '';
    /**
     * Additional info.
     *
     * @var string
     */
    public $additional_info = '';
    /**
     * Action label.
     *
     * @var string
     */
    public $action_label = '';
    /**
     * Action URL.
     *
     * @var string|null
     */
    public $action_url = null;
    /**
     * Task completion.
     *
     * @var bool
     */
    public $is_complete = false;
    /**
     * Viewing capability.
     *
     * @var bool
     */
    public $can_view = true;
    /**
     * Time string.
     *
     * @var string|null
     */
    public $time = null;
    /**
     * Level of task importance.
     *
     * @var int|null
     */
    public $level = null;
    /**
     * Dismissability.
     *
     * @var bool
     */
    public $is_dismissable = false;
    /**
     * Snoozeability.
     *
     * @var bool
     */
    public $is_snoozeable = false;
    /**
     * Snoozeability.
     *
     * @var string|null
     */
    public $snoozed_until = null;
    /**
     * Name of the dismiss option.
     *
     * @var string
     */
    const DISMISSED_OPTION = 'woocommerce_task_list_dismissed_tasks';
    /**
     * Name of the snooze option.
     *
     * @var string
     */
    const SNOOZED_OPTION = 'woocommerce_task_list_remind_me_later_tasks';
    /**
     * Name of the actioned option.
     *
     * @var string
     */
    const ACTIONED_OPTION = 'woocommerce_task_list_tracked_completed_actions';
    /**
     * Option name of completed tasks.
     *
     * @var string
     */
    const COMPLETED_OPTION = 'woocommerce_task_list_tracked_completed_tasks';
    /**
     * Name of the active task transient.
     *
     * @var string
     */
    const ACTIVE_TASK_TRANSIENT = 'wc_onboarding_active_task';
    /**
     * Duration to milisecond mapping.
     *
     * @var string
     */
    protected $duration_to_ms = array('day' => DAY_IN_SECONDS * 1000, 'hour' => HOUR_IN_SECONDS * 1000, 'week' => WEEK_IN_SECONDS * 1000);
    /**
     * Constructor
     *
     * @param array $data Task list data.
     */
    public function __construct($data = array())
    {
    }
    /**
     * Bool for task dismissal.
     *
     * @return bool
     */
    public function is_dismissed()
    {
    }
    /**
     * Dismiss the task.
     *
     * @return bool
     */
    public function dismiss()
    {
    }
    /**
     * Undo task dismissal.
     *
     * @return bool
     */
    public function undo_dismiss()
    {
    }
    /**
     * Bool for task snoozed.
     *
     * @return bool
     */
    public function is_snoozed()
    {
    }
    /**
     * Snooze the task.
     *
     * @param string $duration Duration to snooze. day|hour|week.
     * @return bool
     */
    public function snooze($duration = 'day')
    {
    }
    /**
     * Undo task snooze.
     *
     * @return bool
     */
    public function undo_snooze()
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
     * Track task completion if task is viewable.
     */
    public function possibly_track_completion()
    {
    }
    /**
     * Set this as the active task across page loads.
     */
    public function set_active()
    {
    }
    /**
     * Check if this is the active task.
     */
    public function is_active()
    {
    }
    /**
     * Get the task as JSON.
     *
     * @return array
     */
    public function get_json()
    {
    }
    /**
     * Convert object keys to camelcase.
     *
     * @param object $object Object to convert.
     * @return object
     */
    public static function convert_object_to_camelcase($object)
    {
    }
    /**
     * Mark a task as actioned.  Used to verify an action has taken place in some tasks.
     *
     * @return bool
     */
    public function mark_actioned()
    {
    }
    /**
     * Check if a task has been actioned.
     *
     * @return bool
     */
    public function is_actioned()
    {
    }
    /**
     * Check if a provided task ID has been actioned.
     *
     * @param string $id Task ID.
     * @return bool
     */
    public static function is_task_actioned($id)
    {
    }
    /**
     * Sorting function for tasks.
     *
     * @param Task  $a Task a.
     * @param Task  $b Task b.
     * @param array $sort_by list of columns with sort order.
     * @return int
     */
    public static function sort($a, $b, $sort_by = array())
    {
    }
}