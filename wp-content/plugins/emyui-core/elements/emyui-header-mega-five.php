<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Emymegafive extends Widget_Base{

  public function get_name(){
    return 'heademymegfive';
  }

  public function get_title(){
    return esc_html__( 'Mega Menu 5', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
      'slide15',
      [
        'label' => esc_html__( 'List', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
    $repeater = new \Elementor\Repeater();

    $repeater->add_control(
      'mg313t1',
      [
        'label' => esc_html__( 'Menu Text', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( 'Help Center', 'emyui-core' ),
      ]
    );
    $repeater->add_control(
      'mg313t2',
      [
        'label' => esc_html__( 'Menu Link', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( '#', 'emyui-core' ),
      ]
    );
  
        $this->add_control(
			'listtili313',
			[
				'label' => esc_html__( 'List', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),

			]
		);


          $this->end_controls_section();
        }


  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>

  
<!-- START help dropdown -->

    <ul class="coodiv-menu-dropdown dropdown-menu" aria-labelledby="navbarDropdownHelp">
        <?php 
                  if ( $settings['listtili313'] ) {
                  foreach (  $settings['listtili313'] as $item ) { ?>
        <li class="drop-menu-item"><a href="<?php echo esc_url($item['mg313t2']); ?>"><?php echo esc_html($item['mg313t1']); ?></a></li>
        <?php }
                } ?>
  
  
    </ul>

<!-- END help dropdown -->


    <?php
  }


}
