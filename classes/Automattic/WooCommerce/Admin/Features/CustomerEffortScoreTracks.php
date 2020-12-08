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
     * Action name for product add/publish.
     */
    const PRODUCT_ADD_PUBLISH_ACTION_NAME = 'product_add_publish';
    /**
     * Action name for product update.
     */
    const PRODUCT_UPDATE_ACTION_NAME = 'product_update';
    /**
     * Constructor. Sets up filters to hook into WooCommerce.
     */
    public function __construct()
    {
    }
    /**
     * Hook into the post status lifecycle, only interested in products that
     * are either being added or edited.
     *
     * @param string $new_status The new status.
     * @param string $old_status The old status.
     * @param Post   $post       The post.
     */
    public function run_on_transition_post_status($new_status, $old_status, $post)
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
     * @param object $item The item to enqueue.
     */
    private function enqueue_to_ces_tracks($item)
    {
    }
    /**
     * Enqueue the CES survey trigger for a new product.
     */
    private function enqueue_ces_survey_for_new_product()
    {
    }
    /**
     * Enqueue the CES survey trigger for an existing product.
     */
    private function enqueue_ces_survey_for_edited_product()
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
}