<?php
$options = array(
	"about" => get_field('quem-somos', 'options'),
);
?>
<section class="quem-somos">
	<div class="swiper swiper-quemsomos">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<div class="quem-somos__container">
					<h3 class="quem-somos__title"><?php echo(@$options['about']['titulo']) ?></h3>
					<p class="quem-somos__desc"><?php echo( strip_tags(@$options['about']['chamada'], ["strong","em","a","span","del"]) ) ?></p>
					<a href="<?php echo(@$options['about']['link']['url']) ?>" class="quem-somos__btn">Leia Mais</a>
				</div>
			</div>
			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>
		</div>
	</div>
</section>