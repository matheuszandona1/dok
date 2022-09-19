
<?php
// Estilos
wp_enqueue_style('3rd-swiper', 'https://unpkg.com/swiper@8/swiper-bundle.min.css', array());
wp_enqueue_style('3rd-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap', array());
// Scripts
wp_enqueue_script('swiper', 'https://unpkg.com/swiper@8/swiper-bundle.min.js', array(), true);

?>

	<header class="header">
		<?php get_template_part("parts/nav") ?>
		<?php get_template_part("parts/nav_menu") ?>
	</header>