<?php 
$data = get_fields('options');
?>
<!-- <?php //print_r($data); ?> -->
<?php get_header("header", array("customHeader" => "parts/header")) ?>

<?php get_template_part("parts/hero", "hero", array("slider" => $data['slider'])); ?>

<div class="dog-claw">
	<main class="main">
		<!-- Seção de Exames -->
		<?php get_template_part("parts/home/exames", "comentarios", array("exames" => $data['exames'], "cta_exames" => $data['cta_exames'])); ?>
		
		<!-- Seção de Especialidades -->
		<?php get_template_part("parts/home/especialidades"); ?>
				
		<!-- Seção sobre Quem Somos -->
		<?php get_template_part( "parts/home/quemsomos", "quem-somos", array("quem-somos" => $data['quem-somos'])); ?>
				
		<!-- Seção dos Nossos Serviços -->
		<?php get_template_part("parts/home/servicoes"); ?>
				
		<!-- Seção dos Números do DOK -->
		<?php get_template_part( "parts/home/numeros", "numeros", array("numeros" => $data['numeros']));; ?>
				
		<!-- Seção de Comentários sobre o DOK -->
		<?php get_template_part("parts/home/comentarios", "comentarios", array("depoimentos" => $data['depoimentos'])); ?>

		<!-- Seção de redirect para o vetpoints -->
		<?php get_template_part("parts/home/vetpoints"); ?>

	</main>
</div>

<?php get_footer("footer", array("customFooter" => "parts/home/footer")) ?>