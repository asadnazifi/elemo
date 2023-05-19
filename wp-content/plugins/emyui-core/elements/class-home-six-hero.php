<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Hero_six extends Widget_Base{

  public function get_name(){
    return 'hero-six';
  }

  public function get_title(){
    return esc_html__( 'sixth Hero', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){

    $this->start_controls_section(
      'section_content_herosix',
      [
        'label' => esc_html__( 'Headings', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
	$this->add_control(
		'bg_style_six',
		[
			'label' => esc_html__( 'Background Style', 'plugin-name' ),
			'type' => \Elementor\Controls_Manager::SELECT,
			'default' => 'type1',
			'options' => [
				'type1'  => esc_html__( 'Default', 'plugin-name' ),
				'type2' => esc_html__( 'Custom Background', 'plugin-name' ),
				
			],
		]
	);
	$this->add_group_control(
		\Elementor\Group_Control_Background::get_type(),
		[
			'name' => 'background4',
			'label' => esc_html__( 'Background', 'plugin-name' ),
			'types' => [ 'classic', 'gradient', 'video' ],
			'condition' => [
			'bg_style_six' => 'type2'
			],
			'selector' => '{{WRAPPER}} .hero-area-coodiv.vpn-version.position-relative.overflow-hidden.pb-0.shadow',
		]
	);

    $this->add_control(
			'subtitleherosix',
			[
				'label' => esc_html__( 'Subtitle', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'WITH EMYUI', 'emyui-core' ),
			
			]
		);    $this->add_control(
			'titleherosix',
			[
				'label' => esc_html__( 'Title', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'The content delivery platform that truly fast.', 'emyui-core' ),
			
			]
		); 
		$this->add_control(
			'descherosix',
			[
				'label' => esc_html__( 'Description', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Go faster than the fastest with the next-generation CDN, edge storage, and optimization service. We make lightning fast performance at any scale easier than ever before.', 'emyui-core' ),
			   
			]
		);
		$this->add_control(
			'buttonherosix',
			[
				'label' => esc_html__( 'Button', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Try for free for 14 days', 'emyui-core' ),
			   
			]
		);
		$this->add_control(
			'buttonlinkherosix',
			[
				'label' => esc_html__( 'Button Link', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '#', 'emyui-core' ),
			   
			]
		);
    $this->end_controls_section();
    
    $this->start_controls_section(
      'sectiontwo_herosix',
      [
        'label' => esc_html__( 'Second Section', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
	$this->add_control(
		'title2herosix',
		[
			'label' => esc_html__( 'Title', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( 'Join to +900.000 websites already powered by coodiv.net', 'emyui-core' ),
		   
		]
	);
	$this->add_control(
		'subtitle2herosix',
		[
			'label' => esc_html__( 'Subtitle', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( 'Our dedication to quality has won the trust of many well known brands in their industries.', 'emyui-core' ),
		   
		]
	);
	$this->add_control(
		'ratingherosix',
		[
			'label' => esc_html__( 'Rating', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::NUMBER,
			'min' => 0,
			'max' => 5,
			'step' => 1,
			'default' => 5,
		]
	);
  
	$this->add_control(
		'ratecountherosix',
		[
			'label' => esc_html__( 'Rating Count', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::NUMBER,
			'min' => 0,
			'max' => 5,
			'step' => 0.1,
			'default' => 4.9,
		]
	);
	$this->add_control(
		'numberreviewherosix',
		[
			'label' => esc_html__( 'Number of Reviewers', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::NUMBER,
			'min' => 0,
			'max' => 500000,
			'step' => 1,
			'default' => 3223,
		]
	);
    $this->end_controls_section();
  }
  

  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>
            <div class="hero-area-coodiv vpn-version position-relative overflow-hidden pb-0 shadow">
                <!-- START hero area animations -->
				<?php if($settings['bg_style_six']==='type1'){ ?>
                <div class="header-hero-backgrounds">
                    <div class="vpn-space-bg"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/image/header/vpn-version/bg.jpg" alt="" /></div>

                    <div id="particles-bg"></div>

                    <div class="animated__header__items__inner" id="js-scene">
                        <div class="items__layer layer vpn-space-rocks-img" data-depth="0.2"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/image/header/vpn-version/space-men-rocks.svg" alt="" /></div>
                        <div class="items__layer layer t-first" data-depth="0.1"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/image/header/sunset-version/moon.png" alt="" /></div>
                    </div>
                    <div class="vpn-space-men-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/image/header/vpn-version/space-men.svg" alt="" /></div>
                    <span class="vpn-version-ovellay-background"></span>
                </div>
				<?php } ?>

                <div class="shape-1 coodiv-abs-tr" data-aos="fade-up" data-aos-duration="500" data-aos-once="true"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/image/header/helf-circle-01.png" alt="" /></div>
                <div class="shape-2 coodiv-abs-tr" data-aos="fade-down-left" data-aos-duration="800" data-aos-delay="300" data-aos-once="true"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/image/header/helf-circle-02.png" alt="" /></div>
                <div class="shape-3 coodiv-abs-tr" data-aos="fade-down-left" data-aos-duration="1100" data-aos-delay="600" data-aos-once="true"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/image/header/helf-circle-03.png" alt="" /></div>
                <!-- END hero area animations -->

                <div class="container position-relative coodiv-z-index-2">
                    <!-- END HERO MAIN CONTENTS -->
                    <div class="row justify-content-start">
                        <!-- row -->
                        <div class="col-md-9 col-lg-7 col-xl-7">
                            <!-- column -->
                            <!-- START MAIN CONTENTS -->
                            <div class="hero-content dark-mode-texts text-left py-15 mb-lg-12">
                                <h4 class="coodiv-text-12 text-uppercase mb-3 coodiv-color-green-opacity-7"><?php echo  esc_html($settings['subtitleherosix']); ?></h4>
                                <h1 class="coodiv-text-3 text-white d-block mb-10"><?php echo  esc_html($settings['titleherosix']); ?></h1>
                                <p class="coodiv-text-9 mb-0 coodiv-color-white-opacity-9 mb-10">
								<?php echo  esc_html($settings['descherosix']); ?>
                                </p>

                                <div class="hero-btns d-flex flex-column flex-md-row justify-content-start mt-11">
                                    <a href="<?php echo  esc_html($settings['buttonlinkherosix']); ?>" class="btn btn-red coodiv-hover-y mb-6 mb-md-0 rounded-25"><?php echo  esc_html($settings['buttonherosix']); ?></a>
                                </div>
                            </div>
                            <!-- END MAIN CONTENTS -->
                        </div>
                        <!-- END column -->
                    </div>
                    <!-- END row -->
                </div>
                <!-- END hero MAIN CONTENTS -->

                <div class="rating-header-section py-9 coodiv-bg-blackish-blue-opacity-opacity-9 position-relative">
                    <div class="container">
                        <div class="row align-items-center dark-mode-texts">
                            <div class="col-lg-8">
                                <div class="section-title rating-header-text pr-lg-5 text-lg-left text-center">
                                    <h2 class="coodiv-text-8 mb-2"><?php echo  esc_html($settings['title2herosix']); ?></h2>
                                    <p class="coodiv-text-11 mb-0"><?php echo  esc_html($settings['subtitle2herosix']); ?></p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-4 d-flex justify-content-lg-end justify-content-center mt-lg-0 mt-10">
                                <div class="reviews-overview text-center">
                                    <p class="coodiv-text-11 mb-1"><?php echo _e('We are rated ', 'emyui-core');?><strong><?php echo _e(' Excellent ', 'emyui-core'); ?></strong></p>
                                    <span class="reviews-stars">

									<?php $ratingnum5=$settings['ratingherosix']; 
									if($ratingnum5==0){
									?> <span> <?php echo esc_html__( '   No Ratings Found', 'emyui-core' ); ?></span> <?php
									}
									elseif($ratingnum5==1){
									?>
									<i class="feather icon-star-on"></i>
									<?php
									}
									elseif($ratingnum5==2){
									?>
									<i class="feather icon-star-on"></i> <i class="feather icon-star-on"></i>
									<?php
									}
									elseif($ratingnum5==3){
									?>
									<i class="feather icon-star-on"></i> <i class="feather icon-star-on"></i> <i class="feather icon-star-on"></i>
									<?php
									}
									elseif($ratingnum5==4){
									?>
									<i class="feather icon-star-on"></i> <i class="feather icon-star-on"></i> <i class="feather icon-star-on"></i> <i class="feather icon-star-on"></i>
									<?php
									}
									elseif($ratingnum5==5){ ?>
									<i class="feather icon-star-on"></i> <i class="feather icon-star-on"></i> <i class="feather icon-star-on"></i> <i class="feather icon-star-on"></i> <i class="feather icon-star-on"></i>
									<?php

									}                            

									?> 
									</span>
                                    <p class="coodiv-text-11 mb-0"><strong><?php echo  esc_html($settings['ratecountherosix']); ?></strong>&nbsp;<?php echo _e('out of 5 based on ', 'emyui-core');?><strong><?php echo  esc_html($settings['numberreviewherosix']); echo _e('reviews', 'emyui-core');?> </strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php
  }


}
