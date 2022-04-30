<?php


/**
 * Check if there is an existing action in the queue with a given hook, args and group combination.
 *
 * An action in the queue could be pending, in-progress or async. If the is pending for a time in
 * future, its scheduled date will be returned as a timestamp. If it is currently being run, or an
 * async action sitting in the queue waiting to be processed, in which case boolean true will be
 * returned. Or there may be no async, in-progress or pending action for this hook, in which case,
 * boolean false will be the return value.
 *
 * @param string $hook
 * @param array $args
 * @param string $group
 *
 * @return int|bool The timestamp for the next occurrence of a pending scheduled action, true for an async or in-progress action or false if there is no matching action.
 */
function as_next_scheduled_action($hook, $args = \null, $group = '')
{
}