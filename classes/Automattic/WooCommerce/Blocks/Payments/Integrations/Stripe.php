<?php

namespace Automattic\WooCommerce\Blocks\Payments\Integrations;

/**
 * Stripe payment method integration
 *
 * Temporary integration of the stripe payment method for the new cart and
 * checkout blocks. Once the api is demonstrated to be stable, this integration
 * will be moved to the Stripe extension
 *
 * @since 2.6.0
 */
final class Stripe extends \Automattic\WooCommerce\Blocks\Payments\Integrations\AbstractPaymentMethodType
{
    /**
     * Payment method name defined by payment methods extending this class.
     *
     * @var string
     */
    protected $name = 'stripe';
    /**
     * An instance of the Asset Api
     *
     * @var Api
     */
    private $asset_api;
    /**
     * Constructor
     *
     * @param Api $asset_api An instance of Api.
     */
    public function __construct(\Automattic\WooCommerce\Blocks\Assets\Api $asset_api)
    {
    }
    /**
     * Initializes the payment method type.
     */
    public function initialize()
    {
    }
    /**
     * Returns if this payment method should be active. If false, the scripts will not be enqueued.
     *
     * @return boolean
     */
    public function is_active()
    {
    }
    /**
     * Returns an array of scripts/handles to be registered for this payment method.
     *
     * @return array
     */
    public function get_payment_method_script_handles()
    {
    }
    /**
     * Returns an array of key=>value pairs of data made available to the payment methods script.
     *
     * @return array
     */
    public function get_payment_method_data()
    {
    }
    /**
     * Determine if store allows cards to be saved during checkout.
     *
     * @return bool True if merchant allows shopper to save card (payment method) during checkout).
     */
    private function get_allow_saved_cards()
    {
    }
    /**
     * Returns the label to use accompanying the total in the stripe statement.
     *
     * @return string Statement descriptor.
     */
    private function get_total_label()
    {
    }
    /**
     * Returns the publishable api key for the Stripe service.
     *
     * @return string Public api key.
     */
    private function get_publishable_key()
    {
    }
    /**
     * Returns whether to allow prepaid cards for payments.
     *
     * @return bool True means to allow prepaid card (default).
     */
    private function get_allow_prepaid_card()
    {
    }
    /**
     * Determine if store allows Payment Request buttons - e.g. Apple Pay / Chrome Pay.
     *
     * @return bool True if merchant has opted into payment request.
     */
    private function get_allow_payment_request()
    {
    }
    /**
     * Return the button type for the payment button.
     *
     * @return string Defaults to 'default'.
     */
    private function get_button_type()
    {
    }
    /**
     * Return the theme to use for the payment button.
     *
     * @return string Defaults to 'dark'.
     */
    private function get_button_theme()
    {
    }
    /**
     * Return the height for the payment button.
     *
     * @return string A pixel value for the height (defaults to '64').
     */
    private function get_button_height()
    {
    }
    /**
     * Return the inline cc option.
     *
     * @return boolean True if the inline CC form option is enabled.
     */
    private function get_inline_cc_form()
    {
    }
    /**
     * Return the locale for the payment button.
     *
     * @return string Defaults to en_US.
     */
    private function get_button_locale()
    {
    }
    /**
     * Return the icons urls.
     *
     * @return array Arrays of icons metadata.
     */
    private function get_icons()
    {
    }
    /**
     * Add payment request data to the order meta as hooked on the
     * woocommerce_rest_checkout_process_payment_with_context action.
     *
     * @param PaymentContext $context Holds context for the payment.
     * @param PaymentResult  $result  Result object for the payment.
     */
    public function add_payment_request_order_meta(\Automattic\WooCommerce\Blocks\Payments\PaymentContext $context, \Automattic\WooCommerce\Blocks\Payments\PaymentResult &$result)
    {
    }
    /**
     * Handles any potential stripe intents on the order that need handled.
     *
     * This is configured to execute after legacy payment processing has
     * happened on the woocommerce_rest_checkout_process_payment_with_context
     * action hook.
     *
     * @param PaymentContext $context Holds context for the payment.
     * @param PaymentResult  $result  Result object for the payment.
     */
    public function add_stripe_intents(\Automattic\WooCommerce\Blocks\Payments\PaymentContext $context, \Automattic\WooCommerce\Blocks\Payments\PaymentResult &$result)
    {
    }
}