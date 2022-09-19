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
	<?php foreach(array_slice($specialties->posts,0,6) as $specialty): ?>
		<a href="<?php echo($specialty->guid) ?>">
			<div class="especialidades__card">
				<svg xmlns="http://www.w3.org/2000/svg" width="58" height="49.716" viewBox="0 0 58 49.716">
					<path d="M41.428,29H51.3a3.094,3.094,0,0,1-.324.34q-.163.145-.292.243l-.1.129L30.423,49.132a2.031,2.031,0,0,1-2.848,0L7.379,29.648A3.071,3.071,0,0,1,6.7,29H18.642a2.043,2.043,0,0,0,1.279-.437,1.938,1.938,0,0,0,.728-1.117l2.265-9.095,6.15,21.589a2.067,2.067,0,0,0,.744,1.068,2.019,2.019,0,0,0,1.261.421,1.973,1.973,0,0,0,1.229-.421,2.067,2.067,0,0,0,.744-1.068l4.725-15.7,1.813,3.625A1.94,1.94,0,0,0,41.427,29ZM58,15.148a17.6,17.6,0,0,1-3.333,9.71H42.723L39.131,17.7a2.047,2.047,0,0,0-2.006-1.133,1.919,1.919,0,0,0-1.812,1.489L31.136,31.977l-6.345-22.2a2.036,2.036,0,0,0-.76-1.068,2.087,2.087,0,0,0-1.278-.42A2.023,2.023,0,0,0,20.78,9.839L17.025,24.858H3.333A17.6,17.6,0,0,1,0,15.148Q0,8.027,4.11,4.013T15.472,0a12.89,12.89,0,0,1,4.094.7A16.625,16.625,0,0,1,23.45,2.573q1.8,1.181,3.09,2.217A30.5,30.5,0,0,1,29,6.991a29.782,29.782,0,0,1,2.46-2.2q1.3-1.036,3.092-2.217A16.584,16.584,0,0,1,38.436.7,12.9,12.9,0,0,1,42.528,0q7.25,0,11.36,4.013T58,15.148Z" fill="#47cc8a"></path>
				</svg>
				<p class="especialidades__card--desc"><?php echo($specialty->post_title) ?></p>
			</div>
		</a>
	<?php endforeach; ?>
	</div>
	<div class="especialidades__btn-container">
		<a class="button button__verde" href="<?php echo(get_site_url()) ?>/especialidades">Ver todas as Especialidades</a>
	</div>
</section>