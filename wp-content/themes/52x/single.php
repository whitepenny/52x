<?php

get_header();

if ( have_posts() ) :
  while ( have_posts() ) :
    the_post();
?>
<?php get_template_part( 'layouts/page_header', 'news_detail' ); ?>
<?php get_template_part( 'layouts/page_content', 'news' ); ?>
<?php
  endwhile;
endif;

get_footer();
