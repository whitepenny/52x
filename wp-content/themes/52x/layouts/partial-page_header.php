<?php
if ( ! empty( $page_image ) ) :
  $background_options = ftx_image_background_page_header( $page_image['ID'] );
?>
<div class="page_header image_header <?php if ( ! empty( $header_class ) ) echo $header_class; ?> js-background" data-background-options="<?php echo ftx_json_options( $background_options ); ?>">
<?php
else:
?>
<div class="page_header bg_white <?php if ( ! empty( $header_class ) ) echo $header_class; ?>">
<?php
endif;
?>
  <div class="fs-row page_header_row" data-checkpoint-animation="fade-up">
    <div class="fs-cell page_header_cell">
      <h1 class="page_title">
        <?php echo ftx_format_content( $page_title ); ?>
      </h1>
    </div>
    <?php if ( ! empty( $page_intro ) ) : ?>
    <div class="fs-cell fs-md-4 fs-lg-6 page_header_cell">
      <div class="page_content page_intro">
        <p class="intro"><?php echo ftx_format_content( $page_intro ); ?></p>
      </div>
    </div>
    <?php endif; ?>
  </div>
</div>
