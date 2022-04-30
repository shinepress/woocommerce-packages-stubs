<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * Legacy Single Product class
 *
 * @internal
 */
class LegacyTemplate extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractDynamicBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'legacy-template';
    /**
     * API version.
     *
     * @var string
     */
    protected $api_version = '2';
    /**
     * Render method for the Legacy Template block. This method will determine which template to render.
     *
     * @param array  $attributes Block attributes.
     * @param string $content    Block content.
     *
     * @return string | void Rendered block type output.
     */
    protected function render($attributes, $content)
    {
    }
    /**
     * Render method for the single product template and parts.
     *
     * @return string Rendered block type output.
     */
    protected function render_single_product()
    {
    }
    /**
     * Render method for the archive product template and parts.
     *
     * @return string Rendered block type output.
     */
    protected function render_archive_product()
    {
    }
}