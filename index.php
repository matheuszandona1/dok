<?php 
$data = get_fields('options');
?>
<!-- <?php print_r($data); ?> -->
<?php get_header("header", array("customHeader" => "parts/header")) ?>

<?php get_template_part("parts/hero"); ?>

<div class="dog-claw">
	<main class="main">
		<!-- Seção de Exames -->
		<?php get_template_part("parts/home/exames"); ?>
		
		<!-- Seção de Especialidades -->
		<?php get_template_part("parts/home/especialidades"); ?>
				
		<!-- Seção sobre Quem Somos -->
		<?php get_template_part("parts/home/quemsomos"); ?>
				
		<!-- Seção dos Nossos Serviços -->
		<?php get_template_part("parts/home/servicoes"); ?>
				
		<!-- Seção dos Números do DOK -->
		<?php get_template_part("parts/home/numeros"); ?>
				
		<!-- Seção de Comentários sobre o DOK -->
		<?php get_template_part("parts/home/comentarios"); ?>
	</main>
</div>

<?php get_footer("footer", array("customFooter" => "parts/home/footer")) ?>