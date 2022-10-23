<?php
$pageData = get_fields();
// print_r($pageData);

function wph_add_class_for_p_tag($content, $class) {
	$content = str_replace('<p>', "<p class=\"$class\">", $content);
	return $content;
}
?>
<div class="dog-claw">
	<main class="main">
	
		<!-- Seção do Capão -->
		<section class="capao-geral">
			<div class="capao-geral__container">
				<p class="capao-geral__path">Inicio > Sobre o DOK</p>
				<div class="capao-geral__icon">
					<img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/icon-medical-load.svg" alt="icon página">
					<h1 class="capao-geral__title">Sobre o DOK</h1>
				</div>
			</div>
		</section>
	
	
		<!-- Seção dos Exames -->
		<section class="sobre-main">
			<div class="sobre-main__container">
				<div class="sobre-main__container--top">
					<div class="sobre-main__desc">
						<div class="sobre-main__top">
							<img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/patinha-fill.svg" alt="">
							<h2 class="sobre-main__top--title"><?php echo($pageData['sobre_titulo']) ?></h2>
						</div>
						<?php echo(wph_add_class_for_p_tag($pageData['sobre_texto'], "sobre-main__desc--text")) ?>
					</div>
					<?php if(@$pageData['imagem']['sizes']['large']): ?>
					<div class="sobre-main__img">
						<img src="<?php echo($pageData['imagem']['sizes']['large']) ?>" alt="<?php echo($pageData['imagem']['description']) ?>">
					</div>
					<?php endif; ?>
				</div>
				<div class="sobre-main__cards">
					<?php foreach(@$pageData['atributos'] as $attribute): ?>
					<div class="sobre-main__card">
						<i class="<?php echo($attribute['icone']) ?>"></i>
						<p class="sobre-main__card--desc"><?php echo($attribute['texto']) ?></p>
					</div>
					<?php endforeach; ?>
				</div>
				<div class="sobre-main__top">
					<img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/building.svg" alt="">
					<h2 class="sobre-main__top--title">INFRAESTRUTURA</h2>
				</div>
				<?php echo(wph_add_class_for_p_tag($pageData['infra_texto'],'sobre-main__text-p')) ?>
				<div class="sobre-main__content-mid">
					<?php foreach(@$pageData['mosaico'] as $picture): ?>
						<img src="<?php echo($picture['sizes']['large']) ?>" alt="<?php echo($picture['description']) ?>">
					<?php endforeach; ?>
				</div>
			</div>
		</section>
	</main>

</div>