<?php

// TODO: Register custom block category, change "PHMU" to customer name
function phmu_starter_wp_theme_custom_block_category( $categories, $post )
{
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'phmu-blocks',
				'title' => __( 'PHMU Blocks', 'phmu-blocks' ),
			),
		)
	);
}
add_filter( 'block_categories', 'phmu_starter_wp_theme_custom_block_category', 10, 2);

add_action('acf/init', 'acf_blocks_init');
function acf_blocks_init()
{

	// Check function exists.
	if (function_exists('acf_register_block_type')) {

		// Testimonial
		acf_register_block_type(array(
			'name'              => 'testimonial',
			'title'             => __('Testimonial'),
			'description'       => __('A simple testimonial block'),
			'render_template'   => 'template-parts/acf-blocks/testimonial.php',
			'category'          => 'phmu-blocks',
			'mode'              => 'edit',
		));

		// Team section
		acf_register_block_type(array(
			'name'              => 'team-section',
			'title'             => __('Team section'),
			'description'       => __('A simple team section'),
			'render_template'   => 'template-parts/acf-blocks/team-section.php',
			'category'          => 'phmu-blocks',
			'mode'              => 'edit',
		));

		// CTA section
		acf_register_block_type(array(
			'name'              => 'cta-section',
			'title'             => __('CTA section'),
			'description'       => __('A simple CTA section'),
			'render_template'   => 'template-parts/acf-blocks/cta-section.php',
			'category'          => 'phmu-blocks',
			'mode'              => 'edit',
		));

		// Blog section
		acf_register_block_type(array(
			'name'              => 'blog-section',
			'title'             => __('Blog section'),
			'description'       => __('A simple blog section'),
			'render_template'   => 'template-parts/acf-blocks/blog-section.php',
			'category'          => 'phmu-blocks',
			'mode'              => 'edit',
		));

		// Logo cloud
		acf_register_block_type(array(
			'name'              => 'logo-cloud',
			'title'             => __('Logo cloud'),
			'description'       => __('A simple logo cloud'),
			'render_template'   => 'template-parts/acf-blocks/logo-cloud.php',
			'category'          => 'phmu-blocks',
			'mode'              => 'edit',
		));
	}
}