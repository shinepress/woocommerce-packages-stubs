<?php

namespace Automattic\WooCommerce\Admin\Features\WcPayPromotion;

/**
 * A Psuedo WCPay gateway class.
 *
 * @extends WC_Payment_Gateway
 */
class WCPaymentGatewayPreInstallWCPayPromotion extends \WC_Payment_Gateway
{
    const GATEWAY_ID = 'pre_install_woocommerce_payments_promotion';
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Initialise Gateway Settings Form Fields.
     */
    public function init_form_fields()
    {
    }
    /**
     * Check if the promotional gateaway has been dismissed.
     *
     * @return bool
     */
    public static function is_dismissed()
    {
    }
}