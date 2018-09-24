<?php

$form_title = get_field( 'form_title' );
$form_intro = get_field( 'form_intro' );
$form = get_field( 'gravity_form' );

?>
<div class="page_container page_contact bg_white">
  <div class="fs-row fs-all-justify-center">
    <div class="fs-cell fs-md-5 fs-lg-8 fs-xl-7" data-checkpoint-animation="fade-up">
      <div class="page_content page_contact_content">
        <?php if ( ! empty( $form_title ) ) : ?>
        <h3><?php echo $form_title; ?></h3>
        <?php endif; ?>
        <?php if ( ! empty( $form_intro ) ) : ?>
        <p><?php echo $form_intro; ?></p>
        <?php endif; ?>
      </div>
      <?php
        ftx_template_part( 'layouts/partial-gravity_form', array(
          'form' => $form,
        ) );
      ?>
    </div>
  </div>
</div>
