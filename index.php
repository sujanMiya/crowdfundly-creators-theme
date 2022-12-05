<?php
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
            <div class="crowdfundly-features-solution__main-blog">
                <div class="crowdfundly-features-solution__main-blog__crowdfundly-features-solution">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-7 col-md-7 col-12">
                            <h1 class="crowdfundly-features-solution__main-blog__crowdfundly-features-solution__header">
                                Crowdfunding Blog</h1>
                            <p class="crowdfundly-features-solution__main-blog__crowdfundly-features-solution__desc">
                                Tips, trends, news & strategy about smart fundraising.</p>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-3 col-12">
                            <img class="crowdfundly-features-solution__main-blog__crowdfundly-features-solution__img"
                                src="<?php cftheme_asset( 'images/blog/group.png' ); ?>" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container">
            <?php
            $latest_post = new WP_Query( [ 'posts_per_page' => 1 ] );
            
            if ( $latest_post->have_posts() ) :
                while ( $latest_post->have_posts() ) : $latest_post->the_post();
                    ?>
                    <div class="crowdfunly-single-card">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-7 col-md-12 col-12">
                                <div class="crowdfundly-blog-info-card">
                                    <div class="crowdfundly-blog-info-card__wrapper">
                                        <div class="crowdfundly-blog-info-card__wrapper__inner"></div>
                                        <div class="crowdfundly-blog-info-card__wrapper__image">
                                            <?php
                                            if ( has_post_thumbnail() ) :
                                                the_post_thumbnail( 'large', [ 'class' => 'crowdfundly-blog-info-card__wrapper__image-img' ] );
                                            else:
                                            ?>    
                                                <img class="crowdfundly-blog-info-card__wrapper__image-img" src="<?php cftheme_asset( 'images/blog/How_to_use_social_proof_notification_to_get_more_donation_1280_720 1.png' ); ?>" />
                                                <?php
                                            endif;    
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-5 col-md-8 col-12 mx-auto">
                                <div class="crowdfundly-blog-info-card-content">
                                    <div class="crowdfundly-blog-info-card-content__header">
                                        <!-- <a href="#" class=""> -->
                                            <button class="crowdfundly-blog-info-card-content__header-btn">
                                                <?php
                                                $cats = get_the_category();
                                                echo esc_html( $cats[0]->name );
                                                ?>
                                            </button>
                                        <!-- </a> -->
                                        <span class="crowdfundly-blog-info-card-content__header-date">
                                            <?php the_date(); ?>
                                        </span>
                                        <!-- <span class="crowdfundly-blog-info-card-content__header-time">05 Min Read</span> -->
                                    </div>
                                    <div class="crowdfundly-blog-info-card-content__body">
                                        <h1 class="crowdfundly-blog-info-card-content__body-heading">
                                            <?php the_title(); ?>
                                        </h1>
                                        <div class="crowdfundly-blog-info-card-content__body-desc">
                                            <?php the_excerpt(); ?>
                                        </div>
                                    </div>
                                    <div class="crowdfundly-blog-info-card-content__footer">
                                        <a href="<?php the_permalink(); ?>" class="">
                                            <button class="crowdfundly-blog-info-card-content__footer-btn">
                                                Read more
                                                <img class="crowdfundly-blog-info-card-content__footer-btn__right-arrow"
                                                    src="<?php cftheme_asset( 'images/blog/right-arrow.png' ); ?>" />
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php    
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
            

            <div class="row">
                <?php
                $all_post = new WP_Query( [ 'posts_per_page' => 3 ] );

                if( $all_post-> have_posts() ) :
                    $count = 0;
                    while ( $all_post->have_posts() ) : $all_post->the_post();
                        $count++;
                        if ($count === 1) continue;
                        ?>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="crowdfundly-single-card">
                                <div class="">
                                    <div class="crowdfundly-blog-info-card">
                                        <div
                                            class="crowdfundly-blog-info-card__wrapper crowdfundly-blog-info-card__single-card-wrapper">
                                            <div class="crowdfundly-blog-info-card__wrapper__inner"></div>
                                            <div class="crowdfundly-blog-info-card__wrapper__image">
                                                <?php
                                                if ( has_post_thumbnail() ) :
                                                    the_post_thumbnail( 'medium', [ 'class' => 'crowdfundly-blog-info-card__wrapper__image-img' ] );
                                                else:
                                                ?>    
                                                    <img class="crowdfundly-blog-info-card__wrapper__image-img" src="<?php cftheme_asset( 'images/blog/How_to_use_social_proof_notification_to_get_more_donation_1280_720 1.png' ); ?>" />
                                                    <?php
                                                endif;    
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="crowdfundly-blog-info-card-content">
                                        <div class="crowdfundly-blog-info-card-content__header">
                                            <!-- <a href="#" class=""> -->
                                                <button class="crowdfundly-blog-info-card-content__header-btn">
                                                    <?php
                                                    $cats = get_the_category();
                                                    echo esc_html( $cats[0]->name );
                                                    ?>
                                                </button>
                                            <!-- </a> -->
                                            <span class="crowdfundly-blog-info-card-content__header-date">
                                                <?php echo esc_html( get_the_date() ); ?>
                                            </span>
                                            <!-- <span class="crowdfundly-blog-info-card-content__header-time">05 Min Read</span> -->
                                        </div>
                                        <div class="crowdfundly-blog-info-card-content__body">
                                            <h1 class="crowdfundly-blog-info-card-content__body-heading">
                                                <?php the_title(); ?>
                                            </h1>
                                            <div class="crowdfundly-blog-info-card-content__body-desc">
                                                <?php the_excerpt(); ?>
                                            </div>
                                        </div>
                                        <div class="crowdfundly-blog-info-card-content__footer">
                                            <a href="<?php the_permalink(); ?>" class="">
                                                <button class="crowdfundly-blog-info-card-content__footer-btn">
                                                    Read more
                                                    <img class="crowdfundly-blog-info-card-content__footer-btn__right-arrow"
                                                        src="<?php cftheme_asset( 'images/blog/right-arrow.png' ); ?>" />
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    endwhile;

                    // $big = 999999999;
                    // $arrow = get_stylesheet_directory_uri() . "/assets/images/blog/right-arrow.png";
                    // $pagination = paginate_links( array(
                    //     'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                    //     'format' => '?paged=%#%',
                    //     'current' => max( 1, get_query_var('paged') ),
                    //     'total' => $all_post->max_num_pages,
                    //     'prev_text' => '<span><img class="crowdfunly-blog-pagination__inner-menu__left-arrow" src="' . $arrow . '" /></span>',
                    //     'next_text' => '<span><img class="crowdfunly-blog-pagination__inner-menu__right-arrow" src="' . $arrow . '" /></span>'
                    // ) );
                    ?>

                    <!-- <div class="crowdfunly-blog-pagination">
                        <div class="crowdfunly-blog-pagination__inner">
                            <ul class="crowdfunly-blog-pagination__inner-menu">
                                <?php //echo $pagination; ?>
                            </ul>
                        </div>
                    </div> -->

                    <?php
                    wp_reset_postdata();
                endif;
                ?>
            </div>

            <?php //cftheme_pagination(); ?>
            <!-- <div class="crowdfunly-blog-pagination">
                <div class="crowdfunly-blog-pagination__inner">
                    <ul class="crowdfunly-blog-pagination__inner-menu">
                        <span><img class="crowdfunly-blog-pagination__inner-menu__left-arrow"
                            src="images/blog/right-arrow.png" /></span>
                        <li class="crowdfunly-blog-pagination__inner-menu-item crowdfunly-blog-pagination__inner-menu-item__active">
                            1
                        </li>
                        <li class="crowdfunly-blog-pagination__inner-menu-item">
                            2
                        </li>
                        <li class="crowdfunly-blog-pagination__inner-menu-item">
                            3
                        </li>
                        <span><img class="crowdfunly-blog-pagination__inner-menu__right-arrow"
                                src="images/blog/right-arrow.png" /></span>
                    </ul>
                </div>
            </div> -->

        </div>
    </div>

</div>


<?php get_footer(); ?>