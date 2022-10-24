<?php
	// Especialidades
	$specialties = new WP_Query(array(
		'post_type' => 'especialidades',
		'posts_per_page' => 99,
		'order' => 'ASC',
		'orderby' => 'title',
		'tax_query' => array(
        array (
            'taxonomy' => 'unidade',
            'field' => 'slug',
            'terms' => $_SESSION['UNIT']->slug,
        )
    ),
	));
?>
<section class="especialidades">
	<h2 class="especialidades__title">ESPECIALIDADES</h2>
	<div class="especialidades__container">
	<?php foreach(array_slice($specialties->posts,0,12) as $specialty): 
		$meta = get_fields($specialty->ID);
		?>
		<a href="<?php echo(get_the_permalink($specialty)) ?>">
			<div class="especialidades__card">
				<center><i class="fa-solid <?php echo($meta['icone']) ?>"></i></center>
				<p class="especialidades__card--desc"><?php echo($specialty->post_title) ?></p>
			</div>
		</a>
	<?php endforeach; ?>
	</div>
	<div class="especialidades__btn-container">
		<a class="button button__verde" href="<?php echo(get_the_permalink(@$specialties->posts))?>">Ver todas as Especialidades</a>
	</div>
</section>