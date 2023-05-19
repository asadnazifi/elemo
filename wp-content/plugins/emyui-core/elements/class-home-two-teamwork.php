<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Teamwork extends Widget_Base{

  public function get_name(){
    return 'teamwork';
  }

  public function get_title(){
    return esc_html__( 'Pricing Style One', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
      'headings',
      [
        'label' => esc_html__( 'Headings', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
    $this->add_control(
        'show_title111',
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
        'ti111',
        [
            'label' => esc_html__( 'Main Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'condition' => [ 'show_title111' => 'yes' ],
            'default' => esc_html__( 'Manage your remote team work', 'emyui-core' ),
           
        ]
    );
    $this->add_control(
        'sub112',
        [
            'label' => esc_html__( 'Sub Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'condition' => [ 'show_title111' => 'yes' ],
            'default' => esc_html__( 'With lots of unique blocks, you can easily build a page without coding. Build your next consultancy website within few minutes.', 'emyui-core' ),
           
        ]
    );


          $this->end_controls_section();
          $this->start_controls_section(
            'tablepr',
            [
              'label' => esc_html__( 'Table Headings', 'emyui-core' ),
                      'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
          );
      
          $this->add_control(
              'th1',
              [
                  'label' => esc_html__( 'First Coloumn Heading', 'emyui-core' ),
                  'type' => \Elementor\Controls_Manager::TEXT,
              
                  'default' => esc_html__( 'CPU', 'emyui-core' ),
                 
              ]
          );
          $this->add_control(
              'th2',
              [
                  'label' => esc_html__( 'Second Coloumn Heading', 'emyui-core' ),
                  'type' => \Elementor\Controls_Manager::TEXT,
                
                  'default' => esc_html__( 'Ram', 'emyui-core' ),
                 
              ]
          );
          $this->add_control(
            'th3',
            [
                'label' => esc_html__( 'Third Coloumn Heading', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
              
                'default' => esc_html__( 'Storage', 'emyui-core' ),
               
            ]
        );
        $this->add_control(
            'th4',
            [
                'label' => esc_html__( 'Fourth Coloumn Heading', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
              
                'default' => esc_html__( 'Price', 'emyui-core' ),
               
            ]
        );
      
                $this->end_controls_section();
                $this->start_controls_section(
                    'tblrows',
                    [
                      'label' => esc_html__( 'Plans', 'emyui-core' ),
                              'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                    ]
                  );
                  $repeater = new \Elementor\Repeater();

                  $repeater->add_control(
                      'tb1', [
                          'label' => esc_html__( 'First Coloumn', 'emyui-core' ),
                          'type' => \Elementor\Controls_Manager::TEXT,
                          'default' => esc_html__( '10 vCPU Cores 2.5GHz' , 'emyui-core' ),
                      ]
                  );
                  $repeater->add_control(
                      'tb2', [
                          'label' => esc_html__( 'First Coloumn', 'emyui-core' ),
                          'type' => \Elementor\Controls_Manager::TEXT,
                          'default' => esc_html__( '12GB' , 'emyui-core' ),
                      ]
                  );
                  $repeater->add_control(
                    'tb3', [
                        'label' => esc_html__( 'First Coloumn', 'emyui-core' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__( '1.6 TB SSD * 4' , 'emyui-core' ),
                    ]
                );
                $repeater->add_control(
                    'tb4', [
                        'label' => esc_html__( 'First Coloumn', 'emyui-core' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__( '$140/mo' , 'emyui-core' ),
                    ]
                );
                $repeater->add_control(
                    'tb5', [
                        'label' => esc_html__( 'First Coloumn', 'emyui-core' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__( 'START' , 'emyui-core' ),
                    ]
                );
                $repeater->add_control(
                    'tb6', [
                        'label' => esc_html__( 'First Coloumn', 'emyui-core' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__( '#' , 'emyui-core' ),
                    ]
                );
                  $this->add_control(
                      'planspr',
                      [
                          'label' => esc_html__( 'FAQ', 'emyui-core' ),
                          'type' => \Elementor\Controls_Manager::REPEATER,
                          'fields' => $repeater->get_controls(),
                          'default' => [
                              [
                                  'tb1' => esc_html__( '10 vCPU Cores 2.5GHz', 'emyui-core' ),
                                  'tb2' => esc_html__( '12GB', 'emyui-core' ),
                                  'tb3' => esc_html__( '1.6 TB SSD * 4', 'emyui-core' ),
                                  'tb4' => esc_html__( '$140/mo', 'emyui-core' ),
                                  'tb5' => esc_html__( 'START', 'emyui-core' ),
                                  'tb6' => esc_html__( '#', 'emyui-core' ),
                              ],
                             
                          ],
                      ]
                  );
              
              
              
                        $this->end_controls_section();
        }


  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>

<div class="ddos-attack-plan bg-default-2 pb-25">
                <div class="container">
                    <?php
                    if ( 'yes' === $settings['show_title111'] ) { ?>
                        <div class="row justify-content-center">
                        <div class="col-md-9 col-lg-9">
                            <div class="hero-content dark-mode-texts mb-15 mb-lg-5 text-center pt-0 position-relative coodiv-z-index-1">
                                <h1 class="coodiv-text-3 mb-8 color-blackish-blue"><?php echo esc_html($settings['ti111']); ?></h1>
                                <p class="coodiv-text-9 px-7 pl-md-0 pr-md-11 mb-0 color-blackish-blue-opacity">
                                <?php echo esc_html($settings['sub112']); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php }
                    ?>
                    

                    <div class="row justify-content-center">
                        <div class="col-lg-11 col-md-12">
                            <div class="vps-plan-container white-bg mb-15 mb-lg-5 text-center position-relative shadow-2 mt-9 rounded-20 coodiv-z-index-1 overflow-hidden">
                                <div class="vps-plan-block">
                                    <div class="vps-plan-area px-10 py-7 border-bottom-separate text-left pb-5 d-none d-lg-flex align-items-center">
                                        <div class="cpu-block">
                                            <h3 class="coodiv-text-12 font-weight-bold text-uppercase mb-0"><?php echo esc_html($settings['th1']); ?></h3>
                                        </div>
                                        <div class="ram-block">
                                            <h3 class="coodiv-text-12 font-weight-bold text-uppercase mb-0"><?php echo esc_html($settings['th2']); ?></h3>
                                        </div>
                                        <div class="storage-block">
                                            <h3 class="coodiv-text-12 font-weight-bold text-uppercase mb-0"><?php echo esc_html($settings['th3']); ?></h3>
                                        </div>
                                        <div class="price-block">
                                            <h3 class="coodiv-text-12 font-weight-bold text-uppercase mb-0"><?php echo esc_html($settings['th4']); ?></h3>
                                        </div>
                                    </div>
                                    <?php 
                                    foreach (  $settings['planspr'] as $item ) { ?>
                                         <div class="vps-plan-area vps-plan-item bg-white px-10 py-8 overflow-hidden position-relative border-bottom-separate">
                                        <div class="cpu-block mb-lg-7 mb-2 pr-md-15 pr-lg-12 pr-xl-15">
                                            <div class="d-flex align-items-center text-left pr-4 pr-xs-0">
                                                <h3 class="coodiv-text-11 font-weight-light text-blackish-blue mb-0"><?php echo esc_html($item['tb1']); ?></h3>
                                            </div>
                                        </div>

                                        <div class="ram-block d-none d-lg-flex align-items-center">
                                            <h3 class="coodiv-text-10 font-weight-bold text-uppercase mb-0 text-blackish-blue"><?php echo esc_html($item['tb2']); ?></h3>
                                        </div>

                                        <div class="storage-block d-flex align-items-center ml-xs-23 ml-md-0">
                                            <h3 class="coodiv-text-10 font-weight-bold text-uppercase mb-0 text-blackish-blue"><?php echo esc_html($item['tb3']); ?></h3>
                                        </div>

                                        <div class="price-block d-flex align-items-center pl-7 pl-xs-0">
                                            <div class="d-flex align-items-center justify-content-between text-left w-100">
                                                <h3 class="coodiv-text-10 font-weight-bold mb-0 text-blackish-blue"><?php echo esc_html($item['tb4']); ?></h3>
                                                <a href="<?php echo $item['tb6']; ?>" class="order-btn-procosint"><?php echo esc_html($item['tb5']); ?></a>
                                            </div>
                                        </div>
                                    </div>
		                        	<?php } ?>

                                   


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


    <?php
  }


}
