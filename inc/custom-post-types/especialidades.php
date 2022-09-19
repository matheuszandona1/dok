<?php

// Register Custom Post Type
function frmnt_especialidades() {

	$labels = array(
		'name'                  => 'Especialidades',
		'singular_name'         => 'Especialidade',
		'menu_name'             => 'Especialidades',
		'name_admin_bar'        => 'Especialidades',
		'archives'              => 'Arquivos de Especialidades',
		'attributes'            => 'Atributos do Especialidades',
		'parent_item_colon'     => 'Especialidade Pai:',
		'all_items'             => 'Todos Especialidades',
		'add_new_item'          => 'Adicionar Novo Especialidade',
		'add_new'               => 'Adicionar Novo',
		'new_item'              => 'Novo Especialidade',
		'edit_item'             => 'Editar Especialidade',
		'update_item'           => 'Atualizar Especialidade',
		'view_item'             => 'Ver Especialidade',
		'view_items'            => 'Ver Especialidades',
		'search_items'          => 'Pesquisar Especialidade',
		'not_found'             => 'Não Encontrado',
		'not_found_in_trash'    => 'Não Encontrado no Lixo',
		'featured_image'        => 'Imagem destacada',
		'set_featured_image'    => 'Definir destacada',
		'remove_featured_image' => 'Remover imagem destacada',
		'use_featured_image'    => 'Usar como imagem destacada',
		'insert_into_item'      => 'Inserir ao item',
		'uploaded_to_this_item' => 'Enviado à este item',
		'items_list'            => 'Lista de Especialidades',
		'items_list_navigation' => 'Lista de navegação de Especialidades',
		'filter_items_list'     => 'Filtrar lista de Especialidades',
	);
	$args = array(
		'label'                 => 'Especialidade',
		'description'           => 'Especialidades',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'		  			=> array(  ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 4,
		'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'especialidades', $args );

}
add_action( 'init', 'frmnt_especialidades', 0 );