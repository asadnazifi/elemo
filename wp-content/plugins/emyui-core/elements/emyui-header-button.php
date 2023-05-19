<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Emyheaderbut extends Widget_Base{

  public function get_name(){
    return 'heademybut';
  }

  public function get_title(){
    return esc_html__( 'Emyui header Button', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
      'slid11',
      [
        'label' => esc_html__( 'Components', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
    $this->add_control(
      'mun1',
      [
        'label' => esc_html__( 'Button Text', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( 'Free Trial', 'emyui-core' ),
      ]
    );

    $this->add_control(
      'mun2',
      [
        'label' => esc_html__( 'Button Link', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( '#', 'emyui-core' ),
      ]
    );
    $this->add_control(
      'mun3',
      [
        'label' => esc_html__( 'Phone Number', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( '(+866) 96-88554434', 'emyui-core' ),
      ]
    );
    $this->add_control(
      'h4g335a',
      [
          'label' => esc_html__( 'Button Color', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::SELECT,
          'default' => 'btn-red',
          'options' => [
              'btn-warning'  => esc_html__( 'Yellow', 'emyui-core' ),
              'btn-red' => esc_html__( 'Red', 'emyui-core' ),

              
          ],
      ]
  );

          $this->end_controls_section();
        }


  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>

    	<!-- START header left buttons -->
        <div class="header-btn ml-auto ml-lg-10 mr-5 d-none d-xs-block position-relative">
                            <a data-i18n="[html]genaral.freetrial" class="btn <?php echo esc_attr($settings['h4g335a']); ?> coodiv-text-9" href="<?php echo esc_url($settings['mun2']); ?>"><?php echo esc_html($settings['mun1']); ?></a>
                            <a class="headerphone-number"><?php echo esc_html($settings['mun3']); ?></a>
                        </div>
						<!-- START header left buttons -->




    <?php
  }


}
