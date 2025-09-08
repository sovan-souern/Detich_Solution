<?php

/**
 * shopmighty: Block Patterns
 *
 * @since shopmighty 1.0.0
 */

/**
 * Registers pattern categories for shopmighty
 *
 * @since shopmighty 1.0.0
 *
 * @return void
 */
function shopmighty_register_pattern_category()
{
	$block_pattern_categories = array(
		'shopmighty' => array('label' => __('Shopmighty Sections', 'shopmighty')),
		'shopmighty-homes' => array('label' => __('Homepage Templates', 'shopmighty')),
	);

	$block_pattern_categories = apply_filters('shopmighty_block_pattern_categories', $block_pattern_categories);

	foreach ($block_pattern_categories as $name => $properties) {
		if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
			register_block_pattern_category($name, $properties); // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		}
	}
}
add_action('init', 'shopmighty_register_pattern_category', 9);
