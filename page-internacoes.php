<?php
/*
Template Name: Internações
Type: page
*/

$pageData = get_fields();
// print_r($pageData);

// Classe customizada para esse conteúdo
function wph_add_class_for_p_tag($content) {
	$content = str_replace('<p', '<p class="internacoes__card--desc"', $content);
	return $content;
}

$feline = array(
	"imagem" => (@$pageData['felinos']['imagem']) ? $pageData['felinos']['imagem']['sizes']['large'] : "",
	"conteudo" => wph_add_class_for_p_tag(@$pageData['felinos']['texto'])
);
$canine = array(
	"imagem" => (@$pageData['caninos']['imagem']) ? @$pageData['caninos']['imagem']['sizes']['large'] : "",
	"conteudo" => wph_add_class_for_p_tag(@$pageData['caninos']['texto'])
)
?>
<?php get_header("header", array("customHeader" => "parts/header")) ?>

<div class="dog-claw">

		<main class="main">

			<!-- Seção do Capão -->
			<section class="capao-geral">
				<div class="capao-geral__container">
					<p class="capao-geral__path">Inicio > Internações</p>
					<div class="capao-geral__icon">
						<img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/icon-medical-bed.svg" alt="icon página">
						<h1 class="capao-geral__title">Internações</h1>
					</div>
				</div>
			</section>

			<!-- Seção de Internações -->
			<section class="internacoes">
				<div class="internacoes__buttons">
					<div class="internacoes__btn">
						<a href="javascript:void(0)" data-id="cachorro" class="internacoes__flex-btn internacoes-ativa ">
							<svg xmlns="http://www.w3.org/2000/svg" width="27.876" height="25.66" viewBox="0 0 27.876 25.66">
								<path id="dog"
									d="M23.037,10.032,19.624,5.1a2.793,2.793,0,0,0-2.252-1.2L10.9,3.808h-.013c-3.344,0-5.91.559-7.562,3.289-1.539,2.541-2.2,6.869-2.2,14.473V22.5H3.248L1.882,29.468H3.775L5.142,22.5h.629a5.78,5.78,0,0,0,4.07-1.625A7.556,7.556,0,0,0,11.9,17.14l0-.013L13.5,9.491H11.6l-1.509,7.23c-.458,1.9-1.833,3.921-4.316,3.921H2.987c.05-6.578.649-10.478,1.923-12.581C5.978,6.295,7.54,5.668,10.875,5.667l6.47.093a.931.931,0,0,1,.751.4l3.86,5.574,5.186.865v.985L26.278,18.2c-.255,1.361-.691,2.047-2.481,2.262l-7.335,1.255-.048,7.754h1.858l.039-6.185,5.732-.981a4.671,4.671,0,0,0,2.929-1.279A4.6,4.6,0,0,0,28.1,18.54l.9-4.782V11.026Z"
									transform="translate(-1.125 -3.808)" fill="#40C187"></path>
							</svg>
							<p href="cachorro">CANINOS</p>
						</a>
					</div>
					<div class="internacoes__divider"></div>
					<div class="internacoes__btn">
						<a href="javascript:void(0)" data-id="gato" class="internacoes__flex-btn">
							<svg xmlns="http://www.w3.org/2000/svg" width="27.734" height="30.814" viewBox="0 0 27.734 30.814">
								<path id="cat"
									d="M24.468,12.252a3.514,3.514,0,0,0-3.332-2.384H18.314V1.515l-1.186.169A8.463,8.463,0,0,0,10.9,5.737,13.353,13.353,0,0,0,9.152,10.6a15.218,15.218,0,0,0-4.01,4.884,27,27,0,0,0-2.309,6.022,36.906,36.906,0,0,0-1.144,7.143v3.677H3.766V28.716c.026-.535.681-12.232,6.952-16.687l.368-.261.06-.447c.312-2.313,1.393-6.135,5.09-7.309v7.935h4.9a1.436,1.436,0,0,1,1.364.973c.829,2.446,2.252,5.506,4.471,6.944l-.667,2.5a4.072,4.072,0,0,1-4.061,3.044,19.685,19.685,0,0,0-5.76.721l-.768.209v5.989h2.078V27.944a17.234,17.234,0,0,1,4.385-.456A6.168,6.168,0,0,0,28.311,22.9l1.11-4.162-.827-.354c-1.545-.662-3.011-2.84-4.127-6.132Z"
									transform="translate(-1.688 -1.515)" fill="#40C187"></path>
							</svg>
							<p href="cachorro">FELINOS</p>
						</a>
					</div>
				</div>
				<div class="internacoes__card" data-id="cachorro">
					<h2 class="internacoes__card--title-cao">INTERNAÇÕES DE CANINOS</h2>
					<?php if($canine['imagem']): ?>
						<img src="<?php echo($canine['imagem'])?>" alt="card gato">
					<?php endif; ?>
					<?php echo($canine['conteudo'])?>
				</div>
				<div class="internacoes__card internacoes__card-gato" data-id="gato">
					<h2 class="internacoes__card--title-gato">INTERNAÇÕES DE FELINOS</h2>
					<?php if($feline['imagem']): ?>
						<img src="<?php echo($feline['imagem'])?>" alt="card gato">
					<?php endif; ?>
					<?php echo($feline['conteudo'])?>
				</div>
			</section>

		</main>
	</div>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			$('.internacoes__flex-btn').click((event) => {
				let currentId = event.currentTarget.dataset['id'];
				$('.internacoes__flex-btn').toggleClass('internacoes-ativa');
				$('.internacoes__card').fadeOut(200, ()=> {
					$(`[data-id=${currentId}]`).fadeIn(200);
				})
			})
		})
	</script>

<?php get_template_part("footer"); ?>