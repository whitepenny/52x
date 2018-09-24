<div class="news_grid bg_white">
  <div class="fs-row">
    <?php
    if ( have_posts() ) :
      while ( have_posts() ) :
        the_post();

        $categories = wp_get_post_categories( get_the_ID(), array(
          'fields' => 'all',
        ) );
    ?>
    <div class="fs-cell fs-md-3 fs-lg-4 news_item" data-checkpoint-animation="fade-up" data-checkpoint-container=".news_grid">
      <a href="<?php echo get_the_permalink(); ?>" class="news_item_link">
        <label class="news_item_label">
          <?php
            if ( ! empty( $categories ) ) :
              echo $categories[0]->name;
            endif;
          ?>
        </label>
        <h2 class="news_item_title"><?php echo get_the_title(); ?></h2>
        <p class="news_item_blurb"><?php echo ftx_trim_length( strip_tags( ftx_get_the_content() ), 50 ); ?></p>
        <span class="news_item_author">By <?php echo get_the_author(); ?></span>
      </a>
    </div>
    <?php
      endwhile;
    endif;
    ?>
    <div class="fs-cell pagination" data-checkpoint-animation="fade-up">
      <?php ftx_pagination(); ?>
    </div>
  </div>
</div>
