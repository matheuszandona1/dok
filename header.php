<?php
// Var
$customHeader = @$args['customHeader'];
$unit = @$args['unit'];

// Estilos
wp_enqueue_style('3rd-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap', array());

// Scripts
wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js', array(), true);
wp_enqueue_script('swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.4/swiper-bundle.min.js', array('jquery'), true);
wp_enqueue_script('frmnt', get_stylesheet_directory_uri() . '/res/js/frmnt.js', array('jquery'), true);
// Swiper
wp_enqueue_style('3rd-swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.4/swiper-bundle.min.css', array());
wp_enqueue_style('style', get_stylesheet_directory_uri() . '/res/css/style.css', array());
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
	<?php if (@$customHeader) get_template_part($customHeader); ?>