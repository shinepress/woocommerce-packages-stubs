<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * WC_Admin_Notes_Order_Milestones
 */
class WC_Admin_Notes_Order_Milestones
{
    /**
     * Name of the "other milestones" note.
     */
    const ORDERS_MILESTONE_NOTE_NAME = 'wc-admin-orders-milestone';
    /**
     * Option key name to store last order milestone.
     */
    const LAST_ORDER_MILESTONE_OPTION_KEY = 'woocommerce_admin_last_orders_milestone';
    /**
     * Hook to process order milestones.
     */
    const PROCESS_ORDERS_MILESTONE_HOOK = 'wc_admin_process_orders_milestone';
    /**
     * Allowed order statuses for calculating milestones.
     *
     * @var array
     */
    protected $allowed_statuses = array('pending', 'processing', 'completed');
    /**
     * Orders count cache.
     *
     * @var int
     */
    protected $orders_count = null;
    /**
     * Further order milestone thresholds.
     *
     * @var array
     */
    protected $milestones = array(1, 10, 100, 250, 500, 1000, 5000, 10000, 500000, 1000000);
    /**
     * Delay hook attachment until after the WC post types have been registered.
     *
     * This is required for retrieving the order count.
     */
    public function __construct()
    {
    }
    /**
     * Hook everything up.
     */
    public function init()
    {
    }
    /**
     * Clear out our hourly milestone hook upon plugin deactivation.
     */
    public function clear_scheduled_event()
    {
    }
    /**
     * Get the total count of orders (in the allowed statuses).
     *
     * @param bool $no_cache Optional. Skip cache.
     * @return int Total orders count.
     */
    public function get_orders_count($no_cache = false)
    {
    }
    /**
     * Backfill the store's current milestone.
     *
     * Used to avoid celebrating milestones that were reached before plugin activation.
     */
    public function backfill_last_milestone()
    {
    }
    /**
     * Get the store's last milestone.
     *
     * @return int Last milestone reached.
     */
    public function get_last_milestone()
    {
    }
    /**
     * Update the last reached milestone.
     *
     * @param int $milestone Last milestone reached.
     */
    public function set_last_milestone($milestone)
    {
    }
    /**
     * Calculate the current orders milestone.
     *
     * Based on the threshold values in $this->milestones.
     *
     * @return int Current orders milestone.
     */
    public function get_current_milestone()
    {
    }
    /**
     * Get the appropriate note title for a given milestone.
     *
     * @param int $milestone Order milestone.
     * @return string Note title for the milestone.
     */
    public function get_note_title_for_milestone($milestone)
    {
    }
    /**
     * Get the appropriate note content for a given milestone.
     *
     * @param int $milestone Order milestone.
     * @return string Note content for the milestone.
     */
    public function get_note_content_for_milestone($milestone)
    {
    }
    /**
     * Get the appropriate note action for a given milestone.
     *
     * @param int $milestone Order milestone.
     * @return array Note actoion (name, label, query) for the milestone.
     */
    public function get_note_action_for_milestone($milestone)
    {
    }
    /**
     * Convenience method to see if the milestone notes are enabled.
     *
     * @return boolean True if milestone notifications are enabled.
     */
    public function are_milestones_enabled()
    {
    }
    /**
     * Add milestone notes for other significant thresholds.
     */
    public function other_milestones()
    {
    }
}