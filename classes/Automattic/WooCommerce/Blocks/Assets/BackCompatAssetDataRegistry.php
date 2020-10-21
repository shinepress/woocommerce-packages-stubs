<?php

namespace Automattic\WooCommerce\Blocks\Assets;

/**
 * Backwards Compatibility class for plugins using wcSettings in prior versions.
 *
 * Note: This will be removed at some point.
 *
 * @internal
 * @since 2.5.0
 */
class BackCompatAssetDataRegistry extends \Automattic\WooCommerce\Blocks\Assets\AssetDataRegistry
{
    /**
     * Overrides parent method.
     *
     * @see AssetDataRegistry::enqueue_asset_data
     */
    public function enqueue_asset_data()
    {
    }
    /**
     * Override parent method.
     *
     * @see AssetDataRegistry::get_core_data
     *
     * @return array  An array of data to output for enqueued script.
     */
    protected function get_core_data()
    {
    }
}