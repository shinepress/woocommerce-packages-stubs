<?php

namespace Automattic\WooCommerce\Blocks\Assets;

/**
 * Class instance for registering data used on the current view session by
 * assets.
 *
 * @since 2.5.0
 */
class AssetDataRegistry
{
    /**
     * Contains registered data.
     *
     * @var array
     */
    private $data = [];
    /**
     * Lazy data is an array of closures that will be invoked just before
     * asset data is generated for the enqueued script.
     *
     * @var array
     */
    private $lazy_data = [];
    /**
     * Asset handle for registered data.
     *
     * @var string
     */
    private $handle = 'wc-settings';
    /**
     * Asset API interface for various asset registration.
     *
     * @var API
     */
    private $api;
    /**
     * Constructor
     *
     * @param Api $asset_api  Asset API interface for various asset registration.
     */
    public function __construct(\Automattic\WooCommerce\Blocks\Assets\Api $asset_api)
    {
    }
    /**
     * Hook into WP asset registration for enqueueing asset data.
     */
    protected function init()
    {
    }
    /**
     * Exposes core asset data
     *
     * @return array  An array containing core data.
     */
    protected function get_core_data()
    {
    }
    /**
     * Returns block-related data for enqueued wc-settings script.
     * Format order statuses by removing a leading 'wc-' if present.
     *
     * @param array $statuses Order statuses.
     * @return array formatted statuses.
     */
    protected function get_order_statuses($statuses)
    {
    }
    /**
     * Used for on demand initialization of asset data and registering it with
     * the internal data registry.
     *
     * Note: core data will overwrite any externally registered data via the api.
     */
    protected function initialize_core_data()
    {
    }
    /**
     * Loops through each registered lazy data callback and adds the returned
     * value to the data array.
     *
     * This method is executed right before preparing the data for printing to
     * the rendered screen.
     *
     * @return void
     */
    protected function execute_lazy_data()
    {
    }
    /**
     * Exposes private registered data to child classes.
     *
     * @return array  The registered data on the private data property
     */
    protected function get()
    {
    }
    /**
     * Allows checking whether a key exists.
     *
     * @param string $key  The key to check if exists.
     * @return bool  Whether the key exists in the current data registry.
     */
    public function exists($key)
    {
    }
    /**
     * Interface for adding data to the registry.
     *
     * @param string $key  The key used to reference the data being registered.
     *                     You can only register data that is not already in the
     *                     registry identified by the given key.
     * @param mixed  $data If not a function, registered to the registry as is.
     *                     If a function, then the callback is invoked right
     *                     before output to the screen.
     *
     * @throws InvalidArgumentException  Only throws when site is in debug mode.
     *                                   Always logs the error.
     */
    public function add($key, $data)
    {
    }
    /**
     * Callback for registering the data script via WordPress API.
     *
     * @return void
     */
    public function register_data_script()
    {
    }
    /**
     * Callback for enqueuing asset data via the WP api.
     *
     * Note: while this is hooked into print/admin_print_scripts, it still only
     * happens if the script attached to `wc-settings` handle is enqueued. This
     * is done to allow for any potentially expensive data generation to only
     * happen for routes that need it.
     */
    public function enqueue_asset_data()
    {
    }
    /**
     * See self::add() for docs.
     *
     * @param   string $key   Key for the data.
     * @param   mixed  $data  Value for the data.
     *
     * @throws InvalidArgumentException  If key is not a string or already
     *                                   exists in internal data cache.
     */
    protected function add_data($key, $data)
    {
    }
    /**
     * Exposes whether the current site is in debug mode or not.
     *
     * @return boolean  True means the site is in debug mode.
     */
    protected function debug()
    {
    }
}