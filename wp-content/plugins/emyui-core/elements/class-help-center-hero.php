<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Helphero extends Widget_Base{

  public function get_name(){
    return 'helphero';
  }

  public function get_title(){
    return esc_html__( 'Help Center Hero', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){

    $this->start_controls_section(
      'tab0helphero',
      [
        'label' => esc_html__( 'Heading', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
	$this->add_control(
        'showbackgroundhelphero',
        [
            'label' => esc_html__( 'Show Background', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::SWITCHER,
            'return_value' => 'yes',
            'default' => 'yes',
        ]
    );
    $this->add_control(
			'titlehelphero',
			[
				'label' => esc_html__( 'ُTitle', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Statement of Support and Commitment.', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'deschelphero',
			[
				'label' => esc_html__( 'Description', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Our extraordinary Technical Support and Customer Service is one of the main reasons why our clients rate FastCloud as the number one hosting solution for personal and small business websites. And we cant thank them enough for their recommendations. Because transparency and honesty are part of our core values, we believe it is essential that we let you know whats included in our hosting product support and whats not, before making your purchasing decision.', 'emyui-core' ),
			
			]
		);

    $this->end_controls_section();
    
    $this->start_controls_section(
      'tab1helphero',
      [
        'label' => esc_html__( 'Features', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
	$this->add_control(
        'img1helphero',
        [
            'label' => esc_html__( 'Feature Icon 1', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
        
        ]
    );
    $this->add_control(
			'title1helphero',
			[
				'label' => esc_html__( 'Feature Title 1', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '24/7/365 Support', 'emyui-core' ),
			
			]
		);
		$this->add_control(
			'desc1helphero',
			[
				'label' => esc_html__( 'Feature Description 1', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Day or night, rain or shine, anytime 24/7/365 our team is here for you!', 'emyui-core' ),
			
			]
		);
		$this->add_control(
			'img2helphero',
			[
				'label' => esc_html__( 'Feature Icon 2', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			
			]
		);
		$this->add_control(
				'title2helphero',
				[
					'label' => esc_html__( 'Feature Title 2', 'emyui-core' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( '24/7/365 Support', 'emyui-core' ),
				
				]
			);
			$this->add_control(
				'desc2helphero',
				[
					'label' => esc_html__( 'Feature Description 2', 'emyui-core' ),
					'type' => \Elementor\Controls_Manager::TEXTAREA,
					'default' => esc_html__( 'Day or night, rain or shine, anytime 24/7/365 our team is here for you!', 'emyui-core' ),
				
				]
			);
			$this->add_control(
				'img3helphero',
				[
					'label' => esc_html__( 'Feature Icon 3', 'emyui-core' ),
					'type' => \Elementor\Controls_Manager::MEDIA,
				
				]
			);
			$this->add_control(
					'title3helphero',
					[
						'label' => esc_html__( 'Feature Title 3', 'emyui-core' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__( '24/7/365 Support', 'emyui-core' ),
					
					]
				);
				$this->add_control(
					'desc3helphero',
					[
						'label' => esc_html__( 'Feature Description 2', 'emyui-core' ),
						'type' => \Elementor\Controls_Manager::TEXTAREA,
						'default' => esc_html__( 'Day or night, rain or shine, anytime 24/7/365 our team is here for you!', 'emyui-core' ),
					
					]
				);
				$this->add_control(
					'img4helphero',
					[
						'label' => esc_html__( 'Feature Icon 4', 'emyui-core' ),
						'type' => \Elementor\Controls_Manager::MEDIA,
					
					]
				);
				$this->add_control(
						'title4helphero',
						[
							'label' => esc_html__( 'Feature Title 4', 'emyui-core' ),
							'type' => \Elementor\Controls_Manager::TEXT,
							'default' => esc_html__( '24/7/365 Support', 'emyui-core' ),
						
						]
					);
					$this->add_control(
						'desc4helphero',
						[
							'label' => esc_html__( 'Feature Description 4', 'emyui-core' ),
							'type' => \Elementor\Controls_Manager::TEXTAREA,
							'default' => esc_html__( 'Day or night, rain or shine, anytime 24/7/365 our team is here for you!', 'emyui-core' ),
						
						]
					);
						
    $this->end_controls_section();
  }
  

  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>

<div class="hero-area-coodiv position-relative white-bg light-mode-texts">
<?php
                    if ( 'yes' === $settings['showbackgroundhelphero'] ) { ?>
                <div class="header-hero-backgrounds">
                    <svg class="bg-wave-box-end-z1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                        <path
                            fill="#f4f7fa"
                            fill-opacity="1"
                            d="M0,0L34.3,16C68.6,32,137,64,206,80C274.3,96,343,96,411,96C480,96,549,96,617,117.3C685.7,139,754,181,823,186.7C891.4,192,960,160,1029,170.7C1097.1,181,1166,235,1234,234.7C1302.9,235,1371,181,1406,154.7L1440,128L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
                        ></path>
                    </svg>

                    <span class="header-erath"></span>

                    <div class="t-first"><img class="layer layer2" data-depth="-0.20" src="<?php echo esc_url(get_template_directory_uri()); ?>/image/header/planet.png" alt="" /></div>
                    <div class="t-second d-none-mobile"><img class="layer layer2" data-depth="-0.20" src="<?php echo esc_url(get_template_directory_uri()); ?>/image/header/sat.png" alt="" /></div>
                </div>
				<?php } ?>

                <div class="container">
                    <div class="row justify-content-center align-items-center pb-10 position-relative coodiv-z-index-2">
                        <div class="col-11 col-md-12 col-lg-9 order-lg-1" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
                            <div class="hero-content mt-11 mt-lg-0">
                                <h1 class="title coodiv-text-5 mb-5 text-center"><?php echo esc_attr( $settings['titlehelphero'] ); ?></h1>
                                <p class="coodiv-text-9 mb-11 text-center">
								<?php echo esc_attr( $settings['deschelphero'] ); ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="features-box-3 row justify-content-center px-5 py-lg-5 py-0 position-relative white-bg rounded-20 shadow-custom mt-10">
                        <div class="col-lg-3 col-md-6 col-6 text-center px-lg-8 px-4 pb-8 pt-15 border-right-separate mb-lg-0 mb-15 border-all-mobile border-radius-all-mobile-20">
                            <img class="img shadow-3" src="<?php echo esc_url($settings['img1helphero']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $settings['img1helphero'] )); ?>" />
                            <h5 class="coodiv-text-9 mb-0"><?php echo esc_html( $settings['title1helphero'] ); ?></h5>
                            <p class="coodiv-text-11 mb-0"><?php echo esc_html( $settings['desc1helphero'] ); ?></p>
                        </div>

                        <div class="col-lg-3 col-md-6 col-6 text-center px-lg-8 px-4 pb-8 pt-15 border-right-separate mb-lg-0 mb-15 border-all-mobile border-radius-all-mobile-20">
                            <img class="img shadow-3" src="<?php echo esc_url($settings['img2helphero']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $settings['img2helphero'] )); ?>" />
                            <h5 class="coodiv-text-9 mb-0"><?php echo esc_html( $settings['title2helphero'] ); ?></h5>
                            <p class="coodiv-text-11 mb-0"><?php echo esc_html( $settings['desc2helphero'] ); ?></p>
                        </div>

                        <div class="col-lg-3 col-md-6 col-6 text-center px-lg-8 px-4 pb-8 pt-15 border-right-separate border-all-mobile border-radius-all-mobile-20">
                            <img class="img shadow-3" src="<?php echo esc_url($settings['img3helphero']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $settings['img3helphero'] )); ?>" />
                            <h5 class="coodiv-text-9 mb-0"><?php echo esc_html( $settings['title3helphero'] ); ?></h5>
                            <p class="coodiv-text-11 mb-0"><?php echo esc_html( $settings['desc3helphero'] ); ?></p>
                        </div>

                        <div class="col-lg-3 col-md-6 col-6 text-center px-lg-8 px-4 pb-8 pt-15 border-all-mobile border-radius-all-mobile-20">
                            <img class="img shadow-3" src="<?php echo esc_url($settings['img4helphero']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $settings['img4helphero'] )); ?>" />
                            <h5 class="coodiv-text-9 mb-0"><?php echo esc_html( $settings['title4helphero'] ); ?></h5>
                            <p class="coodiv-text-11 mb-0"><?php echo esc_html( $settings['desc4helphero'] ); ?></p>
                        </div>
                    </div>
                </div>
            </div>

    <?php
  }


}
