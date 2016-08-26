<?php

if ( ! function_exists( 'simple_setup' ) ) {
	function simple_setup() {
		global $content_width;
		
		// This theme styles the visual editor with editor-style.css to match the theme style.
		add_editor_style();

		// Add default posts and comments RSS feed links to head
		add_theme_support( 'automatic-feed-links' );

		// Enable support for Post Thumbnails
		add_theme_support( 'post-thumbnails' );

		// Create an extra image size for the Post featured image
		//add_image_size( 'post_feature_full_width', 792, 300, true );

		// This theme uses wp_nav_menu() in one location
		register_nav_menus(array(
			//'primary' => 'Menu Principal'
		));

		// This theme supports a variety of post formats
		add_theme_support(
			'post-formats',
			array(
				'video',
				'gallery',
				'image',
				'quote',
				//'aside',
				//'audio',
				//'chat',
				//'link',
				//'status',
			)
		);
		add_theme_support( 'title-tag' );
	}


	function cc_mime_types($mimes) {
		$mimes['svg'] = 'image/svg+xml';
		return $mimes;
	}
	add_filter('upload_mimes', 'cc_mime_types');
}

add_action( 'after_setup_theme', 'simple_setup' );





