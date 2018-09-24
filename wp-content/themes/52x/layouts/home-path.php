<?php

$sections = get_sub_field( 'sections' );

$i = 0;
foreach ( $sections as $section ) :
?>
<div class="home_section home_path <?php if ( $i == 0 ) echo '_active'; ?>" data-section="section_<?php echo $i; ?>">
  <div class="fs-row home_section_row home_path_container_<?php echo $i; ?>">

    <div class="home_path_graph">
      <span class="home_path_graph_svg js-svg_container">
        <?php echo file_get_contents( FTX_THEME_DIR . '/public/svg/svg_graph.svg' ); ?>
      </span>
    </div>

    <div class="fs-cell fs-lg-6 fs-all-justify-end home_path_header">

      <div class="home_path_header_container">
        <span class="home_section_label home_path_label delay_1" data-checkpoint-animation="fade-up" data-checkpoint-container=".home_path_container_<?php echo $i; ?>"><?php echo $section['label']; ?></span>
        <h2 class="home_section_title home_path_title delay_2" data-checkpoint-animation="fade-up" data-checkpoint-container=".home_path_container_<?php echo $i; ?>"><?php echo ftx_format_content( $section['title'] ); ?></h2>
        <div class="home_section_content home_path_content delay_3" data-checkpoint-animation="fade-up" data-checkpoint-container=".home_path_container_<?php echo $i; ?>">
          <p><?php echo ftx_format_content( $section['content'] ); ?>
          </p>
        </div>
      </div>

    </div>

    <?php /*
    <div class="fs-cell home_path_columns">
      <div class="home_path_items fs-row delay_3">
        <?php
          $markers = array( 'a', 'b', 'c' );
          $ii = 0;
          foreach ( $section['items'] as $item ) :
        ?>
        <div class="fs-cell fs-lg-third home_path_item delay_<?php echo $ii + 2;?>" data-checkpoint-animation="fade-up" data-checkpoint-container=".home_path_container_<?php echo $i; ?>">
          <span><?php echo $markers[ $ii ]; ?></span>
          <p class="home_path_item_content"><?php echo $item['content']; ?></p>
        </div>
        <?php
            $ii++;
          endforeach;
        ?>
      </div>
    </div>
    */ ?>
  </div>
  <span class="home_svg_container desktop js-svg_container">
    <?php echo file_get_contents( FTX_THEME_DIR . '/public/svg/svg_path.svg' ); ?>
  </span>
  <span class="home_svg_container mobile js-svg_container">
    <?php echo file_get_contents( FTX_THEME_DIR . '/public/svg/svg_mobile.svg' ); ?>
  </span>
</div>
<?php
  $i++;
endforeach;
