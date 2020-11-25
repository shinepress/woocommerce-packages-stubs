<?php


/**
 * General API functions for scheduling actions
 */
/**
 * Enqueue an action to run one time, as soon as possible
 *
 * @param string $hook The hook to trigger.
 * @param array  $args Arguments to pass when the hook triggers.
 * @param string $group The group to assign this job to.
 * @return int The action ID.
 */
function as_enqueue_async_action($hook, $args = array(), $group = '')
{
}