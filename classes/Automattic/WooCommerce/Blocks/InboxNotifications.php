<?php

namespace Automattic\WooCommerce\Blocks;

/**
 * A class used to display inbox messages to merchants in the WooCommerce Admin dashboard.
 *
 * @package Automattic\WooCommerce\Blocks
 * @since x.x.x
 */
class InboxNotifications
{
    const SURFACE_CART_CHECKOUT_NOTE_NAME = 'surface_cart_checkout';
    const SURFACE_CART_CHECKOUT_PROBABILITY_OPTION = 'wc_blocks_surface_cart_checkout_probability';
    const PERCENT_USERS_TO_TARGET = 50;
    const INELIGIBLE_EXTENSIONS = [
        'automatewoo',
        'mailchimp-for-woocommerce',
        'mailpoet',
        'klarna-payments-for-woocommerce',
        'klarna-checkout-for-woocommerce',
        'woocommerce-gutenberg-products-block',
        // Disallow the notification if the store is using the feature plugin already.
        'woocommerce-all-products-for-subscriptions',
        'woocommerce-bookings',
        'woocommerce-box-office',
        'woocommerce-cart-add-ons',
        'woocommerce-checkout-add-ons',
        'woocommerce-checkout-field-editor',
        'woocommerce-conditional-shipping-and-payments',
        'woocommerce-dynamic-pricing',
        'woocommerce-eu-vat-number',
        'woocommerce-follow-up-emails',
        'woocommerce-gateway-amazon-payments-advanced',
        'woocommerce-gateway-authorize-net-cim',
        'woocommerce-google-analytics-pro',
        'woocommerce-memberships',
        'woocommerce-paypal-payments',
        'woocommerce-pre-orders',
        'woocommerce-product-bundles',
        'woocommerce-shipping-fedex',
        'woocommerce-smart-coupons',
    ];
    const ELIGIBLE_COUNTRIES = ['GB', 'US'];
    /**
     * Deletes the note.
     */
    public static function delete_surface_cart_checkout_blocks_notification()
    {
    }
    /**
     * Creates a notification letting merchants know about the Cart and Checkout Blocks.
     */
    public static function create_surface_cart_checkout_blocks_notification()
    {
    }
}