<?php
/*
Template Name: Contact
*/

get_header();

if ( have_posts() ) :
  while ( have_posts() ) :
    the_post();
?>
<?php get_template_part( 'layouts/page_header', 'centered' ); ?>
<?php get_template_part( 'layouts/page_content', 'contact' ); ?>
<?php
  endwhile;
endif;

get_footer();
