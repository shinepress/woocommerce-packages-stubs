<?php

$classmap = [];
$classmap['action_scheduler\migration\actionmigrator'] = __DIR__ . '/classes/Action_Scheduler/Migration/ActionMigrator.php';
$classmap['action_scheduler\migration\batchfetcher'] = __DIR__ . '/classes/Action_Scheduler/Migration/BatchFetcher.php';
$classmap['action_scheduler\migration\config'] = __DIR__ . '/classes/Action_Scheduler/Migration/Config.php';
$classmap['action_scheduler\migration\controller'] = __DIR__ . '/classes/Action_Scheduler/Migration/Controller.php';
$classmap['action_scheduler\migration\dryrun_actionmigrator'] = __DIR__ . '/classes/Action_Scheduler/Migration/DryRun_ActionMigrator.php';
$classmap['action_scheduler\migration\dryrun_logmigrator'] = __DIR__ . '/classes/Action_Scheduler/Migration/DryRun_LogMigrator.php';
$classmap['action_scheduler\migration\logmigrator'] = __DIR__ . '/classes/Action_Scheduler/Migration/LogMigrator.php';
$classmap['action_scheduler\migration\runner'] = __DIR__ . '/classes/Action_Scheduler/Migration/Runner.php';
$classmap['action_scheduler\migration\scheduler'] = __DIR__ . '/classes/Action_Scheduler/Migration/Scheduler.php';
$classmap['actionscheduler'] = __DIR__ . '/classes/ActionScheduler.php';
$classmap['actionscheduler_abstract_listtable'] = __DIR__ . '/classes/ActionScheduler_Abstract_ListTable.php';
$classmap['actionscheduler_abstract_queuerunner'] = __DIR__ . '/classes/ActionScheduler_Abstract_QueueRunner.php';
$classmap['actionscheduler_abstract_queuerunner_deprecated'] = __DIR__ . '/classes/ActionScheduler_Abstract_QueueRunner_Deprecated.php';
$classmap['actionscheduler_abstract_recurringschedule'] = __DIR__ . '/classes/ActionScheduler_Abstract_RecurringSchedule.php';
$classmap['actionscheduler_abstract_schedule'] = __DIR__ . '/classes/ActionScheduler_Abstract_Schedule.php';
$classmap['actionscheduler_abstract_schema'] = __DIR__ . '/classes/ActionScheduler_Abstract_Schema.php';
$classmap['actionscheduler_action'] = __DIR__ . '/classes/ActionScheduler_Action.php';
$classmap['actionscheduler_actionclaim'] = __DIR__ . '/classes/ActionScheduler_ActionClaim.php';
$classmap['actionscheduler_actionfactory'] = __DIR__ . '/classes/ActionScheduler_ActionFactory.php';
$classmap['actionscheduler_adminview'] = __DIR__ . '/classes/ActionScheduler_AdminView.php';
$classmap['actionscheduler_adminview_deprecated'] = __DIR__ . '/classes/ActionScheduler_AdminView_Deprecated.php';
$classmap['actionscheduler_asyncrequest_queuerunner'] = __DIR__ . '/classes/ActionScheduler_AsyncRequest_QueueRunner.php';
$classmap['actionscheduler_canceledaction'] = __DIR__ . '/classes/ActionScheduler_CanceledAction.php';
$classmap['actionscheduler_canceledschedule'] = __DIR__ . '/classes/ActionScheduler_CanceledSchedule.php';
$classmap['actionscheduler_compatibility'] = __DIR__ . '/classes/ActionScheduler_Compatibility.php';
$classmap['actionscheduler_cronschedule'] = __DIR__ . '/classes/ActionScheduler_CronSchedule.php';
$classmap['actionscheduler_datacontroller'] = __DIR__ . '/classes/ActionScheduler_DataController.php';
$classmap['actionscheduler_datetime'] = __DIR__ . '/classes/ActionScheduler_DateTime.php';
$classmap['actionscheduler_dblogger'] = __DIR__ . '/classes/ActionScheduler_DBLogger.php';
$classmap['actionscheduler_dbstore'] = __DIR__ . '/classes/ActionScheduler_DBStore.php';
$classmap['actionscheduler_dbstoremigrator'] = __DIR__ . '/classes/ActionScheduler_DBStoreMigrator.php';
$classmap['actionscheduler_exception'] = __DIR__ . '/classes/ActionScheduler_Exception.php';
$classmap['actionscheduler_fatalerrormonitor'] = __DIR__ . '/classes/ActionScheduler_FatalErrorMonitor.php';
$classmap['actionscheduler_finishedaction'] = __DIR__ . '/classes/ActionScheduler_FinishedAction.php';
$classmap['actionscheduler_hybridstore'] = __DIR__ . '/classes/ActionScheduler_HybridStore.php';
$classmap['actionscheduler_intervalschedule'] = __DIR__ . '/classes/ActionScheduler_IntervalSchedule.php';
$classmap['actionscheduler_invalidactionexception'] = __DIR__ . '/classes/ActionScheduler_InvalidActionException.php';
$classmap['actionscheduler_listtable'] = __DIR__ . '/classes/ActionScheduler_ListTable.php';
$classmap['actionscheduler_lock'] = __DIR__ . '/classes/ActionScheduler_Lock.php';
$classmap['actionscheduler_logentry'] = __DIR__ . '/classes/ActionScheduler_LogEntry.php';
$classmap['actionscheduler_logger'] = __DIR__ . '/classes/ActionScheduler_Logger.php';
$classmap['actionscheduler_loggerschema'] = __DIR__ . '/classes/ActionScheduler_LoggerSchema.php';
$classmap['actionscheduler_nullaction'] = __DIR__ . '/classes/ActionScheduler_NullAction.php';
$classmap['actionscheduler_nulllogentry'] = __DIR__ . '/classes/ActionScheduler_NullLogEntry.php';
$classmap['actionscheduler_nullschedule'] = __DIR__ . '/classes/ActionScheduler_NullSchedule.php';
$classmap['actionscheduler_optionlock'] = __DIR__ . '/classes/ActionScheduler_OptionLock.php';
$classmap['actionscheduler_queuecleaner'] = __DIR__ . '/classes/ActionScheduler_QueueCleaner.php';
$classmap['actionscheduler_queuerunner'] = __DIR__ . '/classes/ActionScheduler_QueueRunner.php';
$classmap['actionscheduler_schedule'] = __DIR__ . '/classes/ActionScheduler_Schedule.php';
$classmap['actionscheduler_schedule_deprecated'] = __DIR__ . '/classes/ActionScheduler_Schedule_Deprecated.php';
$classmap['actionscheduler_simpleschedule'] = __DIR__ . '/classes/ActionScheduler_SimpleSchedule.php';
$classmap['actionscheduler_store'] = __DIR__ . '/classes/ActionScheduler_Store.php';
$classmap['actionscheduler_store_deprecated'] = __DIR__ . '/classes/ActionScheduler_Store_Deprecated.php';
$classmap['actionscheduler_storeschema'] = __DIR__ . '/classes/ActionScheduler_StoreSchema.php';
$classmap['actionscheduler_systeminformation'] = __DIR__ . '/classes/ActionScheduler_SystemInformation.php';
$classmap['actionscheduler_timezonehelper'] = __DIR__ . '/classes/ActionScheduler_TimezoneHelper.php';
$classmap['actionscheduler_versions'] = __DIR__ . '/classes/ActionScheduler_Versions.php';
$classmap['actionscheduler_wcsystemstatus'] = __DIR__ . '/classes/ActionScheduler_wcSystemStatus.php';
$classmap['actionscheduler_wpcommentcleaner'] = __DIR__ . '/classes/ActionScheduler_WPCommentCleaner.php';
$classmap['actionscheduler_wpcommentlogger'] = __DIR__ . '/classes/ActionScheduler_wpCommentLogger.php';
$classmap['actionscheduler_wppoststore'] = __DIR__ . '/classes/ActionScheduler_wpPostStore.php';
$classmap['actionscheduler_wppoststore_poststatusregistrar'] = __DIR__ . '/classes/ActionScheduler_wpPostStore_PostStatusRegistrar.php';
$classmap['actionscheduler_wppoststore_posttyperegistrar'] = __DIR__ . '/classes/ActionScheduler_wpPostStore_PostTypeRegistrar.php';
$classmap['actionscheduler_wppoststore_taxonomyregistrar'] = __DIR__ . '/classes/ActionScheduler_wpPostStore_TaxonomyRegistrar.php';

spl_autoload_register(function(string $classname) use ($classmap): void {
	$classname = strtolower($classname);

	if(isset($classmap[$classname])) {
		require_once $classmap[$classname];
	}
});

require __DIR__ . '/functions/as_enqueue_async_action.php'; // as_enqueue_async_action
require __DIR__ . '/functions/as_get_datetime_object.php'; // as_get_datetime_object
require __DIR__ . '/functions/as_get_scheduled_actions.php'; // as_get_scheduled_actions
require __DIR__ . '/functions/as_has_scheduled_action.php'; // as_has_scheduled_action
require __DIR__ . '/functions/as_next_scheduled_action.php'; // as_next_scheduled_action
require __DIR__ . '/functions/as_schedule_cron_action.php'; // as_schedule_cron_action
require __DIR__ . '/functions/as_schedule_recurring_action.php'; // as_schedule_recurring_action
require __DIR__ . '/functions/as_schedule_single_action.php'; // as_schedule_single_action
require __DIR__ . '/functions/as_unschedule_action.php'; // as_unschedule_action
require __DIR__ . '/functions/as_unschedule_all_actions.php'; // as_unschedule_all_actions
require __DIR__ . '/functions/wc_get_scheduled_actions.php'; // wc_get_scheduled_actions
require __DIR__ . '/functions/wc_next_scheduled_action.php'; // wc_next_scheduled_action
require __DIR__ . '/functions/wc_schedule_cron_action.php'; // wc_schedule_cron_action
require __DIR__ . '/functions/wc_schedule_recurring_action.php'; // wc_schedule_recurring_action
require __DIR__ . '/functions/wc_schedule_single_action.php'; // wc_schedule_single_action
require __DIR__ . '/functions/wc_unschedule_action.php'; // wc_unschedule_action