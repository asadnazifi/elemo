<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Contactt extends Widget_Base{

  public function get_name(){
    return 'contactt';
  }

  public function get_title(){
    return esc_html__( 'Contact Info', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
        'contentfeaturefour',
        [
          'label' => esc_html__( 'Content', 'plugin-name' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
      $this->add_control(
        'contact1',
        [
            'label' => esc_html__( 'Button Text', 'plugin-name' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Live chat', 'plugin-name' ),
        
        ]
    );
    $this->add_control(
        'contact2',
        [
            'label' => esc_html__( 'Button Link', 'plugin-name' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '#', 'plugin-name' ),
        
        ]
    );
    $this->add_control(
        'contact3',
        [
            'label' => esc_html__( 'Phone Row Title', 'plugin-name' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Call us for free', 'plugin-name' ),
        
        ]
    );
    $this->add_control(
        'contact4',
        [
            'label' => esc_html__( 'Phone Row First Number', 'plugin-name' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '+1-940-394-2948', 'plugin-name' ),
        
        ]
    );
    $this->add_control(
        'contact5',
        [
            'label' => esc_html__( 'Phone Row Second Number', 'plugin-name' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '+1-389-385-3807', 'plugin-name' ),
        
        ]
    );
    $this->add_control(
        'contact6',
        [
            'label' => esc_html__( 'Email Row Title', 'plugin-name' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Email us', 'plugin-name' ),
        
        ]
    );
    $this->add_control(
        'contact7',
        [
            'label' => esc_html__( 'Email Row First email', 'plugin-name' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'support@coodiv.net', 'plugin-name' ),
        
        ]
    );
    $this->add_control(
        'contact8',
        [
            'label' => esc_html__( 'Email Row Second email', 'plugin-name' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'items@coodiv.net', 'plugin-name' ),
        
        ]
    );
    $this->add_control(
        'contact9',
        [
            'label' => esc_html__( 'Office Row Title', 'plugin-name' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Visit our office', 'plugin-name' ),
        
        ]
    );
    $this->add_control(
        'contact10',
        [
            'label' => esc_html__( 'Office Row address', 'plugin-name' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Rue amir khaled nbr 4, 19001', 'plugin-name' ),
        
        ]
    );
    $this->add_control(
        'contact11',
        [
            'label' => esc_html__( 'Office Row Button Text', 'plugin-name' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'open google maps', 'plugin-name' ),
        
        ]
    );
    $this->add_control(
        'contact111',
        [
            'label' => esc_html__( 'Office Row Button Link', 'plugin-name' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '#', 'plugin-name' ),
        
        ]
    );
    $this->add_control(
        'contact12',
        [
            'label' => esc_html__( 'Support Row title', 'plugin-name' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'open a support ticket', 'plugin-name' ),
        
        ]
    );
    $this->add_control(
        'contact13',
        [
            'label' => esc_html__( 'Support Row Description', 'plugin-name' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'chose a departement and', 'plugin-name' ),
        
        ]
    );
    $this->add_control(
        'contact14',
        [
            'label' => esc_html__( 'Support Row Button Text', 'plugin-name' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'open a new ticket', 'plugin-name' ),
        
        ]
    );
    $this->add_control(
        'contact15',
        [
            'label' => esc_html__( 'Support Row Button Link', 'plugin-name' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '#', 'plugin-name' ),
        
        ]
    );
    $this->add_control(
        'contact16',
        [
            'label' => esc_html__( 'Social Media Title', 'plugin-name' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Follow us in Social Media', 'plugin-name' ),
        
        ]
    );
    
    $this->add_control(
        'contact17',
        [
            'label' => esc_html__( 'Social Media Icon 1', 'plugin-name' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'fab fa-facebook-f', 'plugin-name' ),
        
        ]
    );
    $this->add_control(
        'contact171',
        [
            'label' => esc_html__( 'Social Media Icon 1 Link', 'plugin-name' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '#', 'plugin-name' ),
        
        ]
    );
    $this->add_control(
        'contact18',
        [
            'label' => esc_html__( 'Social Media Icon 2', 'plugin-name' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'fab fa-twitter', 'plugin-name' ),
        
        ]
    );
    $this->add_control(
        'contact181',
        [
            'label' => esc_html__( 'Social Media Icon 2 Link', 'plugin-name' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '#', 'plugin-name' ),
        
        ]
    );
    $this->add_control(
        'contact19',
        [
            'label' => esc_html__( 'Social Media Icon 3', 'plugin-name' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'fab fa-youtube', 'plugin-name' ),
        
        ]
    );
    $this->add_control(
        'contact191',
        [
            'label' => esc_html__( 'Social Media Icon 3 Link', 'plugin-name' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '#', 'plugin-name' ),
        
        ]
    );
    $this->add_control(
        'contact20',
        [
            'label' => esc_html__( 'Social Media Icon 4', 'plugin-name' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'fab fa-instagram', 'plugin-name' ),
        
        ]
    );
    $this->add_control(
        'contact201',
        [
            'label' => esc_html__( 'Social Media Icon 4 Link', 'plugin-name' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '#', 'plugin-name' ),
        
        ]
    );
    
    $this->end_controls_section();
    }
        
  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>


                            <a href="<?php echo esc_url($settings['contact2']); ?>" data-toggle="modal" data-target="#errormodal" class="live-chat-btn-contact-page btn btn-success d-block mb-8 rounded-20 shadow-2"><?php echo esc_html($settings['contact1']); ?></a>
                            <div class="features-box-3 px-5 py-5 border-opacity position-relative white-bg rounded-20 bg-white shadow-2 coodiv-z-index-2">
                                <div class="col-md-12 text-left px-8 pb-8 pt-5 d-flex justify-content-start align-items-center border-bottom-separate">
                                    <div class="widget-icon circle-sm-2 bg-white coodiv-text-6 text-primary mr-7">
                                        <i class="feather icon-phone-call"></i>
                                    </div>
                                    <div>
                                        <h5 class="coodiv-text-8 mb-0"><?php echo esc_html($settings['contact3']); ?></h5>
                                        <p class="coodiv-text-11 mb-0">
                                        <?php echo esc_html($settings['contact4']); ?> <br />
                                        <?php echo esc_html($settings['contact5']); ?>
                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-12 text-left px-8 pb-8 pt-5 d-flex justify-content-start align-items-center border-bottom-separate">
                                    <div class="widget-icon circle-sm-2 bg-white coodiv-text-6 text-primary mr-7">
                                        <i class="feather icon-mail"></i>
                                    </div>
                                    <div>
                                        <h5 class="coodiv-text-8 mb-0"><?php echo esc_html($settings['contact6']); ?></h5>
                                        <p class="coodiv-text-11 mb-0">
                                        <?php echo esc_html($settings['contact7']); ?> <br />
                                        <?php echo esc_html($settings['contact8']); ?>
                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-12 text-left px-8 pb-8 pt-5 d-flex justify-content-start align-items-center border-bottom-separate">
                                    <div class="widget-icon circle-sm-2 bg-white coodiv-text-6 text-primary mr-7">
                                        <i class="feather icon-map"></i>
                                    </div>
                                    <div>
                                        <h5 class="coodiv-text-8 mb-0"><?php echo esc_html($settings['contact9']); ?></h5>
                                        <p class="coodiv-text-11 mb-0">
                                        <?php echo esc_html($settings['contact10']); ?>
                                            <a
                                                target="_blank"
                                                class="btn btn-warning coodiv-text-12 py-1 px-1 rounded-20 mt-2"
                                                href="<?php echo esc_url($settings['contact111']); ?>"
                                            >
                                                <i class="feather icon-map-pin mr-3"></i> <?php echo esc_html($settings['contact11']); ?>
                                            </a>
                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-12 text-left px-8 pb-8 pt-5 d-flex justify-content-start align-items-center border-bottom-separate">
                                    <div class="widget-icon circle-sm-2 bg-white coodiv-text-6 text-primary mr-7">
                                        <i class="feather icon-life-buoy"></i>
                                    </div>
                                    <div>
                                        <h5 class="coodiv-text-8 mb-0"><?php echo esc_html($settings['contact12']); ?></h5>
                                        <p class="coodiv-text-11 mb-0"> <?php echo esc_html($settings['contact13']); ?> <a target="_blank" class="btn btn-warning coodiv-text-12 py-1 px-1 rounded-20 mt-2" href=" <?php echo esc_url($settings['contact15']); ?>"> <?php echo esc_html($settings['contact14']); ?></a></p>
                                    </div>
                                </div>

                                <div class="col-md-12 text-left px-8 pb-8 pt-7 d-flex justify-content-start align-items-center">
                                    <div class="widget-icon circle-sm-2 bg-white coodiv-text-6 text-primary mr-7">
                                        <i class="feather icon-share-2"></i>
                                    </div>
                                    <div>
                                        <h5 class="coodiv-text-8 mb-0"><?php echo esc_html($settings['contact16']); ?></h5>
                                        <div class="social-numbers contact-page d-flex mt-3">
                                            <a class="mr-1 fb" href="<?php echo esc_url($settings['contact171']); ?>"><i class="<?php echo esc_attr($settings['contact17']); ?>"></i></a>
                                            <a class="mr-1 tw" href="<?php echo esc_url($settings['contact181']); ?>"><i class="<?php echo esc_attr($settings['contact18']); ?>"></i></a>
                                            <a class="mr-1 you" href="<?php echo esc_url($settings['contact191']); ?>"><i class="<?php echo esc_attr($settings['contact19']); ?>"></i></a>
                                            <a class="insta" href="<?php echo esc_url($settings['contact201']); ?>"><i class="<?php echo esc_attr($settings['contact20']); ?>"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                 



    <?php
}

}
