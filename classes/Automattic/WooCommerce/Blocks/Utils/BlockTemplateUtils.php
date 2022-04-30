<?php

namespace Automattic\WooCommerce\Blocks\Utils;

/**
 * BlockTemplateUtils class used for serving block templates from Woo Blocks.
 * IMPORTANT: These methods have been duplicated from Gutenberg/lib/full-site-editing/block-templates.php as those functions are not for public usage.
 */
class BlockTemplateUtils
{
    /**
     * Directory names for block templates
     *
     * Directory names conventions for block templates have changed with Gutenberg 12.1.0,
     * however, for backwards-compatibility, we also keep the older conventions, prefixed
     * with `DEPRECATED_`.
     *
     * @var array {
     *     @var string DEPRECATED_TEMPLATES  Old directory name of the block templates directory.
     *     @var string DEPRECATED_TEMPLATE_PARTS  Old directory name of the block template parts directory.
     *     @var string TEMPLATES_DIR_NAME  Directory name of the block templates directory.
     *     @var string TEMPLATE_PARTS_DIR_NAME  Directory name of the block template parts directory.
     * }
     */
    const DIRECTORY_NAMES = array('DEPRECATED_TEMPLATES' => 'block-templates', 'DEPRECATED_TEMPLATE_PARTS' => 'block-template-parts', 'TEMPLATES' => 'templates', 'TEMPLATE_PARTS' => 'parts');
    /**
     * WooCommerce plugin slug
     *
     * This is used to save templates to the DB which are stored against this value in the wp_terms table.
     *
     * @var string
     */
    const PLUGIN_SLUG = 'woocommerce/woocommerce';
    /**
     * Returns an array containing the references of
     * the passed blocks and their inner blocks.
     *
     * @param array $blocks array of blocks.
     *
     * @return array block references to the passed blocks and their inner blocks.
     */
    public static function gutenberg_flatten_blocks(&$blocks)
    {
    }
    /**
     * Parses wp_template content and injects the current theme's
     * stylesheet as a theme attribute into each wp_template_part
     *
     * @param string $template_content serialized wp_template content.
     *
     * @return string Updated wp_template content.
     */
    public static function gutenberg_inject_theme_attribute_in_content($template_content)
    {
    }
    /**
     * Build a unified template object based a post Object.
     *
     * @param \WP_Post $post Template post.
     *
     * @return \WP_Block_Template|\WP_Error Template.
     */
    public static function gutenberg_build_template_result_from_post($post)
    {
    }
    /**
     * Build a unified template object based on a theme file.
     *
     * @param array $template_file Theme file.
     * @param array $template_type wp_template or wp_template_part.
     *
     * @return \WP_Block_Template Template.
     */
    public static function gutenberg_build_template_result_from_file($template_file, $template_type)
    {
    }
    /**
     * Build a new template object so that we can make Woo Blocks default templates available in the current theme should they not have any.
     *
     * @param string $template_file Block template file path.
     * @param string $template_type wp_template or wp_template_part.
     * @param string $template_slug Block template slug e.g. single-product.
     * @param bool   $template_is_from_theme If the block template file is being loaded from the current theme instead of Woo Blocks.
     *
     * @return object Block template object.
     */
    public static function create_new_block_template_object($template_file, $template_type, $template_slug, $template_is_from_theme = false)
    {
    }
    /**
     * Finds all nested template part file paths in a theme's directory.
     *
     * @param string $base_directory The theme's file path.
     * @return array $path_list A list of paths to all template part files.
     */
    public static function gutenberg_get_template_paths($base_directory)
    {
    }
    /**
     * Converts template slugs into readable titles.
     *
     * @param string $template_slug The templates slug (e.g. single-product).
     * @return string Human friendly title converted from the slug.
     */
    public static function convert_slug_to_title($template_slug)
    {
    }
    /**
     * Converts template paths into a slug
     *
     * @param string $path The template's path.
     * @param string $directory_name The template's directory name.
     * @return string slug
     */
    public static function generate_template_slug_from_path($path, $directory_name = 'block-templates')
    {
    }
    /**
     * Check if the theme has a template. So we know if to load our own in or not.
     *
     * @param string $template_name name of the template file without .html extension e.g. 'single-product'.
     * @return boolean
     */
    public static function theme_has_template($template_name)
    {
    }
    /**
     * Check if the theme has a template. So we know if to load our own in or not.
     *
     * @param string $template_name name of the template file without .html extension e.g. 'single-product'.
     * @return boolean
     */
    public static function theme_has_template_part($template_name)
    {
    }
    /**
     * Checks to see if they are using a compatible version of WP, or if not they have a compatible version of the Gutenberg plugin installed.
     *
     * @return boolean
     */
    public static function supports_block_templates()
    {
    }
}