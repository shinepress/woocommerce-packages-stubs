<?php


/**
 * Class ActionScheduler_Store
 * @codeCoverageIgnore
 */
abstract class ActionScheduler_Store extends \ActionScheduler_Store_Deprecated
{
    const STATUS_COMPLETE = 'complete';
    const STATUS_PENDING = 'pending';
    const STATUS_RUNNING = 'in-progress';
    const STATUS_FAILED = 'failed';
    const STATUS_CANCELED = 'canceled';
    const DEFAULT_CLASS = 'ActionScheduler_wpPostStore';
    /** @var ActionScheduler_Store */
    private static $store = \NULL;
    /** @var int */
    protected static $max_args_length = 191;
    /**
     * @param ActionScheduler_Action $action
     * @param DateTime $scheduled_date Optional Date of the first instance
     *        to store. Otherwise uses the first date of the action's
     *        schedule.
     *
     * @return int The action ID
     */
    abstract public function save_action(\ActionScheduler_Action $action, \DateTime $scheduled_date = \NULL);
    /**
     * @param string $action_id
     *
     * @return ActionScheduler_Action
     */
    abstract public function fetch_action($action_id);
    /**
     * @param string $hook Hook name/slug.
     * @param array  $params Hook arguments.
     * @return string ID of the next action matching the criteria.
     */
    abstract public function find_action($hook, $params = array());
    /**
     * @param array  $query Query parameters.
     * @param string $query_type Whether to select or count the results. Default, select.
     *
     * @return array|int The IDs of or count of actions matching the query.
     */
    abstract public function query_actions($query = array(), $query_type = 'select');
    /**
     * Get a count of all actions in the store, grouped by status
     *
     * @return array
     */
    abstract public function action_counts();
    /**
     * @param string $action_id
     */
    abstract public function cancel_action($action_id);
    /**
     * @param string $action_id
     */
    abstract public function delete_action($action_id);
    /**
     * @param string $action_id
     *
     * @return DateTime The date the action is schedule to run, or the date that it ran.
     */
    abstract public function get_date($action_id);
    /**
     * @param int      $max_actions
     * @param DateTime $before_date Claim only actions schedule before the given date. Defaults to now.
     * @param array    $hooks       Claim only actions with a hook or hooks.
     * @param string   $group       Claim only actions in the given group.
     *
     * @return ActionScheduler_ActionClaim
     */
    abstract public function stake_claim($max_actions = 10, \DateTime $before_date = \null, $hooks = array(), $group = '');
    /**
     * @return int
     */
    abstract public function get_claim_count();
    /**
     * @param ActionScheduler_ActionClaim $claim
     */
    abstract public function release_claim(\ActionScheduler_ActionClaim $claim);
    /**
     * @param string $action_id
     */
    abstract public function unclaim_action($action_id);
    /**
     * @param string $action_id
     */
    abstract public function mark_failure($action_id);
    /**
     * @param string $action_id
     */
    abstract public function log_execution($action_id);
    /**
     * @param string $action_id
     */
    abstract public function mark_complete($action_id);
    /**
     * @param string $action_id
     *
     * @return string
     */
    abstract public function get_status($action_id);
    /**
     * @param string $action_id
     * @return mixed
     */
    abstract public function get_claim_id($action_id);
    /**
     * @param string $claim_id
     * @return array
     */
    abstract public function find_actions_by_claim_id($claim_id);
    /**
     * @param string $comparison_operator
     * @return string
     */
    protected function validate_sql_comparator($comparison_operator)
    {
    }
    /**
     * Get the time MySQL formated date/time string for an action's (next) scheduled date.
     *
     * @param ActionScheduler_Action $action
     * @param DateTime $scheduled_date (optional)
     * @return string
     */
    protected function get_scheduled_date_string(\ActionScheduler_Action $action, \DateTime $scheduled_date = \NULL)
    {
    }
    /**
     * Get the time MySQL formated date/time string for an action's (next) scheduled date.
     *
     * @param ActionScheduler_Action $action
     * @param DateTime $scheduled_date (optional)
     * @return string
     */
    protected function get_scheduled_date_string_local(\ActionScheduler_Action $action, \DateTime $scheduled_date = \NULL)
    {
    }
    /**
     * Validate that we could decode action arguments.
     *
     * @param mixed $args      The decoded arguments.
     * @param int   $action_id The action ID.
     *
     * @throws ActionScheduler_InvalidActionException When the decoded arguments are invalid.
     */
    protected function validate_args($args, $action_id)
    {
    }
    /**
     * Validate a ActionScheduler_Schedule object.
     *
     * @param mixed $schedule  The unserialized ActionScheduler_Schedule object.
     * @param int   $action_id The action ID.
     *
     * @throws ActionScheduler_InvalidActionException When the schedule is invalid.
     */
    protected function validate_schedule($schedule, $action_id)
    {
    }
    /**
     * InnoDB indexes have a maximum size of 767 bytes by default, which is only 191 characters with utf8mb4.
     *
     * Previously, AS wasn't concerned about args length, as we used the (unindex) post_content column. However,
     * with custom tables, we use an indexed VARCHAR column instead.
     *
     * @param  ActionScheduler_Action $action Action to be validated.
     * @throws InvalidArgumentException When json encoded args is too long.
     */
    protected function validate_action(\ActionScheduler_Action $action)
    {
    }
    /**
     * Cancel pending actions by hook.
     *
     * @since 3.0.0
     *
     * @param string $hook Hook name.
     *
     * @return void
     */
    public function cancel_actions_by_hook($hook)
    {
    }
    /**
     * Cancel pending actions by group.
     *
     * @since 3.0.0
     *
     * @param string $group Group slug.
     *
     * @return void
     */
    public function cancel_actions_by_group($group)
    {
    }
    /**
     * Cancel a set of action IDs.
     *
     * @since 3.0.0
     *
     * @param array $action_ids List of action IDs.
     *
     * @return void
     */
    private function bulk_cancel_actions($action_ids)
    {
    }
    /**
     * @return array
     */
    public function get_status_labels()
    {
    }
    /**
     * Check if there are any pending scheduled actions due to run.
     *
     * @param ActionScheduler_Action $action
     * @param DateTime $scheduled_date (optional)
     * @return string
     */
    public function has_pending_actions_due()
    {
    }
    /**
     * Callable initialization function optionally overridden in derived classes.
     */
    public function init()
    {
    }
    /**
     * Callable function to mark an action as migrated optionally overridden in derived classes.
     */
    public function mark_migrated($action_id)
    {
    }
    /**
     * @return ActionScheduler_Store
     */
    public static function instance()
    {
    }
}