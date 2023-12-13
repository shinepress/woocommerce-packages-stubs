<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes\OrderConfirmation;

/**
 * AbstractOrderConfirmationBlock class.
 */
abstract class AbstractOrderConfirmationBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Initialize this block type.
     *
     * - Hook into WP lifecycle.
     * - Register the block with WordPress.
     */
    protected function initialize()
    {
    }
    /**
     * Get the content from a hook and return it.
     *
     * @param string $hook Hook name.
     * @param array  $args Array of args to pass to the hook.
     * @return string
     */
    protected function get_hook_content($hook, $args)
    {
    }
    /**
     * Render the block.
     *
     * @param array    $attributes Block attributes.
     * @param string   $content Block content.
     * @param WP_Block $block Block instance.
     *
     * @return string | void Rendered block output.
     */
    protected function render($attributes, $content, $block)
    {
    }
    /**
     * This renders the content of the block within the wrapper. The permission determines what data can be shown under
     * the given context.
     *
     * @param \WC_Order $order Order object.
     * @param string    $permission Permission level for viewing order details.
     * @param array     $attributes Block attributes.
     * @param string    $content Original block content.
     * @return string
     */
    abstract protected function render_content($order, $permission = false, $attributes = [], $content = '');
    /**
     * This is what gets rendered when the order does not exist. Renders nothing by default, but can be overridden by
     * child classes.
     *
     * @return string
     */
    protected function render_content_fallback()
    {
    }
    /**
     * Get current order.
     *
     * @return \WC_Order|null
     */
    protected function get_order()
    {
    }
    /**
     * View mode for order details based on the order, current user, and settings.
     *
     * Possible values are:
     * - "full" user can view all order details.
     * - "limited" user can view some order details, but no PII. This may happen for example, if the user checked out as a guest.
     * - false user cannot view order details.
     *
     * @param \WC_Order|null $order Order object.
     * @return "full"|"limited"|false
     */
    protected function get_view_order_permissions($order)
    {
    }
    /**
     * See if guest checkout is enabled.
     *
     * @return boolean
     */
    protected function allow_guest_checkout()
    {
    }
    /**
     * Guest users without an active session can provide their email address to view order details. This however can only
     * be permitted if the user also provided the correct order key, and guest checkout is actually enabled.
     *
     * @param \WC_Order $order Order object.
     * @return boolean
     */
    protected function email_verification_permitted($order)
    {
    }
    /**
     * See if we need to verify the email address before showing the order details.
     *
     * @param \WC_Order $order Order object.
     * @return boolean
     */
    protected function email_verification_required($order)
    {
    }
    /**
     * See if the order key is valid.
     *
     * @param \WC_Order $order Order object.
     * @return boolean
     */
    protected function has_valid_order_key($order)
    {
    }
    /**
     * See if the current order came from a guest or a logged in customer.
     *
     * @param \WC_Order $order Order object.
     * @return boolean
     */
    protected function is_customer_order($order)
    {
    }
    /**
     * See if the current logged in user ID matches the given order customer ID.
     *
     * Returns false for logged-out customers.
     *
     * @param \WC_Order $order Order object.
     * @return boolean
     */
    protected function is_current_customer_order($order)
    {
    }
    /**
     * Get the frontend script handle for this block type.
     *
     * @param string $key Data to get, or default to everything.
     */
    protected function get_block_type_script($key = null)
    {
    }
    /**
     * Register block pattern for Order Confirmation to make it translatable.
     */
    public function register_patterns()
    {
    }
}