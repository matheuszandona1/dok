<?php 

// Especialidades
$specialties = new WP_Query(array(
	'post_type' => 'especialidades',
	'posts_per_page' => 99,
	'order' => 'ASC',
	'orderby' => 'title'
));
?>
<div class="especialidade__side-card">
	<?php 
	// TODO: Busca ficará fora por enquanto
	/*
	<form class="especialidade__form">
		<input type="text" id="" placeholder="pesquisar especialidade">
		<button class="especialidade__form--btn" type="button">
			<svg xmlns="http://www.w3.org/2000/svg" width="17.999" height="18" viewBox="0 0 17.999 18">
				<g id="bx-search-alt" transform="translate(0)">
					<path id="Caminho_58" data-name="Caminho 58" d="M10.7,18.394a7.65,7.65,0,0,0,4.711-1.623L19.639,21,21,19.639l-4.23-4.23A7.688,7.688,0,1,0,10.7,18.394Zm0-13.47A5.773,5.773,0,1,1,4.924,10.7,5.779,5.779,0,0,1,10.7,4.924Z" transform="translate(-3 -3)" fill="#40c187"></path>
					<path id="Caminho_59" data-name="Caminho 59" d="M14.839,11.509a1.914,1.914,0,0,1,.566,1.36h1.924a3.826,3.826,0,0,0-1.13-2.721,3.934,3.934,0,0,0-5.438,0L12.12,11.51A1.967,1.967,0,0,1,14.839,11.509Z" transform="translate(-5.783 -5.172)" fill="#40c187"></path>
				</g>
			</svg>
		</button>
	</form>
	*/ ?>
	<ul class="especialidade__list">
		<?php foreach(array_slice($specialties->posts,0,99) as $specialty):
			// TODO: A clase ativo é adicionada ao li atual.
			$active = ($specialty->ID == get_the_ID()) ? "ativo" : "";
		?>
		<li class="especialidade__list--content <?php echo($active)?>">
			<svg xmlns="http://www.w3.org/2000/svg" width="6.001" height="10" viewBox="0 0 6.001 10">
				<g id="Componente_1_72" data-name="Componente 1 – 72" transform="translate(1 9) rotate(-90)">
					<path id="União_1" data-name="União 1" d="M8,0,4,4ZM0,0,4,4Z" fill="#3f3c3c" stroke="#3f3c3c" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
				</g>
			</svg>
			<?php // TODO: Alterado o link de button para a (rever css) ?>
			<a href="<?php echo(get_the_permalink($specialty)) ?>" class="especialidade__list--btn" data-id="ativo"><?php echo($specialty->post_title) ?></a>
		</li>
		<?php endforeach; ?>
	</ul>
</div>