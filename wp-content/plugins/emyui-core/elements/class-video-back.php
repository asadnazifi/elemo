<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Videobackground extends Widget_Base{

  public function get_name(){
    return 'videobackground';
  }

  public function get_title(){
    return esc_html__( 'Video Background', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
        'tab0videobackground',
        [
          'label' => esc_html__( 'Main Tab', 'emyui-core' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
    $this->add_control(
        'titlevideobackground',
        [
            'label' => esc_html__( 'Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'People choose us because we serve the best for everyone', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'descvideobackground',
        [
            'label' => esc_html__( 'Description', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'default' => esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.', 'emyui-core' ),
        
        ]
    );
    $this->add_control(
        'linkvideobackground',
        [
            'label' => esc_html__( 'Video Link', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'https://www.youtube.com/watch?v=HQRxks2lqTY', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'imgvideobackground',
        [
            'label' => esc_html__( 'Background Image', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
            ]
        );
        
       $this->end_controls_section();
    }
        
  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>
            <div class="video-section bg-image bg-overlay overlay-1 py-23 py-lg-31 dark-mode-texts" style="background-image: url(<?php echo esc_url($settings['imgvideobackground']['url']); ?>);">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-6 col-lg-8 col-md-10">
                            <div class="text-center video-content">
                                <a class="video-play-icon mx-auto circle-md bg-white mb-9 coodiv-hover-y focus-reset" data-fancybox="" href="<?php echo esc_url($settings['linkvideobackground']); ?>" tabindex="-1">
                                    <i class="feather icon-play coodiv-text-6 text-green"></i>
                                </a>
                                <div class="section-title">
                                    <h2 class="title coodiv-text-6 mb-5"><?php echo esc_html($settings['titlevideobackground']); ?></h2>
                                    <p class="coodiv-text-9 font-weight-light mb-0 px-lg-7 px-xl-0">
                                    <?php echo esc_html($settings['descvideobackground']); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?php
}
  }

