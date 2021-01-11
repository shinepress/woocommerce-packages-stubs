<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * Draw_Attention
 */
class DrawAttention
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
     *
     * @return Note
     */
    public static function get_note()
    {
    }
}