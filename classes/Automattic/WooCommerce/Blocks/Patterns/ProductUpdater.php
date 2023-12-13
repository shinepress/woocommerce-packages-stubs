<?php

namespace Automattic\WooCommerce\Blocks\Patterns;

/**
 * Pattern Images class.
 */
class ProductUpdater
{
    /**
     * Generate AI content and assign AI-managed images to Products.
     *
     * @param Connection $ai_connection The AI connection.
     * @param string     $token The JWT token.
     * @param array      $images The array of images.
     * @param string     $business_description The business description.
     *
     * @return array|WP_Error The generated content for the products. An error if the content could not be generated.
     */
    public function generate_content($ai_connection, $token, $images, $business_description)
    {
    }
    /**
     * Return all dummy products that were not modified by the store owner.
     *
     * @return array|WP_Error An array with the dummy products that need to have their content updated by AI.
     */
    public function fetch_dummy_products_to_update()
    {
    }
    /**
     * Verify if the dummy product should have its content generated and managed by AI.
     *
     * @param \WC_Product $dummy_product The dummy product.
     *
     * @return bool
     */
    public function should_update_dummy_product($dummy_product): bool
    {
    }
    /**
     * Creates a new product and assigns the _headstart_post meta to it.
     *
     * @return bool|int
     */
    public function create_new_product()
    {
    }
    /**
     * Return all existing products that have the _headstart_post meta assigned to them.
     *
     * @param string $type The type of products to fetch.
     *
     * @return array
     */
    public function fetch_product_ids($type = 'user_created')
    {
    }
    /**
     * Return the hash for a product based on its name, description and image_id.
     *
     * @param \WC_Product $product The product.
     *
     * @return false|string
     */
    public function get_hash_for_product($product)
    {
    }
    /**
     * Return the hash for a product that had its content AI-generated.
     *
     * @param \WC_Product $product The product.
     *
     * @return false|mixed
     */
    public function get_hash_for_ai_modified_product($product)
    {
    }
    /**
     * Create a hash with the AI-generated content and save it as a meta for the product.
     *
     * @param \WC_Product $product The product.
     *
     * @return bool|int
     */
    public function create_hash_for_ai_modified_product($product)
    {
    }
    /**
     * Update the product content with the AI-generated content.
     *
     * @param \WC_Product $product The product.
     * @param array       $ai_generated_product_content The AI-generated content.
     *
     * @return string|void
     */
    public function update_product_content($product, $ai_generated_product_content)
    {
    }
    /**
     * Assigns the default content for the products.
     *
     * @param array $ai_selected_products_images The images information.
     *
     * @return array[]
     */
    public function assign_ai_selected_images_to_dummy_products_information_list($ai_selected_products_images)
    {
    }
    /**
     * Get the images information.
     *
     * @param array $images The array of images.
     *
     * @return array
     */
    public function get_images_information($images)
    {
    }
    /**
     * Generate the product content.
     *
     * @param Connection $ai_connection The AI connection.
     * @param string     $token The JWT token.
     * @param array      $products_default_content The default content for the products.
     *
     * @return array|int|string|\WP_Error
     */
    public function generate_product_content($ai_connection, $token, $products_default_content)
    {
    }
}