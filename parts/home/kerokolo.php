<?php
$data = @$args['kerokolo'];
if (@$data) :
?>
  <section class="banner">
    <div class="banner__btn">
      <a target="<?php echo ($data['target']) ?>" href="<?php echo ($data['url']) ?>"><?php echo ($data['title']) ?></a>
    </div>
  </section>
<?php endif; ?>