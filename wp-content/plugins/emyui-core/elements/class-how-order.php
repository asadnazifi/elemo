<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Howorder extends Widget_Base{

  public function get_name(){
    return 'howorder';
  }

  public function get_title(){
    return esc_html__( 'How Order?', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
      'tab0howorder',
      [
        'label' => esc_html__( 'First Slide', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );

    $this->add_control(
      'showtitlehoworder',
      [
          'label' => esc_html__( 'Show Title', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::SWITCHER,
          'return_value' => 'yes',
          'default' => 'yes',
      ]
  );

    $this->add_control(
			'titlehoworder',
			[
				'label' => esc_html__( 'Title', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Make Money with your own Web Hosting Business', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'deschoworder',
			[
				'label' => esc_html__( 'Description', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Building your own web hosting business is now simple with our Reseller Hosting. Our flexible Linux Reseller Hosting plans allow you to create customized hosting plans with unmetered disk space and ample bandwidth. WHM/CPanel is bundled with every plan and provides an intuitive GUI to assist you in the process of hosting websites, 1-click-install scripts and supporting clients.', 'emyui-core' ),
			
			]
		);
          $this->end_controls_section();
          $this->start_controls_section(
            'tab1howorder',
            [
              'label' => esc_html__( 'Boxes', 'emyui-core' ),
              'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
          );

          $repeater = new \Elementor\Repeater();
          $repeater->add_control(
              'iconhoworder', [
                  'label' => esc_html__( 'Icon', 'emyui-core' ),
                  'type' => \Elementor\Controls_Manager::TEXT,
                  'default' => esc_html__( 'icon-command' , 'emyui-core' ),
              ]
          ); 
          $repeater->add_control(
            'titleboxhoworder', [
                'label' => esc_html__( 'Title Box', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Get your Token!' , 'emyui-core' ),
            ]
        );
        $repeater->add_control(
          'descboxhoworder', [
              'label' => esc_html__( 'Description Box', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => esc_html__( 'is simply dummy text of the printing and typesetting industry.' , 'emyui-core' ),
          ]
      );
      $this->add_control(
          'boxeshoworder',
          [
              'label' => esc_html__( 'Boxes', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::REPEATER,
              'fields' => $repeater->get_controls(),
              'default' => [
                  [
                      'iconhoworder' => esc_html__( 'icon-command', 'emyui-core' ),
                      'titleboxhoworder' => esc_html__( 'Get your Token!', 'emyui-core' ),
                      'descboxhoworder' => esc_html__( 'is simply dummy text of the printing and typesetting industry.', 'emyui-core' ),
                  ],
              ],
          ]
      );
      $this->end_controls_section();

        }


  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>


<div class="how-order-section bg-blackish-blue pt-15 pt-lg-25 pb-7 pb-lg-24 dark-mode-texts">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-9">
                        <?php   if ( 'yes' === $settings['showtitlehoworder'] ) { ?>
                            <div class="px-md-12 text-center mb-9 mb-lg-13">
                                <h2 class="title coodiv-text-4 mb-8"><?php echo  esc_html($settings['titlehoworder']); ?></h2>
                                <p class="coodiv-text-10 mb-0"><?php echo  esc_html($settings['deschoworder']); ?></p>
                            </div>
                            <?php  } ?>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                    <?php if ( $settings['boxeshoworder'] ) {
                                               	  		foreach (  $settings['boxeshoworder'] as $item ) { ?>
                        <div class="col-md-3 px-lg-10">
                            <div class="transfer-wp-box position-relative d-block mx-auto mb-7">
                                <span class="shape-hexagon position-absolute"></span>
                                <i class="icon feather <?php echo  esc_attr($item['iconhoworder']); ?> position-absolute"></i>
                            </div>

                            <div class="d-block text-center mb-9 mb-lg-13">
                                <h2 class="title coodiv-text-7 mb-4"><?php echo  esc_html($item['titleboxhoworder']); ?></h2>
                                <p class="coodiv-text-10 mb-0"><?php echo  esc_html($item['descboxhoworder']); ?></p>
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
