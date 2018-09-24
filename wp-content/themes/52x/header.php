<?php
$main_title = get_bloginfo( 'name' );

$scripts_head = get_field( 'scripts_head', 'option' );
$scripts_body = get_field( 'scripts_body', 'option' );
?><!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <?php wp_head(); ?>
    <?php ftx_favicons(); ?>
    <?php echo $scripts_head; ?>
  </head>
  <body <?php body_class( 'fs-grid fs-grid-fluid' ); ?> >
    <?php echo $scripts_body; ?>

    <div class="container">

      <header class="header js-header <?php echo ( is_front_page() ) ? 'flipped' : ''; ?>">
        <a href="<?php echo get_home_url(); ?>" class="header_logo">
          <span class="icon logo_white"></span>
          <span class="icon logo_black"></span>
          <span class="screenreader"><?php echo $main_title; ?></span>
        </a>
        <div class="main_nav">
          <?php ftx_main_navigation( 2 ); ?>
        </div>
        <button type="button" class="header_nav_handle js-mobile_nav_handle">
          <span class="icon mobile_handle"></span>
          <span class="screenreader">Menu</span>
        </button>
      </header>

      <div class="page_wrapper js-mobile_nav_content">
        <main class="main">
