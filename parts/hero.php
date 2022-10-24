<?php
$options = array(
  "slider" => @$args['slider'],
);

?>
<div class="swiper swiper-capao">
  <div class="swiper-wrapper">
    <?php foreach ($options['slider'] as $slide) :
      $image = @$slide['imagem']['sizes']['1536x1536'];
      $image_mobile = @$slide['imagem_mobile']['sizes']['medium'];
      $text = @$slide['texto'];
      $link = ($slide['link']) ? $slide['link']['url'] : "";
      $overlay = ($text) ? "linear-gradient(90deg, #40c18767 15% 86%)," : "";
    ?>
    <!-- <?php //print_r($slide); ?> -->
      <style scoped>
        .content-slide<?php echo @$slide['imagem']['id'] ?> {
          background: <?php echo ($overlay) ?> url('<?php echo (($image_mobile) ? $image_mobile : $image) ?>') center top / cover no-repeat !important;
          image-rendering: pixelated;
        }

        @media (min-width: 640px) {
          .content-slide<?php echo @$slide['imagem']['id'] ?> {
            background: <?php echo ($overlay) ?> url('<?php echo ($image) ?>') center top / cover no-repeat !important;
          image-rendering: pixelated;

          }
        }
      </style>
      <div class="swiper-slide content-slide<?php echo @$slide['imagem']['id'] ?>">
        <div class="slide__container">
          <?php echo (frmnt_pClass($text, "slide__desc")) ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
  <div class="swiper-pagination"></div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
</div>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const swiperHome = new Swiper(".swiper-capao", {
      pagination: {
        el: ".swiper-pagination",
        dynamicBullets: false,
        clickable: false,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  });
</script>