<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Threestep extends Widget_Base{

  public function get_name(){
    return 'threestep';
  }

  public function get_title(){
    return esc_html__( 'Three Step to Start', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
        'tab0threestep',
        [
          'label' => esc_html__( 'Main Tab', 'emyui-core' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
    $this->add_control(
        'titlethreestep',
        [
            'label' => esc_html__( 'Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '3 Eeasy steps to start using our services.', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'descthreestep',
        [
            'label' => esc_html__( 'Description', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'default' => esc_html__( 'We share common trends and strategies for improving your rental income and making sure you stay in high demand.', 'emyui-core' ),
        
        ]
    );
       $this->end_controls_section();
       $this->start_controls_section(
        'tab1imagedescription',
        [
          'label' => esc_html__( 'Boxes Tab', 'emyui-core' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
    $this->add_control(
        'title1threestep',
        [
            'label' => esc_html__( 'First Step Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Choose a plan', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'desc1threestep',
        [
            'label' => esc_html__( 'First Step Description', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'default' => esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'emyui-core' ),
        
        ]
    );
    $this->add_control(
        'title2threestep',
        [
            'label' => esc_html__( 'Second Step Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Pay your invoices', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'desc2threestep',
        [
            'label' => esc_html__( 'Second Step Description', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'default' => esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'emyui-core' ),
        
        ]
    );
    $this->add_control(
        'title3threestep',
        [
            'label' => esc_html__( 'Third Step Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'And just start', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'desc3threestep',
        [
            'label' => esc_html__( 'Third Step Description', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'default' => esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'emyui-core' ),
        
        ]
    );
       $this->end_controls_section();
       $this->start_controls_section(
        'tab1featurethreesteps',
        [
          'label' => esc_html__( 'Left Tab', 'emyui-core' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
    $this->add_control(
        'titlefeaturethreesteps',
        [
            'label' => esc_html__( 'Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'It all starts with a domain name', 'emyui-core' ),
    
        ]
    );    $this->add_control(
        'titleafterfeaturethreesteps',
        [
            'label' => esc_html__( 'After Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '$0.95/year*', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'descfeaturethreesteps',
        [
            'label' => esc_html__( 'Description', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'default' => esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s', 'emyui-core' ),
        
        ]
    );
    $this->add_control(
        'imgfeaturethreesteps',
        [
            'label' => esc_html__( 'Image', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
        
        ]
    );
       $this->end_controls_section();

       $this->start_controls_section(
        'tab2featurethreesteps',
        [
          'label' => esc_html__( 'Middle Tab', 'emyui-core' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
    $this->add_control(
        'title2featurethreesteps',
        [
            'label' => esc_html__( 'Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Hosting for everybody & every budget', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'desc2featurethreesteps',
        [
            'label' => esc_html__( 'Description', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'default' => esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s', 'emyui-core' ),
        
        ]
    );
    $this->add_control(
        'img2featurethreesteps',
        [
            'label' => esc_html__( 'Image', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
            ]
        );
        
       $this->end_controls_section();
       
       $this->start_controls_section(
        'tab3featurethreesteps',
        [
          'label' => esc_html__( 'Right Tab', 'emyui-core' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
    $this->add_control(
        'title3featurethreesteps',
        [
            'label' => esc_html__( 'Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'It all starts with a domain name', 'emyui-core' ),
    
        ]
    );    $this->add_control(
        'titleafter3featurethreesteps',
        [
            'label' => esc_html__( 'After Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '$0.95/year*', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'desc3featurethreesteps',
        [
            'label' => esc_html__( 'Description', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'default' => esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s', 'emyui-core' ),
        
        ]
    );
    $this->add_control(
        'img3featurethreesteps',
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
            <div class="steps-to-order-section bg-default-4 pb-7 pt-15 pb-lg-24 white-bg position-relative">
                <div class="container">
                    <div class="row justify-content-center px-lg-0 px-10">
                        <h2 class="coodiv-text-4 mb-7 text-center">
                        <?php echo esc_html($settings['titlethreestep']); ?>
                        </h2>
                        <p class="coodiv-text-8 mb-13 text-center"><?php echo esc_html($settings['descthreestep']); ?></p>
                    </div>

                    <div class="number-features-conteiner position-relative row align-items-center mb-25">
                        <div class="col-md-4 col-lg-4" data-aos="fade-left" data-aos-duration="900" data-aos-once="true">
                            <div class="number-features-box my-9">
                                <span class="number coodiv-text-3 font-weight-bold"><?php echo _e('01') ?></span>
                                <div>
                                    <h3 class="coodiv-text-8 mb-0"><?php echo esc_html($settings['title1threestep']); ?></h3>
                                    <p class="coodiv-text-10 font-weight-light mb-0"><?php echo esc_html($settings['desc1threestep']); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4" data-aos="fade-left" data-aos-duration="900" data-aos-once="true">
                            <div class="number-features-box my-9 text-center">
                                <span class="number coodiv-text-3 font-weight-bold"><?php echo _e('02') ?></span>
                                <div>
                                    <h3 class="coodiv-text-8 mb-0"><?php echo esc_html($settings['title2threestep']); ?></h3>
                                    <p class="coodiv-text-10 font-weight-light mb-0"><?php echo esc_html($settings['desc2threestep']); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4" data-aos="fade-left" data-aos-duration="900" data-aos-once="true">
                            <div class="number-features-box my-9 text-right">
                                <span class="number coodiv-text-3 font-weight-bold"><?php echo _e('03') ?></span>
                                <div>
                                    <h3 class="coodiv-text-8 mb-0"><?php echo esc_html($settings['title3threestep']); ?></h3>
                                    <p class="coodiv-text-10 font-weight-light mb-0"><?php echo esc_html($settings['desc3threestep']); ?></p>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-start mb-15">
                        <div class="col-md-3">
                            <div class="hero-the-plan rounded-20 border shadow-2 h-100 text-center position-relative overflow-hidden pb-lg-0 pb-32">
                                <div class="text-area position-relative px-8 pt-17 pb-10">
                                    <h4 class="coodiv-text-7 font-weight-bold">
                                    <?php echo  esc_html($settings['titlefeaturethreesteps']); ?><span class="d-block position-relative border-greenafter w-fit-content mx-auto mb-7"><span class="position-relative"><?php echo  esc_html($settings['titleafterfeaturethreesteps']); ?></span></span>
                                    </h4>
                                    <p class="coodiv-text-10"> <?php echo  esc_html($settings['descfeaturethreesteps']); ?></p>
                                </div>
                                <img src="<?php echo esc_url($settings['imgfeaturethreesteps']['url']); ?>" class="w-100 position-absolute fixed-bottom coodiv-z-index-1" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $settings['imgfeaturethreesteps'] )); ?>" />
                            </div>
                        </div>

                        <div class="col-md-6 px-lg-0 my-10 my-lg-0">
                            <div class="hero-plan-with-img bg-default-2 shadow-2 overflow-hidden">
                                <div class="text-area position-relative px-13 pt-17 pb-10 text-center">
                                    <h4 class="coodiv-text-4 font-weight-bold">
                                    <?php echo $settings['title2featurethreesteps']; // phpcs:ignore ?>
                                    </h4>
                                    <p class="coodiv-text-9"><?php echo  esc_html($settings['desc2featurethreesteps']); ?></p>
                                </div>
                                <img src="<?php echo esc_url($settings['img2featurethreesteps']['url']); ?>" class="w-100" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $settings['img2featurethreesteps'] )); ?>" />
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="hero-the-plan rounded-20 border shadow-2 h-100 text-center position-relative overflow-hidden pb-lg-0 pb-32">
                                <div class="text-area position-relative px-8 pt-17 pb-10">
                                    <h4 class="coodiv-text-7 font-weight-bold">
                                    <?php echo  esc_html($settings['title3featurethreesteps']); ?><span class="d-block position-relative border-greenafter w-fit-content mx-auto mb-7"><span class="position-relative"> <?php echo  esc_html($settings['titleafter3featurethreesteps']); ?></span></span>
                                    </h4>
                                    <p class="coodiv-text-10"><?php echo  esc_html($settings['desc3featurethreesteps']); ?></p>
                                </div>
                                <img src="<?php echo esc_url($settings['img3featurethreesteps']['url']); ?>" class="w-100 position-absolute fixed-bottom coodiv-z-index-1" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $settings['img3featurethreesteps'] )); ?>" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


<?php
}
  }

