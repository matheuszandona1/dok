<?php
// Meta Dados
$meta = get_fields(get_the_ID());
// Thumbnail
$thumbnail = get_the_post_thumbnail_url();

// Classe customizada para esse conteúdo
function wph_add_class_for_p_tag($content) {
	$content = str_replace('<p>', '<p class="especialidade__content--desc">', $content);
	return $content;
}
add_filter('the_content', 'wph_add_class_for_p_tag', 9999);
?>

<div class="especialidade__content" data-id="ativo">
	<?php if($thumbnail): ?>
	<img class="especialidade__content--img" src="<?php echo($thumbnail);?>" alt="">
	<?php endif; ?>
	<div class="especialidade__content--title">
		<div class="especialidade__content--svg">
		<i class="fa-solid <?php echo($meta['icone']) ?>"></i>
		</div>
		<?php // TODO: Quando a especialidade não tem imagem, o título fica alinhado à direita ?>
		<h2 class="especialidade__content--title__h2"><?php the_title(); ?></h2>
	</div>
	<?php get_the_content() ?>
	
	<?php // TODO: Inserir um mosaico no conteúdo e deixar a regra de CSS pronta para formatá-lo. ?>
	<!-- 
	<div class="especialidade__content--img-grid">
		<img src="https://picsum.photos/900/400" alt="">
		<img src="https://picsum.photos/900/400" alt="">
		<img src="https://picsum.photos/900/400" alt="">
	</div>
	<div class="especialidade__content--img-grid">
		<img src="https://picsum.photos/900/400" alt="">
		<img src="https://picsum.photos/900/400" alt="">
		<img src="https://picsum.photos/900/400" alt="">
	</div> -->
</div>