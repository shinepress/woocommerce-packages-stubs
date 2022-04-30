<?php

namespace Automattic\WooCommerce\Blocks;

/**
 * BlockTypesController class.
 *
 * @internal
 */
class BlockTemplatesController
{
    /**
     * Holds the path for the directory where the block templates will be kept.
     *
     * @var string
     */
    private $templates_directory;
    /**
     * Holds the path for the directory where the block template parts will be kept.
     *
     * @var string
     */
    private $template_parts_directory;
    /**
     * Directory which contains all templates
     *
     * @var string
     */
    const TEMPLATES_ROOT_DIR = 'templates';
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
     * This function checks if there's a blocks template (ultimately it resolves either a saved blocks template from the
     * database or a template file in `woo-gutenberg-products-block/templates/templates/`)
     * to return to pre_get_posts short-circuiting the query in Gutenberg.
     *
     * @param \WP_Block_Template|null $template Return a block template object to short-circuit the default query,
     *                                               or null to allow WP to run its normal queries.
     * @param string                  $id Template unique identifier (example: theme_slug//template_slug).
     * @param array                   $template_type wp_template or wp_template_part.
     *
     * @return mixed|\WP_Block_Template|\WP_Error
     */
    public function maybe_return_blocks_template($template, $id, $template_type)
    {
    }
    /**
     * Runs on the get_block_template hook. If a template is already found and passed to this function, then return it
     * and don't run.
     * If a template is *not* passed, try to look for one that matches the ID in the database, if that's not found defer
     * to Blocks templates files. Priority goes: DB-Theme, DB-Blocks, Filesystem-Theme, Filesystem-Blocks.
     *
     * @param \WP_Block_Template $template The found block template.
     * @param string             $id Template unique identifier (example: theme_slug//template_slug).
     * @param array              $template_type wp_template or wp_template_part.
     *
     * @return mixed|null
     */
    public function get_single_block_template($template, $id, $template_type)
    {
    }
    /**
     * Add the block template objects to be used.
     *
     * @param array $query_result Array of template objects.
     * @param array $query Optional. Arguments to retrieve templates.
     * @param array $template_type wp_template or wp_template_part.
     * @return array
     */
    public function add_block_templates($query_result, $query, $template_type)
    {
    }
    /**
     * Removes templates that were added to a theme's block-templates directory, but already had a customised version saved in the database.
     *
     * @param \WP_Block_Template[]|\stdClass[] $templates List of templates to run the filter on.
     *
     * @return array List of templates with duplicates removed. The customised alternative is preferred over the theme default.
     */
    public function remove_theme_templates_with_custom_alternative($templates)
    {
    }
    /**
     * Gets the templates saved in the database.
     *
     * @param array $slugs An array of slugs to retrieve templates for.
     * @param array $template_type wp_template or wp_template_part.
     *
     * @return int[]|\WP_Post[] An array of found templates.
     */
    public function get_block_templates_from_db($slugs = array(), $template_type = 'wp_template')
    {
    }
    /**
     * Gets the templates from the WooCommerce blocks directory, skipping those for which a template already exists
     * in the theme directory.
     *
     * @param string[] $slugs An array of slugs to filter templates by. Templates whose slug does not match will not be returned.
     * @param array    $already_found_templates Templates that have already been found, these are customised templates that are loaded from the database.
     * @param string   $template_type wp_template or wp_template_part.
     *
     * @return array Templates from the WooCommerce blocks plugin directory.
     */
    public function get_block_templates_from_woocommerce($slugs, $already_found_templates, $template_type = 'wp_template')
    {
    }
    /**
     * Get and build the block template objects from the block template files.
     *
     * @param array $slugs An array of slugs to retrieve templates for.
     * @param array $template_type wp_template or wp_template_part.
     *
     * @return array WP_Block_Template[] An array of block template objects.
     */
    public function get_block_templates($slugs = array(), $template_type = 'wp_template')
    {
    }
    /**
     * Gets the directory where templates of a specific template type can be found.
     *
     * @param array $template_type wp_template or wp_template_part.
     *
     * @return string
     */
    protected function get_templates_directory($template_type = 'wp_template')
    {
    }
    /**
     * Checks whether a block template with that name exists in Woo Blocks
     *
     * @param string $template_name Template to check.
     * @param array  $template_type wp_template or wp_template_part.
     *
     * @return boolean
     */
    public function block_template_is_available($template_name, $template_type = 'wp_template')
    {
    }
    /**
     * Renders the default block template from Woo Blocks if no theme templates exist.
     */
    public function render_block_template()
    {
    }
}