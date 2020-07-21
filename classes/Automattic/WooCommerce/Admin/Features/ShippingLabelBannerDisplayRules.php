<?php

namespace Automattic\WooCommerce\Admin\Features;

/**
 * Determines whether or not the Shipping Label Banner should be displayed
 */
class ShippingLabelBannerDisplayRules
{
    /**
     * Holds the installed Jetpack version.
     *
     * @var string
     */
    private $jetpack_version;
    /**
     * Whether or not the installed Jetpack is connected.
     *
     * @var bool
     */
    private $jetpack_connected;
    /**
     * Holds the installed WooCommerce Services version.
     *
     * @var string
     */
    private $wcs_version;
    /**
     * Whether or not there're plugins installed incompatible with the banner.
     *
     * @var bool
     */
    private $no_incompatible_plugins_installed;
    /**
     * Whether or not the WooCommerce Services ToS has been accepted.
     *
     * @var bool
     */
    private $wcs_tos_accepted;
    /**
     * Minimum supported Jetpack version.
     *
     * @var string
     */
    private $min_jetpack_version = '4.4';
    /**
     * Minimum supported WooCommerce Services version.
     *
     * @var string
     */
    private $min_wcs_version = '1.22.5';
    /**
     * Supported countries by USPS, see: https://webpmt.usps.gov/pmt010.cfm
     *
     * @var array
     */
    private $supported_countries = array('US', 'AS', 'PR', 'VI', 'GU', 'MP', 'UM', 'FM', 'MH');
    /**
     * Array of supported currency codes.
     *
     * @var array
     */
    private $supported_currencies = array('USD');
    /**
     * Constructor.
     *
     * @param string $jetpack_version Installed Jetpack version to check.
     * @param bool   $jetpack_connected Is Jetpack connected?.
     * @param string $wcs_version Installed WooCommerce Services version to check.
     * @param bool   $wcs_tos_accepted WooCommerce Services Terms of Service accepted?.
     * @param bool   $incompatible_plugins_installed Are there any incompatible plugins installed?.
     */
    public function __construct($jetpack_version, $jetpack_connected, $wcs_version, $wcs_tos_accepted, $incompatible_plugins_installed)
    {
    }
    /**
     * Determines whether banner is eligible for display (does not include a/b logic).
     */
    public function should_display_banner()
    {
    }
    /**
     * Checks if the banner was not dismissed by the user.
     *
     * @return bool
     */
    private function banner_not_dismissed()
    {
    }
    /**
     * Checks if jetpack is installed and active.
     *
     * @return bool
     */
    private function jetpack_installed_and_active()
    {
    }
    /**
     * Checks if Jetpack version is supported.
     *
     * @return bool
     */
    private function jetpack_up_to_date()
    {
    }
    /**
     * Checks if there's a shippable product in the current order.
     *
     * @return bool
     */
    private function order_has_shippable_products()
    {
    }
    /**
     * Checks if the store is in the US and has its default currency set to USD.
     *
     * @return bool
     */
    private function store_in_us_and_usd()
    {
    }
    /**
     * Checks if WooCommerce Services is not installed.
     *
     * @return bool
     */
    private function wcs_not_installed()
    {
    }
    /**
     * Checks if WooCommerce Services is up to date.
     */
    private function wcs_up_to_date()
    {
    }
}