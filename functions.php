<?php

require_once __DIR__ . '/inc/nav-walker.php';

//function crowdfundly_theme_bootstrap() {
    //$theme_version = wp_get_theme()->get('Version');

//     wp_enqueue_style(
//         'cf-owl-style',
//         '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css',
//         array(),
//         $theme_version
//     );
//     wp_enqueue_style(
//         'cf-animate-style',
//         '//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css',
//         array(),
//         $theme_version
//     ); 

//     // wp_enqueue_style(
//     //     'cf-bootstrap-style',
//     //     '//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css',
//     //     array(),
//     //     $theme_version
//     // ); 

//     wp_enqueue_style(
//         'cf-font-awesome-style',
//         'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
//         array(),
//         $theme_version
//     ); 

//     wp_enqueue_style(
//         'cf-all-min-css',
//         'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
//         array(),
//         $theme_version
//     ); 

//     wp_enqueue_style(
//         'cf-google-apis-font',
//         '//fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Poppins:wght@400;500&family=Work+Sans:wght@300&display=swap',
//         array(),
//         $theme_version
//     ); 

//     wp_enqueue_style(
//         'cf-google-apis2-font',
//         'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Poppins:wght@400;500&family=Work+Sans:wght@300&display=swap',
//         array(),
//         $theme_version
//     ); 

//     // script
//     // wp_enqueue_script(
//     //     'cf-bootstrap-js',
//     //     '//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js',
//     //     [],
//     //     $theme_version
//     // );

//     wp_enqueue_script(
//         'cf-owl',
//         '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js',
//         [],
//         $theme_version
//     );

//     wp_enqueue_script(
//         'cf-cloudflare',
//         '//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js',
//         [],
//         $theme_version
//     );

// wp_enqueue_style( 'cf-style', get_stylesheet_uri(), array(), $theme_version );

//}
//add_action( 'wp_enqueue_scripts', 'crowdfundly_theme_bootstrap' );

function cftheme_options() {
    add_theme_support( 'post-thumbnails' );
    load_theme_textdomain( 'twentytwenty' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'responsive-embeds' );

    add_image_size( 'cf-thumbnail', 220, 150, true );

    register_nav_menus( array(
        'primary_menu' => 'Primary Menu',
    ) );
}
add_action( 'after_setup_theme', 'cftheme_options' );

function cftheme_excerpt_length( $length ) {
    if ( is_admin() ) {
            return $length;
    }
    return 20;
}
add_filter( 'excerpt_length', 'cftheme_excerpt_length', 999 );

function cftheme_excerpt_more( $more ) {
    return '...';
}
add_filter('excerpt_more', 'cftheme_excerpt_more');


if ( ! function_exists ( 'cftheme_pagination' ) ) {

	function cftheme_pagination( $args = array(), $class = 'pagination' ) {

        // if ($GLOBALS['wp_query']->max_num_pages <= 1) return;

		$args = wp_parse_args( $args, array(
			'mid_size'           => 1,
			'prev_next'          => true,
			'prev_text'          => __('&laquo;', 'probd'),
			'next_text'          => __('&raquo;', 'probd'),
			'screen_reader_text' => __('Posts navigation', 'probd'),
			'type'               => 'array',
			'current'            => max( 1, get_query_var('paged') ),
		) );

        $links = paginate_links($args);

        ?>

        <nav aria-label="<?php echo esc_attr( $args['screen_reader_text'], 'crowdfundly-theme' ); ?>">

            <ul class="pagination">

                <?php

                    foreach ( $links as $key => $link ) { ?>

                        <li class="page-item <?php echo strpos( $link, 'current' ) ? 'active' : '' ?>">

                            <?php echo str_replace( 'page-numbers', 'page-link', $link ); ?>

                        </li>

                <?php } ?>

            </ul>

        </nav>

        <?php
    }
}

function cftheme_asset($path) {
    echo esc_url( get_stylesheet_directory_uri() . "/assets/" . $path );
}

function cf_get_field($meta_key) {
    if ( ! function_exists( 'get_field' ) ) return false; 

    return get_field($meta_key);
}
