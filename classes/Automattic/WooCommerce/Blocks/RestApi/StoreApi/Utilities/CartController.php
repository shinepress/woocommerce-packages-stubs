<?php

namespace Automattic\WooCommerce\Blocks\RestApi\StoreApi\Utilities;

/**
 * Woo Cart Controller class.
 *
 * @since 2.5.0
 */
class CartController
{
    /**
     * Based on the core cart class but returns errors rather than rendering notices directly.
     *
     * @throws RestException Exception if invalid data is detected.
     *
     * @param array $request Add to cart request params.
     * @return string|Error
     */
    public function add_to_cart($request)
    {
    }
    /**
     * Get main instance of cart class.
     *
     * @return \WC_Cart
     */
    public function get_cart_instance()
    {
    }
    /**
     * Return a cart item from the woo core cart class.
     *
     * @param string $item_id Cart item id.
     * @return array
     */
    public function get_cart_item($item_id)
    {
    }
    /**
     * Returns all cart items.
     *
     * @return array
     */
    public function get_cart_items()
    {
    }
    /**
     * Empty cart contents.
     */
    public function empty_cart()
    {
    }
    /**
     * Get a product object to be added to the cart.
     *
     * @throws RestException Exception if invalid data is detected.
     *
     * @param array $request Add to cart request params.
     * @return \WC_Product|Error Returns a product object if purchasable.
     */
    protected function get_product_for_cart($request)
    {
    }
    /**
     * Filter data for add to cart requests.
     *
     * @param array $request Add to cart request params.
     * @return array Updated request array.
     */
    protected function filter_request_data($request)
    {
    }
    /**
     * If variations are set, validate and format the values ready to add to the cart.
     *
     * @throws RestException Exception if invalid data is detected.
     *
     * @param array $request Add to cart request params.
     * @return array Updated request array.
     */
    protected function parse_variation_data($request)
    {
    }
    /**
     * Try to match request data to a variation ID and return the ID.
     *
     * @throws RestException Exception if variation cannot be found.
     *
     * @param array       $request Add to cart request params.
     * @param \WC_Product $product Product being added to the cart.
     * @return int Matching variation ID.
     */
    protected function get_variation_id_from_variation_data($request, $product)
    {
    }
    /**
     * Format and sanitize variation data posted to the API.
     *
     * Labels are converted to names (e.g. Size to pa_size), and values are cleaned.
     *
     * @throws RestException Exception if variation cannot be found.
     *
     * @param array $variation_data Key value pairs of attributes and values.
     * @param array $variable_product_attributes Product attributes we're expecting.
     * @return array
     */
    protected function sanitize_variation_data($variation_data, $variable_product_attributes)
    {
    }
    /**
     * Get product attributes from the variable product (which may be the parent if the product object is a variation).
     *
     * @throws RestException Exception if product is invalid.
     *
     * @param \WC_Product $product Product being added to the cart.
     * @return array
     */
    protected function get_variable_product_attributes($product)
    {
    }
}