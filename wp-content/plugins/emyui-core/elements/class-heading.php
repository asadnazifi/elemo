<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class headingwidget extends Widget_Base{

  public function get_name(){
    return 'headingwidget';
  }

  public function get_title(){
    return esc_html__( 'Headingwidget', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
        'tab0headingwidget',
        [
          'label' => esc_html__( 'Main Tab', 'emyui-core' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
      $this->add_control(
        'subtitleheadingwidget',
        [
            'label' => esc_html__( 'Subtitle', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'CONTENT DELIVERY NETWORK', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'titleheadingwidget',
        [
            'label' => esc_html__( 'Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Optimize and transform your images on the fly.', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'descheadingwidget',
        [
            'label' => esc_html__( 'Description', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'default' => esc_html__( 'Optimizer automatically minifies, compresses and optimizes your static files on the fly and provides a powerful image processing API to resize, crop and manipulate images in real-time', 'emyui-core' ),
        
        ]
    );
    $this->add_control(
		'showbuttonfeatureseven',
		[
			'label' => esc_html__( 'Show Button', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::SWITCHER,
			'return_value' => 'yes',
			'default' => 'yes',
		]
	);
    $this->add_control(
        'buttonheadingwidget',
        [
            'label' => esc_html__( 'Button', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'See More', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'linkbuttonheadingwidget',
        [
            'label' => esc_html__( 'Link Button', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '#', 'emyui-core' ),
    
        ]
    );
       $this->end_controls_section();
 
    }
        
  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>
                            <div class="pl-lg-3 pl-xl-12 mt-12 mt-md-0 text-center text-lg-left">
                                <h4 class="pre-title coodiv-text-12 text-green text-uppercase mb-0"><?php echo  esc_html($settings['subtitleheadingwidget']); ?></h4>
                                <h2 class="title coodiv-text-4 mb-7"><?php echo  esc_html($settings['titleheadingwidget']); ?></h2>
                                <p class="coodiv-text-8 coodiv-text-color-opacity">
                                <?php echo  esc_html($settings['descheadingwidget']); ?>
                                </p>
                                <?php if ( 'yes' === $settings['showbuttonfeatureseven'] ) { ?>
                                <div class="pt-7">
                                    <a href="<?php echo  esc_html($settings['linkbuttonheadingwidget']); ?>" class="btn btn-warning with-icon text-white coodiv-text-9 px-10 font-weight-bold rounded-20"><?php echo  esc_html($settings['buttonheadingwidget']); ?><i class="feather icon-arrow-right font-weight-bold"></i></a>
                                </div>
                                <?php } ?>
                            </div>
<?php
}
  }

