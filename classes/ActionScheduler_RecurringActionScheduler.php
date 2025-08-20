<?php


/**
 * Class ActionScheduler_RecurringActionScheduler
 *
 * This class ensures that the `action_scheduler_ensure_recurring_actions` hook is triggered on a daily interval. This
 * simplifies the process for other plugins to register their recurring actions without requiring each plugin to query
 * or schedule actions independently on every request.
 */
class ActionScheduler_RecurringActionScheduler
{
    /**
     * @var string The hook of the scheduled recurring action that is run to trigger the
     *      `action_scheduler_ensure_recurring_actions` hook that plugins should use.  We can't directly have the
     *      scheduled action hook be the hook plugins should use because the actions will show as failed if no plugin
     *      was actively hooked into it.
     */
    private const RUN_SCHEDULED_RECURRING_ACTIONS_HOOK = 'action_scheduler_run_recurring_actions_schedule_hook';
    /**
     * Initialize the instance.  Should only be run on a single instance per request.
     *
     * @return void
     */
    public function init(): void
    {
    }
    /**
     * Schedule the recurring `action_scheduler_ensure_recurring_actions` action if not already scheduled.
     *
     * @return void
     */
    public function schedule_recurring_scheduler_hook(): void
    {
    }
    /**
     * Trigger the hook to allow other plugins to schedule their recurring actions.
     *
     * @return void
     */
    public function run_recurring_scheduler_hook(): void
    {
    }
}