<?php
$options = array(
	"comments" => get_field('depoimentos', 'options'),
);
?>
<section class="comentarios">
	<h2 class="comentarios__title">COMENTÁRIOS DE QUEM USA</h2>
	<div class="swiper swiper-comentarios">
		<div class="swiper-wrapper">
		<?php foreach(@$options['comments'] as $comment): ?>
			<div class="swiper-slide">
				<div class="comentarios__container">
					<div class="comentarios__content">
						<?php if(@$comment['foto']['sizes']['thumbnail']): ?>
							<img src="<?php echo($comment['foto']['sizes']['thumbnail'])?>" alt="foto de perfil do comentário">
						<?php endif; ?>
						<div class="comentarios__content--info">
							<p class="comentarios__content--nome"><?php echo($comment['nome'])?></p>
							<p class="comentarios__content--profissao"><?php echo($comment['subtitulo'])?></p>
						</div>
					</div>
					<p class="comentarios__comentario">“<?php echo( strip_tags(@$comment['depoimento'], ["strong","em","a","span","del"]) ) ?>”</p>
				</div>
			</div>
		<?php endforeach; ?>
		</div>
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>
	</div>
</section>