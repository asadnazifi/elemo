<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Domaintwo extends Widget_Base{

  public function get_name(){
    return 'domaintwo';
  }

  public function get_title(){
    return esc_html__( 'Domain Search two', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){


    
    $this->start_controls_section(
      'section_content11',
      [
        'label' => esc_html__( 'Domain Search', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
	$this->add_control(
		'd991',
		[
			'label' => esc_html__( 'Form Placeholder', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( 'eg.example', 'emyui-core' ),
		
		]
	);
	$this->add_control(
		'd992',
		[
			'label' => esc_html__( 'Form Submit Button Text', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( 'Search', 'emyui-core' ),
		
		]
	);
	$this->add_control(
		'd154',
		[
			'label' => esc_html__( 'WHMCS Link', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( '#', 'emyui-core' ),
			'description' => esc_html__( 'Put your main whmcs homepage link without http:// or https:// and also without / at the end', 'emyui-core' ),
		
		]
	);
    $this->add_control(
			'd1',
			[
				'label' => esc_html__( 'First Domain', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '$6.99', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'sale1',
			[
				'label' => esc_html__( 'Is it Offer?', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

    $this->add_control(
			'imd1',
			[
				'label' => esc_html__( 'First Domain Image', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				
			
			]
		);

    $this->add_control(
			'd2',
			[
				'label' => esc_html__( 'Second Domain', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '$6.99', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'sale2',
			[
				'label' => esc_html__( 'Is it Offer?', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
    $this->add_control(
			'imd2',
			[
				'label' => esc_html__( 'Second Domain Image', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			
			]
		);

    $this->add_control(
			'd3',
			[
				'label' => esc_html__( 'Third Domain', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '$6.99', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'sale3',
			[
				'label' => esc_html__( 'Is it Offer?', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
    $this->add_control(
			'imd3',
			[
				'label' => esc_html__( 'Third Domain Image', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			
			]
		);

    $this->add_control(
			'd4',
			[
				'label' => esc_html__( 'Fourth Domain', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '$6.99', 'emyui-core' ),
		
			]
		);
    $this->add_control(
			'sale4',
			[
				'label' => esc_html__( 'Is it Offer?', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
    $this->add_control(
			'imd4',
			[
				'label' => esc_html__( 'Fourth Domain Image', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			
			]
		);


    $this->add_control(
			'd5',
			[
				'label' => esc_html__( 'Fifth Domain', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '$6.99', 'emyui-core' ),
		
			]
		);
    $this->add_control(
			'sale5',
			[
				'label' => esc_html__( 'Is it Offer?', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
    $this->add_control(
			'imd5',
			[
				'label' => esc_html__( 'Fifth Domain Image', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			
			]
		);



    $this->end_controls_section();
  }
  

  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>


		<form class="domain-header-search-form d-flex flex-wrap bg-white" action="https://<?php echo $settings['d154']; ?>/cart.php?a=add&domain=register" method="post">
			<div class="single-input w-100 w-sm-50 w-lg-35 py-4 col-md-8 pr-lg-0">
				<input type="text" class="inputdomainsearch" placeholder="<?php echo $settings['d991']; ?>" autocapitalize="none" name="query" size="20" />
			</div>
			<div class="single-input w-100 w-lg-30 d-flex align-items-center justify-content-center border-0 pb-4 pt-lg-4 pt-0 pl-lg-0 col-md-4">
				<input value="<?php echo $settings['d992']; ?>" type="submit" class="btn btn-primary search-btn rounded-right-10-0 full-border-radius-10-sm"/>
			</div>
		</form>
		<i class="feather fe-icon"></i>                           
		<div class="row domain-box-sale-header" data-aos="fade-down" data-aos-duration="1100" data-aos-delay="200" data-aos-once="true">
			<div class="col">
				<img src="<?php echo esc_url($settings['imd1']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $settings['imd1'] )); ?>" />
				<h5><?php if ( 'yes' === $settings['sale1'] ) { ?><span><?php echo _e('sale','emyui-core'); ?></span> <?php } ?><?php echo esc_html($settings['d1']); ?></h5>
			</div>

			<div class="col">
				<img src="<?php echo $settings['imd2']['url']; ?>" alt="<?php echo \Elementor\Control_Media::get_image_alt( $settings['imd2'] ); ?>" />
				<h5><?php if ( 'yes' === $settings['sale2'] ) { ?><span><?php echo _e('sale','emyui-core'); ?></span> <?php } ?><?php echo  $settings['d2']; ?></h5>
			</div>

			<div class="col">
				<img src="<?php echo $settings['imd3']['url']; ?>" alt="<?php echo \Elementor\Control_Media::get_image_alt( $settings['imd3'] ); ?>" />
				<h5><?php if ( 'yes' === $settings['sale3'] ) { ?><span><?php echo _e('sale','emyui-core'); ?></span> <?php } ?><?php echo  $settings['d3']; ?></h5>
			</div>

			<div class="col">
				<img src="<?php echo $settings['imd4']['url']; ?>" alt="<?php echo \Elementor\Control_Media::get_image_alt( $settings['imd4'] ); ?>" />
				<h5><?php if ( 'yes' === $settings['sale4'] ) { ?><span><?php echo _e('sale','emyui-core'); ?></span> <?php } ?><?php echo  $settings['d4']; ?></h5>
			</div>

			<div class="col">
				<img src="<?php echo $settings['imd5']['url']; ?>" alt="<?php echo \Elementor\Control_Media::get_image_alt( $settings['imd5'] ); ?>" />
				<h5><?php if ( 'yes' === $settings['sale5'] ) { ?><span><?php echo _e('sale','emyui-core'); ?></span> <?php } ?><?php echo  $settings['d5']; ?></h5>
			</div>
		</div>
                 
				
           
          
        



    <?php
  }


}






