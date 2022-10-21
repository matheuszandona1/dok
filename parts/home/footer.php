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
	});
</script>