<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Mainpricing extends Widget_Base{

  public function get_name(){
    return 'mainpricing';
  }

  public function get_title(){
    return esc_html__( 'Main Pricing Table', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
      'headingsss1',
      [
        'label' => esc_html__( 'Headings', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
    $this->add_control(
			'show_hero',
			[
				'label' => esc_html__( 'Show Hero Section', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'your-plugin' ),
				'label_off' => esc_html__( 'Hide', 'your-plugin' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
        $this->add_control(
			'backgroundsty',
			[
				'label' => esc_html__( 'Background Style', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '1',
				'options' => [
					'1'  => esc_html__( 'SVG Default', 'emyui-core' ),
					'2' => esc_html__( 'Bg Image', 'emyui-core' ),

				],
			]
		);
        $this->add_control(
			'bgimpr',
			[
				'label' => esc_html__( 'Background Image', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
                'condition' => [ 'backgroundsty' => '2' ],
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->add_control(
            'amb0',
            [
                'label' => esc_html__( 'Upper Title', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'show_hero' => 'yes' ],
                'default' => esc_html__( 'WEBSITE BUILDER', 'emyui-core' ),
               
            ]
        );
        $this->add_control(
            'amb1',
            [
                'label' => esc_html__( 'Main Title', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'show_hero' => 'yes' ],
                'default' => esc_html__( 'Shared Cloud SSD Hosting Powered by cPanel.', 'emyui-core' ),
               
            ]
        );
        $this->add_control(
            'amb2',
            [
                'label' => esc_html__( 'Sub Title', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'show_hero' => 'yes' ],
                'default' => esc_html__( 'Our intuitive website builder is the fastest way to look amazing online. Watch this vid to see how it works.', 'emyui-core' ),
               
            ]
        );


          $this->end_controls_section();

          $this->start_controls_section(
            'tabss',
            [
              'label' => esc_html__( 'Tabs', 'emyui-core' ),
                      'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
          );
          $this->add_control(
            'amb3',
            [
                'label' => esc_html__( 'Frist Tab Title', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Shared Hosting', 'emyui-core' ),
               
            ]
        );
        $this->add_control(
            'amb4',
            [
                'label' => esc_html__( 'Frist Tab Sub Title', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'cPanel Shared Hosting', 'emyui-core' ),
               
            ]
        );
        $this->add_control(
            'amb5',
            [
                'label' => esc_html__( 'Second Tab Title', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Cloud VPS Hosting', 'emyui-core' ),
               
            ]
        );
        $this->add_control(
            'amb6',
            [
                'label' => esc_html__( 'Second Tab Sub Title', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Private SSD-Based Cloud Servers', 'emyui-core' ),
               
            ]
        );
        $this->add_control(
            'amb66',
            [
                'label' => esc_html__( 'Second Tab Link', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '#', 'emyui-core' ),
               
            ]
        );
        $this->add_control(
            'amb7',
            [
                'label' => esc_html__( 'Third Tab Title', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Dedicated CPU Servers', 'emyui-core' ),
               
            ]
        );
        $this->add_control(
            'amb8',
            [
                'label' => esc_html__( 'Third Tab Sub Title', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'High-Performance Solutions', 'emyui-core' ),
               
            ]
        );
        $this->add_control(
            'amb88',
            [
                'label' => esc_html__( 'Second Tab Link', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '#', 'emyui-core' ),
               
            ]
        );




          $this->end_controls_section();
          $this->start_controls_section(
            'planss',
            [
              'label' => esc_html__( 'Plans', 'emyui-core' ),
                      'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
          );
          $this->add_control(
            'amb9',
            [
                'label' => esc_html__( 'Popover Title', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Choose your plan', 'emyui-core' ),
               
            ]
        );
        $this->add_control(
            'amb10',
            [
                'label' => esc_html__( 'Popover Title Sub Title', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Or Chat with an expert', 'emyui-core' ),
               
            ]
        );
        $this->add_control(
            'amb100',
            [
                'label' => esc_html__( 'Popover Title Link', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '#', 'emyui-core' ),
               
            ]
        );

        $repeater = new \Elementor\Repeater();

      $repeater->add_control(
          'amb11', [
              'label' => esc_html__( 'Plan Name', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Hatchling Plan' , 'emyui-core' ),
          ]
      );
      $repeater->add_control(
        'amb12', [
            'label' => esc_html__( 'Plan Sub Name', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Introductory offer' , 'emyui-core' ),
        ]
    );
    $repeater->add_control(
        'amb13', [
            'label' => esc_html__( 'Plan Price', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '$2.75/mo*' , 'emyui-core' ),
        ]
    );
    $repeater->add_control(
        'amb14', [
            'label' => esc_html__( 'Plan Button Text', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Buy now' , 'emyui-core' ),
        ]
    );
    $repeater->add_control(
        'amb15', [
            'label' => esc_html__( 'Plan Button Link', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '#' , 'emyui-core' ),
        ]
    );
    $repeater->add_control(
        'amb16', [
            'label' => esc_html__( 'Plan Short Description', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'default' => esc_html__( 'Everything you need to start your online venture in a matter of minutes' , 'emyui-core' ),
        ]
    );
    $repeater->add_control(
        'amb166', [
            'label' => esc_html__( 'Important Features Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'All Important Features' , 'emyui-core' ),
        ]
    );
    $repeater->add_control(
        'amb17', [
            'label' => esc_html__( 'Fisrt Bold Feature', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'FREE Domain Name Included' , 'emyui-core' ),
        ]
    );
    $repeater->add_control(
        'amb18', [
            'label' => esc_html__( 'Second Bold Feature', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Redundant Daily Backups' , 'emyui-core' ),
        ]
    );
    $repeater->add_control(
        'amb19', [
            'label' => esc_html__( 'Third Bold Feature', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Free CDN & Website Builder' , 'emyui-core' ),
        ]
    );
    $this->add_control(
        'plans11',
        [
            'label' => esc_html__( 'Short Features', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::REPEATER,
            'fields' => $repeater->get_controls(),
            'default' => [
                [
                  
                ],
               
            ],
        ]
    );

    $this->add_control(
        'amb20', [
            'label' => esc_html__( 'Sub Table Heading', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Hosting Features' , 'emyui-core' ),
        ]
    );

    $repeater = new \Elementor\Repeater();

    $repeater->add_control(
        'amb21', [
            'label' => esc_html__( 'First Coloumn', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'FREE 1 year domain registration' , 'emyui-core' ),
        ]
    );
    $repeater->add_control(
        'amb22', [
            'label' => esc_html__( 'Second Coloumn', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'yearly' , 'emyui-core' ),
        ]
    );
    $repeater->add_control(
        'amb23', [
            'label' => esc_html__( 'Third Coloumn', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '<i class="fas fa-check"></i>' , 'emyui-core' ),
        ]
    );
    $repeater->add_control(
        'amb24', [
            'label' => esc_html__( 'Fourth Coloumn', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '<i class="fas fa-check"></i>' , 'emyui-core' ),
        ]
    );
    $this->add_control(
        'plans12',
        [
            'label' => esc_html__( 'Long Features', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::REPEATER,
            'fields' => $repeater->get_controls(),
            'default' => [
                [
                
                ],
               
            ],
        ]
    );


          $this->end_controls_section();





        }


  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>

    
<?php
global $wp;
$current_url = home_url( add_query_arg( array(), $wp->request ) );

if ( 'yes' === $settings['show_hero'] ) { ?>	
   <!-- Hero Area -->
   <?php if($settings['backgroundsty']== 1){ ?>
   <div class="hero-area-coodiv position-relative">
                <div class="header-hero-backgrounds">
                    <div id="particles-bg"></div>
                    <span class="montains-01"></span>
                </div>
    <?php }

     elseif($settings['backgroundsty']== 2){ ?>
                <div class="hero-area-coodiv mini-hero-text position-relative bg-image bg-overlay overlay-2" style="background-image: url(<?php echo esc_url($settings['bgimpr']['url']); ?>)">
                    <div class="header-hero-backgrounds"><div id="particles-bg"></div></div>

                    <?php } ?>
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-11 col-md-9 col-lg-7 col-xl-6 order-lg-1" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
                            <div class="hero-content mt-11 mt-lg-0">
                                <h4 class="pre-title text-green coodiv-text-12 text-uppercase mb-7 text-center"><?php echo esc_html($settings['amb0']); ?></h4>
                                <h1 class="title coodiv-text-4 mb-5 text-white text-center"><?php echo esc_html($settings['amb1']); ?></h1>
                                <p class="coodiv-text-9 mb-11 pr-md-12 coodiv-color-white-opacity-7 text-center"><?php echo esc_html($settings['amb2']); ?></p>
                            </div>
                        </div>
                    </div>

                    <ul class="row justify-content-center hero-tabs-hostings position-relative coodiv-z-index-1 pb-20" data-role="content-nav">
                        <li class="col-lg-3 col-md-4 active tabs-hostings white-bg shadow-2 rounded-left-10 list-style-none py-6 px-lg-8 border-right-separate text-center">
                            <a class="coodiv-text-9 fw-bold color-blackish-blue" href="<?php echo esc_url($current_url); ?>">
                            <?php echo esc_html($settings['amb3']); ?>
                                <span class="coodiv-text-11 mb-0 fw-100 d-block color-blackish-blue-opacity"><?php echo esc_html($settings['amb4']); ?></span>
                            </a>
                        </li>
                        <li class="col-lg-3 col-md-4 tabs-hostings white-bg shadow-2 py-6 px-lg-8 border-right-separate text-center">
                            <a class="coodiv-text-9 fw-bold color-blackish-blue" href="<?php echo esc_url($settings['amb66']); ?>">
                            <?php echo esc_html($settings['amb5']); ?>
                                <span class="coodiv-text-11 mb-0 fw-100 d-block color-blackish-blue-opacity"><?php echo esc_html($settings['amb6']); ?></span>
                            </a>
                        </li>
                        <li class="col-lg-3 col-md-4 tabs-hostings white-bg shadow-2 rounded-right-10 py-6 px-lg-8 text-center">
                            <a class="coodiv-text-9 fw-bold color-blackish-blue" href="<?php echo esc_url($settings['amb88']); ?>">
                            <?php echo esc_html($settings['amb7']); ?>
                                <span class="coodiv-text-11 mb-0 fw-100 d-block color-blackish-blue-opacity"><?php echo esc_html($settings['amb8']); ?></span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="wave-shape-bottom">
                    <svg class="w-100 light-shape default-shape" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                        <path
                            fill="#fff"
                            fill-opacity="1"
                            d="M0,32L60,80C120,128,240,224,360,229.3C480,235,600,149,720,138.7C840,128,960,192,1080,197.3C1200,203,1320,149,1380,122.7L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
                        ></path>
                    </svg>
                </div>
            </div>
<?php		} ?>




            <div id="tablewithfixedtop" class="tables-section position-relative mt-n25">
                <div class="sticky-plans white-bg shadow-1 position-fixed fixed-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 d-lg-block d-none align-self-center">
                                <div class="coodiv-text-8 fw-bold color-blackish-blue"><?php echo esc_html($settings['amb9']); ?></div>
                                <p class="m-0"><a href="<?php echo esc_url($settings['amb100']); ?>" class="live-chat-fixed coodiv-text-11 color-blackish-blue-opacity"><?php echo esc_html($settings['amb10']); ?></a></p>
                            </div>
                            <div class="col-lg-9 col-12 row justify-content-end mx-0">
                            <?php
                            if ( $settings['plans11'] ) {
		                	foreach (  $settings['plans11'] as $item ) { ?>
	                                 <div class="col-lg-4 col-4 p-0 border-right-separate">
                                    <div class="plan-box text-center px-lg-12 py-7">
                                        <h4 class="coodiv-text-8 mb-0"><?php echo esc_html($item['amb11']); ?></h4>
                                        <span class="py-2 coodiv-text-7 blue-text d-block fw-bold"> <?php echo esc_html($item['amb13']); ?></span>
                                        <a class="btn btn-warning coodiv-text-12 d-block w-100 mt-1" href=" <?php echo esc_url($item['amb15']); ?>"> <?php echo esc_html($item['amb14']); ?></a>
                                    </div>
                                </div>
			          <?php   }
			
		                }
                            ?>

                               
                                

                             
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-md-12 col-lg-9 row planet-side-2 mx-0">

                        <?php
                            if ( $settings['plans11'] ) {
                             $lpap = 1 ;   
		                	foreach (  $settings['plans11'] as $item ) { ?>
                            <div class="col-lg-4 col-md-4 col-sm-8 px-0 pb-lg-0 pb-5">
                                <!-- .pricing card -->
                                <div class="border-bottom-lg-0 pricing-plan-tree h-100 coodiv-hover-shadow-1 bg-white border text-center px-7 pt-6 pb-8 pb-lg-20 position-relative <?php if($lpap==1 || $lpap==2){  ?>border-right-0<?php } ?> coodiv-z-index-1 <?php if($lpap==1){ ?>rounded-left-10-0-0<?php } ?> <?php if($lpap==3){ ?>rounded-right-10-0-0<?php } ?>">
                                    <h4 class="coodiv-text-6 mb-0 mt-5"><?php echo esc_html($item['amb11']); ?></h4>
                                    <p class="coodiv-text-11 mb-0"><?php echo esc_html($item['amb12']); ?></p>
                                    <span class="py-5 coodiv-text-5 blue-text d-block fw-bold"><?php echo esc_html($item['amb13']); ?></span>
                                    <a class="btn btn-warning coodiv-text-11 d-block w-100 mt-5" href="<?php echo esc_url($item['amb15']); ?>"><?php echo esc_html($item['amb14']); ?></a>
                                    <p class="fw-100 coodiv-text-12 mt-2"><?php echo esc_html($item['amb16']); ?></p>
                                    <ul class="card-list list-style-check pl-0 mt-7 mt-lg-8 justify-content-center-li">
                                        <li class="coodiv-text-11">
                                            <a
                                                tabindex="0"
                                                class="popover-host-features"
                                                data-placement="top"
                                                role="button"
                                                data-toggle="popover"
                                                data-trigger="focus"
                                                title=" <?php echo esc_html($item['amb166']); ?>"
                                                data-content="<?php echo esc_html($item['amb17']); ?> and <?php echo esc_html($item['amb18']); ?>"
                                            >
                                            <?php echo $item['amb166']; ?>
                                            </a>
                                        </li>
                                        <li class="coodiv-text-11"><?php echo esc_html($item['amb17']); ?></li>
                                        <li class="coodiv-text-11"><?php echo esc_html($item['amb18']); ?></li>
                                        <li class="coodiv-text-11"><?php echo esc_html($item['amb19']); ?></li>
                                    </ul>
                                </div>
                                <!-- /.pricing carde Ends-->
                            </div>
			            <?php $lpap = $lpap + 1 ; }
			
		                }
                            ?>

                           

                         
                        </div>
                    </div>

                    <div class="table-with-prices position-relative shadow-2 thinborder table-responsive">
                        <table class="table four-rows-hosting-table">
                            <thead>
                                <tr class="table-title-row">
                                    <td colspan="4" class="first-col-table">
                                        <div class="coodiv-text-9 fw-bold mb-0 color-blackish-blue"><?php echo esc_html($settings['amb20']); ?></div>
                                    </td>
                                </tr>
                            </thead>

                            <tbody>
                            <?php
                            if ( $settings['plans12'] ) {
		                	foreach (  $settings['plans12'] as $item ) { ?>
	                             <tr>
                                    <th class="title coodiv-text-10 color-blackish-blue fw-100" scope="row"><?php echo esc_html($item['amb21']); ?></th>
                                    <td class="text-center"><?php echo $item['amb22']; // phpcs:ignore?></td>
                                    <td class="text-center"><?php echo $item['amb23']; // phpcs:ignore?></td>
                                    <td class="text-center"><?php echo $item['amb24']; // phpcs:ignore?></td>
                                </tr>
			              <?php }
			
		                }
                            ?>

                           

                              
                            </tbody>

                          
                        </table>
                    </div>

                 
                </div>
            </div>

    <?php
  }


}
