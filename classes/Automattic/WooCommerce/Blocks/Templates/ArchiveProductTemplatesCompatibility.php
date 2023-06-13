<?php

namespace Automattic\WooCommerce\Blocks\Templates;

/**
 * ArchiveProductTemplatesCompatibility class.
 *
 * To bridge the gap on compatibility with PHP hooks and Product Archive blockified templates.
 *
 * @internal
 */
class ArchiveProductTemplatesCompatibility extends \Automattic\WooCommerce\Blocks\Templates\AbstractTemplateCompatibility
{
    /**
     * The custom ID of the loop item block as the replacement of the core/null block.
     */
    const LOOP_ITEM_ID = 'product-loop-item';
    /**
     * The data of supported hooks, containing the hook name, the block name,
     * position, and the callbacks.
     *
     * @var array $hook_data The hook data.
     */
    protected $hook_data;
    /**
     * Update the render block data to inject our custom attribute needed to
     * determine which blocks belong to an inherited Products block.
     *
     * @param array         $parsed_block The block being rendered.
     * @param array         $source_block An un-modified copy of $parsed_block, as it appeared in the source content.
     * @param WP_Block|null $parent_block If this is a nested block, a reference to the parent block.
     *
     * @return array
     */
    public function update_render_block_data($parsed_block, $source_block, $parent_block)
    {
    }
    /**
     * Inject hooks to rendered content of corresponding blocks.
     *
     * @param mixed $block_content The rendered block content.
     * @param mixed $block         The parsed block data.
     * @return string
     */
    public function inject_hooks($block_content, $block)
    {
    }
    /**
     * The hook data to inject to the rendered content of blocks. This also
     * contains hooked functions that will be removed by remove_default_hooks.
     *
     * The array format:
     * [
     *   <hook-name> => [
     *     block_name => <block-name>,
     *     position => before|after,
     *     hooked => [
     *       <function-name> => <priority>,
     *        ...
     *     ],
     *  ],
     * ]
     * Where:
     * - hook-name is the name of the hook that will be replaced.
     * - block-name is the name of the block that will replace the hook.
     * - position is the position of the block relative to the hook.
     * - hooked is an array of functions hooked to the hook that will be
     *   replaced. The key is the function name and the value is the
     *   priority.
     */
    protected function set_hook_data()
    {
    }
    /**
     * Check if current page is a product archive template.
     */
    private function is_archive_template()
    {
    }
    /**
     * Loop through inner blocks recursively to find the Products blocks that
     * inherits query from template.
     *
     * @param array $block Parsed block data.
     */
    private function inner_blocks_walker(&$block)
    {
    }
    /**
     * Recursively inject the custom attribute to all nested blocks.
     *
     * @param array $block Parsed block data.
     */
    private function inject_attribute(&$block)
    {
    }
}