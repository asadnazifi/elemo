<?php
if ( ! function_exists( 'emyui_setup' ) ) :
function emyui_setup() {
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Load Text Domain Begin */
    load_theme_textdomain( 'emyui', get_template_directory() . '/languages' );
    /* Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo' );


    add_theme_support( 'boostify-header-footer' );
    




/**
 * Register Custom Navigation Walker
*/
require_once get_template_directory() . '/inc/walker-menu.php';
    // Add menus.
    register_nav_menus( array(
        'primary' => esc_html( 'Primary Menu', 'emyui' ),
        'footer-one' => esc_html( 'Footer 1', 'emyui' ),
        'footer-two' => esc_html( 'Footer 2', 'emyui' ),
        'footer-three' => esc_html( 'Footer 3', 'emyui' ),
    ) );

add_filter ( 'nav_menu_css_class', 'emyui_theme_menu_item_class', 10, 4 );
function emyui_theme_menu_item_class ( $classes, $item, $args, $depth ){
  $classes[] = 'py-2 footer-list-link';
  return $classes;
}

	if ( ! isset( $content_width ) )
  $content_width = 900;
     
  /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );
    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // emyui_setup

add_action( 'after_setup_theme', 'emyui_setup' );

if ( ! function_exists( 'emyui_init' ) ) :

function emyui_init() {

    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

}
endif; // emyui_setup

add_action( 'init', 'emyui_init' );


if ( ! function_exists( 'emyui_pingback_header' ) ) {
	/**
	 * Add a pingback url auto-discovery header for singularly identifiable articles.
	 */
	function emyui_pingback_header() {
		if ( is_singular() && pings_open() ) {
			printf( '<link rel="pingback" href="%s">' . "\n", get_bloginfo( 'pingback_url' ) );
		}
	}
	
}
add_action( 'wp_head', 'emyui_pingback_header', 30 );

    /*
     * Register widget areas.
     */
    /* Register Sidebars Begin */
function emyui_widgets_init() {
  register_sidebar( array(
     'name' => esc_html( 'Primary', 'emyui' ),
     'id' => 'primary',
     
  ) );
}
add_action( 'widgets_init', 'emyui_widgets_init' );


if ( ! function_exists( 'emyui_customize_register' ) ) :

function emyui_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Customizer Controls Begin */

    /* Customizer Controls End */
}
add_action( 'customize_register', 'emyui_customize_register' );
endif;// emyui_customize_register


require_once get_template_directory() . '/inc/assets.php';

/* Include Resources Begin */
require_once get_template_directory() . '/inc/sidebar-widgets.php';

/* Include Resources End */

add_filter('big_image_size_threshold', '__return_false');



require_once get_template_directory() . '/inc/tgmpa/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'emyui_register_required_plugins' );

/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variables passed to the `tgmpa()` function should be:
 * - an array of plugin arrays;
 * - optionally a configuration array.
 * If you are not changing anything in the configuration array, you can remove the array and remove the
 * variable from the function call: `tgmpa( $plugins );`.
 * In that case, the TGMPA default settings will be used.
 *
 * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
 */
function emyui_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		// This is an example of how to include a plugin from the WordPress Plugin Repository.
		array(
			'name'      => 'Boostify Header Footer Builder',
			'slug'      => 'boostify-header-footer-builder',
			'required'  => true,
		),
        array(
			'name'      => 'One Click Demo Import',
			'slug'      => 'one-click-demo-import',
			'required'  => true,
		),
		array(
			'name'      => 'Elementor',
			'slug'      => 'elementor',
			'required'  => true,
		),
		array(
			'name'      => 'Redux',
			'slug'      => 'redux-framework',
			'required'  => true,
		),
        array(
			'name'      => 'Lazy Blocks',
			'slug'      => 'lazy-blocks',
			'required'  => true,
		),
        array(
			'name'      => 'Contact Form 7',
			'slug'      => 'contact-form-7',
			'required'  => false,
		),
        array(
			'name'      => 'Elementor Contact Form 7',
			'slug'      => 'cf7-widget-elementor',
			'required'  => false,
		),
        array(
			'name'               => 'emyui core', // The plugin name.
			'slug'               => 'emyui-core', // The plugin slug (typically the folder name).
			'source'             =>  get_template_directory_uri() . '/inc/plugins/emyui-core.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
		),
	);
	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'emyui',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}


//ocdi

function emyui_ocdi_import_files() {
    return [
      [
        'import_file_name'           => 'LTR Demo',
        'import_file_url'            => 'https://emyui.pdthemes.de/assets/ltr/emyui.WordPress.2022-05-14.xml',
        'import_widget_file_url'     => 'https://emyui.pdthemes.de/assets/ltr/emyui.pdthemes.de-widgets.wie',
        'import_customizer_file_url' => 'https://emyui.pdthemes.de/assets/ltr/emyui-export.dat',
        'import_preview_image_url'   => 'https://emyui.pdthemes.de/demo/image/demo/demos/html-1.jpg',
        'preview_url'                => 'https://emyui.pdthemes.de/demo/',
      ],
      [
        'import_file_name'           => 'RTL Demo',
        'import_file_url'            => 'https://emyui.pdthemes.de/assets/rtl/emyui.WordPress.2022-05-24.xml',
        'import_widget_file_url'     => 'https://emyui.pdthemes.de/assets/rtl/emyui.pdthemes.de-widgets.wie',
        'import_customizer_file_url' => 'https://emyui.pdthemes.de/assets/rtl/emyui-export.dat',
        'import_preview_image_url'   => 'https://emyui.pdthemes.de/demo/image/demo/demos/html-1-rtl.jpg',
        'preview_url'                => 'https://emyui.pdthemes.de/demo/',
      ],
    ];
  }
  add_filter( 'ocdi/import_files', 'emyui_ocdi_import_files' );
add_shortcode('icon_web','fu_icon_web');

function fu_icon_web(){
    ob_start();
    require_once (get_template_directory() . '/view_icon_web.php');
    $content = ob_get_clean();
    return $content;
}