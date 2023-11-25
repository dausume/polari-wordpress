<?php
/**
 * The template part for header
 *
 * @package Political Campaign 
 * @subpackage political-campaign
 * @since political-campaign 1.0
 */
?>

<div class="main-header">
  <div class="row">
    <div class="col-lg-8 col-md-4 col-12 align-self-center">
      <?php get_template_part('template-parts/header/navigation'); ?>
    </div>
    <div class="col-lg-4 col-md-8 col-12 text-lg-start text-md-start text-center align-self-center">
      <?php if( get_theme_mod( 'political_campaign_donate_now_link') != '' || get_theme_mod( 'political_campaign_donate_now_text') != ''){ ?>
        <span class="donate me-lg-5 me-md-5 me-0"><a href="<?php echo esc_html(get_theme_mod('political_campaign_donate_now_link',''));?>" ><i class="fas fa-dollar-sign me-2"></i><?php echo esc_html(get_theme_mod('political_campaign_donate_now_text',''));?></a>
        </span>
      <?php } ?>

      <?php if( get_theme_mod( 'political_campaign_volunteer_link') != '' || get_theme_mod( 'political_campaign_volunteer_text') != ''){ ?>
        <span class="volunteer"><a href="<?php echo esc_html(get_theme_mod('political_campaign_volunteer_link',''));?>" ><i class="fas fa-user me-2"></i><?php echo esc_html(get_theme_mod('political_campaign_volunteer_text',''));?></a></span>
      <?php } ?>
    </div>
  </div>
</div>