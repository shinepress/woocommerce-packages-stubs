<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * Class AddingAndManangingProducts
 *
 * @package Automattic\WooCommerce\Admin\Notes
 */
class LearnMoreAboutVariableProducts
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-learn-more-about-variable-products';
    /**
     * Add transition_post_status action.
     *
     * LearnMoreAboutVariableProducts constructor.
     */
    public function __construct()
    {
    }
    /**
     * Maybe attempt to add a new note if product is published.
     *
     * @param string $new_status new status.
     * @param string $old_status old status.
     * @param object $post post object.
     */
    public function maybe_add_new_note($new_status, $old_status, $post)
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