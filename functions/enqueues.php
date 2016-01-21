<?php

function f6st_enqueues() {

	// Styles

	wp_register_style('foundation-css', get_template_directory_uri() . '/foundation/css/foundation.min.css', false, '6.0.1', null);
	wp_enqueue_style('foundation-css');

	wp_register_style('font-awesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css', false, '4.5.0', null);
	wp_enqueue_style('font-awesome-css');

  wp_register_style('theme-css', get_template_directory_uri() . '/theme/css/theme.css', false, null, null);
	wp_enqueue_style('theme-css');


  // Scripts

	wp_deregister_script('jquery');
  wp_register_script('jquery', get_template_directory_uri() . '/foundation/js/vendor/jquery.min.js', false, '2.1.4', false);
	wp_enqueue_script('jquery');

  wp_register_script('what-input', get_template_directory_uri() . '/foundation/js/vendor/what-input.min.js', false, '2.1.4', true);
	wp_enqueue_script('what-input');

	wp_register_script('modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', false, '2.8.3', true);
	wp_enqueue_script('modernizr');

	wp_register_script('foundation-js', get_template_directory_uri() . '/foundation/js/foundation.min.js', false, null, true);
	wp_enqueue_script('foundation-js');

	wp_register_script('theme-js', get_template_directory_uri() . '/theme/js/theme.js', false, null, true);
	wp_enqueue_script('theme-js');

  // Threaded Comments

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'f6st_enqueues', 100);
