<?php

$page_id = get_the_ID();

$page_title = get_field( 'page_title', $page_id );
$page_intro = get_field( 'page_intro', $page_id );
$page_image = get_field( 'page_image', $page_id );

if ( empty( $page_title ) && ! is_home() ) {
  $page_title = get_the_title( $page_id );
}

ftx_template_part( 'layouts/partial-page_header', array(
  'page_title' => $page_title,
  'page_intro' => $page_intro,
  'page_image' => $page_image,
) );
