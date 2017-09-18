<?php

namespace WCF\Animals;

const POST_TYPE_ANIMALS = 'animal';

function register_animals_post_type() {
	register_post_type(
		POST_TYPE_ANIMALS,
		[
			'label'         => 'Our Animals',
			'description'   => 'Pages about our animals',
			'public'        => true,
			'menu_position' => 5,
			'supports'      => [
				'title',
				'editor',
				'comments',
				'revisions',
				'author',
				'page-attributes',
				'thumbnail',
			],
			'has_archive'   => 'our-animals',
		]
	);
}

add_action( 'init', '\WCF\Animals\register_animals_post_type' );