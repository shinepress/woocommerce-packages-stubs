<?php

namespace Automattic\WooCommerce\Blocks\StoreApi;

/**
 * SchemaController class.
 *
 * @internal This API is used internally by Blocks--it is still in flux and may be subject to revisions.
 */
class SchemaController
{
    /**
     * Stores schema class instances.
     *
     * @var AbstractSchema[]
     */
    protected $schemas = [];
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Get a schema class instance.
     *
     * @throws Exception If the schema does not exist.
     *
     * @param string $name Name of schema.
     * @return AbstractSchema
     */
    public function get($name)
    {
    }
    /**
     * Load schema class instances.
     */
    protected function initialize()
    {
    }
}