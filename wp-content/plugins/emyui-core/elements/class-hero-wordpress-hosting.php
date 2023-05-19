<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Herowordpresshosting extends Widget_Base{

  public function get_name(){
    return 'herowordpresshosting';
  }

  public function get_title(){
    return esc_html__( 'Hero Wordpress Hosting', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
      'tab0herowordpresshosting',
      [
        'label' => esc_html__( 'Content', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
    $this->add_control(
			'titleherowordpresshosting',
			[
				'label' => esc_html__( 'Title', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Managed WordPress Hosting.', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'subtitleherowordpresshosting',
			[
				'label' => esc_html__( 'Subtitle', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'WORDPRESS HOSTING', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'descherowordpresshosting',
			[
				'label' => esc_html__( 'Description', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'If your WordPress website is your passion, business or just a personal hobby, we want you to succeed and grow. We made our FastCloud hosting platform so you can stay focused on what is essential while we manage everything else for you..', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'buttonherowordpresshosting',
			[
				'label' => esc_html__( 'Button', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Get Started', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'buttonlinkherowordpresshosting',
			[
				'label' => esc_html__( 'Button Link', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '#', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'imgherowordpresshosting',
			[
				'label' => esc_html__( 'Background Image', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			
			]
		);

          $this->end_controls_section();
        }


  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>
            <div class="hero-area-coodiv mini-hero-text position-relative bg-image bg-overlay overlay-2" style="background-image: url(<?php echo esc_url($settings['imgherowordpresshosting']['url']); ?>);">
                <div class="header-hero-backgrounds">
                    <div id="particles-bg"></div>
                </div>

                <div class="shape-1 coodiv-abs-tr" data-aos="fade-down-left" data-aos-duration="500" data-aos-once="true"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/image/header/helf-circle-01.png" alt="" /></div>
                <div class="shape-2 coodiv-abs-tr" data-aos="fade-down-left" data-aos-duration="800" data-aos-delay="300" data-aos-once="true"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/image/header/helf-circle-02.png" alt="" /></div>
                <div class="shape-3 coodiv-abs-tr" data-aos="fade-down-left" data-aos-duration="1100" data-aos-delay="600" data-aos-once="true"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/image/header/helf-circle-03.png" alt="" /></div>

                <div class="container">
                    <div class="row justify-content-center align-items-center pb-30 position-relative coodiv-z-index-2">
                        <div class="col-11 col-md-9 col-lg-7 col-xl-6 order-lg-1" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
                            <div class="hero-content mt-11 mt-lg-0">
                                <h4 class="pre-title text-green coodiv-text-12 text-uppercase mb-7 text-center"><?php echo  esc_html($settings['subtitleherowordpresshosting']); ?></h4>
                                <h1 class="title coodiv-text-4 mb-5 text-white text-center"><?php echo  esc_html($settings['titleherowordpresshosting']); ?></h1>
                                <p class="coodiv-text-9 mb-11 coodiv-color-white-opacity-7 text-center">
                                <?php echo  esc_html($settings['descherowordpresshosting']); ?>
                                </p>

                                <div class="hero-btns d-flex flex-column flex-md-row justify-content-md-center mt-11">
                                    <a href="<?php echo  esc_url($settings['buttonlinkherowordpresshosting']); ?>" class="btn btn-warning with-icon coodiv-hover-y mb-6 mb-md-0 mr-md-7"> <?php echo  esc_html($settings['buttonherowordpresshosting']); ?></a>
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
