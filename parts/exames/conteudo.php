<?php
// Meta Dados
$meta = get_fields();
?>
<!-- <?php //print_r($meta) ?> -->
<main class="main">

	<!-- Seção do Capão -->
	<section class="capao-geral">
		<div class="capao-geral__container">
			<p class="capao-geral__path">Inicio > Exames</p>
			<div class="capao-geral__icon">
				<img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/mais-w.svg" alt="icon página">
				<h1 class="capao-geral__title">Exames</h1>
			</div>
		</div>
	</section>


	<!-- Seção dos Exames -->
	<section class="exame">
		<div class="exame__container">
			<h2 class="exame__title">CONSULTA DE EXAME</h2>
			<p class="exame__desc">Digite o nome de seu animal e o CPF de seu responsável nos campos abaixo para verificar o resultado do exame realizado.</p>
			<form target="_blank" action="<?php echo(@$meta['aplicacao_externa'])?>" method="<?php echo(@$meta['metodo_de_envio'])?>" class="exame__form">
				<input type="text" name="<?php echo(@$meta['campo_nome'])?>" required="" placeholder="NOME DO PET" class="exame__form--input">
				<input type="text" name="<?php echo(@$meta['campo_exame'])?>" required="" placeholder="CPF DO RESPONSÁVEL" class="exame__form--input">
				<button class="exame__form--btn">BUSCAR</button>
			</form>
		</div>
	</section>
</main>