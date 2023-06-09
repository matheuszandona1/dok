<?php
	$options = array(
		"exames" => @$args['exames'],
		"cta" => @$args['cta_exames'],
	);
	// Exibe apenas se houver link de agendamento
	if(@$options['cta']['link_agendamento']):
?>
<section class="exames">
	<div class="exames__container">
		<div class="exames__content">
			<h3 class="exames__title">EXAMES</h3>
			<p class="exames__desc"><?php echo( strip_tags(@$options['exames']['chamada'], ["b","strong","em","a","span","del"]) ) ?></p>

		</div>
		<div class="exames__resultados">
			<div class="exames__resultados--preparacao"><a href="<?php echo($options['cta']['link_agendamento'])?>">Resultados de exames</a></div>
		</div>
	</div>
</section>
<?php endif; ?>