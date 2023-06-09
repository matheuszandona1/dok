<?php
$term = get_queried_object();
frmnt_set_unit($term->term_id);
$data = get_fields('options');
$unit = $_SESSION['UNIT']->data;
// print_r($term);
// print_r($_SESSION['UNIT']);
// print_r($data);
?>

<?php get_header("header", array("customHeader" => "parts/header", "data" => $data)) ?>
<?php get_template_part("parts/hero", "hero", array("slider" => @$data['slider'])); ?>
<div class="dog-claw">
	<main class="main">
		<!-- Seção de Exames -->
		<?php get_template_part("parts/home/exames", "comentarios", array("exames" => @$data['exames'], "cta_exames" => @$data['cta_exames'])); ?>
		
		<!-- Seção de Especialidades -->
		<?php get_template_part("parts/home/especialidades"); ?>
				
		<!-- Seção sobre Quem Somos -->
		<?php get_template_part( "parts/home/quemsomos", "quem-somos", array("quem-somos" => @$data['quem-somos'])); ?>
				
		<!-- Seção sobre Quem Somos -->
		<?php get_template_part( "parts/home/video", "video", array("video" => @$data['video_link'])); ?>
		
		<!-- Seção dos Nossos Serviços -->
		<?php get_template_part("parts/home/servicoes"); ?>
				
		<!-- Seção dos Números do DOK -->
		<?php get_template_part( "parts/home/numeros", "numeros", array("numeros" => @$data['numeros'])); ?>

		<!-- Seção do banne para KeroKolo do DOK -->
		<?php get_template_part( "parts/home/kerokolo", "kerokolo", array("kerokolo" => @$unit['kerokolo_link'])); ?>
				
		<!-- Seção de Comentários sobre o DOK -->
		<?php get_template_part("parts/home/comentarios", "comentarios", array("depoimentos" => @$data['depoimentos'])); ?>

		<!-- Seção de redirect para o vetpoints -->
		<?php get_template_part("parts/home/vetpoints", "vetpoints", array("vetpoints" => @$data['vetpoints_pagina'])); ?>

	</main>
</div>

<?php get_footer("footer", array("customFooter" => "parts/footer", "data" => $data)) ?>