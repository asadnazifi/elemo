<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Featurefour extends Widget_Base{

  public function get_name(){
    return 'featurefour';
  }

  public function get_title(){
    return esc_html__( 'Feature Four', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
        'contentfeaturefour',
        [
          'label' => esc_html__( 'Content', 'plugin-name' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
  
      $this->add_control(
          'titlefeaturefour',
          [
              'label' => esc_html__( 'Title', 'plugin-name' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Shared values keep us connected & guide us as one team', 'plugin-name' ),
      
          ]
      );
      $this->add_control(
        'subtitlefeaturefour',
        [
            'label' => esc_html__( 'Sub Title', 'plugin-name' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'OUR VALUES', 'plugin-name' ),
    
        ]
    );
      $this->add_control(
          'descfeaturefour',
          [
              'label' => esc_html__( 'Description', 'plugin-name' ),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => esc_html__( 'Were building a different type of company, one thats focused on unlocking our customers potential towards more value-added areas. Digital transformation is a journey and well be with you, helping you get there, one step at a time. These values collectively guide our decisions and actions.

              Digital transformation is a journey and well be with you, helping you get there, one step at a time. These values collectively guide our decisions and actions.
              
              These values collectively guide our decisions and actions.', 'plugin-name' ),
      
          ]
      );
  
       $this->end_controls_section();
       $this->start_controls_section(
        'boxesfeaturefour',
        [
          'label' => esc_html__( 'Content', 'plugin-name' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
      $this->add_control(
        'backbox1featurefour',
        [
            'label' => esc_html__( 'Background Box One', 'plugin-name' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            
        ]
    );
   
      $this->add_control(
		'iconbox1featurefour',
		[
			'label' => esc_html__( 'First Box Icon', 'plugin-name' ),
			'type' => \Elementor\Controls_Manager::CODE,
			'language' => 'html',
			'rows' => 20,
		]
	);
      $this->add_control(
          'titlebox1featurefour',
          [
              'label' => esc_html__( 'First Box Title', 'plugin-name' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Delivering', 'plugin-name' ),
      
          ]
      );
      $this->add_control(
          'descfbox1featurefour',
          [
              'label' => esc_html__( 'First Box Description', 'plugin-name' ),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => esc_html__( 'Shared values keep us connected', 'plugin-name' ),
      
          ]
      );
      $this->add_control(
		'iconbox2featurefour',
		[
			'label' => esc_html__( 'Second Box Icon', 'plugin-name' ),
			'type' => \Elementor\Controls_Manager::CODE,
			'language' => 'html',
			'rows' => 20,
		]
	);
      $this->add_control(
          'titlebox2featurefour',
          [
              'label' => esc_html__( 'Second Box Title', 'plugin-name' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Delivering', 'plugin-name' ),
      
          ]
      );
      $this->add_control(
          'descfbox2featurefour',
          [
              'label' => esc_html__( 'Second Box Description', 'plugin-name' ),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => esc_html__( 'Shared values keep us connected', 'plugin-name' ),
      
          ]
      );
      $this->add_control(
		'iconbox3featurefour',
		[
			'label' => esc_html__( 'Third Box Icon', 'plugin-name' ),
			'type' => \Elementor\Controls_Manager::CODE,
			'language' => 'html',
			'rows' => 20,
		]
	);
      $this->add_control(
          'titlebox3featurefour',
          [
              'label' => esc_html__( 'Third Box Title', 'plugin-name' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Delivering', 'plugin-name' ),
      
          ]
      );
      $this->add_control(
          'descfbox3featurefour',
          [
              'label' => esc_html__( 'Third Box Description', 'plugin-name' ),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => esc_html__( 'Shared values keep us connected', 'plugin-name' ),
      
          ]
      );
      $this->add_control(
		'iconbox4featurefour',
		[
			'label' => esc_html__( 'fourth Box Icon', 'plugin-name' ),
			'type' => \Elementor\Controls_Manager::CODE,
			'language' => 'html',
			'rows' => 20,
		]
	);
    $this->add_control(
        'iconback1featurefour',
        [
            'label' => esc_html__( 'Fourth Icon Background', 'plugin-name' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .title' => 'color: {{VALUE}}',
            ],
        ]
    );
      $this->add_control(
          'titlebox4featurefour',
          [
              'label' => esc_html__( 'fourth Box Title', 'plugin-name' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Delivering', 'plugin-name' ),
      
          ]
      );
      $this->add_control(
          'descfbox4featurefour',
          [
              'label' => esc_html__( 'fourth Box Description', 'plugin-name' ),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => esc_html__( 'Shared values keep us connected', 'plugin-name' ),
      
          ]
      );
  
       $this->end_controls_section();
              $this->start_controls_section(
        'boxesfeaturefour',
        [
          'label' => esc_html__( 'Content', 'plugin-name' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
      $this->add_control(
        'backbox1featurefour',
        [
            'label' => esc_html__( 'Background Box One', 'plugin-name' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .title' => 'color: {{VALUE}}',
            ],
        ]
    );
 
      $this->add_control(
		'iconbox1featurefour',
		[
			'label' => esc_html__( 'First Box Icon', 'plugin-name' ),
			'type' => \Elementor\Controls_Manager::CODE,
			'language' => 'html',
			'rows' => 20,
		]
	);
      $this->add_control(
          'titlebox1featurefour',
          [
              'label' => esc_html__( 'First Box Title', 'plugin-name' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Delivering', 'plugin-name' ),
      
          ]
      );
      $this->add_control(
          'descfbox1featurefour',
          [
              'label' => esc_html__( 'First Box Description', 'plugin-name' ),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => esc_html__( 'Shared values keep us connected', 'plugin-name' ),
      
          ]
      );
      $this->add_control(
		'iconbox2featurefour',
		[
			'label' => esc_html__( 'Second Box Icon', 'plugin-name' ),
			'type' => \Elementor\Controls_Manager::CODE,
			'language' => 'html',
			'rows' => 20,
		]
	);
      $this->add_control(
          'titlebox2featurefour',
          [
              'label' => esc_html__( 'Second Box Title', 'plugin-name' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Delivering', 'plugin-name' ),
      
          ]
      );
      $this->add_control(
          'descfbox2featurefour',
          [
              'label' => esc_html__( 'Second Box Description', 'plugin-name' ),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => esc_html__( 'Shared values keep us connected', 'plugin-name' ),
      
          ]
      );
      $this->add_control(
		'iconbox3featurefour',
		[
			'label' => esc_html__( 'Third Box Icon', 'plugin-name' ),
			'type' => \Elementor\Controls_Manager::CODE,
			'language' => 'html',
			'rows' => 20,
		]
	);
      $this->add_control(
          'titlebox3featurefour',
          [
              'label' => esc_html__( 'Third Box Title', 'plugin-name' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Delivering', 'plugin-name' ),
      
          ]
      );
      $this->add_control(
          'descfbox3featurefour',
          [
              'label' => esc_html__( 'Third Box Description', 'plugin-name' ),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => esc_html__( 'Shared values keep us connected', 'plugin-name' ),
      
          ]
      );
      $this->add_control(
		'iconbox4featurefour',
		[
			'label' => esc_html__( 'fourth Box Icon', 'plugin-name' ),
			'type' => \Elementor\Controls_Manager::CODE,
			'language' => 'html',
			'rows' => 20,
		]
	);
    $this->add_control(
        'iconback1featurefour',
        [
            'label' => esc_html__( 'Fourth Icon Background', 'plugin-name' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .title' => 'color: {{VALUE}}',
            ],
        ]
    );
    $this->add_control(
        'img1featurefourimg',
        [
            'label' => esc_html__( 'Background Image for icons', 'plugin-name' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
        
        ]
    );
      $this->add_control(
          'titlebox4featurefour',
          [
              'label' => esc_html__( 'fourth Box Title', 'plugin-name' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Delivering', 'plugin-name' ),
      
          ]
      );
      $this->add_control(
          'descfbox4featurefour',
          [
              'label' => esc_html__( 'fourth Box Description', 'plugin-name' ),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => esc_html__( 'Shared values keep us connected', 'plugin-name' ),
      
          ]
      );
  
       $this->end_controls_section();
       $this->start_controls_section(
        'backgroundfeaturefour',
        [
          'label' => esc_html__( 'Background', 'plugin-name' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
      $this->add_control(
        'backcolourfeaturefour',
        [
            'label' => esc_html__( 'Background Colour', 'plugin-name' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .title' => 'color: {{VALUE}}',
            ],
        ]
    );
    $this->add_control(
        'imgfeaturefour',
        [
            'label' => esc_html__( 'Background Image', 'plugin-name' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
        
        ]
    );
    $this->end_controls_section();
    }
        
  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>

<div class="what-we-do-section position-relative bg-dark-blue dark-mode-texts bg-pattern pattern-3 pt-14 pt-md-20 pt-lg-26 pb-14 pb-lg-26 overflow-hidden" style="background-color:<?php echo esc_attr( $settings['backcolourfeaturefour'] ); ?>!important;">
                <span class="section-side-shadow-black-white"></span>
                <div class="container">
                    <div class="row align-items-center justify-content-start position-relative coodiv-z-index-2">
                        <div class="col-lg-7 col-md-12 pr-lg-17">
                            <div class="single-testimonial text-center text-lg-left">
                                <h4 class="pre-title coodiv-text-12 text-green text-uppercase mb-0"><?php echo  esc_html($settings['subtitlefeaturefour']); ?></h4>
                                <h3 class="review-text coodiv-text-5"><?php echo  esc_html($settings['titlefeaturefour']); ?></h3>
                                <p class="coodiv-text-9"><?php echo  esc_html($settings['descfeaturefour']); ?></p>
                            </div>
                        </div>

                        <div class="col-lg-5 col-md-12 row aboutus_services_group mx-0 py-13 py-lg-0">
                            <div class="col-md-6 aboutus_services_container">
                                <div class="aboutus_services_item px-7 py-7 rounded-10 shadow-2 mb-8 position-relative" style="background-color:<?php echo esc_attr( $settings['backbox1featurefour'] ); ?>;">
                                <?php if(empty($settings['iconbox1featurefour'])){ ?><i class="feather icon-server icon01"></i><?php } else{ echo esc_html($settings['iconbox1featurefour']); } ?>
                                    <div class="aboutus_services_title coodiv-text-9 font-weight-bold mb-1"><?php echo  $settings['titlebox1featurefour']; ?></div>
                                    <p class="aboutus_services_subtitle coodiv-text-11"><?php echo  esc_html($settings['descfbox1featurefour']); ?></p>
                                </div>

                                <div class="aboutus_services_item px-8 py-7 rounded-10 shadow-2 mb-5 position-relative" style="background-color:<?php echo esc_attr( $settings['backbox1featurefour'] ); ?>;">
                                <?php if(empty($settings['iconbox2featurefour'])){ ?><i class="feather icon-alert-triangle icon02"></i><?php } else{ echo esc_html($settings['iconbox2featurefour']); } ?>
                                    <div class="aboutus_services_title coodiv-text-9 font-weight-bold mb-1"><?php echo  $settings['titlebox2featurefour']; ?></div>
                                    <p class="aboutus_services_subtitle coodiv-text-11"><?php echo  esc_html($settings['descfbox2featurefour']); ?></p>
                                </div>
                            </div>

                            <div class="col-md-6 pt-lg-15 pt-5 pt-md-0 aboutus_services_container">
                                <div class="aboutus_services_item px-8 py-7 rounded-10 shadow-2 mb-8 position-relative" style="background-color:<?php echo esc_attr( $settings['backbox1featurefour'] ); ?>;">
                                <?php if(empty($settings['iconbox3featurefour'])){ ?><i class="feather icon-briefcase icon03"></i><?php } else{ echo esc_html($settings['iconbox3featurefour']); } ?>
                                    <div class="aboutus_services_title coodiv-text-9 font-weight-bold mb-1"><?php echo  esc_html($settings['titlebox3featurefour']); ?></div>
                                    <p class="aboutus_services_subtitle coodiv-text-11"><?php echo  esc_html($settings['descfbox3featurefour']); ?></p>
                                </div>

                                <div class="aboutus_services_item px-8 py-7 rounded-10 shadow-2 mb-5 position-relative" style="background-color:<?php echo esc_attr( $settings['backbox1featurefour'] ); ?>;">
                                <?php if(empty($settings['iconbox3featurefour'])){ ?><i class="feather icon-cloud-drizzle icon04"></i><?php } else{ echo esc_html($settings['iconbox3featurefour']); } ?>
                                    <div class="aboutus_services_title coodiv-text-9 font-weight-bold mb-1"><?php echo  esc_html($settings['titlebox4featurefour']); ?></div>
                                    <p class="aboutus_services_subtitle coodiv-text-11"><?php echo  esc_html($settings['descfbox4featurefour']); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
<style>
.bg-pattern.pattern-3:before{background:url(<?php echo esc_url($settings['imgfeaturefour']['url']); ?>) no-repeat 50% 100%;background-size:cover}
.aboutus_services_group .aboutus_services_container .aboutus_services_item:before{width:100%;min-height:92px;background:<?php echo esc_attr( $settings['backcolourfeaturefour'] ); ?> url(<?php echo esc_url($settings['img1featurefourimg']['url']); ?>);background-repeat:no-repeat;background-size:77%;background-position:center;content:'';position:absolute;left:0;height:100%;border-radius:10px}


</style>

<?php
}

}
