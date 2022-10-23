<?php
/*
Template Name: VetPoints
Type: page
*/

$pageData = get_fields();
// print_r($pageData);
// Estilos
wp_enqueue_style('3rd-fonts-raleway', 'https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700;900&display=swap', array());
?>
<?php get_header("header", array("customHeader" => "parts/header")) ?>
<?php get_template_part("parts/vetpoints/conteudo") ?>
<?php get_footer(); ?>