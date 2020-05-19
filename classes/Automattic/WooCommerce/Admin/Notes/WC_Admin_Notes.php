<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * Admin Notes class.
 */
class WC_Admin_Notes
{
    /**
     * Hook used for recurring "unsnooze" action.
     */
    const UNSNOOZE_HOOK = 'wc_admin_unsnooze_admin_notes';
    /**
     * Hook appropriate actions.
     */
    public static function init()
    {
    }
    /**
     * Get notes from the database.
     *
     * @param string $context Getting notes for what context. Valid values: view, edit.
     * @param array  $args Arguments to pass to the query( e.g. per_page and page).
     * @return array Array of arrays.
     */
    public static function get_notes($context = 'edit', $args = array())
    {
    }
    /**
     * Get admin note using it's ID
     *
     * @param int $note_id Note ID.
     * @return WC_Admin_Note|bool
     */
    public static function get_note($note_id)
    {
    }
    /**
     * Get the total number of notes
     *
     * @param string $type Comma separated list of note types.
     * @param string $status Comma separated list of statuses.
     * @return int
     */
    public static function get_notes_count($type = array(), $status = array())
    {
    }
    /**
     * Deletes admin notes with a given name.
     *
     * @param string $name Name to search for.
     */
    public static function delete_notes_with_name($name)
    {
    }
    /**
     * Clear note snooze status if the reminder date has been reached.
     */
    public static function unsnooze_notes()
    {
    }
    /**
     * Schedule unsnooze notes event.
     */
    public static function schedule_unsnooze_notes()
    {
    }
    /**
     * Unschedule unsnooze notes event.
     */
    public static function clear_queued_actions()
    {
    }
}