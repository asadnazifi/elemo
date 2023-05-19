<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Heroabout extends Widget_Base{

  public function get_name(){
    return 'Heroabout';
  }

  public function get_title(){
    return esc_html__( 'Hero About', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
      'slide1Heroabout',
      [
        'label' => esc_html__( 'Content', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    ); 
    $this->add_control(
			'titleHeroabout',
			[
				'label' => esc_html__( 'Title', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'About Us, and what we do.', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'subtitleHeroabout',
			[
				'label' => esc_html__( 'Subtitle', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'COODIV TEAM', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'descHeroabout',
			[
				'label' => esc_html__( 'Description', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Coodivs Website & Android Development , Theme Products Are User-Friendliness And Affordability. We Not Only Make A Website & App Attractive But Also Interactive', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'imgHeroabout',
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

			
<div class="hero-area-coodiv position-relative bg-image bg-overlay overlay-2" style="background-image: url(<?php echo esc_url($settings['imgHeroabout']['url']); ?>);">
                <div class="header-hero-backgrounds">
                    <div id="particles-bg"></div>
                </div>

                <div class="shape-3 coodiv-abs-tl" data-aos="fade-down-right" data-aos-duration="1100" data-aos-delay="600" data-aos-once="true"><img src="<?php echo esc_url(get_template_directory_uri());?>image/header/helf-circle-03.png" alt="" /></div>

                <div class="container">
                    <div class="row justify-content-center align-items-center pb-lg-30 mb-10 position-relative coodiv-z-index-2">
                        <div class="col-md-9 col-lg-10" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
                            <div class="hero-content mt-11 mt-md-0">
                                <h4 class="pre-title text-green coodiv-text-12 text-uppercase mb-7 text-center"><?php echo  esc_html($settings['subtitleHeroabout']); ?></h4>
                                <h1 class="title coodiv-text-4 mb-5 text-white text-center"><?php echo  esc_html($settings['titleHeroabout']); ?></h1>
                                <p class="coodiv-text-9 mb-11 coodiv-color-white-opacity-7 text-center">
                                <?php echo  esc_html($settings['descHeroabout']); ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="wave-shape-bottom">
                    <svg class="w-100 light-shape default-shape" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                        <path
                            fill="#fff"
                            fill-opacity="1"
                            d="M0,128L48,138.7C96,149,192,171,288,160C384,149,480,107,576,117.3C672,128,768,192,864,197.3C960,203,1056,149,1152,154.7C1248,160,1344,224,1392,256L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
                        ></path>
                    </svg>
                </div>
            </div>


    <?php
  }


}
