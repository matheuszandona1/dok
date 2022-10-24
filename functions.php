<?php
if (!defined('_S_VERSION')) {
	define('_S_VERSION', '1.0.0');
}

function frmnt_setup()
{
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');

	register_nav_menus(array(
		'principal' => "Menu Principal",
		'rodape_esq' => "Rodapé Esquerda",
		'rodape_dir' => "Rodapé Direita",
	));

	// Tamanhos de Imagem
	add_image_size('card', 260, 192);
	add_image_size('slider', 1385, 330);
	add_image_size('hero', 950, 210);

	// Logo
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 230,
			'width'       => 100,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}

add_action('after_setup_theme', 'frmnt_setup');

/**
 * Import Custom Taxonomies
 */
// require get_template_directory() . '/inc/custom-taxonomies/categorias-cursos.php';


/**
 * Import CPTs
 */
require get_template_directory() . '/inc/custom-post-types/especialidades.php';
require get_template_directory() . '/inc/custom-post-types/unidades.php';

/**
 * Option Pages
 */

if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title' 	=> 'Dados Gerais',
		'menu_title'	=> 'Dados Gerais',
		'menu_slug' 	=> 'dados-gerais',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'icon_url'		=> 'dashicons-admin-generic',
		'position'		=> '59'
	));

	acf_add_options_page(array(
		'page_title' 	=> 'Página Inicial',
		'menu_title'	=> 'Página Inicial',
		'menu_slug' 	=> 'pagina-inicial',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'icon_url'		=> 'dashicons-admin-home',
		'position'		=> '4'
	));
}


/**
 * Personalizar Menu
 */
add_action('admin_init', 'my_remove_menu_pages');
function my_remove_menu_pages()
{
	// remove_menu_page('edit.php'); // Posts
	// remove_menu_page('upload.php'); // Media
	remove_menu_page('link-manager.php'); // Links
	remove_menu_page('edit-comments.php'); // Comments
	// remove_menu_page('edit.php?post_type=page'); // Pages
	// remove_menu_page('plugins.php'); // Plugins
	// remove_menu_page('themes.php'); // Appearance
	// remove_menu_page('users.php'); // Users
	// remove_menu_page('tools.php'); // Tools
	// remove_menu_page('options-general.php'); // Settings
}

function getPostViews($postID)
{
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if ($count == '') {
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, '0');
		return "0 view";
	}
	return $count . ' views';
}
function setPostViews($postID)
{
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if ($count == '') {
		$count = 0;
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, '0');
	} else {
		$count++;
		update_post_meta($postID, $count_key, $count);
	}
}

//// Desativa update do ACF
function disable_acf_updates($value)
{
	if (isset($value) && is_object($value)) {
		unset($value->response['advanced-custom-fields-pro/acf.php']);
		return $value;
	}
}
add_filter('site_transient_update_plugins', 'disable_acf_updates');

// Combina 2 URLs
function addUriQuery($base, $query)
{
	$url = parse_url($base);
	$queries = [];
	if (isset($url['query'])) {
		parse_str($url['query'], $queries);
	}
	parse_str($query, $query);
	$queries = array_merge($queries, $query);
	return "{$url['scheme']}://{$url['host']}{$url['path']}?" . http_build_query($queries);
}

function frmnt_pClass($content, $class)
{
	$content = str_replace('<p>', "<p class='$class'>", $content);
	return $content;
}

// Unidade

function frmnt_set_unit($unitId = null)
{
	// Checa se não foi passado o Id
	if (!$unitId) {
		// Busca configuração de Unidade padrão
		$defaultUnit = get_field('unidade_padrao', 'options');
		// Checa se há unidade padrão configurada
		if ($defaultUnit) {
			// Seta o Id
			$unitId = @$defaultUnit[0]->term_id;

			// Caso não exista padrão
		} else {
			// Busca a primeira unidade cadastrada
			$firstUnit = @get_terms(array(
				'taxonomy' => 'unidade'
			))[0];
			// Seta o Id
			$unitId = $firstUnit->term_id;
		}
	}

	// Baixa dados da unidade
	$_SESSION['UNIT'] = get_term($unitId, "unidade");
	$_SESSION['UNIT']->data = get_fields($_SESSION['UNIT']);
	// Seta o Cookir
	setcookie("UNIT", $_SESSION['UNIT']->term_id, time() + 60 * 60 * 24 * 365, "/");
}

function frmnt_unit()
{
	// Checa se já existe a unidade definida (cookie)
	if (isset($_COOKIE['UNIT'])) {
		// if (!isset($_SESSION['UNIT'])) {
			frmnt_set_unit($_COOKIE['UNIT']);
		// }
	} else {
		frmnt_set_unit();
	}
}
add_action('init', 'frmnt_unit');

function get_units() {
	if(!isset($_SESSION['UNITS'])) {
		$units = get_terms(array(
			'taxonomy' => 'unidade'
		));
		foreach ($units as $unit) {
			$unit->permalink = get_term_link($unit);
		}
		$_SESSION['UNITS'] = $units;
	}
	
	return $_SESSION['UNITS'];
}
