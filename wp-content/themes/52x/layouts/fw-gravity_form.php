<?php
global $block_class;

$form = get_sub_field( 'gravity_form' );
$title = get_sub_field( 'title' );

?>
<div class="padded_medium">
  <div class="fs-row fs-all-justify-center">
    <div class="fs-cell fs-lg-10 fs-xl-9">
      <?php
        ftx_template_part( 'layouts/partial-gravity_form', array(
          'form' => $form,
          'title' => $title,
        ) );
      ?>
    </div>
  </div>
</div>
