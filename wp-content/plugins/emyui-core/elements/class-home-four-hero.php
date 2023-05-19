<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Herofour extends Widget_Base{

  public function get_name(){
    return 'herofour';
  }

  public function get_title(){
    return esc_html__( 'Hero Four', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){

    $this->start_controls_section(
      'section_content11',
      [
        'label' => esc_html__( 'General', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
    $this->add_control(
        'show_bac',
        [
            'label' => esc_html__( 'Show header', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::SWITCHER,
            'label_on' => esc_html__( 'Show', 'your-plugin' ),
            'label_off' => esc_html__( 'Hide', 'your-plugin' ),
            'return_value' => 'yes',
            'default' => 'yes',
        ]
    );
    $this->add_control(
        'mina1ti1',
        [
            'label' => esc_html__( 'Upper Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'condition' => [ 'show_bac' => 'yes' ],
            'default' => esc_html__( 'With Emyui', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'mina11ti1',
        [
            'label' => esc_html__( 'Main Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'condition' => [ 'show_bac' => 'yes' ],
            'default' => esc_html__( 'Choose flexible pricing plan for you', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'mina12ti1',
        [
            'label' => esc_html__( 'Type Title 1', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'condition' => [ 'show_bac' => 'yes' ],
            'default' => esc_html__( 'for your web hosting company', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'mina13ti1',
        [
            'label' => esc_html__( 'Type Title 2', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'condition' => [ 'show_bac' => 'yes' ],
            'default' => esc_html__( 'for your resellers hosting company', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'mina14ti1',
        [
            'label' => esc_html__( 'Type Title 3', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'condition' => [ 'show_bac' => 'yes' ],
            'default' => esc_html__( 'and more....', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'mina2ti1',
        [
            'label' => esc_html__( 'Lower Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'condition' => [ 'show_bac' => 'yes' ],
            'default' => esc_html__( 'Unlimited boards and workflows. no credit card needed', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'bgstyleherofour',
        [
            'label' => esc_html__( 'Background Style', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::SELECT,
            'default' => 'shapes',
            'options' => [
                'shapes'  => esc_html__( 'shapes', 'emyui-core' ),
                'color' => esc_html__( 'color & image', 'emyui-core' ),
  
            ],
        ]
    );
    $this->add_control(
        'bgcolorherofour',
        [
            'label' => esc_html__( 'background Color', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'condition' => [
                'bgstyleherofour' => 'color',
            ],
            'selectors' => [
                '{{WRAPPER}} .hero-area-coodiv.snow-montagne' => 'background-color: {{VALUE}}',
            ],
        ]
    );
    $this->add_control(
        'img4herofour',
        [
            'label' => esc_html__( 'Background Image', 'emyui-core' ),
            'condition' => [
                'bgstyleherofour' => 'color',
            ],
            'type' => \Elementor\Controls_Manager::MEDIA,
        
        ]
    );


    $this->end_controls_section();


    $this->start_controls_section(
        'section_content1111',
        [
          'label' => esc_html__( 'First Plan', 'emyui-core' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
   
    $this->add_control(
        'title1ti1',
        [
            'label' => esc_html__( 'Main Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Anti ddos robbot advanced', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'subtitleti1',
        [
            'label' => esc_html__( 'Sub Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'from', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'priceti1',
        [
            'label' => esc_html__( 'Price', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '$62.44', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
		'showofferti1',
		[
			'label' => esc_html__( 'Show Offer', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::SWITCHER,
			'return_value' => 'yes',
			'default' => 'yes',
		]
	);
    $this->add_control(
        'offerti1',
        [
            'label' => esc_html__( 'Offer', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'offer -30%', 'emyui-core' ),
    
        ]
    );

  

$repeater = new \Elementor\Repeater();

$repeater->add_control(
  'featurenameti1', [
      'label' => esc_html__( 'Features Name', 'emyui-core' ),
      'type' => \Elementor\Controls_Manager::TEXT,
      'default' => esc_html__( 'Capacity' , 'emyui-core' ),
      'label_block' => true,
  ]
);
$repeater->add_control(
  'featurevalueti1', [
      'label' => esc_html__( 'Features Value', 'emyui-core' ),
      'type' => \Elementor\Controls_Manager::TEXT,
      'default' => esc_html__( '5TB' , 'emyui-core' ),
      'label_block' => true,
  ]
);
$this->add_control(
'feature1ti1',
[
  'label' => esc_html__( 'First Features', 'emyui-core' ),
  'type' => \Elementor\Controls_Manager::REPEATER,
  'fields' => $repeater->get_controls(),
  'default' => [
      [
          'featurenameti1' => esc_html__( 'Capacity', 'emyui-core' ),
          'featurevalueti1' => esc_html__( '5TB', 'emyui-core' ),

      ],
  ],
]
);
  $repeater = new \Elementor\Repeater();

  $repeater->add_control(
      'featuretti1', [
          'label' => esc_html__( 'Features Name', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::TEXT,
          'default' => esc_html__( '5TB' , 'emyui-core' ),
      ]
  );
  $this->add_control(
  'feature2ti1',
  [
      'label' => esc_html__( 'Second Features', 'emyui-core' ),
      'type' => \Elementor\Controls_Manager::REPEATER,
      'fields' => $repeater->get_controls(),
      'default' => [
          [
              'featuretti1' => esc_html__( 'Unlimited Bandwidth', 'emyui-core' ),
          ],
      ],
     
      ]
  );


$repeater = new \Elementor\Repeater();

$repeater->add_control(
  'featurename2ti1', [
      'label' => esc_html__( 'Features Name', 'emyui-core' ),
      'type' => \Elementor\Controls_Manager::TEXT,
      'default' => esc_html__( 'Dedicated project' , 'emyui-core' ),
      'label_block' => true,
  ]
);
$repeater->add_control(
  'featurevalue2ti1', [
      'label' => esc_html__( 'Features Value', 'emyui-core' ),
      'type' => \Elementor\Controls_Manager::TEXT,
      'default' => esc_html__( 'big companis,we chose to works with it' , 'emyui-core' ),
      'label_block' => true,
  ]
);
$this->add_control(
'feature3ti1',
[
  'label' => esc_html__( 'Third Features', 'emyui-core' ),
  'type' => \Elementor\Controls_Manager::REPEATER,
  'fields' => $repeater->get_controls(),
  'default' => [
      [
          'featurename2ti1' => esc_html__( 'Capacity', 'emyui-core' ),
          'featurevalue2ti1' => esc_html__( '5TB', 'emyui-core' ),

      ],
  ],
]
);
  
  
$this->add_control(
    'buttonti1',
    [
        'label' => esc_html__( 'Button', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( 'Get started for free', 'emyui-core' ),

    ]
);
$this->add_control(
    'buttonlinkti1',
    [
        'label' => esc_html__( 'Button Link', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( '#', 'emyui-core' ),

    ]
);
  
      $this->end_controls_section();


    $this->start_controls_section(
        'section_content1112',
        [
          'label' => esc_html__( 'Second Plan', 'emyui-core' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
      $this->add_control(
        'titleboxti',
        [
            'label' => esc_html__( 'Box Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'the most The most frequently chosen package', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'title1ti',
        [
            'label' => esc_html__( 'Main Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Anti ddos robbot advanced', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'subtitleti',
        [
            'label' => esc_html__( 'Sub Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'from', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'priceti',
        [
            'label' => esc_html__( 'Price', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '$62.44', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
		'showofferti',
		[
			'label' => esc_html__( 'Show Offer', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::SWITCHER,
			'return_value' => 'yes',
			'default' => 'yes',
		]
	);
    $this->add_control(
        'offerti',
        [
            'label' => esc_html__( 'Offer', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'offer -30%', 'emyui-core' ),
    
        ]
    );



$repeater = new \Elementor\Repeater();

$repeater->add_control(
  'featurenameti', [
      'label' => esc_html__( 'Features Name', 'emyui-core' ),
      'type' => \Elementor\Controls_Manager::TEXT,
      'default' => esc_html__( 'Capacity' , 'emyui-core' ),
      'label_block' => true,
  ]
);
$repeater->add_control(
  'featurevalueti', [
      'label' => esc_html__( 'Features Value', 'emyui-core' ),
      'type' => \Elementor\Controls_Manager::TEXT,
      'default' => esc_html__( '5TB' , 'emyui-core' ),
      'label_block' => true,
  ]
);
$this->add_control(
'feature1ti',
[
  'label' => esc_html__( 'First Features', 'emyui-core' ),
  'type' => \Elementor\Controls_Manager::REPEATER,
  'fields' => $repeater->get_controls(),
  'default' => [
      [
          'featurenameti' => esc_html__( 'Capacity', 'emyui-core' ),
          'featurevalueti' => esc_html__( '5TB', 'emyui-core' ),

      ],
  ],
]
);
  $repeater = new \Elementor\Repeater();

  $repeater->add_control(
      'featuretti', [
          'label' => esc_html__( 'Features Name', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::TEXT,
          'default' => esc_html__( '5TB' , 'emyui-core' ),
      ]
  );
  $this->add_control(
  'feature2ti',
  [
      'label' => esc_html__( 'Second Features', 'emyui-core' ),
      'type' => \Elementor\Controls_Manager::REPEATER,
      'fields' => $repeater->get_controls(),
      'default' => [
          [
              'featuretti' => esc_html__( 'Unlimited Bandwidth', 'emyui-core' ),
          ],
      ],
     
      ]
  );


$repeater = new \Elementor\Repeater();

$repeater->add_control(
  'featurename2ti', [
      'label' => esc_html__( 'Features Name', 'emyui-core' ),
      'type' => \Elementor\Controls_Manager::TEXT,
      'default' => esc_html__( 'Dedicated project' , 'emyui-core' ),
      'label_block' => true,
  ]
);
$repeater->add_control(
  'featurevalue2ti', [
      'label' => esc_html__( 'Features Value', 'emyui-core' ),
      'type' => \Elementor\Controls_Manager::TEXT,
      'default' => esc_html__( 'big companis,we chose to works with it' , 'emyui-core' ),
      'label_block' => true,
  ]
);
$this->add_control(
'feature3ti',
[
  'label' => esc_html__( 'Third Features', 'emyui-core' ),
  'type' => \Elementor\Controls_Manager::REPEATER,
  'fields' => $repeater->get_controls(),
  'default' => [
      [
          'featurename2ti' => esc_html__( 'Capacity', 'emyui-core' ),
          'featurevalue2ti' => esc_html__( '5TB', 'emyui-core' ),

      ],
  ],
]
);
  
  
$this->add_control(
    'buttonti',
    [
        'label' => esc_html__( 'Button', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( 'Get started for free', 'emyui-core' ),

    ]
);
$this->add_control(
    'buttonlinkti',
    [
        'label' => esc_html__( 'Button Link', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( '#', 'emyui-core' ),

    ]
);
  
      $this->end_controls_section();


      $this->start_controls_section(
        'section_content1113',
        [
          'label' => esc_html__( 'Third Plan', 'emyui-core' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
   
    $this->add_control(
        'title1ti0',
        [
            'label' => esc_html__( 'Main Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Anti ddos robbot advanced', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'subtitleti0',
        [
            'label' => esc_html__( 'Sub Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'from', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'priceti0',
        [
            'label' => esc_html__( 'Price', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '$62.44', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
		'showofferti0',
		[
			'label' => esc_html__( 'Show Offer', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::SWITCHER,
			'return_value' => 'yes',
			'default' => 'yes',
		]
	);
    $this->add_control(
        'offerti0',
        [
            'label' => esc_html__( 'Offer', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'offer -30%', 'emyui-core' ),
    
        ]
    );



$repeater = new \Elementor\Repeater();

$repeater->add_control(
  'featurenameti0', [
      'label' => esc_html__( 'Features Name', 'emyui-core' ),
      'type' => \Elementor\Controls_Manager::TEXT,
      'default' => esc_html__( 'Capacity' , 'emyui-core' ),
      'label_block' => true,
  ]
);
$repeater->add_control(
  'featurevalueti0', [
      'label' => esc_html__( 'Features Value', 'emyui-core' ),
      'type' => \Elementor\Controls_Manager::TEXT,
      'default' => esc_html__( '5TB' , 'emyui-core' ),
      'label_block' => true,
  ]
);
$this->add_control(
'feature1ti0',
[
  'label' => esc_html__( 'First Features', 'emyui-core' ),
  'type' => \Elementor\Controls_Manager::REPEATER,
  'fields' => $repeater->get_controls(),
  'default' => [
      [
          'featurenameti0' => esc_html__( 'Capacity', 'emyui-core' ),
          'featurevalueti0' => esc_html__( '5TB', 'emyui-core' ),

      ],
  ],
]
);
  $repeater = new \Elementor\Repeater();

  $repeater->add_control(
      'featuretti0', [
          'label' => esc_html__( 'Features Name', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::TEXT,
          'default' => esc_html__( '5TB' , 'emyui-core' ),
      ]
  );
  $this->add_control(
  'feature2ti0',
  [
      'label' => esc_html__( 'Second Features', 'emyui-core' ),
      'type' => \Elementor\Controls_Manager::REPEATER,
      'fields' => $repeater->get_controls(),
      'default' => [
          [
              'featuretti0' => esc_html__( 'Unlimited Bandwidth', 'emyui-core' ),
          ],
      ],
     
      ]
  );


$repeater = new \Elementor\Repeater();

$repeater->add_control(
  'featurename2ti0', [
      'label' => esc_html__( 'Features Name', 'emyui-core' ),
      'type' => \Elementor\Controls_Manager::TEXT,
      'default' => esc_html__( 'Dedicated project' , 'emyui-core' ),
      'label_block' => true,
  ]
);
$repeater->add_control(
  'featurevalue2ti0', [
      'label' => esc_html__( 'Features Value', 'emyui-core' ),
      'type' => \Elementor\Controls_Manager::TEXT,
      'default' => esc_html__( 'big companis,we chose to works with it' , 'emyui-core' ),
      'label_block' => true,
  ]
);
$this->add_control(
'feature3ti0',
[
  'label' => esc_html__( 'Third Features', 'emyui-core' ),
  'type' => \Elementor\Controls_Manager::REPEATER,
  'fields' => $repeater->get_controls(),
  'default' => [
      [
          'featurename2ti0' => esc_html__( 'Capacity', 'emyui-core' ),
          'featurevalue2ti0' => esc_html__( '5TB', 'emyui-core' ),

      ],
  ],
]
);
  
  
$this->add_control(
    'buttonti0',
    [
        'label' => esc_html__( 'Button', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( 'Get started for free', 'emyui-core' ),

    ]
);
$this->add_control(
    'buttonlinkti0',
    [
        'label' => esc_html__( 'Button Link', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( '#', 'emyui-core' ),

    ]
);
  
      $this->end_controls_section();
}

  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>
            
           
            <?php 
            if ( 'yes' === $settings['show_bac'] ) { ?>  
   <!-- START HERO AREA -->
   <div class="hero-area-coodiv snow-montagne position-relative">
                <!-- START hero area animations -->
                <?php if ( 'shapes' === $settings['bgstyleherofour'] ) { ?>  

                <div class="header-hero-backgrounds">
                    <div id="particles-bg"></div>
                    <span class="back-mountain-light"></span>
                    <span class="back-mountain-sun"></span>
                    <span class="right-montagne-part"></span>
                    <span class="illustration-element"></span>
                    <span class="left-montagne-part"></span>
                    <span class="sunset-fog"></span>
                    <span class="sunsetcloud"></span>
                    <div class="bottom-montagne-part"><span></span></div>

                    <div class="t-first"><img class="layer layer2" data-depth="-0.20" src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/header/sunset-version/moon.png" alt="" /></div>
                </div>
                <div class="shape-1 coodiv-abs-tr" data-aos="fade-up" data-aos-duration="500" data-aos-once="true"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/header/helf-circle-01.png" alt="" /></div>
                <div class="shape-2 coodiv-abs-tr" data-aos="fade-down-left" data-aos-duration="800" data-aos-delay="300" data-aos-once="true"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/header/helf-circle-02.png" alt="" /></div>
                <div class="shape-3 coodiv-abs-tr" data-aos="fade-down-left" data-aos-duration="1100" data-aos-delay="600" data-aos-once="true"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/header/helf-circle-03.png" alt="" /></div>
                <!-- END hero area animations -->
            <?php }else{ ?>
                <style>
                    .hero-area-coodiv.snow-montagne {
                        background-image: unset;
                        background-image: unset;
                        background: url("<?php echo esc_url($settings['img4herofour']['url']); ?>") 0 0 no-repeat;
                        -webkit-background-size: cover;
                            -moz-background-size: cover;
                            -o-background-size: cover;
                            background-size: cover;
                            width: 100%;

                    }
                    .hero-area-coodiv {
                    padding-bottom: 11rem!important;

                    }
                    .header-hero-pricing-plans.position-relative {
                    margin-top: -60px!important;
                    }
                </style>
                <?php } ?>
                <div class="container position-relative coodiv-z-index-2">
                    <!-- END HERO MAIN CONTENTS -->
                    <div class="row justify-content-start">
                        <!-- row -->
                        <div class="col-md-9 col-lg-7 col-xl-9">
                            <!-- column -->
                            <!-- START MAIN CONTENTS -->
                            <div class="hero-content dark-mode-texts mb-15 mb-lg-10 text-center text-md-left">
                                <h4 class="coodiv-text-12 text-uppercase mb-3 coodiv-color-green-opacity-7"><?php echo esc_html($settings['mina1ti1']); ?></h4>
                                <h1 class="coodiv-text-3 text-white d-block mb-0"><?php echo esc_html($settings['mina11ti1']); ?></h1>
                                <h1 class="coodiv-text-3 position-relative mb-5"><span id="typed" class="strike-bottom green d-inline-block"></span></h1>
                                <p class="coodiv-text-9 mb-0 coodiv-color-white-opacity-9 mb-10"><?php echo esc_html($settings['mina2ti1']); ?></p>
                            </div>
                            <!-- END MAIN CONTENTS -->
                        </div>
                        <!-- END column -->
                    </div>
                    <!-- END row -->
                </div>
                <!-- END hero MAIN CONTENTS -->
            </div>
            <!-- END HERO AREA -->
 <?php } ?>
            <div class="header-hero-pricing-plans position-relative">
                <div class="container coodiv-z-index-2 position-relative">


                    <div class="row align-items-center justify-content-center">

                        <div class="col-lg-4 mb-15 mb-lg-0">
                            <div class="ddos-attack-package not-feaures-package shadow-2">
                                    <h2 class="coodiv-text-9 mb-0"><?php echo  esc_html($settings['title1ti1']); ?></h2>
                                    <span><?php echo  esc_html($settings['subtitleti1']); ?></span>
                                    <div class="ddos-attack-price d-flex justify-content-between align-items-center mt-7 py-4">
                                        <h2 class="coodiv-text-4"><?php echo  esc_html($settings['priceti1']); ?></h2>
                                        <?php if ( 'yes' === $settings['showofferti1'] ) { ?>
                                        <span><?php echo  esc_html($settings['offerti1']); ?></span><?php }?>
                                    </div>

                                    <ul class="ddos-first-features border-top">
                                <?php if ( $settings['feature1ti1'] ) {
                                                foreach (  $settings['feature1ti1'] as $item ) { ?>
                                        <li><span><?php echo esc_html($item['featurenameti1']);?></span><span><?php echo esc_html($item['featurevalueti1']);?></span></li> 
                                        <?php } } ?>
                                    </ul>

                                    <ul class="ddos-second-features border-top">
                                    <?php if ( $settings['feature2ti1'] ) {
                                                foreach (  $settings['feature2ti1'] as $item ) { ?>
                                        <li><i class="feather icon-check-circle mr-3"></i><?php echo esc_html($item['featuretti1']);?></li>
                                        <?php } } ?>
                                    </ul>

                                    <ul class="ddos-third-features border-top">
                                    <?php if ( $settings['feature3ti1'] ) {
                                                foreach (  $settings['feature3ti1'] as $item ) { ?>
                                        <li>
                                            <span><strong><?php echo esc_html($item['featurename2ti1']);?></strong><?php echo esc_html($item['featurevalue2ti1']);?></span>
                                        </li>
                                        <?php } } ?>
                                    </ul>

                                    <a href="<?php echo esc_url($settings['buttonlinkti1']);?>" class="btn btn-primary coodiv-hover-y w-100 mt-9 coodiv-text-9"><?php echo esc_html($settings['buttonti1']);?></a>
                                </div>
                            
                        </div>

                        <div class="col-lg-4 mb-15 mb-lg-0">
                            <div class="ddos-attack-package shadow-2">
                                    <span class="ddos-attack-package-head coodiv-text-12"><?php echo  esc_html($settings['titleboxti']); ?></span>
                                    <h2 class="coodiv-text-9 mb-0"><?php echo  esc_html($settings['title1ti']); ?></h2>
                                    <span><?php echo  esc_html($settings['subtitleti']); ?></span>
                                    <div class="ddos-attack-price d-flex justify-content-between align-items-center mt-7 py-4">
                                        <h2 class="coodiv-text-4"><?php echo  esc_html($settings['priceti']); ?></h2>
                                        <?php if ( 'yes' === $settings['showofferti'] ) { ?>
                                        <span><?php echo  esc_html($settings['offerti']); ?></span><?php }?>
                                    </div>

                                    <ul class="ddos-first-features border-top">
                                <?php if ( $settings['feature1ti'] ) {
                                                foreach (  $settings['feature1ti'] as $item ) { ?>
                                        <li><span><?php echo esc_html($item['featurenameti']);?></span><span><?php echo esc_html($item['featurevalueti']);?></span></li> 
                                        <?php } } ?>
                                    </ul>

                                    <ul class="ddos-second-features border-top">
                                    <?php if ( $settings['feature2ti'] ) {
                                                foreach (  $settings['feature2ti'] as $item ) { ?>
                                        <li><i class="feather icon-check-circle mr-3"></i><?php echo esc_html($item['featuretti']);?></li>
                                        <?php } } ?>
                                    </ul>

                                    <ul class="ddos-third-features border-top">
                                    <?php if ( $settings['feature3ti'] ) {
                                                foreach (  $settings['feature3ti'] as $item ) { ?>
                                        <li>
                                            <span><strong><?php echo esc_html($item['featurename2ti']);?></strong><?php echo esc_html($item['featurevalue2ti']);?></span>
                                        </li>
                                        <?php } } ?>
                                    </ul>

                                    <a href="<?php echo esc_url($settings['buttonlinkti']);?>" class="btn btn-primary coodiv-hover-y w-100 mt-9 coodiv-text-9"><?php echo esc_html($settings['buttonti']);?></a>
                                </div>
                            
                        </div>

                
                        <div class="col-lg-4 mt-lg-n28">
                            <div class="ddos-attack-package not-feaures-package shadow-2"> 
                                    <h2 class="coodiv-text-9 mb-0"><?php echo  esc_html($settings['title1ti0']); ?></h2>
                                    <span><?php echo  esc_html($settings['subtitleti0']); ?></span>
                                    <div class="ddos-attack-price d-flex justify-content-between align-items-center mt-7 py-4">
                                        <h2 class="coodiv-text-4"><?php echo  esc_html($settings['priceti0']); ?></h2>
                                        <?php if ( 'yes' === $settings['showofferti0'] ) { ?>
                                        <span><?php echo  esc_html($settings['offerti0']); ?></span><?php }?>
                                    </div>

                                    <ul class="ddos-first-features border-top">
                                <?php if ( $settings['feature1ti0'] ) {
                                                foreach (  $settings['feature1ti0'] as $item ) { ?>
                                        <li><span><?php echo esc_html($item['featurenameti0']);?></span><span><?php echo esc_html($item['featurevalueti0']);?></span></li> 
                                        <?php } } ?>
                                    </ul>

                                    <ul class="ddos-second-features border-top">
                                    <?php if ( $settings['feature2ti0'] ) {
                                                foreach (  $settings['feature2ti0'] as $item ) { ?>
                                        <li><i class="feather icon-check-circle mr-3"></i><?php echo esc_html($item['featuretti0']);?></li>
                                        <?php } } ?>
                                    </ul>

                                    <ul class="ddos-third-features border-top">
                                    <?php if ( $settings['feature3ti0'] ) {
                                                foreach (  $settings['feature3ti0'] as $item ) { ?>
                                        <li>
                                            <span><strong><?php echo esc_html($item['featurename2ti0']);?></strong><?php echo esc_html($item['featurevalue2ti0']);?></span>
                                        </li>
                                        <?php } } ?>
                                    </ul>

                                    <a href="<?php echo esc_url($settings['buttonlinkti0']);?>" class="btn btn-primary coodiv-hover-y w-100 mt-9 coodiv-text-9"><?php echo esc_html($settings['buttonti0']);?></a>
                                </div>
                            
                        </div>
                    </div>



                </div>
                <svg style="bottom: -40px;" class="bg-wave-box-end-z1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path
                        fill="#fff"
                        fill-opacity="1"
                        d="M0,64L34.3,90.7C68.6,117,137,171,206,186.7C274.3,203,343,181,411,176C480,171,549,181,617,170.7C685.7,160,754,128,823,149.3C891.4,171,960,245,1029,250.7C1097.1,256,1166,192,1234,176C1302.9,160,1371,192,1406,208L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
                    ></path>
                </svg>
            </div>

        <script>
            	
//----------------------------------------------------/
// typed texts 
//----------------------------------------------------/	
if(jQuery("#typed").length > 0) {
	var typed = new Typed('#typed', {
		strings: ['<?php echo esc_html($settings['mina12ti1']);?>','<?php echo esc_html($settings['mina13ti1']);?>', '<?php echo esc_html($settings['mina14ti1']);?>'],
		typeSpeed: 120,
		backSpeed: 50,
		smartBackspace: true,
		loop: true
	});
}

        </script>



            <?php }
            
            

  }



