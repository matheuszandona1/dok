<?php
$options = array(
	"ctas" => get_field('ctas', 'options'),
	"rodape" => get_field('rodape', 'options'),
);

$unit = $_SESSION['UNIT']->data;

// Especialidades
$specialties = new WP_Query(array(
	'post_type' => 'especialidades',
	'posts_per_page' => 99,
	'order' => 'ASC',
	'orderby' => 'title',
	'tax_query' => array(
		array(
			'taxonomy' => 'unidade',
			'field' => 'slug',
			'terms' => $_SESSION['UNIT']->slug,
		)
	)
));
?>

<nav class="header__nav">
	<ul class="header__nav--ul">
		<li><a class="header__nav--hover" href="<?php echo (get_the_permalink($specialties->posts[0])) ?>">ESPECIALIDADES</a></li>
		<?php wp_nav_menu(array(
			"menu" => "principal",
			"container" => "",
			"items_wrap" => '%3$s'
		)) ?>
	</ul>

	<div class="header__nav--submenus">
		<ul data-menu="1" class="header__nav--hover-ul slide-down" style="columns: 3; -webkit-columns: 3; -moz-columns: 3;">
			<?php foreach ($specialties->posts as $specialty) : ?>
				<li>
					<a class="header__nav--links" href="<?php echo (get_the_permalink($specialty)) ?>"><?php echo ($specialty->post_title) ?></a>
				</li>
			<?php endforeach ?>

		</ul>
	</div>
</nav>

<div class="header__nav-mobile ">
	<div class="header__nav-mobile--container">
		<ul class="header__nav-mobile--ul">
			<li class="header__nav-mobile--li">
				<a class="header__nav-mobile--cascata" href="javascript:void(0)">ESPECIALIDADES </a>
				<div class="header__nav-menu-mobile-scroll">

					<?php foreach (array_slice($specialties->posts, 0, 999) as $specialty) : ?>
						<div class="header__nav-mobile--cascata-children">
							<a class="header__nav-mobile--links" href="<?php echo (get_the_permalink($specialty)) ?>"><?php echo ($specialty->post_title) ?></a>
						</div>
					<?php endforeach ?>
				</div>
			</li>
			<?php wp_nav_menu(array(
				"menu" => "principal",
				"container" => "",
				"items_wrap" => '%3$s'
			)) ?>
		</ul>
		<div class="header__nav-mobile--options">
			<ul class="header__nav-mobile--options-ul">
				<?php if (@$options['ctas']['agendamento']) : ?>
					<li class="header__options--li">
						<a target="_blank" class="header__options--a" href="<?php echo (@$options['ctas']['agendamento']) ?>">
							<div class="header__options--img header__options--img-first header__options--mobile header__nav-mobile--buttons">
								<img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/calendar.png" alt="Agendamento">
								<p class="header__options--text header__nav-mobile--text">Agendamento</p>
							</div>
						</a>
					</li>
				<?php endif; ?>
				<?php if (@$unit['ctas']['whatsapp']) : ?>
					<li class="header__options--li">
						<a class="header__options--a" href="https://web.whatsapp.com/send?phone=55<?php echo (@$unit['ctas']['whatsapp']) ?>">
							<div class="header__options--img header__options--img-second header__options--mobile header__nav-mobile--buttons">
								<img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/whatsapp.svg" alt="WhatsApp">
								<p class="header__options--text header__nav-mobile--text ">Whatsapp</p>
							</div>
						</a>
					</li>
				<?php endif; ?>
				<?php if (@$unit['ctas']['telefone']) : ?>
					<li class="header__options--li">
						<a class="header__options--a" href="tel://<?php echo (@$unit['ctas']['telefone']) ?>">
							<div class="header__options--img header__options--mobile header__nav-mobile--buttons">
								<img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/phone.svg" alt="Telefone para contato">
								<p class="header__options--text header__nav-mobile--text">Telefone</p>
							</div>
						</a>
					</li>
				<?php endif; ?>
			</ul>
		</div>
	</div>
	<div class="footer__socials">
		<?php if (@$unit['ctas']['telefone']) : ?>
			<a href="tel://<?php echo (@$options['ctas']['telefone']) ?>">
				<img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/telefone-preto.svg" alt="">
			</a>
		<?php endif; ?>
		<?php if (@$unit['ctas']['whatsapp']) : ?>
			<a target="_blank" href="https://web.whatsapp.com/send?phone=55<?php echo (@$unit['ctas']['whatsapp']) ?>">
				<img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/whatsapp-preto.svg" alt="">
			</a>
		<?php endif; ?>
		<?php if (@$options['rodape']['redes_sociais']['instagram']) : ?>
			<a target="_blank" href="<?php echo (@$options['rodape']['redes_sociais']['instagram']) ?>">
				<img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/instagram-preto.svg" alt="">
			</a>
		<?php endif; ?>
		<?php if (@$options['rodape']['redes_sociais']['facebook']) : ?>
			<a target="_blank" href="<?php echo (@$options['rodape']['redes_sociais']['facebook']) ?>">
				<img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/facebook-preto.svg" alt="">
			</a>
		<?php endif; ?>
	</div>
</div>
<script>
	document.addEventListener("DOMContentLoaded", function() {
		var $ = $ || jQuery;

		$('.header__nav--hover, .header__nav--hover-ul').hover(function() {
			$('.header__nav--hover-ul').addClass('aberto');
		}, function() {
			$('.header__nav--hover-ul').removeClass('aberto');
		});

		$(".header__nav-mobile--cascata").click(function(e) {
			$(this).parent().find(".header__nav-mobile--cascata-children").slideToggle();
		})

		$(".header__icon--btn").click(function(e) {
			$(".header__nav-mobile").toggleClass('nav-mobile-ativo');
		});

		// Navegação das Unidades
		$('.nav-units').change((event) => {
			document.location = event.currentTarget.value;
		})

	});
</script>