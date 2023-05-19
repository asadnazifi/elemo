<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Heroeight extends Widget_Base{

  public function get_name(){
    return 'heroeight';
  }

  public function get_title(){
    return esc_html__( 'heroeight', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
      'tab0heroeight',
      [
        'label' => esc_html__( 'Headings', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
    $this->add_control(
        'titleheroeight',
        [
            'label' => esc_html__( 'Main Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '70 Tbps+ Global Network.', 'emyui-core' ),
           
        ]
    );
    $this->add_control(
        'descheroeight',
        [
            'label' => esc_html__( 'Sub Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'default' => esc_html__( 'Supercharge your content with one of the fastest networks in the world. With 74 PoPs and our SmartEdge routing engine were always just a hop away.', 'emyui-core' ),
           
        ]
    );
    $this->end_controls_section();

    $this->start_controls_section(
        'tab1heroeight',
        [
          'label' => esc_html__( 'Servers', 'emyui-core' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
      $repeater = new \Elementor\Repeater();

      $repeater->add_control(
          'servernameheroeight', [
              'label' => esc_html__( 'Server Country', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Germany' , 'emyui-core' ),
          ]
      );

    
    $repeater->add_control(
        'situationheroeight',
        [
            'label' => esc_html__( 'Server situation', 'plugin-name' ),
            'type' => \Elementor\Controls_Manager::SELECT,
            'default' => 'solid',
            'options' => [
                'normal'  => esc_html__( 'Normal', 'plugin-name' ),
                'warning' => esc_html__( 'Warning', 'plugin-name' ),
                'danger' => esc_html__( 'Danger', 'plugin-name' ),
            ],
        ]
    );

    $repeater->add_control(
        'datalocrheroeight',
        [
            'label' => esc_html__( 'Left', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::NUMBER,
            'min' => 0,
            'max' => 100,
            'step' => 1,
            'default' => 50,
        ]
    );
    $repeater->add_control(
        'dataloctheroeight',
        [
            'label' => esc_html__( 'Top', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::NUMBER,
            'min' => 0,
            'max' => 100,
            'step' => 1,
            'default' => 50,
        ]
    );

      $this->add_control(
          'datamapheroeight',
          [
              'label' => esc_html__( 'Locations', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::REPEATER,
              'fields' => $repeater->get_controls(),
              'default' => [
                  [
                      'servernameheroeight' => esc_html__( 'Germany', 'emyui-core' ),
                      'datalocrheroeight' => esc_html__( '50', 'emyui-core' ),
                      'dataloctheroeight' => esc_html__( '50', 'emyui-core' ),
                      'situationheroeight' => esc_html__( 'Normal', 'emyui-core' ),

                  ],
                 
              ],
          ]
      );


          $this->end_controls_section();
          $this->start_controls_section(
            'tab2heroeight',
            [
              'label' => esc_html__( 'Features', 'emyui-core' ),
                      'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
          );
          $this->add_control(
            'ltitleheroeight',
            [
                'label' => esc_html__( 'Left Box Title', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '1.4M+', 'emyui-core' ),
               
            ]
        );
        $this->add_control(
            'lsubtitleheroeight',
            [
                'label' => esc_html__( 'Left Box Subitle', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Requests Per Second', 'emyui-core' ),
               
            ]
        );
        $this->add_control(
            'ctitleheroeight',
            [
                'label' => esc_html__( 'Center Box Title', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '105+', 'emyui-core' ),
               
            ]
        );
        $this->add_control(
            'csubtitleheroeight',
            [
                'label' => esc_html__( 'Center Box Subitle', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Data Centers around the world', 'emyui-core' ),
               
            ]
        );
        $this->add_control(
            'rtitleheroeight',
            [
                'label' => esc_html__( 'Right Box Title', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '40', 'emyui-core' ),
               
            ]
        );
        $this->add_control(
            'rsubtitleheroeight',
            [
                'label' => esc_html__( 'Right Box Subitle', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Gbit AUplink Per Server countet', 'emyui-core' ),
               
            ]
        );
          $this->end_controls_section();

        }


  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>

<div class="hero-area-coodiv vpn-version position-relative overflow-hidden pb-0 shadow">
                <!-- START hero area animations -->
                <div class="header-hero-backgrounds">
					<div class="vpn-space-bg"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/image/header/vpn-version/bg.jpg" alt="" /></div>
					<div id="particles-bg"></div>
					<div class="animated__header__items__inner" id="js-scene">
					    <div class="items__layer layer vpn-space-rocks-img" data-depth="0.2"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/image/header/vpn-version/space-men-rocks.svg" alt="" /></div>
					    <div class="items__layer layer t-first" data-depth="0.1"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/image/header/sunset-version/moon.png" alt="" /></div>
					</div>
					<span class="vpn-version-ovellay-background"></span>
				</div>
				
                <div class="shape-1 coodiv-abs-tr" data-aos="fade-up" data-aos-duration="500" data-aos-once="true"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/image/header/helf-circle-01.png" alt="" /></div>
                <div class="shape-2 coodiv-abs-tr" data-aos="fade-down-left" data-aos-duration="800" data-aos-delay="300" data-aos-once="true"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/image/header/helf-circle-02.png" alt="" /></div>
                <div class="shape-3 coodiv-abs-tr" data-aos="fade-down-left" data-aos-duration="1100" data-aos-delay="600" data-aos-once="true"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/image/header/helf-circle-03.png" alt="" /></div>
                <!-- END hero area animations -->

                <div class="container position-relative coodiv-z-index-2">
				
                    <!-- END HERO MAIN CONTENTS -->
                    <div class="row justify-content-center">
                        <!-- row -->
                        <div class="col-md-9 col-lg-7 col-xl-7">
                            <!-- column -->
                            <!-- START MAIN CONTENTS -->
                            <div class="hero-content dark-mode-texts text-center py-15 mb-lg-4">
                                <h1 class="coodiv-text-3 text-white d-block mb-10"><?php echo  esc_html($settings['titleheroeight']); ?></h1>
                                <p class="coodiv-text-8 mb-0 coodiv-color-white-opacity-8 mb-10"><?php echo  esc_html($settings['descheroeight']); ?></p>
							</div>
                            <!-- END MAIN CONTENTS -->
                        </div>
                        <!-- END column -->
                    </div>
                    <!-- END row -->
					
					
					
					<div class="row justify-content-center">
                    <div class="col-12">
                        <div class="network-worldwide-map">
                            <div class="network-map world-map position-relative">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/image/header/vpn-version/word-map.svg" alt="CDN World Map">
                                <ul>
                                <?php	if ( $settings['datamapheroeight'] ) {
                                        foreach (  $settings['datamapheroeight'] as $item ) {?>
								<li <?php 
                                             if( $item['situationheroeight']==='warning'){
                                                    echo esc_attr('class=warning');
                                                }elseif($item['situationheroeight']==='danger'){
                                                echo esc_attr('class=danger');
                                                }elseif($item['situationheroeight']==='normal'){}else{} ?>
                                                 style="left:<?php echo  esc_attr($item['datalocrheroeight']); ?>%;top:<?php echo  esc_attr($item['dataloctheroeight']); ?>%;"><span class="network-label"><?php echo  esc_html($item['servernameheroeight']); ?></span></li>
                                     <?php } 
                                                } ?>
																
                                </ul>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- END hero MAIN CONTENTS -->
				
				
				
				<div class="counter-server-header-section py-9 coodiv-bg-blackish-blue-opacity-opacity-4 position-relative">
				      <div class="container">
				        <div class="row dark-mode-texts justify-content-center mb-n9">
                          <div class="col-lg-4 col-md-6 col-sm-6 mb-9">
                            <div class="single-fact d-flex px-9 px-sm-0 px-xl-9">
                              <h3 class="coodiv-text-3 mr-9"><?php echo  esc_html($settings['ltitleheroeight']); ?></h3>
                              <p class="coodiv-text-9 mb-0"><?php echo  esc_html($settings['lsubtitleheroeight']); ?></p>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-6 col-sm-6 mb-9">
                            <div class="single-fact d-flex px-9 px-sm-0 px-xl-9">
                              <h3 class="coodiv-text-3 mr-9"><span class="counter"><?php echo  esc_html($settings['ctitleheroeight']); ?></h3>
                              <p class="coodiv-text-9 mb-0"><?php echo  esc_html($settings['csubtitleheroeight']); ?></p>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-6 col-sm-6 mb-9">
                            <div class="single-fact d-flex px-9 px-sm-0 px-xl-9">
                              <h3 class="coodiv-text-3 mr-9"><span class="counter"><?php echo  esc_html($settings['rtitleheroeight']); ?></span></h3>
                              <p class="coodiv-text-9 mb-0"><?php echo  esc_html($settings['rsubtitleheroeight']); ?></p>
                            </div>
                          </div>
                        </div>
					  </div>
				</div>
				
	
			
	
	
            </div>


    <?php
  }


}
