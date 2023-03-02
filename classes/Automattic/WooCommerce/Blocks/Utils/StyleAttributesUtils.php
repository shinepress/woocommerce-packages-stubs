<?php

namespace Automattic\WooCommerce\Blocks\Utils;

/**
 * StyleAttributesUtils class used for getting class and style from attributes.
 */
class StyleAttributesUtils
{
    /**
     * Get class and style for font-size from attributes.
     *
     * @param array $attributes Block attributes.
     *
     * @return (array | null)
     */
    public static function get_font_size_class_and_style($attributes)
    {
    }
    /**
     * Get class and style for font-weight from attributes.
     *
     * @param array $attributes Block attributes.
     *
     * @return (array | null)
     */
    public static function get_font_weight_class_and_style($attributes)
    {
    }
    /**
     * Get class and style for font-style from attributes.
     *
     * @param array $attributes Block attributes.
     *
     * @return (array | null)
     */
    public static function get_font_style_class_and_style($attributes)
    {
    }
    /**
     * Get class and style for font-family from attributes.
     *
     * @param array $attributes Block attributes.
     *
     * @return (array | null)
     */
    public static function get_font_family_class_and_style($attributes)
    {
    }
    /**
     * Get class and style for text-color from attributes.
     *
     * @param array $attributes Block attributes.
     *
     * @return (array | null)
     */
    public static function get_text_color_class_and_style($attributes)
    {
    }
    /**
     * Get class and style for link-color from attributes.
     *
     * @param array $attributes Block attributes.
     *
     * @return (array | null)
     */
    public static function get_link_color_class_and_style($attributes)
    {
    }
    /**
     * Get class and style for line height from attributes.
     *
     * @param array $attributes Block attributes.
     *
     * @return (array | null)
     */
    public static function get_line_height_class_and_style($attributes)
    {
    }
    /**
     * Get class and style for background-color from attributes.
     *
     * @param array $attributes Block attributes.
     *
     * @return (array | null)
     */
    public static function get_background_color_class_and_style($attributes)
    {
    }
    /**
     * Get class and style for border-color from attributes.
     *
     * Data passed to this function is not always consistent. It can be:
     * Linked - preset color: $attributes['borderColor'] => 'luminous-vivid-orange'.
     * Linked - custom color: $attributes['style']['border']['color'] => '#681228'.
     * Unlinked - preset color: $attributes['style']['border']['top']['color'] => 'var:preset|color|luminous-vivid-orange'
     * Unlinked - custom color: $attributes['style']['border']['top']['color'] => '#681228'.
     *
     * @param array $attributes Block attributes.
     *
     * @return (array | null)
     */
    public static function get_border_color_class_and_style($attributes)
    {
    }
    /**
     * Get class and style for border-radius from attributes.
     *
     * @param array $attributes Block attributes.
     *
     * @return (array | null)
     */
    public static function get_border_radius_class_and_style($attributes)
    {
    }
    /**
     * Get class and style for border width from attributes.
     *
     * @param array $attributes Block attributes.
     *
     * @return (array | null)
     */
    public static function get_border_width_class_and_style($attributes)
    {
    }
    /**
     * Get class and style for align from attributes.
     *
     * @param array $attributes Block attributes.
     *
     * @return (array | null)
     */
    public static function get_align_class_and_style($attributes)
    {
    }
    /**
     * Get class and style for text align from attributes.
     *
     * @param array $attributes Block attributes.
     *
     * @return (array | null)
     */
    public static function get_text_align_class_and_style($attributes)
    {
    }
    /**
     * If spacing value is in preset format, convert it to a CSS var. Else return same value
     * For example:
     * "var:preset|spacing|50" -> "var(--wp--preset--spacing--50)"
     * "50px" -> "50px"
     *
     * @param string $spacing_value value to be processed.
     *
     * @return (string)
     */
    public static function get_spacing_value($spacing_value)
    {
    }
    /**
     * Get class and style for padding from attributes.
     *
     * @param array $attributes Block attributes.
     *
     * @return (array | null)
     */
    public static function get_padding_class_and_style($attributes)
    {
    }
    /**
     * Get class and style for margin from attributes.
     *
     * @param array $attributes Block attributes.
     *
     * @return (array | null)
     */
    public static function get_margin_class_and_style($attributes)
    {
    }
    /**
     * Get classes and styles from attributes.
     *
     * @param array $attributes Block attributes.
     * @param array $properties Properties to get classes/styles from.
     *
     * @return array
     */
    public static function get_classes_and_styles_by_attributes($attributes, $properties = array())
    {
    }
    /**
     * Get space-separated classes from block attributes.
     *
     * @param array $attributes Block attributes.
     * @param array $properties Properties to get classes from.
     *
     * @return string Space-separated classes.
     */
    public static function get_classes_by_attributes($attributes, $properties = array())
    {
    }
    /**
     * Get space-separated style rules from block attributes.
     *
     * @param array $attributes Block attributes.
     * @param array $properties Properties to get styles from.
     *
     * @return string Space-separated style rules.
     */
    public static function get_styles_by_attributes($attributes, $properties = array())
    {
    }
    /**
     * Get CSS value for color preset.
     *
     * @param string $preset_name Preset name.
     *
     * @return string CSS value for color preset.
     */
    public static function get_preset_value($preset_name)
    {
    }
    /**
     * If color value is in preset format, convert it to a CSS var. Else return same value
     * For example:
     * "var:preset|color|pale-pink" -> "var(--wp--preset--color--pale-pink)"
     * "#98b66e" -> "#98b66e"
     *
     * @param string $color_value value to be processed.
     *
     * @return (string)
     */
    public static function get_color_value($color_value)
    {
    }
}