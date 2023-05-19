<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Imagepricebox extends Widget_Base{

  public function get_name(){
    return 'imagepricebox';
  }

  public function get_title(){
    return esc_html__( 'Image Price Box', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
        'mainimagepricebox',
        [
          'label' => esc_html__( 'Main Tab', 'emyui-core' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
    $this->add_control(
        'titleimagepricebox',
        [
            'label' => esc_html__( 'Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'The most frequently Chosen package', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'descimagepricebox',
        [
            'label' => esc_html__( 'Description', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'default' => esc_html__( 'Weve been doing this since since 2019, so we know that to help newbies and pros alike that it takes all kinds of plans. Our tools are designed to grow with you, so youll never outgrow us (unlike with some of those other guys, just sayin). Thats what being unstuckable is all about.

            Our tools are designed to grow with you, so youll never outgrow us (unlike with some of those other guys, just sayin). Thats what being unstuckable is all about.', 'emyui-core' ),
        
        ]
    );
    $this->add_control(
        'imgimagepricebox',
        [
            'label' => esc_html__( 'Image', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
        
        ]
    );
       $this->end_controls_section();
       $this->start_controls_section(
        'boximagepricebox',
        [
          'label' => esc_html__( 'Price Box', 'emyui-core' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
      $this->add_control(
        'titleboximagepricebox',
        [
            'label' => esc_html__( 'Box Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'the most The most frequently chosen package', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'title1imagepricebox',
        [
            'label' => esc_html__( 'Main Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Anti ddos robbot advanced', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'subtitleimagepricebox',
        [
            'label' => esc_html__( 'Sub Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'from', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'priceimagepricebox',
        [
            'label' => esc_html__( 'Price', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '$62.44', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
		'showofferimagepricebox',
		[
			'label' => esc_html__( 'Show Offer', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::SWITCHER,
			'return_value' => 'yes',
			'default' => 'yes',
		]
	);
    $this->add_control(
        'offerimagepricebox',
        [
            'label' => esc_html__( 'Offer', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'offer -30%', 'emyui-core' ),
    
        ]
    );


$repeater = new \Elementor\Repeater();

$repeater->add_control(
    'featurenameimagepricebox', [
        'label' => esc_html__( 'Features Name', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( 'Capacity' , 'emyui-core' ),
        'label_block' => true,
    ]
);
$repeater->add_control(
    'featurevalueimagepricebox', [
        'label' => esc_html__( 'Features Value', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( '5TB' , 'emyui-core' ),
        'label_block' => true,
    ]
);
$this->add_control(
'feature1imagepricebox',
[
    'label' => esc_html__( 'First Features', 'emyui-core' ),
    'type' => \Elementor\Controls_Manager::REPEATER,
    'fields' => $repeater->get_controls(),
    'default' => [
        [
            'featurenameimagepricebox' => esc_html__( 'Capacity', 'emyui-core' ),
            'featurevalueimagepricebox' => esc_html__( '5TB', 'emyui-core' ),

        ],
    ],
]
);
    $repeater = new \Elementor\Repeater();

    $repeater->add_control(
        'featuretimagepricebox', [
            'label' => esc_html__( 'Features Name', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '5TB' , 'emyui-core' ),
        ]
    );
    $this->add_control(
    'feature2imagepricebox',
    [
        'label' => esc_html__( 'Second Features', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $repeater->get_controls(),
        'default' => [
            [
                'featuretimagepricebox' => esc_html__( 'Unlimited Bandwidth', 'emyui-core' ),
            ],
        ],
       
        ]
    );


$repeater = new \Elementor\Repeater();

$repeater->add_control(
    'featurename2imagepricebox', [
        'label' => esc_html__( 'Features Name', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( 'Dedicated project' , 'emyui-core' ),
        'label_block' => true,
    ]
);
$repeater->add_control(
    'featurevalue2imagepricebox', [
        'label' => esc_html__( 'Features Value', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( 'big companis,we chose to works with it' , 'emyui-core' ),
        'label_block' => true,
    ]
);
$this->add_control(
'feature3imagepricebox',
[
    'label' => esc_html__( 'Third Features', 'emyui-core' ),
    'type' => \Elementor\Controls_Manager::REPEATER,
    'fields' => $repeater->get_controls(),
    'default' => [
        [
            'featurename2imagepricebox' => esc_html__( 'Capacity', 'emyui-core' ),
            'featurevalue2imagepricebox' => esc_html__( '5TB', 'emyui-core' ),

        ],
    ],
]
);
$this->add_control(
    'buttonimagepricebox',
    [
        'label' => esc_html__( 'Button', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( 'Get started for free', 'emyui-core' ),

    ]
);
$this->add_control(
    'buttonlinkimagepricebox',
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
            <div class="ddos-attack-plan bg-default-2 pb-25">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-7 col-12 text-center text-lg-left">
                            <div class="content-text">
                                <h2 class="coodiv-text-4 mb-8">
                                <?php echo  $settings['titleimagepricebox']; // phpcs:ignore ?>
                                </h2>
                                <p class="coodiv-text-8 pr-4 mb-11"><?php echo  esc_html($settings['descimagepricebox']); ?></p>
                                <img class="img-fluid" src="<?php echo esc_url($settings['imgimagepricebox']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $settings['imgimagepricebox'] )); ?>" />
                            </div>
                        </div>

                        <div class="col-lg-5 col-12 pl-lg-15">
                            <div class="ddos-attack-package shadow-2">
                                <span class="ddos-attack-package-head coodiv-text-12"><?php echo  esc_html($settings['titleboximagepricebox']); ?></span>
                                <h2 class="coodiv-text-9 mb-0"><?php echo  esc_html($settings['title1imagepricebox']); ?></h2>
                                <span><?php echo  esc_html($settings['subtitleimagepricebox']); ?></span>
                                <div class="ddos-attack-price d-flex justify-content-between align-items-center mt-7 py-4">
                                    <h2 class="coodiv-text-4"><?php echo  esc_html($settings['priceimagepricebox']); ?></h2>
                                    <?php if ( 'yes' === $settings['showofferimagepricebox'] ) { ?>
                                    <span><?php echo  esc_html($settings['offerimagepricebox']); ?></span><?php }?>
                                </div>

                                <ul class="ddos-first-features border-top">
                               <?php if ( $settings['feature1imagepricebox'] ) {
                                			foreach (  $settings['feature1imagepricebox'] as $item ) { ?>
                                    <li><span><?php echo esc_html($item['featurenameimagepricebox']);?></span><span><?php echo esc_html($item['featurevalueimagepricebox']);?></span></li> 
                                    <?php } } ?>
                                </ul>

                                <ul class="ddos-second-features border-top">
                                <?php if ( $settings['feature2imagepricebox'] ) {
                                			foreach (  $settings['feature2imagepricebox'] as $item ) { ?>
                                    <li><i class="feather icon-check-circle mr-3"></i><?php echo esc_html($item['featuretimagepricebox']);?></li>
                                    <?php } } ?>
                                </ul>

                                <ul class="ddos-third-features border-top">
                                <?php if ( $settings['feature3imagepricebox'] ) {
                                			foreach (  $settings['feature3imagepricebox'] as $item ) { ?>
                                    <li>
                                        <span><strong><?php echo esc_html($item['featurename2imagepricebox']);?></strong><?php echo esc_html($item['featurevalue2imagepricebox']);?></span>
                                    </li>
                                    <?php } } ?>
                                </ul>

                                <a href="<?php echo esc_url($settings['buttonlinkimagepricebox']);?>" class="btn btn-primary coodiv-hover-y w-100 mt-9 coodiv-text-9"><?php echo esc_attr($settings['buttonimagepricebox']);?></a>
                            </div>
                        </div>
                    </div>

              

                </div>
            </div>
<?php
}
  }

