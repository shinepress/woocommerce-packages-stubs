<?php


/**
 * Class ActionScheduler_ActionFactory
 */
class ActionScheduler_ActionFactory
{
    /**
     * @param string $status The action's status in the data store
     * @param string $hook The hook to trigger when this action runs
     * @param array $args Args to pass to callbacks when the hook is triggered
     * @param ActionScheduler_Schedule $schedule The action's schedule
     * @param string $group A group to put the action in
     *
     * @return ActionScheduler_Action An instance of the stored action
     */
    public function get_stored_action($status, $hook, array $args = array(), \ActionScheduler_Schedule $schedule = \null, $group = '')
    {
    }
    /**
     * Enqueue an action to run one time, as soon as possible (rather a specific scheduled time).
     *
     * This method creates a new action with the NULLSchedule. This schedule maps to a MySQL datetime string of
     * 0000-00-00 00:00:00. This is done to create a psuedo "async action" type that is fully backward compatible.
     * Existing queries to claim actions claim by date, meaning actions scheduled for 0000-00-00 00:00:00 will
     * always be claimed prior to actions scheduled for a specific date. This makes sure that any async action is
     * given priority in queue processing. This has the added advantage of making sure async actions can be
     * claimed by both the existing WP Cron and WP CLI runners, as well as a new async request runner.
     *
     * @param string $hook The hook to trigger when this action runs
     * @param array $args Args to pass when the hook is triggered
     * @param string $group A group to put the action in
     *
     * @return int The ID of the stored action
     */
    public function async($hook, $args = array(), $group = '')
    {
    }
    /**
     * @param string $hook The hook to trigger when this action runs
     * @param array $args Args to pass when the hook is triggered
     * @param int $when Unix timestamp when the action will run
     * @param string $group A group to put the action in
     *
     * @return int The ID of the stored action
     */
    public function single($hook, $args = array(), $when = \null, $group = '')
    {
    }
    /**
     * Create the first instance of an action recurring on a given interval.
     *
     * @param string $hook The hook to trigger when this action runs
     * @param array $args Args to pass when the hook is triggered
     * @param int $first Unix timestamp for the first run
     * @param int $interval Seconds between runs
     * @param string $group A group to put the action in
     *
     * @return int The ID of the stored action
     */
    public function recurring($hook, $args = array(), $first = \null, $interval = \null, $group = '')
    {
    }
    /**
     * Create the first instance of an action recurring on a Cron schedule.
     *
     * @param string $hook The hook to trigger when this action runs
     * @param array $args Args to pass when the hook is triggered
     * @param int $base_timestamp The first instance of the action will be scheduled
     *        to run at a time calculated after this timestamp matching the cron
     *        expression. This can be used to delay the first instance of the action.
     * @param int $schedule A cron definition string
     * @param string $group A group to put the action in
     *
     * @return int The ID of the stored action
     */
    public function cron($hook, $args = array(), $base_timestamp = \null, $schedule = \null, $group = '')
    {
    }
    /**
     * Create a successive instance of a recurring or cron action.
     *
     * Importantly, the action will be rescheduled to run based on the current date/time.
     * That means when the action is scheduled to run in the past, the next scheduled date
     * will be pushed forward. For example, if a recurring action set to run every hour
     * was scheduled to run 5 seconds ago, it will be next scheduled for 1 hour in the
     * future, which is 1 hour and 5 seconds from when it was last scheduled to run.
     *
     * Alternatively, if the action is scheduled to run in the future, and is run early,
     * likely via manual intervention, then its schedule will change based on the time now.
     * For example, if a recurring action set to run every day, and is run 12 hours early,
     * it will run again in 24 hours, not 36 hours.
     *
     * This slippage is less of an issue with Cron actions, as the specific run time can
     * be set for them to run, e.g. 1am each day. In those cases, and entire period would
     * need to be missed before there was any change is scheduled, e.g. in the case of an
     * action scheduled for 1am each day, the action would need to run an entire day late.
     *
     * @param ActionScheduler_Action $action The existing action.
     *
     * @return string The ID of the stored action
     * @throws InvalidArgumentException If $action is not a recurring action.
     */
    public function repeat($action)
    {
    }
    /**
     * @param ActionScheduler_Action $action
     *
     * @return int The ID of the stored action
     */
    protected function store(\ActionScheduler_Action $action)
    {
    }
}