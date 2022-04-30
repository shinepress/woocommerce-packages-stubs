<?php

namespace Automattic\WooCommerce\Admin\Features\OnboardingTasks;

/**
 * Contains the logic for completing onboarding tasks.
 */
class Init
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
     * Enqueue scripts and styles.
     */
    public function add_media_scripts()
    {
    }
    /**
     * Get task item data for settings filter.
     *
     * @return array
     */
    public static function get_settings()
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
     * Returns a list of Stripe supported countries. This method can be removed once merged to core.
     *
     * @return array
     */
    public static function get_stripe_supported_countries()
    {
    }
    /**
     * Returns a list of WooCommerce Payments supported countries.
     *
     * @return array
     */
    public static function get_woocommerce_payments_supported_countries()
    {
    }
    /**
     * Records an event when all tasks are completed in the task list.
     *
     * @param mixed $old_value Old value.
     * @param mixed $new_value New value.
     */
    public static function track_completion($old_value, $new_value)
    {
    }
    /**
     * Records an event when all tasks are completed in the extended task list.
     *
     * @param mixed $old_value Old value.
     * @param mixed $new_value New value.
     */
    public static function track_extended_completion($old_value, $new_value)
    {
    }
    /**
     * Records an event for individual task completion.
     *
     * @param mixed $old_value Old value.
     * @param mixed $new_value New value.
     */
    public static function track_task_completion($old_value, $new_value)
    {
    }
    /**
     * Update registered extended task list items.
     */
    public static function update_option_extended_task_list()
    {
    }
    /**
     * Add the dismissal status to each task.
     *
     * @param array $task_lists Task lists.
     * @return array
     */
    public function add_task_dismissal($task_lists)
    {
    }
    /**
     * Add the snoozed status to each task.
     *
     * @param array $task_lists Task lists.
     * @return array
     */
    public function add_task_snoozed($task_lists)
    {
    }
    /**
     * Add the task list isHidden attribute to each list.
     *
     * @param array $task_lists Task lists.
     * @return array
     */
    public function add_task_list_hidden($task_lists)
    {
    }
    /**
     * Get the values from the correct source when attempting to retrieve deprecated options.
     *
     * @param string $pre_option Pre option value.
     * @param string $option Option name.
     * @return string
     */
    public function get_deprecated_options($pre_option, $option)
    {
    }
    /**
     * Updates the new option names when deprecated options are updated.
     * This is a temporary fallback until we can fully remove the old task list components.
     *
     * @param string $value New value.
     * @param string $old_value Old value.
     * @param string $option Option name.
     * @return string
     */
    public function update_deprecated_options($value, $old_value, $option)
    {
    }
}