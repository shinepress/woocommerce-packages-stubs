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
     * Tracks if assets have been enqueued.
     *
     * @var boolean
     */
    protected $enqueued_assets = false;
    /**
     * Constructor
     *
     * @param string $block_name Optional set block name during construct.
     */
    public function __construct($block_name = '')
    {
    }
    /**
     * Registers the block type with WordPress.
     */
    public function register_block_type()
    {
    }
    /**
     * Append frontend scripts when rendering the block.
     *
     * @param array|\WP_Block $attributes Block attributes, or an instance of a WP_Block. Defaults to an empty array.
     * @param string          $content    Block content. Default empty string.
     * @return string Rendered block type output.
     */
    public function render($attributes = [], $content = '')
    {
    }
    /**
     * Enqueue assets used for rendering the block.
     *
     * @param array $attributes  Any attributes that currently are available from the block.
     */
    public function enqueue_assets(array $attributes = [])
    {
    }
    /**
     * Enqueue assets used for rendering the block in editor context.
     *
     * This is needed if a block is not yet within the post content--`render` and `enqueue_assets` may not have ran.
     */
    public function enqueue_editor_assets()
    {
    }
    /**
     * Injects block attributes into the block.
     *
     * @param string $content HTML content to inject into.
     * @param array  $attributes Key value pairs of attributes.
     * @return string Rendered block with data attributes.
     */
    protected function inject_html_data_attributes($content, array $attributes)
    {
    }
    /**
     * Converts block attributes to HTML data attributes.
     *
     * @param array $attributes Key value pairs of attributes.
     * @return string Rendered HTML attributes.
     */
    protected function get_html_data_attributes(array $attributes)
    {
    }
    /**
     * Extra data passed through from server to client for block.
     *
     * @param array $attributes  Any attributes that currently are available from the block.
     *                           Note, this will be empty in the editor context when the block is
     *                           not in the post content on editor load.
     */
    protected function enqueue_data(array $attributes = [])
    {
    }
    /**
     * Register/enqueue scripts used for this block.
     *
     * @param array $attributes  Any attributes that currently are available from the block.
     */
    protected function enqueue_scripts(array $attributes = [])
    {
    }
    /**
     * Script to append the correct sizing class to a block skeleton.
     *
     * @return string
     */
    protected function get_skeleton_inline_script()
    {
    }
}