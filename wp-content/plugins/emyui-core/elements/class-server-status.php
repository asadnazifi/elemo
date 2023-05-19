<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Serverstatus extends Widget_Base{

  public function get_name(){
    return 'sstatus';
  }

  public function get_title(){
    return esc_html__( 'Service Status', 'emyui-core' );
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
		'mainhead31',
		[
			'label' => esc_html__( 'Main Heading', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( 'We are running, in full power', 'emyui-core' ),
		]
	);
    $this->add_control(
        'subhead32',
        [
            'label' => esc_html__( 'Sub Heading', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Updated a few seconds ago', 'emyui-core' ),
        ]
    );
    $this->add_control(
      'subhead323',
      [
          'label' => esc_html__( 'Second Title', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::TEXT,
          'default' => esc_html__( 'Academic technologies', 'emyui-core' ),
      ]
  );
  $this->add_control(
    'subhead324',
    [
        'label' => esc_html__( 'Description', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Platea dictumst quisque sagittis purus. Tincidunt praesent semper feugiat nibh sed pulvinar. Tellus id interdum velit laoreet id donec ultrices tincidunt. Neque aliquam vestibulum morbi blandit cursus. Mi sit amet mauris commodo quis imperdiet.', 'emyui-core' ),
    ]
);



          $this->end_controls_section();

          $this->start_controls_section(
            'acsd',
            [
              'label' => esc_html__( 'Status List', 'emyui-core' ),
                      'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
          );
          
      
          $repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'mt12', [
				'label' => esc_html__( 'Status Title', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Canvas' , 'emyui-core' ),
			]
		);
        $repeater->add_control(
			'mt13', [
				'label' => esc_html__( 'Status Situation', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'opirationel' , 'emyui-core' ),
			]
		);
    $repeater->add_control(
			'sitbg',
			[
				'label' => esc_html__( 'Status Style', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'badge-success',
				'options' => [
					'1'  => esc_html__( 'badge-success', 'emyui-core' ),
					'2' => esc_html__( 'badge-danger', 'emyui-core' ),
					'3' => esc_html__( 'badge-warning', 'emyui-core' ),
				],
			]
		);
    $repeater->add_control(
			'numtag',
			[
				'label' => esc_html__( 'Number of Tags', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 3,
				'step' => 1,
				'default' => 2,
			]
		);
    $repeater->add_control(
			'mt14', [
				'label' => esc_html__( 'First Status Tag', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'conditions' => [
          'relation' => 'and',
          'terms' => [
              [
                  'name' => 'numtag',
                  'operator' => '>=',
                  'value' => '1'
              ],
          ]
            ],
				'default' => esc_html__( 'Canada' , 'emyui-core' ),
			]
		);
    $repeater->add_control(
			'mt14l', [
				'label' => esc_html__( 'First Status Tag Link', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'conditions' => [
          'relation' => 'and',
          'terms' => [
              [
                  'name' => 'numtag',
                  'operator' => '>=',
                  'value' => '1'
              ],
          ]
            ],
				'default' => esc_html__( '#' , 'emyui-core' ),
			]
		);
    $repeater->add_control(
			'mt15', [
				'label' => esc_html__( 'Second Status Tag', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'conditions' => [
          'relation' => 'and',
          'terms' => [
              [
                  'name' => 'numtag',
                  'operator' => '>=',
                  'value' => '2'
              ],
          ]
            ],
				'default' => esc_html__( 'Algeria' , 'emyui-core' ),
			]
		);
    $repeater->add_control(
			'mt15l', [
				'label' => esc_html__( 'Second Status Tag Link', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'conditions' => [
          'relation' => 'and',
          'terms' => [
              [
                  'name' => 'numtag',
                  'operator' => '>=',
                  'value' => '2'
              ],
          ]
            ],
				'default' => esc_html__( '#' , 'emyui-core' ),
			]
		);
    $repeater->add_control(
			'mt16', [
				'label' => esc_html__( 'Third Status Tag', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'conditions' => [
          'relation' => 'and',
          'terms' => [
              [
                  'name' => 'numtag',
                  'operator' => '>=',
                  'value' => '3'
              ],
          ]
            ],
				'default' => esc_html__( 'America' , 'emyui-core' ),
			]
		);
    $repeater->add_control(
			'mt16l', [
				'label' => esc_html__( 'Third Status Tag Link', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
        'conditions' => [
          'relation' => 'and',
          'terms' => [
              [
                  'name' => 'numtag',
                  'operator' => '>=',
                  'value' => '3'
              ],
          ]
            ],
				'default' => esc_html__( '#' , 'emyui-core' ),
			]
		);
        $this->add_control(
			'statp',
			[
				'label' => esc_html__( 'List Of Status', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
			
			]
		);

      
      
                $this->end_controls_section();
        }


  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>


          <!-- Hero Area -->
          <div class="hero-area-coodiv mini-hero-text position-relative gradient-green-bg dark-mode-texts">
                <div class="header-hero-backgrounds">
                    <svg class="bg-wave-box-end-z1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                        <path
                            fill="#fff"
                            fill-opacity="1"
                            d="M0,0L34.3,16C68.6,32,137,64,206,80C274.3,96,343,96,411,96C480,96,549,96,617,117.3C685.7,139,754,181,823,186.7C891.4,192,960,160,1029,170.7C1097.1,181,1166,235,1234,234.7C1302.9,235,1371,181,1406,154.7L1440,128L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
                        ></path>
                    </svg>

                    <div id="particles-bg"></div>
                    <span class="header-erath"></span>

                    <div class="t-first"><img class="layer layer2" data-depth="-0.20" src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/header/planet.png" alt="" /></div>
                    <div class="t-second"><img class="layer layer2" data-depth="-0.20" src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/header/sat.png" alt="" /></div>
					
					<div class="shape-1 coodiv-abs-tr" data-aos="fade-down-left" data-aos-duration="500" data-aos-once="true"><img src="image/header/helf-circle-01.png" alt="" /></div>
                    <div class="shape-2 coodiv-abs-tr" data-aos="fade-down-left" data-aos-duration="800" data-aos-delay="300" data-aos-once="true"><img src="image/header/helf-circle-02.png" alt="" /></div>
                    <div class="shape-3 coodiv-abs-tr" data-aos="fade-down-left" data-aos-duration="1100" data-aos-delay="600" data-aos-once="true"><img src="image/header/helf-circle-03.png" alt="" /></div>

                </div>


                <div class="container">
                    <div class="row justify-content-center align-items-center pb-lg-30 position-relative coodiv-z-index-2">
                        <div class="col-11 col-md-9 col-lg-9 order-lg-1" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
                            <div class="hero-content mt-11 mt-lg-0">
                                <h1 class="title coodiv-text-5 mb-3 text-center"><?php echo esc_html($settings['mainhead31']); ?></h1>
                                <div class="text-center pb-15"><span class="badge badge-pill coodiv-text-9 min-coodiv-text-9-mobile px-10 badge-success white-text font-weight-light"><?php echo esc_html($settings['subhead32']); ?></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="job-site-page feature-section pb-15 pb-lg-20 border-bottom position-relative coodiv-z-index-2 mt-lg-n25">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="section-title text-left mb-11 mb-lg-10 px-10">
                            <h2 class="coodiv-text-7 mb-0"><?php echo esc_html($settings['subhead323']); ?></h2>
                            <p class="coodiv-text-9">
                            <?php echo esc_html($settings['subhead324']); ?>
                            </p>
                        </div>
                    </div>
                    <div class="opiration-list border rounded-20">

                    <?php
                    if ( $settings['statp'] ) {
                      $i = 0;
                      $len = count( $settings['statp']);
                      foreach (  $settings['statp'] as $item ) { ?>
                        <div class="opiration-box d-flex justify-content-between px-7 py-6 align-items-center <?php if ($i == $len - 1) { ?> <?php } else{ ?>border-bottom<?php } ?>">
                        <div class="col">
                            <span class="title coodiv-text-9 font-weight-bold color-blackish-blue"><?php echo esc_html($item['mt12']); ?></span>
                            <ul class="status-location-list list-inline">
                             <?php if($item['mt14']){ ?><li class="list-inline-item"><a href="<?php echo esc_url($item['mt14l']); ?>"><?php echo esc_html($item['mt14']); ?></a></li><?php } ?>   
                             <?php if($item['mt15']){ ?><li class="list-inline-item"><a href="<?php echo esc_url($item['mt15l']); ?>"><?php echo esc_html($item['mt15']); ?></a></li><?php } ?>   
                             <?php if($item['mt16']){ ?><li class="list-inline-item"><a href="<?php echo esc_url($item['mt16l']); ?>"><?php echo esc_html($item['mt16']); ?></a></li><?php } ?>   
                       
                            </ul>
                        </div>
                        <a href="#" class="badge badge-pill coodiv-text-12 py-3 px-10 <?php if( $item['sitbg'] == 1 ){ ?>badge-success<?php } elseif($item['sitbg'] == 2 ){ ?>badge-danger<?php }elseif($item['sitbg'] == 3){ ?>badge-warning<?php } ?> white-text font-weight-light coodiv-hover-x"><?php echo $item['mt13']; ?></a>
                    </div>
                    <?php $i++;  }
                   
                    }
                    ?>
              

                       
                    </div>

                   
                </div>
            </div>



    <?php
  }


}
