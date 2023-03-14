<?php


/**
 * Schedule an action to run one time
 *
 * @param int    $timestamp When the job will run.
 * @param string $hook The hook to trigger.
 * @param array  $args Arguments to pass when the hook triggers.
 * @param string $group The group to assign this job to.
 * @param bool   $unique Whether the action should be unique.
 *
 * @return int The action ID.
 */
function as_schedule_single_action($timestamp, $hook, $args = array(), $group = '', $unique = \false)
{
}