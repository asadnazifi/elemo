<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Minecraftbox extends Widget_Base{

  public function get_name(){
    return 'minecraftbox';
  }

  public function get_title(){
    return esc_html__( 'Minecraft Box', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
      'tab0minecraftbox',
      [
        'label' => esc_html__( 'Heading', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
    $this->add_control(
      'showtitleminecraftbox',
      [
          'label' => esc_html__( 'Show Title', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::SWITCHER,
          'return_value' => 'yes',
          'default' => 'yes',
      ]
  );

    $this->add_control(
			'titleminecraftbox',
			[
				'label' => esc_html__( 'Title', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'chose a plan for your players to start.', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'descminecraftbox',
			[
				'label' => esc_html__( 'Description', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'We share common trends and strategies for improving your rental income and making sure you stay in high demand.', 'emyui-core' ),
			
			]
		);

          $this->end_controls_section();
          $this->start_controls_section(
            'tab1minecraftbox',
            [
              'label' => esc_html__( 'First Box', 'emyui-core' ),
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
            'subtitle1priceboxtwo',
            [
              'label' => esc_html__( 'Subtitle', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Plan features', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'price1priceboxtwo',
            [
              'label' => esc_html__( 'Price', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( '$6', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'decimals1priceboxtwo',
            [
              'label' => esc_html__( 'Decimals', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( '.99', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'unit1priceboxtwo',
            [
              'label' => esc_html__( 'Number of Player', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SLIDER,
              'size_units' => ['٪'],
              'range' => [
                '٪' => [
                  'min' => 0,
                  'max' => 100,
                  'step' => 1,
                ],
              ],
              'default' => [
                'unit' => '٪',
                'size' => 50,
              ],
            ]
          );
          $this->add_control(
            'secondsubtitle1priceboxtwo',
            [
              'label' => esc_html__( 'Second Subtitle', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'max 35 player', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'button1priceboxtwo',
            [
              'label' => esc_html__( 'Button', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Order Now', 'emyui-core' ),
            
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
          $repeater = new \Elementor\Repeater();

          $repeater->add_control(
            'feature1priceboxtwo', [
              'label' => esc_html__( 'Title', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Custom and secure businessemail' , 'emyui-core' ),
              'label_block' => true,
            ]
          );
          $this->add_control(
            'features1priceboxtwo',
            [
              'label' => esc_html__( 'Features', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::REPEATER,
              'fields' => $repeater->get_controls(),
              'default' => [
                [
                  'list_title' => esc_html__( 'feature1priceboxtwo', 'Custom and secure businessemail' ),
                ],
              ],
            ]
          );
          $this->end_controls_section();
          $this->start_controls_section(
            'tab2minecraftbox',
            [
              'label' => esc_html__( 'Second Box', 'emyui-core' ),
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
            'subtitle2priceboxtwo',
            [
              'label' => esc_html__( 'Subtitle', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Plan features', 'emyui-core' ),
            
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
            'decimals2priceboxtwo',
            [
              'label' => esc_html__( 'Decimals', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( '.99', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'unit2priceboxtwo',
            [
              'label' => esc_html__( 'Number of Player', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SLIDER,
              'size_units' => ['٪'],
              'range' => [
                '٪' => [
                  'min' => 0,
                  'max' => 100,
                  'step' => 1,
                ],
              ],
              'default' => [
                'unit' => '٪',
                'size' => 50,
              ],
            ]
          );
          $this->add_control(
            'secondsubtitle2priceboxtwo',
            [
              'label' => esc_html__( 'Second Subtitle', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'max 35 player', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'button2priceboxtwo',
            [
              'label' => esc_html__( 'Button', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Order Now', 'emyui-core' ),
            
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
            'tab3minecraftbox',
            [
              'label' => esc_html__( 'Third Box', 'emyui-core' ),
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
            'subtitle3priceboxtwo',
            [
              'label' => esc_html__( 'Subtitle', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Plan features', 'emyui-core' ),
            
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
            'decimals3priceboxtwo',
            [
              'label' => esc_html__( 'Decimals', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( '.99', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'unit3priceboxtwo',
            [
              'label' => esc_html__( 'Number of Player', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SLIDER,
              'size_units' => ['٪'],
              'range' => [
                '٪' => [
                  'min' => 0,
                  'max' => 100,
                  'step' => 1,
                ],
              ],
              'default' => [
                'unit' => '٪',
                'size' => 50,
              ],
            ]
          );
          $this->add_control(
            'secondsubtitle3priceboxtwo',
            [
              'label' => esc_html__( 'Second Subtitle', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'max 35 player', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'button3priceboxtwo',
            [
              'label' => esc_html__( 'Button', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Order Now', 'emyui-core' ),
            
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
          $this->start_controls_section(
            'Customerspriceboxtwo',
            [
              'label' => esc_html__( 'My Customers', 'emyui-core' ),
                      'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
          );
          $repeater = new \Elementor\Repeater();
    
          $repeater->add_control(
            'customerlogopriceboxtwo',
            [
                'label' => esc_html__( 'Customer Logo', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,      
            ]
          );
          $repeater->add_control(
            'customerlinkpriceboxtwo',
            [
                'label' => esc_html__( 'Customer Link', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '#', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'customerpriceboxtwo',
            [
                'label' => esc_html__( 'Customers', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
            ]
            );	
          $this->end_controls_section();
        }


  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>


<div class="plans-section bg-default-4 pb-7 pt-lg-15 pb-lg-24 white-bg position-relative">
                <div class="container">
                <?php   if ( 'yes' === $settings['showtitleminecraftbox'] ) { ?>
                    <div class="row justify-content-center">
                        <h2 class="coodiv-text-4 mb-7 text-center">
                        <?php echo  esc_html($settings['titleminecraftbox']); ?>
                        </h2>
                        <p class="coodiv-text-8 mb-13 text-center"><?php echo  esc_html($settings['descminecraftbox']); ?></p>
                    </div>
                    <?php } ?>

                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="minecraft-plans rounded-20 white-bg shadow-1 px-10 py-10 border text-center mb-lg-0 mb-10">
                                <h5 class="title coodiv-text-7 mb-0"><?php echo  esc_html($settings['title1priceboxtwo']); ?></h5>
                                <p class="sub-title coodiv-text-11"><?php echo  esc_html($settings['subtitle1priceboxtwo']); ?></p>
                                <p class="price coodiv-text-3 font-weight-bold color1"><?php echo  esc_html($settings['price1priceboxtwo']); ?><small class="coodiv-text-9"><?php echo  esc_html($settings['decimals1priceboxtwo']); ?></small></p>
                                <div class="plan-progress-bar color1"><span style="width: <?php echo  esc_attr($settings['unit1priceboxtwo']['size']); ?>%;"></span> <small><?php echo  esc_html($settings['secondsubtitle1priceboxtwo']); ?></small></div>

                                <ul class="features px-0 mx-auto mb-0 card-list list-style-check text-center justify-content-center-li mt-15">
                                <?php		if ( $settings['features1priceboxtwo'] ) {
                                        foreach (  $settings['features1priceboxtwo'] as $item ) {?>
                                    <li class="coodiv-text-11"><span><?php echo  esc_html($item['feature1priceboxtwo']); ?></span></li>
                                    <?php  }
                          }?>
                                  </ul>

                                <a class="d-block btn btn-info coodiv-text-11 font-weight-bold rounded-20 mt-8" href="<?php echo  esc_url($settings['linkbutton3priceboxtwo']); ?>"><?php echo  esc_html($settings['button1priceboxtwo']); ?></a>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="minecraft-plans rounded-20 white-bg shadow-1 px-10 py-10 border text-center mb-lg-0 mb-10">
                                <h5 class="title coodiv-text-7 mb-0"><?php echo  esc_html($settings['title2priceboxtwo']); ?></h5>
                                <p class="sub-title coodiv-text-11"><?php echo  esc_html($settings['subtitle2priceboxtwo']); ?></p>
                                <p class="price coodiv-text-3 font-weight-bold color2"><?php echo  esc_html($settings['price2priceboxtwo']); ?><small class="coodiv-text-9"><?php echo  esc_html($settings['decimals2priceboxtwo']); ?></small></p>
                                <div class="plan-progress-bar color2"><span style="width: <?php echo  esc_attr($settings['unit2priceboxtwo']['size']); ?>%;"></span> <small><?php echo  esc_html($settings['secondsubtitle2priceboxtwo']); ?></small></div>

                                <ul class="features px-0 mx-auto mb-0 card-list list-style-check text-center justify-content-center-li mt-15">
                                <?php		if ( $settings['features2priceboxtwo'] ) {
                                        foreach (  $settings['features2priceboxtwo'] as $item ) {?>
                                    <li class="coodiv-text-11"><span><?php echo  esc_html($item['feature2priceboxtwo']); ?></span></li>
                                    <?php  }
                          }?>
                                </ul>

                                <a class="d-block btn btn-info coodiv-text-11 font-weight-bold rounded-20 mt-8" href="<?php echo  esc_url($settings['linkbutton2priceboxtwo']); ?>"><?php echo  esc_html($settings['button2priceboxtwo']); ?></a>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="minecraft-plans rounded-20 white-bg shadow-1 px-10 py-10 border text-center">
                                <h5 class="title coodiv-text-7 mb-0"><?php echo  esc_html($settings['title3priceboxtwo']); ?></h5>
                                <p class="sub-title coodiv-text-11"><?php echo  esc_html($settings['subtitle3priceboxtwo']); ?></p>
                                <p class="price coodiv-text-3 font-weight-bold color3"><?php echo  esc_html($settings['price3priceboxtwo']); ?><small class="coodiv-text-9"><?php echo  esc_html($settings['decimals3priceboxtwo']); ?></small></p>
                                <div class="plan-progress-bar color3"><span style="width: <?php echo  esc_attr($settings['unit3priceboxtwo']['size']); ?>%;"></span> <small><?php echo  esc_html($settings['secondsubtitle3priceboxtwo']); ?></small></div>

                                <ul class="features px-0 mx-auto mb-0 card-list list-style-check text-center justify-content-center-li mt-15">
                                <?php		if ( $settings['features3priceboxtwo'] ) {
                                        foreach (  $settings['features3priceboxtwo'] as $item ) {?>
                                    <li class="coodiv-text-11"><span><?php echo  esc_html($item['feature3priceboxtwo']); ?></span></li>
                                    <?php  }
                                              }?>
                                </ul>

                                <a class="d-block btn btn-info coodiv-text-11 font-weight-bold rounded-20 mt-8" href="<?php echo esc_url($settings['linkbutton3priceboxtwo']); ?>"><?php echo  esc_html($settings['button3priceboxtwo']); ?></a>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center mt-14">
                        <div class="col-12 col-md-11 col-lg-10 col-xl-9">
                            <div class="brand-logos d-flex justify-content-center align-items-center mx-n9 flex-wrap">
                                <div class="single-brand mx-9 py-7 aos-init aos-animate" data-aos="zoom-in-right" data-aos-duration="500" data-aos-once="true">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/logos/logo-1.png" alt="" class="w-100" />
                                </div>
                                <?php		if ( $settings['customerpriceboxtwo'] ) {
                                    foreach (  $settings['customerpriceboxtwo'] as $item ) {?>
                                <div class="single-brand mx-9 py-7 aos-init aos-animate" data-aos="zoom-in-right" data-aos-duration="500" data-aos-once="true">
                                    <a href="<?php echo  esc_url($item['customerlinkpriceboxtwo']); ?>"><img src="<?php echo esc_url($item['customerlogopriceboxtwo']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $item['customerlogopriceboxtwo'] )); ?>" class="w-100" /></a>
                                </div>
                                <?php  }
                            
						}?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <?php
  }


}
