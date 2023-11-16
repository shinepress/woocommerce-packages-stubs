<?php

namespace Automattic\WooCommerce\Blocks\Patterns;

/**
 * Pattern Images class.
 */
class PatternUpdater
{
    /**
     * The patterns content option name.
     */
    const WC_BLOCKS_PATTERNS_CONTENT = 'wc_blocks_patterns_content';
    /**
     * Creates the patterns content for the given vertical.
     *
     * @param Connection      $ai_connection The AI connection.
     * @param string|WP_Error $token The JWT token.
     * @param array|WP_Error  $images The array of images.
     * @param string          $business_description The business description.
     *
     * @return bool|WP_Error
     */
    public function generate_content($ai_connection, $token, $images, $business_description)
    {
    }
    /**
     * Returns the patterns with images.
     *
     * @param array $selected_images The array of images.
     *
     * @return array|WP_Error The patterns with images.
     */
    private function get_patterns_with_images($selected_images)
    {
    }
    /**
     * Returns the patterns with AI generated content.
     *
     * @param Connection      $ai_connection The AI connection.
     * @param string|WP_Error $token The JWT token.
     * @param array           $patterns The array of patterns.
     * @param string          $business_description The business description.
     *
     * @return array|WP_Error The patterns with AI generated content.
     */
    private function get_patterns_with_content($ai_connection, $token, $patterns, $business_description)
    {
    }
    /**
     * Get the Patterns Dictionary.
     *
     * @return mixed|WP_Error|null
     */
    private function get_patterns_dictionary()
    {
    }
    /**
     * Returns whether the pattern has images.
     *
     * @param array $pattern The array representing the pattern.
     *
     * @return bool True if the pattern has images, false otherwise.
     */
    private function pattern_has_images(array $pattern): bool
    {
    }
    /**
     * Returns the images for the given pattern.
     *
     * @param array $pattern         The array representing the pattern.
     * @param array $selected_images The array of images.
     *
     * @return array An array containing an array of the images in the first position and their alts in the second.
     */
    private function get_images_for_pattern(array $pattern, array $selected_images): array
    {
    }
    /**
     * Returns the selected image format. Defaults to landscape.
     *
     * @param array $selected_image The selected image to be assigned to the pattern.
     *
     * @return string The selected image format.
     */
    private function get_selected_image_format($selected_image)
    {
    }
}