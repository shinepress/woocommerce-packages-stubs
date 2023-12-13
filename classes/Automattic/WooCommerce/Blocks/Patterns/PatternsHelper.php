<?php

namespace Automattic\WooCommerce\Blocks\Patterns;

/**
 * Pattern Images Helper class.
 */
class PatternsHelper
{
    /**
     * Returns the pattern content.
     *
     * @param string $pattern_slug The pattern slug.
     *
     * @return array The pattern content.
     */
    public static function get_pattern_content(string $pattern_slug)
    {
    }
    /**
     * Returns the pattern images.
     *
     * @param string $pattern_slug The pattern slug.
     *
     * @return array The pattern images.
     */
    public static function get_pattern_images(string $pattern_slug): array
    {
    }
    /**
     * Returns the image for the given pattern.
     *
     * @param array  $images The array of images.
     * @param int    $index The index of the image to return.
     * @param string $default_image The default image to return.
     *
     * @return string The image.
     */
    public static function get_image_url(array $images, int $index, string $default_image): string
    {
    }
    /**
     * Returns the post that has the generated data by the AI for the patterns.
     *
     * @return WP_Post|null
     */
    public static function get_patterns_ai_data_post()
    {
    }
    /**
     * Upsert the patterns AI data.
     *
     * @param array $patterns_dictionary The patterns dictionary.
     *
     * @return WP_Error|null
     */
    public static function upsert_patterns_ai_data_post($patterns_dictionary)
    {
    }
    /**
     * Get the Patterns Dictionary.
     *
     * @param string|null $pattern_slug The pattern slug.
     *
     * @return mixed|WP_Error|null
     */
    public static function get_patterns_dictionary($pattern_slug = null)
    {
    }
}