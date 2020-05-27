<?php
/**
 * The template part for top header
 *
 * @package VW Medical Care 
 * @subpackage vw_medical_care
 * @since VW Medical Care 1.0
 */
?>
<?php if( get_theme_mod('vw_medical_care_topbar_hide_show') != ''){ ?>
  <div id="topbar">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <?php if( get_theme_mod( 'vw_medical_care_header_text') != '') { ?>
            <p><?php echo esc_html(get_theme_mod('vw_medical_care_header_text',''));?></p>
          <?php }?>
        </div>      
        <div class="col-lg-5 col-md-5">
          <?php dynamic_sidebar('social-links'); ?>
        </div>
        <div class="col-lg-1 col-md-1">
          <?php if( get_theme_mod( 'vw_medical_care_header_search',true) != '') { ?>
            <div class="search-box">
              <a href="#" onclick="vw_medical_care_search_open()"><span><i class="fas fa-search"></i></span></a>
            </div>
          <?php }?>
        </div>
        <div class="serach_outer">
          <div class="serach_inner">
            <?php get_search_form(); ?>
          </div>
          <a href="#main" onclick="vw_medical_care_search_close()" class="closepop"><i class="fa fa-window-close"></i></a>
        </div>
      </div>
    </div>
  </div>
<?php }?>