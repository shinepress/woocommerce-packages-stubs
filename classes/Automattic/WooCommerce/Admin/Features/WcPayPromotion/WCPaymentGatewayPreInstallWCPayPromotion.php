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
}