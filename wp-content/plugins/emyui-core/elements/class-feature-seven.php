<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Featureseven extends Widget_Base{

  public function get_name(){
    return 'featureseven';
  }

  public function get_title(){
    return esc_html__( 'feature Seven', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
        'contentfeatureseven',
        [
          'label' => esc_html__( 'Content', 'emyui-core' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
  	$this->add_control(
		'showtitlefeatureseven',
		[
			'label' => esc_html__( 'Show Title', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::SWITCHER,
			'return_value' => 'yes',
			'default' => 'yes',
		]
	);
      $this->add_control(
          'titlefeatureseven',
          [
              'label' => esc_html__( 'Title', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Or you can see Popular Topics', 'emyui-core' ),
      
          ]
      );
      $this->add_control(
          'descfeatureseven',
          [
              'label' => esc_html__( 'Description', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => esc_html__( 'Our extraordinary Technical Support and Customer Service is one of the main reasons why our clients rate FastCloud as the number.', 'emyui-core' ),
      
          ]
      );
  
       $this->end_controls_section();
          
     $this->start_controls_section(
        'boxesfeatureseven',
        [
          'label' => esc_html__( 'Sub feature box', 'emyui-core' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
    $this->add_control(
		'imgbox1featureseven',
		[
			'label' => esc_html__( 'First Box Icon', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::CODE,
			'language' => 'html',
			'rows' => 20,
		]
	);
      $this->add_control(
          'titlebox1featureseven',
          [
              'label' => esc_html__( 'First Box Title', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Shared Hosting departement', 'emyui-core' ),
      
          ]
      );
      $this->add_control(
        'buttont1featureseven',
        [
            'label' => esc_html__( 'Button Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Open a Ticket', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'buttonlink1featureseven',
        [
            'label' => esc_html__( 'Button Link', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '#', 'emyui-core' ),
    
        ]
    );
      $this->add_control(
		'imgbox2featureseven',
		[
			'label' => esc_html__( 'First Box Icon', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::CODE,
			'language' => 'html',
			'rows' => 20,
		]
	);
      $this->add_control(
          'titlebox2featureseven',
          [
              'label' => esc_html__( 'First Box Title', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Advanced Topics & Customization', 'emyui-core' ),
      
          ]
      );
      $this->add_control(
        'buttont2featureseven',
        [
            'label' => esc_html__( 'Button Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Open a Ticket', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'buttonlink2featureseven',
        [
            'label' => esc_html__( 'Button Link', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '#', 'emyui-core' ),
    
        ]
    );
      $this->add_control(
		'imgbox3featureseven',
		[
			'label' => esc_html__( 'First Box Icon', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::CODE,
			'language' => 'html',
			'rows' => 20,
		]
	);
      $this->add_control(
          'titlebox3featureseven',
          [
              'label' => esc_html__( 'First Box Title', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Account Management & Billing', 'emyui-core' ),
      
          ]
      );
      $this->add_control(
        'buttont3featureseven',
        [
            'label' => esc_html__( 'Button Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Open a Ticket', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'buttonlink3featureseven',
        [
            'label' => esc_html__( 'Button Link', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '#', 'emyui-core' ),
    
        ]
    );
      $this->add_control(
		'imgbox4featureseven',
		[
			'label' => esc_html__( 'First Box Icon', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::CODE,
			'language' => 'html',
			'rows' => 20,
		]
	);
      $this->add_control(
          'titlebox4featureseven',
          [
              'label' => esc_html__( 'First Box Title', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'One-Click Installs & 3rd-Party Apps', 'emyui-core' ),
      
          ]
      );
      $this->add_control(
        'buttont4featureseven',
        [
            'label' => esc_html__( 'Button Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Open a Ticket', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'buttonlink4featureseven',
        [
            'label' => esc_html__( 'Button Link', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '#', 'emyui-core' ),
    
        ]
    );
     $this->end_controls_section();
     $this->start_controls_section(
        'Customersfeatureseven',
        [
          'label' => esc_html__( 'My Customers', 'emyui-core' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
      $repeater = new \Elementor\Repeater();

      $repeater->add_control(
        'customerlogofeatureseven',
        [
            'label' => esc_html__( 'Customer Logo', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::MEDIA,      
        ]
      );
      $repeater->add_control(
        'customerlinkfeatureseven',
        [
            'label' => esc_html__( 'Customer Link', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '#', 'emyui-core' ),
        
        ]
      );
      $this->add_control(
        'customerfeatureseven',
        [
            'label' => esc_html__( 'Customers', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::REPEATER,
            'fields' => $repeater->get_controls(),
        ]
        );	
      $this->end_controls_section();

        }
        
  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>

<div class="popular-topics-section pt-15 pb-15 pt-lg-20 pb-lg-32 bg-default-1 position-relative">
                <div class="container">
                    <div class="row justify-content-center align-items-center position-relative coodiv-z-index-2">
                        <div class="col-11 col-md-9 col-lg-9 order-lg-1" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
                        <?php if ( 'yes' === $settings['showtitlefeatureseven'] ) { ?>
                            <div class="hero-content mt-11 mt-lg-0">
                                <h1 class="title coodiv-text-5 mb-5 text-center"><?php echo  esc_html($settings['titlefeatureseven']); ?></h1>
                                <p class="coodiv-text-9 mb-11 text-center"><?php echo  esc_html($settings['descfeatureseven']); ?></p>
                            </div>
                            <?php }?>
                        </div>
                    </div>

                    <div class="popular-topics row align-items-center justify-content-center mt-n5">
                        <div class="col-lg-3 col-md-6">
                            <div class="popular-topics-box bg-default-2 rounded-20 px-8 py-8 mb-4">
                            <?php if(empty($settings['imgbox1featureseven'])){ ?><i class="feather icon-server color-blackish-blue coodiv-text-5 d-block mb-2"></i><?php } else{ echo esc_html($settings['imgbox1featureseven']); } ?>
                                <h5 class="coodiv-text-9 mb-3"><?php echo  esc_html($settings['titlebox1featureseven']); ?></h5>
                                <a class="coodiv-text-11 font-weight-bold mt-8 d-flex justify-content-between" href="<?php echo  esc_url($settings['buttonlink1featureseven']); ?>"><?php echo  esc_html($settings['buttont1featureseven']); ?><i class="ml-2 fas fa-chevron-circle-right coodiv-text-7"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="popular-topics-box bg-default-2 rounded-20 px-8 py-8 mb-4">
                            <?php if(empty($settings['imgbox2featureseven'])){ ?><i class="feather icon-anchor color-blackish-blue coodiv-text-5 d-block mb-2"></i><?php } else{ echo esc_html($settings['imgbox2featureseven']); } ?>
                                <h5 class="coodiv-text-9 mb-3"><?php echo  $settings['titlebox2featureseven']; ?></h5>
                                <a class="coodiv-text-11 font-weight-bold mt-8 d-flex justify-content-between" href="<?php echo  esc_url($settings['buttonlink2featureseven']); ?>"><?php echo  esc_html($settings['buttont2featureseven']); ?><i class="ml-2 fas fa-chevron-circle-right coodiv-text-7"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="popular-topics-box bg-default-2 rounded-20 px-8 py-8 mb-4">
                            <?php if(empty($settings['imgbox3featureseven'])){ ?><i class="feather icon-credit-card color-blackish-blue coodiv-text-5 d-block mb-2"></i><?php } else{ echo esc_html($settings['imgbox3featureseven']); } ?>
                                <h5 class="coodiv-text-9 mb-3"><?php echo  $settings['titlebox3featureseven']; ?></h5>
                                <a class="coodiv-text-11 font-weight-bold mt-8 d-flex justify-content-between" href="<?php echo  esc_url($settings['buttonlink3featureseven']); ?>"><?php echo  esc_html($settings['buttont3featureseven']); ?><i class="ml-2 fas fa-chevron-circle-right coodiv-text-7"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="popular-topics-box bg-default-2 rounded-20 px-8 py-8 mb-4">
                            <?php if(empty($settings['imgbox4featureseven'])){ ?><i class="feather icon-package color-blackish-blue coodiv-text-5 d-block mb-2"></i><?php } else{ echo esc_html($settings['imgbox4featureseven']); } ?>
                                <h5 class="coodiv-text-9 mb-3"><?php echo  esc_html($settings['titlebox4featureseven']); ?></h5>
                                <a class="coodiv-text-11 font-weight-bold mt-8 d-flex justify-content-between" href="<?php echo  esc_url($settings['buttonlink4featureseven']); ?>"><?php echo  esc_html($settings['buttont4featureseven']); ?><i class="ml-2 fas fa-chevron-circle-right coodiv-text-7"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center mt-14">
                        <div class="col-12 col-md-11 col-lg-10 col-xl-9">
                            <div class="brand-logos d-flex justify-content-center align-items-center mx-n9 flex-wrap">
                            <?php		if ( $settings['customerfeatureseven'] ) {
                                    foreach (  $settings['customerfeatureseven'] as $item ) {?>
                                <div class="single-brand mx-9 py-7 aos-init aos-animate" data-aos="zoom-in-right" data-aos-duration="500" data-aos-once="true">
                                    <a href="<?php echo  esc_url($item['customerlinkfeatureseven']); ?>"><img src="<?php echo esc_url($item['customerlogofeatureseven']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $item['customerlogofeatureseven'] )); ?>" class="w-100" /></a>
                                </div>
                                <?php  }
                            
						}?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <?php
  }


}
