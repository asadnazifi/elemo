<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Emymegasix extends Widget_Base{

  public function get_name(){
    return 'heademymegsix';
  }

  public function get_title(){
    return esc_html__( 'Mega Menu 6', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
      'fmg1',
      [
        'label' => esc_html__( 'First Tab', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
    $this->add_control(
      'mg30t1',
      [
        'label' => esc_html__( 'Tab Title', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( 'Core pages', 'emyui-core' ),
      ]
    );
    $this->add_control(
      'mg30t2',
      [
        'label' => esc_html__( 'Tab Sub Title', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( 'simple sub text pages', 'emyui-core' ),
      ]
    );


    $repeater = new \Elementor\Repeater();

    $repeater->add_control(
      'mg31t1',
      [
        'label' => esc_html__( 'Menu Text', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( 'About us', 'emyui-core' ),
      ]
    );
    $repeater->add_control(
      'mg31t2',
      [
        'label' => esc_html__( 'Menu Link', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( '#', 'emyui-core' ),
      ]
    );
  
        $this->add_control(
			'listtili2',
			[
				'label' => esc_html__( 'List', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),

			]
		);

          $this->end_controls_section();

          $this->start_controls_section(
            'fmg2',
            [
              'label' => esc_html__( 'Second Tab', 'emyui-core' ),
              'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
          );
          $this->add_control(
            'mg32t1',
            [
              'label' => esc_html__( 'Tab Title', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Plans pages', 'emyui-core' ),
            ]
          );
          $this->add_control(
            'mg32t2',
            [
              'label' => esc_html__( 'Tab Sub Title', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'simple sub text pages', 'emyui-core' ),
            ]
          );
      
      
          $repeater = new \Elementor\Repeater();
      
          $repeater->add_control(
            'mg32t1',
            [
              'label' => esc_html__( 'Menu Text', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'About us', 'emyui-core' ),
            ]
          );
          $repeater->add_control(
            'mg32t2',
            [
              'label' => esc_html__( 'Menu Link', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( '#', 'emyui-core' ),
            ]
          );
        
              $this->add_control(
            'listtili22',
            [
              'label' => esc_html__( 'List', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::REPEATER,
              'fields' => $repeater->get_controls(),
      
            ]
          );
      
                $this->end_controls_section();
                $this->start_controls_section(
                  'fmg3',
                  [
                    'label' => esc_html__( 'Third Tab', 'emyui-core' ),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                  ]
                );
                $this->add_control(
                  'mg33t1',
                  [
                    'label' => esc_html__( 'Tab Title', 'emyui-core' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__( 'Sub pages', 'emyui-core' ),
                  ]
                );
                $this->add_control(
                  'mg33t2',
                  [
                    'label' => esc_html__( 'Tab Sub Title', 'emyui-core' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__( 'simple sub text pages', 'emyui-core' ),
                  ]
                );
            
            
                $repeater = new \Elementor\Repeater();
            
                $repeater->add_control(
                  'mg33t1',
                  [
                    'label' => esc_html__( 'Menu Text', 'emyui-core' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__( 'About us', 'emyui-core' ),
                  ]
                );
                $repeater->add_control(
                  'mg33t2',
                  [
                    'label' => esc_html__( 'Menu Link', 'emyui-core' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__( '#', 'emyui-core' ),
                  ]
                );
              
                    $this->add_control(
                  'listtili222',
                  [
                    'label' => esc_html__( 'List', 'emyui-core' ),
                    'type' => \Elementor\Controls_Manager::REPEATER,
                    'fields' => $repeater->get_controls(),
            
                  ]
                );
            
                      $this->end_controls_section();
        }


  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>


    <!-- START pages dropdown -->


    <div class="bg-transparent border-0 shadow-0 coodiv-megamenu-dropdown mini-version light-bg center white-bg dropdown-menu d-lg-block" aria-labelledby="navbarDropdownPages">
        <div class="row justify-content-center">
            <div class="col-md-4 pr-lg-0 mb-3 mb-lg-0">
                <h5 class="d-block py-5 color-blackish-blue coodiv-text-9 pl-9 mb-0 rounded-top-10 coodiv-bg-gray-2-opacity-visible border-bottom-3-green">
                    <span><?php echo esc_html($settings['mg30t1']); ?></span> <span class="d-block color-blackish-blue-opacity coodiv-text-12 mt-n2 font-weight-light"><?php echo esc_html($settings['mg30t2']); ?></span>
                </h5>
                <ul class="mega-menu-dropdown-ul border-opacity border-top-0 py-6 rounded-bottom-20 shadow-2 white-bg">
                  <?php 
                  if ( $settings['listtili2'] ) {
                  foreach (  $settings['listtili2'] as $item ) { ?>
                    <li class="drop-menu-item"><a href="<?php echo esc_url($item['mg31t2']); ?>"><?php echo esc_html($item['mg31t1']); ?></a></li>
                  <?php }
                } ?>
                </ul>
            </div>

            <div class="col-md-4 pr-0 pl-lg-2 mb-3 mb-lg-0">
                <h5 class="d-block py-5 color-blackish-blue coodiv-text-9 pl-9 mb-0 rounded-top-10 coodiv-bg-gray-2-opacity-visible border-bottom-3-green">
                    <span><?php echo esc_html($settings['mg32t1']); ?></span> <span class="d-block color-blackish-blue-opacity coodiv-text-12 mt-n2 font-weight-light"><?php echo esc_html($settings['mg32t2']); ?></span>
                </h5>
                <ul class="mega-menu-dropdown-ul border-opacity border-top-0 py-6 rounded-bottom-20 shadow-2 white-bg">
                <?php 
                  if ( $settings['listtili22'] ) {
                  foreach (  $settings['listtili22'] as $item ) { ?>
                    <li class="drop-menu-item"><a href="<?php echo esc_url($item['mg32t2']); ?>"><?php echo esc_html($item['mg32t1']); ?></a></li>
                    <?php }
                } ?>
                  </ul>
            </div>

            <div class="col-md-4 pl-lg-2">
                <h5 class="d-block py-5 color-blackish-blue coodiv-text-9 pl-9 mb-0 rounded-top-10 coodiv-bg-gray-2-opacity-visible border-bottom-3-green">
                    <span><?php echo esc_html($settings['mg33t1']); ?></span> <span class="d-block color-blackish-blue-opacity coodiv-text-12 mt-n2 font-weight-light"><?php echo esc_html($settings['mg33t2']); ?></span>
                </h5>
                <ul class="mega-menu-dropdown-ul border-opacity border-top-0 py-6 rounded-bottom-20 shadow-2 white-bg">
                <?php 
                  if ( $settings['listtili222'] ) {
                  foreach (  $settings['listtili222'] as $item ) { ?>
                    <li class="drop-menu-item"><a href="<?php echo esc_url($item['mg33t2']); ?>"><?php echo esc_html($item['mg33t1']); ?></a></li>
                    <?php }
                } ?>
                </ul>
            </div>
        </div>
    </div>

<!-- END pages dropdown -->


    <?php
  }


}
