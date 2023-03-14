<?php

namespace Automattic\WooCommerce\Blocks;

/**
 * Registers patterns under the `./patterns/` directory.
 * Each pattern is defined as a PHP file and defines its metadata using plugin-style headers.
 * The minimum required definition is:
 *
 *     /**
 *      * Title: My Pattern
 *      * Slug: my-theme/my-pattern
 *      *
 *
 * The output of the PHP source corresponds to the content of the pattern, e.g.:
 *
 *     <main><p><?php echo "Hello"; ?></p></main>
 *
 * Other settable fields include:
 *
 *   - Description
 *   - Viewport Width
 *   - Categories       (comma-separated values)
 *   - Keywords         (comma-separated values)
 *   - Block Types      (comma-separated values)
 *   - Inserter         (yes/no)
 *
 * @internal
 */
class BlockPatterns
{
    const SLUG_REGEX = '/^[A-z0-9\/_-]+$/';
    const COMMA_SEPARATED_REGEX = '/[\s,]+/';
    /**
     * Path to the patterns directory.
     *
     * @var string $patterns_path
     */
    private $patterns_path;
    /**
     * Constructor for class
     *
     * @param Package $package An instance of Package.
     */
    public function __construct(\Automattic\WooCommerce\Blocks\Domain\Package $package)
    {
    }
    /**
     * Registers the block patterns and categories under `./patterns/`.
     */
    public function register_block_patterns()
    {
    }
}