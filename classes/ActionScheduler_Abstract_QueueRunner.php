<?php


/**
 * Abstract class with common Queue Cleaner functionality.
 */
abstract class ActionScheduler_Abstract_QueueRunner extends \ActionScheduler_Abstract_QueueRunner_Deprecated
{
    /** @var ActionScheduler_QueueCleaner */
    protected $cleaner;
    /** @var ActionScheduler_FatalErrorMonitor */
    protected $monitor;
    /** @var ActionScheduler_Store */
    protected $store;
    /**
     * The created time.
     *
     * Represents when the queue runner was constructed and used when calculating how long a PHP request has been running.
     * For this reason it should be as close as possible to the PHP request start time.
     *
     * @var int
     */
    private $created_time;
    /**
     * ActionScheduler_Abstract_QueueRunner constructor.
     *
     * @param ActionScheduler_Store             $store
     * @param ActionScheduler_FatalErrorMonitor $monitor
     * @param ActionScheduler_QueueCleaner      $cleaner
     */
    public function __construct(\ActionScheduler_Store $store = \null, \ActionScheduler_FatalErrorMonitor $monitor = \null, \ActionScheduler_QueueCleaner $cleaner = \null)
    {
    }
    /**
     * Process an individual action.
     *
     * @param int $action_id The action ID to process.
     * @param string $context Optional identifer for the context in which this action is being processed, e.g. 'WP CLI' or 'WP Cron'
     *        Generally, this should be capitalised and not localised as it's a proper noun.
     */
    public function process_action($action_id, $context = '')
    {
    }
    /**
     * Schedule the next instance of the action if necessary.
     *
     * @param ActionScheduler_Action $action
     * @param int $action_id
     */
    protected function schedule_next_instance(\ActionScheduler_Action $action, $action_id)
    {
    }
    /**
     * Determine if the specified recurring action has been consistently failing.
     *
     * @param ActionScheduler_Action $action    The recurring action to be rescheduled.
     * @param int                    $action_id The ID of the recurring action.
     *
     * @return bool
     */
    private function recurring_action_is_consistently_failing(\ActionScheduler_Action $action, $action_id)
    {
    }
    /**
     * Run the queue cleaner.
     *
     * @author Jeremy Pry
     */
    protected function run_cleanup()
    {
    }
    /**
     * Get the number of concurrent batches a runner allows.
     *
     * @return int
     */
    public function get_allowed_concurrent_batches()
    {
    }
    /**
     * Check if the number of allowed concurrent batches is met or exceeded.
     *
     * @return bool
     */
    public function has_maximum_concurrent_batches()
    {
    }
    /**
     * Get the maximum number of seconds a batch can run for.
     *
     * @return int The number of seconds.
     */
    protected function get_time_limit()
    {
    }
    /**
     * Get the number of seconds the process has been running.
     *
     * @return int The number of seconds.
     */
    protected function get_execution_time()
    {
    }
    /**
     * Check if the host's max execution time is (likely) to be exceeded if processing more actions.
     *
     * @param int $processed_actions The number of actions processed so far - used to determine the likelihood of exceeding the time limit if processing another action
     * @return bool
     */
    protected function time_likely_to_be_exceeded($processed_actions)
    {
    }
    /**
     * Get memory limit
     *
     * Based on WP_Background_Process::get_memory_limit()
     *
     * @return int
     */
    protected function get_memory_limit()
    {
    }
    /**
     * Memory exceeded
     *
     * Ensures the batch process never exceeds 90% of the maximum WordPress memory.
     *
     * Based on WP_Background_Process::memory_exceeded()
     *
     * @return bool
     */
    protected function memory_exceeded()
    {
    }
    /**
     * See if the batch limits have been exceeded, which is when memory usage is almost at
     * the maximum limit, or the time to process more actions will exceed the max time limit.
     *
     * Based on WC_Background_Process::batch_limits_exceeded()
     *
     * @param int $processed_actions The number of actions processed so far - used to determine the likelihood of exceeding the time limit if processing another action
     * @return bool
     */
    protected function batch_limits_exceeded($processed_actions)
    {
    }
    /**
     * Process actions in the queue.
     *
     * @author Jeremy Pry
     * @param string $context Optional identifer for the context in which this action is being processed, e.g. 'WP CLI' or 'WP Cron'
     *        Generally, this should be capitalised and not localised as it's a proper noun.
     * @return int The number of actions processed.
     */
    abstract public function run($context = '');
}