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
}