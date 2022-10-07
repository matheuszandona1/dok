<?php
/*
Template Name: VetPoints
Type: page
*/

$pageData = get_fields();
// print_r($pageData);
?>
<?php get_header("header", array("customHeader" => "parts/header")) ?>
<?php get_template_part("footer"); ?>