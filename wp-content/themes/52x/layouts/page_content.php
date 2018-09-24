<?php

$content = ftx_get_the_content();

if ( ! empty( $content ) ) :
?>
<div class="page_container bg_white">
  <div class="fs-row">
    <div class="fs-cell fs-lg-7 fs-xl-6" data-checkpoint-animation="fade-up">
      <div class="page_content">
        <?php echo $content; ?>
      </div>
    </div>
    <div class="fs-cell fs-lg-4 fs-all-justify-end" data-checkpoint-animation="fade-up">
      <?php get_template_part( 'layouts/blocks', 'sidebar' ); ?>
    </div>
  </div>
</div>
<?php
endif;
