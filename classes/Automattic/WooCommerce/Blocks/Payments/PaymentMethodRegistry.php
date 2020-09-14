<?php

namespace Automattic\WooCommerce\Blocks\Payments;

/**
 * Class used for interacting with payment method types.
 *
 * @since 2.6.0
 */
final class PaymentMethodRegistry
{
    /**
     * Registered payment methods, as `$name => $instance` pairs.
     *
     * @var PaymentMethodTypeInterface[]
     */
    private $registered_payment_methods = [];
    /**
     * Registers a payment method.
     *
     * @param PaymentMethodTypeInterface $payment_method_type An instance of PaymentMethodTypeInterface.
     *
     * @return boolean True means registered successfully.
     */
    public function register(\Automattic\WooCommerce\Blocks\Payments\PaymentMethodTypeInterface $payment_method_type)
    {
    }
    /**
     * Initializes all payment method types.
     */
    public function initialize()
    {
    }
    /**
     * Un-register a payment method.
     *
     * @param string|PaymentMethodTypeInterface $name Payment method name, or alternatively a PaymentMethodTypeInterface instance.
     * @return boolean True means unregistered successfully.
     */
    public function unregister($name)
    {
    }
    /**
     * Retrieves a registered payment method.
     *
     * @param string $name Payment method name.
     * @return PaymentMethodTypeInterface|null The registered payment method, or null if it is not registered.
     */
    public function get_registered($name)
    {
    }
    /**
     * Retrieves all registered payment methods.
     *
     * @return PaymentMethodTypeInterface[]
     */
    public function get_all_registered()
    {
    }
    /**
     * Checks if a payment method is registered.
     *
     * @param string $name Payment method name.
     * @return bool True if the payment method is registered, false otherwise.
     */
    public function is_registered($name)
    {
    }
    /**
     * Retrieves all registered payment methods that are also active.
     *
     * @return PaymentMethodTypeInterface[]
     */
    public function get_all_active_registered()
    {
    }
    /**
     * Gets an array of all registered payment method script handles.
     *
     * @return string[]
     */
    public function get_all_registered_script_handles()
    {
    }
    /**
     * Gets an array of all registered payment method script data.
     *
     * @return array
     */
    public function get_all_registered_script_data()
    {
    }
}