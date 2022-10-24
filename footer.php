<?php
	$customFooter = @$args['customFooter'];
	$unit = $_SESSION['UNIT']->data;
	$data = @$args['data'];
?>
<footer class="footer">
		<div class="footer__container">
			<div class="footer__container-first">
				<div class="footer__content">
					<img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/logo-mobile.svg" alt="logo DOK branco">
				</div>
				<!-- <p class="footer__title"><a href="#">CDMV CURSOS</a></p>
				<div class="footer__content">
					<p class="footer__title">EXAMES</p>
					<a href="#">Consulta de resultados</a>
				</div>
				<p class="footer__title"><a href="#">ESPECIALIDADES</a></p>
				<p class="footer__title"><a href="#">INTERNAÇÕES</a></p> -->
			</div>
			<div class="footer__container-mid">
				<div class="footer__content">
					<?php if($unit['endereco']): ?>
						<p class="footer__title footer__title-mid">ENDEREÇO</p>
						<span><?php echo($unit['endereco'])?></span>
					<?php endif; ?>
				</div>
				<div class="footer__content">
					<?php if($unit['ctas']['telefone']): ?>
						<p class="footer__title footer__title-mid">TELEFONE</p>
						<a href="tel:<?php echo($unit['ctas']['telefone'])?>"><?php echo($unit['ctas']['telefone'])?></a>
					<?php endif; ?>
				</div>
				<!-- <div class="footer__content">
					<p class="footer__title footer__title-mid">SOBRE O HOSPITAL</p>
					<div class="footer__content-mid">
						<a href="#">Quem somos</a>
						<a href="#">Infraestrutura</a>
						<a href="#">Localização</a>
						<a href="#">Formulário</a>
						<a href="#">Formulário</a>
						<a href="#" class="chat">Chat</a>
						<a href="#">Callback</a>
					</div>
				</div> -->
				<div class="footer__socials">
					<?php if(@$unit['ctas']['telefone']): ?>
					<a href="tel:<?php echo($unit['ctas']['telefone'])?>">
						<img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/telefone-preto.svg" alt="">
					</a>
					<?php endif; ?>
					<?php if(@$unit['ctas']['whatsapp']): ?>
					<a target="_blank" href="<?php echo($unit['ctas']['whatsapp'])?>">
						<img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/whatsapp-preto.svg" alt="">
					</a>
					<?php endif; ?>
					<?php if(@$data['rodape']['rede_sociais']['instagram']): ?>
						<a target="_blank" href="<?php echo($data['rodape']['rede_sociais']['instagram'])?>">
						<img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/instagram-preto.svg" alt="">
					</a>
					<?php endif; ?>
					<?php if(@$data['rodape']['rede_sociais']['facebook']): ?>
						<a target="_blank" href="<?php echo($data['rodape']['rede_sociais']['facebook'])?>">
							<img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/facebook-preto.svg" alt="">
						</a>
					<?php endif; ?>
				</div>
			</div>
			<div class="footer__mapa"><a href="#mapa">
				<?php if(@$unit['mapa']['sizes']['large']): ?>
					<img src="<?php echo ($unit['mapa']['sizes']['large']) ?>" alt="mapa para chegar a clinica">
				<?php endif; ?>
				</a>
			</div>
		</div>
		<div class="footer__mobile">
			<div class="footer__mobile--img">
				<img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/logo-mobile.svg" alt="logo DOK branco">
			</div>
			<div class="footer__content">
				<?php if(@$unit['ctas']['telefone']): ?>
					<p class="footer__title footer__title-mid">TELEFONE</p>
					<a href="tel:<?php echo($unit['ctas']['telefone'])?>"><?php echo($unit['ctas']['telefone'])?></a>
				<?php endif; ?>
			</div>
			<div class="footer__content">
				<p class="footer__title footer__title-mid">ENDEREÇO</p>
				<span>Avenida das Américas, 12600 BL3 Loja 101 - Barra da Tijuca, Rio de Janeiro - RJ</span>
				<?php if(@$unit['endereco']): ?>
						<p class="footer__title footer__title-mid">ENDEREÇO</p>
						<span><?php echo($unit['endereco'])?></span>
					<?php endif; ?>
			</div>
			<div class="footer__mobile--mapa"><a href="#mapa">
				<?php if(@$unit['mapa']['sizes']['medium_large']): ?>
					<img src="<?php echo ($unit['mapa']['sizes']['medium_large']) ?>" alt="mapa para chegar a clinica">
				<?php endif; ?>
				</a>
			</div>
			<div class="footer__socials">
				<?php if(@$unit['ctas']['telefone']): ?>
					<a href="tel:<?php echo($unit['ctas']['telefone'])?>">
						<img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/telefone-preto.svg" alt="">
					</a>
					<?php endif; ?>
				<?php if(@$unit['ctas']['whatsapp']): ?>
					<a target="_blank" href="<?php echo($unit['ctas']['whatsapp'])?>">
						<img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/whatsapp-preto.svg" alt="">
					</a>
					<?php endif; ?>
					<?php if(@$data['rodape']['rede_sociais']['instagram']): ?>
						<a target="_blank" href="<?php echo($data['rodape']['rede_sociais']['instagram'])?>">
						<img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/instagram-preto.svg" alt="">
					</a>
					<?php endif; ?>
					<?php if(@$data['rodape']['rede_sociais']['facebook']): ?>
						<a target="_blank" href="<?php echo($data['rodape']['rede_sociais']['facebook'])?>">
							<img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/facebook-preto.svg" alt="">
						</a>
					<?php endif; ?>
			</div>
			<div class="footer__mobile--container-end">
				<!-- <p class="footer__title footer__mobile--title"><a href="#">CDMV CURSOS</a></p>
				<div class="footer__content">
					<p class="footer__title">CLÍNICA GERAL</p>
					<a href="#">Atendimento 24h</a>
				</div>
				<div class="footer__content">
					<p class="footer__title">EXAMES</p>
					<a href="#">Consulta de resultados</a>
				</div>
				<p class="footer__title footer__mobile--title"><a href="#">ESPECIALIDADES</a></p>
				<p class="footer__title footer__mobile--title"><a href="#">INTERNAÇÕES</a></p>
				<div class="footer__content">
					<p class="footer__title footer__title-mid">SOBRE O HOSPITAL</p>
					<div class="footer__content-mid">
						<a href="#">Quem somos</a>
						<a href="#">Infraestrutura</a>
						<a href="#">Localização</a>
						<a href="#">Formulário</a>
						<a href="#">Formulário</a>
						<a href="#">Chat</a>
						<a href="#">Callback</a>
					</div>
				</div> -->
			</div>
		</div>
	</footer>

	<!-- Scripts -->
	<?php wp_footer(); ?>
	<?php if(@$customFooter) get_template_part($customFooter); ?>

</body>
</html>