<?php get_header("header", array("customHeader" => "parts/header")) ?>
<?php get_template_part("parts/especialidades/hero"); ?>

<div class="dog-claw">
	<main class="main">
		<!-- Seção do Capão -->
		<?php get_template_part("parts/especialidades/capa") ?>
		
		<!-- Conteúdos -->
		<section class="especialidade">
			<div class="especialidade__container">
				<?php get_template_part("parts/especialidades/sidebar") ?>
				<?php get_template_part("parts/especialidades/conteudo") ?>
			</div>
		</section>
		<!-- Especialiades  -->
		<?php get_template_part("parts/home/especialidades") ?>
		<?php get_template_part("parts/home/comentarios") ?>

	</main>
</div>

<?php get_template_part("footer"); ?>