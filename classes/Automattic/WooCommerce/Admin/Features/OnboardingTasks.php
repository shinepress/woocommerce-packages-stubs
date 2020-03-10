<?php

namespace Automattic\WooCommerce\Admin\Features;

/**
 * Contains the logic for completing onboarding tasks.
 */
class OnboardingTasks
{
    /**
     * Class instance.
     *
     * @var OnboardingTasks instance
     */
    protected static $instance = null;
    /**
     * Name of the active task transient.
     *
     * @var string
     */
    const ACTIVE_TASK_TRANSIENT = 'wc_onboarding_active_task';
    /**
     * Get class instance.
     */
    public static function get_instance()
    {
    }
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Check if Square payment settings are complete.
     *
     * @param string $option Option name.
     * @param array  $value Current value.
     */
    public static function check_square_completion($option, $value)
    {
    }
    /**
     * Check if Paypal payment settings are complete.
     *
     * @param mixed $old_value Old value.
     * @param array $value Current value.
     */
    public static function check_paypal_completion($old_value, $value)
    {
    }
    /**
     * Check if Stripe payment settings are complete.
     *
     * @param mixed $old_value Old value.
     * @param array $value Current value.
     */
    public static function check_stripe_completion($old_value, $value)
    {
    }
    /**
     * Update the payments cache to complete if not already.
     *
     * @param string $payment_method Payment method slug.
     */
    public static function mark_payment_method_configured($payment_method)
    {
    }
    /**
     * Enqueue scripts and styles.
     */
    public function add_media_scripts()
    {
    }
    /**
     * Add task items to component settings.
     *
     * @param array $settings Component settings.
     * @return array
     */
    public function component_settings($settings)
    {
    }
    /**
     * Temporarily store the active task to persist across page loads when neccessary (such as publishing a product). Most tasks do not need to do this.
     */
    public static function set_active_task()
    {
    }
    /**
     * Get the name of the active task.
     *
     * @return string
     */
    public static function get_active_task()
    {
    }
    /**
     * Check for active task completion, and clears the transient.
     *
     * @return bool
     */
    public static function is_active_task_complete()
    {
    }
    /**
     * Check for task completion of a given task.
     *
     * @param string $task Name of task.
     * @return bool
     */
    public static function check_task_completion($task)
    {
    }
    /**
     * Hooks into the product page to add a notice to return to the task list if a product was added.
     *
     * @param string $hook Page hook.
     */
    public static function add_onboarding_product_notice_admin_script($hook)
    {
    }
    /**
     * Hooks into the post page to display a different success notice and sets the active page as the site's home page if visted from onboarding.
     *
     * @param string $hook Page hook.
     */
    public static function add_onboarding_homepage_notice_admin_script($hook)
    {
    }
    /**
     * Adds a notice to return to the task list when the save button is clicked on tax settings pages.
     */
    public static function add_onboarding_tax_notice_admin_script()
    {
    }
    /**
     * Adds a notice to return to the task list when the product importeris done running.
     *
     * @param string $hook Page hook.
     */
    public function add_onboarding_product_import_notice_admin_script($hook)
    {
    }
    /**
     * Get an array of countries that support automated tax.
     *
     * @return array
     */
    public static function get_automated_tax_supported_countries()
    {
    }
    /**
     * Add the task list completion note after completing all tasks.
     *
     * @param mixed $old_value Old value.
     * @param mixed $new_value New value.
     */
    public static function add_completion_note($old_value, $new_value)
    {
    }
}