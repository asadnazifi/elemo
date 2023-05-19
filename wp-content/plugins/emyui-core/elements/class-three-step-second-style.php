<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Threestepsecondstyle extends Widget_Base{

  public function get_name(){
    return 'threestepsecondstyle';
  }

  public function get_title(){
    return esc_html__( 'Three Step Second Style', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){

    $this->start_controls_section(
      'section_content_threestepsecondstyle',
      [
        'label' => esc_html__( 'Headings', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
  $this->add_control(
			'titlethreestepsecondstyle',
			[
				'label' => esc_html__( 'Heading', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Protect all of your devices, and try our services for free', 'emyui-core' ),
			
			]
		);  
		$this->add_control(
			'descthreestepsecondstyle',
			[
				'label' => esc_html__( 'Description', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Do you use Windows at work, macOS at home, and Linux for your special projects? Youll enjoy online privacy and security on every platform.', 'emyui-core' ),
			   
			]
		);
    $this->end_controls_section();
$this->start_controls_section(
      'section_content_1threestepsecondstyle',
      [
        'label' => esc_html__( 'First Step', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
	$this->add_control(
		'step1threestepsecondstyle',
		[
			'label' => esc_html__( 'Step', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( '1', 'emyui-core' ),
		
		]
	); 
  $this->add_control(
			'subtitle1threestepsecondstyle',
			[
				'label' => esc_html__( 'Subtitle', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'EDGE STORAGE', 'emyui-core' ),
			
			]
		);  
          $this->add_control(
			'title1threestepsecondstyle',
			[
				'label' => esc_html__( 'Title', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Get secure and private access to the internet!', 'emyui-core' ),
			
			]
		);  
		$this->add_control(
			'desc1threestepsecondstyle',
			[
				'label' => esc_html__( 'Description', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'A good VPN service provides you a secure, encrypted tunnel for online traffic to flow. Nobody can see through the tunnel, get their hands on your online data.', 'emyui-core' ),
			   
			]
		);
		$this->add_control(
			'img1threestepsecondstyle',
			[
				'label' => esc_html__( 'Image', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			
			]
		);
    $this->end_controls_section();

	$this->start_controls_section(
		'section_content_2threestepsecondstyle',
		[
		  'label' => esc_html__( 'Second Step', 'emyui-core' ),
				  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		]
	  );
	  $this->add_control(
		'step2threestepsecondstyle',
		[
			'label' => esc_html__( 'Step', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( '2', 'emyui-core' ),
		
		]
	); 
	$this->add_control(
			  'subtitle2threestepsecondstyle',
			  [
				  'label' => esc_html__( 'Subtitle', 'emyui-core' ),
				  'type' => \Elementor\Controls_Manager::TEXT,
				  'default' => esc_html__( 'CHOOSE YOUR APP', 'emyui-core' ),
			  
			  ]
		  );  
			$this->add_control(
			  'title2threestepsecondstyle',
			  [
				  'label' => esc_html__( 'Title', 'emyui-core' ),
				  'type' => \Elementor\Controls_Manager::TEXT,
				  'default' => esc_html__( 'Protect all of your devices!', 'emyui-core' ),
			  
			  ]
		  );  
		  $this->add_control(
			  'desc2threestepsecondstyle',
			  [
				  'label' => esc_html__( 'Description', 'emyui-core' ),
				  'type' => \Elementor\Controls_Manager::TEXTAREA,
				  'default' => esc_html__( 'Do you use Windows at work, macOS at home, and Linux for your special projects? Youll enjoy online privacy and security on every platform. Theres a NordVPN application for Windows, macOS, iOS, Android.', 'emyui-core' ),
				 
			  ]
		  );
		  $this->add_control(
			  'img2threestepsecondstyle',
			  [
				  'label' => esc_html__( 'Image', 'emyui-core' ),
				  'type' => \Elementor\Controls_Manager::MEDIA,
			  
			  ]
		  );
	  $this->end_controls_section();

	  $this->start_controls_section(
		'section_content_3threestepsecondstyle',
		[
		  'label' => esc_html__( 'Third Step', 'emyui-core' ),
				  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		]
	  );
	  $this->add_control(
		'step3threestepsecondstyle',
		[
			'label' => esc_html__( 'Step', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( '3', 'emyui-core' ),
		
		]
	);  
	$this->add_control(
			  'subtitle3threestepsecondstyle',
			  [
				  'label' => esc_html__( 'Subtitle', 'emyui-core' ),
				  'type' => \Elementor\Controls_Manager::TEXT,
				  'default' => esc_html__( 'GLOBEL SERVERS', 'emyui-core' ),
			  
			  ]
		  );  
			$this->add_control(
			  'title3threestepsecondstyle',
			  [
				  'label' => esc_html__( 'Title', 'emyui-core' ),
				  'type' => \Elementor\Controls_Manager::TEXT,
				  'default' => esc_html__( 'Enjoy a fast and stable connection anywhere!', 'emyui-core' ),
			  
			  ]
		  );  
		  $this->add_control(
			  'desc3threestepsecondstyle',
			  [
				  'label' => esc_html__( 'Description', 'emyui-core' ),
				  'type' => \Elementor\Controls_Manager::TEXTAREA,
				  'default' => esc_html__( 'A good VPN service provides you a secure, encrypted tunnel for online traffic to flow. Nobody can see through the tunnel, get their hands on your online data.', 'emyui-core' ),
				 
			  ]
		  );
		  $this->add_control(
			  'img3threestepsecondstyle',
			  [
				  'label' => esc_html__( 'Image', 'emyui-core' ),
				  'type' => \Elementor\Controls_Manager::MEDIA,
			  
			  ]
		  );
	  $this->end_controls_section();
	  $this->start_controls_section(
		'section_content_4threestepsecondstyle',
		[
		  'label' => esc_html__( 'Button', 'emyui-core' ),
				  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		]
	  );
	$this->add_control(
			  'buttonthreestepsecondstyle',
			  [
				  'label' => esc_html__( 'Button', 'emyui-core' ),
				  'type' => \Elementor\Controls_Manager::TEXT,
				  'default' => esc_html__( 'Grab the Deal Now', 'emyui-core' ),
			  
			  ]
		  );  
			$this->add_control(
			  'buttonlinkthreestepsecondstyle',
			  [
				  'label' => esc_html__( 'Button Link', 'emyui-core' ),
				  'type' => \Elementor\Controls_Manager::TEXT,
				  'default' => esc_html__( '#', 'emyui-core' ),
			  
			  ]
		  );  
	  $this->end_controls_section();
    
  }
  

  protected function render(){
    $settings = $this->get_settings_for_display();
	?>
	            <div class="how-it-works-section position-relative pt-33 pb-20 pt-lg-33 pb-lg-25 white-bg">
                <div class="container">
                    <div class="row justify-content-center align-items-center mb-25">
                        <div class="col-md-10-col-lg-9 col-xl-8">
                            <div class="section-title text-center mb-7 mb-lg-11">
                                <h2 class="title coodiv-text-4 mb-4"><?php echo  esc_html($settings['titlethreestepsecondstyle']); ?></h2>
                                <p class="coodiv-text-8 mb-0"><?php echo  esc_html($settings['descthreestepsecondstyle']); ?></p>
                                <p></p>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-between align-items-center position-relative how-it-works-item item-one" data-aos="zoom-in" data-aos-duration="1100" data-aos-once="true">
                        <span class="how-it-works-item-number"><small><?php echo  esc_html($settings['step1threestepsecondstyle']); ?></small></span>
                        <div class="col-lg-5 col-12">
                            <div class="content-text text-center text-lg-left">
                                <h4 class="pre-title coodiv-text-12 text-green text-uppercase mb-0"><?php echo  esc_html($settings['subtitle1threestepsecondstyle']); ?></h4>
                                <h2 class="coodiv-text-6 mb-8"><?php echo  esc_html($settings['title1threestepsecondstyle']); ?></h2>
                                <p class="coodiv-text-9 pr-4 mb-11"><?php echo  esc_html($settings['desc1threestepsecondstyle']); ?></p>
                            </div>
                        </div>

                        <div class="col-12 col-lg-5 aos-init aos-animate">
                            <div class="text-left pr-xl-13 ml-lg-n8 position-relative d-none d-lg-block">
                                <img src="<?php echo esc_url($settings['img1threestepsecondstyle']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $settings['img1threestepsecondstyle'] )); ?>" class="w-100 position-relative" />
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-between align-items-center position-relative how-it-works-item item-two mt-20" data-aos="zoom-in" data-aos-duration="1100" data-aos-once="true">
                        <span class="how-it-works-item-number"><small><?php echo  esc_html($settings['step2threestepsecondstyle']); ?></small></span>

                        <div class="col-md-5 col-lg-5 aos-init aos-animate">
                            <div class="text-left pr-xl-13 ml-lg-n8 position-relative d-none d-lg-block">
                                <img src="<?php echo esc_url($settings['img2threestepsecondstyle']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $settings['img2threestepsecondstyle'] )); ?>" class="w-100 position-relative" />
                            </div>
                        </div>

                        <div class="col-lg-5 col-12">
                            <div class="content-text text-center text-lg-left">
                                <h4 class="pre-title coodiv-text-12 text-green text-uppercase mb-0"><?php echo  esc_html($settings['subtitle2threestepsecondstyle']); ?></h4>
                                <h2 class="coodiv-text-6 mb-8"><?php echo  esc_html($settings['title2threestepsecondstyle']); ?></h2>
                                <p class="coodiv-text-9 pr-4 mb-11">
								<?php echo  esc_html($settings['desc2threestepsecondstyle']); ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-between align-items-center position-relative how-it-works-item item-tree mt-20" data-aos="zoom-in" data-aos-duration="1100" data-aos-once="true">
                        <span class="how-it-works-item-number"><small><?php echo  esc_html($settings['step3threestepsecondstyle']); ?></small></span>
                        <div class="col-lg-5 col-12">
                            <div class="content-text text-center text-lg-left">
                                <h4 class="pre-title coodiv-text-12 text-green text-uppercase mb-0"><?php echo  esc_html($settings['subtitle3threestepsecondstyle']); ?></h4>
                                <h2 class="coodiv-text-6 mb-8"><?php echo  esc_html($settings['title3threestepsecondstyle']); ?></h2>
                                <p class="coodiv-text-9 pr-4 mb-11"><?php echo  esc_html($settings['desc3threestepsecondstyle']); ?></p>
                            </div>
                        </div>

                        <div class="col-md-5 col-lg-5 aos-init aos-animate">
                            <div class="text-left pr-xl-13 ml-lg-n8 position-relative d-none d-lg-block">
                                <img src="<?php echo esc_url($settings['img3threestepsecondstyle']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $settings['img3threestepsecondstyle'] )); ?>" class="w-100 position-relative" />
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center mt-lg-11 mt-30">
                        <a href="<?php echo  esc_url($settings['buttonlinkthreestepsecondstyle']); ?>" class="btn btn-red rounded-8 coodiv-hover-y rounded-20 px-15"><?php echo  esc_html($settings['buttonthreestepsecondstyle']); ?></a>
                    </div>
                </div>
            </div>

    <?php
  }


}
