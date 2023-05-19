<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Emymegatwo extends Widget_Base{

  public function get_name(){
    return 'heademymegtwo';
  }

  public function get_title(){
    return esc_html__( 'Mega Menu 2', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
      'slide23',
      [
        'label' => esc_html__( 'Element Fields', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );


    $repeater = new \Elementor\Repeater();

    $repeater->add_control(
      'mg2t1',
      [
        'label' => esc_html__( 'Menu Text', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( 'Homepage one', 'emyui-core' ),
      ]
    );
    $repeater->add_control(
      'mg2t2',
      [
        'label' => esc_html__( 'Menu Link', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( '#', 'emyui-core' ),
      ]
    );
    $repeater->add_control(
      'mg2t22',
      [
        'label' => esc_html__( 'Badge Text', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( 'HOT', 'emyui-core' ),
      ]
    );
    $repeater->add_control(
        'mg2t222',
        [
          'label' => esc_html__( 'Badge Type', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::SELECT,
          'default' => 'hot',
          'options' => [
              'hot'  => esc_html__( 'Hot', 'emyui-core' ),
              'trending' => esc_html__( 'Trending', 'emyui-core' ),
              'new' => esc_html__( 'New', 'emyui-core' ),
              'none' => esc_html__( 'None', 'emyui-core' ),
          ],
        ]
      );
        $this->add_control(
			'listtili',
			[
				'label' => esc_html__( 'List', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),

			]
		);


    $this->add_control(
      'mg2t3',
      [
        'label' => esc_html__( 'Button Text', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( 'you have a suggestion?', 'emyui-core' ),
      ]
    );
    $this->add_control(
      'mg2t4',
      [
        'label' => esc_html__( 'Button Link', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( '#', 'emyui-core' ),
      ]
    );
  


          $this->end_controls_section();
        }


  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>

  
<!-- START homapage dropdown -->

    <ul class="coodiv-menu-dropdown dropdown-menu" aria-labelledby="navbarDropdown">
   <?php    
    if ( $settings['listtili'] ) {
    foreach (  $settings['listtili'] as $item ) { ?>
        <li class="drop-menu-item">
            <a href="<?php echo esc_url($item['mg2t2']); ?>"><?php echo esc_html($item['mg2t1']); ?><span class="badge badge-pill <?php if($item['mg2t222'] === 'hot'){ ?>badge-info <?php }  elseif($item['mg2t222'] === 'new'){  ?>badge-success<?php } elseif($item['mg2t222'] === 'trending'){ ?>badge-warning<?php } else{ ?><?php } ?> px-4"><?php echo esc_html($item['mg2t22']); ?></span></a>
        </li>
        <?php }
    } ?>
      
        <li class="drop-menu-item suggestion-btn text-center mt-2">
            <a href="<?php echo esc_url($settings['mg2t4']); ?>"><?php echo esc_html($settings['mg2t3']); ?></a>
        </li>
    </ul>

<!-- END homapage dropdown -->


    <?php
  }


}
