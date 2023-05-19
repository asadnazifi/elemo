<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Emymegaone extends Widget_Base{

  public function get_name(){
    return 'heademymegone';
  }

  public function get_title(){
    return esc_html__( 'Mega Menu 1', 'emyui-core' );
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

    $this->add_control(
      'mg1t1',
      [
        'label' => esc_html__( 'First Tab Title', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( 'Snag your fav domain.', 'emyui-core' ),
      ]
    );
    $this->add_control(
      'mg1t2',
      [
        'label' => esc_html__( 'First Tab Sub Title', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( 'Grab a .com starting at $12.95/yr*.', 'emyui-core' ),
      ]
    );
    $this->add_control(
      'mg1t22',
      [
        'label' => esc_html__( 'First Tab Link', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( '#', 'emyui-core' ),
      ]
    );
    $this->add_control(
      'mg1t3',
      [
        'label' => esc_html__( 'Second Tab Title', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( 'Transfer your domain to us.', 'emyui-core' ),
      ]
    );
    $this->add_control(
      'mg1t4',
      [
        'label' => esc_html__( 'Second Tab Sub Title', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( 'starting at $5.88/yr*.', 'emyui-core' ),
      ]
    );
    $this->add_control(
      'mg1t44',
      [
        'label' => esc_html__( 'First Tab Link', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( '#', 'emyui-core' ),
      ]
    );
	   $this->add_control(
      'mg1t45577',
      [
        'label' => esc_html__( 'WHMCS Link', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( '#', 'emyui-core' ),
      ]
    );
    $this->add_control(
      'mg1t5',
      [
        'label' => esc_html__( 'Description', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( 'To register a new domain, transfer or change registrant information the registrant must explicitly', 'emyui-core' ),
      ]
    );


          $this->end_controls_section();
        }


  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>

  

    <!-- START domains dropdown -->


        <div class="row justify-content-start mega-menu-header">
            <a class="toggle-domain-s-t d-inline-block col-md-6 active-link-border pl-lg-10 pt-lg-8 pb-lg-5 pl-6 pt-4 pb-4 rounded-top-left-8" href="<?php echo esc_url($settings['mg1t22']); ?>">
                <h1 class="coodiv-text-8 title color-blackish-blue text-left w-100 d-block">
                    <span><?php echo esc_html($settings['mg1t1']); ?></span> <span class="d-block coodiv-text-11 color-blackish-blue-opacity fw-100"><?php echo esc_html($settings['mg1t2']); ?></span>
                </h1>
            </a>

            <a class="toggle-domain-s-t d-md-inline-block d-none col-md-6 not-active-link-border pl-lg-10 pt-lg-8 pb-lg-5 pl-6 pt-4 pb-4 rounded-top-right-8" href="<?php echo esc_url($settings['mg1t44']); ?>">
                <h1 class="coodiv-text-8 title color-blackish-blue text-left w-100 d-block">
                    <span><?php echo esc_html($settings['mg1t3']); ?></span> <span class="d-block coodiv-text-11 color-blackish-blue-opacity fw-100"><?php echo esc_html($settings['mg1t4']); ?></span>
                </h1>
            </a>
        </div>

        <div class="px-lg-10 pb-lg-10 pt-lg-13 pt-10 px-5 pb-8 mega-menu-body">
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-7 col-md-8 col-sm-11">
                    <div class="domain-search-form mb-8">
                        <form action="https://<?php echo $settings['mg1t45577']; ?>/cart.php?a=add&domain=register" method="post">
                            <div class="form-group position-relative text-lg-left text-center">
                                <input class="form-control coodiv-text-9 border-separate mb-lg-6 mb-2 min-height-px-64" type="text" id="domain" size="20" name="query" placeholder="دامنه مورد نظر را وارد کنید" />
                                <input value="بررسی" type="submit" class="form-btn btn btn-primary mr-2 coodiv-abs-md-cr min-height-px-50 w-100 w-md-auto" />
                            </div>
                        </form>
                    </div>
                    <div class="form-bottom excerpt text-center">
                        <p class="coodiv-text-11 mb-0 color-blackish-blue">
                           <?php echo esc_html($settings['mg1t5']); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>


<!-- END domains dropdown -->


    <?php
  }


}
