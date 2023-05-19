<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Faqone extends Widget_Base{

  public function get_name(){
    return 'faqone';
  }

  public function get_title(){
    return esc_html__( 'Faq First Style', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
      'headings',
      [
        'label' => esc_html__( 'Headings', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );

    $this->add_control(
		'mainhead',
		[
			'label' => esc_html__( 'Main Heading', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( 'FREQUENTLY ASKED QUESTIONS', 'emyui-core' ),
		]
	);
    $this->add_control(
        'subhead',
        [
            'label' => esc_html__( 'Sub Heading', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'default' => esc_html__( 'Below you will find answers to the questions we get asked the most about our services.', 'emyui-core' ),
        ]
    );


          $this->end_controls_section();

          $this->start_controls_section(
            'accordion',
            [
              'label' => esc_html__( 'FAQ', 'emyui-core' ),
                      'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
          );
      
          $repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'mainti', [
				'label' => esc_html__( 'Title', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Do I need to relicense an item each time I use it?' , 'emyui-core' ),
			]
		);
        $repeater->add_control(
			'subti', [
				'label' => esc_html__( 'Sub Title', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Yes you do. You need a license for each end project. This ensures contributors are paid for your usage of each asset & you and your clients have the legal right to use the item.' , 'emyui-core' ),
			]
		);
        $this->add_control(
			'listtifaq',
			[
				'label' => esc_html__( 'FAQ', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'mainti' => esc_html__( 'Do I need to relicense an item each time I use it?', 'emyui-core' ),
						'subti' => esc_html__( 'Yes you do. You need a license for each end project. This ensures contributors are paid for your usage of each asset & you and your clients have the legal right to use the item.', 'emyui-core' ),
					],
                    [
						'mainti' => esc_html__( 'Do I need to relicense an item each time I use it?', 'emyui-core' ),
						'subti' => esc_html__( 'Yes you do. You need a license for each end project. This ensures contributors are paid for your usage of each asset & you and your clients have the legal right to use the item.', 'emyui-core' ),
					],
				],
			]
		);

      
      
                $this->end_controls_section();
        }


  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>


    <!-- START FAQ section -->
    <div class="faq-section pt-13 pt-lg-25 pb-15 pb-md-20 pb-lg-32 white-mode-texts with-planet-bg overflow-hidden position-relative border-top">
                <!-- START footer top wave -->
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
                <!-- END footer top wave -->

                <!-- container -->

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-9">
                            <div class="px-md-12 text-center mb-9 mb-lg-13">
                                <h2 class="title coodiv-text-4 mb-8"><?php echo esc_html($settings['mainhead']); ?></h2>
                                <p class="coodiv-text-8 mb-0"><?php echo esc_html($settings['subhead']); ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- ./section-title Ends-->
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-9">
                            <div class="accordion" id="accordionExample">
                                <?php
                            if ( $settings['listtifaq'] ) {
                              $lnum = 1;
			                    foreach (  $settings['listtifaq'] as $item ) { ?>
                                    <div class="rounded-20 shadow-custom mb-3 bg-white overflow-hidden">
                                    <div class="mb-0 py-8 pl-9 pr-7 border-bottom-0 bg-white" id="heading4-1">
                                        <button
                                            class="btn-reset coodiv-text-9 font-weight-bold text-left text-blackish-blue p-0 accordion-trigger arrow-icon w-100"
                                            type="button"
                                            data-toggle="collapse"
                                            data-target="#collapse4-<?php echo esc_html($lnum); ?>"
                                            aria-expanded="false"
                                            aria-controls="collapse4-<?php echo esc_html($lnum); ?>"
                                        >
                                           <?php echo esc_html($item['mainti']); ?>
                                        </button>
                                    </div>
                                    <div id="collapse4-<?php echo esc_html($lnum); ?>" class="collapse" aria-labelledby="heading4-<?php echo esc_html($lnum); ?>" data-parent="#accordionExample">
                                        <div class="card-body coodiv-color-blackish-blue-opacity-7 pt-0 pl-9 pr-15 coodiv-text-10 pb-9">
                                        <?php echo esc_html($item['subti']); ?>
                                        </div>
                                    </div>
                                </div>
			        <?php   $lnum =  $lnum + 1 ;  }
		
           
		} ?>
                                
                          
                            </div>
                        </div>

                     
                    </div>
                </div>

                <!-- END container -->
            </div>
            <!-- END FAQ section -->





    <?php
  }


}
