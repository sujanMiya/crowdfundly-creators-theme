<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- external css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- External javascript -->
    <link rel="application/javascript" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js">
    <link rel="application/javascript" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> -->
    
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- google work sans fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Poppins:wght@400;500&family=Work+Sans:wght@300&display=swap"
        rel="stylesheet">
    <!-- google popppins fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Poppins:wght@200;400;500&family=Work+Sans:wght@300&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Poppins:wght@400;500&family=Work+Sans:wght@300&display=swap"
        rel="stylesheet">
    <!-- cdn bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- cdn bootstrap bundle js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/assets/css/main.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/style.css'; ?>">
    
    <title>Crowdfundly</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        referrerpolicy="no-referrer"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-02T7NJF6TM"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-02T7NJF6TM');
    </script>
	
	<!-- facebook-domain-verification -->
	<meta name="facebook-domain-verification" content="zptfbovof1a3uc0j0nh1l4y20yljby" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <!-- navbar -->
    <div class="container-fluid">
        <div class="crowdfundly-banner-content">
            <div class="crowdfundly-banner-content__content2">
                <div class="crowdfundly-banner-content__content2__content3">
                    <div class="crowdfundly-banner-content__content2__content3__content4">
                        <div class="crowdfundly-banner-content__content2__content3__content4__subcontent">
                        </div>
                    </div>
                </div>

                <div class="">
                    <div class="crowdfundly-navbar black">
                        <div class="container-fluid">
                            <div class="container">
                                <div id="header">
                                    <div class="logo crowdfundly-header__logo">
                                        <a href="<?php echo site_url('/'); ?>">
                                            <img
                                            src="<?php cftheme_asset( 'images/logo/crowdfundly-logo.png' ); ?>"
                                            alt="crowdfundly logo"
                                            class="crowdfundly-logo">
                                        </a>
                                    </div>
                                    <nav>
                                        <ul id="navi" class="crowdfundly-header__menu-item">
                                            <?php
                                            wp_nav_menu( array(
                                                'theme_location'	=> 'primary_menu',
                                                'menu_class'        => 'crowdfundly-header__menu-item',
                                                'menu_id'           => 'navi',
                                                'depth'             => 2,
                                                'walker'            => new WP_Bootstrap_Navwalker(),
                                            ) );
                                            ?>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
