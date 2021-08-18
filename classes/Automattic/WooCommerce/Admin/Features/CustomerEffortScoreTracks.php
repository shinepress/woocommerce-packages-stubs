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
     * Action name for add product categories.
     */
    const ADD_PRODUCT_CATEGORIES_ACTION_NAME = 'add_product_categories';
    /**
     * Action name for add product tags.
     */
    const ADD_PRODUCT_TAGS_ACTION_NAME = 'add_product_tags';
    /*
     * Action name for add product attributes.
     */
    const ADD_PRODUCT_ATTRIBUTES_ACTION_NAME = 'add_product_attributes';
    /**
     * Action name for import products.
     */
    const IMPORT_PRODUCTS_ACTION_NAME = 'import_products';
    /**
     * Action name for search.
     */
    const SEARCH_ACTION_NAME = 'ces_search';
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
     * Returns a generated script for tracking tags added on edit-tags.php page.
     * CES survey is triggered via direct access to wc/customer-effort-score store
     * via wp.data.dispatch method.
     *
     * Due to lack of options to directly hook ourselves into the ajax post request
     * initiated by edit-tags.php page, we infer a successful request by observing
     * an increase of the number of rows in tags table
     *
     * @param string $action Action name for the survey.
     * @param string $label Label for the snackbar.
     *
     * @return string Generated JavaScript to append to page.
     */
    private function get_script_track_edit_php($action, $label)
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
     * Enqueue the CES survey on using search dynamically.
     *
     * @param string $search_area Search area such as "product" or "shop_order".
     * @param string $page_now Value of window.pagenow.
     * @param string $admin_page Value of window.adminpage.
     */
    public function enqueue_ces_survey_for_search($search_area, $page_now, $admin_page)
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
     * Appends a script to footer to trigger CES on adding product categories.
     */
    public function add_script_track_product_categories()
    {
    }
    /**
     * Appends a script to footer to trigger CES on adding product tags.
     */
    public function add_script_track_product_tags()
    {
    }
    /**
     * Maybe enqueue the CES survey on product import, if step is done.
     */
    public function run_on_product_import()
    {
    }
    /**
     * Enqueue the CES survey trigger for setting changes.
     */
    public function run_on_update_options()
    {
    }
    /**
     * Enqueue the CES survey on adding new product attributes.
     */
    public function run_on_add_product_attributes()
    {
    }
    /**
     * Determine on initiating CES survey on searching for product or orders.
     */
    public function run_on_load_edit_php()
    {
    }
}