<?php

$sections = get_sub_field( 'sections' );
$background = get_sub_field( 'background' );

$background_options = ftx_image_background_page_header( $background['id'] );

$i = 0;
foreach ( $sections as $section ) :
?>
<div class="home_section home_approach <?php if ( $i == 0 ) echo '_active'; ?>" data-section="section_<?php echo $i; ?>">
  <div class="home_section_background js-background" data-background-options="<?php echo ftx_json_options( $background_options ); ?>"></div>
  <div class="fs-row home_section_row">
    <div class="fs-cell home_approach_cell home_approach_container_<?php echo $i; ?>">
      <span class="home_section_label home_approach_label delay_1" data-checkpoint-animation="fade-up" data-checkpoint-container=".home_approach_container_<?php echo $i; ?>"><?php echo $section['label']; ?></span>
      <h2 class="home_section_title home_approach_title delay_2" data-checkpoint-animation="fade-up" data-checkpoint-container=".home_approach_container_<?php echo $i; ?>"><?php echo ftx_format_content( $section['title'] ); ?></h2>
      <?php if ( ! empty( $section['button']['url'] ) && ! empty( $section['button']['title'] ) ) : ?>
      <div class="delay_3" data-checkpoint-animation="fade-up" data-checkpoint-container=".home_approach_container_<?php echo $i; ?>">
        <a href="<?php echo $section['button']['url']; ?>" class="home_section_button home_approach_button"><?php echo $section['button']['title']; ?></a>
      </div>
      <?php endif; ?>
    </div>
  </div>
  <span class="home_svg_container desktop js-svg_container">
    <?php echo file_get_contents( FTX_THEME_DIR . '/public/svg/svg_approach.svg' ); ?>
  </span>
  <span class="home_svg_container mobile js-svg_container">
    <?php echo file_get_contents( FTX_THEME_DIR . '/public/svg/svg_mobile.svg' ); ?>
  </span>
</div>
<?php
  $i++;
endforeach;
