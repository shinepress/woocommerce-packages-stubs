<?php

namespace Automattic\WooCommerce\Blocks\Templates;

/**
 * OrderConfirmationTemplate class.
 *
 * @internal
 */
class OrderConfirmationTemplate extends \Automattic\WooCommerce\Blocks\Templates\AbstractPageTemplate
{
    /**
     * Template slug.
     *
     * @return string
     */
    public static function get_slug()
    {
    }
    /**
     * Returns the page object assigned to this template/page.
     *
     * @return \WP_Post|null Post object or null.
     */
    public static function get_placeholder_page()
    {
    }
    /**
     * True when viewing the Order Received endpoint.
     *
     * @return boolean
     */
    protected function is_active_template()
    {
    }
    /**
     * Should return the title of the page.
     *
     * @return string
     */
    public static function get_template_title()
    {
    }
}