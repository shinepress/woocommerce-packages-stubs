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
     * Get the note.
     *
     * @return Note
     */
    public static function get_note()
    {
    }
}