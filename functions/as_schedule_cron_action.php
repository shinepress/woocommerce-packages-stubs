<?php


/**
 * Schedule an action that recurs on a cron-like schedule.
 *
 * @param int $base_timestamp The first instance of the action will be scheduled
 *        to run at a time calculated after this timestamp matching the cron
 *        expression. This can be used to delay the first instance of the action.
 * @param string $schedule A cron-link schedule string
 * @see http://en.wikipedia.org/wiki/Cron
 *   *    *    *    *    *    *
 *   ┬    ┬    ┬    ┬    ┬    ┬
 *   |    |    |    |    |    |
 *   |    |    |    |    |    + year [optional]
 *   |    |    |    |    +----- day of week (0 - 7) (Sunday=0 or 7)
 *   |    |    |    +---------- month (1 - 12)
 *   |    |    +--------------- day of month (1 - 31)
 *   |    +-------------------- hour (0 - 23)
 *   +------------------------- min (0 - 59)
 * @param string $hook The hook to trigger.
 * @param array $args Arguments to pass when the hook triggers.
 * @param string $group The group to assign this job to.
 *
 * @return int The action ID.
 */
function as_schedule_cron_action($timestamp, $schedule, $hook, $args = array(), $group = '')
{
}