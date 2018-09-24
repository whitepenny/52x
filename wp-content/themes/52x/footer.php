<?php
$main_title = get_bloginfo( 'name' );

$social_links = get_field( 'global_social_links', 'option' );
$phone_numbers = get_field( 'global_phone_numbers', 'option' );
?>
        </main>
      </div>
    </div>
    <footer class="footer">
      <div class="fs-row fs-all-align-center">
        <div class="fs-cell fs-lg-half footer_column">
          <div class="footer_contact">
            <div class="footer_phone_numbers">
              <?php
                if ( ! empty( $phone_numbers ) ) :
                  foreach ( $phone_numbers as $phone_number ) :
              ?>
              <a href="tel:<?php echo $phone_number['number']; ?>" class="footer_link"><?php echo $phone_number['number']; ?> <?php echo $phone_number['label']; ?></a>
              <?php
                  endforeach;
                endif;
              ?>
            </div>
            <div class="footer_social">
              <?php foreach ( $social_links as $social_link ) : ?>
              <a href="<?php echo $social_link['link']; ?>" class="footer_social_link" target="_blank">
                <span class="icon social_<?php echo strtolower( $social_link['service'] ); ?>"></span>
                <span class="screenreader"><?php echo $social_link['service']; ?></span>
              </a>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
        <div class="fs-cell fs-lg-half fs-lg-first footer_column footer_copyright">
          &copy; <?php echo date( 'Y' ); ?> <?php echo $main_title; ?>. All Rights Reserved.
        </div>
      </div>
    </footer>

    <?php
      $navigation_options = array(
        'type' => 'overlay',
        'gravity' => 'right',
        'label' => false,
      );
    ?>
    <div class="mobile_nav js-navigation" data-navigation-options="<?php echo ftx_json_options( $navigation_options ); ?>" data-navigation-handle=".js-mobile_nav_handle" data-navigation-content=".js-mobile_nav_content">
      <?php ftx_main_navigation( 2 ); ?>
    </div>

    <?php wp_footer(); ?>

  </body>
</html>
