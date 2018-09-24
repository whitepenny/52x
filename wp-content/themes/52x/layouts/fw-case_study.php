<?php

define( 'WP_CACHE', false );

global $block_class;
global $case_study_counter;

if ( empty( $case_study_counter ) ) {
  $case_study_counter = 0;
}

$case_study_counter++;

$title = get_sub_field( 'title' );
$candidate = get_sub_field( 'candidate' );
$client = get_sub_field( 'client' );

$hash = ( ! empty( $_COOKIE['52x-section-hash'] ) ) ? $_COOKIE['52x-section-hash'] : 'client';
?>
<div class="case_study <?php echo $block_class; ?>">
  <div class="fs-row case_study_row">
    <div class="fs-cell fs-all-justify-center fs-lg-10 case_study_cell">
      <span class="case_study_label" data-checkpoint-animation="fade-up" data-checkpoint-container=".<?php echo $block_class; ?>">
        <span>Case Study <?php echo $case_study_counter; ?></span>
      </span>
      <h2 class="case_study_title checkpoint_delay_1" data-checkpoint-animation="fade-up" data-checkpoint-container=".<?php echo $block_class; ?>"><?php echo $title; ?></h2>
      <div class="fs-row case_study_columns">

        <?php
          if ( $hash == 'client' ) :
        ?>
        <div class="fs-cell fs-md-3 fs-lg-5 fs-xl-4 case_study_column case_study_candidate checkpoint_delay_2" data-checkpoint-animation="fade-up" data-checkpoint-container=".<?php echo $block_class; ?>">
          <h3 class="case_study_column_title">Client</h3>
          <p class="case_study_column_content"><?php echo $client; ?></p>
        </div>
        <div class="fs-cell fs-md-3 fs-lg-2 fs-xl-4 case_study_arrow checkpoint_delay_2" data-checkpoint-animation="fade-up" data-checkpoint-container=".<?php echo $block_class; ?>">
          <span></span>
        </div>
        <div class="fs-cell fs-md-3 fs-lg-5 fs-xl-4 fs-lg-justify-end case_study_column case_study_client checkpoint_delay_2" data-checkpoint-animation="fade-up" data-checkpoint-container=".<?php echo $block_class; ?>">
          <h3 class="case_study_column_title">Candidate</h3>
          <p class="case_study_column_content"><?php echo $candidate; ?></p>
        </div>
        <?php
          else :
        ?>
        <div class="fs-cell fs-md-3 fs-lg-5 fs-xl-4 case_study_column case_study_candidate checkpoint_delay_2" data-checkpoint-animation="fade-up" data-checkpoint-container=".<?php echo $block_class; ?>">
          <h3 class="case_study_column_title">Candidate</h3>
          <p class="case_study_column_content"><?php echo $candidate; ?></p>
        </div>
        <div class="fs-cell fs-md-3 fs-lg-2 fs-xl-4 case_study_arrow checkpoint_delay_2" data-checkpoint-animation="fade-up" data-checkpoint-container=".<?php echo $block_class; ?>">
          <span></span>
        </div>
        <div class="fs-cell fs-md-3 fs-lg-5 fs-xl-4 fs-lg-justify-end case_study_column case_study_client checkpoint_delay_2" data-checkpoint-animation="fade-up" data-checkpoint-container=".<?php echo $block_class; ?>">
          <h3 class="case_study_column_title">Client</h3>
          <p class="case_study_column_content"><?php echo $client; ?></p>
        </div>
        <?php
          endif;
        ?>

      </div>
    </div>
  </div>
</div>
