<?php
/*
Template Name: Exames
Type: page
*/

$pageData = get_fields();
// print_r($pageData);
?>
<?php get_header("header", array("customHeader" => "parts/header")) ?>
<?php get_template_part("parts/exames/conteudo") ?>
<?php get_footer(); ?>