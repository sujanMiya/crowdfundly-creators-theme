<?php

/**
 * Template Name: ChangeLog SAAS
 */

get_header('secondary');

$change_logs = cf_get_field('saas_release_logs');
?>

<div class="div" style="padding-top:200px"></div>
<div class="container-fluid">
  <div class="changelog-header ">
    <h1>Crowdfundly Changelog</h1>
    <p>We ensure you regular feature updates, bugfix and improvements to keep your site safe.</p>
  </div>
  <div class="timeline">
    <div class="shape1-visible ellipse"></div>
    <div class="shape2-visible ellipse"></div>
    <div class="shape3-visible ellipse"></div>
    <div class="shape4-visible ellipse"></div>
    <div class="shape5-visible ellipse"></div>
    <div class="shape6-visible ellipse"></div>
    <div class="shape7-visible ellipse"></div>
    <div class="shape8-visible ellipse"></div>
    <div class="shape9-visible ellipse"></div>
    <div class="shape10-visible ellipse"></div>
    <div class="shape11-visible ellipse"></div>
    <div class="shape12-visible ellipse"></div>
    <div class="shape13-visible ellipse"></div>
    <div class="shape14-visible ellipse"></div>
    <div class="shape15-visible ellipse"></div>
    <div class="shape16-visible ellipse"></div>
    <div class="timeline-wrapper">
      <div class="shape1 ellipse"></div>
      <div class="shape2 ellipse"></div>
      <div class="shape3 ellipse"></div>
      <div class="shape4 ellipse"></div>
      <div class="shape5 ellipse"></div>
      <div class="shape6 ellipse"></div>
      <div class="shape7 ellipse"></div>
      <div class="shape8 ellipse"></div>
      <div class="shape9 ellipse"></div>
      <div class="shape10 ellipse"></div>
      <div class="shape11 ellipse"></div>
      <div class="shape12 ellipse"></div>
      <div class="shape13 ellipse"></div>
      <div class="shape14 ellipse"></div>
      <div class="shape15 ellipse"></div>
      <div class="shape16 ellipse"></div>

    </div>

    <ul>
      <span class="default-line"></span>
      <span class="draw-line"></span>

      <?php
      $even_odd = 0;
      if ( $change_logs && ! empty( $change_logs ) ) :
        foreach ( $change_logs as $change_log ) :
          $class_name = $even_odd % 2 == 0 ? 'left' : 'right';
          ?>
          <li>
            <div class="<?php echo esc_attr( $class_name ); ?>">
              <h3 class="crowdfundly-title">
                <?php echo esc_html( $change_log['version'] ); ?>
              </h3>
              <?php echo wp_kses_post( $change_log['description'] ); ?>
              <div>
                <?php echo esc_html( $change_log['date'] ); ?>
              </div>
            </div>
          </li>
          <?php
          $even_odd++;
        endforeach;
      endif;
      ?>

    </ul>

  </div>
</div>

<?php get_footer(); ?>