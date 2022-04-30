<?php

namespace Automattic\WooCommerce\Admin\Features;

/**
 * Class WCPayWelcomePage
 *
 * @package Automattic\WooCommerce\Admin\Features
 */
class WcPayWelcomePage
{
    const EXPERIMENT_NAME_BASE = 'woocommerce_payments_menu_promo_nz_ie_:yyyy_:mm';
    /**
     * WCPayWelcomePage constructor.
     */
    public function __construct()
    {
    }
    /**
     * Registers the WooCommerce Payments welcome page.
     */
    public function register_payments_welcome_page()
    {
    }
    /**
     * Checks if user is in the experiment.
     *
     * @return bool Whether the user is in the treatment group.
     */
    private function should_add_the_menu()
    {
    }
}