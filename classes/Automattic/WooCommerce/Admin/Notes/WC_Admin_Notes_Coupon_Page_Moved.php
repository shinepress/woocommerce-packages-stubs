<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * WC_Admin_Notes_Coupon_Page_Moved class.
 */
class WC_Admin_Notes_Coupon_Page_Moved
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
     * @return WC_Admin_Note
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
}