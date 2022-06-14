<?php

namespace Automattic\WooCommerce\Blocks\Templates;

/**
 * ProductSearchResultsTemplate class.
 *
 * @internal
 */
class ProductSearchResultsTemplate
{
    const SLUG = 'product-search-results';
    const TITLE = 'Product Search Results';
    const DESCRIPTION = 'Template used to display search results for products.';
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Initialization method.
     */
    protected function init()
    {
    }
    /**
     * When the search is for products and a block theme is active, render the Product Search Template.
     *
     * @param array $templates Templates that match the search hierarchy.
     */
    public function update_search_template_hierarchy($templates)
    {
    }
    /**
     * Update Product Search Template info.
     *
     * @param array $templates List of templates.
     */
    public function set_template_info($templates)
    {
    }
}