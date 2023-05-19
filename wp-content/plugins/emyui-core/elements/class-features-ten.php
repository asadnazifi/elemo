<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Featuresten extends Widget_Base{

  public function get_name(){
    return 'featuresten';
  }

  public function get_title(){
    return esc_html__( 'Features tenth Style', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){

    $this->start_controls_section(
      'section_content_featuresten',
      [
        'label' => esc_html__( 'Headings', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
  $this->add_control(
			'titlefeaturesten',
			[
				'label' => esc_html__( 'Heading', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'cybersecurity', 'emyui-core' ),
			
			]
		);  
		$this->add_control(
			'descfeaturesten',
			[
				'label' => esc_html__( 'Description', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Protect your identity and sensitive data. Stay safe online. Get 2 years of the best VPN service with 65% off for $4.13/month.', 'emyui-core' ),
			   
			]
		);
    $this->end_controls_section();
    
    $this->start_controls_section(
      'sectiontwo_featuresten',
      [
        'label' => esc_html__( 'Features', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
	$repeater = new \Elementor\Repeater();

	$repeater->add_control(
		'iconfeaturesten',
		[
			'label' => esc_html__( 'Icon', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( 'fad fa-fw fa-rocket', 'emyui-core' ),
		
		]
	  );
	$repeater->add_control(
	  'titlefeaturesten',
	  [
		  'label' => esc_html__( 'Title', 'emyui-core' ),
		  'type' => \Elementor\Controls_Manager::TEXT,
		  'default' => esc_html__( 'Secure internet', 'emyui-core' ),
	  
	  ]
	);
	$repeater->add_control(
		'descfeaturesten',
		[
			'label' => esc_html__( 'Description', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXTAREA,
			'default' => esc_html__( 'All your data stays safe behind a wall of next-generation encryption.', 'emyui-core' ),
		
		]
	  );
	$this->add_control(
	  'repeaterfeaturesten',
	  [
		  'label' => esc_html__( 'Features', 'emyui-core' ),
		  'type' => \Elementor\Controls_Manager::REPEATER,
		  'fields' => $repeater->get_controls(),
		  'default' => [
			[
				'iconfeaturesten' => esc_html__( 'fad fa-fw fa-rocket', 'emyui-core' ),
				'titlefeaturesten' => esc_html__( 'Secure internet', 'emyui-core' ),
				'descfeaturesten' => esc_html__( 'All your data stays safe behind a wall of next-generation encryption.', 'emyui-core' ),
			],
		],
	  ]
	  );	
    $this->end_controls_section();
	$this->start_controls_section(
		'sectionthree_featuresten',
		[
		  'label' => esc_html__( 'Brands', 'emyui-core' ),
				  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		]
	  );
	  $repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'brandfeaturesten',
			[
				'label' => esc_html__( 'Brand Logo', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			
			]
		);
	  $this->add_control(
		'repeaterbrandsfeaturesten',
		[
			'label' => esc_html__( 'Brands', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::REPEATER,
			'fields' => $repeater->get_controls(),
		]
		);	

	  $this->end_controls_section();

  }
  

  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>
             <div class="why-section-companies pt-15 pb-9 pt-lg-24 pb-lg-24 bg-default-6 coodiv-z-index-1 only-top-shadow position-relative">
                <div class="container">
                    <div class="row justify-content-start align-items-center mb-8">
                        <div class="col-md-10-col-lg-9 col-xl-8">
                            <div class="section-title text-lg-left text-center mb-7 mb-lg-11">
                                <h2 class="title coodiv-text-4 mb-4"><?php echo  esc_html($settings['titlefeaturesten']); ?></h2>
                                <p class="coodiv-text-8 mb-0"><?php echo  esc_html($settings['descfeaturesten']); ?></p>
                                <p></p>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-start">
					<?php if ( $settings['repeaterfeaturesten'] ) {
                          foreach (  $settings['repeaterfeaturesten'] as $item ) { ?>
                        <div class="feature-box-11 col-lg-3 col-6 text-lg-left text-center mb-lg-0 mb-10">
                            <span class="the-icon position-relative d-block mb-7 mx-auto mr-lg-auto ml-lg-0"><i class="<?php echo  esc_attr($item['iconfeaturesten']); ?>"></i></span>
                            <h4 class="coodiv-text-7"><?php echo  esc_html($item['titlefeaturesten']); ?></h4>
                            <p class="coodiv-text-9 pr-lg-7"><?php echo  esc_html($item['descfeaturesten']); ?></p>
                        </div>
						<?php
                                }
                                    } ?>
                    </div>

                    <div class="row justify-content-center mt-20 mb-lg-0 mb-15">
                        <div class="col-12 col-md-11 col-lg-10 col-xl-9">
                            <div class="brand-logos d-flex justify-content-center align-items-center mx-n9 flex-wrap">
							<?php if ( $settings['repeaterbrandsfeaturesten'] ) {
                          foreach (  $settings['repeaterbrandsfeaturesten'] as $item ) { ?>
                                <div class="single-brand mx-9 py-7 coodiv-opacity-8 aos-init aos-animate" data-aos="zoom-in-right" data-aos-duration="500" data-aos-once="true">
                                    <img src="<?php echo esc_url($item['brandfeaturesten']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $item['brandfeaturesten'] )); ?>" />
                                </div>
								<?php
                                }
                                    } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php
  }


}
