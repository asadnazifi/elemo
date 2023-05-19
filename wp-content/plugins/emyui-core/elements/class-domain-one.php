<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Domainone extends Widget_Base{

  public function get_name(){
    return 'domainone';
  }

  public function get_title(){
    return esc_html__( 'Domain Search One', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){

    $this->start_controls_section(
        'slidd1544',
        [
          'label' => esc_html__( 'Domain Search', 'emyui-core' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
      $this->add_control(
        'd9911',
        [
          'label' => esc_html__( 'Form Placeholder', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::TEXT,
          'default' => esc_html__( 'eg.example', 'emyui-core' ),
        
        ]
      );
      $this->add_control(
        'd9922',
        [
          'label' => esc_html__( 'Form Submit Button Text', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::TEXT,
          'default' => esc_html__( 'Search', 'emyui-core' ),
        
        ]
      );
      $this->add_control(
        'd9933',
        [
          'label' => esc_html__( 'WHMCS Link', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::TEXT,
          'default' => esc_html__( '#', 'emyui-core' ),
          'description' => esc_html__( 'Put your main whmcs homepage link without http:// or https:// and also without / at the end', 'emyui-core' ),
        
        ]
      );
      $this->end_controls_section();

  }
  

  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>
        <form class="domain-search-form mt-8" action="https://<?php echo esc_html($settings['d9933']); ?>/cart.php?a=add&domain=register" method="post">
            <div class="domain-search position-relative">
                <input class="domain-search-input-header homapage-domain-search pl-6" type="text" name="query" data-role="input-typewrite" required="" aria-label="Register a Domain Name" placeholder="<?php echo esc_html($settings['d9911']); ?>" />
                <input value="<?php echo esc_html($settings['d9922']); ?>" type="submit" class="btn btn-warning domain-search-button-header position-absolute" role="button" aria-label="Search Domain Name"/>
            </div>
        </form>
                      
    <?php
  }


}
