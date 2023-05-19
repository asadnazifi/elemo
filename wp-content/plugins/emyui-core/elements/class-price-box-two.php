<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class priceboxtwo extends Widget_Base{

  public function get_name(){
    return 'priceboxtwo';
  }

  public function get_title(){
    return esc_html__( 'Price Box Two', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
      'tab0priceboxtwo',
      [
        'label' => esc_html__( 'Content', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );

    $this->add_control(
			'titlepriceboxtwo',
			[
				'label' => esc_html__( 'Title', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Choose your edition. Try it free for 14 days.', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'subtitlepriceboxtwo',
			[
				'label' => esc_html__( 'Subtitle', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'WORKSPACE SEAMLESSLY BRINGS TOGETHER MESSAGING, MEETINGS, DOCS, AND TASKS', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'descpriceboxtwo',
			[
				'label' => esc_html__( 'Description', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Workspace plans start as low as $6 per user per month for Business Starter, $12 per user per month for Business Standard, and $18 per user per month for Business Plus.', 'emyui-core' ),
			
			]
		);
          $this->end_controls_section();
          $this->start_controls_section(
            'tab1priceboxtwo',
            [
              'label' => esc_html__( 'First Pricing Box', 'emyui-core' ),
              'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
          );
          $this->add_control(
            'title1priceboxtwo',
            [
              'label' => esc_html__( 'Title Box', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Business Starter', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'price1priceboxtwo',
            [
              'label' => esc_html__( 'Price', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( '$12', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'currency1priceboxtwo',
            [
              'label' => esc_html__( 'currency', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'USD', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'period1priceboxtwo',
            [
              'label' => esc_html__( 'Period', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'for the month', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'button1priceboxtwo',
            [
              'label' => esc_html__( 'Button', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Get Started', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'linkbutton1priceboxtwo',
            [
              'label' => esc_html__( 'Link Button', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( '#', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'subtitle1priceboxtwo',
            [
              'label' => esc_html__( 'Subtitle', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Plan features', 'emyui-core' ),
            
            ]
          );
          
          $repeater = new \Elementor\Repeater();

          $repeater->add_control(
            'featurepriceboxtwo', [
              'label' => esc_html__( 'Title', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Custom and secure businessemail' , 'emyui-core' ),
              'label_block' => true,
            ]
          );
          $this->add_control(
            'featurespriceboxtwo',
            [
              'label' => esc_html__( 'Features', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::REPEATER,
              'fields' => $repeater->get_controls(),
              'default' => [
                [
                  'list_title' => esc_html__( 'featurepriceboxtwo', 'Custom and secure businessemail' ),
                ],
              ],
            ]
          );
          $this->end_controls_section();
          $this->start_controls_section(
            'tab2priceboxtwo',
            [
              'label' => esc_html__( 'Second Pricing Box', 'emyui-core' ),
              'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
          );
          $this->add_control(
            'title2priceboxtwo',
            [
              'label' => esc_html__( 'Title Box', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Business Starter', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'price2priceboxtwo',
            [
              'label' => esc_html__( 'Price', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( '$6', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'currency2priceboxtwo',
            [
              'label' => esc_html__( 'currency', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'USD', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'period2priceboxtwo',
            [
              'label' => esc_html__( 'Period', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'for the month', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'button2priceboxtwo',
            [
              'label' => esc_html__( 'Button', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Get Started', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'linkbutton2priceboxtwo',
            [
              'label' => esc_html__( 'Link Button', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( '#', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'subtitle2priceboxtwo',
            [
              'label' => esc_html__( 'Subtitle', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Plan features', 'emyui-core' ),
            
            ]
          );
          
          $repeater = new \Elementor\Repeater();

          $repeater->add_control(
            'feature2priceboxtwo', [
              'label' => esc_html__( 'Title', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Custom and secure businessemail' , 'emyui-core' ),
              'label_block' => true,
            ]
          );
          $this->add_control(
            'features2priceboxtwo',
            [
              'label' => esc_html__( 'Features', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::REPEATER,
              'fields' => $repeater->get_controls(),
              'default' => [
                [
                  'list_title' => esc_html__( 'feature2priceboxtwo', 'Custom and secure businessemail' ),
                ],
              ],
            ]
          );
          $this->end_controls_section();
          $this->start_controls_section(
            'tab3priceboxtwo',
            [
              'label' => esc_html__( 'Third Pricing Box', 'emyui-core' ),
              'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
          );
          $this->add_control(
            'title3priceboxtwo',
            [
              'label' => esc_html__( 'Title Box', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Business Starter', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'price3priceboxtwo',
            [
              'label' => esc_html__( 'Price', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( '$6', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'currency3priceboxtwo',
            [
              'label' => esc_html__( 'currency', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'USD', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'period3priceboxtwo',
            [
              'label' => esc_html__( 'Period', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'for the month', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'button3priceboxtwo',
            [
              'label' => esc_html__( 'Button', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Get Started', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'linkbutton3priceboxtwo',
            [
              'label' => esc_html__( 'Link Button', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( '#', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'subtitle3priceboxtwo',
            [
              'label' => esc_html__( 'Subtitle', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Plan features', 'emyui-core' ),
            
            ]
          );
          
          $repeater = new \Elementor\Repeater();

          $repeater->add_control(
            'feature3priceboxtwo', [
              'label' => esc_html__( 'Title', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Custom and secure businessemail' , 'emyui-core' ),
              'label_block' => true,
            ]
          );
          $this->add_control(
            'features3priceboxtwo',
            [
              'label' => esc_html__( 'Features', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::REPEATER,
              'fields' => $repeater->get_controls(),
              'default' => [
                [
                  'list_title' => esc_html__( 'feature3priceboxtwo', 'Custom and secure businessemail' ),
                ],
              ],
            ]
          );
          $this->end_controls_section();
        }


  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>


<div class="hero-area-coodiv light-color-hero-area position-relative">
                <div class="header-hero-backgrounds"><div id="particles-bg"></div></div>

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-9 col-lg-9">
                            <div class="hero-content dark-mode-texts mb-15 mb-lg-5 text-center pt-0 position-relative coodiv-z-index-1">
                                <h4 class="pre-title text-green coodiv-text-12 text-uppercase mb-3"><?php echo  esc_html($settings['subtitlepriceboxtwo']); ?></h4>
                                <h1 class="coodiv-text-3 mb-8 color-blackish-blue"><?php echo  esc_html($settings['titlepriceboxtwo']); ?></h1>
                                <p class="coodiv-text-9 px-7 pl-md-0 pr-md-11 mb-0 color-blackish-blue-opacity">
                                <?php echo  esc_html($settings['descpriceboxtwo']); ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="workspace-plan-container white-bg mb-15 mb-lg-5 text-center position-relative shadow-2 mt-9 rounded-20 coodiv-z-index-1 row mx-lg-0 mx-1">
                                <div class="col-md-4 border-right py-10 border-lg-bottom-0 border-bottom">
                                    <h5 class="coodiv-text-6"><?php echo  esc_html($settings['title1priceboxtwo']); ?></h5>
                                    <div class="price">
                                        <div class="value coodiv-text-3 font-weight-light text-blue"><?php echo  esc_html($settings['price1priceboxtwo']); ?> <small class="coodiv-text-8"><?php echo  esc_html($settings['currency1priceboxtwo']); ?></small></div>
                                        <div class="clarifications coodiv-text-10 color-blackish-blue-opacity"><?php echo  esc_html($settings['period1priceboxtwo']); ?></div>
                                    </div>

                                    <div class="action mt-5">
                                        <a class="btn btn-warning coodiv-text-11 font-weight-light rounded-20 px-2 py-3" href="<?php echo esc_url($settings['linkbutton1priceboxtwo']); ?>"><?php echo  esc_html($settings['button1priceboxtwo']); ?></a>
                                    </div>

                                    <div class="separte-or position-relative text-center pb-0 pt-0 white-bg my-7">
                                        <span><?php echo  esc_html($settings['subtitle1priceboxtwo']); ?></span>
                                    </div>

                                    <ul class="features px-0 mx-auto mb-0 card-list list-style-check text-center justify-content-center-li">
                                    <?php if ( $settings['featurespriceboxtwo'] ) {
                                               	foreach (  $settings['featurespriceboxtwo'] as $item ) { ?>
                                        <li class="coodiv-text-11"><i class="feather icon-check"></i> <span><?php echo  esc_html($item['featurepriceboxtwo']); ?></span></li>
                                   <?php }
                                    }
                                   ?>
                                   </ul>
                                </div>

                                <div class="col-md-4 border-right py-10 border-lg-bottom-0 border-bottom">
                                    <h5 class="coodiv-text-6"><?php echo  esc_html($settings['title2priceboxtwo']); ?></h5>
                                    <div class="price">
                                        <div class="value coodiv-text-3 font-weight-light text-blue"><?php echo  esc_html($settings['price2priceboxtwo']); ?> <small class="coodiv-text-8"><?php echo  esc_html($settings['currency2priceboxtwo']); ?></small></div>
                                        <div class="clarifications coodiv-text-10 color-blackish-blue-opacity"><?php echo  esc_html($settings['period2priceboxtwo']); ?></div>
                                    </div>

                                    <div class="action mt-5">
                                        <a class="btn btn-warning coodiv-text-11 font-weight-light rounded-20 px-2 py-3" href="<?php echo  esc_url($settings['linkbutton2priceboxtwo']); ?>"><?php echo  esc_html($settings['button2priceboxtwo']); ?></a>
                                    </div>

                                    <div class="separte-or position-relative text-center pb-0 pt-0 white-bg my-7">
                                        <span><?php echo  esc_html($settings['subtitle2priceboxtwo']); ?></span>
                                    </div>

                                    <ul class="features px-0 mx-auto mb-0 card-list list-style-check text-center justify-content-center-li">
                                    <?php if ( $settings['features2priceboxtwo'] ) {
                                               	foreach (  $settings['features2priceboxtwo'] as $item ) { ?>
                                        <li class="coodiv-text-11"><i class="feather icon-check"></i> <span><?php echo  esc_html($item['feature2priceboxtwo']); ?></span></li>
                                        <?php }
                                    }
                                   ?>
                                    </ul>
                                </div>

                                <div class="col-md-4 py-10">
                                    <h5 class="coodiv-text-6"><?php echo  esc_html($settings['title3priceboxtwo']); ?></h5>
                                    <div class="price">
                                        <div class="value coodiv-text-3 font-weight-light text-blue"><?php echo  esc_html($settings['price3priceboxtwo']); ?> <small class="coodiv-text-8"><?php echo  esc_html($settings['currency3priceboxtwo']); ?></small></div>
                                        <div class="clarifications coodiv-text-10 color-blackish-blue-opacity"><?php echo  esc_html($settings['period3priceboxtwo']); ?></div>
                                    </div>

                                    <div class="action mt-5">
                                        <a class="btn btn-warning coodiv-text-11 font-weight-light rounded-20 px-2 py-3" href="<?php echo  esc_url($settings['linkbutton3priceboxtwo']); ?>"><?php echo  esc_html($settings['button3priceboxtwo']); ?></a>
                                    </div>

                                    <div class="separte-or position-relative text-center pb-0 pt-0 white-bg my-7">
                                        <span><?php echo  esc_html($settings['subtitle3priceboxtwo']); ?></span>
                                    </div>

                                    <ul class="features px-0 mx-auto mb-0 card-list list-style-check text-center justify-content-center-li">
                                    <?php if ( $settings['features3priceboxtwo'] ) {
                                               	foreach (  $settings['features3priceboxtwo'] as $item ) { ?>
                                        <li class="coodiv-text-11"><i class="feather icon-check"></i> <span><?php echo  esc_html($item['feature3priceboxtwo']); ?></span></li>
                                        <?php }
                                    }
                                   ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="wave-shape-bottom">
                    <svg class="w-100 light-shape default-shape" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                        <path
                            fill="#fff"
                            fill-opacity="1"
                            d="M0,32L60,80C120,128,240,224,360,229.3C480,235,600,149,720,138.7C840,128,960,192,1080,197.3C1200,203,1320,149,1380,122.7L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
                        ></path>
                    </svg>
                </div>
            </div>

    <?php
  }


}
