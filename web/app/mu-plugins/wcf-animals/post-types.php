<?php

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