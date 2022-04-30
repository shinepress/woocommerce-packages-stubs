<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * Onboarding Tasks Controller.
 *
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
     * Duration to milisecond mapping.
     *
     * @var string
     */
    protected $duration_to_ms = array('day' => DAY_IN_SECONDS * 1000, 'hour' => HOUR_IN_SECONDS * 1000, 'week' => WEEK_IN_SECONDS * 1000);
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
    public function create_products_permission_check($request)
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
     * Check if a given request has access to get onboarding tasks status.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_status_permission_check($request)
    {
    }
    /**
     * Check if a given request has access to manage woocommerce.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_tasks_permission_check($request)
    {
    }
    /**
     * Check if a given request has access to manage woocommerce.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function snooze_task_permissions_check($request)
    {
    }
    /**
     * Import sample products from given CSV path.
     *
     * @param  string $csv_file CSV file path.
     * @return WP_Error|WP_REST_Response
     */
    public static function import_sample_products_from_csv($csv_file)
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
     * Creates a product from a template name passed in through the template_name param.
     *
     * @param WP_REST_Request $request Request data.
     * @return WP_REST_Response|WP_Error
     */
    public static function create_product_from_template($request)
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
     * Create a homepage from a template.
     *
     * @return WP_Error|array
     */
    public static function create_homepage()
    {
    }
    /**
     * Get the status endpoint schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_status_item_schema()
    {
    }
    /**
     * Get various onboarding task statuses.
     *
     * @return WP_Error|array
     */
    public function get_status()
    {
    }
    /**
     * Get the onboarding tasks.
     *
     * @return WP_REST_Response|WP_Error
     */
    public function get_tasks()
    {
    }
    /**
     * Dismiss a single task.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Request|WP_Error
     */
    public function dismiss_task($request)
    {
    }
    /**
     * Undo dismissal of a single task.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Request|WP_Error
     */
    public function undo_dismiss_task($request)
    {
    }
    /**
     * Snooze an onboarding task.
     *
     * @param WP_REST_Request $request Request data.
     *
     * @return WP_REST_Response|WP_Error
     */
    public function snooze_task($request)
    {
    }
    /**
     * Undo snooze of a single task.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Request|WP_Error
     */
    public function undo_snooze_task($request)
    {
    }
}