<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Datamap extends Widget_Base{

  public function get_name(){
    return 'datamap';
  }

  public function get_title(){
    return esc_html__( 'Data Map', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
      'headingss',
      [
        'label' => esc_html__( 'Headings', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
    $this->add_control(
        'mainti31',
        [
            'label' => esc_html__( 'Show Headings', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::SWITCHER,
            'label_on' => esc_html__( 'Show', 'your-plugin' ),
            'label_off' => esc_html__( 'Hide', 'your-plugin' ),
            'return_value' => 'yes',
            'default' => 'yes',
        ]
    );
    $this->add_control(
        'ti31',
        [
            'label' => esc_html__( 'Main Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'condition' => [ 'mainti31' => 'yes' ],
            'default' => esc_html__( 'Think Global, Host Local', 'emyui-core' ),
           
        ]
    );
    $this->add_control(
        'sub31',
        [
            'label' => esc_html__( 'Sub Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'condition' => [ 'mainti31' => 'yes' ],
            'default' => esc_html__( 'Global Network powered by 11 enterprise-class datacenters and 200 Global CDN Anycast Network access points.', 'emyui-core' ),
           
        ]
    );
    $this->end_controls_section();

    $this->start_controls_section(
        'locations',
        [
          'label' => esc_html__( 'Locations', 'emyui-core' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
      $repeater = new \Elementor\Repeater();

      $repeater->add_control(
          'tba1', [
              'label' => esc_html__( 'First Coloumn Title', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Algeria server (EU)' , 'emyui-core' ),
          ]
      );
      $repeater->add_control(
          'tba2', [
              'label' => esc_html__( 'First Coloumn Description', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => esc_html__( 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s and scrambled it to make a type specimen book. It has survived not only five centuries' , 'emyui-core' ),
          ]
      );
      $repeater->add_control(
        'tba3', [
            'label' => esc_html__( 'Second Coloumn Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Closest server to you' , 'emyui-core' ),
        ]
    );
    $repeater->add_control(
        'tba4', [
            'label' => esc_html__( 'Second Coloumn Description', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'default' => esc_html__( 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been', 'emyui-core' ),
        ]
    );
    $repeater->add_control(
        'tba5', [
            'label' => esc_html__( 'Third Coloumn Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Server informations' , 'emyui-core' ),
        ]
    );
    $repeater->add_control(
        'tba6', [
            'label' => esc_html__( 'Open Date', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'opened on: 7 nov 2007' , 'emyui-core' ),
        ]
    );
    $repeater->add_control(
        'tba7', [
            'label' => esc_html__( 'Uptime', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '%99.99' , 'emyui-core' ),
        ]
    );
    $repeater->add_control(
        'tba8', [
            'label' => esc_html__( 'IP', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'IP: 88.88.888.8888' , 'emyui-core' ),
        ]
    );
    $repeater->add_control(
        'datalocatil',
        [
            'label' => esc_html__( 'Right', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::NUMBER,
            'min' => -100,
            'max' => 100,
            'step' => 1,
            'default' => -68,
        ]
    );
    $repeater->add_control(
        'datalocatib',
        [
            'label' => esc_html__( 'Bottom', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::NUMBER,
            'min' => -100,
            'max' => 100,
            'step' => 1,
            'default' => 56,
        ]
    );
    $repeater->add_control(
        'tba9', [
            'label' => esc_html__( 'Location First Part', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'USA' , 'emyui-core' ),
        ]
    );
    $repeater->add_control(
        'tba10', [
            'label' => esc_html__( 'Location Second Part', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'california' , 'emyui-core' ),
        ]
    );

      $this->add_control(
          'datamap',
          [
              'label' => esc_html__( 'Locations', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::REPEATER,
              'fields' => $repeater->get_controls(),
              'default' => [
                  [
                      'tba1' => esc_html__( 'Algeria server (EU)', 'emyui-core' ),
                      'tba2' => esc_html__( 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s and scrambled it to make a type specimen book. It has survived not only five centuries', 'emyui-core' ),
                      'tba3' => esc_html__( 'Closest server to you', 'emyui-core' ),
                      'tba4' => esc_html__( 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been', 'emyui-core' ),
                      'tba5' => esc_html__( 'Server informations', 'emyui-core' ),
                      'tba6' => esc_html__( 'opened on: 7 nov 2007', 'emyui-core' ),
                      'tba7' => esc_html__( '%99.99', 'emyui-core' ),
                      'tba8' => esc_html__( 'IP: 88.88.888.8888', 'emyui-core' ),
                  ],
                 
              ],
          ]
      );


          $this->end_controls_section();
        }


  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>

    		       <!-- START global servers -->
                   <div class="our-servers-place-section position-relative bg-dark-blue bg-pattern pattern-3 pt-14 pt-lg-25 pb-0 overflow-hidden">
                <span class="section-side-shadow-black-white"></span>

                <div class="container">
                    <!-- container -->

                    <!-- START title -->
                    <div class="row justify-content-center dark-mode-texts">
                        <div class="col-xl-8 col-lg-9">
                            <div class="px-md-12 text-center mb-9 mb-lg-20">
                                <h2 class="title coodiv-text-4 mb-4"><?php echo esc_html($settings['ti31']); ?></h2>
                                <p class="coodiv-text-10 mb-0"><?php echo esc_html($settings['sub31']); ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- END title -->

                   




<div class="tab-content white-bg shadow-2 white-mode-texts rounded-10 px-10 py-11 mb-n20 position-relative coodiv-z-index-1" id="global-network-tabsContent">
<?php
                    if ( $settings['datamap'] ) {
                        $ldapp = 1;
                        foreach (  $settings['datamap'] as $item ) { ?>
                        
<div class="tab-pane fade <?php if($ldapp == 1){ ?>show active<?php } ?>" id="global-network-country-0<?php echo esc_attr($ldapp); ?>" role="tabpanel" aria-labelledby="global-network-country-0<?php echo esc_attr($ldapp); ?>-tab">
    <div class="row justify-content-start">
        <div class="col-md-6 border-right pr-9">
            <h5 class="coodiv-text-7"><?php echo esc_html($item['tba1']); ?></h5>
            <p class="coodiv-text-11">
            <?php echo esc_html($item['tba2']); ?>
            </p>
        </div>

        <div class="col-md-3 border-right">
            <h5 class="coodiv-text-7"><?php echo esc_html($item['tba3']); ?></h5>
            <p class="coodiv-text-11"><?php echo esc_html($item['tba4']); ?></p>
        </div>

        <div class="col-md-3">
            <h5 class="coodiv-text-7"><?php echo esc_html($item['tba5']); ?></h5>
            <p class="coodiv-text-11 mb-1 color-blackish-blue-opacity"><?php echo esc_html($item['tba6']); ?></p>
            <p class="coodiv-text-11 mb-1"><span class="badge badge-pill white-text badge-success"><?php echo esc_html($item['tba7']); ?></span></p>
            <p class="coodiv-text-11 mb-1 color-blackish-blue-opacity"><?php echo esc_html($item['tba8']); ?></p>
        </div>
    </div>
</div>


<?php  $ldapp = $ldapp + 1;  } ?>
                  
                  <?php  }
                    ?>    


</div>
                    

                    <div class="network-map-container position-relative mt-20 mt-lg-0">
                        <!-- START network map container -->

                        <!-- START global servers PLACES -->
                        <div class="nav" id="global-network-tabs" role="tablist" aria-orientation="vertical">
                        <?php
                    if ( $settings['datamap'] ) {
                        $ldapp = 1;
                        foreach (  $settings['datamap'] as $item ) { ?>
                        <!-- START servers place -->
                        <a
                                style="bottom: <?php echo esc_attr($item['datalocatib']); ?>%; left: <?php echo esc_attr($item['datalocatil']); ?>%;"
                                class="network-country nav-link"
                                id="global-network-country-0<?php echo esc_attr($ldapp); ?>-tab"
                                data-toggle="pill"
                                href="#global-network-country-0<?php echo esc_attr($ldapp); ?>"
                                role="tab"
                                aria-controls="global-network-country-0<?php echo esc_attr($ldapp); ?>"
                                aria-selected="false"
                            >
                                <span class="coodiv-text-12"><?php echo esc_html($item['tba9']); ?> <small><?php echo esc_html($item['tba10']); ?></small></span>
                                <i class="network-country-bottom-border"></i>
                            </a>
                            <!-- END servers place -->
                    <?php  $ldapp = $ldapp + 1;  }
                        
                    }
                    ?>  
                            

                        </div>
                        <!-- END global servers PLACES -->

                        <img style="opacity: 0.9;" class="w-100" src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/world-map/global_network.png" alt="" />
                        <!-- WORD MAP -->
                    </div>
                    <!-- end network map container -->
                </div>
                <!-- START container -->
            </div>
            <!-- END global servers -->



    <?php
  }


}
