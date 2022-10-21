<?php

function frmnt_unidades()
{
	// Add new "Locations" taxonomy to Posts
	register_taxonomy('unidade', ['especialidades'], array(
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'hierarchical' => true,
		'labels' => array(
			'name' => _x('Unidades', 'taxonomy general name'),
			'singular_name' => _x('Unidade', 'taxonomy singular name'),
			'search_items' => __('Buscar Unidades'),
			'all_items' => __('Todas Unidades'),
			'parent_item' => __('Unidade'),
			'parent_item_colon' => __('Unidade:'),
			'edit_item' => __('Editar Unidade'),
			'update_item' => __('Atualizar Unidade'),
			'add_new_item' => __('Nova Unidade'),
			'new_item_name' => __('Nova Unidade'),
			'menu_name' => __('Unidades'),
		),
		// Control the slugs used for this taxonomy
		'rewrite' => array(
			'slug' => '', // This controls the base slug that will display before each term
			'with_front' => false, // Don't display the category base before "/locations/"
			'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
		),
	));
}
add_action('init', 'frmnt_unidades', 0);
