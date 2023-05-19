<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Whyus extends Widget_Base{

  public function get_name(){
    return 'whyus';
  }

  public function get_title(){
    return esc_html__( 'Why Choose Us', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
      'tab0whyus',
      [
        'label' => esc_html__( 'Headinf', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
    $this->add_control(
		'showtitlewhyus',
		[
			'label' => esc_html__( 'Show Title', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::SWITCHER,
			'return_value' => 'yes',
			'default' => 'yes',
		]
	);
    $this->add_control(
        'titlewhyus',
        [
            'label' => esc_html__( 'Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'People choose us because we serve the best for everyone', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'subtitlewhyus',
        [
            'label' => esc_html__( 'Subtitle', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'WHY CHOOSE US', 'emyui-core' ),
        
        ]
    );

          $this->end_controls_section();
          $this->start_controls_section(
            'tab1whyus',
            [
              'label' => esc_html__( 'First Feature Box', 'emyui-core' ),
                      'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
          );
    $this->add_control(
            'iconbox1whyus', [
                'label' => esc_html__( 'Icon', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'icon-cpu' , 'emyui-core' ),
            ]
        );
     $this->add_control(
          'titlebox1whyus', [
              'label' => esc_html__( 'Title Box', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Free Domain Transfer' , 'emyui-core' ),
          ]
      );
      $this->add_control(
        'descbox1whyus', [
            'label' => esc_html__( 'Description Box', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'default' => esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.' , 'emyui-core' ),
        ]
    );
    $this->end_controls_section();
    $this->start_controls_section(
        'tab2whyus',
        [
          'label' => esc_html__( 'Second Feature Box', 'emyui-core' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
$this->add_control(
        'iconbox2whyus', [
            'label' => esc_html__( 'Icon', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'icon-life-buoy' , 'emyui-core' ),
        ]
    );
 $this->add_control(
      'titlebox2whyus', [
          'label' => esc_html__( 'Title Box', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::TEXT,
          'default' => esc_html__( 'SSD-Only Cloud' , 'emyui-core' ),
      ]
  );
  $this->add_control(
    'descbox2whyus', [
        'label' => esc_html__( 'Description Box', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.' , 'emyui-core' ),
    ]
);
$this->end_controls_section();
$this->start_controls_section(
    'tab3whyus',
    [
      'label' => esc_html__( 'Third Feature Box', 'emyui-core' ),
              'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
    ]
  );
$this->add_control(
    'iconbox3whyus', [
        'label' => esc_html__( 'Icon', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( 'icon-package' , 'emyui-core' ),
    ]
);
$this->add_control(
  'titlebox3whyus', [
      'label' => esc_html__( 'Title Box', 'emyui-core' ),
      'type' => \Elementor\Controls_Manager::TEXT,
      'default' => esc_html__( 'Free 24/7 Priority Support' , 'emyui-core' ),
  ]
);
$this->add_control(
'descbox3whyus', [
    'label' => esc_html__( 'Description Box', 'emyui-core' ),
    'type' => \Elementor\Controls_Manager::TEXTAREA,
    'default' => esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.' , 'emyui-core' ),
]
);
$this->end_controls_section();
$this->start_controls_section(
    'tab4whyus',
    [
      'label' => esc_html__( 'Fourth Feature Box', 'emyui-core' ),
              'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
    ]
  );
$this->add_control(
    'iconbox4whyus', [
        'label' => esc_html__( 'Icon', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( 'icon-paperclip' , 'emyui-core' ),
    ]
);
$this->add_control(
  'titlebox4whyus', [
      'label' => esc_html__( 'Title Box', 'emyui-core' ),
      'type' => \Elementor\Controls_Manager::TEXT,
      'default' => esc_html__( 'Daily and Weekly Backups' , 'emyui-core' ),
  ]
);
$this->add_control(
'descbox4whyus', [
    'label' => esc_html__( 'Description Box', 'emyui-core' ),
    'type' => \Elementor\Controls_Manager::TEXTAREA,
    'default' => esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.' , 'emyui-core' ),
]
);
$this->end_controls_section();
$this->start_controls_section(
    'tab5whyus',
    [
      'label' => esc_html__( 'Tell Us Box', 'emyui-core' ),
              'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
    ]
  );
  $this->add_control(
    'showtitle5whyus',
    [
        'label' => esc_html__( 'Show Tell Box', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::SWITCHER,
        'return_value' => 'yes',
        'default' => 'yes',
    ]
);
$this->add_control(
  'titlebox5whyus', [
      'label' => esc_html__( 'Title Box', 'emyui-core' ),
      'type' => \Elementor\Controls_Manager::TEXT,
      'default' => esc_html__( 'Rated number one hosting by best community' , 'emyui-core' ),
  ]
);
$this->add_control(
'descbox5whyus', [
    'label' => esc_html__( 'Description Box', 'emyui-core' ),
    'type' => \Elementor\Controls_Manager::TEXTAREA,
    'default' => esc_html__( 'Based on 64,627 Authentic User Reviews by paying customers on 4,250 Different Hosting Services.' , 'emyui-core' ),
]
);
$this->add_control(
    'buttonbox5whyus', [
        'label' => esc_html__( 'Button', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( 'Get Started' , 'emyui-core' ),
    ]
);
$this->add_control(
    'buttonlinkbox5whyus', [
        'label' => esc_html__( 'Button Link', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( '#' , 'emyui-core' ),
    ]
);
$this->end_controls_section();

        }


  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>

    		<!-- START features section -->
            <div class="feature-section pt-14 pt-lg-25 pb-7 pb-lg-30 bg-default-2">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-7 col-md-8">
                        <?php   if ( 'yes' === $settings['showtitlewhyus'] ) { ?>
                            <div class="section-title text-center mb-13 mb-lg-15">
                                <h4 class="pre-title coodiv-text-12 text-red text-uppercase mb-7"><?php echo  esc_html($settings['subtitlewhyus']); ?></h4>
                                <h2 class="title coodiv-text-4"><?php echo  esc_html($settings['titlewhyus']); ?></h2>
                            </div>
                            <?php  } ?>
                        </div>
                    </div>

                    <div class="row justify-content-center features-box-container border-0 white-bg shadow-2 rounded-20">
                        <div class="col-lg-3 col-md-10 features-box-sub" data-aos="fade-left" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">
                            <div class="features-box media text-center">
                                <div class="features-box-icon coodiv-bg-blue-opacity-1">
                                    <i class="feather <?php echo  esc_attr($settings['iconbox1whyus']); ?>"></i>
                                </div>
                                <div class="features-box-text">
                                    <h3 class="title"><?php echo  esc_html($settings['titlebox1whyus']); ?></h3>
                                    <p><?php echo  esc_html($settings['descbox1whyus']); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-10 features-box-sub" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200" data-aos-once="true">
                            <div class="features-box media">
                                <div class="features-box-icon coodiv-bg-red-opacity-1">
                                    <i class="feather <?php echo  esc_attr($settings['iconbox2whyus']); ?>"></i>
                                </div>
                                <div class="features-box-text">
                                    <h3 class="title"><?php echo  esc_html($settings['titlebox2whyus']); ?></h3>
                                    <p><?php echo  esc_html($settings['descbox2whyus']); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-10 features-box-sub" data-aos="fade-left" data-aos-duration="800" data-aos-delay="300" data-aos-once="true">
                            <div class="features-box media">
                                <div class="features-box-icon coodiv-bg-green-opacity-1">
                                    <i class="feather <?php echo  esc_attr($settings['iconbox3whyus']); ?>"></i>
                                </div>
                                <div class="features-box-text">
                                    <h3 class="title"><?php echo  esc_html($settings['titlebox3whyus']); ?></h3>
                                    <p><?php echo  esc_html($settings['descbox3whyus']); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-10 features-box-sub" data-aos="fade-left" data-aos-duration="800" data-aos-delay="400" data-aos-once="true">
                            <div class="features-box media">
                                <div class="features-box-icon coodiv-bg-blackish-blue-opacity-1">
                                    <i class="feather <?php echo  esc_attr($settings['iconbox4whyus']); ?>"></i>
                                </div>
                                <div class="features-box-text">
                                    <h3 class="title"><?php echo  esc_html($settings['titlebox4whyus']); ?></h3>
                                    <p><?php echo  esc_html($settings['descbox4whyus']); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php   if ( 'yes' === $settings['showtitle5whyus'] ) { ?>
                    <div class="reviwers-banner row justify-content-center mt-10 mb-15">
                        <div class="col-lg-12 position-relative px-0">
                            <div class="absolute-planet-bg-small"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/header/planet.png" alt="" /></div>
                            <div class="banner-widget-sidebar gradient-animated-bg shadow-2 dark-bg py-13 px-8 rounded-20 position-relative border-0">
                                <svg class="banner-widget-sidebar-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 604 178">
                                    <path
                                        d="M1920,0V146.85c-14.7,5.55-28.79,12.05-49,18.15-9.73,2.94-42.25,12.77-72,13-72.59.56-78.87-56.38-182-90-38.62-12.59-65.18-13.55-99-40a187.6,187.6,0,0,1-43-48Z"
                                        transform="translate(-1316)"
                                        style="fill: #ffffff; opacity: 0.2;"
                                    ></path>
                                    <path d="M1882,0c9.29,27.61-36.45,83.32-63,79-12.19-2-14.6-15.7-38-25-17.81-7.08-24.76-2.45-37-9-9.63-5.15-21.36-16.58-28-45Z" transform="translate(-1316)" style="fill: #ffffff; opacity: 0.1;"></path>
                                </svg>

                                <div class="d-block">
                                    <div class="position-relative d-lg-flex justify-content-between align-items-center">
                                        <div class="col-lg-6 col-md-12 text-center text-lg-left">
                                            <div class="cta-text section-title">
                                                <h2 class="title coodiv-text-6 mb-1"><?php echo  esc_html($settings['titlebox5whyus']); ?></h2>
                                                <p class="coodiv-text-10 mb-8 mb-lg-0 font-weight-light"><?php echo  esc_html($settings['descbox5whyus']); ?></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 offset-lg-2 col-md-12 text-lg-right text-center">
                                            <a href="<?php echo  esc_url($settings['buttonlinkbox5whyus']); ?>" class="btn rounded-20 btn-white coodiv-text-12"><?php echo  esc_html($settings['buttonbox5whyus']); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php  } ?>
                </div>
            </div>
			<!-- END features section -->
			



    <?php
  }


}
