<?php

$title = get_sub_field( 'title' );
$sections = get_sub_field( 'sections' );
$background = get_sub_field( 'background' );

$background_options = ftx_image_background_page_header( $background['id'] );

?>
<div class="home_section home_header">
  <div class="home_section_background js-background" data-background-options="<?php echo ftx_json_options( $background_options ); ?>"></div>
  <div class="fs-row home_section_row">
    <div class="fs-cell">
      <h1 class="home_section_title home_header_title"><?php echo ftx_format_content( $title ); ?></h1>
      <div class="home_header_buttons">
        <?php
          $i = 0;
          foreach ( $sections as $section ) :
            $class = ( $i == 0 ) ? '' : 'button_alt';
            // $hash = ( $i == 0 ) ? 'candidate' : 'client';
            $hash = $section['hash'];
        ?>
        <button type="button" class="home_section_button home_header_button button_fill <?php echo $class; ?> js-section_trigger" data-target="<?php echo $i; ?>" data-hash="<?php echo $hash; ?>"><?php echo $section['title']; ?></button>
        <?php
            $i++;
          endforeach;
        ?>
      </div>
    </div>
  </div>
  <span class="home_svg_container desktop desktop_lg js-svg_container">
    <?php echo file_get_contents( FTX_THEME_DIR . '/public/svg/svg_header_small.svg' ); ?>
  </span>
  <span class="home_svg_container desktop desktop_xl js-svg_container">
    <?php echo file_get_contents( FTX_THEME_DIR . '/public/svg/svg_header.svg' ); ?>
  </span>
  <span class="home_svg_container mobile js-svg_container">
    <?php echo file_get_contents( FTX_THEME_DIR . '/public/svg/svg_mobile.svg' ); ?>
  </span>
</div>
<span class="page_anchor" id="start"></span>
