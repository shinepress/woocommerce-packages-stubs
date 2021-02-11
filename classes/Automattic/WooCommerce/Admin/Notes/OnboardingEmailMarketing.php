<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * Onboarding_Email_Marketing
 */
class OnboardingEmailMarketing
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-onboarding-email-marketing';
    /**
     * Get the note.
     *
     * @return Note
     */
    public static function get_note()
    {
    }
}