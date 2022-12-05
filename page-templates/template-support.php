<?php 
/**
 * Template Name: Support
 */

get_header('secondary'); 
?>

<div class="container-fluid">
        <img class="support-container-left-img" src="/images/support/supportcontainerleft.png" alt="">
        <div class="container">

            <div class="support-container">

                <div class="support-main">
                    <div class="support-main-container">
                        <span class="support-main-container__ellipse1"></span>
                        <span class="support-main-container__ellipse2"></span>
                    </div>
                    <div class="content-layout">
                        <div class="header-text">
                            <h1 class="header-text__header">How Can We Help You?</h1>
                            <p class="header-text__title">Please get in touch and our expert support team will answer all of your questions.</p>
                        </div>
                        <div>
                            <div class="form-layout">
                                <span class="form-layout__ellipse-top-visible"></span>
                                <span class="form-layout__ellipse-bottom-visible"></span>
                                <div class="form-content-layout">
                                    <div class="form-container">
                                        <span class="form-container__ellipse-left"></span>
                                        <span class="form-container__ellipse-right"></span>

                                        <!-- <span class="form-container__ellipse-bottom"></span> -->
                                    </div>
                                    <div class="input-field">
                                        <div class="name-content">
                                            <div class="row">
                                                <?php echo do_shortcode('[fluentform id="4"]'); ?>
                                            </div> <!-- row -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php get_footer(); ?>