<?php


/**
 * Class ActionScheduler_StoreSchema
 *
 * @codeCoverageIgnore
 *
 * Creates custom tables for storing scheduled actions
 */
class ActionScheduler_StoreSchema extends \ActionScheduler_Abstract_Schema
{
    const ACTIONS_TABLE = 'actionscheduler_actions';
    const CLAIMS_TABLE = 'actionscheduler_claims';
    const GROUPS_TABLE = 'actionscheduler_groups';
    /**
     * @var int Increment this value to trigger a schema update.
     */
    protected $schema_version = 3;
    public function __construct()
    {
    }
    protected function get_table_definition($table)
    {
    }
}