<?php
	// Especialidades
	$specialties = new WP_Query(array(
		'post_type' => 'especialidades',
		'posts_per_page' => 12
	));
?>
<section class="especialidades">
	<h2 class="especialidades__title">ESPECIALIDADES</h2>
	<div class="especialidades__container">
	<?php foreach(array_slice($specialties->posts,0,6) as $specialty): 
		$meta = get_fields($specialty->ID);
		?>
		<a href="<?php echo($specialty->guid) ?>">
			<div class="especialidades__card">
				<center><i class="fa-solid <?php echo($meta['icone']) ?>"></i></center>
				<p class="especialidades__card--desc"><?php echo($specialty->post_title) ?></p>
			</div>
		</a>
	<?php endforeach; ?>
	</div>
	<div class="especialidades__btn-container">
		<a class="button button__verde" href="https://ser-dok-wp.dev3.fermen.to/?post_type=especialidades&p=74">Ver todas as Especialidades</a>
	</div>
</section>