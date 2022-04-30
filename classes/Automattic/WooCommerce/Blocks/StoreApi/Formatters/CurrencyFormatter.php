<?php

namespace Automattic\WooCommerce\Blocks\StoreApi\Formatters;

/**
 * Currency Formatter.
 *
 * Formats an array of monetary values by inserting currency data.
 *
 * @internal This API is used internally by Blocks--it is still in flux and may be subject to revisions.
 */
class CurrencyFormatter implements \Automattic\WooCommerce\Blocks\StoreApi\Formatters\FormatterInterface
{
    /**
     * Format a given value and return the result.
     *
     * @param array $value Value to format.
     * @param array $options Options that influence the formatting.
     * @return array
     */
    public function format($value, array $options = [])
    {
    }
}