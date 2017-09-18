<?php
/**
 * Plugin Name: WCF Animals
 * Description: Provides functionality relating to the animals on the farm
 * Version: 1.0.0
 * Author: Toby Griffiths <toby@cubicmushroom.co.uk>
 * Author URI: http://blog.tobyg.net/
 * License: MIT License
 */

namespace WCF\Animals;

const POST_TYPE_ANIMALS = 'animal';

function register_animals_post_type() {
	register_post_type(
		POST_TYPE_ANIMALS,
		[
			'public' => true,
			'label'  => 'Our Animals',
		]
	);
}

add_action( 'init', '\WCF\Animals\register_animals_post_type' );