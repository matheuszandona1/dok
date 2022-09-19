<script>
	var $ = jQuery;
	$(".button--ler").click(function(e) {
		$(this).parent().find(".nossos-servicos__desc").slideToggle();
	});

	$('.header__nav--hover, .header__nav--hover-ul').hover(function() {
		$('.header__nav--hover-ul').addClass('aberto');
	}, function() {
		$('.header__nav--hover-ul').removeClass('aberto');
	});

	$(".clinica-geral-main__link").click(function(e) {
		$(this).parent().find(".clinica-geral-main__unidade").slideToggle();
		console.log('click');
	})

	$(".header__icon--btn").click(function(e) {
		$(".header__nav-mobile").toggleClass('nav-mobile-ativo');
	})

	$(".card-default").click(function(e) {
		$(this).toggleClass("card-inativo");
		$(this).toggleClass("card-ativo")
	})

	$(".vetpoints__faq--container__button").click(function(e) {
		$(this).toggleClass("btn-ativo");
		$(this).parent().find(".vetpoints__faq--container__question").slideToggle();
	})

	$(".header__nav-mobile--cascata").click(function(e) {
		$(this).parent().find(".header__nav-mobile--cascata-children").slideToggle();
	})

	$(".internacoes__flex-btn").click(function(e) {
		let id = $(this).attr('data-id');
		$(`.internacoes__card:not([data-id='${id}'])`).fadeOut(200, function() {
			$(`.internacoes__card[data-id='${id}']`).fadeIn(200);
		});
		$(".internacoes__flex-btn").removeClass("internacoes-ativa");
		$(this).addClass('internacoes-ativa');
	})

	$(".vetpoints__celular--checkbox").click(function(e) {
		let id = $(this).attr('data-celular');
		$(`.vetpoints__celular--checkbox:not([data-celular='${id}'])`).removeClass('checkbox-ativo');
		$(`.vetpoints__celular--checkbox[data-celular='${id}']`).addClass('checkbox-ativo');
		$(`.vetpoints__celular--celular-int__checkbox:not([data-celular='${id}'])`).removeClass('square-ativo');
		$(`.vetpoints__celular--celular-int__checkbox[data-celular='${id}']`).addClass('square-ativo');
	})

	const swiperHome = new Swiper(".swiper-capao", {
		pagination: {
			el: ".swiper-pagination",
			dynamicBullets: false,
			clickable: true,
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
	});
	const swiperQuemSomos = new Swiper(".swiper-quemsomos", {
		pagination: {
			el: ".swiper-pagination1",
			dynamicBullets: false,
			clickable: true,
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
	});
	const swiperComentarios = new Swiper(".swiper-comentarios", {
		effect: "cards",
		grabCursor: true,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
	});
	const swiperVetpoints = new Swiper(".vetpoints__comentarios--comments", {
		slidesPerView: "auto",
		grabCursor: true,
		centeredSlides: true,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
	})
</script>