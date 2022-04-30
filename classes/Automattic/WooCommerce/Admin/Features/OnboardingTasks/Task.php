<?php

namespace Automattic\WooCommerce\Admin\Features\OnboardingTasks;

/**
 * Task class.
 */
class Task
{
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
     * @var string
     */
    public $content = '';
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
    protected $is_complete = false;
    /**
     * Viewing capability.
     *
     * @var bool
     */
    protected $can_view = true;
    /**
     * Time string.
     *
     * @var string|null
     */
    public $time = null;
    /**
     * Dismissability.
     *
     * @var bool
     */
    protected $is_dismissable = false;
    /**
     * Snoozeability.
     *
     * @var bool
     */
    protected $is_snoozeable = false;
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
     * Bool for task visibility.
     *
     * @return bool
     */
    public function is_visible()
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
}