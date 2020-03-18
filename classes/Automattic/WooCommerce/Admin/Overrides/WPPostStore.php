<?php

namespace Automattic\WooCommerce\Admin\Overrides;

/**
 * Class WC Admin Action Scheduler Store.
 */
class WPPostStore extends \ActionScheduler_wpPostStore
{
    /**
     * Action scheduler job priority (lower numbers are claimed first).
     */
    const JOB_PRIORITY = 30;
    /**
     * Create the post array for storing actions as WP posts.
     *
     * For WC Admin actions, force a lower action claim
     * priority by setting a high value for `menu_order`.
     *
     * @param \ActionScheduler_Action $action Action.
     * @param \DateTime               $scheduled_date Action schedule.
     * @return array Post data array for usage in wp_insert_post().
     */
    protected function create_post_array(\ActionScheduler_Action $action, \DateTime $scheduled_date = null)
    {
    }
    /**
     * Forcefully delete all pending WC Admin scheduled actions.
     * Directly trashes items from in database for performance.
     *
     * @param array $action_types Array of actions to delete.
     */
    public function clear_pending_wcadmin_actions($action_types)
    {
    }
    /**
     * Cancel all actions by group.
     *
     * @param string $group Group name.
     */
    public function cancel_actions_by_group($group)
    {
    }
}