<?php
// Var
$customHeader = @$args['customHeader'];
// Estilos
wp_enqueue_style('style', get_stylesheet_directory_uri() . '/res/css/style.css', array());
// Scripts
wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), true);
wp_enqueue_script('frmnt', get_stylesheet_directory_uri() . '/res/js/frmnt.js', array('jquery'), true);
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<?php if(@$customHeader) get_template_part($customHeader); ?>
