<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Featurethree extends Widget_Base{

  public function get_name(){
    return 'featurethree';
  }

  public function get_title(){
    return esc_html__( 'feature three', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
        'contentfeaturethree',
        [
          'label' => esc_html__( 'Content', 'emyui-core' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
  
      $this->add_control(
          'titlefeaturethree',
          [
              'label' => esc_html__( 'Title', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Who we are', 'emyui-core' ),
      
          ]
      );
      $this->add_control(
          'descfeaturethree',
          [
              'label' => esc_html__( 'Description', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => esc_html__( 'We are technologists, designers, marketers, and educators but first and foremost, we are friends and colleagues. Our mission is to provide an easy-to-use, no-code, end-to-end automation solution that empowers individuals and teams to digitize business processes on their own. We believe in giving everyone the opportunity and power to focus on doing what they love while bringing teams, partners, and customers closer together in the process.', 'emyui-core' ),
      
          ]
      );
  
       $this->end_controls_section();
          
    $this->start_controls_section(
      'logoboxfeaturethree',
      [
        'label' => esc_html__( 'Feature Logo', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );

    $this->add_control(
        'imgfeaturethree',
        [
            'label' => esc_html__( 'Logo', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
        
        ]
    );
        $this->add_control(
        '1featurethree',
        [
            'label' => esc_html__( 'First feature', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Collect signatures', 'emyui-core' ),
        
        ]
    );
    $this->add_control(
        '2featurethree',
        [
            'label' => esc_html__( 'Second feature', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Create forms', 'emyui-core' ),
        
        ]
    );
    $this->add_control(
        '3featurethree',
        [
            'label' => esc_html__( 'Third feature', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Integrate', 'emyui-core' ),
        
        ]
    );
    $this->add_control(
        '4featurethree',
        [
            'label' => esc_html__( 'Fourth feature', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Automate', 'emyui-core' ),
        
        ]
    );
    $this->add_control(
        '5featurethree',
        [
            'label' => esc_html__( 'Fifth feature', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Seamless business processes', 'emyui-core' ),
        
        ]
    );
    $this->add_control(
        '5descfeaturethree',
        [
            'label' => esc_html__( 'Fifth feature Description', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'default' => esc_html__( 'From creating forms and collecting signatures to integrating with CRM systems and automating entire business processes, airSlate grew organically by iteratively building features that our customers demanded.', 'emyui-core' ),
        
        ]
    );
     $this->end_controls_section();
     $this->start_controls_section(
        'boxesfeaturethree',
        [
          'label' => esc_html__( 'Sub feature box', 'emyui-core' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
    $this->add_control(
		'imgbox1featurethree',
		[
			'label' => esc_html__( 'First Box Icon', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::CODE,
			'language' => 'html',
			'rows' => 20,
		]
	);
      $this->add_control(
          'titlebox1featurethree',
          [
              'label' => esc_html__( 'First Box Title', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Best servers ever', 'emyui-core' ),
      
          ]
      );
      $this->add_control(
        'buttont1featurethree',
        [
            'label' => esc_html__( 'Button Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Open a Ticket', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'buttonlink1featurethree',
        [
            'label' => esc_html__( 'Button Link', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '#', 'emyui-core' ),
    
        ]
    );
      $this->add_control(
		'imgbox2featurethree',
		[
			'label' => esc_html__( 'First Box Icon', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::CODE,
			'language' => 'html',
			'rows' => 20,
		]
	);
      $this->add_control(
          'titlebox2featurethree',
          [
              'label' => esc_html__( 'First Box Title', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Best servers ever', 'emyui-core' ),
      
          ]
      );
      $this->add_control(
        'buttont2featurethree',
        [
            'label' => esc_html__( 'Button Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Open a Ticket', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'buttonlink2featurethree',
        [
            'label' => esc_html__( 'Button Link', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '#', 'emyui-core' ),
    
        ]
    );
      $this->add_control(
		'imgbox3featurethree',
		[
			'label' => esc_html__( 'First Box Icon', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::CODE,
			'language' => 'html',
			'rows' => 20,
		]
	);
      $this->add_control(
          'titlebox3featurethree',
          [
              'label' => esc_html__( 'First Box Title', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Best servers ever', 'emyui-core' ),
      
          ]
      );
      $this->add_control(
        'buttont3featurethree',
        [
            'label' => esc_html__( 'Button Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Open a Ticket', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'buttonlink3featurethree',
        [
            'label' => esc_html__( 'Button Link', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '#', 'emyui-core' ),
    
        ]
    );
      $this->add_control(
		'imgbox4featurethree',
		[
			'label' => esc_html__( 'First Box Icon', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::CODE,
			'language' => 'html',
			'rows' => 20,
		]
	);
      $this->add_control(
          'titlebox4featurethree',
          [
              'label' => esc_html__( 'First Box Title', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Best servers ever', 'emyui-core' ),
      
          ]
      );
      $this->add_control(
        'buttont4featurethree',
        [
            'label' => esc_html__( 'Button Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Open a Ticket', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'buttonlink4featurethree',
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

<div class="who-we-are-section bg-default-2 pb-2 pt-lg-22 pb-lg-30 pt-15 position-relative">
                <svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
                    <defs>
                        <filter id="roundedsvg">
                            <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur" />
                            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                            <feComposite in="SourceGraphic" in2="goo" operator="atop" />
                        </filter>
                    </defs>
                </svg>
                <svg class="bg-wave-box-end-z1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path
                        fill="#ffffff"
                        fill-opacity="1"
                        d="M0,160L26.7,170.7C53.3,181,107,203,160,229.3C213.3,256,267,288,320,293.3C373.3,299,427,277,480,229.3C533.3,181,587,107,640,106.7C693.3,107,747,181,800,208C853.3,235,907,213,960,186.7C1013.3,160,1067,128,1120,106.7C1173.3,85,1227,75,1280,64C1333.3,53,1387,43,1413,37.3L1440,32L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"
                    ></path>
                </svg>

                <div class="container">
                    <div class="row justify-content-center position-relative coodiv-z-index-2">
                        <div class="col-lg-7 col-md-8">
                            <div class="section-title mb-13 text-center">
                                <h2 class="title coodiv-text-5"><?php echo  esc_html($settings['titlefeaturethree']); ?></h2>
                                <p class="coodiv-text-9 mb-11">
                                <?php echo  esc_html($settings['descfeaturethree']); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mt-n20 align-items-center d-none d-lg-flex">
                        <div class="col-lg-3 px-0 story-features-group d-flex align-items-end flex-column text-center position-relative coodiv-z-index-2">
                            <div class="story-features-item coodiv-text-9 white-bg rounded-20 shadow-2 px-9 py-3 border-opacity color-blackish-blue mb-5 position-relative feature_1" data-aos="fade-right" data-aos-duration="200" data-aos-once="true">
                            <?php echo  esc_html($settings['1featurethree']); ?>
                            </div>
                            <div class="story-features-item coodiv-text-9 white-bg rounded-20 shadow-2 px-9 py-3 border-opacity color-blackish-blue mb-5 mr-n5 position-relative feature_2" data-aos="fade-right" data-aos-duration="400" data-aos-once="true">
                            <?php echo  esc_html($settings['2featurethree']); ?>
                            </div>
                            <div class="story-features-item coodiv-text-9 white-bg rounded-20 shadow-2 px-9 py-3 border-opacity color-blackish-blue mb-5 mr-3 position-relative feature_3" data-aos="fade-right" data-aos-duration="600" data-aos-once="true">
                            <?php echo  esc_html($settings['3featurethree']); ?>
                            </div>
                            <div class="story-features-item coodiv-text-9 white-bg rounded-20 shadow-2 px-9 py-3 border-opacity color-blackish-blue mb-5 mr-n6 position-relative feature_4" data-aos="fade-right" data-aos-duration="800" data-aos-once="true" >
                            <?php echo  esc_html($settings['4featurethree']); ?>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="about-our-story img-big text-center position-relative" data-aos="fade-up" data-aos-duration="200" data-aos-once="true">
                                <img class="about-our-story-logo" src="<?php echo esc_url($settings['imgfeaturethree']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $settings['imgfeaturethree'] )); ?>" />
                            </div>
                        </div>

                        <div class="col-lg-3 px-0 story-features-group d-flex align-items-end flex-column text-center position-relative coodiv-z-index-2" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">
                            <div class="story-features-item coodiv-text-9 white-bg rounded-20 shadow-2 px-9 py-3 border-opacity color-blackish-blue mb-5 position-relative feature_5"><?php echo  esc_html($settings['5featurethree']); ?></div>
                            <p class="coodiv-text-10 d-block mt-4">
                            <?php echo  esc_html($settings['5descfeaturethree']); ?>
                        </p>
                        </div>
                    </div>

                    <div class="popular-topics row align-items-center justify-content-center mt-n5">
                        <div class="col-lg-3 col-md-6">
                            <div class="popular-topics-box bg-default shadow-2 rounded-20 px-8 py-8 mb-4">
                            <?php if(empty($settings['imgbox1featurethree'])){ ?><i class="feather icon-server color-blackish-blue coodiv-text-5 d-block mb-2"></i><?php } else{ echo esc_html($settings['imgbox1featurethree']); } ?>
                                <h5 class="coodiv-text-9 mb-3"><?php echo  esc_html($settings['titlebox1featurethree']); ?></h5>
                                <a class="coodiv-text-11 font-weight-bold mt-8 d-flex justify-content-between" href="<?php echo  esc_url($settings['buttonlink1featurethree']); ?>"><?php echo  esc_html($settings['buttont1featurethree']); ?> <i class="ml-2 fas fa-chevron-circle-right coodiv-text-7"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="popular-topics-box bg-default shadow-2 rounded-20 px-8 py-8 mb-4">
                            <?php if(empty($settings['imgbox2featurethree'])){ ?><i class="feather icon-anchor color-blackish-blue coodiv-text-5 d-block mb-2"></i><?php } else{ echo esc_html($settings['imgbox2featurethree']); } ?>
                                <h5 class="coodiv-text-9 mb-3"><?php echo  esc_html($settings['titlebox2featurethree']); ?></h5>
                                <a class="coodiv-text-11 font-weight-bold mt-8 d-flex justify-content-between" href="<?php echo  esc_url($settings['buttonlink2featurethree']); ?>"><?php echo  esc_html($settings['buttont2featurethree']); ?> <i class="ml-2 fas fa-chevron-circle-right coodiv-text-7"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="popular-topics-box bg-default shadow-2 rounded-20 px-8 py-8 mb-4">
                            <?php if(empty($settings['imgbox3featurethree'])){ ?><i class="feather icon-credit-card color-blackish-blue coodiv-text-5 d-block mb-2"></i><?php } else{ echo esc_html($settings['imgbox3featurethree']); } ?>
                                <h5 class="coodiv-text-9 mb-3"><?php echo  esc_html($settings['titlebox3featurethree']); ?></h5>
                                <a class="coodiv-text-11 font-weight-bold mt-8 d-flex justify-content-between" href="<?php echo  esc_url($settings['buttonlink3featurethree']); ?>"><?php echo  esc_html($settings['buttont3featurethree']); ?> <i class="ml-2 fas fa-chevron-circle-right coodiv-text-7"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="popular-topics-box bg-default shadow-2 rounded-20 px-8 py-8 mb-4">
                            <?php if(empty($settings['imgbox4featurethree'])){ ?><i class="feather icon-package color-blackish-blue coodiv-text-5 d-block mb-2"></i><?php } else{ echo esc_html($settings['imgbox4featurethree']); } ?>
                                <h5 class="coodiv-text-9 mb-3"><?php echo  esc_html($settings['titlebox4featurethree']); ?></h5>
                                <a class="coodiv-text-11 font-weight-bold mt-8 d-flex justify-content-between" href="<?php echo  esc_url($settings['buttonlink4featurethree']); ?>"><?php echo  esc_html($settings['buttont4featurethree']); ?> <i class="ml-2 fas fa-chevron-circle-right coodiv-text-7"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <?php
  }


}
