<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * AbstractBlock class.
 */
abstract class AbstractBlock
{
    /**
     * Block namespace.
     *
     * @var string
     */
    protected $namespace = 'woocommerce';
    /**
     * Block namespace.
     *
     * @var string
     */
    protected $block_name = '';
    /**
     * Registers the block type with WordPress.
     */
    public function register_block_type()
    {
    }
}