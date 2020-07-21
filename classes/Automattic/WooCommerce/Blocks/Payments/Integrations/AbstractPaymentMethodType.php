<?php

namespace Automattic\WooCommerce\Blocks\Payments\Integrations;

/**
 * AbstractPaymentMethodType class.
 *
 * @since 2.6.0
 */
abstract class AbstractPaymentMethodType implements \Automattic\WooCommerce\Blocks\Payments\PaymentMethodTypeInterface
{
    /**
     * Payment method name defined by payment methods extending this class.
     *
     * @var string
     */
    protected $name = '';
    /**
     * Returns the name of the payment method.
     */
    public function get_name()
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
     * Returns an array of script handles to enqueue for this payment method in
     * the frontend context
     *
     * @return string[]
     */
    public function get_payment_method_script_handles()
    {
    }
    /**
     * Returns an array of script handles to enqueue for this payment method in
     * the admin context
     *
     * @return string[]
     */
    public function get_payment_method_script_handles_for_admin()
    {
    }
    /**
     * An array of key, value pairs of data made available to payment methods
     * client side.
     *
     * @return array
     */
    public function get_payment_method_data()
    {
    }
}