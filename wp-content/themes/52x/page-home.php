<?php
/*
Template Name: Home
*/

get_header();

if ( have_posts() ) :
  while ( have_posts() ) :
    the_post();
?>
<?php // get_template_part( 'layouts/page_header', 'home' ); ?>
<?php get_template_part( 'layouts/blocks', 'home' ); ?>
<?php
  endwhile;
endif;

get_footer();
