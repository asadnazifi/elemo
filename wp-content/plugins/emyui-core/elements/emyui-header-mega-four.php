<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Emymegafour extends Widget_Base{

  public function get_name(){
    return 'heademymegfour';
  }

  public function get_title(){
    return esc_html__( 'منو سفارشی ', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
//    $this->start_controls_section(
//        'slidd',
//        [
//          'label' => esc_html__( 'Headings', 'emyui-core' ),
//                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
//        ]
//      );
//      $this->add_control(
//          'mg5t1',
//          [
//            'label' => esc_html__( 'Main Title', 'emyui-core' ),
//            'type' => \Elementor\Controls_Manager::TEXT,
//            'default' => esc_html__( 'Hosting for every website.', 'emyui-core' ),
//          ]
//        );
//        $this->add_control(
//          'mg5t2',
//          [
//            'label' => esc_html__( 'Main Sub Title', 'emyui-core' ),
//            'type' => \Elementor\Controls_Manager::TEXT,
//            'default' => esc_html__( 'Unlimited storage, unmetered bandwidth, unbeatable hosting. This gator’s got ya covered.', 'emyui-core' ),
//          ]
//        );


                  $this->end_controls_section();

                  $this->start_controls_section(
                    'slidd1',
                    [
                      'label' => esc_html__( 'اضافه کردن منو', 'emyui-core' ),
                              'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                    ]
                  );
                  $repeater = new \Elementor\Repeater();

                  $repeater->add_control(
                    'mg51',
                    [
                      'label' => esc_html__( 'Title', 'emyui-core' ),
                      'type' => \Elementor\Controls_Manager::TEXT,
                      'default' => esc_html__( 'Wordpress Hosting', 'emyui-core' ),
                    ]
                  );
                  $repeater->add_control(
                    'mg52',
                    [
                      'label' => esc_html__( 'Sub Title', 'emyui-core' ),
                      'type' => \Elementor\Controls_Manager::TEXT,
                      'default' => esc_html__( 'Unlimited storage, unmetered bandwidth.', 'emyui-core' ),
                    ]
                  );
                  $repeater->add_control(
                    'mg53',
                    [
                      'label' => esc_html__( 'Icon', 'emyui-core' ),
                      'type' => \Elementor\Controls_Manager::MEDIA,
                      'default' => esc_html__( 'fab fa-wordpress', 'emyui-core' ),
                    ]
                  );
                  $repeater->add_control(
                    'mg54',
                    [
                      'label' => esc_html__( 'Badge', 'emyui-core' ),
                      'type' => \Elementor\Controls_Manager::TEXT,
                      'default' => esc_html__( 'متن ساختگی لورم اسپیوم', 'emyui-core' ),
                    ]
                  );
                  $repeater->add_control(
                    'mg544',
                    [
                      'label' => esc_html__( 'Link', 'emyui-core' ),
                      'type' => \Elementor\Controls_Manager::TEXT,
                      'default' => esc_html__( '#', 'emyui-core' ),
                    ]
                  );

                      $this->add_control(
                    'mg55',
                    [
                      'label' => esc_html__( 'Features', 'emyui-core' ),
                      'type' => \Elementor\Controls_Manager::REPEATER,
                      'fields' => $repeater->get_controls(),

                    ]
                  );


                  $this->end_controls_section();

        }


  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>

  
<!-- START pro hosting dropdown -->

    <div class="coodiv-megamenu-dropdown center white-bg dropdown-menu d-lg-block w-100 py-10 font_family_TKT" aria-labelledby="navbarDropdown120">
        <div class="row justify-content-center font_family_TKT">
<!--            <div class="col-md-12">-->
<!--                <h1 class="coodiv-text-6 title color-blackish-blue text-left w-100 d-block mb-10">-->
<!--                    <span>--><?php //echo esc_html($settings['mg5t1']); ?><!--</span>-->
<!--                    <span class="d-block coodiv-text-11 color-blackish-blue-opacity fw-100">--><?php //echo esc_html($settings['mg5t2']); ?><!--</span>-->
<!--                </h1>-->
<!--            </div>-->
        </div>

        <div class="row justify-content-start hostings-card-group">

        <?php
                  if ( $settings['mg55'] ) {
                  foreach (  $settings['mg55'] as $item ) { ?>

            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-8 mb-md-12 mb-lg-6 mb-3 hostings-card-items">
                <span class="hostings-card-off fas fa-exclamation"></span>
                <p class="text_discriptionss font_family_TKT"><?php echo esc_html($item['mg54']); ?></p>
                <a href="<?php echo $item['mg544']; ?>" class="hostings-card d-flex flex-column align-items-center flex-md-row border-separate position-relative rounded-10 px-8 py-13 overflow-hidden">


                    <div class="card-icon d-flex mr-lg-7 mb-9 mb-lg-0">

                       <i><img src="<?php echo esc_html($item['mg53']['url']); ?>" ></i>
                    </div>
                    <div class="card-texts pr-xl-10">
                        <h3 class="coodiv-text-10 mb-1 coodiv-text-exerpt color-blackish-blue"><?php echo esc_html($item['mg51']); ?></h3>
                        <p class="coodiv-text-11 fw-100 mb-0 color-blackish-blue-opacity"><?php echo esc_html($item['mg52']); ?></p>
                    </div>
                </a>
            </div>

            <?php }
                } ?>


       
        </div>
    </div>

<!-- END pro hosting dropdown -->


    <?php
  }


}
