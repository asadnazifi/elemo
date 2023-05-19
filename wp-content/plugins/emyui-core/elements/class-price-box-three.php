<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Priceboxthree extends Widget_Base{

  public function get_name(){
    return 'priceboxthree';
  }

  public function get_title(){
    return esc_html__( 'Price Box Three', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){

    $this->start_controls_section(
      'section_contentpriceboxthree',
      [
        'label' => esc_html__( 'General', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
    $this->add_control(
        'showpriceboxthree',
        [
            'label' => esc_html__( 'Show Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::SWITCHER,
            'label_on' => esc_html__( 'Show', 'your-plugin' ),
            'label_off' => esc_html__( 'Hide', 'your-plugin' ),
            'return_value' => 'yes',
            'default' => 'yes',
        ]
    );
    $this->add_control(
        'titlepriceboxthree',
        [
            'label' => esc_html__( 'Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'condition' => [ 'showpriceboxthree' => 'yes' ],
            'default' => esc_html__( 'Block malicious websites and intrusive ads. Protect your identity and sensitive data.', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'descpriceboxthree',
        [
            'label' => esc_html__( 'Description', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'condition' => [ 'showpriceboxthree' => 'yes' ],
            'default' => esc_html__( 'Choose flexible pricing plan for you', 'emyui-core' ),
    
        ]
    );
    $this->end_controls_section();
    $this->start_controls_section(
        'section_conten2priceboxthree',
        [
          'label' => esc_html__( 'First Plan', 'emyui-core' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
   
    $this->add_control(
        'titlelpriceboxthree',
        [
            'label' => esc_html__( 'Main Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '1-year plan', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'subtitlelpriceboxthree',
        [
            'label' => esc_html__( 'Sub Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'from', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'pricelpriceboxthree',
        [
            'label' => esc_html__( 'Price', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '$3.44', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'periodlpriceboxthree',
        [
            'label' => esc_html__( 'Period', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'per month', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
		'showofferlpriceboxthree',
		[
			'label' => esc_html__( 'Show Offer', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::SWITCHER,
			'return_value' => 'yes',
			'default' => 'yes',
		]
	);
    $this->add_control(
        'offerlpriceboxthree',
        [
            'label' => esc_html__( 'Offer', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'offer -43%', 'emyui-core' ),
            'condition' => ['showofferlpriceboxthree' => 'yes'],
    
        ]
    );

  

$repeater = new \Elementor\Repeater();

$repeater->add_control(
  'featurename1lpriceboxthree', [
      'label' => esc_html__( 'Feature Name', 'emyui-core' ),
      'type' => \Elementor\Controls_Manager::TEXT,
      'default' => esc_html__( 'Capacity' , 'emyui-core' ),
      'label_block' => true,
  ]
);
$repeater->add_control(
  'featurevalueti1lpriceboxthree', [
      'label' => esc_html__( 'Feature Value', 'emyui-core' ),
      'type' => \Elementor\Controls_Manager::TEXT,
      'default' => esc_html__( '5TB' , 'emyui-core' ),
      'label_block' => true,
  ]
);
$this->add_control(
'feature1lpriceboxthree',
[
  'label' => esc_html__( 'First Features', 'emyui-core' ),
  'type' => \Elementor\Controls_Manager::REPEATER,
  'fields' => $repeater->get_controls(),
  'default' => [
      [
          'featurename1lpriceboxthree' => esc_html__( 'Capacity', 'emyui-core' ),
          'featurevalueti1lpriceboxthree' => esc_html__( '5TB', 'emyui-core' ),

      ],
  ],
]
);

$repeater = new \Elementor\Repeater();

$repeater->add_control(
  'featurename2lpriceboxthree', [
      'label' => esc_html__( 'Feature Name', 'emyui-core' ),
      'type' => \Elementor\Controls_Manager::TEXT,
      'default' => esc_html__( 'Dedicated project' , 'emyui-core' ),
      'label_block' => true,
  ]
);
$repeater->add_control(
  'featurevaluelpriceboxthree', [
      'label' => esc_html__( 'Feature Value', 'emyui-core' ),
      'type' => \Elementor\Controls_Manager::TEXT,
      'default' => esc_html__( 'big companis,we chose to works with it' , 'emyui-core' ),
      'label_block' => true,
  ]
);
$this->add_control(
'feature2lpriceboxthree',
[
  'label' => esc_html__( 'Third Features', 'emyui-core' ),
  'type' => \Elementor\Controls_Manager::REPEATER,
  'fields' => $repeater->get_controls(),
  'default' => [
      [
          'featurename2lpriceboxthree' => esc_html__( 'Dedicated project', 'emyui-core' ),
          'featurevaluelpriceboxthree' => esc_html__( 'big companis,we chose to works with it', 'emyui-core' ),

      ],
  ],
]
);
  
  
$this->add_control(
    'button1lfeaturevaluelpriceboxthree',
    [
        'label' => esc_html__( 'Button', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( 'Get 1-year plan', 'emyui-core' ),

    ]
);
$this->add_control(
    'buttonlinklfeaturevaluelpriceboxthree',
    [
        'label' => esc_html__( 'Button Link', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( '#', 'emyui-core' ),

    ]
);
$this->end_controls_section();
$this->start_controls_section(
    'section_conten3priceboxthree',
    [
      'label' => esc_html__( 'Second Plan', 'emyui-core' ),
              'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
    ]
  );
  $this->add_control(
    'titleboxcpriceboxthree',
    [
        'label' => esc_html__( 'Box Title', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( 'Next-level cybersecurity', 'emyui-core' ),

    ]
);
$this->add_control(
    'titlecpriceboxthree',
    [
        'label' => esc_html__( 'Main Title', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( '1-year plan', 'emyui-core' ),

    ]
);
$this->add_control(
    'subtitlecpriceboxthree',
    [
        'label' => esc_html__( 'Sub Title', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( 'from', 'emyui-core' ),

    ]
);
$this->add_control(
    'pricecpriceboxthree',
    [
        'label' => esc_html__( 'Price', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( '$3.44', 'emyui-core' ),

    ]
);
$this->add_control(
    'periodcpriceboxthree',
    [
        'label' => esc_html__( 'Period', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( 'per month', 'emyui-core' ),

    ]
);
$this->add_control(
    'showoffercpriceboxthree',
    [
        'label' => esc_html__( 'Show Offer', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::SWITCHER,
        'return_value' => 'yes',
        'default' => 'yes',
    ]
);
$this->add_control(
    'offercpriceboxthree',
    [
        'label' => esc_html__( 'Offer', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( 'offer -43%', 'emyui-core' ),
        'condition' => ['showoffercpriceboxthree' => 'yes'],

    ]
);



$repeater = new \Elementor\Repeater();

$repeater->add_control(
'featurename1cpriceboxthree', [
  'label' => esc_html__( 'Feature Name', 'emyui-core' ),
  'type' => \Elementor\Controls_Manager::TEXT,
  'default' => esc_html__( 'Capacity' , 'emyui-core' ),
  'label_block' => true,
]
);
$repeater->add_control(
'featurevalueti1cpriceboxthree', [
  'label' => esc_html__( 'Feature Value', 'emyui-core' ),
  'type' => \Elementor\Controls_Manager::TEXT,
  'default' => esc_html__( '5TB' , 'emyui-core' ),
  'label_block' => true,
]
);
$this->add_control(
'feature1cpriceboxthree',
[
'label' => esc_html__( 'First Feature', 'emyui-core' ),
'type' => \Elementor\Controls_Manager::REPEATER,
'fields' => $repeater->get_controls(),
'default' => [
  [
      'featurename1cpriceboxthree' => esc_html__( 'Capacity', 'emyui-core' ),
      'featurevalueticlpriceboxthree' => esc_html__( '5TB', 'emyui-core' ),

  ],
],
]
);

$repeater = new \Elementor\Repeater();

$repeater->add_control(
'featurename2cpriceboxthree', [
  'label' => esc_html__( 'Feature Name', 'emyui-core' ),
  'type' => \Elementor\Controls_Manager::TEXT,
  'default' => esc_html__( 'Dedicated project' , 'emyui-core' ),
  'label_block' => true,
]
);
$repeater->add_control(
'featurevaluecpriceboxthree', [
  'label' => esc_html__( 'Feature Value', 'emyui-core' ),
  'type' => \Elementor\Controls_Manager::TEXT,
  'default' => esc_html__( 'big companis,we chose to works with it' , 'emyui-core' ),
  'label_block' => true,
]
);
$this->add_control(
'feature2cpriceboxthree',
[
'label' => esc_html__( 'Third Features', 'emyui-core' ),
'type' => \Elementor\Controls_Manager::REPEATER,
'fields' => $repeater->get_controls(),
'default' => [
  [
      'featurename2cpriceboxthree' => esc_html__( 'Dedicated project', 'emyui-core' ),
      'featurevaluecpriceboxthree' => esc_html__( 'big companis,we chose to works with it', 'emyui-core' ),

  ],
],
]
);


$this->add_control(
'button1cfeaturevaluelpriceboxthree',
[
    'label' => esc_html__( 'Button', 'emyui-core' ),
    'type' => \Elementor\Controls_Manager::TEXT,
    'default' => esc_html__( 'Get 1-year plan', 'emyui-core' ),

]
);
$this->add_control(
'buttonlinkcfeaturevaluelpriceboxthree',
[
    'label' => esc_html__( 'Button Link', 'emyui-core' ),
    'type' => \Elementor\Controls_Manager::TEXT,
    'default' => esc_html__( '#', 'emyui-core' ),

]
);
  $this->end_controls_section();
  $this->start_controls_section(
    'section_conten4priceboxthree',
    [
      'label' => esc_html__( 'Third Plan', 'emyui-core' ),
              'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
    ]
  );
$this->add_control(
    'titlerpriceboxthree',
    [
        'label' => esc_html__( 'Main Title', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( '1-year plan', 'emyui-core' ),

    ]
);
$this->add_control(
    'subtitlerpriceboxthree',
    [
        'label' => esc_html__( 'Sub Title', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( 'from', 'emyui-core' ),

    ]
);
$this->add_control(
    'pricerpriceboxthree',
    [
        'label' => esc_html__( 'Price', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( '$3.44', 'emyui-core' ),

    ]
);
$this->add_control(
    'periodrpriceboxthree',
    [
        'label' => esc_html__( 'Period', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( 'per month', 'emyui-core' ),

    ]
);
$this->add_control(
    'showofferrpriceboxthree',
    [
        'label' => esc_html__( 'Show Offer', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::SWITCHER,
        'return_value' => 'yes',
        'default' => 'yes',
    ]
);
$this->add_control(
    'offerrpriceboxthree',
    [
        'label' => esc_html__( 'Offer', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( 'offer -43%', 'emyui-core' ),
        'condition' => ['showofferrpriceboxthree' => 'yes'],

    ]
);



$repeater = new \Elementor\Repeater();

$repeater->add_control(
'featurename1rpriceboxthree', [
  'label' => esc_html__( 'Feature Name', 'emyui-core' ),
  'type' => \Elementor\Controls_Manager::TEXT,
  'default' => esc_html__( 'Capacity' , 'emyui-core' ),
  'label_block' => true,
]
);
$repeater->add_control(
'featurevalueti1rpriceboxthree', [
  'label' => esc_html__( 'Feature Value', 'emyui-core' ),
  'type' => \Elementor\Controls_Manager::TEXT,
  'default' => esc_html__( '5TB' , 'emyui-core' ),
  'label_block' => true,
]
);
$this->add_control(
'feature1rpriceboxthree',
[
'label' => esc_html__( 'First Feature', 'emyui-core' ),
'type' => \Elementor\Controls_Manager::REPEATER,
'fields' => $repeater->get_controls(),
'default' => [
  [
      'featurename1rpriceboxthree' => esc_html__( 'Capacity', 'emyui-core' ),
      'featurevalueti1rpriceboxthree' => esc_html__( '5TB', 'emyui-core' ),

  ],
],
]
);

$repeater = new \Elementor\Repeater();

$repeater->add_control(
'featurename2rpriceboxthree', [
  'label' => esc_html__( 'Feature Name', 'emyui-core' ),
  'type' => \Elementor\Controls_Manager::TEXT,
  'default' => esc_html__( 'Dedicated project' , 'emyui-core' ),
  'label_block' => true,
]
);
$repeater->add_control(
'featurevaluerpriceboxthree', [
  'label' => esc_html__( 'Feature Value', 'emyui-core' ),
  'type' => \Elementor\Controls_Manager::TEXT,
  'default' => esc_html__( 'big companis,we chose to works with it' , 'emyui-core' ),
  'label_block' => true,
]
);
$this->add_control(
'feature2rpriceboxthree',
[
'label' => esc_html__( 'Third Features', 'emyui-core' ),
'type' => \Elementor\Controls_Manager::REPEATER,
'fields' => $repeater->get_controls(),
'default' => [
  [
      'featurename2rpriceboxthree' => esc_html__( 'Dedicated project', 'emyui-core' ),
      'featurevaluerpriceboxthree' => esc_html__( 'big companis,we chose to works with it', 'emyui-core' ),

  ],
],
]
);


$this->add_control(
'button1rfeaturevaluelpriceboxthree',
[
    'label' => esc_html__( 'Button', 'emyui-core' ),
    'type' => \Elementor\Controls_Manager::TEXT,
    'default' => esc_html__( 'Get 1-year plan', 'emyui-core' ),

]
);
$this->add_control(
'buttonlinkrfeaturevaluelpriceboxthree',
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
            
            <div class="vpn-pricing-plans white-bg pb-25 pt-20">
                <div class="container">
                <?php   if ( 'yes' === $settings['showpriceboxthree'] ) { ?>
                    <div class="row justify-content-center mb-15">
                        <div class="col-md-7 aos-init aos-animate" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                            <div class="section-title text-center pr-lg-7 mb-0 light-mode-texts">
                                <h2 class="title coodiv-text-4 mb-3"> <?php echo  esc_html($settings['titlepriceboxthree']); ?></h2>
                                <p class="coodiv-text-9 mb-4"> <?php echo  esc_html($settings['descpriceboxthree']); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="row align-items-center justify-content-center">
                        
                        <div class="col-lg-4 col-12 mb-lg-0 mb-15">
                            <div class="ddos-attack-package vpn-version not-features shadow-2">
                                <h2 class="coodiv-text-9 mb-0"><?php echo  esc_html($settings['titlelpriceboxthree']); ?></h2>
                                <span><?php echo  esc_html($settings['subtitlelpriceboxthree']); ?></span>
                                <div class="ddos-attack-price d-flex justify-content-between align-items-center mt-7 py-4">
                                    <h2 class="coodiv-text-4 vpn-version-price-tag"><?php echo  esc_html($settings['pricelpriceboxthree']); ?> <small class="coodiv-text-11"><?php echo  esc_html($settings['periodlpriceboxthree']); ?></small></h2>
                                    <?php   if ( 'yes' === $settings['showofferlpriceboxthree'] ) { ?>
                                    <span><?php echo  esc_html($settings['offerlpriceboxthree']); ?></span>
                                    <?php } ?>
                                </div>

                                <ul class="ddos-first-features border-top">
                                <?php if ( $settings['feature1lpriceboxthree'] ) {
                                      foreach (  $settings['feature1lpriceboxthree'] as $item ) { ?>
                                <li><span><?php echo  esc_html($item['featurename1lpriceboxthree']); ?></span><span><?php echo  esc_html($item['featurevalueti1lpriceboxthree']); ?></span></li>
                                <?php }
                                        } ?>
                                </ul>
                                <ul class="ddos-third-features border-top">
                                <?php if ( $settings['feature2lpriceboxthree'] ) {
                                      foreach (  $settings['feature2lpriceboxthree'] as $item ) { ?>  
                                    <li>
                                        <span><strong><?php echo  esc_html($item['featurename2lpriceboxthree']); ?></strong><?php echo  esc_html($item['featurevaluelpriceboxthree']); ?></span>
                                    </li>
                                        <?php }
                                                 } ?>
                                </ul>

                                <a href="<?php echo  esc_html($settings['buttonlinklfeaturevaluelpriceboxthree']); ?>" class="btn btn-primary coodiv-hover-y w-100 mt-9 coodiv-text-9"><?php echo  esc_html($settings['button1lfeaturevaluelpriceboxthree']); ?></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12 mb-lg-0 mb-15">
                            <div class="ddos-attack-package vpn-version shadow-2">
                                <span class="ddos-attack-package-head coodiv-text-12"><?php echo  esc_html($settings['titleboxcpriceboxthree']); ?></span>
                                <h2 class="coodiv-text-9 mb-0"><?php echo  esc_html($settings['titlecpriceboxthree']); ?></h2>
                                <span><?php echo  esc_html($settings['subtitlecpriceboxthree']); ?></span>
                                <div class="ddos-attack-price d-flex justify-content-between align-items-center mt-7 py-4">
                                    <h2 class="coodiv-text-4 vpn-version-price-tag"><?php echo  esc_html($settings['pricecpriceboxthree']); ?> <small class="coodiv-text-11"><?php echo  esc_html($settings['periodcpriceboxthree']); ?></small></h2>
                                    <?php   if ( 'yes' === $settings['showoffercpriceboxthree'] ) { ?>
                                    <span><?php echo  esc_html($settings['offercpriceboxthree']); ?></span>
                                    <?php } ?>
                                </div>

                                <ul class="ddos-first-features border-top">
                                <?php if ( $settings['feature1cpriceboxthree'] ) {
                                      foreach (  $settings['feature1cpriceboxthree'] as $item ) { ?>
                                <li><span><?php echo  esc_html($item['featurename1cpriceboxthree']); ?></span><span><?php echo  esc_html($item['featurevalueti1cpriceboxthree']); ?></span></li>
                                <?php }
                                        } ?>
                                </ul>
                                <ul class="ddos-third-features border-top">
                                <?php if ( $settings['feature2cpriceboxthree'] ) {
                                      foreach (  $settings['feature2cpriceboxthree'] as $item ) { ?>  
                                    <li>
                                        <span><strong><?php echo  esc_html($item['featurename2cpriceboxthree']); ?></strong><?php echo  esc_html($item['featurevaluecpriceboxthree']); ?></span>
                                    </li>
                                        <?php }
                                                 } ?>
                                </ul>

                                <a href="<?php echo  esc_html($settings['buttonlinkcfeaturevaluelpriceboxthree']); ?>" class="btn btn-primary coodiv-hover-y w-100 mt-9 coodiv-text-9"><?php echo  esc_html($settings['button1cfeaturevaluelpriceboxthree']); ?></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12">
                        <div class="ddos-attack-package vpn-version not-features shadow-2">
                        <h2 class="coodiv-text-9 mb-0"><?php echo  esc_html($settings['titlerpriceboxthree']); ?></h2>
                        <span><?php echo  esc_html($settings['subtitlerpriceboxthree']); ?></span>
                        <div class="ddos-attack-price d-flex justify-content-between align-items-center mt-7 py-4">
                            <h2 class="coodiv-text-4 vpn-version-price-tag"><?php echo  esc_html($settings['pricerpriceboxthree']); ?> <small class="coodiv-text-11"><?php echo  esc_html($settings['periodrpriceboxthree']); ?></small></h2>
                            <?php   if ( 'yes' === $settings['showofferrpriceboxthree'] ) { ?>
                            <span><?php echo  esc_html($settings['offerrpriceboxthree']); ?></span>
                            <?php } ?>
                        </div>

                        <ul class="ddos-first-features border-top">
                        <?php if ( $settings['feature1rpriceboxthree'] ) {
                            foreach (  $settings['feature1rpriceboxthree'] as $item ) { ?>
                        <li><span><?php echo  esc_html($item['featurename1rpriceboxthree']); ?></span><span><?php echo  esc_html($item['featurevalueti1rpriceboxthree']); ?></span></li>
                        <?php }
                                } ?>
                        </ul>
                        <ul class="ddos-third-features border-top">
                        <?php if ( $settings['feature2rpriceboxthree'] ) {
                            foreach (  $settings['feature2rpriceboxthree'] as $item ) { ?>  
                            <li>
                                <span><strong><?php echo  esc_html($item['featurename2rpriceboxthree']); ?></strong><?php echo  esc_html($item['featurevaluerpriceboxthree']); ?></span>
                            </li>
                                <?php }
                                        } ?>
                        </ul>

                        <a href="<?php echo  esc_url($settings['buttonlinkrfeaturevaluelpriceboxthree']); ?>" class="btn btn-primary coodiv-hover-y w-100 mt-9 coodiv-text-9"><?php echo  esc_html($settings['button1rfeaturevaluelpriceboxthree']); ?></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php }
            
            

  }



