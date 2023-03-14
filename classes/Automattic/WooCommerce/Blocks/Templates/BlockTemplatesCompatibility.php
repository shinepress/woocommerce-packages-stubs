<?php

namespace Automattic\WooCommerce\Blocks\Templates;

/**
 * BlockTemplatesCompatibility class.
 *
 * To bridge the gap on compatibility with PHP hooks and blockified templates.
 *
 * @internal
 */
class BlockTemplatesCompatibility
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
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Initialization method.
     */
    protected function init()
    {
    }
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
    protected function is_archive_template()
    {
    }
    /**
     * Remove the default callback added by WooCommerce. We replaced these
     * callbacks by blocks so we have to remove them to prevent duplicated
     * content.
     */
    protected function remove_default_hooks()
    {
    }
    /**
     * Get the buffer content of the hooks to append/prepend to render content.
     *
     * @param array  $hooks    The hooks to be rendered.
     * @param string $position The position of the hooks.
     *
     * @return string
     */
    protected function get_hooks_buffer($hooks, $position)
    {
    }
    /**
     * Loop through inner blocks recursively to find the Products blocks that
     * inherits query from template.
     *
     * @param array $block Parsed block data.
     */
    protected function inner_blocks_walker(&$block)
    {
    }
    /**
     * Recursively inject the custom attribute to all nested blocks.
     *
     * @param array $block Parsed block data.
     */
    protected function inject_attribute(&$block)
    {
    }
    /**
     * For compatibility reason, we need to wrap the Single Product template in a div with specific class.
     * For more details, see https://github.com/woocommerce/woocommerce-blocks/issues/8314.
     *
     * @param string $template_content Template Content.
     * @return string Wrapped template content inside a div.
     */
    public static function wrap_single_product_template($template_content)
    {
    }
    /**
     * Wrap all the blocks inside the template in a group block.
     *
     * @param array $blocks Array of parsed block objects.
     * @return array Group block with the blocks inside.
     */
    private static function create_wrap_block_group($blocks)
    {
    }
    /**
     * Check if the Single Product template has a single product template block:
     * woocommerce/product-gallery-image, woocommerce/product-details, woocommerce/add-to-cart-form]
     *
     * @param array $parsed_blocks Array of parsed block objects.
     * @param array $single_product_template_blocks Array of single product template blocks.
     * @return bool True if the template has a single product template block, false otherwise.
     */
    private static function has_single_product_template_blocks($parsed_blocks, $single_product_template_blocks)
    {
    }
    /**
     * Group blocks in this way:
     * B1 + TP1 + B2 + B3 + B4 + TP2 + B5
     * (B = Block, TP = Template Part)
     * becomes:
     * [[B1], [TP1], [B2, B3, B4], [TP2], [B5]]
     *
     * @param array $parsed_blocks Array of parsed block objects.
     * @return array Array of blocks grouped by template part.
     */
    private static function group_blocks($parsed_blocks)
    {
    }
}