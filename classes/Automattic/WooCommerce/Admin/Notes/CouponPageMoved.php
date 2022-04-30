<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * Coupon_Page_Moved class.
 */
class CouponPageMoved
{
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits, \Automattic\WooCommerce\Admin\Features\CouponsMovedTrait;
    const NOTE_NAME = 'wc-admin-coupon-page-moved';
    /**
     * Initialize our hooks.
     */
    public function init()
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
     * Get the note object for this class.
     *
     * @return Note
     */
    public static function get_note()
    {
    }
    /**
     * Find notes that have not been actioned.
     *
     * @return bool
     */
    protected static function has_unactioned_note()
    {
    }
    /**
     * Whether any notes have been dismissed by the user previously.
     *
     * @return bool
     */
    protected static function has_dismissed_note()
    {
    }
    /**
     * Get the data store object.
     *
     * @return DataStore The data store object.
     */
    protected static function get_data_store()
    {
    }
    /**
     * Safe redirect to the coupon page to force page refresh.
     */
    public function redirect_to_coupons()
    {
    }
    /**
     * Disable legacy coupon menu when installing for the first time.
     */
    public function disable_legacy_menu_for_new_install()
    {
    }
}