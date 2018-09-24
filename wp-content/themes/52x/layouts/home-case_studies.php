<?php

$sections = get_sub_field( 'sections' );
$background = get_sub_field( 'background' );
// $file = ftx_get_image( $background['id'], 'scaled-large' );

$background_options = ftx_image_background_page_header( $background['id'] );

$i = 0;
foreach ( $sections as $section ) :
?>
<div class="home_section home_casestudies <?php if ( $i == 0 ) echo '_active'; ?>" data-section="section_<?php echo $i; ?>">
  <div class="home_section_background js-background" data-background-options="<?php echo ftx_json_options( $background_options ); ?>"></div>

  <div class="fs-row home_section_row">
    <div class="fs-cell home_casestudies_container_<?php echo $i; ?>">
      <span class="home_section_label home_casestudies_label delay_1" data-checkpoint-animation="fade-up" data-checkpoint-container=".home_casestudies_container_<?php echo $i; ?>"><?php echo $section['label']; ?></span>
      <h2 class="home_section_title home_casestudies_title delay_2" data-checkpoint-animation="fade-up" data-checkpoint-container=".home_casestudies_container_<?php echo $i; ?>"><?php echo ftx_format_content( $section['title'] ); ?></h2>
      <div class="fs-row home_casestudy_columns case_study_columns">
        <div class="home_casestudies_background"></div>

        <?php
          if ( $section['order'] == 'candidate' ) :
        ?>
        <div class="fs-cell fs-md-3 fs-lg-5 fs-xl-4 fs-xl-push-1 home_casestudy_column case_study_column delay_3" data-checkpoint-animation="fade-up" data-checkpoint-container=".home_casestudies_container_<?php echo $i; ?>">
          <h3 class="case_study_column_title">Candidate</h3>
          <p class="home_casestudy_content"><?php echo $section['candidate']; ?></p>
        </div>
        <div class="fs-cell fs-md-3 fs-lg-2 fs-xl-2 home_casestudy_arrow case_study_arrow delay_3" data-checkpoint-animation="fade-up" data-checkpoint-container=".home_casestudies_container_<?php echo $i; ?>">
          <span></span>
        </div>
        <div class="fs-cell fs-md-3 fs-lg-5 fs-xl-4 home_casestudy_column case_study_column delay_3" data-checkpoint-animation="fade-up" data-checkpoint-container=".home_casestudies_container_<?php echo $i; ?>">
          <h3 class="case_study_column_title">Companies</h3>
          <p class="home_casestudy_content"><?php echo $section['client']; ?></p>
        </div>
        <?php
          else :
        ?>
        <div class="fs-cell fs-md-3 fs-lg-5 fs-xl-4 fs-xl-push-1 home_casestudy_column case_study_column delay_3" data-checkpoint-animation="fade-up" data-checkpoint-container=".home_casestudies_container_<?php echo $i; ?>">
          <h3 class="case_study_column_title">Companies</h3>
          <p class="home_casestudy_content"><?php echo $section['client']; ?></p>
        </div>
        <div class="fs-cell fs-md-3 fs-lg-2 fs-xl-2 home_casestudy_arrow case_study_arrow delay_3" data-checkpoint-animation="fade-up" data-checkpoint-container=".home_casestudies_container_<?php echo $i; ?>">
          <span></span>
        </div>
        <div class="fs-cell fs-md-3 fs-lg-5 fs-xl-4 home_casestudy_column case_study_column delay_3" data-checkpoint-animation="fade-up" data-checkpoint-container=".home_casestudies_container_<?php echo $i; ?>">
          <h3 class="case_study_column_title">Candidate</h3>
          <p class="home_casestudy_content"><?php echo $section['candidate']; ?></p>
        </div>
        <?php
          endif;
        ?>

      </div>
      <?php if ( ! empty( $section['button']['url'] ) && ! empty( $section['button']['title'] ) ) : ?>
      <div class="delay_4" data-checkpoint-animation="fade-up" data-checkpoint-container=".home_casestudies_container_<?php echo $i; ?>">
        <a href="<?php echo $section['button']['url']; ?>" class="home_section_button home_casestudies_button"><?php echo $section['button']['title']; ?></a>
      </div>
      <?php endif; ?>
    </div>
  </div>
  <span class="home_svg_container desktop js-svg_container">
    <?php echo file_get_contents( FTX_THEME_DIR . '/public/svg/svg_casestudies.svg' ); ?>
  </span>
  <span class="home_svg_container mobile js-svg_container">
    <?php echo file_get_contents( FTX_THEME_DIR . '/public/svg/svg_mobile.svg' ); ?>
  </span>
</div>
<style>
  /* .home_casestudies_background {
    background-image: url(<?php echo $file['src']; ?>);
  } */
</style>
<?php
  $i++;
endforeach;
