<?php


/**
 * Manages the initial state of the Interactivity API store in the server and
 * its serialization so it can be restored in the browser upon hydration.
 *
 * It's a private class, exposed by other functions, like `wc_store`.
 *
 * @access private
 */
class WC_Interactivity_Store
{
    /**
     * Store.
     *
     * @var array
     */
    private static $store = array();
    /**
     * Get store data.
     *
     * @return array
     */
    static function get_data()
    {
    }
    /**
     * Merge data.
     *
     * @param array $data The data that will be merged with the exsisting store.
     */
    static function merge_data($data)
    {
    }
    /**
     * Reset the store data.
     */
    static function reset()
    {
    }
    /**
     * Render the store data.
     */
    static function render()
    {
    }
}