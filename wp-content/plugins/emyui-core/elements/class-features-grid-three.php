<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Gridtthree extends Widget_Base{

  public function get_name(){
    return 'gridthree';
  }

  public function get_title(){
    return esc_html__( 'Third Grid Section', 'emyui-core' ); 
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
      'compo',
      [
        'label' => esc_html__( 'Components', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
   

    $this->add_control(
			'imgridth',
			[
				'label' => esc_html__( 'Main Image', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			
			]
		);


    $repeater = new \Elementor\Repeater();

 
    $repeater->add_control(
        'bt1', [
            'label' => esc_html__( 'Sub Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Domain name' , 'emyui-core' ),
        ]
    );
    $repeater->add_control(
      'bt2', [
          'label' => esc_html__( 'First Coloumn', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::TEXT,
          'default' => esc_html__( 'WordPress hosting terbaik dengan berbagai paket layanan untuk user pemula dan berpengalaman. Intuitif dan mudah digunakan.' , 'emyui-core' ),
      ]
  );
  $repeater->add_control(
    'show_flag',
    [
      'label' => esc_html__( 'Show Flag', 'emyui-core' ),
      'type' => \Elementor\Controls_Manager::SWITCHER,
      'label_on' => esc_html__( 'Show', 'your-plugin' ),
      'label_off' => esc_html__( 'Hide', 'your-plugin' ),
      'return_value' => 'yes',
      'default' => 'no',
    ]
  );
  $repeater->add_control(
    'flagtext', [
        'label' => esc_html__( 'Flag Text', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'condition' => [ 'show_flag' => 'yes' ],
        'default' => esc_html__( 'Free with all plans' , 'emyui-core' ),
    ]
);
   
    $this->add_control(
        'txtx',
        [
            'label' => esc_html__( 'Text Rows', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::REPEATER,
            'fields' => $repeater->get_controls(),
            'default' => [
                [
                    'bt1' => esc_html__( 'Domain name', 'emyui-core' ),
                    'bt2' => esc_html__( 'WordPress hosting terbaik dengan berbagai paket layanan untuk user pemula dan berpengalaman. Intuitif dan mudah digunakan.', 'emyui-core' ),
                
                ],
               
            ],
        ]
    );

          $this->end_controls_section();
        }


  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>


<div class="content-section bg-default-1 pt-13 pt-lg-5 pb-0">
                <div class="container">

		                 <div class="row align-items-center justify-content-center">
                        <div class="col-10 col-lg-6 col-xl-6 pr-xl-20 mt-lg-0 mt-15 pb-22">
                            <div class="content-widget">
                                <div class="row mb-n9">
                                <?php 
                                    foreach (  $settings['txtx'] as $item ) { ?>
                                    <div class="card-holder mb-7">
                                        <div class="text-h-meteorite-dark text-center text-lg-left">
                                            <h5 class="mb-5 coodiv-text-7"><?php echo esc_html($item['bt1']); ?> <span class="badge badge-pill badge-warning coodiv-text-10 py-1 px-6 ml-2"><?php echo esc_html($item['flagtext']); ?></span></h5>
                                            <p class="coodiv-text-10"><?php echo esc_html($item['bt2']); ?></p>
                                        </div>
                                    </div>
                                   <?php } ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6" data-aos="zoom-in" data-aos-duration="2000" data-aos-once="true">
                            <div class="content-img text-right">
                                <img src="<?php echo esc_url($settings['imgridth']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $settings['imgridth'] )); ?>" class="w-100" />
                            </div>
                        </div>
                    </div>

                </div>
            </div>



    <?php
  }


}
