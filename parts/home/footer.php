<script>
	document.addEventListener("DOMContentLoaded", function() {
		var $ = $ || jQuery;

		$(".button--ler").click(function(e) {
			$(this).parent().find(".nossos-servicos__desc").slideToggle();
		});

		$(".clinica-geral-main__link").click(function(e) {
			$(this).parent().find(".clinica-geral-main__unidade").slideToggle();
			console.log('click');
		})

		$(".vetpoints__faq--container__button").click(function(e) {
			$(this).toggleClass("btn-ativo");
			$(this).parent().find(".vetpoints__faq--container__question").slideToggle();
		})

		$(".vetpoints__celular--checkbox").click(function(e) {
			let id = $(this).attr('data-celular');
			$(`.vetpoints__celular--checkbox:not([data-celular='${id}'])`).removeClass('checkbox-ativo');
			$(`.vetpoints__celular--checkbox[data-celular='${id}']`).addClass('checkbox-ativo');
			$(`.vetpoints__celular--celular-int__checkbox:not([data-celular='${id}'])`).removeClass('square-ativo');
			$(`.vetpoints__celular--celular-int__checkbox[data-celular='${id}']`).addClass('square-ativo');
		});

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
	});
</script>