<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * REST API Admin Note Action controller class.
 *
 * @package WooCommerce/API
 * @extends WC_REST_CRUD_Controller
 */
class NoteActions extends \Automattic\WooCommerce\Admin\API\Notes
{
    /**
     * Register the routes for admin notes.
     */
    public function register_routes()
    {
    }
    /**
     * Trigger a note action.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Request|WP_Error
     */
    public function trigger_note_action($request)
    {
    }
    /**
     * Get screen name.
     *
     * @return string The screen name.
     */
    public function get_screen_name()
    {
    }
}