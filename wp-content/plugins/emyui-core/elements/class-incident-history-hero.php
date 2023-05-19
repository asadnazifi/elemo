<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Incidenthistoryhero extends Widget_Base{

  public function get_name(){
    return 'incidenthistoryhero';
  }

  public function get_title(){
    return esc_html__( 'Incident History Hero', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
      'tab0incidenthistoryhero',
      [
        'label' => esc_html__( 'Content', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );

    $this->add_control(
			'titleincidenthistoryhero',
			[
				'label' => esc_html__( 'Title', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'All incident history.', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'descincidenthistoryhero',
			[
				'label' => esc_html__( 'Description', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'dateincidenthistoryhero',
			[
				'label' => esc_html__( 'Second Heading', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Last update: 2021-01-08 02:44:11 UTC', 'emyui-core' ),
			
			]
		);
          $this->end_controls_section();
        }


  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>

<div class="hero-area-coodiv mini-hero-text position-relative gradient-blue-bg dark-mode-texts">
                <div class="header-hero-backgrounds">
                    <svg class="bg-wave-box-end-z1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                        <path
                            fill="#fff"
                            fill-opacity="1"
                            d="M0,0L34.3,16C68.6,32,137,64,206,80C274.3,96,343,96,411,96C480,96,549,96,617,117.3C685.7,139,754,181,823,186.7C891.4,192,960,160,1029,170.7C1097.1,181,1166,235,1234,234.7C1302.9,235,1371,181,1406,154.7L1440,128L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
                        ></path>
                    </svg>
                    <div id="particles-bg"></div>
                    <span class="header-erath"></span>
                    <div class="t-first"><img class="layer layer2" data-depth="-0.20" src="<?php echo esc_url(get_template_directory_uri()); ?>/image/header/planet.png" alt="" /></div>
                    <div class="t-second"><img class="layer layer2" data-depth="-0.20" src="<?php echo esc_url(get_template_directory_uri()); ?>/image/header/sat.png" alt="" /></div>
                </div>

                <div class="container">
                    <div class="row justify-content-center align-items-center pb-lg-30 position-relative coodiv-z-index-2">
                        <div class="col-11 col-md-9 col-lg-9 order-lg-1" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
                            <div class="hero-content mt-11 mt-lg-0 text-center">
                                <h1 class="title coodiv-text-4 mb-3"><?php echo  esc_html($settings['titleincidenthistoryhero']); ?></h1>
                                <p class="sub-title coodiv-text-9 font-weight-light"><?php echo  esc_html($settings['descincidenthistoryhero']); ?></p>
                                <div class="text-center pb-15"><span class="badge badge-pill coodiv-text-9 min-coodiv-text-9-mobile px-10 badge-info white-text font-weight-light"><?php echo  esc_html($settings['dateincidenthistoryhero']); ?></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


    <?php
  }


}
