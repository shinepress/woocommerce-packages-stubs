<?php

namespace Automattic\WooCommerce\Blocks\Domain\Services;

/**
 * Service class implementing new create account behaviour for order processing.
 */
class CreateAccount
{
    /**
     * Reference to the Package instance
     *
     * @var Package
     */
    private $package;
    /**
     * Constructor.
     *
     * @param Package $package An instance of (Woo Blocks) Package.
     */
    public function __construct(\Automattic\WooCommerce\Blocks\Domain\Package $package)
    {
    }
    /**
     * Single method for feature gating logic. Used to gate all non-private methods.
     *
     * @return True if Checkout sign-up feature should be made available.
     */
    private function is_feature_enabled()
    {
    }
    /**
     * Init - register handlers for WooCommerce core email hooks.
     */
    public function init()
    {
    }
    /**
     * Trigger new account email.
     * This is intended as a replacement to WC_Emails::customer_new_account(),
     * with a set password link instead of emailing the new password in email
     * content.
     *
     * @param int   $customer_id       The ID of the new customer account.
     * @param array $new_customer_data Assoc array of data for the new account.
     */
    public function customer_new_account($customer_id = 0, array $new_customer_data = array())
    {
    }
    /**
     * Create a user account for specified request (if necessary).
     * If a new account is created:
     * - The user is logged in.
     *
     * @param \WP_REST_Request $request The current request object being handled.
     *
     * @throws Exception On error.
     * @return int The new user id, or 0 if no user was created.
     */
    public function from_order_request(\WP_REST_Request $request)
    {
    }
    /**
     * Check request options and store (shop) config to determine if a user account
     * should be created as part of order processing.
     *
     * @param \WP_REST_Request $request The current request object being handled.
     *
     * @return boolean True if a new user account should be created.
     */
    protected function should_create_customer_account(\WP_REST_Request $request)
    {
    }
    /**
     * Convert an account creation error to an exception.
     *
     * @param \WP_Error $error An error object.
     *
     * @return Exception.
     */
    private function map_create_account_error(\WP_Error $error)
    {
    }
    /**
     * Create a new account for a customer (using a new blocks-specific PHP API).
     *
     * The account is created with a generated username. The customer is sent
     * an email notifying them about the account and containing a link to set
     * their (initial) password.
     *
     * Intended as a replacement for wc_create_new_customer in WC core.
     *
     * @throws \Exception If an error is encountered when creating the user account.
     *
     * @param string $user_email The email address to use for the new account.
     * @param string $first_name The first name to use for the new account.
     * @param string $last_name  The last name to use for the new account.
     *
     * @return int User id if successful
     */
    private function create_customer_account($user_email, $first_name, $last_name)
    {
    }
}