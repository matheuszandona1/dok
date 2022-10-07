<?php
	$options = array(
		"ctas" => get_field('ctas','options'),
		"logos" => get_field('logos','options'),
	)
?>
<div class="header__container">
	<div class="header__icon">
		<button class="header__icon--btn">
			<svg xmlns="http://www.w3.org/2000/svg" width="16.629" height="13.866" viewBox="0 0 16.629 13.866">
				<g id="Grupo_41" data-name="Grupo 41" transform="translate(1 1)">
					<g id="Grupo_1" data-name="Grupo 1">
						<line id="Linha_1" data-name="Linha 1" x1="14.629" fill="none" stroke="#3f3c3c" stroke-linecap="round" stroke-width="2"></line>
						<line id="Linha_2" data-name="Linha 2" x1="14.629" transform="translate(0 5.795)" fill="none" stroke="#3f3c3c" stroke-linecap="round" stroke-width="2"></line>
						<line id="Linha_3" data-name="Linha 3" x1="14.629" transform="translate(0 11.866)" fill="none" stroke="#3f3c3c" stroke-linecap="round" stroke-width="2"></line>
					</g>
				</g>
			</svg>
		</button>
		<a href="<?php echo (get_site_url()) ?>">
			<img src="<?php echo (@$options['logos']['cabecalho']['sizes']['card']) ?>" alt="Logo DOK">
		</a>
	</div>
	<div class="header__options">
		<ul class="header__options--ul">
			<?php if(@$options['ctas']['agendamento']): ?>
			<li class="header__options--li">
				<a class="header__options--a" href="<?php echo(@$options['ctas']['agendamento']) ?>">
					<div class="header__options--img header__options--img-first">
						<img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/calendar.png" alt="Agendamento de Exames">
						<p class="header__options--text">Agendamento</p>
					</div>
				</a>
			</li>
			<?php endif;?>
			<?php if(@$options['ctas']['whatsapp']): ?>
			<li class="header__options--li">
				<a class="header__options--a" href="<?php echo(@$options['ctas']['whatsapp']) ?>">
					<div class="header__options--img header__options--img-second">
						<img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/whatsapp.svg" alt="Contato via WhatsApp">
						<p class="header__options--text">Whatsapp</p>
					</div>
				</a>
			</li>
			<?php endif;?>
			<?php if(@$options['ctas']['telefone']): ?>
			<li class="header__options--li">
				<a class="header__options--a" href="tel://<?php echo(@$options['ctas']['telefone']) ?>">
					<div class="header__options--img telefone">
						<img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/phone.svg" alt="Telefone para contato">
						<p class="header__options--text ">Telefone</p>
					</div>
				</a>
			</li>
			<?php endif;?>
		</ul>
	</div>
</div>