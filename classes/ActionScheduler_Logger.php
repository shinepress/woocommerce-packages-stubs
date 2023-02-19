<?php


/**
 * Class ActionScheduler_Logger
 * @codeCoverageIgnore
 */
abstract class ActionScheduler_Logger
{
    /**
     * @return ActionScheduler_Logger
     */
    public static function instance()
    {
    }
    /**
     * @param string $action_id
     * @param string $message
     * @param DateTime $date
     *
     * @return string The log entry ID
     */
    abstract public function log($action_id, $message, \DateTime $date = \NULL);
    /**
     * @param string $entry_id
     *
     * @return ActionScheduler_LogEntry
     */
    abstract public function get_entry($entry_id);
    /**
     * @param string $action_id
     *
     * @return ActionScheduler_LogEntry[]
     */
    abstract public function get_logs($action_id);
    /**
     * @codeCoverageIgnore
     */
    public function init()
    {
    }
    public function hook_stored_action()
    {
    }
    public function unhook_stored_action()
    {
    }
    public function log_stored_action($action_id)
    {
    }
    public function log_canceled_action($action_id)
    {
    }
    public function log_started_action($action_id, $context = '')
    {
    }
    public function log_completed_action($action_id, $action = \NULL, $context = '')
    {
    }
    public function log_failed_action($action_id, \Exception $exception, $context = '')
    {
    }
    public function log_timed_out_action($action_id, $timeout)
    {
    }
    public function log_unexpected_shutdown($action_id, $error)
    {
    }
    public function log_reset_action($action_id)
    {
    }
    public function log_ignored_action($action_id, $context = '')
    {
    }
    /**
     * @param string $action_id
     * @param Exception|NULL $exception The exception which occured when fetching the action. NULL by default for backward compatibility.
     *
     * @return ActionScheduler_LogEntry[]
     */
    public function log_failed_fetch_action($action_id, \Exception $exception = \NULL)
    {
    }
    public function log_failed_schedule_next_instance($action_id, \Exception $exception)
    {
    }
    /**
     * Bulk add cancel action log entries.
     *
     * Implemented here for backward compatibility. Should be implemented in parent loggers
     * for more performant bulk logging.
     *
     * @param array $action_ids List of action ID.
     */
    public function bulk_log_cancel_actions($action_ids)
    {
    }
}