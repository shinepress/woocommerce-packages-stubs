<?php

namespace Automattic\WooCommerce\Blocks\Payments;

/**
 *  The Api class provides an interface to payment method registration.
 *
 * @since 2.6.0
 */
class Api
{
    /**
     * Reference to the PaymentMethodRegistry instance.
     *
     * @var PaymentMethodRegistry
     */
    private $payment_method_registry;
    /**
     * Reference to the AssetDataRegistry instance.
     *
     * @var AssetDataRegistry
     */
    private $asset_registry;
    /**
     * Constructor
     *
     * @param PaymentMethodRegistry $payment_method_registry An instance of Payment Method Registry.
     * @param AssetDataRegistry     $asset_registry  Used for registering data to pass along to the request.
     */
    public function __construct(\Automattic\WooCommerce\Blocks\Payments\PaymentMethodRegistry $payment_method_registry, \Automattic\WooCommerce\Blocks\Assets\AssetDataRegistry $asset_registry)
    {
    }
    /**
     * Initialize class features.
     */
    protected function init()
    {
    }
    /**
     * Add payment method script handles as script dependencies.
     *
     * @param array  $dependencies Array of script dependencies.
     * @param string $handle Script handle.
     * @return array
     */
    public function add_payment_method_script_dependencies($dependencies, $handle)
    {
    }
    /**
     * Add payment method data to Asset Registry.
     */
    public function add_payment_method_script_data()
    {
    }
    /**
     * Register payment method integrations bundled with blocks.
     *
     * @param PaymentMethodRegistry $payment_method_registry Payment method registry instance.
     */
    public function register_payment_method_integrations(\Automattic\WooCommerce\Blocks\Payments\PaymentMethodRegistry $payment_method_registry)
    {
    }
    /**
     * Attempt to process a payment for the checkout API if no payment methods support the
     * woocommerce_rest_checkout_process_payment_with_context action.
     *
     * @param PaymentContext $context Holds context for the payment.
     * @param PaymentResult  $result  Result of the payment.
     */
    public function process_legacy_payment(\Automattic\WooCommerce\Blocks\Payments\PaymentContext $context, \Automattic\WooCommerce\Blocks\Payments\PaymentResult &$result)
    {
    }
}