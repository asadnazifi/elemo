<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Offer extends Widget_Base{

  public function get_name(){
    return 'offer';
  }

  public function get_title(){
    return esc_html__( 'Offer', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
        'tab0offer',
        [
          'label' => esc_html__( 'Main Tab', 'emyui-core' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
    $this->add_control(
        'titleoffer',
        [
            'label' => esc_html__( 'Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Start Your 14 Day Free Trial', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'descoffer',
        [
            'label' => esc_html__( 'Description', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'default' => esc_html__( 'Join over 18.000 satisfied customers already using coodiv.net and make your content load faster..', 'emyui-core' ),
        
        ]
    );
    $this->add_control(
        'buttonoffer',
        [
            'label' => esc_html__( 'Button', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Start 14 Day for Free ', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'linkbuttonoffer',
        [
            'label' => esc_html__( 'Link Button', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '#', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
      'buttodescnoffer',
      [
          'label' => esc_html__( 'Button Description', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::TEXT,
          'default' => esc_html__( 'No credit card required – Get started in seconds.', 'emyui-core' ),
  
      ]
  );
  $this->add_control(
    'imgoffer',
    [
      'label' => esc_html__( 'Image', 'emyui-core' ),
      'type' => \Elementor\Controls_Manager::MEDIA,
    
    ]
  );
       $this->end_controls_section();
 
    }
        
  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>
            <div class="free-trial-section py-12 py-lg-30 dark-mode-texts bg-mirage bg-pattern pattern-6 position-relative">
                <div class="vpn-space-men-img-section"><img src="<?php echo esc_url($settings['imgoffer']['url']); ?>" alt="" /></div>
                <div class="container">
                    <div class="row align-items-center align-items-center position-relative coodiv-z-index-2">
                        <div class="col-lg-6">
                            <div class="section-title free-trial-text pr-lg-5 text-lg-left text-center">
                                <h2 class="coodiv-text-5 mb-7"><?php echo  esc_html($settings['titleoffer']); ?></h2>
                                <p class="coodiv-text-8 mb-0"><?php echo  esc_html($settings['descoffer']); ?></p>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-xl-1 col-xl-5 mt-lg-0 mt-10">
                            <div class="mt-5 mt-lg-0 text-lg-right text-center">
                                <a href="<?php echo  esc_html($settings['linkbuttonoffer']); ?>" class="btn btn-red with-icon coodiv-hover-y rounded-25 mb-5"><?php echo  esc_html($settings['buttonoffer']); ?><i class="feather icon-arrow-right font-weight-bold"></i></a>
                                <p class="coodiv-text-9"><?php echo  esc_html($settings['buttodescnoffer']); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php
}
  }

