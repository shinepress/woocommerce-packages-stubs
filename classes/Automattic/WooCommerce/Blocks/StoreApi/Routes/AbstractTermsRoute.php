<?php

namespace Automattic\WooCommerce\Blocks\StoreApi\Routes;

/**
 * AbstractTermsRoute class.
 *
 * @internal This API is used internally by Blocks--it is still in flux and may be subject to revisions.
 */
abstract class AbstractTermsRoute extends \Automattic\WooCommerce\Blocks\StoreApi\Routes\AbstractRoute
{
    /**
     * Get the query params for collections of attributes.
     *
     * @return array
     */
    public function get_collection_params()
    {
    }
    /**
     * Get terms matching passed in args.
     *
     * @param string           $taxonomy Taxonomy to get terms from.
     * @param \WP_REST_Request $request Request object.
     *
     * @return \WP_REST_Response
     */
    protected function get_terms_response($taxonomy, $request)
    {
    }
    /**
     * Get count of terms for current query.
     *
     * @param string $taxonomy Taxonomy to get terms from.
     * @param array  $args Array of args to pass to wp_count_terms.
     * @return int
     */
    protected function get_term_count($taxonomy, $args)
    {
    }
}