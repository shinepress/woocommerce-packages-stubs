<?php


/**
 * Check if there is a scheduled action in the queue but more efficiently than as_next_scheduled_action().
 *
 * It's recommended to use this function when you need to know whether a specific action is currently scheduled
 * (pending or in-progress).
 *
 * @since x.x.x
 *
 * @param string $hook  The hook of the action.
 * @param array  $args  Args that have been passed to the action. Null will matches any args.
 * @param string $group The group the job is assigned to.
 *
 * @return bool True if a matching action is pending or in-progress, false otherwise.
 */
function as_has_scheduled_action($hook, $args = \null, $group = '')
{
}