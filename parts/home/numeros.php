<?php
$options = array(
	"numbers" => @$args['numeros'],
);
?>
<section class="numeros">
	<img class="numeros__cachorro-1" src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/cachorro-numeros.svg" alt="">
	<img class="numeros__cachorro-2" src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/cachorro-numeros-1.svg" alt="">

	<div class="numeros__container">
		<div class="numeros__content">
		<?php foreach(array_slice($options['numbers'],0,2) as $number): ?>
			<p class="numeros__texto numeros__divider">
			<?php if(@$number['plus'])echo("+") ?><?php echo(@$number['numero']) ?> <br> <span><?php echo(strtoupper(@$number['titulo'])) ?></span>
			</p>
		<?php endforeach; ?>
		</div>
		<div class="numeros__content">
			<?php foreach(array_slice($options['numbers'],2,1) as $number): ?>
				<p class="numeros__texto">
				<?php if(@$number['plus'])echo("+") ?><?php echo(@$number['numero']) ?> <br> <span><?php echo(strtoupper(@$number['titulo'])) ?></span>
				</p>
			<?php endforeach; ?>
			<img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/icon-dok-preto.svg" alt="">
		</div>
	</div>
</section>