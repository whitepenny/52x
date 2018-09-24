<?php

$page_id = get_option( 'page_for_posts' );

$page_title = get_field( 'page_title', $page_id );
$page_image = get_field( 'page_image', $page_id );

if ( empty( $page_title ) && ! is_home() ) {
  $page_title = get_the_title( $page_id );
}

ftx_template_part( 'layouts/partial-page_header', array(
  'header_class' => 'news_header',
  'page_title' => $page_title,
  'page_image' => $page_image,
) );
