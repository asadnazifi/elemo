<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Mainpricingtwo extends Widget_Base{

  public function get_name(){
    return 'pricingtwo';
  }

  public function get_title(){
    return esc_html__( 'Second Pricing Table', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
      'cont2',
      [
        'label' => esc_html__( 'Headings', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );

    $this->add_control(
      'mainti313',
      [
          'label' => esc_html__( 'Show Headings', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::SWITCHER,
          'label_on' => esc_html__( 'Show', 'your-plugin' ),
          'label_off' => esc_html__( 'Hide', 'your-plugin' ),
          'return_value' => 'yes',
          'default' => 'yes',
      ]
  );
    $this->add_control(
		'mh1',
		[
			'label' => esc_html__( 'Main Heading', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
      'condition' => [ 'mainti313' => 'yes' ],
			'default' => esc_html__( 'Why choose VPS plans', 'emyui-core' ),
		]
	);
    $this->add_control(
        'sh1',
        [
            'label' => esc_html__( 'Sub Heading', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'condition' => [ 'mainti313' => 'yes' ],
            'default' => esc_html__( 'One of the largest wholesale Domain Reseller programs, offering over 350 domain extensions.', 'emyui-core' ),
        ]
    );
   


          $this->end_controls_section();

          $this->start_controls_section(
            'feat11',
            [
              'label' => esc_html__( 'Plans', 'emyui-core' ),
                      'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
          );
      
          $repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'mh3', [
				'label' => esc_html__( 'First Coloumn Title', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'our web hosting' , 'emyui-core' ),
			]
		);
        $repeater->add_control(
			'imageminn1',
			[
				'label' => esc_html__( 'First Coloumn Image', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
        $repeater->add_control(
			'mh4', [
				'label' => esc_html__( 'First Coloumn Description', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Starts from $2.95 /month' , 'emyui-core' ),
			]
		);
  
    $repeater->add_control(
			'mh5', [
				'label' => esc_html__( 'Second Coloumn Title', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'SSD Only servers' , 'emyui-core' ),
			]
		);
    $repeater->add_control(
			'mh6', [
				'label' => esc_html__( 'Second Coloumn Description', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'feather icon-check' , 'emyui-core' ),
			]
		);
   
    $repeater->add_control(
			'mh7', [
				'label' => esc_html__( 'Third Coloumn Title', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'SSD Only servers' , 'emyui-core' ),
			]
		);
    $repeater->add_control(
			'mh8', [
				'label' => esc_html__( 'Third Coloumn Description', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'feather icon-x' , 'emyui-core' ),
			]
		);
  
    $repeater->add_control(
			'mh9', [
				'label' => esc_html__( 'Fourth Coloumn Title', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'our web hosting' , 'emyui-core' ),
			]
		);
    $repeater->add_control(
			'mh10', [
				'label' => esc_html__( 'Fourth Coloumn Description', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Starts from $2.95 /month' , 'emyui-core' ),
			]
		);
        $repeater->add_control(
			'imageminn2',
			[
				'label' => esc_html__( 'Fourth Coloumn Image', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
    $repeater->add_control(
			'mhl1', [
				'label' => esc_html__( 'Coloumn Link', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '#' , 'emyui-core' ),
			]
		);
    $repeater->add_control(
			'bgsty1',
			[
				'label' => esc_html__( 'Background Style', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '1',
				'options' => [
					'1'  => esc_html__( 'Blue', 'emyui-core' ),
					'2' => esc_html__( 'Yellow', 'emyui-core' ),
					'3' => esc_html__( 'Grey', 'emyui-core' ),
				
				],
			]
		);
       
 

        $this->add_control(
			'listfe111',
			[
				'label' => esc_html__( 'Plans', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'mh3' => esc_html__( 'our web hosting', 'emyui-core' ),
						'mh4' => esc_html__( 'Starts from $2.95 /month', 'emyui-core' ),
            'mh5' => esc_html__( 'SSD Only servers' , 'emyui-core' ),
            'mh6' => esc_html__( 'feather icon-check', 'emyui-core' ),
            'mh7' => esc_html__( 'SSD Only servers', 'emyui-core' ),
            'mh8' => esc_html__( 'feather icon-x', 'emyui-core' ),
            'mh9' => esc_html__( 'our web hosting', 'emyui-core' ),
            'mh10' => esc_html__( 'Starts from $2.95 /month', 'emyui-core' ),
            'mhl1' => esc_html__( '#', 'emyui-core' ),
            'bgsty1' => '1'
     
					],
                
				],
			]
		);





          $this->end_controls_section();
        }


  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>


    <div class="head-to-head-section pt-12 pb-6 pt-lg-10 pb-lg-24 bg-pattern pattern-5">
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-8 col-xl-7">
                            <div class="section-title mb-7 mb-lg-16 text-center">
                                <h2 class="title coodiv-text-4 mb-7"><?php echo esc_html($settings['mh1']); ?></h2>
                                <p class="coodiv-text-8 mb-0">
                                <?php echo esc_html($settings['sh1']); ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                    <?php
    	if ( $settings['listfe111'] ) {
     
        foreach (  $settings['listfe111'] as $item ) { ?>
        <div class="col-lg-12" data-aos="fade-right" data-aos-duration="1100" data-aos-once="true">
                            <a href="<?php echo esc_url($item['mhl1']); ?>" class="comparison-box side-bg-<?php echo esc_html($item['bgsty1']); ?> d-md-flex d-block justify-content-between rounded-10 align-items-center mb-9">
                                <div class="comparison-box-right-side row">
                                    <div class="col-md-6 side">
                                        <img src="<?php echo esc_url($item['imageminn2']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $settings['imageminn2'] )); ?>" />
                                        <h3 class="comp-title"><?php echo esc_html($item['mh3']); ?></h3>
                                        <p class="comp-sub-title"><?php echo esc_html($item['mh4']); ?></p>
                                    </div>

                                    <div class="col-md-6 side">
                                        <span class="right-side-plan-slider">
                                        <?php echo esc_html($item['mh5']); ?>
                                        <i class="<?php echo esc_attr($item['mh6']); ?>"></i>
                                        </span>
                                    </div>
                                </div>

                                <div class="comparison-box-left-side row">
                                    <div class="col-md-6 side">
                                        <span class="right-side-plan-slider">
                                        <?php echo esc_html($item['mh7']); ?>
                                        <i class="<?php echo esc_attr($item['mh8']); ?>"></i>
                                        </span>
                                    </div>

                                    <div class="col-md-6 side">
                                        <img src="<?php echo esc_url($item['imageminn1']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $settings['imageminn1'] )); ?>" />
                                        <h3 class="comp-title"> <?php echo esc_html($item['mh9']); ?></h3>
                                        <p class="comp-sub-title"><?php echo esc_html($item['mh10']); ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
  <?php      }
    
      }
    ?>
                       

                     
                    </div>
                </div>
            </div>

    <?php
  }


}
