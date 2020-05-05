<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * WC_Admin_Notes_Onboarding_Profiler.
 */
class WC_Admin_Notes_Onboarding_Profiler
{
    const NOTE_NAME = 'wc-admin-onboarding-profiler-reminder';
    /**
     * Attach hooks.
     */
    public function __construct()
    {
    }
    /**
     * Creates a note to remind store owners to complete the profiler.
     */
    public static function add_reminder()
    {
    }
    /**
     * Updates the note status when the profiler is completed.
     *
     * @param mixed $old_value Old value.
     * @param mixed $new_value New value.
     */
    public static function update_status_on_complete($old_value, $new_value)
    {
    }
}