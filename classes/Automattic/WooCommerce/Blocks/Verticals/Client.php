<?php

namespace Automattic\WooCommerce\Blocks\Verticals;

/**
 * Verticals API client.
 */
class Client
{
    const ENDPOINT = 'https://public-api.wordpress.com/wpcom/v2/site-verticals';
    /**
     * Make a request to the Verticals API.
     *
     * @param string $url The endpoint URL.
     *
     * @return array|\WP_Error The response body, or WP_Error if the request failed.
     */
    private function request(string $url)
    {
    }
    /**
     * Returns a list of verticals that have images.
     *
     * @return array|\WP_Error Array of verticals, or WP_Error if the request failed.
     */
    public function get_verticals()
    {
    }
    /**
     * Returns the list of images for the given vertical ID.
     *
     * @param int $vertical_id The vertical ID.
     *
     * @return array|\WP_Error Array of images, or WP_Error if the request failed.
     */
    public function get_vertical_images(int $vertical_id)
    {
    }
}