<?php

namespace Automattic\WooCommerce\Admin\Features;

/**
 * Triggers customer effort score on several different actions.
 */
class CustomerEffortScoreTracks
{
    /**
     * Option name for the CES Tracks queue.
     */
    const CES_TRACKS_QUEUE_OPTION_NAME = 'woocommerce_ces_tracks_queue';
    /**
     * Option name for the clear CES Tracks queue for page.
     */
    const CLEAR_CES_TRACKS_QUEUE_FOR_PAGE_OPTION_NAME = 'woocommerce_clear_ces_tracks_queue_for_page';
    /**
     * Option name for the set of actions that have been shown.
     */
    const SHOWN_FOR_ACTIONS_OPTION_NAME = 'woocommerce_ces_shown_for_actions';
    /**
     * Action name for settings change.
     */
    const SETTINGS_CHANGE_ACTION_NAME = 'settings_change';
    /**
     * Label for the snackbar that appears when a user submits the survey.
     *
     * @var string
     */
    private $onsubmit_label;
    /**
     * Constructor. Sets up filters to hook into WooCommerce.
     */
    public function __construct()
    {
    }
    /**
     * Add actions that require woocommerce_allow_tracking.
     */
    private function enable_survey_enqueing_if_tracking_is_enabled()
    {
    }
    /**
     * Get the current published product count.
     *
     * @return integer The current published product count.
     */
    private function get_product_count()
    {
    }
    /**
     * Get the current shop order count.
     *
     * @return integer The current shop order count.
     */
    private function get_shop_order_count()
    {
    }
    /**
     * Return whether the action has already been shown.
     *
     * @param string $action The action to check.
     *
     * @return bool Whether the action has already been shown.
     */
    private function has_been_shown($action)
    {
    }
    /**
     * Enqueue the item to the CES tracks queue.
     *
     * @param array $item The item to enqueue.
     */
    private function enqueue_to_ces_tracks($item)
    {
    }
    /**
     * Maybe clear the CES tracks queue, executed on every page load. If the
     * clear option is set it clears the queue. In practice, this executes a
     * page load after the queued CES tracks are displayed on the client, which
     * sets the clear option.
     */
    public function maybe_clear_ces_tracks_queue()
    {
    }
    /**
     * Enqueue the CES survey trigger for setting changes.
     */
    public function run_on_update_options()
    {
    }
}