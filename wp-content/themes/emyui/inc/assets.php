<?php
if ( ! function_exists( 'emyui_enqueue_scripts' ) ) :
    function emyui_enqueue_scripts() {

    wp_enqueue_script( 'vendor', get_template_directory_uri() . '/js/vendor.min.js', false, null, true);


    wp_enqueue_script( 'jqueryfancybox', get_template_directory_uri() . '/plugins/fancybox/jquery.fancybox.min.js', false, null, true);

    wp_enqueue_script( 'jqueryniceselect', get_template_directory_uri() . '/plugins/nice-select/jquery.nice-select.min.js', false, null, true);


    wp_enqueue_script( 'aos', get_template_directory_uri() . '/plugins/aos/aos.min.js', false, null, true);


    wp_enqueue_script( 'slick', get_template_directory_uri() . '/plugins/slick/slick.min.js', false, null, true);


    wp_enqueue_script( 'typed', get_template_directory_uri() . '/plugins/typed/typed.min.js', false, null, false);


    wp_enqueue_script( 'jquerywaypoints', get_template_directory_uri() . '/plugins/waypoints/jquery.waypoints.min.js', false, null, true);


    wp_enqueue_script( 'particlescode', get_template_directory_uri() . '/plugins/particles/particles-code.js', false, null, true);


    wp_enqueue_script( 'particles', get_template_directory_uri() . '/plugins/particles/particles.js', false, null, true);


    wp_enqueue_script( 'parallax', get_template_directory_uri() . '/plugins/parallax/parallax.js', false, null, true);

    wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', false, null, true);
    
    wp_enqueue_script( 'comment-reply' );
    wp_deregister_style( 'bootstrap' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', false, null, 'all');

    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&display=swap', false ); 

    wp_deregister_style( 'all' );
    wp_enqueue_style( 'all', get_template_directory_uri() . '/fonts/fontawesome-5/css/all.css', false, null, 'all');

    wp_deregister_style( 'slick' );
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/plugins/slick/slick.min.css', false, null, 'all');

    wp_deregister_style( 'jqueryfancybox' );
    wp_enqueue_style( 'jqueryfancybox', get_template_directory_uri() . '/plugins/fancybox/jquery.fancybox.min.css', false, null, 'all');

    wp_deregister_style( 'aos' );
    wp_enqueue_style( 'aos', get_template_directory_uri() . '/plugins/aos/aos.min.css', false, null, 'all');

    wp_deregister_style( 'niceselect' );
    wp_enqueue_style( 'niceselect', get_template_directory_uri() . '/plugins/nice-select/nice-select.min.css', false, null, 'all');

    if ( is_rtl() ) {
    wp_deregister_style( 'mainrtl' );
        wp_enqueue_style( 'mainrtl', get_template_directory_uri() . '/css/mainrtl.css', false, null, 'all');

    }else{
    wp_deregister_style( 'main' );
        wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css', false, null, 'all');
    }
    if ( is_rtl() ) {
        wp_deregister_style( 'customrtl' );
        wp_enqueue_style( 'emyui-customrtl', get_template_directory_uri() . '/css/customrtl.css', false, null, 'all');

    }else{
        wp_deregister_style( 'custom' );
        wp_enqueue_style( 'emyui-custom', get_template_directory_uri() . '/css/custom.css', false, null, 'all');

    }
    if ( is_rtl() ) {
        wp_deregister_style( 'google-fonts' );
        wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400&display=swap', false );

    }
    wp_deregister_style( 'emyui-style' );
    wp_enqueue_style( 'emyui-style', get_bloginfo('stylesheet_url'), false, null, 'all');
    }

    
    add_action( 'wp_enqueue_scripts', 'emyui_enqueue_scripts' );
endif;