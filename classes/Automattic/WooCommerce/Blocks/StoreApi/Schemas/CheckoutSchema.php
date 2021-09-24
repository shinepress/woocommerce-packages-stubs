<?php

namespace Automattic\WooCommerce\Blocks\StoreApi\Schemas;

/**
 * CheckoutSchema class.
 *
 * @internal This API is used internally by Blocks--it is still in flux and may be subject to revisions.
 */
class CheckoutSchema extends \Automattic\WooCommerce\Blocks\StoreApi\Schemas\AbstractSchema
{
    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'checkout';
    /**
     * The schema item identifier.
     *
     * @var string
     */
    const IDENTIFIER = 'checkout';
    /**
     * Billing address schema instance.
     *
     * @var BillingAddressSchema
     */
    protected $billing_address_schema;
    /**
     * Shipping address schema instance.
     *
     * @var ShippingAddressSchema
     */
    protected $shipping_address_schema;
    /**
     * Constructor.
     *
     * @param ExtendRestApi         $extend Rest Extending instance.
     * @param BillingAddressSchema  $billing_address_schema Billing address schema instance.
     * @param ShippingAddressSchema $shipping_address_schema Shipping address schema instance.
     */
    public function __construct(\Automattic\WooCommerce\Blocks\Domain\Services\ExtendRestApi $extend, \Automattic\WooCommerce\Blocks\StoreApi\Schemas\BillingAddressSchema $billing_address_schema, \Automattic\WooCommerce\Blocks\StoreApi\Schemas\ShippingAddressSchema $shipping_address_schema)
    {
    }
    /**
     * Checkout schema properties.
     *
     * @return array
     */
    public function get_properties()
    {
    }
    /**
     * Return the response for checkout.
     *
     * @param object $item Results from checkout action.
     * @return array
     */
    public function get_item_response($item)
    {
    }
    /**
     * Get the checkout response based on the current order and any payments.
     *
     * @param \WC_Order     $order Order object.
     * @param PaymentResult $payment_result Payment result object.
     * @return array
     */
    protected function get_checkout_response(\WC_Order $order, \Automattic\WooCommerce\Blocks\Payments\PaymentResult $payment_result = null)
    {
    }
    /**
     * This prepares the payment details for the response so it's following the
     * schema where it's an array of objects.
     *
     * @param array $payment_details An array of payment details from the processed payment.
     *
     * @return array An array of objects where each object has the key and value
     *               as distinct properties.
     */
    protected function prepare_payment_details_for_response(array $payment_details)
    {
    }
}