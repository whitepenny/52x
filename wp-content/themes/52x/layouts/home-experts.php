<?php

$sections = get_sub_field( 'sections' );

$i = 0;
foreach ( $sections as $section ) :
?>
<div class="home_section home_experts bg_red <?php if ( $i == 0 ) echo '_active'; ?>" data-section="section_<?php echo $i; ?>">
  <div class="fs-row home_section_row">
    <div class="fs-cell home_experts_cell home_experts_container_<?php echo $i; ?>">
      <span class="home_section_label home_experts_label delay_1" data-checkpoint-animation="fade-up" data-checkpoint-container=".home_experts_container_<?php echo $i; ?>"><?php echo $section['label']; ?></span>
      <h2 class="home_section_title home_experts_title delay_2" data-checkpoint-animation="fade-up" data-checkpoint-container=".home_experts_container_<?php echo $i; ?>"><?php echo ftx_format_content( $section['title'] ); ?></h2>
    </div>
  </div>
  <span class="home_svg_container desktop js-svg_container">
    <?php echo file_get_contents( FTX_THEME_DIR . '/public/svg/svg_experts.svg' ); ?>
  </span>
  <span class="home_svg_container mobile js-svg_container">
    <?php echo file_get_contents( FTX_THEME_DIR . '/public/svg/svg_mobile.svg' ); ?>
  </span>
</div>
<?php
  $i++;
endforeach;
