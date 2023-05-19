<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Twobox extends Widget_Base{

  public function get_name(){
    return 'twobox';
  }

  public function get_title(){
    return esc_html__( 'Two Box', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
      'tab0twobox',
      [
        'label' => esc_html__( 'Title', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
    $this->add_control(
			'title0twobox',
			[
				'label' => esc_html__( 'Subtitle', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Never Make Your Users Wait Again.', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'subtitle0twobox',
			[
				'label' => esc_html__( 'Description', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'DELIVER EXCEPTIONAL PERFORMANCE. FOR EVERY REQUEST. EVERY TIME.', 'emyui-core' ),
			
			]
		);
          $this->end_controls_section();
          $this->start_controls_section(
            'tab1twobox',
            [
              'label' => esc_html__( 'Left Box', 'emyui-core' ),
              'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
          );
          $this->add_control(
            'img1twobox',
            [
              'label' => esc_html__( 'Image', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::MEDIA,
            
            ]
          );
          $this->add_control(
            'title1twobox',
            [
              'label' => esc_html__( 'Title', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Coodiv-Cache', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'subtitle1twobox',
            [
              'label' => esc_html__( 'Title', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Permanent Cache. Permanent Performance.', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'desc1twobox',
            [
              'label' => esc_html__( 'Description', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => esc_html__( 'Coodiv-Cache allows you to permanently store a copy of your files on our edge storage for a 100% cache HIT ratio. Experience maximum performance, even with uncached content.', 'emyui-core' ),
            
            ]
          );
                $this->end_controls_section();    $this->start_controls_section(
                  'tab2twobox',
                  [
                    'label' => esc_html__( 'Right Box', 'emyui-core' ),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                  ]
                );
                $this->add_control(
                  'img2twobox',
                  [
                    'label' => esc_html__( 'Image', 'emyui-core' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                  
                  ]
                );
                $this->add_control(
                  'title2twobox',
                  [
                    'label' => esc_html__( 'Title', 'emyui-core' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__( 'SmartEdge', 'emyui-core' ),
                  
                  ]
                );
                $this->add_control(
                  'subtitle2twobox',
                  [
                    'label' => esc_html__( 'Title', 'emyui-core' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__( 'Bringing users where it matters.', 'emyui-core' ),
                  
                  ]
                );
                $this->add_control(
                  'desc2twobox',
                  [
                    'label' => esc_html__( 'Description', 'emyui-core' ),
                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                    'default' => esc_html__( 'SmartEdge™ routing engine uses real-time analytics based on your content and network metrics to make sure your users always end up at the most optimal destination.', 'emyui-core' ),
                  
                  ]
                );
                      $this->end_controls_section();

        }


  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>

<div class="why-us-section pt-15 pb-0 pt-lg-25 position-relative">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-7 col-md-8">
                            <div class="section-title text-center mb-13 mb-lg-15">
                                <h4 class="pre-title coodiv-text-12 text-red text-uppercase mb-7"><?php echo  esc_html($settings['subtitle0twobox']); ?></h4>
                                <h2 class="title coodiv-text-4"><?php echo  esc_html($settings['title0twobox']); ?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-12 mb-lg-0 mb-15">
                            <div class="vpn-special-features-box white-bg shadow-2 rounded-25 py-8 px-8 text-center border">
                                <h3 class="coodiv-text-5 mb-0"><?php echo  esc_html($settings['title1twobox']); ?></h3>
                                <p class="coodiv-text-9 font-weight-light"><?php echo  esc_html($settings['subtitle1twobox']); ?></p>
                                <img class="px-17 my-15" src="<?php echo esc_url($settings['img1twobox']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $settings['img1twobox'] )); ?>" />
                                <p class="coodiv-text-9 font-weight-light">
                                   <?php echo  esc_html($settings['desc1twobox']); ?>
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-5 col-12">
                            <div class="vpn-special-features-box white-bg shadow-2 rounded-25 py-8 px-8 text-center border">
                                <h3 class="coodiv-text-5 mb-0"><?php echo  esc_html($settings['title2twobox']); ?></h3>
                                <p class="coodiv-text-9 font-weight-light"><?php echo  esc_html($settings['subtitle2twobox']); ?></p>
                                <img class="px-17 my-15" src="<?php echo esc_url($settings['img2twobox']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $settings['img2twobox'] )); ?>" />
                                <p class="coodiv-text-9 font-weight-light">
                                <?php echo  esc_html($settings['desc2twobox']); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <?php
  }


}
