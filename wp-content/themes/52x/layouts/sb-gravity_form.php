<?php
global $block_class;

$form = get_sub_field( 'gravity_form' );
$title = get_sub_field( 'title' );

?>
<div class="sidebar_form">
  <?php
    ftx_template_part( 'layouts/partial-gravity_form', array(
      'form' => $form,
      'title' => $title,
    ) );
  ?>
</div>
