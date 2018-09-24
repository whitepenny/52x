<?php
if ( ! empty( $form ) && function_exists( 'gravity_form' ) ) :
?>
<div class="gravityform_block">
  <?php if ( ! empty( $title ) ) : ?>
  <div class="gravityform_block_header" data-checkpoint-animation="fade-up">
    <?php if ( ! empty( $title ) ) : ?>
    <h2 class="gravityform_block_title"><?php echo $title; ?></h2>
    <?php endif; ?>
  </div>
  <?php endif; ?>
  <div class="gravityform_block_container gravityform_container" data-checkpoint-animation="fade-up">
    <?php gravity_form( $form, false, false ); ?>
  </div>
</div>
<?php
endif;
