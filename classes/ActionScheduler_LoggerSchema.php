<?php


/**
 * Class ActionScheduler_LoggerSchema
 *
 * @codeCoverageIgnore
 *
 * Creates a custom table for storing action logs
 */
class ActionScheduler_LoggerSchema extends \ActionScheduler_Abstract_Schema
{
    const LOG_TABLE = 'actionscheduler_logs';
    /**
     * @var int Increment this value to trigger a schema update.
     */
    protected $schema_version = 2;
    public function __construct()
    {
    }
    protected function get_table_definition($table)
    {
    }
}