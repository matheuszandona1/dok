<?php
	$options = array(
		"exames" => get_field('exames','options'),
		"cta" => get_field('cta_exames','options'),
	);
?>
<section class="exames">
	<div class="exames__container">
		<div class="exames__content">
			<h3 class="exames__title">EXAMES</h3>
			<p class="exames__desc"><?php echo( strip_tags(@$options['exames']['chamada'], ["strong","em","a","span","del"]) ) ?></p>

		</div>
		<div class="exames__resultados">
			<div class="exames__resultados--resultado"><a href="<?php echo(@$options['cta']['link_agendamento']) ?>">Resultados de exames</a></div>
			<div class="exames__resultados--preparacao"><a href="#resultados">Preparação de exames</a></div>
		</div>
	</div>
</section>