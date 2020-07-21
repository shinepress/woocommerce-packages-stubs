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
     * @param string|array $names Name(s) to search for.
     */
    public static function delete_notes_with_name($names)
    {
    }
    /**
     * Update a note.
     *
     * @param WC_Admin_Note $note The note that will be updated.
     * @param array         $requested_updates a list of requested updates.
     */
    public static function update_note($note, $requested_updates)
    {
    }
    /**
     * Soft delete of a note.
     *
     * @param WC_Admin_Note $note The note that will be deleted.
     */
    public static function delete_note($note)
    {
    }
    /**
     * Soft delete of all the admin notes. Returns the deleted items.
     *
     * @return array Array of notes.
     */
    public static function delete_all_notes()
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
    /**
     * Delete marketing notes if marketing has been opted out.
     *
     * @param string $old_value Old value.
     * @param string $value New value.
     */
    public static function possibly_delete_marketing_notes($old_value, $value)
    {
    }
}