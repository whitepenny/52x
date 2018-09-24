<?php

$sections = get_sub_field( 'sections' );
$background = get_sub_field( 'background' );

$background_options = ftx_image_background_page_header( $background['id'] );

$i = 0;
foreach ( $sections as $section ) :
?>
<div class="home_section home_contact <?php if ( $i == 0 ) echo '_active'; ?>" data-section="section_<?php echo $i; ?>">
  <div class="home_section_background js-background" data-background-options="<?php echo ftx_json_options( $background_options ); ?>"></div>
  <div class="fs-row fs-all-justify-center home_section_row">
    <div class="fs-cell fs-xs-full fs-sm-2 fs-md-4 fs-lg-8 fs-xl-6 home_casestudies_container_<?php echo $i; ?>">
      <h2 class="home_section_title home_contact_title delay_1" data-checkpoint-animation="fade-up" data-checkpoint-container=".home_casestudies_container_<?php echo $i; ?>"><?php echo ftx_format_content( $section['title'] ); ?></h2>
      <p class="home_section_content home_contact_content delay_2" data-checkpoint-animation="fade-up" data-checkpoint-container=".home_casestudies_container_<?php echo $i; ?>"><?php echo $section['content']; ?></p>
      <?php if ( ! empty( $section['button']['url'] ) && ! empty( $section['button']['title'] ) ) : ?>
      <div class="delay_3" data-checkpoint-animation="fade-up" data-checkpoint-container=".home_casestudies_container_<?php echo $i; ?>">
        <a href="<?php echo $section['button']['url']; ?>" class="home_section_button home_contact_button button_fill"><?php echo  $section['button']['title']; ?></a>
      </div>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php
  $i++;
endforeach;
