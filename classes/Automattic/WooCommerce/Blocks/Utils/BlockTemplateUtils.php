<?php

namespace Automattic\WooCommerce\Blocks\Utils;

/**
 * BlockTemplateUtils class used for serving block templates from Woo Blocks.
 * IMPORTANT: These methods have been duplicated from Gutenberg/lib/full-site-editing/block-templates.php as those functions are not for public usage.
 */
class BlockTemplateUtils
{
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
}