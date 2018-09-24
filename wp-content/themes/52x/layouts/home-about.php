<?php

$sections = get_sub_field( 'sections' );

?>
<?php
  $i = 0;
  foreach ( $sections as $section ) :
?>
<div class="home_section home_about bg_red <?php if ( $i == 0 ) echo '_active'; ?>" data-section="section_<?php echo $i; ?>">
  <div class="fs-row fs-all-justify-center home_section_row">
    <div class="fs-cell fs-xs-full fs-sm-2 fs-md-4 fs-lg-10 fs-xl-full home_about_container_<?php echo $i; ?>">
      <span class="home_section_label home_about_label delay_1" data-checkpoint-animation="fade-up" data-checkpoint-container=".home_about_container_<?php echo $i; ?>"><?php echo $section['label']; ?></span>
      <h1 class="home_section_title home_about_title delay_2" data-checkpoint-animation="fade-up" data-checkpoint-container=".home_about_container_<?php echo $i; ?>"><?php echo ftx_format_content( $section['title'] ); ?></h1>
      <div class="home_about_services delay_3" data-checkpoint-animation="fade-up" data-checkpoint-container=".home_about_container_<?php echo $i; ?>">
        <?php foreach ( $section['services'] as $service ) : ?>
        <span class="home_about_service"><?php echo $service['title']; ?></span>
        <?php endforeach; ?>
      </div>
      <?php if ( ! empty( $section['button']['url'] ) && ! empty( $section['button']['title'] ) ) : ?>
      <div class="delay_4" data-checkpoint-animation="fade-up" data-checkpoint-container=".home_about_container_<?php echo $i; ?>">
        <a href="<?php echo $section['button']['url']; ?>" class="home_section_button home_about_button"><?php echo $section['button']['title']; ?></a>
      </div>
      <?php endif; ?>
    </div>
  </div>
  <span class="home_svg_container desktop js-svg_container">
    <?php echo file_get_contents( FTX_THEME_DIR . '/public/svg/svg_about.svg' ); ?>
  </span>
  <span class="home_svg_container mobile js-svg_container">
    <?php echo file_get_contents( FTX_THEME_DIR . '/public/svg/svg_mobile.svg' ); ?>
  </span>
</div>
<?php
    $i++;
  endforeach;
?>
