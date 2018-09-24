<?php

$page_id = get_option( 'page_for_posts' );

$content = ftx_get_the_content();

if ( ! empty( $content ) ) :
?>
<div class="page_container bg_white">
  <div class="fs-row">
    <div class="fs-cell fs-lg-7 fs-xl-6" data-checkpoint-animation="fade-up">
      <div class="page_content">
        <span class="news_item_author">By <?php echo get_the_author(); ?></span>
        <?php echo $content; ?>
      </div>
    </div>
    <div class="fs-cell fs-lg-4 fs-all-justify-end" data-checkpoint-animation="fade-up">
      <a href="<?php echo get_the_permalink( $page_id ); ?>" class="sidebar_back_button js-back_button">Back to <?php echo get_the_title( $page_id ); ?></a>
    </div>
  </div>
</div>
<?php
endif;
