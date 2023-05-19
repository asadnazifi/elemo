<?php
    /** 
    * Plugin Name: Emyui Core
    * Plugin URI: https://pdthemes.de
    * Description: emyui core is the heart of emyui theme which is required to be activated one the theme is installed
    * Version: 1.2
    * Author: Pdthemes
    * Author URI: https://pdthemes.de
    * Text Domain: emyui-core
    */

    if (! defined('ABSPATH')) {
        exit;
    }
    require_once(__DIR__ . '/custom-elementor.php');
    
    
function add_elementor_widget_categories( $elements_manager ) {

	$elements_manager->add_category(
		'emyuielements',
		[
			'title' => esc_html__( 'Emyui Elemenets', 'emyui-core' ),
			'icon' => 'eicon-instagram-nested-gallery',
		]
	);
}
add_action( 'elementor/elements/categories_registered', 'add_elementor_widget_categories' );


if (!class_exists('ReduxFramework') && file_exists(plugin_dir_path(__FILE__) . '/optionpanel/framework.php'))
    {
    require_once ('optionpanel/framework.php');
 
    }
 
if (!isset($redux_demo) && file_exists(plugin_dir_path(__FILE__) . '/optionpanel/config.php'))
    {
    require_once ('optionpanel/config.php');
 
    }

    

 