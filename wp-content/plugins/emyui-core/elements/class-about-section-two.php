<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Aboutcontent extends Widget_Base{

  public function get_name(){
    return 'aboutcontent';
  }

  public function get_title(){
    return esc_html__( 'About Content', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
        'contenaboutcontent',
        [
          'label' => esc_html__( 'Content', 'emyui-core' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
  
      $this->add_control(
          'titleaboutcontent',
          [
              'label' => esc_html__( 'Title', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Coodiv team What we do ?', 'emyui-core' ),
      
          ]
      );
      $this->add_control(
          'descaboutcontent',
          [
              'label' => esc_html__( 'Description', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s,', 'emyui-core' ),
      
          ]
      );
  
       $this->end_controls_section();
          
    $this->start_controls_section(
      'imagesaboutcontent',
      [
        'label' => esc_html__( 'Images', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );

    $this->add_control(
        'frontaboutcontent',
        [
            'label' => esc_html__( 'Front Image', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
        
        ]
    );    $this->add_control(
        'backaboutcontent',
        [
            'label' => esc_html__( 'Back Image', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
        
        ]
    );
          $this->end_controls_section();
       $this->start_controls_section(
        'mainboxaboutcontent',
        [
          'label' => esc_html__( 'Main feature box', 'emyui-core' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
  
      $this->add_control(
          'titlebox1aboutcontent',
          [
              'label' => esc_html__( 'First Box Title', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( '1M+', 'emyui-core' ),
      
          ]
      );
      $this->add_control(
          'descbox1aboutcontent',
          [
              'label' => esc_html__( 'First Box Description', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => esc_html__( 'Customers visit Albino every month to.', 'emyui-core' ),
      
          ]
      );
          
      $this->add_control(
        'titlebox2aboutcontent',
        [
            'label' => esc_html__( 'Second Box Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '4.9/5.0', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'descbox2aboutcontent',
        [
            'label' => esc_html__( 'Second Box Description', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'default' => esc_html__( 'Average customer ratings we have.', 'emyui-core' ),
    
        ]
    );

     $this->end_controls_section();
     $this->start_controls_section(
        'subboxaboutcontent',
        [
          'label' => esc_html__( 'Sub feature box', 'emyui-core' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
    $this->add_control(
        'subicon1aboutcontent',
        [
            'label' => esc_html__( 'First Image', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
            
        
        ]
    );
      $this->add_control(
          'subtitlebox1aboutcontent',
          [
              'label' => esc_html__( 'First Box Title', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Best servers ever', 'emyui-core' ),
      
          ]
      );
      $this->add_control(
          'subdescbox1aboutcontent',
          [
              'label' => esc_html__( 'First Box Description', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => esc_html__( 'We are technologists, designers, marketers, and educators but first and foremost,', 'emyui-core' ),
      
          ]
      );
      $this->add_control(
        'subicon2aboutcontent',
        [
            'label' => esc_html__( 'Second Image', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
            
        
        ]
    );
      $this->add_control(
          'subtitlebox2aboutcontent',
          [
              'label' => esc_html__( 'Second Box Title', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Best protection', 'emyui-core' ),
      
          ]
      );
      $this->add_control(
          'subdescbox2aboutcontent',
          [
              'label' => esc_html__( 'Second Box Description', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => esc_html__( 'We are technologists, designers, marketers, and educators but first and foremost,', 'emyui-core' ),
      
          ]
      );
      $this->add_control(
        'subicon3aboutcontent',
        [
            'label' => esc_html__( 'Third Image', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
            
        
        ]
    );
      $this->add_control(
          'subtitlebox3aboutcontent',
          [
              'label' => esc_html__( 'Third Box Title', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( '24/7 support team', 'emyui-core' ),
      
          ]
      );
      $this->add_control(
          'subdescbox3aboutcontent',
          [
              'label' => esc_html__( 'Third Box Description', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => esc_html__( 'We are technologists, designers, marketers, and educators but first and foremost,', 'emyui-core' ),
      
          ]
      );
      $this->add_control(
        'subicon4aboutcontent',
        [
            'label' => esc_html__( 'First Image', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
            
        
        ]
    );
      $this->add_control(
          'subtitlebox4aboutcontent',
          [
              'label' => esc_html__( 'Fourth Box Title', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Daily backup', 'emyui-core' ),
      
          ]
      );
      $this->add_control(
          'subdescbox4aboutcontent',
          [
              'label' => esc_html__( 'Fourth Box Description', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => esc_html__( 'We are technologists, designers, marketers, and educators but first and foremost,', 'emyui-core' ),
      
          ]
      );


     $this->end_controls_section();
        }


  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>

<div class="about-us-section position-relative coodiv-z-index-2 mt-lg-n30 mt-n18 border-bottom pb-lg-22">
                <div class="content-section position-relative overflow-hidden">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-sm-11 col-lg-7 pt-15 pb-11 pb-lg-18 pt-lg-30 pr-lg-15">
                                <div class="content-text mt-11 mt-lg-0 mb-13 text-lg-left text-center">
                                    <h2 class="title coodiv-text-5 mb-7">
                                    <?php echo $settings['titleaboutcontent']; // phpcs:ignore ?>
                                    </h2>
                                    <p class="coodiv-text-10 pr-lg-11">
                                    <?php echo esc_html($settings['descaboutcontent']); ?>
                                </div>
                                <div class="content-widget">
                                    <div class="stats-wrapper mt-0">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="box-with-shadow numberbox border-opacity aos-init aos-animate" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                                                    <h3 class="title one"><?php echo  esc_html($settings['titlebox1aboutcontent']); ?></h3>
                                                    <p class="sub-text mb-0"><?php echo  esc_html($settings['descbox1aboutcontent']); ?></p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="box-with-shadow numberbox border-opacity aos-init aos-animate" data-aos="fade-left" data-aos-duration="1800" data-aos-once="true">
                                                    <h3 class="title two"><?php echo  esc_html($settings['titlebox2aboutcontent']); ?></h3>
                                                    <p class="sub-text coodiv-text-13 mb-0"><?php echo  esc_html($settings['descbox2aboutcontent']); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <div class="content-img-group text-center mb-8 mb-lg-0">
                                    <div class="main-image w-xs-75 w-lg-85 w-xl-75 mx-auto position-relative coodiv-z-index-1">
                                        <img class="rounded-10 w-100" src="<?php echo esc_url($settings['frontaboutcontent']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $settings['frontaboutcontent'] )); ?>" />
                                        <div class="underlay-shadow-img coodiv-abs-tl-custom-2 h-100 idk" data-aos="fade-down-right" data-aos-duration="900" data-aos-once="true" data-aos-delay="400">
                                            <img class="rounded-10 h-100" src="<?php echo  esc_url($settings['backaboutcontent']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $settings['backaboutcontent'] )); ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="features-wrapper mt-lg-0 mb-lg-0 mt-10 mb-15">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6">
                                            <div class="featuresbox-4 media py-6" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                                                <div class="box-icon mr-6 mximg">
                                                    <img src="<?php echo esc_url($settings['subicon1aboutcontent']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $settings['subicon1aboutcontent'] )); ?>" />
                                                </div>
                                                <div class="box-body">
                                                    <h3 class="title coodiv-text-9 mb-1"><?php echo  esc_html($settings['subtitlebox1aboutcontent']); ?></h3>
                                                    <p class="coodiv-text-10 mb-0 pr-xl-6"><?php echo  esc_html($settings['subdescbox1aboutcontent']); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="featuresbox-4 media py-6" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                                                <div class="box-icon mr-6 mximg">
                                                    <img src="<?php echo esc_url($settings['subicon2aboutcontent']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $settings['subicon2aboutcontent'] )); ?>" />
                                                </div>
                                                <div class="box-body">
                                                    <h3 class="title coodiv-text-9 mb-1"><?php echo  esc_html($settings['subtitlebox2aboutcontent']); ?></h3>
                                                    <p class="coodiv-text-10 mb-0 pr-xl-6"><?php echo  esc_html($settings['subdescbox2aboutcontent']); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="featuresbox-4 media py-6" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                                                <div class="box-icon mr-6 mximg">
                                                    <img src="<?php echo esc_url($settings['subicon3aboutcontent']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $settings['subicon3aboutcontent'] )); ?>" />
                                                </div>
                                                <div class="box-body">
                                                    <h3 class="title coodiv-text-9 mb-1"><?php echo  esc_html($settings['subtitlebox3aboutcontent']); ?></h3>
                                                    <p class="coodiv-text-10 mb-0 pr-xl-6"><?php echo  esc_html($settings['subdescbox3aboutcontent']); ?></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-6">
                                            <div class="featuresbox-4 media py-6" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                                                <div class="box-icon mr-6 mximg">
                                                    <img src="<?php echo esc_url($settings['subicon4aboutcontent']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $settings['subicon4aboutcontent'] )); ?>" />
                                                </div>
                                                <div class="box-body">
                                                    <h3 class="title coodiv-text-9 mb-1"><?php echo  esc_html($settings['subtitlebox4aboutcontent']); ?></h3>
                                                    <p class="coodiv-text-10 mb-0 pr-xl-6"><?php echo  esc_html($settings['subdescbox4aboutcontent']); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <?php
  }


}
