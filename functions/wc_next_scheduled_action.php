<?php


/**
 * Get next scheduled action.
 *
 * @param string $hook Action's hook.
 * @param array  $args Action's args.
 * @param string $group Action's group.
 *
 * @deprecated 2.1.0
 *
 * @return int|bool The timestamp for the next occurrence, or false if nothing was found
 */
function wc_next_scheduled_action($hook, $args = \null, $group = '')
{
}