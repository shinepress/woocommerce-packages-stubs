<?php

namespace Automattic\WooCommerce\Admin\Overrides;

/**
 * Admin\Overrides\ThemeUpgraderSkin Class.
 */
class ThemeUpgraderSkin extends \Theme_Upgrader_Skin
{
    /**
     * Hide the skin header display.
     */
    public function header()
    {
    }
    /**
     * Hide the skin footer display.
     */
    public function footer()
    {
    }
    /**
     * Hide the skin feedback display.
     *
     * @param string $string String to display.
     */
    public function feedback($string, ...$args)
    {
    }
    /**
     * Hide the skin after display.
     */
    public function after()
    {
    }
}