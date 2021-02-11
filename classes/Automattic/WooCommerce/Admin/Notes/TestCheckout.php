<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * Test_Checkout
 */
class TestCheckout
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-test-checkout';
    /**
     * Completed tasks option name.
     */
    const TASK_LIST_TRACKED_TASKS = 'woocommerce_task_list_tracked_completed_tasks';
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Get the note.
     *
     * @return Note|null
     */
    public static function get_note()
    {
    }
}