<?php

namespace Automattic\WooCommerce\Blocks\Images;

/**
 * Pexels API client.
 *
 * @internal
 */
class Pexels
{
    /**
     * The Pexels API endpoint.
     */
    const EXTERNAL_MEDIA_PEXELS_ENDPOINT = '/wpcom/v2/external-media/list/pexels';
    /**
     * Returns the list of images for the given search criteria.
     *
     * @param Connection $ai_connection The AI connection.
     * @param string     $token The JWT token.
     * @param string     $business_description The business description.
     *
     * @return array|\WP_Error Array of images, or WP_Error if the request failed.
     */
    public function get_images($ai_connection, $token, $business_description)
    {
    }
    /**
     * Define the search term to be used on Pexels using the AI endpoint.
     *
     * The search term is a shorter description of the business.
     *
     * @param Connection $ai_connection The AI connection.
     * @param string     $token The JWT token.
     * @param string     $business_description The business description.
     *
     * @return mixed|\WP_Error
     */
    private function define_search_term($ai_connection, $token, $business_description)
    {
    }
    /**
     * Make a request to the Pexels API.
     *
     * @param string $search_term The search term to use.
     * @param int    $per_page The number of images to return.
     *
     * @return array|\WP_Error The response body, or WP_Error if the request failed.
     */
    private function request(string $search_term, int $per_page = 90)
    {
    }
}