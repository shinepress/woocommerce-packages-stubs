<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * WC_Admin_Notes_Test_Checkout
 */
class WC_Admin_Notes_Test_Checkout
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-test-checkout';
    const TASK_LIST_PAYMENTS = 'woocommerce_task_list_payments';
    const TASK_LIST_TRACKED_TASKS = 'woocommerce_task_list_tracked_completed_tasks';
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Get the note.
     */
    public static function get_note()
    {
    }
}