<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Featureight extends Widget_Base{

  public function get_name(){
    return 'featureight';
  }

  public function get_title(){
    return esc_html__( 'Feature eight', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
      'tab0featureight',
      [
        'label' => esc_html__( 'Left Side', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );

    $this->add_control(
			'feature1lfeatureight',
			[
				'label' => esc_html__( 'Feature 1', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'free introduction setup', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'feature2lfeatureight',
			[
				'label' => esc_html__( 'Feature 2', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'free introduction setup', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'feature3lfeatureight',
			[
				'label' => esc_html__( 'Feature 3', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'free introduction setup', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'feature4lfeatureight',
			[
				'label' => esc_html__( 'Feature 4', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'free introduction setup', 'emyui-core' ),
			
			]
		);
          $this->end_controls_section();
          $this->start_controls_section(
            'tab1featureight',
            [
              'label' => esc_html__( 'Right Side', 'emyui-core' ),
              'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
          );
      
          $this->add_control(
            'feature1rfeatureight',
            [
              'label' => esc_html__( 'Feature 1', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'free introduction setup', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'feature2rfeatureight',
            [
              'label' => esc_html__( 'Feature 2', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'free introduction setup', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'feature3rfeatureight',
            [
              'label' => esc_html__( 'Feature 3', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'free introduction setup', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'feature4rfeatureight',
            [
              'label' => esc_html__( 'Feature 4', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'free introduction setup', 'emyui-core' ),
            
            ]
          );
                $this->end_controls_section();
                $this->start_controls_section(
                  'tab3featureight',
                  [
                    'label' => esc_html__( 'Image', 'emyui-core' ),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                  ]
                );
                $this->add_control(
                  'img1featureight',
                  [
                    'label' => esc_html__( 'Background Image', 'emyui-core' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                  
                  ]
                );
                $this->end_controls_section();

        }


  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>


<div class="web-hosting-section border-bottom pt-0 pb-7 pb-lg-15 mtm-120 position-relative coodiv-z-index-2">
                <svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
                    <defs>
                        <filter id="roundedsvg">
                            <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur" />
                            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                            <feComposite in="SourceGraphic" in2="goo" operator="atop" />
                        </filter>
                    </defs>
                </svg>
                <div class="container">
                    <div class="row justify-content-between py-5">
                        <div class="col-lg-4 col-md-12 left-side rtlk">
                            <div class="wp-plan-features-box white-bg shadow-2 rounded-20 pl-lg-6 pr-0 py-2 text-right coodiv-hover-y d-flex justify-content-end mb-7 ml-auto">
                                <div class="main-text coodiv-text-11 fw-bold color-blackish-blue"><?php echo  esc_html($settings['feature1lfeatureight']); ?></div>
                                <div class="theshape coodiv-text-9 fw-100 ml-lg-5"><span class="number"><?php echo _e('01' , 'emyui-core'); ?></span><span class="shape-hexagon"></span></div>
                            </div>

                            <div class="wp-plan-features-box white-bg shadow-2 rounded-20 pl-lg-6 pr-0 py-2 text-right coodiv-hover-y d-flex justify-content-end mb-7 ml-auto mr-9">
                                <div class="main-text coodiv-text-11 fw-bold color-blackish-blue"><?php echo  esc_html($settings['feature2lfeatureight']); ?></div>
                                <div class="theshape coodiv-text-9 fw-100 ml-lg-5"><span class="number"><?php echo _e('02' , 'emyui-core'); ?></span><span class="shape-hexagon"></span></div>
                            </div>

                            <div class="wp-plan-features-box white-bg shadow-2 rounded-20 pl-lg-6 pr-0 py-2 text-right coodiv-hover-y d-flex justify-content-end mb-7 ml-auto mr-9">
                                <div class="main-text coodiv-text-11 fw-bold color-blackish-blue"><?php echo  esc_html($settings['feature3lfeatureight']); ?></div>
                                <div class="theshape coodiv-text-9 fw-100 ml-lg-5"><span class="number"><?php echo _e('03' , 'emyui-core'); ?></span><span class="shape-hexagon"></span></div>
                            </div>

                            <div class="wp-plan-features-box white-bg shadow-2 rounded-20 pl-lg-6 pr-0 py-2 text-right coodiv-hover-y d-flex justify-content-end mb-7 ml-auto">
                                <div class="main-text coodiv-text-11 fw-bold color-blackish-blue"><?php echo  esc_html($settings['feature4lfeatureight']); ?></div>
                                <div class="theshape coodiv-text-9 fw-100 ml-lg-5"><span class="number"><?php echo _e('04' , 'emyui-core'); ?></span><span class="shape-hexagon"></span></div>
                            </div>
                        </div>

                        <span class="host-wp-bg-area d-none-mobile"></span>

                        <div class="col-md-4 right-side d-none-mobile">
                            <div class="wp-plan-features-box white-bg shadow-2 rounded-20 pl-0 pr-6 py-2 text-left coodiv-hover-y d-flex justify-content-start mb-7 mr-auto">
                                <div class="theshape coodiv-text-9 fw-100 mr-5"><span class="number"><?php echo _e('01' , 'emyui-core'); ?></span><span class="shape-hexagon"></span></div>
                                <div class="main-text coodiv-text-11 fw-bold color-blackish-blue"><?php echo  esc_html($settings['feature1rfeatureight']); ?></div>
                            </div>

                            <div class="wp-plan-features-box white-bg shadow-2 rounded-20 pl-0 pr-6 py-2 text-left coodiv-hover-y d-flex justify-content-start mb-7 ml-auto mr-9">
                                <div class="theshape coodiv-text-9 fw-100 mr-5"><span class="number"><?php echo _e('02' , 'emyui-core'); ?></span><span class="shape-hexagon"></span></div>
                                <div class="main-text coodiv-text-11 fw-bold color-blackish-blue"><?php echo  esc_html($settings['feature2rfeatureight']); ?></div>
                            </div>

                            <div class="wp-plan-features-box white-bg shadow-2 rounded-20 pl-0 pr-6 py-2 text-left coodiv-hover-y d-flex justify-content-start mb-7 ml-auto mr-9">
                                <div class="theshape coodiv-text-9 fw-100 mr-5"><span class="number"><?php echo _e('03' , 'emyui-core'); ?></span><span class="shape-hexagon"></span></div>
                                <div class="main-text coodiv-text-11 fw-bold color-blackish-blue"><?php echo  esc_html($settings['feature3rfeatureight']); ?></div>
                            </div>

                            <div class="wp-plan-features-box white-bg shadow-2 rounded-20 pl-0 pr-6 py-2 text-left coodiv-hover-y d-flex justify-content-start mb-7 mr-auto">
                                <div class="theshape coodiv-text-9 fw-100 mr-5"><span class="number"><?php echo _e('04' , 'emyui-core'); ?></span><span class="shape-hexagon"></span></div>
                                <div class="main-text coodiv-text-11 fw-bold color-blackish-blue"><?php echo  esc_html($settings['feature4rfeatureight']); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<style>
.host-wp-bg-area{background:url(<?php echo esc_url($settings['img1featureight']['url']); ?>) }

</style>
    <?php
  }


}
