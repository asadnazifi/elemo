<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Featurenine extends Widget_Base{

  public function get_name(){
    return 'featurenine';
  }

  public function get_title(){
    return esc_html__( 'Feature Nineth Style', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
      'tab0featurenine',
      [
        'label' => esc_html__( 'Title', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
    $this->add_control(
			'title0featurenine',
			[
				'label' => esc_html__( 'Subtitle', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Never Make Your Users Wait Again.', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'subtitle0featurenine',
			[
				'label' => esc_html__( 'Description', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'DELIVER EXCEPTIONAL PERFORMANCE. FOR EVERY REQUEST. EVERY TIME.', 'emyui-core' ),
			
			]
		);
    $this->add_control(
      'desc0featurenine',
      [
        'label' => esc_html__( 'Description', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => esc_html__( 'Optimizer automatically minifies, compresses and optimizes your static files on the fly and provides.', 'emyui-core' ),
      
      ]
    );
          $this->end_controls_section();
          $this->start_controls_section(
            'tab1featurenine',
            [
              'label' => esc_html__( 'Feature Box', 'emyui-core' ),
              'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
          );

          $repeater = new \Elementor\Repeater();
          $repeater->add_control(
              'iconfeaturenine', [
                  'label' => esc_html__( 'Icon', 'emyui-core' ),
                  'type' => \Elementor\Controls_Manager::TEXT,
                  'default' => esc_html__( 'fas fa-key' , 'emyui-core' ),
              ]
          ); 
          $repeater->add_control(
            'titleboxfeaturenine', [
                'label' => esc_html__( 'Title Box', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Easy Lets Encrypt SSL!' , 'emyui-core' ),
            ]
        );
        $repeater->add_control(
          'descboxfeaturenine', [
              'label' => esc_html__( 'Description Box', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => esc_html__( 'Get a free SSL certificate with a click of a button using our simple Lets Encrypt integration.' , 'emyui-core' ),
          ]
      );
      $this->add_control(
          'boxesfeaturenine',
          [
              'label' => esc_html__( 'Boxes', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::REPEATER,
              'fields' => $repeater->get_controls(),
              'default' => [
                  [
                      'iconfeaturenine' => esc_html__( 'fas fa-key', 'emyui-core' ),
                      'titleboxfeaturenine' => esc_html__( 'Easy Lets Encrypt SSL!', 'emyui-core' ),
                      'descboxfeaturenine' => esc_html__( 'Get a free SSL certificate with a click of a button using our simple Lets Encrypt integration.', 'emyui-core' ),
                  ],
              ],
          ]
      );
          $this->end_controls_section();

        }


  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>

<div class="bg-default-2 pt-35 pb-15 mt-n35">
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
                    <div class="row justify-content-lg-start justify-content-center mt-20">
                        <div class="col-xl-6 col-lg-7 col-md-8">
                            <div class="section-title text-lg-left text-center mb-13 mb-lg-15">
                                <h4 class="pre-title coodiv-text-12 text-red text-uppercase mb-4"><?php echo  esc_html($settings['subtitle0featurenine']); ?></h4>
                                <h2 class="title coodiv-text-4"><?php echo  esc_html($settings['title0featurenine']); ?></h2>
                                <p class="coodiv-text-8 mb-0"><?php echo  esc_html($settings['desc0featurenine']); ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                    <?php if ( $settings['boxesfeaturenine'] ) {
                                               	  		foreach (  $settings['boxesfeaturenine'] as $item ) { ?>
                        <div class="col-lg-4 col-12 px-lg-10">
                            <div class="transfer-wp-box mx-auto ml-lg-0 mr-lg-auto position-relative d-block mb-7">
                                <span class="shape-hexagon position-absolute"></span>
                                <i class="icon <?php echo  esc_attr($item['iconfeaturenine']); ?> position-absolute"></i>
                            </div>

                            <div class="d-block text-lg-left text-center mb-9 mb-lg-13">
                                <h2 class="title coodiv-text-7 mb-4"><?php echo  esc_html($item['titleboxfeaturenine']); ?></h2>
                                <p class="coodiv-text-10 mb-0"><?php echo  esc_html($item['descboxfeaturenine']); ?></p>
                            </div>
                        </div>
                        <?php
                                }
                                    } ?>
                    </div>
                </div>
            </div>

    <?php
  }


}
