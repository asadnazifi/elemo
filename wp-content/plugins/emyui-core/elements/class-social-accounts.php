<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Socialaccounts extends Widget_Base{

  public function get_name(){
    return 'socialaccountslogo';
  }

  public function get_title(){
    return esc_html__( 'Social Accounts', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
       $this->start_controls_section(
        'Socialaccount',
        [
          'label' => esc_html__( 'Social Accounts', 'emyui-core' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
      $this->add_control(
        'titlesocialaccounts',
        [
            'label' => esc_html__( 'Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'We are always here for your backup.', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'descsocialaccounts',
        [
            'label' => esc_html__( 'Description', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'default' => esc_html__( 'With lots of unique blocks, you can easily build a page without coding. Build your next consultancy website within few minutes.', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'icon1socialaccounts',
        [
            'label' => esc_html__( 'Social Icons', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::ICON,
            'default' => 'fab fa-facebook-f ',
        ]
    );
    $this->add_control(
        'coloricon1socialaccounts',
        [
            'label' => esc_html__( 'Icon', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::COLOR,
        ]
    );
    $this->add_control(
        'social1socialaccounts',
        [
            'label' => esc_html__( 'Social Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '1,435,533', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'socials1socialaccounts',
        [
            'label' => esc_html__( 'Social Subtitle', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Followers', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'sociallink1socialaccounts',
        [
            'label' => esc_html__( 'Social Link', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '#', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'icon2socialaccounts',
        [
            'label' => esc_html__( 'Social Icons', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::ICON,
            'default' => 'fab fa-twitter',

        ]
    );
    $this->add_control(
        'coloricon2socialaccounts',
        [
            'label' => esc_html__( 'Icon Color', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::COLOR,
        ]
    );
    $this->add_control(
        'social2socialaccounts',
        [
            'label' => esc_html__( 'Social Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '143,32', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'socials2socialaccounts',
        [
            'label' => esc_html__( 'Social Subtitle', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Followers', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'sociallink2socialaccounts',
        [
            'label' => esc_html__( 'Social Link', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '#', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'icon3socialaccounts',
        [
            'label' => esc_html__( 'Social Icons', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::ICON,
            'default' => 'fab fa-youtube',
        ]
    );
    $this->add_control(
        'coloricon3socialaccounts',
        [
            'label' => esc_html__( 'Icon Color', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::COLOR,
        ]
    );
    $this->add_control(
        'social3socialaccounts',
        [
            'label' => esc_html__( 'Social Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '32,345', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'socials3socialaccounts',
        [
            'label' => esc_html__( 'Social Subtitle', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Followers', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'sociallink3socialaccounts',
        [
            'label' => esc_html__( 'Social Link', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '#', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'icon4socialaccounts',
        [
            'label' => esc_html__( 'Social Icons', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::ICON,
            'default' => 'fab fa-instagram',
        ]
    );
    $this->add_control(
        'coloricon4socialaccounts',
        [
            'label' => esc_html__( 'Icon Color', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::COLOR,
        ]
    );
    $this->add_control(
        'social4socialaccounts',
        [
            'label' => esc_html__( 'Social Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '32,345', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'socials4socialaccounts',
        [
            'label' => esc_html__( 'Social Subtitle', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Followers', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'sociallink4socialaccounts',
        [
            'label' => esc_html__( 'Social Link', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '#', 'emyui-core' ),
    
        ]
    );
}
  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>
<div class="live-support-section pt-13 pb-md-25 pt-lg-25 pb-15 pb-lg-32 white-mode-texts with-planet-bg overflow-hidden position-relative border-top">
    <svg class="bg-wave-box-end-z1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <defs>
            <linearGradient id="footer-gradient">
                <stop offset="0%" stop-color="#212433" />
                <stop offset="39%" stop-color="#242837" />
                <stop offset="100%" stop-color="#0e1019" />
            </linearGradient>
        </defs>
        <path
            fill="url(#footer-gradient)"
            fill-opacity="1"
            d="M0,128L80,138.7C160,149,320,171,480,192C640,213,800,235,960,234.7C1120,235,1280,213,1360,202.7L1440,192L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"
        ></path>
    </svg>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-9">
                <div class="px-md-12 text-center mb-9 mb-lg-13">
                    <h2 class="title coodiv-text-4 mb-8"><?php echo esc_html($settings['titlesocialaccounts']); ?></h2>
                    <p class="coodiv-text-8 mb-0"><?php echo esc_html($settings['descsocialaccounts']); ?></p>
                </div>
            </div>
        </div>

                    <div class="row justify-content-center social-numbers mt-lg-20 mt-10">
                        <a class="d-flex mr-lg-15 fb" href="<?php echo esc_attr( $settings['sociallink1socialaccounts'] ); ?>">
                            <i class="<?php echo esc_attr( $settings['icon1socialaccounts'] ); ?>"></i>
                            <h3><?php echo  esc_html($settings['social1socialaccounts']); ?><span><?php echo  esc_html($settings['socials1socialaccounts']); ?></span></h3>
                        </a>

                        <a class="d-flex mr-lg-15 tw" href="<?php echo esc_attr( $settings['sociallink2socialaccounts'] ); ?>">
                            <i class="fab fa-twitter"></i>
                            <h3><?php echo  esc_html($settings['social2socialaccounts']); ?><span><?php echo  esc_html($settings['socials2socialaccounts']); ?></span></h3>
                        </a>

                        <a class="d-flex mr-lg-15 you" href="<?php echo esc_attr( $settings['sociallink3socialaccounts'] ); ?>">
                            <i class="fab fa-youtube"></i>
                            <h3><?php echo  esc_html($settings['social3socialaccounts']); ?><span><?php echo  esc_html($settings['socials3socialaccounts']); ?></span></h3>
                        </a>

                        <a class="d-flex mr-lg-15 insta" href="<?php echo esc_attr( $settings['sociallink4socialaccounts'] ); ?>">
                            <i class="fab fa-instagram"></i>
                            <h3><?php echo  esc_html($settings['social4socialaccounts']); ?><span><?php echo  esc_html($settings['socials4socialaccounts']); ?></span></h3>
                        </a>
                    </div>
    </div>
</div>
            <!-- END FAQ section -->
            <style>
                .social-numbers a.fb i{color:<?php echo esc_attr( $settings['coloricon1socialaccounts'] ); ?>!important;}
                .social-numbers a.tw i{color:<?php echo esc_attr( $settings['coloricon2socialaccounts'] ); ?>!important;}
                .social-numbers a.you i{color:<?php echo esc_attr( $settings['coloricon3socialaccounts'] ); ?>!important;}
                .social-numbers a.insta i{color:<?php echo esc_attr( $settings['coloricon4socialaccounts'] ); ?>!important;}
                .social-numbers a.insta i{color:#7b38b3;background:<?php echo esc_attr( $settings['coloricon4socialaccounts'] ); ?>;-webkit-background-clip:text;-webkit-text-fill-color:transparent}
            </style>
<?php
}
  }

