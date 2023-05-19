<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Gridone extends Widget_Base{

  public function get_name(){
    return 'gridone';
  }

  public function get_title(){
    return esc_html__( 'Grid Section', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
      'cont',
      [
        'label' => esc_html__( 'Components', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
    $this->add_control(
      'main-heading1',
      [
        'label' => esc_html__( 'Main Heading', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => esc_html__( 'big companis, we chose to works with it', 'emyui-core' ),
      ]
    );
    $this->add_control(
      'main-heading2',
      [
        'label' => esc_html__( 'Main Heading', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => esc_html__( 'Based on 64,627 Authentic User Reviews by paying customers on 4,250 Different Hosting Services.', 'emyui-core' ),
      ]
    );
    $this->add_control(
      'main-heading3',
      [
        'label' => esc_html__( 'Button Text', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( 'Get Started Now', 'emyui-core' ),
      ]
    );
    $this->add_control(
      'main-heading4',
      [
        'label' => esc_html__( 'Button URL', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( '#', 'emyui-core' ),
      ]
    );
    $this->add_control(
			'main-heading5',
			[
				'label' => esc_html__( 'Main Image', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			
			]
		);
    $this->add_control(
      'bgstyle1151',
      [
          'label' => esc_html__( 'Background Style', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::SELECT,
          'default' => 'bg-default-2',
          'options' => [
              'bg-mirage'  => esc_html__( 'bg-mirage', 'emyui-core' ),
              'bg-default-2' => esc_html__( 'bg-white', 'emyui-core' ),

          ],
      ]
  );

          $this->end_controls_section();
        }


  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>


<div class="why-us-section pt-15 pb-14 py-lg-25 <?php echo esc_html($settings['bgstyle1151']); ?> position-relative <?php if($settings['bgstyle1151'] == "bg-mirage" ){ echo "dark-mode-texts"; } else{ echo esc_html("light-mode-texts"); } ?>">
                <svg class="bg-wave-box-end-z1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path
                        fill="#ffffff"
                        fill-opacity="1"
                        d="M0,160L26.7,170.7C53.3,181,107,203,160,229.3C213.3,256,267,288,320,293.3C373.3,299,427,277,480,229.3C533.3,181,587,107,640,106.7C693.3,107,747,181,800,208C853.3,235,907,213,960,186.7C1013.3,160,1067,128,1120,106.7C1173.3,85,1227,75,1280,64C1333.3,53,1387,43,1413,37.3L1440,32L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"
                    ></path>
                </svg>
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-12 col-lg-7">
                            <div class="content-img pr-lg-9">
                                <img src="<?php echo esc_url($settings['main-heading5']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $settings['main-heading5'] )); ?>" class="mw-100" />
                            </div>
                        </div>
                        <div class="col-12 col-lg-5 coodiv-z-index-2">
                            <div class="content-text pt-11 pt-lg-0 pl-xl-7 text-lg-left text-center">
                                <h2 class="coodiv-text-6 mb-7">
                                <?php echo $settings['main-heading1']; // phpcs:ignore ?>
                                </h2>
                                <p class="coodiv-text-9 mb-0"><?php echo esc_html($settings['main-heading2']); ?></p>
                                <a class="btn btn-warning coodiv-text-9 d-block w-100 mt-15" href="<?php echo esc_url($settings['main-heading4']); ?>" tabindex="0"><?php echo esc_html($settings['main-heading3']); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





    <?php
  }


}
