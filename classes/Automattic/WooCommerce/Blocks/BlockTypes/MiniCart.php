<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * Mini Cart class.
 *
 * @internal
 */
class MiniCart extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'mini-cart';
    /**
     * Array of scripts that will be lazy loaded when interacting with the block.
     *
     * @var string[]
     */
    protected $scripts_to_lazy_load = array();
    /**
     *  Inc Tax label.
     *
     * @var string
     */
    protected $tax_label = '';
    /**
     *  Visibility of price including tax.
     *
     * @var string
     */
    protected $display_cart_prices_including_tax = false;
    /**
     * Constructor.
     *
     * @param AssetApi            $asset_api Instance of the asset API.
     * @param AssetDataRegistry   $asset_data_registry Instance of the asset data registry.
     * @param IntegrationRegistry $integration_registry Instance of the integration registry.
     */
    public function __construct(\Automattic\WooCommerce\Blocks\Assets\Api $asset_api, \Automattic\WooCommerce\Blocks\Assets\AssetDataRegistry $asset_data_registry, \Automattic\WooCommerce\Blocks\Integrations\IntegrationRegistry $integration_registry)
    {
    }
    /**
     * Get the editor script handle for this block type.
     *
     * @param string $key Data to get, or default to everything.
     * @return array|string;
     */
    protected function get_block_type_editor_script($key = null)
    {
    }
    /**
     * Get the frontend script handle for this block type.
     *
     * @see $this->register_block_type()
     * @param string $key Data to get, or default to everything.
     * @return array|string
     */
    protected function get_block_type_script($key = null)
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
     * Hydrate the cart block with data from the API.
     */
    protected function hydrate_from_api()
    {
    }
    /**
     * Returns the script data given its handle.
     *
     * @param string $handle Handle of the script.
     *
     * @return \_WP_Dependency|null Object containing the script data if found, or null.
     */
    protected function get_script_from_handle($handle)
    {
    }
    /**
     * Recursively appends a scripts and its dependencies into the scripts_to_lazy_load array.
     *
     * @param \_WP_Dependency $script Object containing script data.
     */
    protected function append_script_and_deps_src($script)
    {
    }
    /**
     * Returns the markup for render the tax label.
     *
     * @return string
     */
    protected function get_include_tax_label_markup()
    {
    }
    /**
     * Append frontend scripts when rendering the Mini Cart block.
     *
     * @param array  $attributes Block attributes.
     * @param string $content    Block content.
     *
     * @return string Rendered block type output.
     */
    protected function render($attributes, $content)
    {
    }
    /**
     * Render the markup for the Mini Cart block.
     *
     * @param array $attributes Block attributes.
     *
     * @return string The HTML markup.
     */
    protected function get_markup($attributes)
    {
    }
    /**
     * Return an instace of the CartController class.
     *
     * @return CartController CartController class instance.
     */
    protected function get_cart_controller()
    {
    }
    /**
     * Get array with data for handle the tax label.
     * the entire logic of this function is was taken from:
     * https://github.com/woocommerce/woocommerce/blob/e730f7463c25b50258e97bf56e31e9d7d3bc7ae7/includes/class-wc-cart.php#L1582
     *
     * @return array;
     */
    protected function get_tax_label()
    {
    }
    /**
     * Get the supports array for this block type.
     *
     * @see $this->register_block_type()
     * @return string;
     */
    protected function get_block_type_supports()
    {
    }
}