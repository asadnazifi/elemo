<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Gridtwo extends Widget_Base{

  public function get_name(){
    return 'gridtwo';
  }

  public function get_title(){
    return esc_html__( 'Second Grid Section', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
      'cont',
      [
        'label' => esc_html__( 'Components', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
    $this->add_control(
			'cont1',
			[
				'label' => esc_html__( 'Main Text', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'See why millions of businesses love and rely on Workspace for their business needs.', 'emyui-core' ),
		
			]
		);
    $this->add_control(
			'cont2',
			[
				'label' => esc_html__( 'First Grid Title', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Best support team', 'emyui-core' ),
		
			]
		);
    $this->add_control(
			'cont3',
			[
				'label' => esc_html__( 'First Grid Sub Title', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'we offer 24/7 support', 'emyui-core' ),
		
			]
		);
    $this->add_control(
			'conim1',
			[
				'label' => esc_html__( 'First Grid image', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			
			]
		);

    
    $this->add_control(
			'cont4',
			[
				'label' => esc_html__( 'Rating', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '3,572 Rating', 'emyui-core' ),
		
			]
		);
    $this->add_control(
			'conim3',
			[
				'label' => esc_html__( 'Second Grid image', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			
			]
		);
    $this->add_control(
			'conim2',
			[
				'label' => esc_html__( 'Rating Image', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			
			]
		);




          $this->end_controls_section();
        }


  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>



<div class="rating-section bg-default-6">
                <div class="container">
                    <div class="pt-13 pb-7 pt-lg-10 pb-lg-19">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="section-title">
                                    <h2 class="coodiv-text-5 coodiv-text-color"><?php echo  esc_html($settings['cont1']); ?></h2>
                                </div>
                            </div>
                            <div class="col-lg-5 offset-xl-2">
                                <div class="awards-wrapper mt-9 mt-lg-0">
                                    <div class="row justify-content-md-between">
                                        <div class="col-md-5">
                                            <div class="award-box text-center mb-9">
                                                <img class="mb-6 award" src="<?php echo esc_url($settings['conim1']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $settings['conim1'] )); ?>" />
                                                <span class="coodiv-text-9 coodiv-text-color d-block"><span class="font-weight-bold d-block coodiv-text-8 mb-0"><?php echo  esc_html($settings['cont2']); ?></span> <?php echo  esc_html($settings['cont3']); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="award-box text-center mb-9">
                                                <img class="mb-6 award" src="<?php echo esc_url($settings['conim3']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $settings['conim3'] )); ?>" />
                                                <img class="mb-6 d-block-mobile mx-auto" src="<?php echo esc_url($settings['conim2']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $settings['conim2'] )); ?>" />
                                                <span class="coodiv-text-9 coodiv-text-color d-block"><?php echo  esc_html($settings['cont4']); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




    <?php
  }


}
