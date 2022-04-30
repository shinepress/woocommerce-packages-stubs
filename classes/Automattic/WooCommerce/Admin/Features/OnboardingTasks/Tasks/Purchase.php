<?php

namespace Automattic\WooCommerce\Admin\Features\OnboardingTasks\Tasks;

/**
 * Purchase Task
 */
class Purchase extends \Automattic\WooCommerce\Admin\Features\OnboardingTasks\Task
{
    /**
     * Initialize.
     */
    public function __construct()
    {
    }
    /**
     * Clear dismissal on onboarding product type changes.
     *
     * @param array $old_value Old value.
     * @param array $new_value New value.
     */
    public function clear_dismissal($old_value, $new_value)
    {
    }
    /**
     * Get the task arguments.
     * ID.
     *
     * @return string
     */
    public function get_id()
    {
    }
    /**
     * Parent ID.
     *
     * @return string
     */
    public function get_parent_id()
    {
    }
    /**
     * Title.
     *
     * @return string
     */
    public function get_title()
    {
    }
    /**
     * Content.
     *
     * @return string
     */
    public function get_content()
    {
    }
    /**
     * Action label.
     *
     * @return string
     */
    public function get_action_label()
    {
    }
    /**
     * Time.
     *
     * @return string
     */
    public function get_time()
    {
    }
    /**
     * Task completion.
     *
     * @return bool
     */
    public function is_complete()
    {
    }
    /**
     * Dismissable.
     *
     * @return bool
     */
    public function is_dismissable()
    {
    }
    /**
     * Task visibility.
     *
     * @return bool
     */
    public function can_view()
    {
    }
    /**
     * Get purchaseable and remaining products.
     *
     * @return array
     */
    public static function get_products()
    {
    }
}