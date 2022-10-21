<?php
$options = array(
  "slider" => @$args['slider'],
);

?>
<div class="swiper swiper-capao">
  <div class="swiper-wrapper">
    <?php foreach ($options['slider'] as $slide) :
      $image = @$slide['imagem']['sizes']['1536x1536'];
      $text = @$slide['texto'];
      $link = ($slide['link']) ? $slide['link']['url'] : "";
    ?>
      <div class="swiper-slide" style="background-image: linear-gradient(90deg, #40c18767 15% 86%), url('<?php echo ($image) ?>') !important;">
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
      autoplay:{
        true,
        delay:5000,
      
      }
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  });
</script>