<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Featurefive extends Widget_Base{

  public function get_name(){
    return 'featurefive';
  }

  public function get_title(){
    return esc_html__( 'Feature Five', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
        'contentfeaturefive',
        [
          'label' => esc_html__( 'Content', 'emyui-core' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
  
      $this->add_control(
          'titlefeaturefive',
          [
              'label' => esc_html__( 'Title', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Shared values keep us connected & guide us as one team.', 'emyui-core' ),
      
          ]
      );
      $this->add_control(
          'descfeaturefive',
          [
              'label' => esc_html__( 'Description', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => esc_html__( 'Were building a different type of company, one thats focused on unlocking our customers potential towards more value-added areas.', 'emyui-core' ),
      
          ]
      );
  
       $this->end_controls_section();
       $this->start_controls_section(
        'boxfeaturefive',
        [
          'label' => esc_html__( 'Features', 'emyui-core' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
        $repeater = new \Elementor\Repeater();
            $repeater->add_control(
                'titlefeaturefive', [
                    'label' => esc_html__( 'Feature Title', 'emyui-core' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__( 'Best web hosting plan' , 'emyui-core' ),
                    'label_block' => true,
                ]
            );
            $repeater->add_control(
             'descfeaturefive', [
                 'label' => esc_html__( 'Feature Description', 'emyui-core' ),
                 'type' => \Elementor\Controls_Manager::TEXT,
                 'default' => esc_html__( 'We are technologists, designers, marketers, and educators but first and foremost.' , 'emyui-core' ),
                 'label_block' => true,
             ]
         );
        $this->add_control(
            'boxesfeaturefive',
            [
                'label' => esc_html__( 'Features img', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
            ]
        );
       $this->end_controls_section();
       $this->start_controls_section(
        'imagefeaturefive',
        [
          'label' => esc_html__( 'Content', 'emyui-core' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
      $this->add_control(
        'imgfeaturefive',
        [
            'label' => esc_html__( 'Image', 'emyui-core' ),
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

<div class="content-section bg-default-1 border-top pt-13 pt-lg-26 pb-13 pb-lg-21 border-bottom">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6">
                            <div class="content-img-group text-center mb-8 mb-lg-0 pr-lg-13">
                                <div class="main-image w-xs-75 w-lg-85 w-xl-75 mx-auto position-relative coodiv-z-index-1">
                                    <img class="rounded-10 w-100" src="<?php echo esc_url($settings['imgfeaturefive']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $settings['imgfeaturefive'] )); ?>" />
                                </div>
                            </div>
                        </div>

                        <div class="col-10 col-lg-6">
                            <div class="section-title content-text mb-13">
                                <h2 class="title coodiv-text-4 mb-6"><?php echo esc_html($settings['titlefeaturefive']); ?></h2>
                                <p class="coodiv-text-9"><?php echo esc_html($settings['descfeaturefive']); ?></p>
                            </div>
                            <div class="content-widget">
                                <div class="row mb-n9">
                                <?php if ( $settings['boxesfeaturefive'] ) {
                                			foreach (  $settings['boxesfeaturefive'] as $item ) {
			                                    	 ?>
                                    <div class="col-md-6 col-lg-9 col-xl-10 aos-init aos-animate" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
                                        <div class="single-widget mb-13">
                                            <h3 class="w-title coodiv-text-8"><?php echo esc_html($item['titlefeaturefive']); ?></h3>
                                            <p class="coodiv-text-11 mb-0"><?php echo esc_html($item['descfeaturefive']); ?></p>
                                        </div>
                                    </div>
                                    <?php } }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?php
}
  }

