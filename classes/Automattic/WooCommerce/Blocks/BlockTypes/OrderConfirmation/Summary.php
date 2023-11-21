<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes\OrderConfirmation;

/**
 * Summary class.
 */
class Summary extends \Automattic\WooCommerce\Blocks\BlockTypes\OrderConfirmation\AbstractOrderConfirmationBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'order-confirmation-summary';
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
    /**
     * Render row in the order summary.
     *
     * @param string $name name of row.
     * @param string $value value of row.
     * @return string
     */
    protected function render_summary_row($name, $value)
    {
    }
}