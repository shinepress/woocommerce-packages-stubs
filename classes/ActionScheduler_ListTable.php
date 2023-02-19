<?php


/**
 * Implements the admin view of the actions.
 * @codeCoverageIgnore
 */
class ActionScheduler_ListTable extends \ActionScheduler_Abstract_ListTable
{
    /**
     * The package name.
     *
     * @var string
     */
    protected $package = 'action-scheduler';
    /**
     * Columns to show (name => label).
     *
     * @var array
     */
    protected $columns = array();
    /**
     * Actions (name => label).
     *
     * @var array
     */
    protected $row_actions = array();
    /**
     * The active data stores
     *
     * @var ActionScheduler_Store
     */
    protected $store;
    /**
     * A logger to use for getting action logs to display
     *
     * @var ActionScheduler_Logger
     */
    protected $logger;
    /**
     * A ActionScheduler_QueueRunner runner instance (or child class)
     *
     * @var ActionScheduler_QueueRunner
     */
    protected $runner;
    /**
     * Bulk actions. The key of the array is the method name of the implementation:
     *
     *     bulk_<key>(array $ids, string $sql_in).
     *
     * See the comments in the parent class for further details
     *
     * @var array
     */
    protected $bulk_actions = array();
    /**
     * Flag variable to render our notifications, if any, once.
     *
     * @var bool
     */
    protected static $did_notification = \false;
    /**
     * Sets the current data store object into `store->action` and initialises the object.
     *
     * @param ActionScheduler_Store $store
     * @param ActionScheduler_Logger $logger
     * @param ActionScheduler_QueueRunner $runner
     */
    public function __construct(\ActionScheduler_Store $store, \ActionScheduler_Logger $logger, \ActionScheduler_QueueRunner $runner)
    {
    }
    /**
     * Handles setting the items_per_page option for this screen.
     *
     * @param mixed  $status Default false (to skip saving the current option).
     * @param string $option Screen option name.
     * @param int    $value  Screen option value.
     * @return int
     */
    public function set_items_per_page_option($status, $option, $value)
    {
    }
    /**
     * Returns the recurrence of an action or 'Non-repeating'. The output is human readable.
     *
     * @param ActionScheduler_Action $action
     *
     * @return string
     */
    protected function get_recurrence($action)
    {
    }
    /**
     * Serializes the argument of an action to render it in a human friendly format.
     *
     * @param array $row The array representation of the current row of the table
     *
     * @return string
     */
    public function column_args(array $row)
    {
    }
    /**
     * Prints the logs entries inline. We do so to avoid loading Javascript and other hacks to show it in a modal.
     *
     * @param array $row Action array.
     * @return string
     */
    public function column_log_entries(array $row)
    {
    }
    /**
     * Prints the logs entries inline. We do so to avoid loading Javascript and other hacks to show it in a modal.
     *
     * @param ActionScheduler_LogEntry $log_entry
     * @param DateTimezone $timezone
     * @return string
     */
    protected function get_log_entry_html(\ActionScheduler_LogEntry $log_entry, \DateTimezone $timezone)
    {
    }
    /**
     * Only display row actions for pending actions.
     *
     * @param array  $row         Row to render
     * @param string $column_name Current row
     *
     * @return string
     */
    protected function maybe_render_actions($row, $column_name)
    {
    }
    /**
     * Renders admin notifications
     *
     * Notifications:
     *  1. When the maximum number of tasks are being executed simultaneously.
     *  2. Notifications when a task is manually executed.
     *  3. Tables are missing.
     */
    public function display_admin_notices()
    {
    }
    /**
     * Prints the scheduled date in a human friendly format.
     *
     * @param array $row The array representation of the current row of the table
     *
     * @return string
     */
    public function column_schedule($row)
    {
    }
    /**
     * Get the scheduled date in a human friendly format.
     *
     * @param ActionScheduler_Schedule $schedule
     * @return string
     */
    protected function get_schedule_display_string(\ActionScheduler_Schedule $schedule)
    {
    }
    /**
     * Bulk delete
     *
     * Deletes actions based on their ID. This is the handler for the bulk delete. It assumes the data
     * properly validated by the callee and it will delete the actions without any extra validation.
     *
     * @param array $ids
     * @param string $ids_sql Inherited and unused
     */
    protected function bulk_delete(array $ids, $ids_sql)
    {
    }
    /**
     * Implements the logic behind running an action. ActionScheduler_Abstract_ListTable validates the request and their
     * parameters are valid.
     *
     * @param int $action_id
     */
    protected function row_action_cancel($action_id)
    {
    }
    /**
     * Implements the logic behind running an action. ActionScheduler_Abstract_ListTable validates the request and their
     * parameters are valid.
     *
     * @param int $action_id
     */
    protected function row_action_run($action_id)
    {
    }
    /**
     * Force the data store schema updates.
     */
    protected function recreate_tables()
    {
    }
    /**
     * Implements the logic behind processing an action once an action link is clicked on the list table.
     *
     * @param int $action_id
     * @param string $row_action_type The type of action to perform on the action.
     */
    protected function process_row_action($action_id, $row_action_type)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function prepare_items()
    {
    }
    /**
     * Prints the available statuses so the user can click to filter.
     */
    protected function display_filter_by_status()
    {
    }
    /**
     * Get the text to display in the search box on the list table.
     */
    protected function get_search_box_button_text()
    {
    }
    /**
     * {@inheritDoc}
     */
    protected function get_per_page_option_name()
    {
    }
}