<?php
$content = get_sub_field( 'content' );

if ( ! empty( $content ) ) :
?>
<div class="page_content">
  <?php echo $content; ?>
</div>
<?php
endif;
