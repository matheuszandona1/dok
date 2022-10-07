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
	});
</script>