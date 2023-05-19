<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Featwo extends Widget_Base{

  public function get_name(){
    return 'featwo';
  }

  public function get_title(){
    return esc_html__( 'Feature Second Style', 'emyui-core' );
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
		'mainhead1',
		[
			'label' => esc_html__( 'Main Heading', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( 'Why choose VPS plans', 'emyui-core' ),
		]
	);
    $this->add_control(
        'subhead1',
        [
            'label' => esc_html__( 'Sub Heading', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'default' => esc_html__( 'One of the largest wholesale Domain Reseller programs, offering over 350 domain extensions.', 'emyui-core' ),
        ]
    );
   


          $this->end_controls_section();

          $this->start_controls_section(
            'feat1',
            [
              'label' => esc_html__( 'Features', 'emyui-core' ),
                      'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
          );
      
          $repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'mainti1', [
				'label' => esc_html__( 'Title', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Industry Best Prices' , 'emyui-core' ),
			]
		);
        $repeater->add_control(
			'subti2', [
				'label' => esc_html__( 'Description', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Highly competitive Pricing and Fantastic Promotions year' , 'emyui-core' ),
			]
		);
    $repeater->add_control(
			'iconti', [
				'label' => esc_html__( 'Icon', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'icon-package' , 'emyui-core' ),
			]
		);
    $repeater->add_control(
      'border_style1',
      [
          'label' => esc_html__( 'Background Style', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::SELECT,
          'default' => 'bg-warning',
          'options' => [
              'bg-warning'  => esc_html__( 'bg-warning', 'emyui-core' ),
              'bg-info' => esc_html__( 'bg-info', 'emyui-core' ),
              'bg-success' => esc_html__( 'bg-success', 'emyui-core' ),
              'bg-blue' => esc_html__( 'bg-blue', 'emyui-core' ),
       
          ],
      ]
  );
        $this->add_control(
			'listfe1',
			[
				'label' => esc_html__( 'Features', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'mainti1' => esc_html__( 'Industry Best Prices', 'emyui-core' ),
						'subti2' => esc_html__( 'Highly competitive Pricing and Fantastic Promotions year', 'emyui-core' ),
            'iconti' => esc_html__( 'icon-package' , 'emyui-core' ),
            'border_style1' => esc_html__( 'bg-blue', 'emyui-core' ),
					],
                
				],
			]
		);





          $this->end_controls_section();
        }


  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>


<div class="why-us-section pt-15 pb-14 py-lg-25 bg-default-2 position-relative coodiv-z-index-1 border-bottom">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-8 col-md-10">
                            <div class="section-title text-center mb-11 mb-lg-19">
                                <h2 class="coodiv-text-4 mb-6"><?php echo esc_html($settings['mainhead1']); ?></h2>
                                <p class="coodiv-text-8 px-lg-4"><?php echo esc_html($settings['subhead1']); ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-center justify-content-center">

                    <?php   
                    if ( $settings['listfe1'] ) {
                      
                        foreach (  $settings['listfe1'] as $item ) { ?>
                            <div class="media first-style-widget col-lg-3 col-md-6">
                            <div class="icon-circle-box circle-sm <?php echo esc_attr( $item['border_style1'] ); ?>">
                                <i class="feather <?php echo esc_attr($item['iconti']); ?> white-text coodiv-text-9"></i>
                            </div>
                            <div class="media-body white-bg shadow-1 rounded-20 px-8 py-6 position-relative">
                                <h3 class="coodiv-text-10">
                                <?php echo esc_html($item['mainti1']); ?>
                                </h3>
                                <p class="coodiv-text-11 mb-0"><?php echo esc_html($item['subti2']); ?></p>
                            </div>
                        </div>
                   <?php     }
                  
                    }
                    ?>


                   
              
                    </div>
                </div>
            </div>


    <?php
  }


}
