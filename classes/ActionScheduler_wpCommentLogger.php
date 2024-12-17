<?php


/**
 * Class ActionScheduler_wpCommentLogger
 */
class ActionScheduler_wpCommentLogger extends \ActionScheduler_Logger
{
    const AGENT = 'ActionScheduler';
    const TYPE = 'action_log';
    /**
     * Create log entry.
     *
     * @param string   $action_id Action ID.
     * @param string   $message   Action log's message.
     * @param DateTime $date      Action log's timestamp.
     *
     * @return string The log entry ID
     */
    public function log($action_id, $message, \DateTime $date = \NULL)
    {
    }
    /**
     * Create comment.
     *
     * @param int      $action_id Action ID.
     * @param string   $message Action log's message.
     * @param DateTime $date Action log entry's timestamp.
     */
    protected function create_wp_comment($action_id, $message, \DateTime $date)
    {
    }
    /**
     * Get single log entry for action.
     *
     * @param string $entry_id Entry ID.
     *
     * @return ActionScheduler_LogEntry
     */
    public function get_entry($entry_id)
    {
    }
    /**
     * Get action's logs.
     *
     * @param string $action_id Action ID.
     *
     * @return ActionScheduler_LogEntry[]
     */
    public function get_logs($action_id)
    {
    }
    /**
     * Get comment.
     *
     * @param int $comment_id Comment ID.
     */
    protected function get_comment($comment_id)
    {
    }
    /**
     * Filter comment queries.
     *
     * @param WP_Comment_Query $query Comment query object.
     */
    public function filter_comment_queries($query)
    {
    }
    /**
     * Filter comment queries.
     *
     * @param array            $clauses Query's clauses.
     * @param WP_Comment_Query $query Query object.
     *
     * @return array
     */
    public function filter_comment_query_clauses($clauses, $query)
    {
    }
    /**
     * Make sure Action Scheduler logs are excluded from comment feeds, which use WP_Query, not
     * the WP_Comment_Query class handled by @see self::filter_comment_queries().
     *
     * @param string   $where Query's `where` clause.
     * @param WP_Query $query Query object.
     *
     * @return string
     */
    public function filter_comment_feed($where, $query)
    {
    }
    /**
     * Return a SQL clause to exclude Action Scheduler comments.
     *
     * @return string
     */
    protected function get_where_clause()
    {
    }
    /**
     * Remove action log entries from wp_count_comments()
     *
     * @param array $stats   Comment count.
     * @param int   $post_id Post ID.
     *
     * @return object
     */
    public function filter_comment_count($stats, $post_id)
    {
    }
    /**
     * Retrieve the comment counts from our cache, or the database if the cached version isn't set.
     *
     * @return object
     */
    protected function get_comment_count()
    {
    }
    /**
     * Delete comment count cache whenever there is new comment or the status of a comment changes. Cache
     * will be regenerated next time ActionScheduler_wpCommentLogger::filter_comment_count() is called.
     */
    public function delete_comment_count_cache()
    {
    }
    /**
     * Initialize.
     *
     * @codeCoverageIgnore
     */
    public function init()
    {
    }
    /**
     * Defer comment counting.
     */
    public function disable_comment_counting()
    {
    }
    /**
     * Enable comment counting.
     */
    public function enable_comment_counting()
    {
    }
}