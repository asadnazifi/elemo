<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Browser extends Widget_Base{

  public function get_name(){
    return 'browser';
  }

  public function get_title(){
    return esc_html__( 'Browser', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){

    $this->start_controls_section(
      'section_content',
      [
        'label' => esc_html__( 'Headings', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );

    $this->add_control(
      'browser-ti',
      [
          'label' => esc_html__( 'Main Browser Title', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::TEXT,
          'default' => esc_html__( 'Free WordPress Migration', 'emyui-core' ),
         
      ]
  );
  $this->add_control(
    'browser-description',
    [
        'label' => esc_html__( 'Browser Description', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( 'security and continuous availabilty of your websites thatks to our solutions.', 'emyui-core' ),
       
    ]
);

$this->add_control(
  'browser-but',
  [
      'label' => esc_html__( 'Browser Button Text', 'emyui-core' ),
      'type' => \Elementor\Controls_Manager::TEXT,
      'default' => esc_html__( 'Get started', 'emyui-core' ),
     
  ]
);
$this->add_control(
  'browser-but-link',
  [
      'label' => esc_html__( 'Browser Button link', 'emyui-core' ),
      'type' => \Elementor\Controls_Manager::TEXT,
      'default' => esc_html__( '#', 'emyui-core' ),
     
  ]
);

$this->add_control(
  'image-anim',
  [
    'label' => esc_html__( 'Moving Image', 'emyui-core' ),
    'type' => \Elementor\Controls_Manager::MEDIA,
    'default' => [
      'url' => \Elementor\Utils::get_placeholder_image_src(),
    ],
  ]
);

$this->add_control(
  'image-ani',
  [
    'label' => esc_html__( 'Fix Image', 'emyui-core' ),
    'type' => \Elementor\Controls_Manager::MEDIA,
    'default' => [
      'url' => \Elementor\Utils::get_placeholder_image_src(),
    ],
  ]
);


    $this->end_controls_section();
  }
  

  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>

    
<div class="ddos-attack-section">
                <div class="container">
                    <div class="safari-browser-mockup position-relative">
                        <img class="w-100" src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/svg/safari-browser.svg" alt="" />
                        <div class="ddos-attack-mockup">
                            <div class="ddos-attack-main-text text-center pt-lg-20 pt-10 px-5 dark-mode-texts position-relative coodiv-z-index-1">
                                <h5 class="coodiv-text-4"><?php echo esc_html($settings['browser-ti']); ?></h5>
                                <p class="coodiv-text-11 font-weight-light px-lg-25 px-10">
                                <?php echo esc_html($settings['browser-description']); ?>
                                </p>
                                <a href="<?php echo esc_url($settings['browser-but-link']); ?>" class="btn btn-green coodiv-text-9 font-weight-light rounded-20"><?php echo esc_html($settings['browser-but']); ?></a>
                            </div>
                            <img class="main-ddos-attack-charactuer" src="<?php echo esc_url($settings['image-ani']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $settings['image-ani'] )); ?>" />
                            <img class="wp-floting-img" src="<?php echo esc_url($settings['image-anim']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $settings['image-anim'] )); ?>" />

                            <svg class="ddos-attack-mock-waves-two" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                <linearGradient id="svggradwavetwo">
                                    <stop offset="5%" stop-color="#b935e2" />
                                    <stop offset="95%" stop-color="#932dc6" />
                                </linearGradient>
                                <path
                                    fill="url(#svggradwavetwo)"
                                    fill-opacity="1"
                                    d="M0,0L60,21.3C120,43,240,85,360,122.7C480,160,600,192,720,202.7C840,213,960,203,1080,202.7C1200,203,1320,213,1380,218.7L1440,224L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
                                ></path>
                            </svg>
                            <svg class="ddos-attack-mock-waves-one" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                <linearGradient id="svggradwaveone">
                                    <stop offset="5%" stop-color="#fc6b5a" />
                                    <stop offset="95%" stop-color="#ffb762" />
                                </linearGradient>
                                <path
                                    fill="url(#svggradwaveone)"
                                    fill-opacity="1"
                                    d="M0,160L60,138.7C120,117,240,75,360,80C480,85,600,139,720,144C840,149,960,107,1080,80C1200,53,1320,43,1380,37.3L1440,32L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
                                ></path>
                            </svg>
                            <svg class="ddos-attack-mock-waves" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                <path
                                    fill="#fff"
                                    fill-opacity="1"
                                    d="M0,160L26.7,181.3C53.3,203,107,245,160,224C213.3,203,267,117,320,117.3C373.3,117,427,203,480,202.7C533.3,203,587,117,640,96C693.3,75,747,117,800,133.3C853.3,149,907,139,960,122.7C1013.3,107,1067,85,1120,96C1173.3,107,1227,149,1280,144C1333.3,139,1387,85,1413,58.7L1440,32L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"
                                ></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>



    <?php
  }


}
