<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Appdownloadbox extends Widget_Base{

  public function get_name(){
    return 'appdownloadbox';
  }

  public function get_title(){
    return esc_html__( 'App Download Box', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){

    $this->start_controls_section(
      'section_content_appdownloadbox',
      [
        'label' => esc_html__( 'Headings', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
  $this->add_control(
			'titleappdownloadbox',
			[
				'label' => esc_html__( 'Heading', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Protect all of your devices, and try our services for free', 'emyui-core' ),
			
			]
		);  
		$this->add_control(
			'descappdownloadbox',
			[
				'label' => esc_html__( 'Description', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Do you use Windows at work, macOS at home, and Linux for your special projects? Youll enjoy online privacy and security on every platform.', 'emyui-core' ),
			   
			]
		);
		$this->add_control(
			'topimgappdownloadbox',
			[
				'label' => esc_html__( 'Top Image', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			
			]
		);
    $this->end_controls_section();
    
    $this->start_controls_section(
      'sectiontwo_appdownloadbox',
      [
        'label' => esc_html__( 'Left Box', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
	$this->add_control(
		'iconboxlappdownloadbox',
		[
			'label' => esc_html__( 'Icon', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( 'platform-icon windows fab fa-windows white-text', 'emyui-core' ),
		
		]
	); 
	$this->add_control(
		'titleboxlappdownloadbox',
		[
			'label' => esc_html__( 'Heading', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( 'Download app for Windows', 'emyui-core' ),
		
		]
	);  
	$this->add_control(
		'descboxlappdownloadbox',
		[
			'label' => esc_html__( 'Description', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXTAREA,
			'default' => esc_html__( 'Easy VPN setup for Windows 7 Service Pack 1, Windows 8.1, Windows 10 (version 1607 or later), and Windows 11', 'emyui-core' ),
		   
		]
	);
	$this->add_control(
        'imglappdownloadbox',
        [
            'label' => esc_html__( 'Download Image', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
        
        ]
    );
	$this->add_control(
		'linkboxlappdownloadbox',
		[
			'label' => esc_html__( 'Download Link', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( '#', 'emyui-core' ),
		
		]
	);  
    $this->end_controls_section();
	$this->start_controls_section(
		'sectionthree_appdownloadbox',
		[
		  'label' => esc_html__( 'Center Box', 'emyui-core' ),
				  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		]
	  );
	  $this->add_control(
		  'iconboxcappdownloadbox',
		  [
			  'label' => esc_html__( 'Icon', 'emyui-core' ),
			  'type' => \Elementor\Controls_Manager::TEXT,
			  'default' => esc_html__( 'platform-icon android fab fa-android white-text', 'emyui-core' ),
		  
		  ]
	  ); 
	  $this->add_control(
		  'titleboxcappdownloadbox',
		  [
			  'label' => esc_html__( 'Heading', 'emyui-core' ),
			  'type' => \Elementor\Controls_Manager::TEXT,
			  'default' => esc_html__( 'Download app for Android', 'emyui-core' ),
		  
		  ]
	  );  
	  $this->add_control(
		  'descboxcappdownloadbox',
		  [
			  'label' => esc_html__( 'Description', 'emyui-core' ),
			  'type' => \Elementor\Controls_Manager::TEXTAREA,
			  'default' => esc_html__( 'Enjoy online security and privacy on Wi-Fi and mobile networks with the best VPN for Android', 'emyui-core' ),
			 
		  ]
	  );
	  $this->add_control(
		  'imgcappdownloadbox',
		  [
			  'label' => esc_html__( 'Download Image', 'emyui-core' ),
			  'type' => \Elementor\Controls_Manager::MEDIA,
		  
		  ]
	  );
	  $this->add_control(
		  'linkboxcappdownloadbox',
		  [
			  'label' => esc_html__( 'Download Link', 'emyui-core' ),
			  'type' => \Elementor\Controls_Manager::TEXT,
			  'default' => esc_html__( '#', 'emyui-core' ),
		  
		  ]
	  );  
	  $this->end_controls_section();
	  $this->start_controls_section(
		'sectionfour_appdownloadbox',
		[
		  'label' => esc_html__( 'Right Box', 'emyui-core' ),
				  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		]
	  );
	  $this->add_control(
		  'iconboxrappdownloadbox',
		  [
			  'label' => esc_html__( 'Icon', 'emyui-core' ),
			  'type' => \Elementor\Controls_Manager::TEXT,
			  'default' => esc_html__( 'platform-icon apple fab fa-apple white-text', 'emyui-core' ),
		  
		  ]
	  ); 
	  $this->add_control(
		  'titleboxrappdownloadbox',
		  [
			  'label' => esc_html__( 'Heading', 'emyui-core' ),
			  'type' => \Elementor\Controls_Manager::TEXT,
			  'default' => esc_html__( 'Download app for iPhone and iPad', 'emyui-core' ),
		  
		  ]
	  );  
	  $this->add_control(
		  'descboxrappdownloadbox',
		  [
			  'label' => esc_html__( 'Description', 'emyui-core' ),
			  'type' => \Elementor\Controls_Manager::TEXTAREA,
			  'default' => esc_html__( 'Take charge of your online security with the best VPN for your iOS device', 'emyui-core' ),
			 
		  ]
	  );
	  $this->add_control(
		  'imgrappdownloadbox',
		  [
			  'label' => esc_html__( 'Download Image', 'emyui-core' ),
			  'type' => \Elementor\Controls_Manager::MEDIA,
		  
		  ]
	  );
	  $this->add_control(
		  'linkboxrappdownloadbox',
		  [
			  'label' => esc_html__( 'Download Link', 'emyui-core' ),
			  'type' => \Elementor\Controls_Manager::TEXT,
			  'default' => esc_html__( '#', 'emyui-core' ),
		  
		  ]
	  );  
	  $this->end_controls_section();
  }
  

  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>
            <div class="download-vpn position-relative overflow-hidden pt-20 pt-md-34 pb-15 pb-lg-0 beiege-bg bg-pattern pattern-2 mx-10 rounded-20">
                <span class="cercle-companies-logos"><img src="<?php echo esc_url($settings['topimgappdownloadbox']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $settings['topimgappdownloadbox'] )); ?>" class="w-100" /></span>

                <div class="container">
                    <div class="row justify-content-center align-items-center mb-8">
                        <div class="col-md-10-col-lg-9 col-xl-8">
                            <div class="section-title text-center mb-7 mb-lg-11">
                                <h2 class="title coodiv-text-4 mb-4"><?php echo  esc_html($settings['titleappdownloadbox']); ?></h2>
                                <p class="coodiv-text-8 mb-0"><?php echo  esc_html($settings['descappdownloadbox']); ?></p>
                                <p></p>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-lg-4 mb-lg-0 mb-15" data-aos="fade-up" data-aos-duration="300" data-aos-once="true">
                            <div class="download-vpn-platform text-center shadow-2 bg-blackish-blue dark-mode-texts py-10 px-8 rounded-top-20 bg-pattern pattern-4 h-100">
                                <i class="<?php echo esc_attr( $settings['iconboxlappdownloadbox'] ); ?>"></i>
                                <h5 class="coodiv-text-7"><?php echo  esc_html($settings['titleboxlappdownloadbox']); ?></h5>
                                <p class="coodiv-text-11 font-weight-light"><?php echo  esc_html($settings['descboxlappdownloadbox']); ?></p>
                                <a href="<?php echo  esc_html($settings['linkboxlappdownloadbox']); ?>" class="d-block mt-10 coodiv-hover-y"><img src="<?php echo esc_url($settings['imglappdownloadbox']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $settings['imglappdownloadbox'] )); ?>" /></a>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-lg-0 mb-15" data-aos="fade-up" data-aos-duration="700" data-aos-once="true">
                            <div class="download-vpn-platform text-center shadow-2 bg-blackish-blue dark-mode-texts py-10 px-8 rounded-top-20 bg-pattern pattern-4 h-100">
                                <i class="<?php echo esc_attr( $settings['iconboxcappdownloadbox'] ); ?>"></i>
                                <h5 class="coodiv-text-7"><?php echo  esc_html($settings['titleboxcappdownloadbox']); ?></h5>
                                <p class="coodiv-text-11 font-weight-light"><?php echo  esc_html($settings['descboxcappdownloadbox']); ?></p>
                                <a href="<?php echo  esc_html($settings['linkboxcappdownloadbox']); ?>" class="d-block mt-10 coodiv-hover-y"><img src="<?php echo esc_url($settings['imgcappdownloadbox']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $settings['imgcappdownloadbox'] )); ?>" /></a>
                            </div>
                        </div>

                        <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1100" data-aos-once="true">
                            <div class="download-vpn-platform text-center shadow-2 bg-blackish-blue dark-mode-texts py-10 px-8 rounded-top-20 bg-pattern pattern-4 h-100">
                                <i class="<?php echo esc_attr( $settings['iconboxrappdownloadbox'] ); ?>"></i>
                                <h5 class="coodiv-text-7"><?php echo  esc_html($settings['titleboxrappdownloadbox']); ?></h5>
                                <p class="coodiv-text-11 font-weight-light"><?php echo  esc_html($settings['descboxrappdownloadbox']); ?></p>
                                <a href="<?php echo  esc_html($settings['linkboxrappdownloadbox']); ?>" class="d-block mt-10 coodiv-hover-y"><img src="<?php echo esc_url($settings['imgrappdownloadbox']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $settings['imgrappdownloadbox'] )); ?>" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php
  }


}
