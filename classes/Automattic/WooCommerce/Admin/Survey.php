<?php

namespace Automattic\WooCommerce\Admin;

/**
 * Survey Class.
 */
class Survey
{
    /**
     * Survey URL.
     */
    const SURVEY_URL = 'https://automattic.survey.fm';
    /**
     * Get a survey's URL from a path.
     *
     * @param  string $path Path of the survey.
     * @param  array  $query Query arguments as key value pairs.
     * @return string Full URL to survey.
     */
    public static function get_url($path, $query = array())
    {
    }
}