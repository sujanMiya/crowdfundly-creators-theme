<?php 
/**
 * Template Name: Documentation
 */

get_header('secondary'); 
?>

<div class="container-fluid">
  <div class="container">
    <div class="support-container">
        <div class="support-main">
            <div class="support-main-container">
                <span class="support-main-container__ellipse1"></span>
                <span class="support-main-container__ellipse2"></span>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-xl-8 col-lg-8 col-md-8 col-12">
            <div class="crowdfunly-document-header">
                <div class="crowdfunly-document-header__inner">
                    <h1 class="crowdfunly-document-header__inner-heading">Hello, what can we help you find?</h1>
                    <p class="crowdfunly-document-header__inner-title">Our extensive documentation is developed to make you a Crowdfundly master!</p>
                    <div class="input-group">
                        <?php echo do_shortcode('[betterdocs_search_form]'); ?>
                    </div>
                </div>
                <div class="crowdfunly-document-header__bg-shape">
                    <img class="crowdfunly-document-header__bg-shape-img"
                        src="<?php cftheme_asset( 'images/documentation/header-tag.png' ); ?>" />
                </div>
            </div>
        </div>
    </div>

    <div class="crowdfundly-ducument-card">
        <div class="row">
            <?php echo do_shortcode( '[betterdocs_category_grid post_counter="true" icon="true" masonry="true" column="2" posts_per_grid="6" nested_subcategory="true" terms="term_ID, term_ID" kb_slug=""]' ); ?>
        </div>
    </div>

  </div>
</div>
  
<?php get_footer(); ?>