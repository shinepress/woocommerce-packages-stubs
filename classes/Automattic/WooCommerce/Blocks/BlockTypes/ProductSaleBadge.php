<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * ProductSaleBadge class.
 */
class ProductSaleBadge extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'product-sale-badge';
    /**
     * API version name.
     *
     * @var string
     */
    protected $api_version = '2';
    /**
     * Get block attributes.
     *
     * @return array
     */
    protected function get_block_type_supports()
    {
    }
    /**
     * Register script and style assets for the block type before it is registered.
     *
     * This registers the scripts; it does not enqueue them.
     */
    protected function register_block_type_assets()
    {
    }
}