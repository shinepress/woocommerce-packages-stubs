<?php

namespace Automattic\WooCommerce\Admin\Schedulers;

/**
 * Class MailchimpScheduler
 *
 * @package Automattic\WooCommerce\Admin\Schedulers
 */
class MailchimpScheduler
{
    const SUBSCRIBE_ENDPOINT = 'https://woocommerce.com/wp-json/wccom/v1/subscribe';
    const SUBSCRIBE_ENDPOINT_DEV = 'http://woocommerce.test/wp-json/wccom/v1/subscribe';
    const SUBSCRIBED_OPTION_NAME = 'woocommerce_onboarding_subscribed_to_mailchimp';
    const LOGGER_CONTEXT = 'mailchimp_scheduler';
    /**
     * The logger instance.
     *
     * @var \WC_Logger_Interface|null
     */
    private $logger;
    /**
     * MailchimpScheduler constructor.
     *
     * @param \WC_Logger_Interface|null $logger Logger instance.
     */
    public function __construct(\WC_Logger_Interface $logger = null)
    {
    }
    /**
     * Attempt to subscribe store_email to MailChimp.
     */
    public function run()
    {
    }
    /**
     * Make an HTTP request to the API.
     *
     * @param string $store_email Email address to subscribe.
     *
     * @return mixed
     */
    public function make_request($store_email)
    {
    }
}