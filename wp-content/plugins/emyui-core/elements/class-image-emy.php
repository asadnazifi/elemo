<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Imageemy extends Widget_Base{

  public function get_name(){
    return 'imageemy';
  }

  public function get_title(){
    return esc_html__( 'Image', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
        'tab0image',
        [
          'label' => esc_html__( 'Main Tab', 'emyui-core' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
    $this->add_control(
        'imgimage',
        [
            'label' => esc_html__( 'Image', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
        
        ]
    );
    $this->add_control(
        'backshapeimage',
        [
            'label' => esc_html__( 'Background Shape', 'plugin-name' ),
            'type' => \Elementor\Controls_Manager::SELECT,
            'default' => 'circle',
            'options' => [
                'circle'  => esc_html__( 'Circle', 'emyui-core' ),
                'rectangle' => esc_html__( 'Rectangle', 'emyui-core' ),

            ],
        ]
    );
       $this->end_controls_section();
    }
        
  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>
    
                            <div class="<?php 
                                             if( $settings['backshapeimage']==='circle'){
                                                    echo esc_attr('content-img-svg-with-bg-2 img-coodiv-oup-1 position-relative px-lg-0 px-10');
                                                }elseif($settings['backshapeimage']==='rectangle'){
                                                echo esc_attr('content-img-svg-with-bg text-left pr-xl-13 ml-lg-n8 position-relative');
                                                }else{} ?>" data-aos="zoom-in-down" data-aos-duration="1100" data-aos-once="true">
                                <span></span>
                                <img src="<?php echo esc_url($settings['imgimage']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $settings['imgimage'] )); ?>" class="w-100 position-relative" />
                            </div>

<?php
}
  }

