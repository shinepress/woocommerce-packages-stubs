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
    const DEFAULT_DATE = '0000-00-00 00:00:00';
    /**
     * @var int Increment this value to trigger a schema update.
     */
    protected $schema_version = 7;
    public function __construct()
    {
    }
    /**
     * Performs additional setup work required to support this schema.
     */
    public function init()
    {
    }
    protected function get_table_definition($table)
    {
    }
    /**
     * Update the actions table schema, allowing datetime fields to be NULL.
     *
     * This is needed because the NOT NULL constraint causes a conflict with some versions of MySQL
     * configured with sql_mode=NO_ZERO_DATE, which can for instance lead to tables not being created.
     *
     * Most other schema updates happen via ActionScheduler_Abstract_Schema::update_table(), however
     * that method relies on dbDelta() and this change is not possible when using that function.
     *
     * @param string $table Name of table being updated.
     * @param string $db_version The existing schema version of the table.
     */
    public function update_schema_5_0($table, $db_version)
    {
    }
}