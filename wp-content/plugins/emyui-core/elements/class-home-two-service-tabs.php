<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Serviceplanonetab extends Widget_Base{

  public function get_name(){
    return 'serviceplantab';
  }

  public function get_title(){
    return esc_html__( 'Tab Services', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
      'tab0serviceplantab',
      [
        'label' => esc_html__( 'Boxes', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
    $repeater = new \Elementor\Repeater();
    $repeater->add_control(
        'iconserviceplantab', [
            'label' => esc_html__( 'Icon', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'icon-command' , 'emyui-core' ),
        ]
    );

    $repeater->add_control(
      'nameserviceplantab',
      [
          'label' => esc_html__( 'Tab Name', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::TEXT,
          'default' => esc_html__( 'Web Hosting', 'emyui-core' ),
  
      ]
  );
  $repeater->add_control(
      'desc1serviceplantab',
      [
          'label' => esc_html__( 'Tab Description', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::TEXTAREA,
          'default' => esc_html__( 'Lorem Ipsum is simply dummy', 'emyui-core' ),
      
      ]
  );
  $repeater->add_control(
    'boxstyleserviceplantab',
    [
        'label' => esc_html__( 'Box Style', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::SELECT,
        'default' => '1style',
        'options' => [
            '1style'  => esc_html__( 'First Style', 'emyui-core' ),
            '2style' => esc_html__( 'Second Style', 'emyui-core' ),
            '3style' => esc_html__( 'Third Style', 'emyui-core' ),
            '4style' => esc_html__( 'Fourth Style', 'emyui-core' ),
            '5style' => esc_html__( 'Fifth Style', 'emyui-core' ),
        ],
    ]
);
/* Left Box - First Style - started */
$repeater->add_control(
    'h1style12serviceplantab',
    [
        'label' => esc_html__( 'Left Box', 'emyui-core' ),
        'condition' => [ 'boxstyleserviceplantab' => '1style' ],
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);
    $repeater->add_control(
			'title1style1serviceplantab',
			[
				'label' => esc_html__( 'Left Box Title', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '1style' ],
				'default' => esc_html__( 'Hatchling Plan', 'emyui-core' ),
			
			]
		);
    $repeater->add_control(
			'currency1style1serviceplantab',
			[
				'label' => esc_html__( 'Left Box currency', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '1style' ],
				'default' => esc_html__( '$', 'emyui-core' ),
			
			]
		);
    $repeater->add_control(
			'price1yearlystyle1serviceplantab',
			[
				'label' => esc_html__( 'Left Box Yearly price', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '1style' ],
				'default' => esc_html__( '87', 'emyui-core' ),
			
			]
		);
    $repeater->add_control(
			'price1monthlystyle1serviceplantab',
			[
				'label' => esc_html__( 'Left Box Monthly price', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '1style' ],
				'default' => esc_html__( '23', 'emyui-core' ),
			
			]
		);
    $repeater->add_control(
			'Decimals1style1serviceplantab',
			[
				'label' => esc_html__( 'Left Box Decimals', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '1style' ],
				'default' => esc_html__( '.99', 'emyui-core' ),
			
			]
		);
    $repeater->add_control(
			'periodyearly1style1serviceplantab',
			[
				'label' => esc_html__( 'Left Box Yearly Subtitle', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '1style' ],
				'default' => esc_html__( 'billed Yearly', 'emyui-core' ),
			
			]
		);
    $repeater->add_control(
			'periodmonthly1style1serviceplantab',
			[
				'label' => esc_html__( 'Left Box Monthly Subtitle', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '1style' ],
				'default' => esc_html__( 'billed monthly', 'emyui-core' ),
			
			]
		);
    $repeater->add_control(
			'button1style1serviceplantab',
			[
				'label' => esc_html__( 'Left Box Button', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '1style' ],
				'default' => esc_html__( 'Get Started Now', 'emyui-core' ),
			
			]
		);
    $repeater->add_control(
			'buttonlink1style1serviceplantab',
			[
				'label' => esc_html__( 'Left Box Button Link', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '1style' ],
				'default' => esc_html__( '#', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
			'hr1',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
                'condition' => [ 'boxstyleserviceplantab' => '1style' ],

			]
		);
        $repeater->add_control(
			'featuresnumber1style1serviceplantab',
			[
				'label' => esc_html__( 'Left Box Number of features', 'emyui-core' ),
                'condition' => [ 'boxstyleserviceplantab' => '1style' ],
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 8,
				'step' => 1,
				'default' => 8,
			]
		);
        $repeater->add_control(
			'1featurestyle1serviceplantab',
			[
				'label' => esc_html__( 'First Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber1style1serviceplantab',
                            'operator' => '>=',
                            'value' => '1'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '1style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has1featurestyle1serviceplantab',
            [
              'label' => esc_html__( 'First Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber1style1serviceplantab',
                        'operator' => '>=',
                        'value' => '1'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '1style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle1included1',
              'options' => [
                'leftboxstyle1included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle1notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
                'leftboxstyle1haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink1featurestyle1serviceplantab', [
                'label' => esc_html__( 'First Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber1style1serviceplantab',
                            'operator' => '>=',
                            'value' => '1'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '1style'
                        ],
                        [
                            'name' => 'has1featurestyle1serviceplantab',
                            'operator' => '===',
                            'value' => 'leftboxstyle1haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
        $repeater->add_control(
			'hr1featurestyle1serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber1style1serviceplantab',
                            'operator' => '>=',
                            'value' => '1'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '1style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'2featurestyle1serviceplantab',
			[
				'label' => esc_html__( 'Second Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber1style1serviceplantab',
                            'operator' => '>=',
                            'value' => '2'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '1style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has2featurestyle1serviceplantab',
            [
              'label' => esc_html__( 'Second Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber1style1serviceplantab',
                        'operator' => '>=',
                        'value' => '2'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '1style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle1included1',
              'options' => [
                'leftboxstyle1included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle1notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
                'leftboxstyle1haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink2featurestyle1serviceplantab', [
                'label' => esc_html__( 'Second Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber1style1serviceplantab',
                            'operator' => '>=',
                            'value' => '2'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '1style'
                        ],
                        [
                            'name' => 'has2featurestyle1serviceplantab',
                            'operator' => '===',
                            'value' => 'leftboxstyle1haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
        $repeater->add_control(
			'hr2featurestyle1serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber1style1serviceplantab',
                            'operator' => '>=',
                            'value' => '2'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '1style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'3featurestyle1serviceplantab',
			[
				'label' => esc_html__( 'Third Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber1style1serviceplantab',
                            'operator' => '>=',
                            'value' => '3'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '1style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has3featurestyle1serviceplantab',
            [
              'label' => esc_html__( 'Third Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber1style1serviceplantab',
                        'operator' => '>=',
                        'value' => '3'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '1style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle1included1',
              'options' => [
                'leftboxstyle1included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle1notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
                'leftboxstyle1haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink3featurestyle1serviceplantab', [
                'label' => esc_html__( 'Third Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber1style1serviceplantab',
                            'operator' => '>=',
                            'value' => '3'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '1style'
                        ],
                        [
                            'name' => 'has3featurestyle1serviceplantab',
                            'operator' => '===',
                            'value' => 'leftboxstyle1haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
        $repeater->add_control(
			'hr3featurestyle1serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber1style1serviceplantab',
                            'operator' => '>=',
                            'value' => '3'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '1style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'4featurestyle1serviceplantab',
			[
				'label' => esc_html__( 'Fourth Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber1style1serviceplantab',
                            'operator' => '>=',
                            'value' => '4'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '1style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has4featurestyle1serviceplantab',
            [
              'label' => esc_html__( 'Fourth Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber1style1serviceplantab',
                        'operator' => '>=',
                        'value' => '4'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '1style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle1included1',
              'options' => [
                'leftboxstyle1included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle1notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
                'leftboxstyle1haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink4featurestyle1serviceplantab', [
                'label' => esc_html__( 'Fourth Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber1style1serviceplantab',
                            'operator' => '>=',
                            'value' => '4'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '1style'
                        ],
                        [
                            'name' => 'has4featurestyle1serviceplantab',
                            'operator' => '===',
                            'value' => 'leftboxstyle1haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
        $repeater->add_control(
			'hr4featurestyle1serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber1style1serviceplantab',
                            'operator' => '>=',
                            'value' => '4'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '1style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'5featurestyle1serviceplantab',
			[
				'label' => esc_html__( 'Fifth Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber1style1serviceplantab',
                            'operator' => '>=',
                            'value' => '5'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '1style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has5featurestyle1serviceplantab',
            [
              'label' => esc_html__( 'Fifth Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber1style1serviceplantab',
                        'operator' => '>=',
                        'value' => '5'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '1style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle1included1',
              'options' => [
                'leftboxstyle1included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle1notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
                'leftboxstyle1haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink5featurestyle1serviceplantab', [
                'label' => esc_html__( 'Fifth Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber1style1serviceplantab',
                            'operator' => '>=',
                            'value' => '5'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '1style'
                        ],
                        [
                            'name' => 'has2featurestyle1serviceplantab',
                            'operator' => '===',
                            'value' => 'leftboxstyle5haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
        $repeater->add_control(
			'hr5featurestyle1serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber1style1serviceplantab',
                            'operator' => '>=',
                            'value' => '5'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '1style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'6featurestyle1serviceplantab',
			[
				'label' => esc_html__( 'Sixth Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber1style1serviceplantab',
                            'operator' => '>=',
                            'value' => '6'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '1style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has6featurestyle1serviceplantab',
            [
              'label' => esc_html__( 'Sixth Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber1style1serviceplantab',
                        'operator' => '>=',
                        'value' => '6'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '1style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle1included1',
              'options' => [
                'leftboxstyle1included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle1notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
                'leftboxstyle1haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink6featurestyle1serviceplantab', [
                'label' => esc_html__( 'Sixth Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber1style1serviceplantab',
                            'operator' => '>=',
                            'value' => '6'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '1style'
                        ],
                        [
                            'name' => 'has6featurestyle1serviceplantab',
                            'operator' => '===',
                            'value' => 'leftboxstyle1haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
        $repeater->add_control(
			'hr6featurestyle1serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber1style1serviceplantab',
                            'operator' => '>=',
                            'value' => '6'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '1style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'7featurestyle1serviceplantab',
			[
				'label' => esc_html__( 'Seventh Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber1style1serviceplantab',
                            'operator' => '>=',
                            'value' => '7'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '1style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has7featurestyle1serviceplantab',
            [
              'label' => esc_html__( 'Seventh Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber1style1serviceplantab',
                        'operator' => '>=',
                        'value' => '7'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '1style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle1included1',
              'options' => [
                'leftboxstyle1included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle1notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
                'leftboxstyle1haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink7featurestyle1serviceplantab', [
                'label' => esc_html__( 'Seventh Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber1style1serviceplantab',
                            'operator' => '>=',
                            'value' => '7'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '1style'
                        ],
                        [
                            'name' => 'has7featurestyle1serviceplantab',
                            'operator' => '===',
                            'value' => 'leftboxstyle1haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
        $repeater->add_control(
			'hr7featurestyle1serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber1style1serviceplantab',
                            'operator' => '>=',
                            'value' => '7'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '1style'
                        ],
                    ]
                    ],   
			]
		);
        $repeater->add_control(
			'8featurestyle1serviceplantab',
			[
				'label' => esc_html__( 'Eighth Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber1style1serviceplantab',
                            'operator' => '>=',
                            'value' => '8'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '1style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has8featurestyle1serviceplantab',
            [
              'label' => esc_html__( 'Eighth Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber1style1serviceplantab',
                        'operator' => '>=',
                        'value' => '8'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '1style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle1included1',
              'options' => [
                'leftboxstyle1included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle1notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
                'leftboxstyle1haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink8featurestyle1serviceplantab', [
                'label' => esc_html__( 'Eighth Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber1style1serviceplantab',
                            'operator' => '>=',
                            'value' => '8'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '1style'
                        ],
                        [
                            'name' => 'has8featurestyle1serviceplantab',
                            'operator' => '===',
                            'value' => 'leftboxstyle1haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
        $repeater->add_control(
			'hr8featurestyle1serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber1style1serviceplantab',
                            'operator' => '>=',
                            'value' => '8'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '1style'
                        ],
                    ]
                    ],   
			]
		);
/* Left Box - First Style - ended */
/* Right Box - First Style - started */
$repeater->add_control(
    'h2style12serviceplantab',
    [
        'label' => esc_html__( 'Right Box', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::HEADING,
        'condition' => [ 'boxstyleserviceplantab' => '1style' ],
        'separator' => 'before',
    ]
);
          $repeater->add_control(
            'toptitle2style12serviceplantab',
            [
              'label' => esc_html__( 'Right Box Top Title', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '1style' ],
                'default' => esc_html__( 'We Recommend', 'emyui-core' ),
            
            ]
          );
$repeater->add_control(
			'title1style12serviceplantab',
			[
				'label' => esc_html__( 'Right Box Title', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '1style' ],
				'default' => esc_html__( 'Hatchling Plan', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'isofferstyle12serviceplantab',
            [
                'label' => esc_html__( 'Right Box Is Offer?', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '1style'
                        ],
                    ]
                    ],
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $repeater->add_control(
            'offerstyle12serviceplantab',
            [
              'label' => esc_html__( 'Right Box Offer', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
                      'conditions' => [
                        'relation' => 'and',
                        'terms' => [
                            [
                                'name' => 'isofferstyle12serviceplantab',
                                'operator' => '===',
                                'value' => 'yes'
                            ],
                            [
                                'name' => 'boxstyleserviceplantab',
                                'operator' => '===',
                                'value' => '1style'
                            ],
                        ]
                        ],
              'default' => esc_html__( '65% Offer!', 'emyui-core' ),
            
            ]
          );
    $repeater->add_control(
			'currency1style12serviceplantab',
			[
				'label' => esc_html__( 'Right Box currency', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '1style' ],
				'default' => esc_html__( '$', 'emyui-core' ),
			
			]
		);
    $repeater->add_control(
			'price1yearlystyle12serviceplantab',
			[
				'label' => esc_html__( 'Right Box Yearly price', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '1style' ],
				'default' => esc_html__( '87', 'emyui-core' ),
			
			]
		);
    $repeater->add_control(
			'price1monthlystyle12serviceplantab',
			[
				'label' => esc_html__( 'Right Box Monthly price', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '1style' ],
				'default' => esc_html__( '23', 'emyui-core' ),
			
			]
		);
    $repeater->add_control(
			'Decimals1style12serviceplantab',
			[
				'label' => esc_html__( 'Right Box Decimals', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '1style' ],
				'default' => esc_html__( '.99', 'emyui-core' ),
			
			]
		);
    $repeater->add_control(
			'periodyearly1style12serviceplantab',
			[
				'label' => esc_html__( 'Right Box Yearly Subtitle', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '1style' ],
				'default' => esc_html__( 'billed Yearly', 'emyui-core' ),
			
			]
		);
    $repeater->add_control(
			'periodmonthly1style12serviceplantab',
			[
				'label' => esc_html__( 'Right Box Monthly Subtitle', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '1style' ],
				'default' => esc_html__( 'billed monthly', 'emyui-core' ),
			
			]
		);
    $repeater->add_control(
			'button1style12serviceplantab',
			[
				'label' => esc_html__( 'Right Box Button', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '1style' ],
				'default' => esc_html__( 'Get Started Now', 'emyui-core' ),
			
			]
		);
    $repeater->add_control(
			'buttonlink1style12serviceplantab',
			[
				'label' => esc_html__( 'Right Box Button Link', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '1style' ],
				'default' => esc_html__( '#', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
			'hr2',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
                'condition' => [ 'boxstyleserviceplantab' => '1style' ],
                
			]
		);
        $repeater->add_control(
			'featuresnumber1style12serviceplantab',
			[
				'label' => esc_html__( 'Right Box Number of features', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
                'condition' => [ 'boxstyleserviceplantab' => '1style' ],
				'min' => 1,
				'max' => 8,
				'step' => 1,
				'default' => 8,
			]
		);
        $repeater->add_control(
			'1featurestyle12serviceplantab',
			[
				'label' => esc_html__( 'Right Box First Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber1style12serviceplantab',
                            'operator' => '>=',
                            'value' => '1'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '1style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has1featurestyle12serviceplantab',
            [
              'label' => esc_html__( 'Right Box First Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber1style12serviceplantab',
                        'operator' => '>=',
                        'value' => '1'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '1style'
                    ],
                ]
                ],
              'default' => 'rightboxstyle1included1',
              'options' => [
                'rightboxstyle1included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'rightboxstyle1notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
                'rightboxstyle1haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink1featurestyle12serviceplantab', [
                'label' => esc_html__( 'First Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber1style12serviceplantab',
                            'operator' => '>=',
                            'value' => '1'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '1style'
                        ],
                        [
                            'name' => 'has1featurestyle12serviceplantab',
                            'operator' => '===',
                            'value' => 'rightboxstyle1haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
          $repeater->add_control(
			'2featurestyle12serviceplantab',
			[
				'label' => esc_html__( 'Second Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber1style12serviceplantab',
                            'operator' => '>=',
                            'value' => '2'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '1style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has2featurestyle12serviceplantab',
            [
              'label' => esc_html__( 'Second Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber1style12serviceplantab',
                        'operator' => '>=',
                        'value' => '2'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '1style'
                    ],
                ]
                ],
              'default' => 'rightboxstyle1included1',
              'options' => [
                'rightboxstyle1included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'rightboxstyle1notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
                'rightboxstyle1haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink2featurestyle12serviceplantab', [
                'label' => esc_html__( 'Second Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber1style12serviceplantab',
                            'operator' => '>=',
                            'value' => '2'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '1style'
                        ],
                        [
                            'name' => 'has2featurestyle12serviceplantab',
                            'operator' => '===',
                            'value' => 'rightboxstyle1haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
          $repeater->add_control(
			'3featurestyle12serviceplantab',
			[
				'label' => esc_html__( 'Third Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber1style12serviceplantab',
                            'operator' => '>=',
                            'value' => '3'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '1style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has3featurestyle12serviceplantab',
            [
              'label' => esc_html__( 'Third Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber1style12serviceplantab',
                        'operator' => '>=',
                        'value' => '3'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '1style'
                    ],
                ]
                ],
              'default' => 'rightboxstyle1included1',
              'options' => [
                'rightboxstyle1included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'rightboxstyle1notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
                'rightboxstyle1haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink3featurestyle12serviceplantab', [
                'label' => esc_html__( 'Third Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber1style12serviceplantab',
                            'operator' => '>=',
                            'value' => '3'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '1style'
                        ],
                        [
                            'name' => 'has3featurestyle12serviceplantab',
                            'operator' => '===',
                            'value' => 'rightboxstyle1haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
          $repeater->add_control(
			'4featurestyle12serviceplantab',
			[
				'label' => esc_html__( 'Fourth Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber1style12serviceplantab',
                            'operator' => '>=',
                            'value' => '4'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '1style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has4featurestyle12serviceplantab',
            [
              'label' => esc_html__( 'Fourth Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber1style12serviceplantab',
                        'operator' => '>=',
                        'value' => '4'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '1style'
                    ],
                ]
                ],
              'default' => 'rightboxstyle1included1',
              'options' => [
                'rightboxstyle1included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'rightboxstyle1notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
                'rightboxstyle1haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink4featurestyle12serviceplantab', [
                'label' => esc_html__( 'FOURTH Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber1style12serviceplantab',
                            'operator' => '>=',
                            'value' => '4'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '1style'
                        ],
                        [
                            'name' => 'has4featurestyle12serviceplantab',
                            'operator' => '===',
                            'value' => 'rightboxstyle1haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
          $repeater->add_control(
			'5featurestyle12serviceplantab',
			[
				'label' => esc_html__( 'Fifth Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber1style12serviceplantab',
                            'operator' => '>=',
                            'value' => '5'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '1style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has5featurestyle12serviceplantab',
            [
              'label' => esc_html__( 'Fifth Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber1style12serviceplantab',
                        'operator' => '>=',
                        'value' => '5'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '1style'
                    ],
                ]
                ],
              'default' => 'rightboxstyle1included1',
              'options' => [
                'rightboxstyle1included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'rightboxstyle1notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
                'rightboxstyle1haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink5featurestyle12serviceplantab', [
                'label' => esc_html__( 'Fifth Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber1style12serviceplantab',
                            'operator' => '>=',
                            'value' => '5'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '1style'
                        ],
                        [
                            'name' => 'has5featurestyle12serviceplantab',
                            'operator' => '===',
                            'value' => 'rightboxstyle1haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
          $repeater->add_control(
			'6featurestyle12serviceplantab',
			[
				'label' => esc_html__( 'Sixth Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber1style12serviceplantab',
                            'operator' => '>=',
                            'value' => '6'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '1style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has6featurestyle12serviceplantab',
            [
              'label' => esc_html__( 'Sixth Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber1style12serviceplantab',
                        'operator' => '>=',
                        'value' => '6'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '1style'
                    ],
                ]
                ],
              'default' => 'rightboxstyle1included1',
              'options' => [
                'rightboxstyle1included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'rightboxstyle1notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
                'rightboxstyle1haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink6featurestyle12serviceplantab', [
                'label' => esc_html__( 'Sixth Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber1style12serviceplantab',
                            'operator' => '>=',
                            'value' => '6'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '1style'
                        ],
                        [
                            'name' => 'has6featurestyle12serviceplantab',
                            'operator' => '===',
                            'value' => 'rightboxstyle1haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
          $repeater->add_control(
			'7featurestyle12serviceplantab',
			[
				'label' => esc_html__( 'Seventh Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber1style12serviceplantab',
                            'operator' => '>=',
                            'value' => '7'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '1style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has7featurestyle12serviceplantab',
            [
              'label' => esc_html__( 'Seventh Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber1style12serviceplantab',
                        'operator' => '>=',
                        'value' => '7'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '1style'
                    ],
                ]
                ],
              'default' => 'rightboxstyle1included1',
              'options' => [
                'rightboxstyle1included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'rightboxstyle1notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
                'rightboxstyle1haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink7featurestyle12serviceplantab', [
                'label' => esc_html__( 'Seventh Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber1style12serviceplantab',
                            'operator' => '>=',
                            'value' => '7'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '1style'
                        ],
                        [
                            'name' => 'has7featurestyle12serviceplantab',
                            'operator' => '===',
                            'value' => 'rightboxstyle1haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
        $repeater->add_control(
			'8featurestyle12serviceplantab',
			[
				'label' => esc_html__( 'Eighth Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber1style12serviceplantab',
                            'operator' => '>=',
                            'value' => '8'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '1style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has8featurestyle12serviceplantab',
            [
              'label' => esc_html__( 'Eighth Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber1style12serviceplantab',
                        'operator' => '>=',
                        'value' => '8'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '1style'
                    ],
                ]
                ],
              'default' => 'rightboxstyle1included1',
              'options' => [
                'rightboxstyle1included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'rightboxstyle1notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
                'rightboxstyle1haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink8featurestyle12serviceplantab', [
                'label' => esc_html__( 'Eighth Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber1style12serviceplantab',
                            'operator' => '>=',
                            'value' => '8'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '1style'
                        ],
                        [
                            'name' => 'has8featurestyle12serviceplantab',
                            'operator' => '===',
                            'value' => 'rightboxstyle1haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
/* Right Box - First Style - ended */
/* Left Box - Second Style - started */
$repeater->add_control(
    'h1style2serviceplantab',
    [
        'label' => esc_html__( 'Left Box', 'emyui-core' ),
        'condition' => [ 'boxstyleserviceplantab' => '2style' ],
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);
$repeater->add_control(
    'title2style2serviceplantab',
    [
        'label' => esc_html__( 'Left Box Title', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'condition' => [ 'boxstyleserviceplantab' => '2style' ],
        'default' => esc_html__( 'Starter', 'emyui-core' ),
    
    ]
);
$repeater->add_control(
    'subtitle2style2serviceplantab',
    [
        'label' => esc_html__( 'Left Box Subitle', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'condition' => [ 'boxstyleserviceplantab' => '2style' ],
        'default' => esc_html__( 'ENCRYPTION EVERYWHERE', 'emyui-core' ),
    
    ]
);
$repeater->add_control(
    'price1style2serviceplantab',
    [
        'label' => esc_html__( 'Left Box price', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'condition' => [ 'boxstyleserviceplantab' => '2style' ],
        'default' => esc_html__( '$12', 'emyui-core' ),
    
    ]
);
$repeater->add_control(
    'desc1style2serviceplantab',
    [
        'label' => esc_html__( 'Left Box Description', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'condition' => [ 'boxstyleserviceplantab' => '2style' ],
        'default' => esc_html__( 'Only Onetime.', 'emyui-core' ),
    
    ]
);
$repeater->add_control(
    'button2style2serviceplantab',
    [
        'label' => esc_html__( 'Left Box Button', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'condition' => [ 'boxstyleserviceplantab' => '2style' ],
        'default' => esc_html__( 'Order Now', 'emyui-core' ),
    
    ]
);
$repeater->add_control(
    'buttonlink2style2serviceplantab',
    [
        'label' => esc_html__( 'Left Box Button Link', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'condition' => [ 'boxstyleserviceplantab' => '2style' ],
        'default' => esc_html__( '#', 'emyui-core' ),
    
    ]
);
$repeater->add_control(
    'hr1style2serviceplantab',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,
        'condition' => [ 'boxstyleserviceplantab' => '2style' ],

    ]
);
$repeater->add_control(
    'featuresnumber2style2serviceplantab',
    [
        'label' => esc_html__( 'Left Box Number of features', 'emyui-core' ),
        'condition' => [ 'boxstyleserviceplantab' => '2style' ],
        'type' => \Elementor\Controls_Manager::NUMBER,
        'min' => 1,
        'max' => 8,
        'step' => 1,
        'default' => 8,
    ]
);
$repeater->add_control(
    '1featurestyle2serviceplantab',
    [
        'label' => esc_html__( 'First Feature', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style2serviceplantab',
                    'operator' => '>=',
                    'value' => '1'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
            ]
            ],
        'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
    
    ]
);
$repeater->add_control(
    'has1featurestyle2serviceplantab',
    [
      'label' => esc_html__( 'First Feature Style', 'emyui-core' ),
      'type' => \Elementor\Controls_Manager::SELECT,                
      'conditions' => [
        'relation' => 'and',
        'terms' => [
            [
                'name' => 'featuresnumber2style2serviceplantab',
                'operator' => '>=',
                'value' => '1'
            ],
            [
                'name' => 'boxstyleserviceplantab',
                'operator' => '===',
                'value' => '2style'
            ],
        ]
        ],
      'default' => 'leftboxstyle2included1',
      'options' => [
        'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
        'leftboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
        'leftboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
      ],
    ]
  );
  $repeater->add_control(
    'haslink1featurestyle2serviceplantab', [
        'label' => esc_html__( 'First Feature Tooltip Description', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style2serviceplantab',
                    'operator' => '>=',
                    'value' => '1'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
                [
                    'name' => 'has1featurestyle2serviceplantab',
                    'operator' => '===',
                    'value' => 'leftboxstyle2haslink1'
                ],
            ]
            ],                
            'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
    ]
);
$repeater->add_control(
    'hr1featurestyle2serviceplantab',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,    
            'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style2serviceplantab',
                    'operator' => '>=',
                    'value' => '1'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
            ]
            ],   
    ]
);
  $repeater->add_control(
    '2featurestyle2serviceplantab',
    [
        'label' => esc_html__( 'Second Feature', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style2serviceplantab',
                    'operator' => '>=',
                    'value' => '2'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
            ]
            ],
        'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
    
    ]
);
$repeater->add_control(
    'has2featurestyle2serviceplantab',
    [
      'label' => esc_html__( 'Second Feature Style', 'emyui-core' ),
      'type' => \Elementor\Controls_Manager::SELECT,                
      'conditions' => [
        'relation' => 'and',
        'terms' => [
            [
                'name' => 'featuresnumber2style2serviceplantab',
                'operator' => '>=',
                'value' => '2'
            ],
            [
                'name' => 'boxstyleserviceplantab',
                'operator' => '===',
                'value' => '2style'
            ],
        ]
        ],
      'default' => 'leftboxstyle2included1',
      'options' => [
        'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
        'leftboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
        'leftboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
      ],
    ]
  );
  $repeater->add_control(
    'haslink2featurestyle2serviceplantab', [
        'label' => esc_html__( 'Second Feature Tooltip Description', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style2serviceplantab',
                    'operator' => '>=',
                    'value' => '2'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
                [
                    'name' => 'has2featurestyle2serviceplantab',
                    'operator' => '===',
                    'value' => 'leftboxstyle2haslink1'
                ],
            ]
            ],                
            'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
    ]
);
$repeater->add_control(
    'hr2featurestyle2serviceplantab',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,    
            'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style2serviceplantab',
                    'operator' => '>=',
                    'value' => '2'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
            ]
            ],   
    ]
);
  $repeater->add_control(
    '3featurestyle2serviceplantab',
    [
        'label' => esc_html__( 'Third Feature', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style2serviceplantab',
                    'operator' => '>=',
                    'value' => '3'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
            ]
            ],
        'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
    
    ]
);
$repeater->add_control(
    'has3featurestyle2serviceplantab',
    [
      'label' => esc_html__( 'Third Feature Style', 'emyui-core' ),
      'type' => \Elementor\Controls_Manager::SELECT,                
      'conditions' => [
        'relation' => 'and',
        'terms' => [
            [
                'name' => 'featuresnumber2style2serviceplantab',
                'operator' => '>=',
                'value' => '3'
            ],
            [
                'name' => 'boxstyleserviceplantab',
                'operator' => '===',
                'value' => '2style'
            ],
        ]
        ],
      'default' => 'leftboxstyle2included1',
      'options' => [
        'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
        'leftboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
        'leftboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
      ],
    ]
  );
  $repeater->add_control(
    'haslink3featurestyle2serviceplantab', [
        'label' => esc_html__( 'Third Feature Tooltip Description', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style2serviceplantab',
                    'operator' => '>=',
                    'value' => '3'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
                [
                    'name' => 'has3featurestyle2serviceplantab',
                    'operator' => '===',
                    'value' => 'leftboxstyle2haslink1'
                ],
            ]
            ],                
            'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
    ]
);
$repeater->add_control(
    'hr3featurestyle2serviceplantab',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,    
            'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style2serviceplantab',
                    'operator' => '>=',
                    'value' => '3'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
            ]
            ],   
    ]
);
  $repeater->add_control(
    '4featurestyle2serviceplantab',
    [
        'label' => esc_html__( 'Fourth Feature', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style2serviceplantab',
                    'operator' => '>=',
                    'value' => '4'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
            ]
            ],
        'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
    
    ]
);
$repeater->add_control(
    'has4featurestyle2serviceplantab',
    [
      'label' => esc_html__( 'Fourth Feature Style', 'emyui-core' ),
      'type' => \Elementor\Controls_Manager::SELECT,                
      'conditions' => [
        'relation' => 'and',
        'terms' => [
            [
                'name' => 'featuresnumber2style2serviceplantab',
                'operator' => '>=',
                'value' => '4'
            ],
            [
                'name' => 'boxstyleserviceplantab',
                'operator' => '===',
                'value' => '2style'
            ],
        ]
        ],
      'default' => 'leftboxstyle2included1',
      'options' => [
        'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
        'leftboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
        'leftboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
      ],
    ]
  );
  $repeater->add_control(
    'haslink4featurestyle2serviceplantab', [
        'label' => esc_html__( 'Fourth Feature Tooltip Description', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style2serviceplantab',
                    'operator' => '>=',
                    'value' => '4'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
                [
                    'name' => 'has4featurestyle2serviceplantab',
                    'operator' => '===',
                    'value' => 'leftboxstyle2haslink1'
                ],
            ]
            ],                
            'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
    ]
);
$repeater->add_control(
    'hr4featurestyle2serviceplantab',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,    
            'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style2serviceplantab',
                    'operator' => '>=',
                    'value' => '4'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
            ]
            ],   
    ]
);
  $repeater->add_control(
    '5featurestyle2serviceplantab',
    [
        'label' => esc_html__( 'Fifth Feature', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style2serviceplantab',
                    'operator' => '>=',
                    'value' => '5'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
            ]
            ],
        'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
    
    ]
);
$repeater->add_control(
    'has5featurestyle2serviceplantab',
    [
      'label' => esc_html__( 'Fifth Feature Style', 'emyui-core' ),
      'type' => \Elementor\Controls_Manager::SELECT,                
      'conditions' => [
        'relation' => 'and',
        'terms' => [
            [
                'name' => 'featuresnumber2style2serviceplantab',
                'operator' => '>=',
                'value' => '5'
            ],
            [
                'name' => 'boxstyleserviceplantab',
                'operator' => '===',
                'value' => '2style'
            ],
        ]
        ],
      'default' => 'leftboxstyle2included1',
      'options' => [
        'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
        'leftboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
        'leftboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
      ],
    ]
  );
  $repeater->add_control(
    'haslink5featurestyle2serviceplantab', [
        'label' => esc_html__( 'Fifth Feature Tooltip Description', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style2serviceplantab',
                    'operator' => '>=',
                    'value' => '5'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
                [
                    'name' => 'has2featurestyle2serviceplantab',
                    'operator' => '===',
                    'value' => 'leftboxstyle5haslink1'
                ],
            ]
            ],                
            'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
    ]
);
$repeater->add_control(
    'hr5featurestyle2serviceplantab',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,    
            'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style2serviceplantab',
                    'operator' => '>=',
                    'value' => '5'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
            ]
            ],   
    ]
);
  $repeater->add_control(
    '6featurestyle2serviceplantab',
    [
        'label' => esc_html__( 'Sixth Feature', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style2serviceplantab',
                    'operator' => '>=',
                    'value' => '6'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
            ]
            ],
        'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
    
    ]
);
$repeater->add_control(
    'has6featurestyle2serviceplantab',
    [
      'label' => esc_html__( 'Sixth Feature Style', 'emyui-core' ),
      'type' => \Elementor\Controls_Manager::SELECT,                
      'conditions' => [
        'relation' => 'and',
        'terms' => [
            [
                'name' => 'featuresnumber2style2serviceplantab',
                'operator' => '>=',
                'value' => '6'
            ],
            [
                'name' => 'boxstyleserviceplantab',
                'operator' => '===',
                'value' => '2style'
            ],
        ]
        ],
      'default' => 'leftboxstyle2included1',
      'options' => [
        'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
        'leftboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
        'leftboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
      ],
    ]
  );
  $repeater->add_control(
    'haslink6featurestyle2serviceplantab', [
        'label' => esc_html__( 'Sixth Feature Tooltip Description', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style2serviceplantab',
                    'operator' => '>=',
                    'value' => '6'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
                [
                    'name' => 'has6featurestyle2serviceplantab',
                    'operator' => '===',
                    'value' => 'leftboxstyle2haslink1'
                ],
            ]
            ],                
            'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
    ]
);
$repeater->add_control(
    'hr6featurestyle2serviceplantab',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,    
            'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style2serviceplantab',
                    'operator' => '>=',
                    'value' => '6'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
            ]
            ],   
    ]
);
  $repeater->add_control(
    '7featurestyle2serviceplantab',
    [
        'label' => esc_html__( 'Seventh Feature', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style2serviceplantab',
                    'operator' => '>=',
                    'value' => '7'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
            ]
            ],
        'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
    
    ]
);
$repeater->add_control(
    'has7featurestyle2serviceplantab',
    [
      'label' => esc_html__( 'Seventh Feature Style', 'emyui-core' ),
      'type' => \Elementor\Controls_Manager::SELECT,                
      'conditions' => [
        'relation' => 'and',
        'terms' => [
            [
                'name' => 'featuresnumber2style2serviceplantab',
                'operator' => '>=',
                'value' => '7'
            ],
            [
                'name' => 'boxstyleserviceplantab',
                'operator' => '===',
                'value' => '2style'
            ],
        ]
        ],
      'default' => 'leftboxstyle2included1',
      'options' => [
        'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
        'leftboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
        'leftboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
      ],
    ]
  );
  $repeater->add_control(
    'haslink7featurestyle2serviceplantab', [
        'label' => esc_html__( 'Seventh Feature Tooltip Description', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style2serviceplantab',
                    'operator' => '>=',
                    'value' => '7'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
                [
                    'name' => 'has7featurestyle2serviceplantab',
                    'operator' => '===',
                    'value' => 'leftboxstyle2haslink1'
                ],
            ]
            ],                
            'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
    ]
);
$repeater->add_control(
    'hr7featurestyle2serviceplantab',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,    
            'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style2serviceplantab',
                    'operator' => '>=',
                    'value' => '7'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
            ]
            ],   
    ]
);
$repeater->add_control(
    '8featurestyle2serviceplantab',
    [
        'label' => esc_html__( 'Eighth Feature', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style2serviceplantab',
                    'operator' => '>=',
                    'value' => '8'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
            ]
            ],
        'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
    
    ]
);
$repeater->add_control(
    'has8featurestyle2serviceplantab',
    [
      'label' => esc_html__( 'Eighth Feature Style', 'emyui-core' ),
      'type' => \Elementor\Controls_Manager::SELECT,                
      'conditions' => [
        'relation' => 'and',
        'terms' => [
            [
                'name' => 'featuresnumber2style2serviceplantab',
                'operator' => '>=',
                'value' => '8'
            ],
            [
                'name' => 'boxstyleserviceplantab',
                'operator' => '===',
                'value' => '2style'
            ],
        ]
        ],
      'default' => 'leftboxstyle2included1',
      'options' => [
        'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
        'leftboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
        'leftboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
      ],
    ]
  );
  $repeater->add_control(
    'haslink8featurestyle2serviceplantab', [
        'label' => esc_html__( 'Eighth Feature Tooltip Description', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style2serviceplantab',
                    'operator' => '>=',
                    'value' => '8'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
                [
                    'name' => 'has8featurestyle2serviceplantab',
                    'operator' => '===',
                    'value' => 'leftboxstyle2haslink1'
                ],
            ]
            ],                
            'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
    ]
);
$repeater->add_control(
    'hr8featurestyle2serviceplantab',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,    
            'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style2serviceplantab',
                    'operator' => '>=',
                    'value' => '8'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
            ]
            ],   
    ]
);
/* Left Box - Second Style - ended */
/* Middle Box - Second Style - started */
$repeater->add_control(
    'h1style22serviceplantab',
    [
        'label' => esc_html__( 'Middle Box', 'emyui-core' ),
        'condition' => [ 'boxstyleserviceplantab' => '2style' ],
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);
$repeater->add_control(
    'title2style22serviceplantab',
    [
        'label' => esc_html__( 'Middle Box Title', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'condition' => [ 'boxstyleserviceplantab' => '2style' ],
        'default' => esc_html__( 'Starter', 'emyui-core' ),
    
    ]
);
$repeater->add_control(
    'subtitle2style22serviceplantab',
    [
        'label' => esc_html__( 'Middle Box Subitle', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'condition' => [ 'boxstyleserviceplantab' => '2style' ],
        'default' => esc_html__( 'ENCRYPTION EVERYWHERE', 'emyui-core' ),
    
    ]
);
$repeater->add_control(
    'price1style22serviceplantab',
    [
        'label' => esc_html__( 'Middle Box Monthly price', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'condition' => [ 'boxstyleserviceplantab' => '2style' ],
        'default' => esc_html__( '$12', 'emyui-core' ),
    
    ]
);
$repeater->add_control(
    'desc1style22serviceplantab',
    [
        'label' => esc_html__( 'Left Box Description', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'condition' => [ 'boxstyleserviceplantab' => '2style' ],
        'default' => esc_html__( 'Only Onetime.', 'emyui-core' ),
    
    ]
);
$repeater->add_control(
    'button2style22serviceplantab',
    [
        'label' => esc_html__( 'Middle Box Button', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'condition' => [ 'boxstyleserviceplantab' => '2style' ],
        'default' => esc_html__( 'Order Now', 'emyui-core' ),
    
    ]
);
$repeater->add_control(
    'buttonlink2style22serviceplantab',
    [
        'label' => esc_html__( 'Middle Box Button Link', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'condition' => [ 'boxstyleserviceplantab' => '2style' ],
        'default' => esc_html__( '#', 'emyui-core' ),
    
    ]
);
$repeater->add_control(
    'hr1style22serviceplantab',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,
        'condition' => [ 'boxstyleserviceplantab' => '2style' ],

    ]
);
$repeater->add_control(
    'featuresnumber2style22serviceplantab',
    [
        'label' => esc_html__( 'Middle Box Number of features', 'emyui-core' ),
        'condition' => [ 'boxstyleserviceplantab' => '2style' ],
        'type' => \Elementor\Controls_Manager::NUMBER,
        'min' => 1,
        'max' => 8,
        'step' => 1,
        'default' => 8,
    ]
);
$repeater->add_control(
    '1featurestyle22serviceplantab',
    [
        'label' => esc_html__( 'First Feature', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style22serviceplantab',
                    'operator' => '>=',
                    'value' => '1'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
            ]
            ],
        'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
    
    ]
);
$repeater->add_control(
    'has1featurestyle22serviceplantab',
    [
      'label' => esc_html__( 'First Feature Style', 'emyui-core' ),
      'type' => \Elementor\Controls_Manager::SELECT,                
      'conditions' => [
        'relation' => 'and',
        'terms' => [
            [
                'name' => 'featuresnumber2style22serviceplantab',
                'operator' => '>=',
                'value' => '1'
            ],
            [
                'name' => 'boxstyleserviceplantab',
                'operator' => '===',
                'value' => '2style'
            ],
        ]
        ],
      'default' => 'leftboxstyle2included1',
      'options' => [
        'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
        'leftboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
        'leftboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
      ],
    ]
  );
  $repeater->add_control(
    'haslink1featurestyle22serviceplantab', [
        'label' => esc_html__( 'First Feature Tooltip Description', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style22serviceplantab',
                    'operator' => '>=',
                    'value' => '1'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
                [
                    'name' => 'has1featurestyle22serviceplantab',
                    'operator' => '===',
                    'value' => 'leftboxstyle2haslink1'
                ],
            ]
            ],                
            'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
    ]
);
$repeater->add_control(
    'hr1featurestyle22serviceplantab',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,    
            'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style22serviceplantab',
                    'operator' => '>=',
                    'value' => '1'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
            ]
            ],   
    ]
);
  $repeater->add_control(
    '2featurestyle22serviceplantab',
    [
        'label' => esc_html__( 'Second Feature', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style22serviceplantab',
                    'operator' => '>=',
                    'value' => '2'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
            ]
            ],
        'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
    
    ]
);
$repeater->add_control(
    'has2featurestyle22serviceplantab',
    [
      'label' => esc_html__( 'Second Feature Style', 'emyui-core' ),
      'type' => \Elementor\Controls_Manager::SELECT,                
      'conditions' => [
        'relation' => 'and',
        'terms' => [
            [
                'name' => 'featuresnumber2style22serviceplantab',
                'operator' => '>=',
                'value' => '2'
            ],
            [
                'name' => 'boxstyleserviceplantab',
                'operator' => '===',
                'value' => '2style'
            ],
        ]
        ],
      'default' => 'leftboxstyle2included1',
      'options' => [
        'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
        'leftboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
        'leftboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
      ],
    ]
  );
  $repeater->add_control(
    'haslink2featurestyle22serviceplantab', [
        'label' => esc_html__( 'Second Feature Tooltip Description', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style22serviceplantab',
                    'operator' => '>=',
                    'value' => '2'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
                [
                    'name' => 'has2featurestyle22serviceplantab',
                    'operator' => '===',
                    'value' => 'leftboxstyle2haslink1'
                ],
            ]
            ],                
            'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
    ]
);
$repeater->add_control(
    'hr2featurestyle22serviceplantab',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,    
            'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style22serviceplantab',
                    'operator' => '>=',
                    'value' => '2'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
            ]
            ],   
    ]
);
  $repeater->add_control(
    '3featurestyle22serviceplantab',
    [
        'label' => esc_html__( 'Third Feature', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style22serviceplantab',
                    'operator' => '>=',
                    'value' => '3'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
            ]
            ],
        'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
    
    ]
);
$repeater->add_control(
    'has3featurestyle22serviceplantab',
    [
      'label' => esc_html__( 'Third Feature Style', 'emyui-core' ),
      'type' => \Elementor\Controls_Manager::SELECT,                
      'conditions' => [
        'relation' => 'and',
        'terms' => [
            [
                'name' => 'featuresnumber2style22serviceplantab',
                'operator' => '>=',
                'value' => '3'
            ],
            [
                'name' => 'boxstyleserviceplantab',
                'operator' => '===',
                'value' => '2style'
            ],
        ]
        ],
      'default' => 'leftboxstyle2included1',
      'options' => [
        'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
        'leftboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
        'leftboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
      ],
    ]
  );
  $repeater->add_control(
    'haslink3featurestyle22serviceplantab', [
        'label' => esc_html__( 'Third Feature Tooltip Description', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style22serviceplantab',
                    'operator' => '>=',
                    'value' => '3'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
                [
                    'name' => 'has3featurestyle22serviceplantab',
                    'operator' => '===',
                    'value' => 'leftboxstyle2haslink1'
                ],
            ]
            ],                
            'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
    ]
);
$repeater->add_control(
    'hr3featurestyle22serviceplantab',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,    
            'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style22serviceplantab',
                    'operator' => '>=',
                    'value' => '3'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
            ]
            ],   
    ]
);
  $repeater->add_control(
    '4featurestyle22serviceplantab',
    [
        'label' => esc_html__( 'Fourth Feature', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style22serviceplantab',
                    'operator' => '>=',
                    'value' => '4'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
            ]
            ],
        'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
    
    ]
);
$repeater->add_control(
    'has4featurestyle22serviceplantab',
    [
      'label' => esc_html__( 'Fourth Feature Style', 'emyui-core' ),
      'type' => \Elementor\Controls_Manager::SELECT,                
      'conditions' => [
        'relation' => 'and',
        'terms' => [
            [
                'name' => 'featuresnumber2style22serviceplantab',
                'operator' => '>=',
                'value' => '4'
            ],
            [
                'name' => 'boxstyleserviceplantab',
                'operator' => '===',
                'value' => '2style'
            ],
        ]
        ],
      'default' => 'leftboxstyle2included1',
      'options' => [
        'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
        'leftboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
        'leftboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
      ],
    ]
  );
  $repeater->add_control(
    'haslink4featurestyle22serviceplantab', [
        'label' => esc_html__( 'Fourth Feature Tooltip Description', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style22serviceplantab',
                    'operator' => '>=',
                    'value' => '4'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
                [
                    'name' => 'has4featurestyle22serviceplantab',
                    'operator' => '===',
                    'value' => 'leftboxstyle2haslink1'
                ],
            ]
            ],                
            'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
    ]
);
$repeater->add_control(
    'hr4featurestyle22serviceplantab',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,    
            'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style22serviceplantab',
                    'operator' => '>=',
                    'value' => '4'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
            ]
            ],   
    ]
);
  $repeater->add_control(
    '5featurestyle22serviceplantab',
    [
        'label' => esc_html__( 'Fifth Feature', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style22serviceplantab',
                    'operator' => '>=',
                    'value' => '5'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
            ]
            ],
        'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
    
    ]
);
$repeater->add_control(
    'has5featurestyle22serviceplantab',
    [
      'label' => esc_html__( 'Fifth Feature Style', 'emyui-core' ),
      'type' => \Elementor\Controls_Manager::SELECT,                
      'conditions' => [
        'relation' => 'and',
        'terms' => [
            [
                'name' => 'featuresnumber2style22serviceplantab',
                'operator' => '>=',
                'value' => '5'
            ],
            [
                'name' => 'boxstyleserviceplantab',
                'operator' => '===',
                'value' => '2style'
            ],
        ]
        ],
      'default' => 'leftboxstyle2included1',
      'options' => [
        'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
        'leftboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
        'leftboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
      ],
    ]
  );
  $repeater->add_control(
    'haslink5featurestyle22serviceplantab', [
        'label' => esc_html__( 'Fifth Feature Tooltip Description', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style22serviceplantab',
                    'operator' => '>=',
                    'value' => '5'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
                [
                    'name' => 'has2featurestyle22serviceplantab',
                    'operator' => '===',
                    'value' => 'leftboxstyle5haslink1'
                ],
            ]
            ],                
            'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
    ]
);
$repeater->add_control(
    'hr5featurestyle22serviceplantab',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,    
            'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style22serviceplantab',
                    'operator' => '>=',
                    'value' => '5'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
            ]
            ],   
    ]
);
  $repeater->add_control(
    '6featurestyle22serviceplantab',
    [
        'label' => esc_html__( 'Sixth Feature', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style22serviceplantab',
                    'operator' => '>=',
                    'value' => '6'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
            ]
            ],
        'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
    
    ]
);
$repeater->add_control(
    'has6featurestyle22serviceplantab',
    [
      'label' => esc_html__( 'Sixth Feature Style', 'emyui-core' ),
      'type' => \Elementor\Controls_Manager::SELECT,                
      'conditions' => [
        'relation' => 'and',
        'terms' => [
            [
                'name' => 'featuresnumber2style22serviceplantab',
                'operator' => '>=',
                'value' => '6'
            ],
            [
                'name' => 'boxstyleserviceplantab',
                'operator' => '===',
                'value' => '2style'
            ],
        ]
        ],
      'default' => 'leftboxstyle2included1',
      'options' => [
        'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
        'leftboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
        'leftboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
      ],
    ]
  );
  $repeater->add_control(
    'haslink6featurestyle22serviceplantab', [
        'label' => esc_html__( 'Sixth Feature Tooltip Description', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style22serviceplantab',
                    'operator' => '>=',
                    'value' => '6'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
                [
                    'name' => 'has6featurestyle22serviceplantab',
                    'operator' => '===',
                    'value' => 'leftboxstyle2haslink1'
                ],
            ]
            ],                
            'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
    ]
);
$repeater->add_control(
    'hr6featurestyle22serviceplantab',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,    
            'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style22serviceplantab',
                    'operator' => '>=',
                    'value' => '6'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
            ]
            ],   
    ]
);
  $repeater->add_control(
    '7featurestyle22serviceplantab',
    [
        'label' => esc_html__( 'Seventh Feature', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style22serviceplantab',
                    'operator' => '>=',
                    'value' => '7'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
            ]
            ],
        'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
    
    ]
);
$repeater->add_control(
    'has7featurestyle22serviceplantab',
    [
      'label' => esc_html__( 'Seventh Feature Style', 'emyui-core' ),
      'type' => \Elementor\Controls_Manager::SELECT,                
      'conditions' => [
        'relation' => 'and',
        'terms' => [
            [
                'name' => 'featuresnumber2style22serviceplantab',
                'operator' => '>=',
                'value' => '7'
            ],
            [
                'name' => 'boxstyleserviceplantab',
                'operator' => '===',
                'value' => '2style'
            ],
        ]
        ],
      'default' => 'leftboxstyle2included1',
      'options' => [
        'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
        'leftboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
        'leftboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
      ],
    ]
  );
  $repeater->add_control(
    'haslink7featurestyle22serviceplantab', [
        'label' => esc_html__( 'Seventh Feature Tooltip Description', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style22serviceplantab',
                    'operator' => '>=',
                    'value' => '7'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
                [
                    'name' => 'has7featurestyle22serviceplantab',
                    'operator' => '===',
                    'value' => 'leftboxstyle2haslink1'
                ],
            ]
            ],                
            'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
    ]
);
$repeater->add_control(
    'hr7featurestyle22serviceplantab',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,    
            'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style22serviceplantab',
                    'operator' => '>=',
                    'value' => '7'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
            ]
            ],   
    ]
);
$repeater->add_control(
    '8featurestyle22serviceplantab',
    [
        'label' => esc_html__( 'Eighth Feature', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style22serviceplantab',
                    'operator' => '>=',
                    'value' => '8'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
            ]
            ],
        'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
    
    ]
);
$repeater->add_control(
    'has8featurestyle22serviceplantab',
    [
      'label' => esc_html__( 'Eighth Feature Style', 'emyui-core' ),
      'type' => \Elementor\Controls_Manager::SELECT,                
      'conditions' => [
        'relation' => 'and',
        'terms' => [
            [
                'name' => 'featuresnumber2style22serviceplantab',
                'operator' => '>=',
                'value' => '8'
            ],
            [
                'name' => 'boxstyleserviceplantab',
                'operator' => '===',
                'value' => '2style'
            ],
        ]
        ],
      'default' => 'leftboxstyle2included1',
      'options' => [
        'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
        'leftboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
        'leftboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
      ],
    ]
  );
  $repeater->add_control(
    'haslink8featurestyle22serviceplantab', [
        'label' => esc_html__( 'Eighth Feature Tooltip Description', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style22serviceplantab',
                    'operator' => '>=',
                    'value' => '8'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
                [
                    'name' => 'has8featurestyle22serviceplantab',
                    'operator' => '===',
                    'value' => 'leftboxstyle2haslink1'
                ],
            ]
            ],                
            'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
    ]
);
$repeater->add_control(
    'hr8featurestyle22serviceplantab',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,    
            'conditions' => [
            'relation' => 'and',
            'terms' => [
                [
                    'name' => 'featuresnumber2style22serviceplantab',
                    'operator' => '>=',
                    'value' => '8'
                ],
                [
                    'name' => 'boxstyleserviceplantab',
                    'operator' => '===',
                    'value' => '2style'
                ],
            ]
            ],   
    ]
); 
/* Middle Box - Second Style - ended */
/* Right Box - Second Style - started */
$repeater->add_control(
    'h1style23serviceplantab',
    [
        'label' => esc_html__( 'Right Box', 'emyui-core' ),
        'condition' => [ 'boxstyleserviceplantab' => '2style' ],
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);
   $repeater->add_control(
			'title2style23serviceplantab',
			[
				'label' => esc_html__( 'Right Box Title', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '2style' ],
				'default' => esc_html__( 'Starter', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
			'subtitle2style23serviceplantab',
			[
				'label' => esc_html__( 'Right Box Subitle', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '2style' ],
				'default' => esc_html__( 'ENCRYPTION EVERYWHERE', 'emyui-core' ),
			
			]
		);
    $repeater->add_control(
			'price1style23serviceplantab',
			[
				'label' => esc_html__( 'Right Box Monthly price', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '2style' ],
				'default' => esc_html__( '$12', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'desc1style23serviceplantab',
            [
                'label' => esc_html__( 'Left Box Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '2style' ],
                'default' => esc_html__( 'Only Onetime.', 'emyui-core' ),
            
            ]
        );
    $repeater->add_control(
			'button2style23serviceplantab',
			[
				'label' => esc_html__( 'Right Box Button', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '2style' ],
				'default' => esc_html__( 'Order Now', 'emyui-core' ),
			
			]
		);
    $repeater->add_control(
			'buttonlink2style23serviceplantab',
			[
				'label' => esc_html__( 'Right Box Button Link', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '2style' ],
				'default' => esc_html__( '#', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
			'hr1style23serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
                'condition' => [ 'boxstyleserviceplantab' => '2style' ],

			]
		);
        $repeater->add_control(
			'featuresnumber2style23serviceplantab',
			[
				'label' => esc_html__( 'Right Box Number of features', 'emyui-core' ),
                'condition' => [ 'boxstyleserviceplantab' => '2style' ],
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 8,
				'step' => 1,
				'default' => 8,
			]
		);
        $repeater->add_control(
			'1featurestyle23serviceplantab',
			[
				'label' => esc_html__( 'First Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style23serviceplantab',
                            'operator' => '>=',
                            'value' => '1'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '2style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has1featurestyle23serviceplantab',
            [
              'label' => esc_html__( 'First Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style23serviceplantab',
                        'operator' => '>=',
                        'value' => '1'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '2style'
                    ],
                ]
                ],
              'default' => 'rightboxstyle2included1',
              'options' => [
                'rightboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'rightboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
                'rightboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink1featurestyle23serviceplantab', [
                'label' => esc_html__( 'First Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style23serviceplantab',
                            'operator' => '>=',
                            'value' => '1'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '2style'
                        ],
                        [
                            'name' => 'has1featurestyle23serviceplantab',
                            'operator' => '===',
                            'value' => 'rightboxstyle2haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
        $repeater->add_control(
			'hr1featurestyle23serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style23serviceplantab',
                            'operator' => '>=',
                            'value' => '1'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '2style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'2featurestyle23serviceplantab',
			[
				'label' => esc_html__( 'Second Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style23serviceplantab',
                            'operator' => '>=',
                            'value' => '2'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '2style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has2featurestyle23serviceplantab',
            [
              'label' => esc_html__( 'Second Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style23serviceplantab',
                        'operator' => '>=',
                        'value' => '2'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '2style'
                    ],
                ]
                ],
              'default' => 'rightboxstyle2included1',
              'options' => [
                'rightboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'rightboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
                'rightboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink2featurestyle23serviceplantab', [
                'label' => esc_html__( 'Second Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style23serviceplantab',
                            'operator' => '>=',
                            'value' => '2'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '2style'
                        ],
                        [
                            'name' => 'has2featurestyle23serviceplantab',
                            'operator' => '===',
                            'value' => 'rightboxstyle2haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
        $repeater->add_control(
			'hr2featurestyle23serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style23serviceplantab',
                            'operator' => '>=',
                            'value' => '2'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '2style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'3featurestyle23serviceplantab',
			[
				'label' => esc_html__( 'Third Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style23serviceplantab',
                            'operator' => '>=',
                            'value' => '3'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '2style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has3featurestyle23serviceplantab',
            [
              'label' => esc_html__( 'Third Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style23serviceplantab',
                        'operator' => '>=',
                        'value' => '3'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '2style'
                    ],
                ]
                ],
              'default' => 'rightboxstyle2included1',
              'options' => [
                'rightboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'rightboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
                'rightboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink3featurestyle23serviceplantab', [
                'label' => esc_html__( 'Third Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style23serviceplantab',
                            'operator' => '>=',
                            'value' => '3'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '2style'
                        ],
                        [
                            'name' => 'has3featurestyle23serviceplantab',
                            'operator' => '===',
                            'value' => 'rightboxstyle2haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
        $repeater->add_control(
			'hr3featurestyle23serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style23serviceplantab',
                            'operator' => '>=',
                            'value' => '3'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '2style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'4featurestyle23serviceplantab',
			[
				'label' => esc_html__( 'Fourth Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style23serviceplantab',
                            'operator' => '>=',
                            'value' => '4'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '2style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has4featurestyle23serviceplantab',
            [
              'label' => esc_html__( 'Fourth Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style23serviceplantab',
                        'operator' => '>=',
                        'value' => '4'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '2style'
                    ],
                ]
                ],
              'default' => 'rightboxstyle2included1',
              'options' => [
                'rightboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'rightboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
                'rightboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink4featurestyle23serviceplantab', [
                'label' => esc_html__( 'Fourth Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style23serviceplantab',
                            'operator' => '>=',
                            'value' => '4'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '2style'
                        ],
                        [
                            'name' => 'has4featurestyle23serviceplantab',
                            'operator' => '===',
                            'value' => 'rightboxstyle2haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
        $repeater->add_control(
			'hr4featurestyle23serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style23serviceplantab',
                            'operator' => '>=',
                            'value' => '4'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '2style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'5featurestyle23serviceplantab',
			[
				'label' => esc_html__( 'Fifth Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style23serviceplantab',
                            'operator' => '>=',
                            'value' => '5'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '2style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has5featurestyle23serviceplantab',
            [
              'label' => esc_html__( 'Fifth Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style23serviceplantab',
                        'operator' => '>=',
                        'value' => '5'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '2style'
                    ],
                ]
                ],
              'default' => 'rightboxstyle2included1',
              'options' => [
                'rightboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'rightboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
                'rightboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink5featurestyle23serviceplantab', [
                'label' => esc_html__( 'Fifth Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style23serviceplantab',
                            'operator' => '>=',
                            'value' => '5'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '2style'
                        ],
                        [
                            'name' => 'has2featurestyle23serviceplantab',
                            'operator' => '===',
                            'value' => 'leftboxstyle5haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
        $repeater->add_control(
			'hr5featurestyle23serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style23serviceplantab',
                            'operator' => '>=',
                            'value' => '5'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '2style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'6featurestyle23serviceplantab',
			[
				'label' => esc_html__( 'Sixth Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style23serviceplantab',
                            'operator' => '>=',
                            'value' => '6'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '2style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has6featurestyle23serviceplantab',
            [
              'label' => esc_html__( 'Sixth Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style23serviceplantab',
                        'operator' => '>=',
                        'value' => '6'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '2style'
                    ],
                ]
                ],
              'default' => 'rightboxstyle2included1',
              'options' => [
                'rightboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'rightboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
                'rightboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink6featurestyle23serviceplantab', [
                'label' => esc_html__( 'Sixth Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style23serviceplantab',
                            'operator' => '>=',
                            'value' => '6'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '2style'
                        ],
                        [
                            'name' => 'has6featurestyle23serviceplantab',
                            'operator' => '===',
                            'value' => 'rightboxstyle2haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
        $repeater->add_control(
			'hr6featurestyle23serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style23serviceplantab',
                            'operator' => '>=',
                            'value' => '6'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '2style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'7featurestyle23serviceplantab',
			[
				'label' => esc_html__( 'Seventh Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style23serviceplantab',
                            'operator' => '>=',
                            'value' => '7'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '2style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has7featurestyle23serviceplantab',
            [
              'label' => esc_html__( 'Seventh Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style23serviceplantab',
                        'operator' => '>=',
                        'value' => '7'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '2style'
                    ],
                ]
                ],
              'default' => 'rightboxstyle2included1',
              'options' => [
                'rightboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'rightboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
                'rightboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink7featurestyle23serviceplantab', [
                'label' => esc_html__( 'Seventh Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style23serviceplantab',
                            'operator' => '>=',
                            'value' => '7'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '2style'
                        ],
                        [
                            'name' => 'has7featurestyle23serviceplantab',
                            'operator' => '===',
                            'value' => 'rightboxstyle2haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
        $repeater->add_control(
			'hr7featurestyle23serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style23serviceplantab',
                            'operator' => '>=',
                            'value' => '7'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '2style'
                        ],
                    ]
                    ],   
			]
		);
        $repeater->add_control(
			'8featurestyle23serviceplantab',
			[
				'label' => esc_html__( 'Eighth Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style23serviceplantab',
                            'operator' => '>=',
                            'value' => '8'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '2style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has8featurestyle23serviceplantab',
            [
              'label' => esc_html__( 'Eighth Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style23serviceplantab',
                        'operator' => '>=',
                        'value' => '8'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '2style'
                    ],
                ]
                ],
              'default' => 'rightboxstyle2included1',
              'options' => [
                'rightboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'rightboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
                'rightboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink8featurestyle23serviceplantab', [
                'label' => esc_html__( 'Eighth Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style23serviceplantab',
                            'operator' => '>=',
                            'value' => '8'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '2style'
                        ],
                        [
                            'name' => 'has8featurestyle23serviceplantab',
                            'operator' => '===',
                            'value' => 'rightboxstyle2haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
        $repeater->add_control(
			'hr8featurestyle23serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style23serviceplantab',
                            'operator' => '>=',
                            'value' => '8'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '2style'
                        ],
                    ]
                    ],   
			]
		); 
/* Right Box - Second Style - ended */
/* Left Box - Third Style - started */
$repeater->add_control(
    'h1style31serviceplantab',
    [
        'label' => esc_html__( 'Left Box', 'emyui-core' ),
        'condition' => [ 'boxstyleserviceplantab' => '3style' ],
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);
   $repeater->add_control(
			'titlestyle31serviceplantab',
			[
				'label' => esc_html__( 'Left Box Title', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '3style' ],
				'default' => esc_html__( 'counter strike', 'emyui-core' ),
			
			]
		);
    $repeater->add_control(
			'pricestyle31serviceplantab',
			[
				'label' => esc_html__( 'Left Box Monthly price', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '3style' ],
				'default' => esc_html__( '$12', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'periodstyle31serviceplantab',
            [
                'label' => esc_html__( 'Left Box Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '3style' ],
                'default' => esc_html__( 'Monthly', 'emyui-core' ),
            
            ]
        );
        $repeater->add_control(
               'imgstyle31serviceplantab',
               [
                   'label' => esc_html__( 'Image', 'emyui-core' ),
                   'type' => \Elementor\Controls_Manager::MEDIA,
                   'condition' => [ 'boxstyleserviceplantab' => '3style' ],  
               ]
           );
    $repeater->add_control(
			'buttonstyle31serviceplantab',
			[
				'label' => esc_html__( 'Left Box Button', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '3style' ],
				'default' => esc_html__( 'Order Now', 'emyui-core' ),
			
			]
		);
    $repeater->add_control(
			'buttonlinkstyle31serviceplantab',
			[
				'label' => esc_html__( 'Left Box Button Link', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '3style' ],
				'default' => esc_html__( '#', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
			'hr1style31serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
                'condition' => [ 'boxstyleserviceplantab' => '3style' ],
			]
		);
        $repeater->add_control(
			'featuresnumber2style31serviceplantab',
			[
				'label' => esc_html__( 'Left Box Number of features', 'emyui-core' ),
                'condition' => [ 'boxstyleserviceplantab' => '3style' ],
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 8,
				'step' => 1,
				'default' => 8,
			]
		);
        $repeater->add_control(
			'1featurestyle31serviceplantab',
			[
				'label' => esc_html__( 'First Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style31serviceplantab',
                            'operator' => '>=',
                            'value' => '1'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has1featurestyle31serviceplantab',
            [
              'label' => esc_html__( 'First Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style31serviceplantab',
                        'operator' => '>=',
                        'value' => '1'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '3style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle2included1',
              'options' => [
                'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink1featurestyle31serviceplantab', [
                'label' => esc_html__( 'First Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style31serviceplantab',
                            'operator' => '>=',
                            'value' => '1'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                        [
                            'name' => 'has1featurestyle31serviceplantab',
                            'operator' => '===',
                            'value' => 'leftboxstyle2haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
        $repeater->add_control(
			'hr1featurestyle31serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style31serviceplantab',
                            'operator' => '>=',
                            'value' => '1'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'2featurestyle31serviceplantab',
			[
				'label' => esc_html__( 'Second Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style31serviceplantab',
                            'operator' => '>=',
                            'value' => '2'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has2featurestyle31serviceplantab',
            [
              'label' => esc_html__( 'Second Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style31serviceplantab',
                        'operator' => '>=',
                        'value' => '2'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '3style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle2included1',
              'options' => [
                'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink2featurestyle31serviceplantab', [
                'label' => esc_html__( 'Second Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style31serviceplantab',
                            'operator' => '>=',
                            'value' => '2'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                        [
                            'name' => 'has2featurestyle31serviceplantab',
                            'operator' => '===',
                            'value' => 'leftboxstyle2haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
        $repeater->add_control(
			'hr2featurestyle31serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style31serviceplantab',
                            'operator' => '>=',
                            'value' => '2'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'3featurestyle31serviceplantab',
			[
				'label' => esc_html__( 'Third Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style31serviceplantab',
                            'operator' => '>=',
                            'value' => '3'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has3featurestyle31serviceplantab',
            [
              'label' => esc_html__( 'Third Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style31serviceplantab',
                        'operator' => '>=',
                        'value' => '3'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '3style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle2included1',
              'options' => [
                'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink3featurestyle31serviceplantab', [
                'label' => esc_html__( 'Third Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style31serviceplantab',
                            'operator' => '>=',
                            'value' => '3'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                        [
                            'name' => 'has3featurestyle31serviceplantab',
                            'operator' => '===',
                            'value' => 'leftboxstyle2haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
        $repeater->add_control(
			'hr3featurestyle31serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style31serviceplantab',
                            'operator' => '>=',
                            'value' => '3'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'4featurestyle31serviceplantab',
			[
				'label' => esc_html__( 'Fourth Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style31serviceplantab',
                            'operator' => '>=',
                            'value' => '4'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has4featurestyle31serviceplantab',
            [
              'label' => esc_html__( 'Fourth Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style31serviceplantab',
                        'operator' => '>=',
                        'value' => '4'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '3style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle2included1',
              'options' => [
                'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink4featurestyle31serviceplantab', [
                'label' => esc_html__( 'Fourth Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style31serviceplantab',
                            'operator' => '>=',
                            'value' => '4'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                        [
                            'name' => 'has4featurestyle31serviceplantab',
                            'operator' => '===',
                            'value' => 'leftboxstyle2haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
        $repeater->add_control(
			'hr4featurestyle31serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style31serviceplantab',
                            'operator' => '>=',
                            'value' => '4'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'5featurestyle31serviceplantab',
			[
				'label' => esc_html__( 'Fifth Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style31serviceplantab',
                            'operator' => '>=',
                            'value' => '5'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has5featurestyle31serviceplantab',
            [
              'label' => esc_html__( 'Fifth Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style31serviceplantab',
                        'operator' => '>=',
                        'value' => '5'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '3style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle2included1',
              'options' => [
                'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink5featurestyle31serviceplantab', [
                'label' => esc_html__( 'Fifth Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style31serviceplantab',
                            'operator' => '>=',
                            'value' => '5'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                        [
                            'name' => 'has2featurestyle31serviceplantab',
                            'operator' => '===',
                            'value' => 'leftboxstyle5haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
        $repeater->add_control(
			'hr5featurestyle31serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style31serviceplantab',
                            'operator' => '>=',
                            'value' => '5'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'6featurestyle31serviceplantab',
			[
				'label' => esc_html__( 'Sixth Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style31serviceplantab',
                            'operator' => '>=',
                            'value' => '6'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has6featurestyle31serviceplantab',
            [
              'label' => esc_html__( 'Sixth Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style31serviceplantab',
                        'operator' => '>=',
                        'value' => '6'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '3style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle2included1',
              'options' => [
                'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink6featurestyle31serviceplantab', [
                'label' => esc_html__( 'Sixth Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style31serviceplantab',
                            'operator' => '>=',
                            'value' => '6'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                        [
                            'name' => 'has6featurestyle31serviceplantab',
                            'operator' => '===',
                            'value' => 'leftboxstyle2haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
        $repeater->add_control(
			'hr6featurestyle31serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style31serviceplantab',
                            'operator' => '>=',
                            'value' => '6'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'7featurestyle31serviceplantab',
			[
				'label' => esc_html__( 'Seventh Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style31serviceplantab',
                            'operator' => '>=',
                            'value' => '7'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has7featurestyle31serviceplantab',
            [
              'label' => esc_html__( 'Seventh Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style31serviceplantab',
                        'operator' => '>=',
                        'value' => '7'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '3style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle2included1',
              'options' => [
                'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink7featurestyle31serviceplantab', [
                'label' => esc_html__( 'Seventh Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style31serviceplantab',
                            'operator' => '>=',
                            'value' => '7'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                        [
                            'name' => 'has7featurestyle31serviceplantab',
                            'operator' => '===',
                            'value' => 'leftboxstyle2haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
        $repeater->add_control(
			'hr7featurestyle31serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style31serviceplantab',
                            'operator' => '>=',
                            'value' => '7'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],   
			]
		);
        $repeater->add_control(
			'8featurestyle31serviceplantab',
			[
				'label' => esc_html__( 'Eighth Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style31serviceplantab',
                            'operator' => '>=',
                            'value' => '8'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has8featurestyle31serviceplantab',
            [
              'label' => esc_html__( 'Eighth Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style31serviceplantab',
                        'operator' => '>=',
                        'value' => '8'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '3style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle2included1',
              'options' => [
                'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink8featurestyle31serviceplantab', [
                'label' => esc_html__( 'Eighth Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style31serviceplantab',
                            'operator' => '>=',
                            'value' => '8'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                        [
                            'name' => 'has8featurestyle31serviceplantab',
                            'operator' => '===',
                            'value' => 'leftboxstyle2haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
        $repeater->add_control(
			'hr8featurestyle31serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style31serviceplantab',
                            'operator' => '>=',
                            'value' => '8'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],   
			]
		); 
/* Left Box - Third Style - ended */
/* Middle Box - Third Style - started */
$repeater->add_control(
    'h1style32serviceplantab',
    [
        'label' => esc_html__( 'Middle Box', 'emyui-core' ),
        'condition' => [ 'boxstyleserviceplantab' => '3style' ],
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);
   $repeater->add_control(
			'titlestyle32serviceplantab',
			[
				'label' => esc_html__( 'Middle Box Title', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '3style' ],
				'default' => esc_html__( 'counter strike', 'emyui-core' ),
			
			]
		);
    $repeater->add_control(
			'pricestyle32serviceplantab',
			[
				'label' => esc_html__( 'Middle Box Monthly price', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '3style' ],
				'default' => esc_html__( '$12', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'periodstyle32serviceplantab',
            [
                'label' => esc_html__( 'Middle Box Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '3style' ],
                'default' => esc_html__( 'Monthly', 'emyui-core' ),
            
            ]
        );
        $repeater->add_control(
               'imgstyle32serviceplantab',
               [
                   'label' => esc_html__( 'Image', 'emyui-core' ),
                   'type' => \Elementor\Controls_Manager::MEDIA,
                   'condition' => [ 'boxstyleserviceplantab' => '3style' ],  
               ]
           );
    $repeater->add_control(
			'buttonstyle32serviceplantab',
			[
				'label' => esc_html__( 'Middle Box Button', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '3style' ],
				'default' => esc_html__( 'Order Now', 'emyui-core' ),
			
			]
		);
    $repeater->add_control(
			'buttonlinkstyle32serviceplantab',
			[
				'label' => esc_html__( 'Middle Box Button Link', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '3style' ],
				'default' => esc_html__( '#', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
			'hr1style32serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
                'condition' => [ 'boxstyleserviceplantab' => '3style' ],
			]
		);
        $repeater->add_control(
			'featuresnumber2style32serviceplantab',
			[
				'label' => esc_html__( 'Middle Box Number of features', 'emyui-core' ),
                'condition' => [ 'boxstyleserviceplantab' => '3style' ],
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 8,
				'step' => 1,
				'default' => 8,
			]
		);
        $repeater->add_control(
			'1featurestyle32serviceplantab',
			[
				'label' => esc_html__( 'First Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style32serviceplantab',
                            'operator' => '>=',
                            'value' => '1'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has1featurestyle32serviceplantab',
            [
              'label' => esc_html__( 'First Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style32serviceplantab',
                        'operator' => '>=',
                        'value' => '1'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '3style'
                    ],
                ]
                ],
              'default' => 'middleboxstyle2included1',
              'options' => [
                'middleboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'middleboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink1featurestyle32serviceplantab', [
                'label' => esc_html__( 'First Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style32serviceplantab',
                            'operator' => '>=',
                            'value' => '1'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                        [
                            'name' => 'has1featurestyle32serviceplantab',
                            'operator' => '===',
                            'value' => 'middleboxstyle2haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
        $repeater->add_control(
			'hr1featurestyle32serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style32serviceplantab',
                            'operator' => '>=',
                            'value' => '1'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'2featurestyle32serviceplantab',
			[
				'label' => esc_html__( 'Second Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style32serviceplantab',
                            'operator' => '>=',
                            'value' => '2'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has2featurestyle32serviceplantab',
            [
              'label' => esc_html__( 'Second Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style32serviceplantab',
                        'operator' => '>=',
                        'value' => '2'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '3style'
                    ],
                ]
                ],
              'default' => 'middleboxstyle2included1',
              'options' => [
                'middleboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'middleboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink2featurestyle32serviceplantab', [
                'label' => esc_html__( 'Second Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style32serviceplantab',
                            'operator' => '>=',
                            'value' => '2'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                        [
                            'name' => 'has2featurestyle32serviceplantab',
                            'operator' => '===',
                            'value' => 'middleboxstyle2haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
        $repeater->add_control(
			'hr2featurestyle32serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style32serviceplantab',
                            'operator' => '>=',
                            'value' => '2'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'3featurestyle32serviceplantab',
			[
				'label' => esc_html__( 'Third Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style32serviceplantab',
                            'operator' => '>=',
                            'value' => '3'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has3featurestyle32serviceplantab',
            [
              'label' => esc_html__( 'Third Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style32serviceplantab',
                        'operator' => '>=',
                        'value' => '3'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '3style'
                    ],
                ]
                ],
              'default' => 'middleboxstyle2included1',
              'options' => [
                'middleboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'middleboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink3featurestyle32serviceplantab', [
                'label' => esc_html__( 'Third Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style32serviceplantab',
                            'operator' => '>=',
                            'value' => '3'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                        [
                            'name' => 'has3featurestyle32serviceplantab',
                            'operator' => '===',
                            'value' => 'middleboxstyle2haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
        $repeater->add_control(
			'hr3featurestyle32serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style32serviceplantab',
                            'operator' => '>=',
                            'value' => '3'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'4featurestyle32serviceplantab',
			[
				'label' => esc_html__( 'Fourth Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style32serviceplantab',
                            'operator' => '>=',
                            'value' => '4'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has4featurestyle32serviceplantab',
            [
              'label' => esc_html__( 'Fourth Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style32serviceplantab',
                        'operator' => '>=',
                        'value' => '4'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '3style'
                    ],
                ]
                ],
              'default' => 'middleboxstyle2included1',
              'options' => [
                'middleboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'middleboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink4featurestyle32serviceplantab', [
                'label' => esc_html__( 'Fourth Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style32serviceplantab',
                            'operator' => '>=',
                            'value' => '4'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                        [
                            'name' => 'has4featurestyle32serviceplantab',
                            'operator' => '===',
                            'value' => 'middleboxstyle2haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
        $repeater->add_control(
			'hr4featurestyle32serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style32serviceplantab',
                            'operator' => '>=',
                            'value' => '4'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'5featurestyle32serviceplantab',
			[
				'label' => esc_html__( 'Fifth Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style32serviceplantab',
                            'operator' => '>=',
                            'value' => '5'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has5featurestyle32serviceplantab',
            [
              'label' => esc_html__( 'Fifth Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style32serviceplantab',
                        'operator' => '>=',
                        'value' => '5'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '3style'
                    ],
                ]
                ],
              'default' => 'middleboxstyle2included1',
              'options' => [
                'middleboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'middleboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink5featurestyle32serviceplantab', [
                'label' => esc_html__( 'Fifth Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style32serviceplantab',
                            'operator' => '>=',
                            'value' => '5'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                        [
                            'name' => 'has2featurestyle32serviceplantab',
                            'operator' => '===',
                            'value' => 'leftboxstyle5haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
        $repeater->add_control(
			'hr5featurestyle32serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style32serviceplantab',
                            'operator' => '>=',
                            'value' => '5'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'6featurestyle32serviceplantab',
			[
				'label' => esc_html__( 'Sixth Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style32serviceplantab',
                            'operator' => '>=',
                            'value' => '6'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has6featurestyle32serviceplantab',
            [
              'label' => esc_html__( 'Sixth Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style32serviceplantab',
                        'operator' => '>=',
                        'value' => '6'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '3style'
                    ],
                ]
                ],
              'default' => 'middleboxstyle2included1',
              'options' => [
                'middleboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'middleboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink6featurestyle32serviceplantab', [
                'label' => esc_html__( 'Sixth Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style32serviceplantab',
                            'operator' => '>=',
                            'value' => '6'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                        [
                            'name' => 'has6featurestyle32serviceplantab',
                            'operator' => '===',
                            'value' => 'middleboxstyle2haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
        $repeater->add_control(
			'hr6featurestyle32serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style32serviceplantab',
                            'operator' => '>=',
                            'value' => '6'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'7featurestyle32serviceplantab',
			[
				'label' => esc_html__( 'Seventh Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style32serviceplantab',
                            'operator' => '>=',
                            'value' => '7'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has7featurestyle32serviceplantab',
            [
              'label' => esc_html__( 'Seventh Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style32serviceplantab',
                        'operator' => '>=',
                        'value' => '7'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '3style'
                    ],
                ]
                ],
              'default' => 'middleboxstyle2included1',
              'options' => [
                'middleboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'middleboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink7featurestyle32serviceplantab', [
                'label' => esc_html__( 'Seventh Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style32serviceplantab',
                            'operator' => '>=',
                            'value' => '7'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                        [
                            'name' => 'has7featurestyle32serviceplantab',
                            'operator' => '===',
                            'value' => 'middleboxstyle2haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
        $repeater->add_control(
			'hr7featurestyle32serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style32serviceplantab',
                            'operator' => '>=',
                            'value' => '7'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],   
			]
		);
        $repeater->add_control(
			'8featurestyle32serviceplantab',
			[
				'label' => esc_html__( 'Eighth Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style32serviceplantab',
                            'operator' => '>=',
                            'value' => '8'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has8featurestyle32serviceplantab',
            [
              'label' => esc_html__( 'Eighth Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style32serviceplantab',
                        'operator' => '>=',
                        'value' => '8'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '3style'
                    ],
                ]
                ],
              'default' => 'middleboxstyle2included1',
              'options' => [
                'middleboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'middleboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink8featurestyle32serviceplantab', [
                'label' => esc_html__( 'Eighth Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style32serviceplantab',
                            'operator' => '>=',
                            'value' => '8'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                        [
                            'name' => 'has8featurestyle32serviceplantab',
                            'operator' => '===',
                            'value' => 'middleboxstyle2haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
        $repeater->add_control(
			'hr8featurestyle32serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style32serviceplantab',
                            'operator' => '>=',
                            'value' => '8'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],   
			]
		); 
/* Middle Box - Third Style - ended */
/* Right Box - Third Style - started */
$repeater->add_control(
    'h1style33serviceplantab',
    [
        'label' => esc_html__( 'Right Box', 'emyui-core' ),
        'condition' => [ 'boxstyleserviceplantab' => '3style' ],
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);
   $repeater->add_control(
			'titlestyle33serviceplantab',
			[
				'label' => esc_html__( 'Right Box Title', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '3style' ],
				'default' => esc_html__( 'counter strike', 'emyui-core' ),
			
			]
		);
    $repeater->add_control(
			'pricestyle33serviceplantab',
			[
				'label' => esc_html__( 'Right Box Monthly price', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '3style' ],
				'default' => esc_html__( '$12', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'periodstyle33serviceplantab',
            [
                'label' => esc_html__( 'Right Box Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '3style' ],
                'default' => esc_html__( 'Monthly', 'emyui-core' ),
            
            ]
        );
        $repeater->add_control(
               'imgstyle33serviceplantab',
               [
                   'label' => esc_html__( 'Image', 'emyui-core' ),
                   'type' => \Elementor\Controls_Manager::MEDIA,
                   'condition' => [ 'boxstyleserviceplantab' => '3style' ],  
               ]
           );
    $repeater->add_control(
			'buttonstyle33serviceplantab',
			[
				'label' => esc_html__( 'Right Box Button', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '3style' ],
				'default' => esc_html__( 'Order Now', 'emyui-core' ),
			
			]
		);
    $repeater->add_control(
			'buttonlinkstyle33serviceplantab',
			[
				'label' => esc_html__( 'Right Box Button Link', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '3style' ],
				'default' => esc_html__( '#', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
			'hr1style33serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
                'condition' => [ 'boxstyleserviceplantab' => '3style' ],
			]
		);
        $repeater->add_control(
			'featuresnumber2style33serviceplantab',
			[
				'label' => esc_html__( 'Right Box Number of features', 'emyui-core' ),
                'condition' => [ 'boxstyleserviceplantab' => '3style' ],
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 8,
				'step' => 1,
				'default' => 8,
			]
		);
        $repeater->add_control(
			'1featurestyle33serviceplantab',
			[
				'label' => esc_html__( 'First Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style33serviceplantab',
                            'operator' => '>=',
                            'value' => '1'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has1featurestyle33serviceplantab',
            [
              'label' => esc_html__( 'First Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style33serviceplantab',
                        'operator' => '>=',
                        'value' => '1'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '3style'
                    ],
                ]
                ],
              'default' => 'rightboxstyle2included1',
              'options' => [
                'rightboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'rightboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink1featurestyle33serviceplantab', [
                'label' => esc_html__( 'First Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style33serviceplantab',
                            'operator' => '>=',
                            'value' => '1'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                        [
                            'name' => 'has1featurestyle33serviceplantab',
                            'operator' => '===',
                            'value' => 'rightboxstyle2haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
        $repeater->add_control(
			'hr1featurestyle33serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style33serviceplantab',
                            'operator' => '>=',
                            'value' => '1'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'2featurestyle33serviceplantab',
			[
				'label' => esc_html__( 'Second Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style33serviceplantab',
                            'operator' => '>=',
                            'value' => '2'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has2featurestyle33serviceplantab',
            [
              'label' => esc_html__( 'Second Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style33serviceplantab',
                        'operator' => '>=',
                        'value' => '2'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '3style'
                    ],
                ]
                ],
              'default' => 'rightboxstyle2included1',
              'options' => [
                'rightboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'rightboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink2featurestyle33serviceplantab', [
                'label' => esc_html__( 'Second Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style33serviceplantab',
                            'operator' => '>=',
                            'value' => '2'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                        [
                            'name' => 'has2featurestyle33serviceplantab',
                            'operator' => '===',
                            'value' => 'rightboxstyle2haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
        $repeater->add_control(
			'hr2featurestyle33serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style33serviceplantab',
                            'operator' => '>=',
                            'value' => '2'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'3featurestyle33serviceplantab',
			[
				'label' => esc_html__( 'Third Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style33serviceplantab',
                            'operator' => '>=',
                            'value' => '3'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has3featurestyle33serviceplantab',
            [
              'label' => esc_html__( 'Third Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style33serviceplantab',
                        'operator' => '>=',
                        'value' => '3'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '3style'
                    ],
                ]
                ],
              'default' => 'rightboxstyle2included1',
              'options' => [
                'rightboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'rightboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink3featurestyle33serviceplantab', [
                'label' => esc_html__( 'Third Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style33serviceplantab',
                            'operator' => '>=',
                            'value' => '3'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                        [
                            'name' => 'has3featurestyle33serviceplantab',
                            'operator' => '===',
                            'value' => 'rightboxstyle2haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
        $repeater->add_control(
			'hr3featurestyle33serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style33serviceplantab',
                            'operator' => '>=',
                            'value' => '3'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'4featurestyle33serviceplantab',
			[
				'label' => esc_html__( 'Fourth Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style33serviceplantab',
                            'operator' => '>=',
                            'value' => '4'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has4featurestyle33serviceplantab',
            [
              'label' => esc_html__( 'Fourth Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style33serviceplantab',
                        'operator' => '>=',
                        'value' => '4'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '3style'
                    ],
                ]
                ],
              'default' => 'rightboxstyle2included1',
              'options' => [
                'rightboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'rightboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink4featurestyle33serviceplantab', [
                'label' => esc_html__( 'Fourth Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style33serviceplantab',
                            'operator' => '>=',
                            'value' => '4'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                        [
                            'name' => 'has4featurestyle33serviceplantab',
                            'operator' => '===',
                            'value' => 'rightboxstyle2haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
        $repeater->add_control(
			'hr4featurestyle33serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style33serviceplantab',
                            'operator' => '>=',
                            'value' => '4'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'5featurestyle33serviceplantab',
			[
				'label' => esc_html__( 'Fifth Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style33serviceplantab',
                            'operator' => '>=',
                            'value' => '5'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has5featurestyle33serviceplantab',
            [
              'label' => esc_html__( 'Fifth Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style33serviceplantab',
                        'operator' => '>=',
                        'value' => '5'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '3style'
                    ],
                ]
                ],
              'default' => 'rightboxstyle2included1',
              'options' => [
                'rightboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'rightboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink5featurestyle33serviceplantab', [
                'label' => esc_html__( 'Fifth Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style33serviceplantab',
                            'operator' => '>=',
                            'value' => '5'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                        [
                            'name' => 'has2featurestyle33serviceplantab',
                            'operator' => '===',
                            'value' => 'leftboxstyle5haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
        $repeater->add_control(
			'hr5featurestyle33serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style33serviceplantab',
                            'operator' => '>=',
                            'value' => '5'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'6featurestyle33serviceplantab',
			[
				'label' => esc_html__( 'Sixth Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style33serviceplantab',
                            'operator' => '>=',
                            'value' => '6'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has6featurestyle33serviceplantab',
            [
              'label' => esc_html__( 'Sixth Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style33serviceplantab',
                        'operator' => '>=',
                        'value' => '6'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '3style'
                    ],
                ]
                ],
              'default' => 'rightboxstyle2included1',
              'options' => [
                'rightboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'rightboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink6featurestyle33serviceplantab', [
                'label' => esc_html__( 'Sixth Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style33serviceplantab',
                            'operator' => '>=',
                            'value' => '6'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                        [
                            'name' => 'has6featurestyle33serviceplantab',
                            'operator' => '===',
                            'value' => 'rightboxstyle2haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
        $repeater->add_control(
			'hr6featurestyle33serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style33serviceplantab',
                            'operator' => '>=',
                            'value' => '6'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'7featurestyle33serviceplantab',
			[
				'label' => esc_html__( 'Seventh Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style33serviceplantab',
                            'operator' => '>=',
                            'value' => '7'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has7featurestyle33serviceplantab',
            [
              'label' => esc_html__( 'Seventh Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style33serviceplantab',
                        'operator' => '>=',
                        'value' => '7'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '3style'
                    ],
                ]
                ],
              'default' => 'rightboxstyle2included1',
              'options' => [
                'rightboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'rightboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink7featurestyle33serviceplantab', [
                'label' => esc_html__( 'Seventh Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style33serviceplantab',
                            'operator' => '>=',
                            'value' => '7'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                        [
                            'name' => 'has7featurestyle33serviceplantab',
                            'operator' => '===',
                            'value' => 'rightboxstyle2haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
        $repeater->add_control(
			'hr7featurestyle33serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style33serviceplantab',
                            'operator' => '>=',
                            'value' => '7'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],   
			]
		);
        $repeater->add_control(
			'8featurestyle33serviceplantab',
			[
				'label' => esc_html__( 'Eighth Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style33serviceplantab',
                            'operator' => '>=',
                            'value' => '8'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has8featurestyle33serviceplantab',
            [
              'label' => esc_html__( 'Eighth Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style33serviceplantab',
                        'operator' => '>=',
                        'value' => '8'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '3style'
                    ],
                ]
                ],
              'default' => 'rightboxstyle2included1',
              'options' => [
                'rightboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'rightboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink8featurestyle33serviceplantab', [
                'label' => esc_html__( 'Eighth Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style33serviceplantab',
                            'operator' => '>=',
                            'value' => '8'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                        [
                            'name' => 'has8featurestyle33serviceplantab',
                            'operator' => '===',
                            'value' => 'rightboxstyle2haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
        $repeater->add_control(
			'hr8featurestyle33serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style33serviceplantab',
                            'operator' => '>=',
                            'value' => '8'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '3style'
                        ],
                    ]
                    ],   
			]
		); 
/* Right Box - Third Style - ended */
/*Price Box - Fourth Style - started */
$repeater->add_control(
    'h1style41serviceplantab',
    [
        'label' => esc_html__( 'Price Box', 'emyui-core' ),
        'condition' => [ 'boxstyleserviceplantab' => '4style' ],
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);
   $repeater->add_control(
			'titlestyle41serviceplantab',
			[
				'label' => esc_html__( 'Price Box Title', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '4style' ],
				'default' => esc_html__( 'TeamSpeak 3 Servers', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
			'subtitlestyle41serviceplantab',
			[
				'label' => esc_html__( 'Subtitle', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '4style' ],
				'default' => esc_html__( 'TeamSpeak Version 3.0', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
               'imgstyle41serviceplantab',
               [
                   'label' => esc_html__( 'Image', 'emyui-core' ),
                   'type' => \Elementor\Controls_Manager::MEDIA,
                   'condition' => [ 'boxstyleserviceplantab' => '4style' ],  
               ]
           );
        $repeater->add_control(
            'periodyearlytstyle41serviceplantab',
            [
                'label' => esc_html__( 'First Period Title', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '4style' ],
                'default' => esc_html__( 'Bill yearly', 'emyui-core' ),
            
            ]
        );
        $repeater->add_control(
            'periodyearlyBadgestyle41serviceplantab',
            [
                'label' => esc_html__( 'First Period Badge', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '4style' ],
                'default' => esc_html__( 'Yearly', 'emyui-core' ),
            
            ]
        );
        $repeater->add_control(
			'priceyearlystyle41serviceplantab',
			[
				'label' => esc_html__( 'First Period price', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '4style' ],
				'default' => esc_html__( '390$', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'isofferyearlystyle41serviceplantab',
            [
                'label' => esc_html__( 'Is Offer?', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'condition' => [ 'boxstyleserviceplantab' => '4style' ],
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $repeater->add_control(
			'offeryearlystyle41serviceplantab',
			[
				'label' => esc_html__( 'Offer', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'isofferyearlystyle41serviceplantab',
                            'operator' => '===',
                            'value' => 'yes'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '4style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'Save 2 Months', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
			'hrperiodstyle41serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '4style'
                        ],
                    ]
                    ],   
			]
		);
        $repeater->add_control(
            'periodmonthlytstyle41serviceplantab',
            [
                'label' => esc_html__( 'Second Period Title', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '4style' ],
                'default' => esc_html__( 'Bill Monthly', 'emyui-core' ),
            
            ]
        );
        $repeater->add_control(
            'periodmonthlyBadgestyle41serviceplantab',
            [
                'label' => esc_html__( 'Second Period Badge', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '4style' ],
                'default' => esc_html__( 'Monthly', 'emyui-core' ),
            
            ]
        );
        $repeater->add_control(
			'pricemonthlystyle41serviceplantab',
			[
				'label' => esc_html__( 'Second Period price', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '4style' ],
				'default' => esc_html__( '38$', 'emyui-core' ),
			
			]
		);
    $repeater->add_control(
			'buttonstyle41serviceplantab',
			[
				'label' => esc_html__( 'Price Box Button', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '4style' ],
				'default' => esc_html__( 'Order Now', 'emyui-core' ),
			
			]
		);
    $repeater->add_control(
			'buttonlinkstyle41serviceplantab',
			[
				'label' => esc_html__( 'Price Box Button Link', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '4style' ],
				'default' => esc_html__( '#', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
			'hr1style41serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
                'condition' => [ 'boxstyleserviceplantab' => '4style' ],
			]
		);
        $repeater->add_control(
			'featuresnumber2style41serviceplantab',
			[
				'label' => esc_html__( 'Price Box Number of features', 'emyui-core' ),
                'condition' => [ 'boxstyleserviceplantab' => '4style' ],
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 8,
				'step' => 1,
				'default' => 8,
			]
		);
        $repeater->add_control(
			'1featurestyle41serviceplantab',
			[
				'label' => esc_html__( 'First Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style41serviceplantab',
                            'operator' => '>=',
                            'value' => '1'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '4style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has1featurestyle41serviceplantab',
            [
              'label' => esc_html__( 'First Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style41serviceplantab',
                        'operator' => '>=',
                        'value' => '1'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '4style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle2included1',
              'options' => [
                'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink1featurestyle41serviceplantab', [
                'label' => esc_html__( 'First Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style41serviceplantab',
                            'operator' => '>=',
                            'value' => '1'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '4style'
                        ],
                        [
                            'name' => 'has1featurestyle41serviceplantab',
                            'operator' => '===',
                            'value' => 'leftboxstyle2haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
        $repeater->add_control(
            'badge1featurestyle41serviceplantab',
            [
              'label' => esc_html__( 'First Feature Badge', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style41serviceplantab',
                        'operator' => '>=',
                        'value' => '1'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '4style'
                    ],
                ]
                ],
              'default' => 'greenboxstyle2included1',
              'options' => [
                'greenboxstyle2included1'  => esc_html__( 'Green', 'emyui-core' ),
                'redboxstyle2haslink1' => esc_html__( 'Red', 'emyui-core' ),
                'grayboxstyle2haslink1' => esc_html__( 'Gray', 'emyui-core' ),
                'noboxstyle2haslink1' => esc_html__( 'No Badge', 'emyui-core' ),

              ],
            ]
          );
          $repeater->add_control(
			'badgetitle1featurestyle41serviceplantab',
			[
				'label' => esc_html__( 'First Feature Badge Title', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style41serviceplantab',
                            'operator' => '>=',
                            'value' => '1'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '4style'
                        ],
                        [
                            'relation' => 'or',
                            'terms' => [
                                [
                                    'name' => 'badge1featurestyle41serviceplantab',
                                    'operator' => '===',
                                    'value' => 'greenboxstyle2included1'
                                ],
                                [
                                    'name' => 'badge1featurestyle41serviceplantab',
                                    'operator' => '===',
                                    'value' => 'redboxstyle2haslink1'
                                ],
                                [
                                    'name' => 'badge1featurestyle41serviceplantab',
                                    'operator' => '===',
                                    'value' => 'grayboxstyle2haslink1'
                                ]
                            ]
                        ]
                    ]
                ],
				'default' => esc_html__( 'included with all of the plans', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
			'hr1featurestyle41serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style41serviceplantab',
                            'operator' => '>=',
                            'value' => '1'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '4style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'2featurestyle41serviceplantab',
			[
				'label' => esc_html__( 'Second Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style41serviceplantab',
                            'operator' => '>=',
                            'value' => '2'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '4style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has2featurestyle41serviceplantab',
            [
              'label' => esc_html__( 'Second Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style41serviceplantab',
                        'operator' => '>=',
                        'value' => '2'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '4style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle2included1',
              'options' => [
                'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink2featurestyle41serviceplantab', [
                'label' => esc_html__( 'Second Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style41serviceplantab',
                            'operator' => '>=',
                            'value' => '2'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '4style'
                        ],
                        [
                            'name' => 'has2featurestyle41serviceplantab',
                            'operator' => '===',
                            'value' => 'leftboxstyle2haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
        /* */
        $repeater->add_control(
            'badge2featurestyle41serviceplantab',
            [
              'label' => esc_html__( 'Second Feature Badge', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style41serviceplantab',
                        'operator' => '>=',
                        'value' => '2'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '4style'
                    ],
                ]
                ],
              'default' => 'greenboxstyle2included1',
              'options' => [
                'greenboxstyle2included1'  => esc_html__( 'Green', 'emyui-core' ),
                'redboxstyle2haslink1' => esc_html__( 'Red', 'emyui-core' ),
                'grayboxstyle2haslink1' => esc_html__( 'Gray', 'emyui-core' ),
                'noboxstyle2haslink1' => esc_html__( 'No Badge', 'emyui-core' ),

              ],
            ]
          );
          $repeater->add_control(
			'badgetitle2featurestyle41serviceplantab',
			[
				'label' => esc_html__( 'Second Feature Badge Title', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style41serviceplantab',
                            'operator' => '>=',
                            'value' => '2'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '4style'
                        ],
                        [
                            'relation' => 'or',
                            'terms' => [
                                [
                                    'name' => 'badge2featurestyle41serviceplantab',
                                    'operator' => '===',
                                    'value' => 'greenboxstyle2included1'
                                ],
                                [
                                    'name' => 'badge2featurestyle41serviceplantab',
                                    'operator' => '===',
                                    'value' => 'redboxstyle2haslink1'
                                ],
                                [
                                    'name' => 'badge2featurestyle41serviceplantab',
                                    'operator' => '===',
                                    'value' => 'grayboxstyle2haslink1'
                                ]
                            ]
                        ]
                    ]
                ],
				'default' => esc_html__( 'included with all of the plans', 'emyui-core' ),
			
			]
		);
        /* */ 
        $repeater->add_control(
			'hr2featurestyle41serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style41serviceplantab',
                            'operator' => '>=',
                            'value' => '2'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '4style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'3featurestyle41serviceplantab',
			[
				'label' => esc_html__( 'Third Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style41serviceplantab',
                            'operator' => '>=',
                            'value' => '3'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '4style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has3featurestyle41serviceplantab',
            [
              'label' => esc_html__( 'Third Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style41serviceplantab',
                        'operator' => '>=',
                        'value' => '3'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '4style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle2included1',
              'options' => [
                'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink3featurestyle41serviceplantab', [
                'label' => esc_html__( 'Third Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style41serviceplantab',
                            'operator' => '>=',
                            'value' => '3'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '4style'
                        ],
                        [
                            'name' => 'has3featurestyle41serviceplantab',
                            'operator' => '===',
                            'value' => 'leftboxstyle2haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
                /* */
                $repeater->add_control(
                    'badge3featurestyle41serviceplantab',
                    [
                      'label' => esc_html__( 'Third Feature Badge', 'emyui-core' ),
                      'type' => \Elementor\Controls_Manager::SELECT,                
                      'conditions' => [
                        'relation' => 'and',
                        'terms' => [
                            [
                                'name' => 'featuresnumber2style41serviceplantab',
                                'operator' => '>=',
                                'value' => '3'
                            ],
                            [
                                'name' => 'boxstyleserviceplantab',
                                'operator' => '===',
                                'value' => '4style'
                            ],
                        ]
                        ],
                      'default' => 'greenboxstyle2included1',
                      'options' => [
                        'greenboxstyle2included1'  => esc_html__( 'Green', 'emyui-core' ),
                        'redboxstyle2haslink1' => esc_html__( 'Red', 'emyui-core' ),
                        'grayboxstyle2haslink1' => esc_html__( 'Gray', 'emyui-core' ),
                        'noboxstyle2haslink1' => esc_html__( 'No Badge', 'emyui-core' ),
        
                      ],
                    ]
                  );
                  $repeater->add_control(
                    'badgetitle3featurestyle41serviceplantab',
                    [
                        'label' => esc_html__( 'Third Feature Badge Title', 'emyui-core' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'conditions' => [
                            'relation' => 'and',
                            'terms' => [
                                [
                                    'name' => 'featuresnumber2style41serviceplantab',
                                    'operator' => '>=',
                                    'value' => '3'
                                ],
                                [
                                    'name' => 'boxstyleserviceplantab',
                                    'operator' => '===',
                                    'value' => '4style'
                                ],
                                [
                                    'relation' => 'or',
                                    'terms' => [
                                        [
                                            'name' => 'badge3featurestyle41serviceplantab',
                                            'operator' => '===',
                                            'value' => 'greenboxstyle2included1'
                                        ],
                                        [
                                            'name' => 'badge3featurestyle41serviceplantab',
                                            'operator' => '===',
                                            'value' => 'redboxstyle2haslink1'
                                        ],
                                        [
                                            'name' => 'badge3featurestyle41serviceplantab',
                                            'operator' => '===',
                                            'value' => 'grayboxstyle2haslink1'
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'default' => esc_html__( 'included with all of the plans', 'emyui-core' ),
                    
                    ]
                );
                /* */ 
        $repeater->add_control(
			'hr3featurestyle41serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style41serviceplantab',
                            'operator' => '>=',
                            'value' => '3'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '4style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'4featurestyle41serviceplantab',
			[
				'label' => esc_html__( 'Fourth Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style41serviceplantab',
                            'operator' => '>=',
                            'value' => '4'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '4style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has4featurestyle41serviceplantab',
            [
              'label' => esc_html__( 'Fourth Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style41serviceplantab',
                        'operator' => '>=',
                        'value' => '4'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '4style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle2included1',
              'options' => [
                'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink4featurestyle41serviceplantab', [
                'label' => esc_html__( 'Fourth Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style41serviceplantab',
                            'operator' => '>=',
                            'value' => '4'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '4style'
                        ],
                        [
                            'name' => 'has4featurestyle41serviceplantab',
                            'operator' => '===',
                            'value' => 'leftboxstyle2haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
                /* */
                $repeater->add_control(
                    'badge4featurestyle41serviceplantab',
                    [
                      'label' => esc_html__( 'Fourth Feature Badge', 'emyui-core' ),
                      'type' => \Elementor\Controls_Manager::SELECT,                
                      'conditions' => [
                        'relation' => 'and',
                        'terms' => [
                            [
                                'name' => 'featuresnumber2style41serviceplantab',
                                'operator' => '>=',
                                'value' => '4'
                            ],
                            [
                                'name' => 'boxstyleserviceplantab',
                                'operator' => '===',
                                'value' => '4style'
                            ],
                        ]
                        ],
                      'default' => 'greenboxstyle2included1',
                      'options' => [
                        'greenboxstyle2included1'  => esc_html__( 'Green', 'emyui-core' ),
                        'redboxstyle2haslink1' => esc_html__( 'Red', 'emyui-core' ),
                        'grayboxstyle2haslink1' => esc_html__( 'Gray', 'emyui-core' ),
                        'noboxstyle2haslink1' => esc_html__( 'No Badge', 'emyui-core' ),
        
                      ],
                    ]
                  );
                  $repeater->add_control(
                    'badgetitle4featurestyle41serviceplantab',
                    [
                        'label' => esc_html__( 'Fourth Feature Badge Title', 'emyui-core' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'conditions' => [
                            'relation' => 'and',
                            'terms' => [
                                [
                                    'name' => 'featuresnumber2style41serviceplantab',
                                    'operator' => '>=',
                                    'value' => '4'
                                ],
                                [
                                    'name' => 'boxstyleserviceplantab',
                                    'operator' => '===',
                                    'value' => '4style'
                                ],
                                [
                                    'relation' => 'or',
                                    'terms' => [
                                        [
                                            'name' => 'badge4featurestyle41serviceplantab',
                                            'operator' => '===',
                                            'value' => 'greenboxstyle2included1'
                                        ],
                                        [
                                            'name' => 'badge4featurestyle41serviceplantab',
                                            'operator' => '===',
                                            'value' => 'redboxstyle2haslink1'
                                        ],
                                        [
                                            'name' => 'badge4featurestyle41serviceplantab',
                                            'operator' => '===',
                                            'value' => 'grayboxstyle2haslink1'
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'default' => esc_html__( 'included with all of the plans', 'emyui-core' ),
                    
                    ]
                );
                /* */ 
        $repeater->add_control(
			'hr4featurestyle41serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style41serviceplantab',
                            'operator' => '>=',
                            'value' => '4'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '4style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'5featurestyle41serviceplantab',
			[
				'label' => esc_html__( 'Fifth Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style41serviceplantab',
                            'operator' => '>=',
                            'value' => '5'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '4style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has5featurestyle41serviceplantab',
            [
              'label' => esc_html__( 'Fifth Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style41serviceplantab',
                        'operator' => '>=',
                        'value' => '5'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '4style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle2included1',
              'options' => [
                'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink5featurestyle41serviceplantab', [
                'label' => esc_html__( 'Fifth Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style41serviceplantab',
                            'operator' => '>=',
                            'value' => '5'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '4style'
                        ],
                        [
                            'name' => 'has2featurestyle41serviceplantab',
                            'operator' => '===',
                            'value' => 'leftboxstyle5haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
                /* */
                $repeater->add_control(
                    'badge5featurestyle41serviceplantab',
                    [
                      'label' => esc_html__( 'Fifth Feature Badge', 'emyui-core' ),
                      'type' => \Elementor\Controls_Manager::SELECT,                
                      'conditions' => [
                        'relation' => 'and',
                        'terms' => [
                            [
                                'name' => 'featuresnumber2style41serviceplantab',
                                'operator' => '>=',
                                'value' => '5'
                            ],
                            [
                                'name' => 'boxstyleserviceplantab',
                                'operator' => '===',
                                'value' => '4style'
                            ],
                        ]
                        ],
                      'default' => 'greenboxstyle2included1',
                      'options' => [
                        'greenboxstyle2included1'  => esc_html__( 'Green', 'emyui-core' ),
                        'redboxstyle2haslink1' => esc_html__( 'Red', 'emyui-core' ),
                        'grayboxstyle2haslink1' => esc_html__( 'Gray', 'emyui-core' ),
                        'noboxstyle2haslink1' => esc_html__( 'No Badge', 'emyui-core' ),
        
                      ],
                    ]
                  );
                  $repeater->add_control(
                    'badgetitle5featurestyle41serviceplantab',
                    [
                        'label' => esc_html__( 'Fifth Feature Badge Title', 'emyui-core' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'conditions' => [
                            'relation' => 'and',
                            'terms' => [
                                [
                                    'name' => 'featuresnumber2style41serviceplantab',
                                    'operator' => '>=',
                                    'value' => '5'
                                ],
                                [
                                    'name' => 'boxstyleserviceplantab',
                                    'operator' => '===',
                                    'value' => '4style'
                                ],
                                [
                                    'relation' => 'or',
                                    'terms' => [
                                        [
                                            'name' => 'badge5featurestyle41serviceplantab',
                                            'operator' => '===',
                                            'value' => 'greenboxstyle2included1'
                                        ],
                                        [
                                            'name' => 'badge5featurestyle41serviceplantab',
                                            'operator' => '===',
                                            'value' => 'redboxstyle2haslink1'
                                        ],
                                        [
                                            'name' => 'badge5featurestyle41serviceplantab',
                                            'operator' => '===',
                                            'value' => 'grayboxstyle2haslink1'
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'default' => esc_html__( 'included with all of the plans', 'emyui-core' ),
                    
                    ]
                );
                /* */ 
        $repeater->add_control(
			'hr5featurestyle41serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style41serviceplantab',
                            'operator' => '>=',
                            'value' => '5'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '4style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'6featurestyle41serviceplantab',
			[
				'label' => esc_html__( 'Sixth Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style41serviceplantab',
                            'operator' => '>=',
                            'value' => '6'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '4style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has6featurestyle41serviceplantab',
            [
              'label' => esc_html__( 'Sixth Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style41serviceplantab',
                        'operator' => '>=',
                        'value' => '6'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '4style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle2included1',
              'options' => [
                'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink6featurestyle41serviceplantab', [
                'label' => esc_html__( 'Sixth Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style41serviceplantab',
                            'operator' => '>=',
                            'value' => '6'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '4style'
                        ],
                        [
                            'name' => 'has6featurestyle41serviceplantab',
                            'operator' => '===',
                            'value' => 'leftboxstyle2haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
                /* */
                $repeater->add_control(
                    'badge6featurestyle41serviceplantab',
                    [
                      'label' => esc_html__( 'Sixth Feature Badge', 'emyui-core' ),
                      'type' => \Elementor\Controls_Manager::SELECT,                
                      'conditions' => [
                        'relation' => 'and',
                        'terms' => [
                            [
                                'name' => 'featuresnumber2style41serviceplantab',
                                'operator' => '>=',
                                'value' => '6'
                            ],
                            [
                                'name' => 'boxstyleserviceplantab',
                                'operator' => '===',
                                'value' => '4style'
                            ],
                        ]
                        ],
                      'default' => 'greenboxstyle2included1',
                      'options' => [
                        'greenboxstyle2included1'  => esc_html__( 'Green', 'emyui-core' ),
                        'redboxstyle2haslink1' => esc_html__( 'Red', 'emyui-core' ),
                        'grayboxstyle2haslink1' => esc_html__( 'Gray', 'emyui-core' ),
                        'noboxstyle2haslink1' => esc_html__( 'No Badge', 'emyui-core' ),
        
                      ],
                    ]
                  );
                  $repeater->add_control(
                    'badgetitle6featurestyle41serviceplantab',
                    [
                        'label' => esc_html__( 'Sixth Feature Badge Title', 'emyui-core' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'conditions' => [
                            'relation' => 'and',
                            'terms' => [
                                [
                                    'name' => 'featuresnumber2style41serviceplantab',
                                    'operator' => '>=',
                                    'value' => '6'
                                ],
                                [
                                    'name' => 'boxstyleserviceplantab',
                                    'operator' => '===',
                                    'value' => '4style'
                                ],
                                [
                                    'relation' => 'or',
                                    'terms' => [
                                        [
                                            'name' => 'badge6featurestyle41serviceplantab',
                                            'operator' => '===',
                                            'value' => 'greenboxstyle2included1'
                                        ],
                                        [
                                            'name' => 'badge6featurestyle41serviceplantab',
                                            'operator' => '===',
                                            'value' => 'redboxstyle2haslink1'
                                        ],
                                        [
                                            'name' => 'badge6featurestyle41serviceplantab',
                                            'operator' => '===',
                                            'value' => 'grayboxstyle2haslink1'
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'default' => esc_html__( 'included with all of the plans', 'emyui-core' ),
                    
                    ]
                );
                /* */ 
        $repeater->add_control(
			'hr6featurestyle41serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style41serviceplantab',
                            'operator' => '>=',
                            'value' => '6'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '4style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'7featurestyle41serviceplantab',
			[
				'label' => esc_html__( 'Seventh Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style41serviceplantab',
                            'operator' => '>=',
                            'value' => '7'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '4style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has7featurestyle41serviceplantab',
            [
              'label' => esc_html__( 'Seventh Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style41serviceplantab',
                        'operator' => '>=',
                        'value' => '7'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '4style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle2included1',
              'options' => [
                'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink7featurestyle41serviceplantab', [
                'label' => esc_html__( 'Seventh Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style41serviceplantab',
                            'operator' => '>=',
                            'value' => '7'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '4style'
                        ],
                        [
                            'name' => 'has7featurestyle41serviceplantab',
                            'operator' => '===',
                            'value' => 'leftboxstyle2haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
                        /* */
                        $repeater->add_control(
                            'badge7featurestyle41serviceplantab',
                            [
                              'label' => esc_html__( 'Seventh Feature Badge', 'emyui-core' ),
                              'type' => \Elementor\Controls_Manager::SELECT,                
                              'conditions' => [
                                'relation' => 'and',
                                'terms' => [
                                    [
                                        'name' => 'featuresnumber2style41serviceplantab',
                                        'operator' => '>=',
                                        'value' => '7'
                                    ],
                                    [
                                        'name' => 'boxstyleserviceplantab',
                                        'operator' => '===',
                                        'value' => '4style'
                                    ],
                                ]
                                ],
                              'default' => 'greenboxstyle2included1',
                              'options' => [
                                'greenboxstyle2included1'  => esc_html__( 'Green', 'emyui-core' ),
                                'redboxstyle2haslink1' => esc_html__( 'Red', 'emyui-core' ),
                                'grayboxstyle2haslink1' => esc_html__( 'Gray', 'emyui-core' ),
                                'noboxstyle2haslink1' => esc_html__( 'No Badge', 'emyui-core' ),
                
                              ],
                            ]
                          );
                          $repeater->add_control(
                            'badgetitle7featurestyle41serviceplantab',
                            [
                                'label' => esc_html__( 'Seventh Feature Badge Title', 'emyui-core' ),
                                'type' => \Elementor\Controls_Manager::TEXT,
                                'conditions' => [
                                    'relation' => 'and',
                                    'terms' => [
                                        [
                                            'name' => 'featuresnumber2style41serviceplantab',
                                            'operator' => '>=',
                                            'value' => '7'
                                        ],
                                        [
                                            'name' => 'boxstyleserviceplantab',
                                            'operator' => '===',
                                            'value' => '4style'
                                        ],
                                        [
                                            'relation' => 'or',
                                            'terms' => [
                                                [
                                                    'name' => 'badge7featurestyle41serviceplantab',
                                                    'operator' => '===',
                                                    'value' => 'greenboxstyle2included1'
                                                ],
                                                [
                                                    'name' => 'badge7featurestyle41serviceplantab',
                                                    'operator' => '===',
                                                    'value' => 'redboxstyle2haslink1'
                                                ],
                                                [
                                                    'name' => 'badge7featurestyle41serviceplantab',
                                                    'operator' => '===',
                                                    'value' => 'grayboxstyle2haslink1'
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                'default' => esc_html__( 'included with all of the plans', 'emyui-core' ),
                            
                            ]
                        );
                        /* */ 
        $repeater->add_control(
			'hr7featurestyle41serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style41serviceplantab',
                            'operator' => '>=',
                            'value' => '7'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '4style'
                        ],
                    ]
                    ],   
			]
		);
        $repeater->add_control(
			'8featurestyle41serviceplantab',
			[
				'label' => esc_html__( 'Eighth Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style41serviceplantab',
                            'operator' => '>=',
                            'value' => '8'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '4style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has8featurestyle41serviceplantab',
            [
              'label' => esc_html__( 'Eighth Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style41serviceplantab',
                        'operator' => '>=',
                        'value' => '8'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '4style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle2included1',
              'options' => [
                'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle2haslink1' => esc_html__( 'Has Link', 'emyui-core' ),
              ],
            ]
          );
          $repeater->add_control(
            'haslink8featurestyle41serviceplantab', [
                'label' => esc_html__( 'Eighth Feature Tooltip Description', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style41serviceplantab',
                            'operator' => '>=',
                            'value' => '8'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '4style'
                        ],
                        [
                            'name' => 'has8featurestyle41serviceplantab',
                            'operator' => '===',
                            'value' => 'leftboxstyle2haslink1'
                        ],
                    ]
                    ],                
                    'default' => esc_html__( 'Now with our Free SSL you get added security and can gain your customers trust on your website.' , 'emyui-core' ),
            ]
        );
                        /* */
                        $repeater->add_control(
                            'badge8featurestyle41serviceplantab',
                            [
                              'label' => esc_html__( 'Eighth Feature Badge', 'emyui-core' ),
                              'type' => \Elementor\Controls_Manager::SELECT,                
                              'conditions' => [
                                'relation' => 'and',
                                'terms' => [
                                    [
                                        'name' => 'featuresnumber2style41serviceplantab',
                                        'operator' => '>=',
                                        'value' => '8'
                                    ],
                                    [
                                        'name' => 'boxstyleserviceplantab',
                                        'operator' => '===',
                                        'value' => '4style'
                                    ],
                                ]
                                ],
                              'default' => 'greenboxstyle2included1',
                              'options' => [
                                'greenboxstyle2included1'  => esc_html__( 'Green', 'emyui-core' ),
                                'redboxstyle2haslink1' => esc_html__( 'Red', 'emyui-core' ),
                                'grayboxstyle2haslink1' => esc_html__( 'Gray', 'emyui-core' ),
                                'noboxstyle2haslink1' => esc_html__( 'No Badge', 'emyui-core' ),
                
                              ],
                            ]
                          );
                          $repeater->add_control(
                            'badgetitle8featurestyle41serviceplantab',
                            [
                                'label' => esc_html__( 'Eighth Feature Badge Title', 'emyui-core' ),
                                'type' => \Elementor\Controls_Manager::TEXT,
                                'conditions' => [
                                    'relation' => 'and',
                                    'terms' => [
                                        [
                                            'name' => 'featuresnumber2style41serviceplantab',
                                            'operator' => '>=',
                                            'value' => '8'
                                        ],
                                        [
                                            'name' => 'boxstyleserviceplantab',
                                            'operator' => '===',
                                            'value' => '4style'
                                        ],
                                        [
                                            'relation' => 'or',
                                            'terms' => [
                                                [
                                                    'name' => 'badge8featurestyle41serviceplantab',
                                                    'operator' => '===',
                                                    'value' => 'greenboxstyle2included1'
                                                ],
                                                [
                                                    'name' => 'badge8featurestyle41serviceplantab',
                                                    'operator' => '===',
                                                    'value' => 'redboxstyle2haslink1'
                                                ],
                                                [
                                                    'name' => 'badge8featurestyle41serviceplantab',
                                                    'operator' => '===',
                                                    'value' => 'grayboxstyle2haslink1'
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                'default' => esc_html__( 'included with all of the plans', 'emyui-core' ),
                            
                            ]
                        );
                        /* */ 
        $repeater->add_control(
			'hr8featurestyle41serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style41serviceplantab',
                            'operator' => '>=',
                            'value' => '8'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '4style'
                        ],
                    ]
                    ],   
			]
		); 
/* Price Box - Fourth Style - ended */
/* Left Box - Fifth Style - started */
$repeater->add_control(
    'h1style51serviceplantab',
    [
        'label' => esc_html__( 'Left Box', 'emyui-core' ),
        'condition' => [ 'boxstyleserviceplantab' => '5style' ],
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);
   $repeater->add_control(
			'titlestyle51serviceplantab',
			[
				'label' => esc_html__( 'Left Box Title', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '5style' ],
				'default' => esc_html__( 'for small business', 'emyui-core' ),
			
			]
		);
    $repeater->add_control(
			'pricestyle51serviceplantab',
			[
				'label' => esc_html__( 'Left Box Monthly price', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '5style' ],
				'default' => esc_html__( '$12', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'periodstyle51serviceplantab',
            [
                'label' => esc_html__( 'Left Box Period', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '5style' ],
                'default' => esc_html__( 'Monthly', 'emyui-core' ),
            
            ]
        );
        $repeater->add_control(
			'descstyle51serviceplantab',
			[
				'label' => esc_html__( 'Left Box Descripstion', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '5style' ],
				'default' => esc_html__( 'Fast SSD Storage and Real 24/7 Technical Support.', 'emyui-core' ),
			
			]
		);
    $repeater->add_control(
			'buttonstyle51serviceplantab',
			[
				'label' => esc_html__( 'Left Box Button', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '5style' ],
				'default' => esc_html__( 'Order Now', 'emyui-core' ),
			
			]
		);
    $repeater->add_control(
			'buttonlinkstyle51serviceplantab',
			[
				'label' => esc_html__( 'Left Box Button Link', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '5style' ],
				'default' => esc_html__( '#', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
			'hr1style51serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
                'condition' => [ 'boxstyleserviceplantab' => '5style' ],
			]
		);
        $repeater->add_control(
			'featuresnumber2style51serviceplantab',
			[
				'label' => esc_html__( 'Left Box Number of features', 'emyui-core' ),
                'condition' => [ 'boxstyleserviceplantab' => '5style' ],
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 8,
				'step' => 1,
				'default' => 8,
			]
		);
        $repeater->add_control(
			'1featurestyle51serviceplantab',
			[
				'label' => esc_html__( 'First Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style51serviceplantab',
                            'operator' => '>=',
                            'value' => '1'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has1featurestyle51serviceplantab',
            [
              'label' => esc_html__( 'First Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style51serviceplantab',
                        'operator' => '>=',
                        'value' => '1'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '5style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle2included1',
              'options' => [
                'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
              ],
            ]
          );
        $repeater->add_control(
			'hr1featurestyle51serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style51serviceplantab',
                            'operator' => '>=',
                            'value' => '1'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'2featurestyle51serviceplantab',
			[
				'label' => esc_html__( 'Second Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style51serviceplantab',
                            'operator' => '>=',
                            'value' => '2'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has2featurestyle51serviceplantab',
            [
              'label' => esc_html__( 'Second Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style51serviceplantab',
                        'operator' => '>=',
                        'value' => '2'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '5style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle2included1',
              'options' => [
                'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
              ],
            ]
          );
        $repeater->add_control(
			'hr2featurestyle51serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style51serviceplantab',
                            'operator' => '>=',
                            'value' => '2'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'3featurestyle51serviceplantab',
			[
				'label' => esc_html__( 'Third Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style51serviceplantab',
                            'operator' => '>=',
                            'value' => '3'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has3featurestyle51serviceplantab',
            [
              'label' => esc_html__( 'Third Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style51serviceplantab',
                        'operator' => '>=',
                        'value' => '3'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '5style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle2included1',
              'options' => [
                'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
              ],
            ]
          );
        $repeater->add_control(
			'hr3featurestyle51serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style51serviceplantab',
                            'operator' => '>=',
                            'value' => '3'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'4featurestyle51serviceplantab',
			[
				'label' => esc_html__( 'Fourth Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style51serviceplantab',
                            'operator' => '>=',
                            'value' => '4'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has4featurestyle51serviceplantab',
            [
              'label' => esc_html__( 'Fourth Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style51serviceplantab',
                        'operator' => '>=',
                        'value' => '4'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '5style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle2included1',
              'options' => [
                'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
              ],
            ]
          );
        $repeater->add_control(
			'hr4featurestyle51serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style51serviceplantab',
                            'operator' => '>=',
                            'value' => '4'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'5featurestyle51serviceplantab',
			[
				'label' => esc_html__( 'Fifth Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style51serviceplantab',
                            'operator' => '>=',
                            'value' => '5'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has5featurestyle51serviceplantab',
            [
              'label' => esc_html__( 'Fifth Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style51serviceplantab',
                        'operator' => '>=',
                        'value' => '5'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '5style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle2included1',
              'options' => [
                'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
              ],
            ]
          );
        $repeater->add_control(
			'hr5featurestyle51serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style51serviceplantab',
                            'operator' => '>=',
                            'value' => '5'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'6featurestyle51serviceplantab',
			[
				'label' => esc_html__( 'Sixth Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style51serviceplantab',
                            'operator' => '>=',
                            'value' => '6'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has6featurestyle51serviceplantab',
            [
              'label' => esc_html__( 'Sixth Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style51serviceplantab',
                        'operator' => '>=',
                        'value' => '6'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '5style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle2included1',
              'options' => [
                'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
              ],
            ]
          );
        $repeater->add_control(
			'hr6featurestyle51serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style51serviceplantab',
                            'operator' => '>=',
                            'value' => '6'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'7featurestyle51serviceplantab',
			[
				'label' => esc_html__( 'Seventh Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style51serviceplantab',
                            'operator' => '>=',
                            'value' => '7'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has7featurestyle51serviceplantab',
            [
              'label' => esc_html__( 'Seventh Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style51serviceplantab',
                        'operator' => '>=',
                        'value' => '7'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '5style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle2included1',
              'options' => [
                'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
              ],
            ]
          );
        $repeater->add_control(
			'hr7featurestyle51serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style51serviceplantab',
                            'operator' => '>=',
                            'value' => '7'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],   
			]
		);
        $repeater->add_control(
			'8featurestyle51serviceplantab',
			[
				'label' => esc_html__( 'Eighth Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style51serviceplantab',
                            'operator' => '>=',
                            'value' => '8'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has8featurestyle51serviceplantab',
            [
              'label' => esc_html__( 'Eighth Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style51serviceplantab',
                        'operator' => '>=',
                        'value' => '8'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '5style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle2included1',
              'options' => [
                'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
              ],
            ]
          );
        $repeater->add_control(
			'hr8featurestyle51serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style51serviceplantab',
                            'operator' => '>=',
                            'value' => '8'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],   
			]
		); 
/* Left Box - Fifth Style - ended */
/* Middle Box - Fifth Style - started */
$repeater->add_control(
    'h1style52serviceplantab',
    [
        'label' => esc_html__( 'Middle Box', 'emyui-core' ),
        'condition' => [ 'boxstyleserviceplantab' => '5style' ],
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);
   $repeater->add_control(
			'titlestyle52serviceplantab',
			[
				'label' => esc_html__( 'Middle Box Title', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '5style' ],
				'default' => esc_html__( 'for small business', 'emyui-core' ),
			
			]
		);
    $repeater->add_control(
			'pricestyle52serviceplantab',
			[
				'label' => esc_html__( 'Middle Box Monthly price', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '5style' ],
				'default' => esc_html__( '$12', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'periodstyle52serviceplantab',
            [
                'label' => esc_html__( 'Middle Box Period', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '5style' ],
                'default' => esc_html__( 'Monthly', 'emyui-core' ),
            
            ]
        );
        $repeater->add_control(
			'descstyle52serviceplantab',
			[
				'label' => esc_html__( 'Middle Box Descripstion', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '5style' ],
				'default' => esc_html__( 'Fast SSD Storage and Real 24/7 Technical Support.', 'emyui-core' ),
			
			]
		);
    $repeater->add_control(
			'buttonstyle52serviceplantab',
			[
				'label' => esc_html__( 'Middle Box Button', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '5style' ],
				'default' => esc_html__( 'Order Now', 'emyui-core' ),
			
			]
		);
    $repeater->add_control(
			'buttonlinkstyle52serviceplantab',
			[
				'label' => esc_html__( 'Middle Box Button Link', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '5style' ],
				'default' => esc_html__( '#', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
			'hr1style52serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
                'condition' => [ 'boxstyleserviceplantab' => '5style' ],
			]
		);
        $repeater->add_control(
			'featuresnumber2style52serviceplantab',
			[
				'label' => esc_html__( 'Middle Box Number of features', 'emyui-core' ),
                'condition' => [ 'boxstyleserviceplantab' => '5style' ],
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 8,
				'step' => 1,
				'default' => 8,
			]
		);
        $repeater->add_control(
			'1featurestyle52serviceplantab',
			[
				'label' => esc_html__( 'First Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style52serviceplantab',
                            'operator' => '>=',
                            'value' => '1'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has1featurestyle52serviceplantab',
            [
              'label' => esc_html__( 'First Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style52serviceplantab',
                        'operator' => '>=',
                        'value' => '1'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '5style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle2included1',
              'options' => [
                'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
              ],
            ]
          );
        $repeater->add_control(
			'hr1featurestyle52serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style52serviceplantab',
                            'operator' => '>=',
                            'value' => '1'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'2featurestyle52serviceplantab',
			[
				'label' => esc_html__( 'Second Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style52serviceplantab',
                            'operator' => '>=',
                            'value' => '2'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has2featurestyle52serviceplantab',
            [
              'label' => esc_html__( 'Second Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style52serviceplantab',
                        'operator' => '>=',
                        'value' => '2'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '5style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle2included1',
              'options' => [
                'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
              ],
            ]
          );
        $repeater->add_control(
			'hr2featurestyle52serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style52serviceplantab',
                            'operator' => '>=',
                            'value' => '2'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'3featurestyle52serviceplantab',
			[
				'label' => esc_html__( 'Third Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style52serviceplantab',
                            'operator' => '>=',
                            'value' => '3'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has3featurestyle52serviceplantab',
            [
              'label' => esc_html__( 'Third Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style52serviceplantab',
                        'operator' => '>=',
                        'value' => '3'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '5style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle2included1',
              'options' => [
                'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
              ],
            ]
          );
        $repeater->add_control(
			'hr3featurestyle52serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style52serviceplantab',
                            'operator' => '>=',
                            'value' => '3'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'4featurestyle52serviceplantab',
			[
				'label' => esc_html__( 'Fourth Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style52serviceplantab',
                            'operator' => '>=',
                            'value' => '4'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has4featurestyle52serviceplantab',
            [
              'label' => esc_html__( 'Fourth Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style52serviceplantab',
                        'operator' => '>=',
                        'value' => '4'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '5style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle2included1',
              'options' => [
                'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
              ],
            ]
          );
        $repeater->add_control(
			'hr4featurestyle52serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style52serviceplantab',
                            'operator' => '>=',
                            'value' => '4'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'5featurestyle52serviceplantab',
			[
				'label' => esc_html__( 'Fifth Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style52serviceplantab',
                            'operator' => '>=',
                            'value' => '5'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has5featurestyle52serviceplantab',
            [
              'label' => esc_html__( 'Fifth Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style52serviceplantab',
                        'operator' => '>=',
                        'value' => '5'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '5style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle2included1',
              'options' => [
                'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
              ],
            ]
          );
        $repeater->add_control(
			'hr5featurestyle52serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style52serviceplantab',
                            'operator' => '>=',
                            'value' => '5'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'6featurestyle52serviceplantab',
			[
				'label' => esc_html__( 'Sixth Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style52serviceplantab',
                            'operator' => '>=',
                            'value' => '6'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has6featurestyle52serviceplantab',
            [
              'label' => esc_html__( 'Sixth Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style52serviceplantab',
                        'operator' => '>=',
                        'value' => '6'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '5style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle2included1',
              'options' => [
                'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
              ],
            ]
          );
        $repeater->add_control(
			'hr6featurestyle52serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style52serviceplantab',
                            'operator' => '>=',
                            'value' => '6'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'7featurestyle52serviceplantab',
			[
				'label' => esc_html__( 'Seventh Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style52serviceplantab',
                            'operator' => '>=',
                            'value' => '7'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has7featurestyle52serviceplantab',
            [
              'label' => esc_html__( 'Seventh Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style52serviceplantab',
                        'operator' => '>=',
                        'value' => '7'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '5style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle2included1',
              'options' => [
                'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
              ],
            ]
          );
        $repeater->add_control(
			'hr7featurestyle52serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style52serviceplantab',
                            'operator' => '>=',
                            'value' => '7'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],   
			]
		);
        $repeater->add_control(
			'8featurestyle52serviceplantab',
			[
				'label' => esc_html__( 'Eighth Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style52serviceplantab',
                            'operator' => '>=',
                            'value' => '8'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has8featurestyle52serviceplantab',
            [
              'label' => esc_html__( 'Eighth Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style52serviceplantab',
                        'operator' => '>=',
                        'value' => '8'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '5style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle2included1',
              'options' => [
                'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
              ],
            ]
          );
        $repeater->add_control(
			'hr8featurestyle52serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style52serviceplantab',
                            'operator' => '>=',
                            'value' => '8'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],   
			]
		); 
/* Middle Box - Fifth Style - ended */
$repeater->add_control(
    'h1style53serviceplantab',
    [
        'label' => esc_html__( 'Right Box', 'emyui-core' ),
        'condition' => [ 'boxstyleserviceplantab' => '5style' ],
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);
   $repeater->add_control(
			'titlestyle53serviceplantab',
			[
				'label' => esc_html__( 'Right Box Title', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '5style' ],
				'default' => esc_html__( 'for small business', 'emyui-core' ),
			
			]
		);
    $repeater->add_control(
			'pricestyle53serviceplantab',
			[
				'label' => esc_html__( 'Right Box Monthly price', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '5style' ],
				'default' => esc_html__( '$12', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'periodstyle53serviceplantab',
            [
                'label' => esc_html__( 'Right Box Period', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '5style' ],
                'default' => esc_html__( 'Monthly', 'emyui-core' ),
            
            ]
        );
        $repeater->add_control(
			'descstyle53serviceplantab',
			[
				'label' => esc_html__( 'Right Box Descripstion', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '5style' ],
				'default' => esc_html__( 'Fast SSD Storage and Real 24/7 Technical Support.', 'emyui-core' ),
			
			]
		);
    $repeater->add_control(
			'buttonstyle53serviceplantab',
			[
				'label' => esc_html__( 'Right Box Button', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '5style' ],
				'default' => esc_html__( 'Order Now', 'emyui-core' ),
			
			]
		);
    $repeater->add_control(
			'buttonlinkstyle53serviceplantab',
			[
				'label' => esc_html__( 'Right Box Button Link', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [ 'boxstyleserviceplantab' => '5style' ],
				'default' => esc_html__( '#', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
			'hr1style53serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
                'condition' => [ 'boxstyleserviceplantab' => '5style' ],
			]
		);
        $repeater->add_control(
			'featuresnumber2style53serviceplantab',
			[
				'label' => esc_html__( 'Right Box Number of features', 'emyui-core' ),
                'condition' => [ 'boxstyleserviceplantab' => '5style' ],
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 8,
				'step' => 1,
				'default' => 8,
			]
		);
        $repeater->add_control(
			'1featurestyle53serviceplantab',
			[
				'label' => esc_html__( 'First Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style53serviceplantab',
                            'operator' => '>=',
                            'value' => '1'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has1featurestyle53serviceplantab',
            [
              'label' => esc_html__( 'First Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style53serviceplantab',
                        'operator' => '>=',
                        'value' => '1'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '5style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle2included1',
              'options' => [
                'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
              ],
            ]
          );
        $repeater->add_control(
			'hr1featurestyle53serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style53serviceplantab',
                            'operator' => '>=',
                            'value' => '1'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'2featurestyle53serviceplantab',
			[
				'label' => esc_html__( 'Second Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style53serviceplantab',
                            'operator' => '>=',
                            'value' => '2'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has2featurestyle53serviceplantab',
            [
              'label' => esc_html__( 'Second Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style53serviceplantab',
                        'operator' => '>=',
                        'value' => '2'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '5style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle2included1',
              'options' => [
                'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
              ],
            ]
          );
        $repeater->add_control(
			'hr2featurestyle53serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style53serviceplantab',
                            'operator' => '>=',
                            'value' => '2'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'3featurestyle53serviceplantab',
			[
				'label' => esc_html__( 'Third Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style53serviceplantab',
                            'operator' => '>=',
                            'value' => '3'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has3featurestyle53serviceplantab',
            [
              'label' => esc_html__( 'Third Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style53serviceplantab',
                        'operator' => '>=',
                        'value' => '3'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '5style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle2included1',
              'options' => [
                'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
              ],
            ]
          );
        $repeater->add_control(
			'hr3featurestyle53serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style53serviceplantab',
                            'operator' => '>=',
                            'value' => '3'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'4featurestyle53serviceplantab',
			[
				'label' => esc_html__( 'Fourth Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style53serviceplantab',
                            'operator' => '>=',
                            'value' => '4'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has4featurestyle53serviceplantab',
            [
              'label' => esc_html__( 'Fourth Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style53serviceplantab',
                        'operator' => '>=',
                        'value' => '4'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '5style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle2included1',
              'options' => [
                'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
              ],
            ]
          );
        $repeater->add_control(
			'hr4featurestyle53serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style53serviceplantab',
                            'operator' => '>=',
                            'value' => '4'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'5featurestyle53serviceplantab',
			[
				'label' => esc_html__( 'Fifth Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style53serviceplantab',
                            'operator' => '>=',
                            'value' => '5'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has5featurestyle53serviceplantab',
            [
              'label' => esc_html__( 'Fifth Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style53serviceplantab',
                        'operator' => '>=',
                        'value' => '5'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '5style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle2included1',
              'options' => [
                'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
              ],
            ]
          );
        $repeater->add_control(
			'hr5featurestyle53serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style53serviceplantab',
                            'operator' => '>=',
                            'value' => '5'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'6featurestyle53serviceplantab',
			[
				'label' => esc_html__( 'Sixth Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style53serviceplantab',
                            'operator' => '>=',
                            'value' => '6'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has6featurestyle53serviceplantab',
            [
              'label' => esc_html__( 'Sixth Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style53serviceplantab',
                        'operator' => '>=',
                        'value' => '6'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '5style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle2included1',
              'options' => [
                'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
              ],
            ]
          );
        $repeater->add_control(
			'hr6featurestyle53serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style53serviceplantab',
                            'operator' => '>=',
                            'value' => '6'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],   
			]
		);
          $repeater->add_control(
			'7featurestyle53serviceplantab',
			[
				'label' => esc_html__( 'Seventh Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style53serviceplantab',
                            'operator' => '>=',
                            'value' => '7'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has7featurestyle53serviceplantab',
            [
              'label' => esc_html__( 'Seventh Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style53serviceplantab',
                        'operator' => '>=',
                        'value' => '7'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '5style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle2included1',
              'options' => [
                'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
              ],
            ]
          );
        $repeater->add_control(
			'hr7featurestyle53serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style53serviceplantab',
                            'operator' => '>=',
                            'value' => '7'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],   
			]
		);
        $repeater->add_control(
			'8featurestyle53serviceplantab',
			[
				'label' => esc_html__( 'Eighth Feature', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style53serviceplantab',
                            'operator' => '>=',
                            'value' => '8'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],
				'default' => esc_html__( 'FREE SSL Certificate', 'emyui-core' ),
			
			]
		);
        $repeater->add_control(
            'has8featurestyle53serviceplantab',
            [
              'label' => esc_html__( 'Eighth Feature Style', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::SELECT,                
              'conditions' => [
                'relation' => 'and',
                'terms' => [
                    [
                        'name' => 'featuresnumber2style53serviceplantab',
                        'operator' => '>=',
                        'value' => '8'
                    ],
                    [
                        'name' => 'boxstyleserviceplantab',
                        'operator' => '===',
                        'value' => '5style'
                    ],
                ]
                ],
              'default' => 'leftboxstyle2included1',
              'options' => [
                'leftboxstyle2included1'  => esc_html__( 'Is it included?', 'emyui-core' ),
                'leftboxstyle2notincluded1' => esc_html__( 'Is not included?', 'emyui-core' ),
              ],
            ]
          );
        $repeater->add_control(
			'hr8featurestyle53serviceplantab',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,    
                    'conditions' => [
                    'relation' => 'and',
                    'terms' => [
                        [
                            'name' => 'featuresnumber2style53serviceplantab',
                            'operator' => '>=',
                            'value' => '8'
                        ],
                        [
                            'name' => 'boxstyleserviceplantab',
                            'operator' => '===',
                            'value' => '5style'
                        ],
                    ]
                    ],   
			]
		); 
/* Right Box - Fifth Style - ended */

  $this->add_control(
      'boxesstyleserviceplantab',
      [
          'label' => esc_html__( 'Question & Answer', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::REPEATER,
          'fields' => $repeater->get_controls(),
          'default' => [
              [
                  'nameserviceplantab' => esc_html__( 'Web Hosting', 'emyui-core' ),
                  'desc1serviceplantab' => esc_html__( 'Lorem Ipsum is simply dummy', 'emyui-core' ),
      
              ],
          ],
      ]
      );
          $this->end_controls_section();
        }
 

  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>

      <!-- START main slider plans -->
      <div class="container mt-lg-n30 mt-n15">
			    <!-- START slider -->
                <div class="main-homepage-plans-slider">
                <?php if ( $settings['boxesstyleserviceplantab'] ) {
                        foreach (  $settings['boxesstyleserviceplantab'] as $item ) {
                            if ( $item['boxstyleserviceplantab'] === '1style' ) { ?>
				    <!-- START first slider plans -->
                    <div class="main-homepage-item">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6 col-sm-8 mb-9 pr-lg-0">
                                <div class="cpanel-plan side-plan plan-1 box-shadow-1 bg-white rounded-left-20 text-center pb-10 pt-15 pr-6 pl-6 position-relative overflow-hidden mt-12">
                                    <h5 class="title coodiv-text-5 mb-7 d-inline-block"><?php echo  esc_html($item['title1style1serviceplantab']); ?></h5>
                                    <div id="pricing-dynamic-deck2" class="mb-9" data-pricing-dynamic="" data-value-active="yearly">
                                        <div class="mb-4 d-inline-flex position-relative" id="pricing-dynamic-deck--head2">
                                            <a href="javascript:" class="btn-toggle active mx-3 price-deck-trigger" data-pricing-trigger="" data-target="#pricing-dynamic-deck2">
                                                <span class="round"></span> <span class="year"><?php echo _e('سالانه'); ?></span> <span class="month"><?php echo _e('ماهانه'); ?></span>
                                            </a>
                                        </div>

                                        <div class="d-flex align-items-end justify-content-center mt-1">
                                            <span class="currency mr-2 coodiv-text-6 font-weight-bold line-spacing-none text-blackish-blue"><?php echo  esc_html($item['currency1style1serviceplantab']); ?></span>
                                            <h2 class="price-value coodiv-text-2 font-weight-bold line-spacing-none mb-0 dynamic-value text-blackish-blue" data-active="<?php echo  esc_attr($item['price1yearlystyle1serviceplantab']); ?>" data-monthly="<?php echo  esc_attr($item['price1monthlystyle1serviceplantab']); ?>" data-yearly="<?php echo  esc_attr($item['price1yearlystyle1serviceplantab']); ?>">
                                                <span class="d-none">.</span>
                                                <span class="price-value-little-chifre"><?php echo  esc_html($item['Decimals1style1serviceplantab']); ?></span>
                                            </h2>
                                        </div>
                                        <span
                                            class="price-bottom-text dynamic-value coodiv-text-11 mt-5 text-blackish-blue coodiv-opacity-7 d-inline-flex"
                                            data-active="<?php echo  esc_attr($item['periodyearly1style1serviceplantab']); ?>"
                                            data-monthly="<?php echo  esc_attr($item['periodmonthly1style1serviceplantab']); ?>"
                                            data-yearly="<?php echo  esc_attr($item['periodyearly1style1serviceplantab']); ?>"
                                        ></span>
                                    </div>

                                    <ul class="special-helf-box-list list-style-check mt-7 mt-lg-3">
                                     

                                        <?php for ($x = 1; $x <= $item['featuresnumber1style1serviceplantab']; $x++){
                                            $has = 'has' . $x .'featurestyle1serviceplantab'; 
                                            $featuret= $x .'featurestyle1serviceplantab' ;
                                            $tooltipdesc = 'haslink' . $x . 'featurestyle1serviceplantab';
                                            ?>
                                        <?php if ( $item[$has] === 'leftboxstyle1haslink1' ) { ?>
                                        <li class="chacked">
                                            <a tabindex="0" class="popover-host-features" data-placement="top" role="button" data-toggle="popover" data-trigger="focus" title="<?php echo  esc_attr($item[$featuret]); ?>" data-content="<?php echo  esc_attr($item[$tooltipdesc]); ?>">
                                            <?php echo  esc_html($item[$featuret]); ?>
                                            </a>
                                        </li>
                                        <?php }elseif( $item[$has] === 'leftboxstyle1included1' ){ ?>
                                        <li class="chacked"><?php echo  esc_html($item[$featuret]); ?></li>
                                        <?php }elseif( $item[$has] === 'leftboxstyle1notincluded1' ){ ?>

                                        <li class="not-chacked"><?php echo  esc_html($item[$featuret]); ?></li>
                                        <?php }
                                                }
                                        ?>
                                        
                                    </ul>
                                    <a class="btn btn-warning coodiv-text-9 d-block w-100 mt-8" href="<?php echo  esc_url($item['buttonlink1style1serviceplantab']); ?>">
                                    <?php echo  esc_html($item['button1style1serviceplantab']); ?>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-8 mb-9 pl-lg-0">
                                <!-- .pricing card -->
                                <div class="cpanel-plan plan-1 box-shadow-1 bg-white rounded-20 text-center pb-10 pt-15 pr-6 pl-6 position-relative overflow-hidden border-left-separate">
                                    <span class="cpanel-plan-recommend"><?php echo  esc_html($item['toptitle2style12serviceplantab']); ?></span>
                                    <?php   if ( 'yes' === $item['isofferstyle12serviceplantab'] ) { ?>
                                    <span class="cpanel-plan-off"><?php echo  esc_html($item['offerstyle12serviceplantab']); ?></span>
                                    <?php  } ?>
                                    <h5 class="title coodiv-text-5 mb-7 mt-5 d-inline-block"><?php echo  esc_html($item['title1style12serviceplantab']); ?></h5>
                                    <div id="pricing-dynamic-deck1" class="mb-9" data-pricing-dynamic="" data-value-active="yearly">
                                        <div class="mb-4 d-inline-flex position-relative" id="pricing-dynamic-deck--head1">
                                            <a href="javascript:" class="btn-toggle active mx-3 price-deck-trigger" data-pricing-trigger="" data-target="#pricing-dynamic-deck1">
                                                <span class="round"></span> <span class="year"><?php echo _e('سالانه'); ?></span> <span class="month"><?php echo _e('ماهانه'); ?></span>
                                            </a>
                                        </div>

                                        <div class="d-flex align-items-end justify-content-center mt-1">
                                            <span class="currency mr-2 coodiv-text-6 font-weight-bold line-spacing-none text-blackish-blue"><?php echo  esc_html($item['currency1style12serviceplantab']); ?></span>
                                            <h2 class="price-value coodiv-text-2 font-weight-bold line-spacing-none mb-0 dynamic-value text-blackish-blue" data-active="<?php echo  esc_attr($item['price1yearlystyle12serviceplantab']); ?>" data-monthly="<?php echo  esc_attr($item['price1monthlystyle12serviceplantab']); ?>" data-yearly="<?php echo  esc_attr($item['price1yearlystyle12serviceplantab']); ?>">
                                                <span class="d-none">.</span>
                                                <span class="price-value-little-chifre"><?php echo  esc_html($item['Decimals1style12serviceplantab']); ?></span>
                                            </h2>
                                        </div>
                                        <span
                                            class="price-bottom-text dynamic-value coodiv-text-11 mt-5 text-blackish-blue coodiv-opacity-7 d-inline-flex"
                                            data-active="<?php echo  esc_attr($item['periodyearly1style12serviceplantab']); ?>"
                                            data-monthly="<?php echo  esc_attr($item['periodmonthly1style12serviceplantab']); ?>"
                                            data-yearly="<?php echo  esc_attr($item['periodyearly1style12serviceplantab']); ?>"
                                        ></span>
                                    </div>

                                    <ul class="special-helf-box-list list-style-check mt-7 mt-lg-3">    
                                        <?php for ($x = 1; $x <= $item['featuresnumber1style12serviceplantab']; $x++){
                                            $has = 'has' . $x .'featurestyle12serviceplantab'; 
                                            $featuret= $x .'featurestyle12serviceplantab' ;
                                            $tooltipdesc = 'haslink' . $x . 'featurestyle12serviceplantab';
                                            ?>
                                        <?php if ( $item[$has] === 'rightboxstyle1haslink1' ) { ?>
                                        <li class="chacked">
                                            <a tabindex="0" class="popover-host-features" data-placement="top" role="button" data-toggle="popover" data-trigger="focus" title="<?php echo  esc_attr($item[$featuret]); ?>" data-content="<?php echo  esc_attr($item[$tooltipdesc]); ?>">
                                            <?php echo  esc_html($item[$featuret]); ?>
                                            </a>
                                        </li>
                                        <?php }elseif( $item[$has] === 'rightboxstyle1included1' ){ ?>
                                        <li class="chacked"><?php echo  esc_html($item[$featuret]); ?></li>
                                        <?php }elseif( $item[$has] === 'rightboxstyle1notincluded1' ){ ?>

                                        <li class="not-chacked"><?php echo  esc_html($item[$featuret]); ?></li>
                                        <?php }
                                                }
                                        ?>
                                        
                                    </ul>

                                    <a class="btn btn-warning coodiv-text-9 d-block w-100 mt-8" href="<?php echo  esc_url($item['buttonlink1style12serviceplantab']); ?>">
                                    <?php echo  esc_html($item['button1style12serviceplantab']); ?>
                                    </a>
                                </div>
                                <!-- /.pricing carde Ends-->
                            </div>
                        </div>
                    </div>
					<!-- END first slider plans -->
                    <?php }elseif ( $item['boxstyleserviceplantab'] === '2style' ) {?>
					<!-- START second slider plans -->
                    <div class="main-homepage-item">
                        <div class="row justify-content-center px-md-2">
                            <div class="col-lg-4 col-md-4 col-sm-8 mb-9 px-8 px-md-4 px-lg-4">
                                <!-- .pricing card -->
                                <div class="pricing-plan-tree coodiv-hover-shadow-1 bg-white border rounded-10 text-center pt-6 pr-6 pl-6 pb-20 position-relative">
                                    <span class="badge-plan color1"><?php echo  esc_html($item['title2style2serviceplantab']); ?></span>
                                    <span class="plan-sub-title"><?php echo  esc_html($item['subtitle2style2serviceplantab']); ?></span>
                                    <img class="plan-sub-img" src="<?php echo esc_url(get_template_directory_uri()); ?>/image/ssl/ssl.png" alt="" />
                                    <h2 class="price-of-plan coodiv-text-3 font-weight-bold text-blackish-blue line-spacing-none mb-2 mt-5">
                                    <?php echo  esc_html($item['price1style2serviceplantab']); ?>
                                    </h2>
                                    <p class="coodiv-text-11 mb-7 mb-lg-5 coodiv-color-blackish-blue-opacity-7 pr-13 pl-13"><?php echo  esc_html($item['desc1style2serviceplantab']); ?></p>
                                    <ul class="card-list list-style-check pl-0 mt-7 mt-lg-8 justify-content-center-li">
                                    <?php for ($x = 1; $x <= $item['featuresnumber2style2serviceplantab']; $x++){
                                            $has = 'has' . $x .'featurestyle2serviceplantab'; 
                                            $featuret= $x .'featurestyle2serviceplantab' ;
                                            $tooltipdesc = 'haslink' . $x . 'featurestyle2serviceplantab';
                                            ?>
                                        <?php if ( $item[$has] === 'leftboxstyle2haslink1' ) { ?>
                                        <li class="coodiv-text-11">
                                            <a tabindex="0" class="popover-host-features" data-placement="top" role="button" data-toggle="popover" data-trigger="focus" title="<?php echo  $item[$featuret]; // phpcs:ignore?>" data-content="<?php echo  esc_attr($item[$tooltipdesc]); ?>">
                                            <?php echo  $item[$featuret]; // phpcs:ignore?></a>
                                        </li>
                                        <?php }elseif( $item[$has] === 'leftboxstyle2included1' ){ ?>
                                        <li class="coodiv-text-11"><?php echo  $item[$featuret]; // phpcs:ignore?></li>
                                        <?php }elseif( $item[$has] === 'leftboxstyle2notincluded1' ){ ?>
                                        <li class="disabled coodiv-text-11"><i class="icon icon-simple-remove"></i><?php echo  $item[$featuret]; // phpcs:ignore?></li>
                                        <?php }
                                                }
                                        ?>
                                    </ul>
                                    <a href="<?php echo  esc_url($item['buttonlink2style2serviceplantab']); ?>" class="btn-order color1"><span><?php echo  esc_html($item['button2style2serviceplantab']); ?></span></a>
                                </div>
                                <!-- /.pricing carde Ends-->
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-8 mb-9 px-8 px-md-4 px-lg-4">
                                <!-- .pricing card -->
                                <div class="pricing-plan-tree coodiv-hover-shadow-1 bg-white border rounded-10 text-center pt-6 pr-6 pl-6 pb-20 position-relative">
                                    <span class="badge-plan color2"><?php echo  esc_html($item['title2style22serviceplantab']); ?></span>
                                    <span class="plan-sub-title"><?php echo  esc_html($item['subtitle2style22serviceplantab']); ?></span>
                                    <img class="plan-sub-img" src="<?php echo esc_url(get_template_directory_uri()); ?>/image/ssl/ssl.png" alt="" />
                                    <h2 class="price-of-plan coodiv-text-3 font-weight-bold text-blackish-blue line-spacing-none mb-2 mt-5">
                                    <?php echo  esc_html($item['price1style22serviceplantab']); ?>
                                    </h2>
                                    <p class="coodiv-text-11 mb-7 mb-lg-5 coodiv-color-blackish-blue-opacity-7 pr-13 pl-13"><?php echo  esc_html($item['desc1style22serviceplantab']); ?></p>
                                    <ul class="card-list list-style-check pl-0 mt-7 mt-lg-8 justify-content-center-li">
                                    <?php for ($x = 1; $x <= $item['featuresnumber2style22serviceplantab']; $x++){
                                        $has = 'has' . $x .'featurestyle22serviceplantab'; 
                                        $featuret= $x .'featurestyle22serviceplantab' ;
                                        $tooltipdesc = 'haslink' . $x . 'featurestyle22serviceplantab';
                                        ?>
                                    <?php if ( $item[$has] === 'leftboxstyle2haslink1' ) { ?>
                                    <li class="coodiv-text-11">
                                        <a tabindex="0" class="popover-host-features" data-placement="top" role="button" data-toggle="popover" data-trigger="focus" title="<?php echo  esc_attr($item[$featuret]); ?>" data-content="<?php echo  esc_attr($item[$tooltipdesc]); ?>">
                                        <?php echo  esc_html($item[$featuret]); ?></a>
                                    </li>
                                    <?php }elseif( $item[$has] === 'leftboxstyle2included1' ){ ?>
                                    <li class="coodiv-text-11"><?php echo  esc_html($item[$featuret]); ?></li>
                                    <?php }elseif( $item[$has] === 'leftboxstyle2notincluded1' ){ ?>
                                    <li class="disabled coodiv-text-11"><i class="icon icon-simple-remove"></i><?php echo  esc_html(esc_html($item[$featuret])); ?></li>
                                    <?php }
                                            }
                                    ?>
                                    </ul>
                                    <a href="<?php echo  esc_url($item['buttonlink2style22serviceplantab']); ?>" class="btn-order color2"><span><?php echo  esc_html($item['button2style22serviceplantab']); ?></span></a>
                                </div>
                                <!-- /.pricing carde Ends-->
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-8 mb-9 px-8 px-md-4 px-lg-4">
                                <!-- .pricing card -->
                                <div class="pricing-plan-tree coodiv-hover-shadow-1 bg-white border rounded-10 text-center pt-6 pr-6 pl-6 pb-20 position-relative">
                                    <span class="badge-plan color3"><?php echo  esc_html($item['title2style23serviceplantab']); ?></span>
                                    <span class="plan-sub-title"><?php echo  esc_html($item['subtitle2style23serviceplantab']); ?></span>
                                    <img class="plan-sub-img" src="<?php echo esc_url(get_template_directory_uri()); ?>/image/ssl/ssls.png" alt="" />
                                    <h2 class="price-of-plan coodiv-text-3 font-weight-bold text-blackish-blue line-spacing-none mb-2 mt-5">
                                    <?php echo  esc_html($item['price1style23serviceplantab']); ?>
                                    </h2>
                                    <p class="coodiv-text-11 mb-7 mb-lg-5 coodiv-color-blackish-blue-opacity-7 pr-13 pl-13"><?php echo  esc_html($item['desc1style23serviceplantab']); ?></p>
                                    <ul class="card-list list-style-check pl-0 mt-7 mt-lg-8 justify-content-center-li">
                                    <?php for ($x = 1; $x <= $item['featuresnumber2style23serviceplantab']; $x++){
                                        $has = 'has' . $x .'featurestyle23serviceplantab'; 
                                        $featuret= $x .'featurestyle23serviceplantab' ;
                                        $tooltipdesc = 'haslink' . $x . 'featurestyle23serviceplantab';
                                        ?>
                                    <?php if ( $item[$has] === 'rightboxstyle2haslink1' ) { ?>
                                    <li class="coodiv-text-11">
                                        <a tabindex="0" class="popover-host-features" data-placement="top" role="button" data-toggle="popover" data-trigger="focus" title="<?php echo  esc_attr($item[$featuret]); ?>" data-content="<?php echo  esc_attr($item[$tooltipdesc]); ?>">
                                        <?php echo  esc_html($item[$featuret]); ?></a>
                                    </li>
                                    <?php }elseif( $item[$has] === 'rightboxstyle2included1' ){ ?>
                                    <li class="coodiv-text-11"><?php echo  esc_html($item[$featuret]); ?></li>
                                    <?php }elseif( $item[$has] === 'rightboxstyle2notincluded1' ){ ?>
                                    <li class="disabled coodiv-text-11"><i class="icon icon-simple-remove"></i><?php echo  esc_html($item[$featuret]); ?></li>
                                    <?php }
                                            }
                                    ?>
                                    </ul>
                                    <a href="<?php echo  esc_url($item['buttonlink2style23serviceplantab']); ?>" class="btn-order color3"><span><?php echo  esc_html($item['button2style23serviceplantab']); ?></span></a>
                                </div>
                                <!-- /.pricing carde Ends-->
                            </div>
                        </div>
                    </div>
					<!-- END third slider plans -->
                    <?php }elseif ( $item['boxstyleserviceplantab'] === '3style' ) {?>
					<!-- START fourth slider plans -->
                    <div class="main-homepage-item">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6 col-sm-8 mb-9">
                                <!-- .pricing card -->
                                <div class="games-plan plan-1 box-shadow-1 bg-white rounded-20 text-center pb-20 pt-9 pr-6 pl-6 position-relative overflow-hidden">
                                    <div class="d-flex mb-lg-7 plan-header">
                                        <div class="game-logo">
                                            <img src="<?php echo esc_url($item['imgstyle31serviceplantab']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $item['imgstyle31serviceplantab'] )); ?>" />
                                        </div>
                                        <div class="game-title">
                                            <h3>
                                            <?php echo  esc_html($item['titlestyle31serviceplantab']); ?>
                                            </h3>
                                            <h2 class="text-blackish-blue"><?php echo  esc_html($item['pricestyle31serviceplantab']); ?><span class="payment-type-m"><?php echo  esc_html($item['periodstyle31serviceplantab']); ?></span></h2>
                                        </div>
                                    </div>
                                    <ul class="card-list list-style-check pl-0 mt-7 mt-lg-11 justify-content-center-li">
                                    <?php for ($x = 1; $x <= $item['featuresnumber2style31serviceplantab']; $x++){
                                        $has = 'has' . $x .'featurestyle31serviceplantab'; 
                                        $featuret= $x .'featurestyle31serviceplantab' ;
                                        $tooltipdesc = 'haslink' . $x . 'featurestyle31serviceplantab';
                                             if ( $item[$has] === 'leftboxstyle2haslink1' ) { ?>
                                        <li class="coodiv-text-9">
                                            <a tabindex="0" class="popover-host-features" data-placement="top" role="button" data-toggle="popover" data-trigger="focus" title="<?php echo  esc_attr($item[$featuret]); ?>" data-content="<?php echo  esc_attr($item[$tooltipdesc]); ?>">
                                            <?php echo  esc_html($item[$featuret]); ?>
                                            </a>
                                        </li>
                                        <?php }elseif( $item[$has] === 'leftboxstyle2included1' ){ ?>
                                        <li class="coodiv-text-9"><?php echo  esc_html($item[$featuret]); ?></li>
                                        <?php }
                                                }
                                        ?>

                                    </ul>
                                    <a href="<?php echo  esc_url($item['buttonlinkstyle31serviceplantab']); ?>" class="btn-order"><span><?php echo  esc_html($item['buttonstyle31serviceplantab']); ?></span></a>
                                </div>
                                <!-- /.pricing carde Ends-->
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-8 mb-9">
                                <!-- .pricing card -->
                                <div class="games-plan plan-2 box-shadow-1 bg-white rounded-20 text-center pb-20 pt-9 pr-6 pl-6 position-relative overflow-hidden">
                                    <div class="d-flex mb-lg-7 plan-header">
                                        <div class="game-logo">
                                            <img src="<?php echo esc_url($item['imgstyle32serviceplantab']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $item['imgstyle32serviceplantab'] )); ?>" />
                                        </div>
                                        <div class="game-title">
                                            <h3>
                                            <?php echo  esc_html($item['titlestyle32serviceplantab']); ?>
                                            </h3>
                                            <h2 class="text-blackish-blue"><?php echo  esc_html($item['pricestyle32serviceplantab']); ?><span class="payment-type-m"><?php echo  esc_html($item['periodstyle32serviceplantab']); ?></span></h2>
                                        </div>
                                    </div>
                                    <ul class="card-list list-style-check pl-0 mt-7 mt-lg-11 justify-content-center-li">
                                    <?php for ($x = 1; $x <= $item['featuresnumber2style32serviceplantab']; $x++){
                                        $has = 'has' . $x .'featurestyle32serviceplantab'; 
                                        $featuret= $x .'featurestyle32serviceplantab' ;
                                        $tooltipdesc = 'haslink' . $x . 'featurestyle32serviceplantab';
                                             if ( $item[$has] === 'middleboxstyle2haslink1' ) { ?>
                                        <li class="coodiv-text-9">
                                            <a tabindex="0" class="popover-host-features" data-placement="top" role="button" data-toggle="popover" data-trigger="focus" title="<?php echo  esc_attr($item[$featuret]); ?>" data-content="<?php echo  esc_attr($item[$tooltipdesc]); ?>">
                                            <?php echo  esc_html($item[$featuret]); ?>
                                            </a>
                                        </li>
                                        <?php }elseif( $item[$has] === 'middleboxstyle2included1' ){ ?>
                                        <li class="coodiv-text-9"><?php echo  esc_html($item[$featuret]); ?></li>
                                        <?php }
                                                }
                                        ?>
                                    </ul>
                                    <a href="<?php echo  esc_url($item['buttonlinkstyle32serviceplantab']); ?>" class="btn-order"><span><?php echo  esc_html($item['buttonstyle32serviceplantab']); ?></span></a>
                                </div>
                                <!-- /.pricing carde Ends-->
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-8 mb-9">
                                <!-- .pricing card -->
                                <div class="games-plan plan-3 box-shadow-1 bg-white rounded-20 text-center pb-20 pt-9 pr-6 pl-6 position-relative overflow-hidden">
                                    <div class="d-flex mb-lg-7 plan-header">
                                        <div class="game-logo">
                                            <img src="<?php echo esc_url($item['imgstyle33serviceplantab']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $item['imgstyle33serviceplantab'] )); ?>" />
                                        </div>
                                        <div class="game-title">
                                            <h3>
                                            <?php echo  $item['titlestyle33serviceplantab']; ?>
                                            </h3>
                                            <h2 class="text-blackish-blue"><?php echo  esc_html($item['pricestyle33serviceplantab']); ?><span class="payment-type-m"><?php echo  esc_html($item['periodstyle33serviceplantab']); ?></span></h2>
                                        </div>
                                    </div>
                                    <ul class="card-list list-style-check pl-0 mt-7 mt-lg-11 justify-content-center-li">
                                    <?php for ($x = 1; $x <= $item['featuresnumber2style33serviceplantab']; $x++){
                                        $has = 'has' . $x .'featurestyle33serviceplantab'; 
                                        $featuret= $x .'featurestyle33serviceplantab' ;
                                        $tooltipdesc = 'haslink' . $x . 'featurestyle33serviceplantab';
                                             if ( $item[$has] === 'rightboxstyle2haslink1' ) { ?>
                                        <li class="coodiv-text-9">
                                            <a tabindex="0" class="popover-host-features" data-placement="top" role="button" data-toggle="popover" data-trigger="focus" title="<?php echo  esc_attr($item[$featuret]); ?>" data-content="<?php echo  esc_attr($item[$tooltipdesc]); ?>">
                                            <?php echo  esc_html($item[$featuret]); ?>
                                            </a>
                                        </li>
                                        <?php }elseif( $item[$has] === 'rightboxstyle2included1' ){ ?>
                                        <li class="coodiv-text-9"><?php echo  esc_html($item[$featuret]); ?></li>
                                        <?php }
                                                }
                                        ?>
                                    </ul>
                                    <a href="<?php echo  esc_url($item['buttonlinkstyle33serviceplantab']); ?>" class="btn-order"><span><?php echo  esc_html($item['buttonstyle33serviceplantab']); ?></span></a>
                                </div>
                                <!-- /.pricing carde Ends-->
                            </div>
                        </div>
                    </div>
					<!-- END fourth slider plans -->
                    <?php }elseif ( $item['boxstyleserviceplantab'] === '4style' ) {?>
                    <!-- START fifth slider plans -->
                    <div class="main-homepage-item">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 mb-9">
                                <!-- .pricing card -->
                                <div class="voice-plan plan-1 box-shadow-1 bg-white rounded-20 text-center pb-10 pt-9 pr-6 pl-6 position-relative overflow-hidden">
                                    <div class="row justify-content-between plan-header">
                                        <div class="d-flex mb-lg-7">
                                            <div class="plan-logo">
                                                <img src="<?php echo esc_url($item['imgstyle41serviceplantab']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $item['imgstyle41serviceplantab'] )); ?>" />
                                            </div>
                                            <div class="plan-title">
                                                <h3><?php echo  esc_html($item['titlestyle41serviceplantab']); ?></h3>
                                                <h2 class="text-blackish-blue">
                                                    <span class="payment-type-m"><?php echo  esc_html($item['subtitlestyle41serviceplantab']); ?></span>
                                                </h2>
                                            </div>
                                        </div>

                                        <div class="list-group list-bill-plan d-none d-lg-block">
                                            <a class="active" data-toggle="list">
                                                <span class="title"><?php echo  esc_html($item['periodyearlytstyle41serviceplantab']); if ( 'yes' === $item['isofferyearlystyle41serviceplantab'] ) { ?><i><?php echo  esc_html($item['offeryearlystyle41serviceplantab']); ?></i><?php }?></span><span class="price"><?php echo  esc_html($item['priceyearlystyle41serviceplantab']); ?><i><?php echo  esc_html($item['periodyearlyBadgestyle41serviceplantab']); ?></i></span>
                                            </a>
                                            <a class="" data-toggle="list">
                                                <span class="title"><?php echo  esc_html($item['periodmonthlytstyle41serviceplantab']); ?></span><span class="price"><?php echo  esc_html($item['pricemonthlystyle41serviceplantab']); ?><i><?php echo  esc_html($item['periodmonthlyBadgestyle41serviceplantab']); ?></i></span>
                                            </a>
                                        </div>
                                    </div>

                                    <ul class="list-style-check pl-0 mt-7 mt-lg-11 li-flex-between full-plan-disc">
                                    <?php for ($x = 1; $x <= $item['featuresnumber2style41serviceplantab']; $x++){
                                        $has = 'has' . $x .'featurestyle41serviceplantab'; 
                                        $featuret= $x .'featurestyle41serviceplantab' ;
                                        $tooltipdesc = 'haslink' . $x . 'featurestyle41serviceplantab';
                                        $badgeli = 'badgetitle' . $x .'featurestyle41serviceplantab';
                                        $badgecolor = 'badge' . $x . 'featurestyle41serviceplantab';
                                             if ( $item[$has] === 'leftboxstyle2haslink1' ) { ?>
                                        <li class="coodiv-text-9 <?php if ( $item[$badgecolor] === 'greenboxstyle2included1' ) { echo _e("green"); }elseif( $item[$badgecolor] === 'redboxstyle2haslink1' ){ echo _e("reed"); }elseif($item[$badgecolor] === 'grayboxstyle2haslink1'){ echo _e("blue"); }?>">
                                            <a tabindex="0" class="popover-host-features" data-placement="top" role="button" data-toggle="popover" data-trigger="focus" title="<?php echo  esc_attr($item[$featuret]); ?>" data-content="<?php echo  esc_attr($item[$tooltipdesc]); ?>">
                                            <?php echo  $item[$featuret]; ?>
                                            </a>
                                            <?php if ( $item[$badgecolor] === 'noboxstyle2haslink1' ) { }else{?> <span><?php echo  esc_html($item[$badgeli]); ?></span><?php }?>
                                        </li>
                                        <?php }elseif( $item[$has] === 'leftboxstyle2included1' ){ ?>
                                        <li class="coodiv-text-9 <?php if ( $item[$badgecolor] === 'greenboxstyle2included1' ) { echo _e("green"); }elseif( $item[$badgecolor] === 'redboxstyle2haslink1' ){ echo _e("reed"); }elseif($item[$badgecolor] === 'grayboxstyle2haslink1'){ echo _e("blue"); }?>"><?php echo  esc_html($item[$featuret]); ?><?php if ( $item[$badgecolor] === 'noboxstyle2haslink1' ) { }else{?> <span><?php echo  esc_html($item[$badgeli]); ?></span><?php }?></li>
                                        <?php }
                                                }
                                        ?>
                                    </ul>
                                    <a href="<?php echo  esc_url($item['buttonlinkstyle41serviceplantab']); ?>" class="btn-order"><span><?php echo  esc_html($item['buttonstyle41serviceplantab']); ?></span></a>
                                </div>
                                <!-- /.pricing carde Ends-->
                            </div>
                        </div>
                    </div>
					<!-- END fifth slider plans -->
                    <?php }elseif ( $item['boxstyleserviceplantab'] === '5style' ) {?>
					<!-- START sixth slider plans -->
                    <div class="main-homepage-item">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6 col-sm-8 mb-9">
                                <!-- .pricing card -->
                                <div class="pricing-plan-two coodiv-hover-shadow-1 bg-white border rounded-10 text-center pt-9 pr-6 pl-6">
                                    <span class="badge coodiv-badge badge-primary rounded-pill coodiv-text-12 text-uppercase"><?php echo  esc_html($item['titlestyle51serviceplantab']); ?></span>
                                    <h2 class="price-of-plan coodiv-text-3 font-weight-bold text-blackish-blue line-spacing-none mb-2 mt-8"><?php echo  esc_html($item['pricestyle51serviceplantab']); ?><span class="payment-type-m"><?php echo  esc_html($item['periodstyle51serviceplantab']); ?></span></h2>
                                    <p class="coodiv-text-11 mb-7 mb-lg-11 coodiv-color-blackish-blue-opacity-7 pr-13 pl-13"><?php echo  esc_html($item['descstyle51serviceplantab']); ?></p>
                                    <ul class="card-list list-style-check pl-0 mt-7 mt-lg-11 justify-content-center-li">
                                    <?php for ($x = 1; $x <= $item['featuresnumber2style51serviceplantab']; $x++){
                                        $has = 'has' . $x .'featurestyle51serviceplantab'; 
                                        $featuret= $x .'featurestyle51serviceplantab' ;
                                        if ( $item[$has] === 'leftboxstyle2included1' ) { ?>
                                        <li class="coodiv-text-9"><?php echo  esc_html($item[$featuret]); ?></li>
                                        <?php }elseif( $item[$has] === 'leftboxstyle2notincluded1' ){ ?>
                                        <li class="disabled coodiv-text-9"><i class="icon icon-simple-remove"></i><?php echo  esc_html($item[$featuret]); ?></li>
                                        <?php 
                                            }
                                        }
                                        ?>
                                    </ul>
                                    <a href="<?php echo  esc_url($item['buttonlinkstyle51serviceplantab']); ?>" class="btn-order"><span><?php echo  esc_html($item['buttonstyle51serviceplantab']); ?></span></a>
                                </div>
                                <!-- /.pricing carde Ends-->
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-8 mb-9">
                                <!-- .pricing card -->
                                <div class="pricing-plan-two coodiv-hover-shadow-1 bg-white border rounded-10 text-center pt-9 pr-6 pl-6">
                                    <span class="badge coodiv-badge badge-warning rounded-pill coodiv-text-12 text-uppercase"><?php echo  esc_html($item['titlestyle52serviceplantab']); ?></span>
                                    <h2 class="price-of-plan coodiv-text-3 font-weight-bold text-blackish-blue line-spacing-none mb-2 mt-8"><?php echo  esc_html($item['pricestyle52serviceplantab']); ?><span class="payment-type-m"><?php echo  esc_html($item['periodstyle52serviceplantab']); ?></span></h2>
                                    <p class="coodiv-text-11 mb-7 mb-lg-11 coodiv-color-blackish-blue-opacity-7 pr-13 pl-13"><?php echo  esc_html($item['descstyle52serviceplantab']); ?></p>
                                    <ul class="card-list list-style-check pl-0 mt-7 mt-lg-11 justify-content-center-li">
                                    <?php for ($x = 1; $x <= $item['featuresnumber2style52serviceplantab']; $x++){
                                        $has = 'has' . $x .'featurestyle52serviceplantab'; 
                                        $featuret= $x .'featurestyle52serviceplantab' ;
                                        if ( $item[$has] === 'leftboxstyle2included1' ) { ?>
                                        <li class="coodiv-text-9"><?php echo  esc_html($item[$featuret]); ?></li>
                                        <?php }elseif( $item[$has] === 'leftboxstyle2notincluded1' ){ ?>
                                        <li class="disabled coodiv-text-9"><i class="icon icon-simple-remove"></i><?php echo  esc_html($item[$featuret]); ?></li>
                                        <?php 
                                            } 
                                        }
                                        ?>
                                    </ul>
                                    <a href="<?php echo  esc_url($item['buttonlinkstyle52serviceplantab']); ?>" class="btn-order"><span><?php echo  esc_html($item['buttonstyle52serviceplantab']); ?></span></a>
                                </div>
                                <!-- /.pricing carde Ends-->
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-8 mb-9">
                                <!-- .pricing card -->
                                <div class="pricing-plan-two coodiv-hover-shadow-1 bg-white border rounded-10 text-center pt-9 pr-6 pl-6">
                                    <span class="badge coodiv-badge badge badge-info rounded-pill coodiv-text-12 text-uppercase"><?php echo  esc_html($item['titlestyle53serviceplantab']); ?></span>
                                    <h2 class="price-of-plan coodiv-text-3 font-weight-bold text-blackish-blue line-spacing-none mb-2 mt-8"><?php echo  esc_html($item['pricestyle53serviceplantab']); ?><span class="payment-type-m"><?php echo  esc_html($item['periodstyle53serviceplantab']); ?></span></h2>
                                    <p class="coodiv-text-11 mb-7 mb-lg-11 coodiv-color-blackish-blue-opacity-7 pr-13 pl-13"><?php echo  esc_html($item['descstyle53serviceplantab']); ?></p>
                                    <ul class="card-list list-style-check pl-0 mt-7 mt-lg-11 justify-content-center-li">
                                    <?php for ($x = 1; $x <= $item['featuresnumber2style53serviceplantab']; $x++){
                                        $has = 'has' . $x .'featurestyle53serviceplantab'; 
                                        $featuret= $x .'featurestyle53serviceplantab' ;
                                        if ( $item[$has] === 'leftboxstyle2included1' ) { ?>
                                        <li class="coodiv-text-9"><?php echo  esc_html($item[$featuret]); ?></li>
                                        <?php }elseif( $item[$has] === 'leftboxstyle2notincluded1' ){ ?>
                                        <li class="disabled coodiv-text-9"><i class="icon icon-simple-remove"></i><?php echo  esc_html($item[$featuret]); ?></li>
                                        <?php 
                                            }
                                        }
                                        ?>
                                    </ul>
                                    <a href="<?php echo  esc_url($item['buttonlinkstyle53serviceplantab']); ?>" class="btn-order"><span><?php echo  esc_html($item['buttonstyle53serviceplantab']); ?></span></a>
                                </div>
                                <!-- /.pricing carde Ends-->
                            </div>
                        </div>
                    </div>
                    <?php }
                             }
                                }?>
					<!-- START sixth slider plans -->
                </div>
				<!-- END slider -->

				<!-- START hosting plans nav -->
                <div class="services-box-container">
				    <!-- START plans nav -->
                    <div class="services-box-tabs-box border-opacity border-top-0">
                    <?php if ( $settings['boxesstyleserviceplantab'] ) {
                        foreach (  $settings['boxesstyleserviceplantab'] as $item ) { ?>				
					    <!-- START nav -->
                        <a class="services-box-tab">
                            <i class="feather <?php echo  esc_html($item['iconserviceplantab']); ?>">
                                <svg class="banner-widget-sidebar-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 604 178">
                                    <path d="M1920,0V146.85c-14.7,5.55-28.79,12.05-49,18.15-9.73,2.94-42.25,12.77-72,13-72.59.56-78.87-56.38-182-90-38.62-12.59-65.18-13.55-99-40a187.6,187.6,0,0,1-43-48Z" transform="translate(-1316)" style="fill: #ffffff; opacity: 0.2;"></path>
                                    <path d="M1882,0c9.29,27.61-36.45,83.32-63,79-12.19-2-14.6-15.7-38-25-17.81-7.08-24.76-2.45-37-9-9.63-5.15-21.36-16.58-28-45Z" transform="translate(-1316)" style="fill: #ffffff; opacity: 0.1;"></path>
                                </svg>
                            </i>
                            <h5 class="coodiv-text-10 mb-0 mt-3"><?php echo  esc_html($item['nameserviceplantab']); ?></h5>
                            <p class="coodiv-text-12 mb-0"><?php echo  esc_html($item['desc1serviceplantab']); ?></p>
                        </a>
                        <?php }
                                }
                                ?>
						<!-- END nav -->		
                    </div>
                </div>
				<!-- END hosting plans nav -->
            </div>
			<!-- END main slider plans -->
			
<?php if( \Elementor\Plugin::$instance->editor->is_edit_mode() ) { ?>
            <script>
                	if(jQuery(".main-homepage-plans-slider").length > 0) {
		$('.main-homepage-plans-slider').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			dots: false,
			autoplay: false,
			fade: true,
			adaptiveHeight: true,
			asNavFor: '.services-box-tabs-box',
		});
		$('.services-box-tabs-box').slick({
			slidesToShow: 5,
			asNavFor: '.main-homepage-plans-slider',
			dots: false,
			infinite: true,
			arrows: false,
			centerMode: true,
			focusOnSelect: true,
			responsive: [{
				breakpoint: 557,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				}
			}, {
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
				}
			}, {
				breakpoint: 991,
				settings: {
					slidesToShow: 3,
				}
			}]
		});
	}
            </script>
<?php } ?>


    <?php
  }


}
