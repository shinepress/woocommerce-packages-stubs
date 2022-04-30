<?php

namespace Automattic\WooCommerce\Admin\Features\WcPayPromotion;

/**
 * WC Pay Promotion engine.
 */
class Init
{
    const EXPLAT_VARIATION_PREFIX = 'woocommerce_wc_pay_promotion_payment_methods_table_';
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Possibly registers the pre install wc pay promoted gateway.
     *
     * @param array $gateways list of gateway classes.
     * @return array list of gateway classes.
     */
    public static function possibly_register_pre_install_wc_pay_promotion_gateway($gateways)
    {
    }
    /**
     * Possibly filters out woocommerce-payments from recommended payment methods.
     *
     * @param array  $specs list of payment methods.
     * @param string $datasource_poller_id id of data source poller.
     * @return array list of payment method.
     */
    public static function possibly_filter_recommended_payment_gateways($specs, $datasource_poller_id)
    {
    }
    /**
     * Checks if promoted gateway can be registered.
     *
     * @return boolean if promoted gateway should be registered.
     */
    public static function can_show_promotion()
    {
    }
    /**
     * By default, new payment gateways are put at the bottom of the list on the admin "Payments" settings screen.
     * For visibility, we want WooCommerce Payments to be at the top of the list.
     *
     * @param array $ordering Existing ordering of the payment gateways.
     *
     * @return array Modified ordering.
     */
    public static function set_gateway_top_of_list($ordering)
    {
    }
    /**
     * Get WC Pay promotion spec.
     */
    public static function get_wc_pay_promotion_spec()
    {
    }
    /**
     * Go through the specs and run them.
     */
    public static function get_promotions()
    {
    }
    /**
     * Delete the specs transient.
     */
    public static function delete_specs_transient()
    {
    }
    /**
     * Get specs or fetch remotely if they don't exist.
     */
    public static function get_specs()
    {
    }
}