<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * WC_Admin_Notes_Draw_Attention
 */
class WC_Admin_Notes_Draw_Attention
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-draw-attention';
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Check to see if profiler options match before possibly adding note.
     *
     * @param object $old_value The old option value.
     * @param object $value     The new option value.
     * @param string $option    The name of the option.
     */
    public static function check_onboarding_profile($old_value, $value, $option)
    {
    }
    /**
     * Get the note.
     */
    public static function get_note()
    {
    }
}