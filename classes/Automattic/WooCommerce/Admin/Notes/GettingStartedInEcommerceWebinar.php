<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * Getting started in ecommmerce note class.
 */
class GettingStartedInEcommerceWebinar
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Onboarding traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\OnboardingTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-getting-started-ecommerce-webinar';
    /**
     * Get the note.
     *
     * @return Note
     */
    public static function get_note()
    {
    }
}