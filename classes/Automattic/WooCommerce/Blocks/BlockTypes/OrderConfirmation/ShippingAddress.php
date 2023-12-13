<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes\OrderConfirmation;

/**
 * ShippingAddress class.
 */
class ShippingAddress extends \Automattic\WooCommerce\Blocks\BlockTypes\OrderConfirmation\AbstractOrderConfirmationBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'order-confirmation-shipping-address';
    /**
     * This renders the content of the block within the wrapper.
     *
     * @param \WC_Order $order Order object.
     * @param string    $permission Permission level for viewing order details.
     * @param array     $attributes Block attributes.
     * @param string    $content Original block content.
     * @return string
     */
    protected function render_content($order, $permission = false, $attributes = [], $content = '')
    {
    }
}