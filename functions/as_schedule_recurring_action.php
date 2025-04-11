<?php


/**
 * Schedule a recurring action
 *
 * @param int    $timestamp When the first instance of the job will run.
 * @param int    $interval_in_seconds How long to wait between runs.
 * @param string $hook The hook to trigger.
 * @param array  $args Arguments to pass when the hook triggers.
 * @param string $group The group to assign this job to.
 * @param bool   $unique Whether the action should be unique. It will not be scheduled if another pending or running action has the same hook and group parameters.
 * @param int    $priority Lower values take precedence over higher values. Defaults to 10, with acceptable values falling in the range 0-255.
 *
 * @return int The action ID. Zero if there was an error scheduling the action.
 */
function as_schedule_recurring_action($timestamp, $interval_in_seconds, $hook, $args = array(), $group = '', $unique = \false, $priority = 10)
{
}