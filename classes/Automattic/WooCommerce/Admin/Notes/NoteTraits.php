<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * NoteTraits class.
 */
trait NoteTraits
{
    /**
     * Test how long WooCommerce Admin has been active.
     *
     * @param int $seconds Time in seconds to check.
     * @return bool Whether or not WooCommerce admin has been active for $seconds.
     */
    public static function wc_admin_active_for($seconds)
    {
    }
    /**
     * Check if the note has been previously added.
     */
    public static function note_exists()
    {
    }
    /**
     * Checks if a note can and should be added.
     *
     * @return bool
     */
    public static function can_be_added()
    {
    }
    /**
     * Add the note if it passes predefined conditions.
     */
    public static function possibly_add_note()
    {
    }
    /**
     * Alias this method for backwards compatibility.
     */
    public static function add_note()
    {
    }
}