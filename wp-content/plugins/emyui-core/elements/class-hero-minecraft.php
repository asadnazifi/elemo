<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Herominecraft extends Widget_Base{

  public function get_name(){
    return 'herominecraft';
  }

  public function get_title(){
    return esc_html__( 'Hero Minecraft', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
      'tab0herominecraft',
      [
        'label' => esc_html__( 'First Slide', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
    $this->add_control(
			'titleherominecraft',
			[
				'label' => esc_html__( 'Title', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Check out the fastest minecraft servers ever', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'subtitleherominecraft',
			[
				'label' => esc_html__( 'Subtitle', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'GAMES SERVERS', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'descherominecraft',
			[
				'label' => esc_html__( 'Description', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'With lots of unique blocks, you can easily build a page without coding.', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'1buttonherominecraft',
			[
				'label' => esc_html__( 'First Button', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Play Now', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'1buttonlinkherominecraft',
			[
				'label' => esc_html__( 'First Button Link', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '#', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'2buttonherominecraft',
			[
				'label' => esc_html__( 'Second Button', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Explore more', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'2buttonlinkherominecraft',
			[
				'label' => esc_html__( 'Second Button Link', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '#', 'emyui-core' ),
			
			]
		);
    $this->add_control(
      'imgherominecraft',
      [
          'label' => esc_html__( 'Image', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::MEDIA,
      
      ]
  );
          $this->end_controls_section();
        }


  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>

<div class="hero-area-coodiv light-color-hero-area position-relative">
                <div class="shape-1 coodiv-abs-tr" data-aos="fade-down-left" data-aos-duration="500" data-aos-once="true"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/image/header/helf-circle-01.png" alt="" /></div>
                <div class="shape-2 coodiv-abs-tr" data-aos="fade-down-left" data-aos-duration="800" data-aos-delay="300" data-aos-once="true"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/image/header/helf-circle-02.png" alt="" /></div>
                <div class="shape-3 coodiv-abs-tr" data-aos="fade-down-left" data-aos-duration="1100" data-aos-delay="600" data-aos-once="true"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/image/header/helf-circle-03.png" alt="" /></div>

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-9 col-lg-5 pr-lg-10">
                            <div class="hero-content dark-mode-texts mb-15 mb-lg-5 text-center text-md-left pt-10 position-relative coodiv-z-index-1">
                                <h4 class="pre-title text-green coodiv-text-12 text-uppercase mb-3"><?php echo  esc_html($settings['subtitleherominecraft']); ?></h4>
                                <h1 class="coodiv-text-3 mb-8 color-blackish-blue"><?php echo  esc_html($settings['titleherominecraft']); ?></h1>
                                <p class="coodiv-text-9 px-7 pl-md-0 pr-md-11 mb-0 color-blackish-blue-opacity"><?php echo  esc_html($settings['descherominecraft']); ?></p>
                                <div class="hero-helf-2-btns mt-11">
                                    <a href="<?php echo  esc_url($settings['1buttonlinkherominecraft']); ?>" class="btn btn-warning rounded-20 coodiv-text-10 font-weight-light d-block coodiv-hover-y"><?php echo  esc_html($settings['1buttonherominecraft']); ?></a>
                                    <a href="<?php echo  esc_url($settings['2buttonlinkherominecraft']); ?>" class="btn btn-primary rounded-20 coodiv-text-10 font-weight-light d-block coodiv-hover-y"><?php echo  esc_html($settings['2buttonherominecraft']); ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 col-lg-7" data-aos="fade-up" data-aos-duration="2000" data-aos-once="true">
                            <div class="hero-img position-relative">
                                <img src="<?php echo esc_url($settings['imgherominecraft']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $settings['imgherominecraft'] )); ?>" class="w-100" />
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
