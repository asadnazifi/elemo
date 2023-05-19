<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Emymegathree extends Widget_Base{

  public function get_name(){
    return 'heademymegthree';
  }

  public function get_title(){
    return esc_html__( 'Mega Menu 3', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
      'slidee1',
      [
        'label' => esc_html__( 'Main Contents', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
    $this->add_control(
        'mg4t1',
        [
          'label' => esc_html__( 'Main Title', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::TEXT,
          'default' => esc_html__( 'Web hosting that scales from easy to expert.', 'emyui-core' ),
        ]
      );
      $this->add_control(
        'mg4t2',
        [
          'label' => esc_html__( 'Main Sub Title', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::TEXT,
          'default' => esc_html__( 'A ton of website hosting options, 99.9% uptime guarantee, free SSL certificate, easy WordPress installs, and a free domain for a year.', 'emyui-core' ),
        ]
      );
      $this->add_control(
        'mg4t3',
        [
          'label' => esc_html__( 'Main Button Text', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::TEXT,
          'default' => esc_html__( 'Get Started Now', 'emyui-core' ),
        ]
      );
      $this->add_control(
        'mg4t4',
        [
          'label' => esc_html__( 'Main Button Link', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::TEXT,
          'default' => esc_html__( '#', 'emyui-core' ),
        ]
      );
      $repeater = new \Elementor\Repeater();
      
      $repeater->add_control(
        'mg4t5',
        [
          'label' => esc_html__( 'Title', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::TEXT,
          'default' => esc_html__( 'SSL certificate', 'emyui-core' ),
        ]
      );
      $repeater->add_control(
        'mg4t6',
        [
          'label' => esc_html__( 'Sub Title', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::TEXT,
          'default' => esc_html__( 'Bring in all the traffic you want, we got ya.', 'emyui-core' ),
        ]
      );
      $repeater->add_control(
        'mg4t7',
        [
          'label' => esc_html__( 'Icon', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::TEXT,
          'default' => esc_html__( 'feather icon-shield', 'emyui-core' ),
        ]
      );
      $repeater->add_control(
        'mg4t8',
        [
          'label' => esc_html__( 'ایکون تنظیمات', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::TEXT,
          'default' => esc_html__( 'سلام خوبی من ایکون تنظیماتم', 'emyui-core' ),
        ]
      );
    
          $this->add_control(
        'listtig6',
        [
          'label' => esc_html__( 'Features', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::REPEATER,
          'fields' => $repeater->get_controls(),
  
        ]
      );

          $this->end_controls_section();

          $this->start_controls_section(
            'slidee2',
            [
              'label' => esc_html__( 'Box Contents', 'emyui-core' ),
                      'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
          );
          $this->add_control(
              'mg41t1',
              [
                'label' => esc_html__( 'Main Title', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Sign up for web hosting today!', 'emyui-core' ),
              ]
            );
            $this->add_control(
              'mg41t2',
              [
                'label' => esc_html__( 'Main Sub Title', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'A ton of website hosting options, 99.9% uptime guarantee start only at.', 'emyui-core' ),
              ]
            );
            $this->add_control(
                'mg41t3',
                [
                  'label' => esc_html__( 'Price', 'emyui-core' ),
                  'type' => \Elementor\Controls_Manager::TEXT,
                  'default' => esc_html__( '$2.75/mo*', 'emyui-core' ),
                ]
              );
            $this->add_control(
              'mg41t4',
              [
                'label' => esc_html__( 'Main Button Text', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Get Started Free', 'emyui-core' ),
              ]
            );
            $this->add_control(
              'mg41t5',
              [
                'label' => esc_html__( 'Main Button Link', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '#', 'emyui-core' ),
              ]
            );
      
                $this->end_controls_section();
        }


  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>

  
<!-- START hosting dropdown -->

    <div class="coodiv-megamenu-dropdown fullwidth-megamenu center white-bg dropdown-menu d-lg-flex px-lg-10 px-5 py-10" aria-labelledby="navbarDropdown90">
        <div class="row justify-content-center mt-lg-6 mx-0 w-100">
            <div class="col-md-8">
                <h1 class="coodiv-text-6 title color-blackish-blue text-lg-left text-center w-100 d-block mb-14">
                    <span data-i18n="[html]genaral.webhostingfirstsentess"><?php echo esc_html($settings['mg4t1']); ?></span>
                    <span data-i18n="[html]genaral.webhostingfirstsentesssub" class="d-block mt-lg-0 mt-5 coodiv-text-11 color-blackish-blue-opacity fw-100">
                    <?php echo esc_html($settings['mg4t2']); ?>
                    </span>
                </h1>

                <div class="row justify-content-center mx-0">
                <?php 
                  if ( $settings['listtig6'] ) {
                  foreach (  $settings['listtig6'] as $item ) { ?>
                    <div class="col-md-6 col-lg-4 mb-10">
                        <div class="feature-widget d-sm-flex">
                            <div class="widget-icon text-blue mr-0 mr-lg-6 mb-7 mb-md-0">
                                <i class="<?php echo esc_attr($item['mg4t7']); ?>"></i>

                            </div>
                            <div class="content">
                                <h3 class="title coodiv-text-9 mb-2 color-blackish-blue"><?php echo esc_html($item['mg4t5']); ?></h3>
                                <p class="coodiv-text-11 color-blackish-blue-opacity mb-0"><?php echo esc_html($item['mg4t6']); ?></p>
                                <p class="coodiv-text-11 color-blackish-blue-opacity mb-0"><?php echo esc_html($item['mg4t8']); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php }
                } ?>

                    <a class="btn btn-warning coodiv-text-9 d-block w-100 mx-4 mx-lg-0" href="<?php echo esc_url($settings['mg4t4']); ?>"><?php echo esc_html($settings['mg4t3']); ?></a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="megamenu-ads justify-content-between pt-10 pb-6 px-10">
                    <h3 class="txtar coodiv-text-6 title mt-5">
                        <span><?php echo esc_html($settings['mg41t1']); ?></span>
                        <span class="txtar coodiv-text-11 mb-0 mt-2 d-block fw-100"><?php echo esc_html($settings['mg41t2']); ?></span>
                        <span class="txtar megamenu-ads-price mt-8 d-block"><?php echo esc_html($settings['mg41t3']); ?></span>
                    </h3>



                    <a class="btn btn-red coodiv-text-9 txtar" href="<?php echo esc_url($settings['mg41t5']); ?>"><?php echo esc_html($settings['mg41t4']); ?></a>
                </div>
            </div>
        </div>

    </div>

<!-- END hosting dropdown -->


    <?php
  }


}
