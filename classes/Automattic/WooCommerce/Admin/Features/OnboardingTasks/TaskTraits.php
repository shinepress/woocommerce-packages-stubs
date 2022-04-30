<?php

namespace Automattic\WooCommerce\Admin\Features\OnboardingTasks;

/**
 * TaskTraits class.
 */
trait TaskTraits
{
    /**
     * Prefix event for backwards compatibility with tracks event naming.
     *
     * @param string $event_name Event name.
     * @return string
     */
    public function prefix_event($event_name)
    {
    }
    /**
     * Record a tracks event with the prefixed event name.
     *
     * @param string $event_name Event name.
     * @param array  $args Array of tracks arguments.
     * @return string Prefixed event name.
     */
    public function record_tracks_event($event_name, $args = array())
    {
    }
    /**
     * Get the task list ID.
     *
     * @return string
     */
    public function get_list_id()
    {
    }
}