<?php

namespace Automattic\WooCommerce\Admin\Features;

/**
 * Contains backend logic for the onboarding profile and checklist feature.
 */
class Onboarding
{
    /**
     * Class instance.
     *
     * @var Onboarding instance
     */
    protected static $instance = null;
    /**
     * Name of themes transient.
     *
     * @var string
     */
    const THEMES_TRANSIENT = 'wc_onboarding_themes';
    /**
     * Name of product data transient.
     *
     * @var string
     */
    const PRODUCT_DATA_TRANSIENT = 'wc_onboarding_product_data';
    /**
     * Profile data option name.
     */
    const PROFILE_DATA_OPTION = 'woocommerce_onboarding_profile';
    /**
     * Onboarding opt-in option name.
     */
    const OPT_IN_OPTION = 'woocommerce_onboarding_opt_in';
    /**
     * Get class instance.
     */
    public static function get_instance()
    {
    }
    /**
     * Hook into WooCommerce.
     */
    public function __construct()
    {
    }
    /**
     * Adds the ability to toggle the new onboarding experience on or off.
     */
    private function add_toggle_actions()
    {
    }
    /**
     * Add onboarding actions.
     */
    private function add_actions()
    {
    }
    /**
     * Add onboarding filters.
     */
    private function add_filters()
    {
    }
    /**
     * Send profile data to WooCommerce.com.
     */
    public static function send_profile_data()
    {
    }
    /**
     * Send profiler data on profiler change to completion.
     *
     * @param array $old_value Previous value.
     * @param array $value Current value.
     */
    public static function send_profile_data_on_update($old_value, $value)
    {
    }
    /**
     * Send profiler data after a site is connected.
     */
    public static function send_profile_data_on_connect()
    {
    }
    /**
     * Redirect the old onboarding wizard to the profiler.
     */
    public static function redirect_old_onboarding()
    {
    }
    /**
     * Returns true if the profiler should be displayed (not completed).
     *
     * @return bool
     */
    public static function should_show_profiler()
    {
    }
    /**
     * Returns true if the task list should be displayed (not completed or hidden off the dashboard).
     *
     * @return bool
     */
    public static function should_show_tasks()
    {
    }
    /**
     * Get a list of allowed industries for the onboarding wizard.
     *
     * @return array
     */
    public static function get_allowed_industries()
    {
    }
    /**
     * Get a list of allowed product types for the onboarding wizard.
     *
     * @return array
     */
    public static function get_allowed_product_types()
    {
    }
    /**
     * Sort themes returned from WooCommerce.com
     *
     * @param  array $themes Array of themes from WooCommerce.com.
     * @return array
     */
    public static function sort_woocommerce_themes($themes)
    {
    }
    /**
     * Get a list of themes for the onboarding wizard.
     *
     * @return array
     */
    public static function get_themes()
    {
    }
    /**
     * Get theme data used in onboarding theme browser.
     *
     * @param WP_Theme $theme Theme to gather data from.
     * @return array
     */
    public static function get_theme_data($theme)
    {
    }
    /**
     * Add theme data to response from themes controller.
     *
     * @param WP_REST_Response $response Rest response.
     * @return WP_REST_Response
     */
    public static function add_uploaded_theme_data($response)
    {
    }
    /**
     * Check if theme has declared support for WooCommerce.
     *
     * @param WP_Theme $theme Theme to check.
     * @return bool
     */
    public static function has_woocommerce_support($theme)
    {
    }
    /**
     * Append dynamic product data from API.
     *
     * @param array $product_types Array of product types.
     * @return array
     */
    public static function append_product_data($product_types)
    {
    }
    /**
     * Delete the stored themes transient.
     */
    public static function delete_themes_transient()
    {
    }
    /**
     * Add profiler items to component settings.
     *
     * @param array $settings Component settings.
     */
    public function component_settings($settings)
    {
    }
    /**
     * Preload options to prime state of the application.
     *
     * @param array $options Array of options to preload.
     * @return array
     */
    public function preload_options($options)
    {
    }
    /**
     * Preload WC setting options to prime state of the application.
     *
     * @param array $options Array of options to preload.
     * @return array
     */
    public function preload_settings($options)
    {
    }
    /**
     * Returns a list of Stripe supported countries. This method can be removed once merged to core.
     *
     * @return array
     */
    private static function get_stripe_supported_countries()
    {
    }
    /**
     * Gets an array of plugins that can be installed & activated via the onboarding wizard.
     *
     * @param array $plugins Array of plugin slugs to be allowed.
     *
     * @return array
     * @todo Handle edgecase of where installed plugins may have versioned folder names (i.e. `jetpack-master/jetpack.php`).
     */
    public static function get_onboarding_allowed_plugins($plugins)
    {
    }
    /**
     * Gets an array of themes that can be installed & activated via the onboarding wizard.
     *
     * @return array
     */
    public static function get_allowed_themes()
    {
    }
    /**
     * Let the app know that we will be showing the onboarding route, so wp-admin elements should be hidden while loading.
     *
     * @param bool $is_loading Indicates if the `woocommerce-admin-is-loading` should be appended or not.
     * @return bool
     */
    public function is_loading($is_loading)
    {
    }
    /**
     * Instead of redirecting back to the payment settings page, we will redirect back to the payments task list with our status.
     *
     * @param string $location URL of redirect.
     * @param int    $status HTTP response status code.
     * @return string URL of redirect.
     */
    public function overwrite_paypal_redirect($location, $status)
    {
    }
    /**
     * Finishes the PayPal connection process by saving the correct settings.
     */
    public function finish_paypal_connect()
    {
    }
    /**
     * Instead of redirecting back to the payment settings page, we will redirect back to the payments task list with our status.
     *
     * @param string $location URL of redirect.
     * @param int    $status HTTP response status code.
     * @return string URL of redirect.
     */
    public function overwrite_square_redirect($location, $status)
    {
    }
    /**
     * Finishes the Square connection process by saving the correct settings.
     */
    public function finish_square_connect()
    {
    }
    /**
     * Update the existing help tab and add an option to enable the new onboarding experience.
     */
    public static function update_help_tab()
    {
    }
    /**
     * Reset the onboarding profiler and redirect to the profiler.
     */
    public static function enable_onboarding()
    {
    }
    /**
     * Track changes to the onboarding option.
     *
     * @param mixed  $mixed Option name or previous value if option previously existed.
     * @param string $value Value of the updated option.
     */
    public static function track_onboarding_toggle($mixed, $value)
    {
    }
    /**
     * Update the help tab setup link to reset the onboarding profiler.
     */
    public static function add_help_tab()
    {
    }
    /**
     * Allows quick access to testing the calypso parts of onboarding.
     */
    public static function calypso_tests()
    {
    }
    /**
     * Reset the onboarding profiler and redirect to the profiler.
     */
    public static function reset_profiler()
    {
    }
    /**
     * Reset the onboarding task list and redirect to the dashboard.
     */
    public static function reset_task_list()
    {
    }
    /**
     * Remove the install notice that prompts the user to visit the old onboarding setup wizard.
     *
     * @param bool   $show Show or hide the notice.
     * @param string $notice The slug of the notice.
     * @return bool
     */
    public static function remove_install_notice($show, $notice)
    {
    }
    /**
     * Redirects the user to the task list if the task list is enabled and finishing a wccom checkout.
     *
     * @todo Once URL params are added to the redirect, we can check those instead of the referer.
     */
    public static function redirect_wccom_install()
    {
    }
    /**
     * When updating WooCommerce, mark the profiler and task list complete.
     *
     * @todo The `maybe_enable_setup_wizard()` method should be revamped on onboarding enable in core.
     * See https://github.com/woocommerce/woocommerce/blob/1ca791f8f2325fe2ee0947b9c47e6a4627366374/includes/class-wc-install.php#L341
     */
    public static function maybe_mark_complete()
    {
    }
}