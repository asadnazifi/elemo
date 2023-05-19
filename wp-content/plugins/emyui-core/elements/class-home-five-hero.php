<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Hero_five extends Widget_Base{

  public function get_name(){
    return 'hero-five';
  }

  public function get_title(){
    return esc_html__( 'fifth Hero', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){

    $this->start_controls_section(
      'section_content_herofive',
      [
        'label' => esc_html__( 'Headings', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
    $this->add_control(
			'beforetitleherofive',
			[
				'label' => esc_html__( 'Before Heading', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Take your', 'emyui-core' ),
			
			]
		);    $this->add_control(
			'titleherofive',
			[
				'label' => esc_html__( 'Heading', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'cybersecurity', 'emyui-core' ),
			
			]
		);    $this->add_control(
			'aftertitleherofive',
			[
				'label' => esc_html__( 'After Heading', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'to the next level', 'emyui-core' ),
			
			]
		);
		$this->add_control(
			'descherofive',
			[
				'label' => esc_html__( 'Description', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Protect your identity and sensitive data. Stay safe online. Get 2 years of the best VPN service with 65% off for $4.13/month.', 'emyui-core' ),
			   
			]
		);
		$this->add_control(
			'buttonherofive',
			[
				'label' => esc_html__( 'Button', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Get Started', 'emyui-core' ),
			   
			]
		);
		$this->add_control(
			'buttonlinkherofive',
			[
				'label' => esc_html__( 'Button Link', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '#', 'emyui-core' ),
			   
			]
		);
		$this->add_control(
			'textherofive',
			[
				'label' => esc_html__( 'Text', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '30-day money-back guarantee', 'emyui-core' ),
			   
			]
		);
    $this->end_controls_section();
    
    $this->start_controls_section(
      'sectiontwo_herofive',
      [
        'label' => esc_html__( 'Images', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
    $this->add_control(
			'backimgherofive',
			[
				'label' => esc_html__( 'Background Image', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			]
		);
		$this->add_control(
			'img1herofive',
			[
				'label' => esc_html__( 'Fixed Image', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			]
		);
		$this->add_control(
			'img2herofive',
			[
				'label' => esc_html__( 'Animated Image', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			]
		);
    $this->end_controls_section();
  }
  

  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>
            <div class="overflow-hidden hero-area-header-banner bg-pattern pattern-11 light-mode-texts pb-17 pt-30 pb-lg-4 pt-lg-33">
                <div class="header-hero-backgrounds-particles">
                    <div id="particles-bg"></div>
                </div>

                <span class="security-hanging-men-header"><img src="<?php echo esc_url($settings['img2herofive']['url']); ?>" data-aos="fade-down" data-aos-duration="2000" data-aos-once="true" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $settings['img2herofive'] )); ?>" class="w-100" /></span>
                <div class="container">
                    <div class="row align-items-start justify-content-center justify-content-lg-between">
                        <div class="col-lg-6 order-lg-last">
                            <div class="illustration-holder">
                                <img src="<?php echo esc_url($settings['img1herofive']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $settings['img1herofive'] )); ?>" />
                            </div>
                        </div>

                        <div class="col-12 col-md-7 col-lg-6 order-lg-first" data-aos="fade-right" data-aos-duration="2000" data-aos-once="true">
                            <div class="hero-content mb-15 mb-lg-30 text-center text-lg-left">
                                <h1 class="coodiv-text-2 mb-8"><?php echo  esc_html($settings['beforetitleherofive']); ?> <span class="strike-bottom green"><?php echo  esc_html($settings['titleherofive']); ?></span> <?php echo  esc_html($settings['aftertitleherofive']); ?></h1>
                                <p class="coodiv-text-8 px-7 pl-md-0 pr-md-11 mb-0"><?php echo  esc_html($settings['descherofive']); ?></p>
                                <div class="hero-btns mt-11">
                                    <a href="<?php echo  esc_url($settings['buttonlinkherofive']); ?>" class="btn btn-red rounded-8 coodiv-hover-y rounded-20 px-15"><?php echo  esc_html($settings['buttonherofive']); ?></a>
                                    <p class="coodiv-text-12 ml-3 mt-2"><?php echo  esc_html($settings['textherofive']); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<style>
	.bg-pattern.pattern-11:before{background:url(<?php echo esc_url($settings['backimgherofive']['url']); ?>) no-repeat center;background-size:cover;opacity: .09;}

</style>
    <?php
  }


}
