<?php

// Register Custom Post Type
function frmnt_unidades() {

	$labels = array(
		'name'                  => 'Unidades',
		'singular_name'         => 'Unidade',
		'menu_name'             => 'Unidades',
		'name_admin_bar'        => 'Unidades',
		'archives'              => 'Arquivos de Unidades',
		'attributes'            => 'Atributos do Unidades',
		'parent_item_colon'     => 'Unidade Pai:',
		'all_items'             => 'Todos Unidades',
		'add_new_item'          => 'Adicionar Novo Unidade',
		'add_new'               => 'Adicionar Novo',
		'new_item'              => 'Novo Unidade',
		'edit_item'             => 'Editar Unidade',
		'update_item'           => 'Atualizar Unidade',
		'view_item'             => 'Ver Unidade',
		'view_items'            => 'Ver Unidades',
		'search_items'          => 'Pesquisar Unidade',
		'not_found'             => 'Não Encontrado',
		'not_found_in_trash'    => 'Não Encontrado no Lixo',
		'featured_image'        => 'Imagem destacada',
		'set_featured_image'    => 'Definir destacada',
		'remove_featured_image' => 'Remover imagem destacada',
		'use_featured_image'    => 'Usar como imagem destacada',
		'insert_into_item'      => 'Inserir ao item',
		'uploaded_to_this_item' => 'Enviado à este item',
		'items_list'            => 'Lista de Unidades',
		'items_list_navigation' => 'Lista de navegação de Unidades',
		'filter_items_list'     => 'Filtrar lista de Unidades',
	);
	$args = array(
		'label'                 => 'Unidade',
		'description'           => 'Unidades',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'		  			=> array(  ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 4,
		'menu_icon'             => 'dashicons-location',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'unidades', $args );

}
add_action( 'init', 'frmnt_unidades', 0 );