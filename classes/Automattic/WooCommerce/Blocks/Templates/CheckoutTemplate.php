<?php

namespace Automattic\WooCommerce\Blocks\Templates;

/**
 * CheckoutTemplate class.
 *
 * @internal
 */
class CheckoutTemplate extends \Automattic\WooCommerce\Blocks\Templates\AbstractPageTemplate
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
     * Should return the title of the page.
     *
     * @return string
     */
    public static function get_template_title()
    {
    }
    /**
     * True when viewing the checkout page or checkout endpoint.
     *
     * @return boolean
     */
    public function is_active_template()
    {
    }
}