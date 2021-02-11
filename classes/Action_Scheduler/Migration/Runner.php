<?php

namespace Action_Scheduler\Migration;

/**
 * Class Runner
 *
 * @package Action_Scheduler\Migration
 *
 * @since 3.0.0
 *
 * @codeCoverageIgnore
 */
class Runner
{
    /** @var ActionScheduler_Store */
    private $source_store;
    /** @var ActionScheduler_Store */
    private $destination_store;
    /** @var ActionScheduler_Logger */
    private $source_logger;
    /** @var ActionScheduler_Logger */
    private $destination_logger;
    /** @var BatchFetcher */
    private $batch_fetcher;
    /** @var ActionMigrator */
    private $action_migrator;
    /** @var LogMigrator */
    private $log_migrator;
    /** @var ProgressBar */
    private $progress_bar;
    /**
     * Runner constructor.
     *
     * @param Config $config Migration configuration object.
     */
    public function __construct(\Action_Scheduler\Migration\Config $config)
    {
    }
    /**
     * Run migration batch.
     *
     * @param int $batch_size Optional batch size. Default 10.
     *
     * @return int Size of batch processed.
     */
    public function run($batch_size = 10)
    {
    }
    /**
     * Migration a batch of actions.
     *
     * @param array $action_ids List of action IDs to migrate.
     */
    public function migrate_actions(array $action_ids)
    {
    }
    /**
     * Initialize destination store and logger.
     */
    public function init_destination()
    {
    }
}