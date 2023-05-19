<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Serviceplantwo extends Widget_Base{

  public function get_name(){
    return 'serviceplantwo';
  }

  public function get_title(){
    return esc_html__( 'Service Plan Two', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
      'tab0serviceplantwo',
      [
        'label' => esc_html__( 'Heading', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
    $this->add_control(
      'showtitleserviceplantwo',
      [
          'label' => esc_html__( 'Show Title', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::SWITCHER,
          'return_value' => 'yes',
          'default' => 'yes',
      ]
  );

    $this->add_control(
			'titleserviceplantwo',
			[
				'label' => esc_html__( 'Title', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Make Money with your own Web Hosting Business', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'descserviceplantwo',
			[
				'label' => esc_html__( 'Description', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Building your own web hosting business is now simple with our Reseller Hosting. Our flexible Linux Reseller Hosting plans allow you to create customized hosting plans with unmetered disk space and ample bandwidth. WHM/CPanel is bundled with every plan and provides an intuitive GUI to assist you in the process of hosting websites, 1-click-install scripts and supporting clients.', 'emyui-core' ),
			
			]
		);
    $this->end_controls_section();
    $this->start_controls_section(
      'tab1serviceplantwo',
      [
        'label' => esc_html__( 'Left Table', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
    $this->add_control(
			'title1serviceplantwo',
			[
				'label' => esc_html__( 'Title', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Hatchling Plan', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'currency1serviceplantwo',
			[
				'label' => esc_html__( 'currency', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '$', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'price1yearlyserviceplantwo',
			[
				'label' => esc_html__( 'Yearly price', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '87', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'price1monthlyserviceplantwo',
			[
				'label' => esc_html__( 'Monthly price', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '23', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'Decimals1serviceplantwo',
			[
				'label' => esc_html__( 'Decimals', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '.99', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'periodyearly1serviceplantwo',
			[
				'label' => esc_html__( 'Yearly Subtitle', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'billed Yearly', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'periodmonthly1serviceplantwo',
			[
				'label' => esc_html__( 'Monthly Subtitle', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'billed monthly', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'button1serviceplantwo',
			[
				'label' => esc_html__( 'Button', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Order Now', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'buttonlink1serviceplantwo',
			[
				'label' => esc_html__( 'Button Link', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '#', 'emyui-core' ),
			
			]
		);
    $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'feature1serviceplantwo', [
                'label' => esc_html__( 'Feature', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'FREE SSL Certificate' , 'emyui-core' ),
            ]
        );
        $repeater->add_control(
          'included1serviceplantwo',
          [
            'label' => esc_html__( 'Style', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::SELECT,
            'default' => 'included1',
            'options' => [
              'included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
              'notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
              'haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
            ],
          ]
        );
        $repeater->add_control(
          'featurel1serviceplantwo', [
              'label' => esc_html__( 'Feature Tooltip Title', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'condition' => [ 'included1serviceplantwo' => 'haslink1' ],
              'default' => esc_html__( 'FREE SSL' , 'emyui-core' ),
          ]
      );
      $repeater->add_control(
        'featured1serviceplantwo', [
            'label' => esc_html__( 'Feature Tooltip Description', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'condition' => [ 'included1serviceplantwo' => 'haslink1' ],
            'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
        ]
    );
    $this->add_control(
        'features1serviceplantwo',
        [
            'label' => esc_html__( 'Features', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::REPEATER,
            'fields' => $repeater->get_controls(),
            'default' => [
                [
                    'feature1serviceplantwo' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
                ],
            ],
        ]
    );
          $this->end_controls_section();
          $this->start_controls_section(
            'tab2serviceplantwo',
            [
              'label' => esc_html__( 'Middle Table', 'emyui-core' ),
              'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
          );
          $this->add_control(
            'toptitle2serviceplantwo',
            [
              'label' => esc_html__( 'Top Title', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'We Recommend', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'title2serviceplantwo',
            [
              'label' => esc_html__( 'Title', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Business Plan', 'emyui-core' ),
            
            ]
          );
              $this->add_control(
            'isofferserviceplantwo',
            [
                'label' => esc_html__( 'Is Offer?', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'offerserviceplantwo',
            [
              'label' => esc_html__( 'Offer', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
                      'condition' => [ 'isofferserviceplantwo' => 'yes' ],
              'default' => esc_html__( '65% Offer!', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'currency2serviceplantwo',
            [
              'label' => esc_html__( 'currency', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( '$', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'price2yearlyserviceplantwo',
            [
              'label' => esc_html__( 'Yearly price', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( '195', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'price2monthlyserviceplantwo',
            [
              'label' => esc_html__( 'Monthly price', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( '49', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'Decimals2serviceplantwo',
            [
              'label' => esc_html__( 'Decimals', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( '.00', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'periodyearly2serviceplantwo',
            [
              'label' => esc_html__( 'Yearly Subtitle', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'billed Yearly', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'periodmonthly2serviceplantwo',
            [
              'label' => esc_html__( 'Monthly Subtitle', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'billed monthly', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'button2serviceplantwo',
            [
              'label' => esc_html__( 'Button', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Order Now', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'buttonlink2serviceplantwo',
            [
              'label' => esc_html__( 'Button Link', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( '#', 'emyui-core' ),
            
            ]
          );
          $repeater = new \Elementor\Repeater();
              $repeater->add_control(
                  'feature2serviceplantwo', [
                      'label' => esc_html__( 'Feature', 'emyui-core' ),
                      'type' => \Elementor\Controls_Manager::TEXT,
                      'default' => esc_html__( 'FREE SSL Certificate' , 'emyui-core' ),
                  ]
              );
              $repeater->add_control(
                'included2serviceplantwo',
                [
                  'label' => esc_html__( 'Style', 'emyui-core' ),
                  'type' => \Elementor\Controls_Manager::SELECT,
                  'default' => 'included1',
                  'options' => [
                    'included2'  => esc_html__( 'Is it included?', 'emyui-core' ),
                    'notincluded2' => esc_html__( 'Is not included?', 'emyui-core' ),
                    'haslink2' => esc_html__( 'Has Link', 'emyui-core' ),
                  ],
                ]
              );
              $repeater->add_control(
                'featurel2serviceplantwo', [
                    'label' => esc_html__( 'Feature Tooltip Title', 'emyui-core' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'condition' => [ 'included2serviceplantwo' => 'haslink2' ],
                    'default' => esc_html__( 'FREE SSL' , 'emyui-core' ),
                ]
            );
            $repeater->add_control(
              'featured2serviceplantwo', [
                  'label' => esc_html__( 'Feature Tooltip Description', 'emyui-core' ),
                  'type' => \Elementor\Controls_Manager::TEXTAREA,
                  'condition' => [ 'included2serviceplantwo' => 'haslink2' ],
                  'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
              ]
          );
          $this->add_control(
              'features2serviceplantwo',
              [
                  'label' => esc_html__( 'Features', 'emyui-core' ),
                  'type' => \Elementor\Controls_Manager::REPEATER,
                  'fields' => $repeater->get_controls(),
                  'default' => [
                      [
                          'feature2serviceplantwo' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
                      ],
                  ],
              ]
          );
                $this->end_controls_section();
          $this->start_controls_section(
            'tab3serviceplantwo',
            [
              'label' => esc_html__( 'Right Table', 'emyui-core' ),
              'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
          );
          $this->add_control(
            'title3serviceplantwo',
            [
              'label' => esc_html__( 'Title', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Business Plan', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'currency3serviceplantwo',
            [
              'label' => esc_html__( 'currency', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( '$', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'price3yearlyserviceplantwo',
            [
              'label' => esc_html__( 'Yearly price', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( '87', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'price3monthlyserviceplantwo',
            [
              'label' => esc_html__( 'Monthly price', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( '23', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'Decimals3serviceplantwo',
            [
              'label' => esc_html__( 'Decimals', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( '.00', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'periodyearly3serviceplantwo',
            [
              'label' => esc_html__( 'Yearly Subtitle', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'billed Yearly', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'periodmonthly3serviceplantwo',
            [
              'label' => esc_html__( 'Monthly Subtitle', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'billed monthly', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'button3serviceplantwo',
            [
              'label' => esc_html__( 'Button', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Order Now', 'emyui-core' ),
            
            ]
          );
          $this->add_control(
            'buttonlink3serviceplantwo',
            [
              'label' => esc_html__( 'Button Link', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( '#', 'emyui-core' ),
            
            ]
          );
          $repeater = new \Elementor\Repeater();
              $repeater->add_control(
                  'feature3serviceplantwo', [
                      'label' => esc_html__( 'Feature', 'emyui-core' ),
                      'type' => \Elementor\Controls_Manager::TEXT,
                      'default' => esc_html__( 'FREE SSL Certificate' , 'emyui-core' ),
                  ]
              );
              $repeater->add_control(
                'included3serviceplantwo',
                [
                  'label' => esc_html__( 'Style', 'emyui-core' ),
                  'type' => \Elementor\Controls_Manager::SELECT,
                  'default' => 'included1',
                  'options' => [
                    'included3'  => esc_html__( 'Is it included?', 'emyui-core' ),
                    'notincluded3' => esc_html__( 'Is not included?', 'emyui-core' ),
                    'haslink3' => esc_html__( 'Has Link', 'emyui-core' ),
                  ],
                ]
              );
              $repeater->add_control(
                'featurel3serviceplantwo', [
                    'label' => esc_html__( 'Feature Tooltip Title', 'emyui-core' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'condition' => [ 'included3serviceplantwo' => 'haslink3' ],
                    'default' => esc_html__( 'FREE SSL' , 'emyui-core' ),
                ]
            );
            $repeater->add_control(
              'featured3serviceplantwo', [
                  'label' => esc_html__( 'Feature Tooltip Description', 'emyui-core' ),
                  'type' => \Elementor\Controls_Manager::TEXTAREA,
                  'condition' => [ 'included3serviceplantwo' => 'haslink3' ],
                  'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
              ]
          );
          $this->add_control(
              'features3serviceplantwo',
              [
                  'label' => esc_html__( 'Features', 'emyui-core' ),
                  'type' => \Elementor\Controls_Manager::REPEATER,
                  'fields' => $repeater->get_controls(),
                  'default' => [
                      [
                          'feature3serviceplantwo' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
                      ],
                  ],
              ]
          );
                $this->end_controls_section();
        }


  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>


<div class="hero-area-coodiv position-relative white-bg light-mode-texts">
                <div class="header-hero-backgrounds">
                    <svg class="bg-wave-box-end-z1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                        <path
                            fill="#f4f7fa"
                            fill-opacity="1"
                            d="M0,0L34.3,16C68.6,32,137,64,206,80C274.3,96,343,96,411,96C480,96,549,96,617,117.3C685.7,139,754,181,823,186.7C891.4,192,960,160,1029,170.7C1097.1,181,1166,235,1234,234.7C1302.9,235,1371,181,1406,154.7L1440,128L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
                        ></path>
                    </svg>
                    <span class="header-erath"></span>
                    <div class="t-first"><img class="layer layer2" data-depth="-0.20" src="<?php echo esc_url(get_template_directory_uri()); ?>/image/header/planet.png" alt="" /></div>
                    <div class="t-second"><img class="layer layer2" data-depth="-0.20" src="<?php echo esc_url(get_template_directory_uri()); ?>/image/header/sat.png" alt="" /></div>
                </div>

                <div class="container">
                    <div class="row justify-content-center align-items-center pb-lg-30 pb-23 position-relative coodiv-z-index-2">
                        <div class="col-11 col-md-12 col-lg-9 order-lg-1" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
                            <div class="hero-content mt-11 mt-lg-0">
                            <?php   if ( 'yes' === $settings['showtitleserviceplantwo'] ) { ?>
                                <h1 class="title coodiv-text-5 mb-5 text-center"><?php echo  esc_html($settings['titleserviceplantwo']); ?></h1>
                                <p class="coodiv-text-9 mb-11 text-center">
                                <?php echo  esc_html($settings['descserviceplantwo']); ?>
                                </p>
                                <?php  } ?>

                                <div class="d-md-flex justify-content-center mt-15">
                                    <div class="col-lg-4 col-md-4 col-sm-8 mb-9 pr-md-0">
                                        <div class="cpanel-plan side-plan plan-1 box-shadow-1 bg-white rounded-left-20 text-center pb-10 pt-15 pr-6 pl-6 position-relative overflow-hidden mt-12 border border-md-right-0">
                                            <h5 class="title coodiv-text-5 mb-7 d-inline-block"><?php echo  esc_html($settings['title1serviceplantwo']); ?></h5>
                                            <div id="pricing-dynamic-deck2" class="mb-9" data-pricing-dynamic="" data-value-active="yearly">
                                                <div class="mb-4 d-inline-flex position-relative" id="pricing-dynamic-deck--head2">
                                                    <a href="javascript:" class="btn-toggle active mx-3 price-deck-trigger" data-pricing-trigger="" data-target="#pricing-dynamic-deck2">
                                                        <span class="round"></span> <span class="year">سالانه</span> <span class="month">ماهانه</span>
                                                    </a>
                                                </div>

                                                <div class="d-flex align-items-end justify-content-center mt-1">
                                                    <span class="currency mr-2 coodiv-text-6 font-weight-bold line-spacing-none text-blackish-blue"><?php echo  esc_html($settings['currency1serviceplantwo']); ?></span>
                                                    <h2 class="price-value coodiv-text-2 font-weight-bold line-spacing-none mb-0 dynamic-value text-blackish-blue" data-active="<?php echo  esc_attr($settings['price1yearlyserviceplantwo']); ?>" data-monthly="<?php echo  esc_attr($settings['price1monthlyserviceplantwo']); ?>" data-yearly="<?php echo  esc_attr($settings['price1yearlyserviceplantwo']); ?>">
                                                        <span class="d-none">.</span>
                                                        <span class="price-value-little-chifre"><?php echo  esc_html($settings['Decimals1serviceplantwo']); ?></span>
                                                    </h2>
                                                </div>
                                                <span
                                                    class="price-bottom-text dynamic-value coodiv-text-11 mt-5 text-blackish-blue coodiv-opacity-7 d-inline-flex"
                                                    data-active="<?php echo  esc_attr($settings['periodyearly1serviceplantwo']); ?>"
                                                    data-monthly="<?php echo  esc_attr($settings['periodmonthly1serviceplantwo']); ?>"
                                                    data-yearly="<?php echo  esc_attr($settings['periodyearly1serviceplantwo']); ?>"
                                                ></span>
                                            </div>

                                            <ul class="special-helf-box-list list-style-check mt-7 mt-lg-3">
                                              <?php if ( $settings['features1serviceplantwo'] ) {
                                               	  		foreach (  $settings['features1serviceplantwo'] as $item ) { 
                                                          if ( $item['included1serviceplantwo'] === 'haslink1' ) { ?>
                                                <li class="chacked">
                                                    <a
                                                        tabindex="0"
                                                        class="popover-host-features"
                                                        data-placement="top"
                                                        role="button"
                                                        data-toggle="popover"
                                                        data-trigger="focus"
                                                        title="<?php echo  esc_attr($item['featurel1serviceplantwo']); ?>"
                                                        data-content="<?php echo  esc_attr($item['featured1serviceplantwo']); ?>"
                                                    >
                                                    <?php echo  esc_html($item['feature1serviceplantwo']); ?>
                                                    </a>
                                                </li>
                                                <?php }elseif($item['included1serviceplantwo'] === 'included1'){                                          
                                                ?>
                                                <li class="chacked"><?php echo  esc_html($item['feature1serviceplantwo']); ?></li>
                                                <?php }elseif($item['included1serviceplantwo'] === 'notincluded1'){  ?>
                                                <li class="not-chacked"><?php echo  esc_html($item['feature1serviceplantwo']); ?></li>
                                                <?php }
                                                        }
                                                          }
                                                         
                                                         ?>
                                            </ul>

                                            <a class="btn btn-warning coodiv-text-9 d-block w-100 mt-7" href="<?php echo  esc_url($settings['buttonlink1serviceplantwo']); ?>">
                                            <?php echo  esc_html($settings['button1serviceplantwo']); ?>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-4 col-sm-8 mb-9 px-md-0">
                                        <!-- .pricing card -->
                                        <div class="cpanel-plan plan-1 box-shadow-1 bg-white rounded-20 text-center pb-10 pt-15 pr-6 pl-6 position-relative overflow-hidden border">
                                            <span class="cpanel-plan-recommend"><?php echo  esc_html($settings['toptitle2serviceplantwo']); ?></span>
                                            <?php   if ( 'yes' === $settings['isofferserviceplantwo'] ) { ?>
                                            <span class="cpanel-plan-off"><?php echo  esc_html($settings['offerserviceplantwo']); ?></span>
                                            <?php }?>
                                            <h5 class="title coodiv-text-5 mb-7 mt-5 d-inline-block"><?php echo  esc_html($settings['title2serviceplantwo']); ?></h5>
                                            <div id="pricing-dynamic-deck1" class="mb-9" data-pricing-dynamic="" data-value-active="yearly">
                                                <div class="mb-4 d-inline-flex position-relative" id="pricing-dynamic-deck--head1">
                                                    <a href="javascript:" class="btn-toggle active mx-3 price-deck-trigger" data-pricing-trigger="" data-target="#pricing-dynamic-deck1">
                                                        <span class="round"></span> <span class="year">سالانه</span> <span class="month">ماهانه</span>
                                                    </a>
                                                </div>

                                                <div class="d-flex align-items-end justify-content-center mt-1">
                                                    <span class="currency mr-2 coodiv-text-6 font-weight-bold line-spacing-none text-blackish-blue"><?php echo  esc_html($settings['currency2serviceplantwo']); ?></span>
                                                    <h2 class="price-value coodiv-text-2 font-weight-bold line-spacing-none mb-0 dynamic-value text-blackish-blue" data-active="<?php echo  esc_attr($settings['price2yearlyserviceplantwo']); ?>" data-monthly="<?php echo  esc_attr($settings['price2monthlyserviceplantwo']); ?>" data-yearly="<?php echo  esc_attr($settings['price2yearlyserviceplantwo']); ?>">
                                                        <span class="d-none">.</span>
                                                        <span class="price-value-little-chifre"><?php echo  esc_html($settings['Decimals2serviceplantwo']); ?></span>
                                                    </h2>
                                                </div>
                                                <span
                                                    class="price-bottom-text dynamic-value coodiv-text-11 mt-5 text-blackish-blue coodiv-opacity-7 d-inline-flex"
                                                    data-active="<?php echo  esc_attr($settings['periodyearly2serviceplantwo']); ?>"
                                                    data-monthly="<?php echo  esc_attr($settings['periodmonthly2serviceplantwo']); ?>"
                                                    data-yearly="<?php echo  esc_attr($settings['periodyearly2serviceplantwo']); ?>"
                                                ></span>
                                            </div>

                                            <ul class="special-helf-box-list list-style-check mt-7 mt-lg-3">
                                            <?php if ( $settings['features2serviceplantwo'] ) {
                                               	  		foreach (  $settings['features2serviceplantwo'] as $item ) { 
                                                          if ( $item['included2serviceplantwo'] === 'haslink2' ) { ?>
                                                <li class="chacked">
                                                    <a
                                                        tabindex="0"
                                                        class="popover-host-features"
                                                        data-placement="top"
                                                        role="button"
                                                        data-toggle="popover"
                                                        data-trigger="focus"
                                                        title="<?php echo  esc_attr($item['featurel2serviceplantwo']); ?>"
                                                        data-content="<?php echo  esc_attr($item['featured2serviceplantwo']); ?>"
                                                    >
                                                    <?php echo  esc_html($item['feature2serviceplantwo']); ?>
                                                    </a>
                                                </li>
                                                <?php }elseif($item['included2serviceplantwo'] === 'included2'){                                          
                                                ?>
                                                <li class="chacked"><?php echo  esc_html($item['feature2serviceplantwo']); ?></li>
                                                <?php }elseif($item['included2serviceplantwo'] === 'notincluded2'){  ?>
                                                <li class="not-chacked"><?php echo  esc_html($item['feature2serviceplantwo']); ?></li>
                                                <?php }
                                                        }
                                                          }
                                                         
                                                         ?>
                                            </ul>

                                            <a class="btn btn-warning coodiv-text-9 d-block w-100 mt-7" href="<?php echo  esc_url($settings['buttonlink2serviceplantwo']); ?>">
                                            <?php echo  esc_html($settings['button2serviceplantwo']); ?>
                                            </a>
                                        </div>
                                        <!-- /.pricing carde Ends-->
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-8 mb-9 pl-md-0">
                                        <div class="cpanel-plan side-plan plan-1 box-shadow-1 bg-white rounded-right-20 border-md-left-0 text-center pb-10 pt-15 pr-6 pl-6 position-relative overflow-hidden mt-12 border">
                                            <h5 class="title coodiv-text-5 mb-7 d-inline-block"><?php echo  esc_html($settings['title3serviceplantwo']); ?></h5>
                                            <div id="pricing-dynamic-deck3" class="mb-9" data-pricing-dynamic="" data-value-active="yearly">
                                                <div class="mb-4 d-inline-flex position-relative" id="pricing-dynamic-deck--head2">
                                                    <a href="javascript:" class="btn-toggle active mx-3 price-deck-trigger" data-pricing-trigger="" data-target="#pricing-dynamic-deck3">
                                                        <span class="round"></span> <span class="year">سالانه</span> <span class="month">ماهانه</span>
                                                    </a>
                                                </div>

                                                <div class="d-flex align-items-end justify-content-center mt-1">
                                                    <span class="currency mr-2 coodiv-text-6 font-weight-bold line-spacing-none text-blackish-blue"><?php echo  esc_html($settings['currency3serviceplantwo']); ?></span>
                                                    <h2 class="price-value coodiv-text-2 font-weight-bold line-spacing-none mb-0 dynamic-value text-blackish-blue" data-active="<?php echo  esc_attr($settings['price3yearlyserviceplantwo']); ?>" data-monthly="<?php echo  esc_attr($settings['price3monthlyserviceplantwo']); ?>" data-yearly="<?php echo  esc_attr($settings['price3yearlyserviceplantwo']); ?>">
                                                        <span class="d-none">.</span>
                                                        <span class="price-value-little-chifre"><?php echo  esc_html($settings['Decimals3serviceplantwo']); ?></span>
                                                    </h2>
                                                </div>
                                                <span
                                                    class="price-bottom-text dynamic-value coodiv-text-11 mt-5 text-blackish-blue coodiv-opacity-7 d-inline-flex"
                                                    data-active="<?php echo  esc_attr($settings['periodyearly3serviceplantwo']); ?>"
                                                    data-monthly="<?php echo  esc_attr($settings['periodmonthly3serviceplantwo']); ?>"
                                                    data-yearly="<?php echo  esc_attr($settings['periodyearly3serviceplantwo']); ?>"
                                                ></span>
                                            </div>

                                            <ul class="special-helf-box-list list-style-check mt-7 mt-lg-3">
                                            <?php if ( $settings['features3serviceplantwo'] ) {
                                               	  		foreach (  $settings['features3serviceplantwo'] as $item ) { 
                                                          if ( $item['included3serviceplantwo'] === 'haslink3' ) { ?>
                                                <li class="chacked">
                                                    <a
                                                        tabindex="0"
                                                        class="popover-host-features"
                                                        data-placement="top"
                                                        role="button"
                                                        data-toggle="popover"
                                                        data-trigger="focus"
                                                        title="<?php echo  esc_attr($item['featurel3serviceplantwo']); ?>"
                                                        data-content="<?php echo  esc_attr($item['featured3serviceplantwo']); ?>"
                                                    >
                                                    <?php echo  esc_html($item['feature3serviceplantwo']); ?>
                                                    </a>
                                                </li>
                                                <?php }elseif($item['included3serviceplantwo'] === 'included3'){                                          
                                                ?>
                                                <li class="chacked"><?php echo  esc_html($item['feature3serviceplantwo']); ?></li>
                                                <?php }elseif($item['included3serviceplantwo'] === 'notincluded3'){  ?>
                                                <li class="not-chacked"><?php echo  esc_html($item['feature3serviceplantwo']); ?></li>
                                                <?php }
                                                        }
                                                          }
                                                         
                                                         ?>
                                            </ul>

                                            <a class="btn btn-warning coodiv-text-9 d-block w-100 mt-7" href="<?php echo  esc_url($settings['buttonlink3serviceplantwo']); ?>">
                                            <?php echo  esc_html($settings['button3serviceplantwo']); ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <?php
  }


}
