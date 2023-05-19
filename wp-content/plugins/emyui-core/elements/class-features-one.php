<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Feaone extends Widget_Base{

  public function get_name(){
    return 'feaone';
  }

  public function get_title(){
    return esc_html__( 'Feature First Style', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
      'conts',
      [
        'label' => esc_html__( 'Headings', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
    $this->add_control(
        'show_icons1',
        [
            'label' => esc_html__( 'Show Icons', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::SWITCHER,
            'label_on' => esc_html__( 'Show', 'your-plugin' ),
            'label_off' => esc_html__( 'Hide', 'your-plugin' ),
            'return_value' => 'yes',
            'default' => 'yes',
        ]
    );
    $this->add_control(
        'bgstyle1',
        [
            'label' => esc_html__( 'Background Style', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::SELECT,
            'default' => 'bg-white',
            'options' => [
                'bg-mirage'  => esc_html__( 'bg-mirage', 'emyui-core' ),
                'bg-white' => esc_html__( 'bg-white', 'emyui-core' ),

            ],
        ]
    );
    $this->add_control(
        'title11',
        [
            'label' => esc_html__( 'Main Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Every step to online success!', 'emyui-core' ),
           
        ]
    );
    $this->add_control(
        'subtitle11',
        [
            'label' => esc_html__( 'Sub Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Bring your website to life, and help it thrive.', 'emyui-core' ),
           
        ]
    );
 




          $this->end_controls_section();

          $this->start_controls_section(
            'boxes',
            [
              'label' => esc_html__( 'Boxes', 'emyui-core' ),
                      'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
          );

          $repeater = new \Elementor\Repeater();


          $repeater->add_control(
        'boxstyle1',
        [
            'label' => esc_html__( 'Box Style', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::SELECT,
            'default' => 'bg-white',
            'options' => [
                'First-Style'  => esc_html__( 'First Style', 'emyui-core' ),
                'Second-Style' => esc_html__( 'Second Style', 'emyui-core' ),
                'Third-Style' => esc_html__( 'Third Style', 'emyui-core' ),

            ],
        ]
    );
          $repeater->add_control(
              'list_title11', [
                  'label' => esc_html__( 'Title', 'emyui-core' ),
                  'type' => \Elementor\Controls_Manager::TEXT,
                  'default' => esc_html__( 'List Title' , 'emyui-core' ),
                  'label_block' => true,
              ]
          );
   
  
          $repeater->add_control(
              'list_content11', [
                  'label' => esc_html__( 'Content', 'emyui-core' ),
                  'type' => \Elementor\Controls_Manager::WYSIWYG,
                  'default' => esc_html__( 'List Content' , 'emyui-core' ),
                  'show_label' => false,
              ]
          );

          $repeater->add_control(
            'first-ti', [
                'label' => esc_html__( 'Main Text', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'or',
                    'terms' => [
                        [
                            'name' => 'boxstyle1',
                            'operator' => '==',
                            'value' => 'First-Style'
                        ],
                        [
                            'name' => 'boxstyle1',
                            'operator' => '==',
                            'value' => 'Second-Style'
                        ],
                        [
                            'name' => 'boxstyle1',
                            'operator' => '==',
                            'value' => 'Third-Style'
                        ]
                    ]
                        ],
                'default' => esc_html__( 'List Title' , 'emyui-core' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'sub-ti', [
                'label' => esc_html__( 'Sub Text', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'or',
                    'terms' => [
                        [
                            'name' => 'boxstyle1',
                            'operator' => '==',
                            'value' => 'First-Style'
                        ],
                        [
                            'name' => 'boxstyle1',
                            'operator' => '==',
                            'value' => 'Second-Style'
                        ],
                        [
                            'name' => 'boxstyle1',
                            'operator' => '==',
                            'value' => 'Third-Style'
                        ]
                    ]
                        ],
                'default' => esc_html__( 'List Title' , 'emyui-core' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'sub-ti2', [
                'label' => esc_html__( 'Lock Text', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyle1' => 'Second-Style' ],
                'default' => esc_html__( 'lock activated' , 'emyui-core' ),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
			'image-subb',
			[
				'label' => esc_html__( 'Box Image', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
                'condition' => [ 'boxstyle1' => 'First-Style' ],
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
      
                
                $this->add_control(
                    'boxrep',
                    [
                        'label' => esc_html__( 'Boxes', 'emyui-core' ),
                        'type' => \Elementor\Controls_Manager::REPEATER,
                        'fields' => $repeater->get_controls(),
                        'default' => [
                            [
                                'list_title11' => esc_html__( 'Find the right hosting!', 'emyui-core' ),
                                'list_content11' => esc_html__( 'Whether you want speed, simplicity, space, or super-power, we’ve got you covered.', 'emyui-core' ),
                                'boxstyle1' =>  'First-Style' ,
                            ],
                         
                       
                        ],
                       
                    ]
                );
                $this->end_controls_section();  
        }


  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>

<div class="cta-section overflow-hidden py-13 py-lg-25 <?php echo esc_attr( $settings['bgstyle1'] ); ?> bg-pattern pattern-3">
                <div class="container">
                    <div class="row justify-content-center mb-15">
                        <div class="col-md-7 aos-init aos-animate" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                            <div class="section-title text-center pr-lg-7 mb-0 <?php if($settings['bgstyle1'] == "bg-mirage" ){ echo esc_html("dark-mode-texts"); } else{ echo esc_html("light-mode-texts"); } ?>">
                                <?php
                                    if ( 'yes' === $settings['show_icons1'] ) { ?>
			                         <div class="icons-pack-head d-flex justify-content-center mb-7 align-items-center">
                                    <i class="feather icon-battery-charging" data-aos="zoom-in" data-aos-duration="1500" data-aos-once="true"></i>
                                    <i class="feather icon-bell" data-aos="zoom-in" data-aos-duration="1300" data-aos-once="true"></i>
                                    <i class="feather icon-server" data-aos="zoom-in" data-aos-duration="900" data-aos-once="true"></i>
                                    <i class="feather icon-chrome" data-aos="zoom-in" data-aos-duration="1300" data-aos-once="true"></i>
                                    <i class="feather icon-layers" data-aos="zoom-in" data-aos-duration="1500" data-aos-once="true"></i>
                                </div>
	                            <?php	} ?>
                              
                                <h2 class="title coodiv-text-4 mb-6"><?php echo esc_html($settings['title11']); ?></h2>
                                <p class="coodiv-text-9 mb-0"><?php echo esc_html($settings['subtitle11']); ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        
                    <?php if ( $settings['boxrep'] ) {
		        	foreach (  $settings['boxrep'] as $item ) { ?>
                         
                      <?php if( $item['boxstyle1'] == "First-Style" ){ ?>
                        <div class="col-md-4 col-12">
                            <div class="our-domains-features-box mb-lg-0 mb-15" data-aos="fade-left" data-aos-duration="1500" data-aos-once="true">
                                <div class="our-domains-features-head d-flex align-items-center">
                                    <div class="our-domains-features-head-element d-flex position-relative">
                                        <i class="feather icon-radio check-elements"></i>
                                        <div class="our-domains-features-tumb">
                                            <img src="<?php echo esc_url($item['image-subb']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $item['image-subb'] )); ?>" />
                                        </div>
                                        <div class="our-domains-features-text">
                                            <span><?php echo esc_html($item['first-ti']); ?></span>
                                            <span><?php echo esc_html($item['sub-ti']); ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="our-domains-features-body <?php if($settings['bgstyle1'] == "bg-mirage" ){ echo esc_html("dark-mode-texts"); } else{ echo esc_html("light-mode-texts"); } ?> text-center">
                                    <h2 class="title coodiv-text-7 mb-3"><?php echo esc_html($item['list_title11']); ?></h2>
                                    <p class="coodiv-text-11 mb-0"><?php echo esc_html($item['list_content11']); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php  }  
                    elseif( $item['boxstyle1'] == "Second-Style" ){ ?>
                    <div class="col-md-4 col-12">
                            <div class="our-domains-features-box mb-lg-0 mb-15">
                                <div class="our-domains-features-head element-page d-flex align-items-end">
                                    <div class="our-domains-features-head-element-page position-relative white-bg rounded-top-20 w-100 pt-7 px-7">
                                        <span class="lock-badge"><i class="feather icon-lock"></i> <?php echo esc_html($item['sub-ti2']); ?></span>
                                        <h5 class="coodiv-text-11 mb-n1"><?php echo esc_html($item['first-ti']); ?></h5>
                                        <p class="coodiv-text-13"><?php echo esc_html($item['sub-ti']); ?></p>
                                        <div class="row justify-content-center our-domains-features-head-element-body">
                                            <div class="col-12"><span></span></div>
                                            <div class="col-6"><span></span></div>
                                            <div class="col-6"><span></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="our-domains-features-body <?php if($settings['bgstyle1'] == "bg-mirage" ){ echo esc_html("dark-mode-texts"); } else{ echo esc_html("light-mode-texts"); } ?> text-center">
                                    <h2 class="title coodiv-text-7 mb-3"><?php echo esc_html($item['list_title11']); ?></h2>
                                    <p class="coodiv-text-11 mb-0"><?php echo esc_html($item['list_content11']); ?></p>
                                </div>
                            </div>
                        </div>

                   <?php } 
                   elseif( $item['boxstyle1'] == "Third-Style" ){ ?>
               <div class="col-md-4 col-12">
                    <div class="our-domains-features-box" data-aos="fade-right" data-aos-duration="1500" data-aos-once="true">
                        <div class="our-domains-features-head element-page green-element d-flex align-items-end">
                            <div class="our-domains-features-head-element-page position-relative white-bg rounded-top-20 w-100 pt-7 px-7 text-center">
                                <span class="badge badge-pill badge-warning"><?php echo esc_html($item['first-ti']); ?></span>
                                <p class="coodiv-text-13"><?php echo esc_html($item['sub-ti']); ?></p>
                                <div class="row justify-content-center our-domains-features-head-element-body">
                                    <div class="col-12"><span></span></div>
                                    <div class="col-6"><span></span></div>
                                    <div class="col-6"><span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="our-domains-features-body <?php if($settings['bgstyle1'] == "bg-mirage" ){ echo esc_html("dark-mode-texts"); } else{ echo esc_html("light-mode-texts"); } ?> text-center">
                            <h2 class="title coodiv-text-7 mb-3"><?php echo esc_html($item['list_title11']); ?></h2>
                            <p class="coodiv-text-11 mb-0"><?php echo esc_html($item['list_content11']); ?></p>
                        </div>
                    </div>
                </div>
           <?php        }
                         

                       

                       

		           	}
		
		                }	?>
    

                    
                    </div>
                </div>
            </div>




    <?php
  }


}
