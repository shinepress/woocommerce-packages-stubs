<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * Onboarding Tasks Controller.
 *
 * @package WooCommerce Admin/API
 * @extends WC_REST_Data_Controller
 */
class OnboardingTasks extends \WC_REST_Data_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc-admin';
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'onboarding/tasks';
    /**
     * Register routes.
     */
    public function register_routes()
    {
    }
    /**
     * Check if a given request has access to create a product.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function import_products_permission_check($request)
    {
    }
    /**
     * Check if a given request has access to create a product.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function create_pages_permission_check($request)
    {
    }
    /**
     * Import sample products from WooCommerce sample CSV.
     *
     * @return WP_Error|WP_REST_Response
     */
    public static function import_sample_products()
    {
    }
    /**
     * Get header mappings from CSV columns.
     *
     * @param string $file File path.
     * @return array Mapped headers.
     */
    public static function get_header_mappings($file)
    {
    }
    /**
     * Sanitize special column name regex.
     *
     * @param  string $value Raw special column name.
     * @return string
     */
    public static function sanitize_special_column_name_regex($value)
    {
    }
    /**
     * Returns a valid cover block with an image, if one exists, or background as a fallback.
     *
     * @param  array $image Image to use for the cover block. Should contain a media ID and image URL.
     * @return string Block content.
     */
    private static function get_homepage_cover_block($image)
    {
    }
    /**
     * Returns a valid media block with an image, if one exists, or a uninitialized media block the user can set.
     *
     * @param  array  $image Image to use for the cover block. Should contain a media ID and image URL.
     * @param  string $align If the image should be aligned to the left or right.
     * @return string Block content.
     */
    private static function get_homepage_media_block($image, $align = 'left')
    {
    }
    /**
     * Returns a homepage template to be inserted into a post. A different template will be used depending on the number of products.
     *
     * @param int $post_id ID of the homepage template.
     * @return string Template contents.
     */
    private static function get_homepage_template($post_id)
    {
    }
    /**
     * Gets the possible industry images from the plugin folder for sideloading. If an image doesn't exist, other.jpg is used a fallback.
     *
     * @return array An array of images by industry.
     */
    private static function get_available_homepage_images()
    {
    }
    /**
     * Uploads a number of images to a homepage template, depending on the selected industry from the profile wizard.
     *
     * @param  int $post_id ID of the homepage template.
     * @param  int $number_of_images The number of images that should be sideloaded (depending on how many media slots are in the template).
     * @return array An array of images that have been attached to the post.
     */
    private static function sideload_homepage_images($post_id, $number_of_images)
    {
    }
    /**
     * Creates base store starter pages like my account and checkout.
     * Note that WC_Install::create_pages already checks if pages exist before creating them again.
     *
     * @return bool
     */
    public static function create_store_pages()
    {
    }
    /**
     * Create a homepage from a template.
     *
     * @return WP_Error|array
     */
    public static function create_homepage()
    {
    }
}