<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Hero_three extends Widget_Base{

  public function get_name(){
    return 'herothree';
  }

  public function get_title(){
    return esc_html__( 'Hero Three', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){

    $this->start_controls_section(
      'section_content52',
      [
        'label' => esc_html__( 'General', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
    $this->add_control(
			'bg_style_three',
			[
				'label' => esc_html__( 'Background Style', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'type1',
				'options' => [
					'type1'  => esc_html__( 'Default', 'plugin-name' ),
					'type2' => esc_html__( 'Default with Custom Color', 'plugin-name' ),
					'type3' => esc_html__( 'Custom Image', 'plugin-name' ),
					
				],
			]
		);
    $this->add_control(
			'col_color',
			[
				'label' => esc_html__( 'Color', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::COLOR,
        'condition' => [
          'bg_style_three' => 'type2'
         ],
			
			]
		);
    $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'background3',
				'label' => esc_html__( 'Background', 'plugin-name' ),
				'types' => [ 'classic', 'gradient', 'video' ],
        'condition' => [
          'bg_style_three' => 'type3'
         ],
				'selector' => '{{WRAPPER}} .bg-blackish-blue.bg-pattern.pattern-8.overflow-hidden.dark-mode-texts.py-19.py-lg-29.mt-26.rounded-20.mx-md-6',
			]
		);
    $this->add_control(
        'h4g1',
        [
          'label' => esc_html__( 'Upper Title', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::TEXT,
          'default' => esc_html__( 'BRING YOUR IDEAS TO LIFE', 'emyui-core' ),
        ]
      );
    $this->add_control(
        'h4g2',
        [
          'label' => esc_html__( 'Main Title', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::TEXT,
          'default' => esc_html__( 'It all starts with a great domain.', 'emyui-core' ),
        ]
      );
      $this->add_control(
        'd981',
        [
          'label' => esc_html__( 'Form Placeholder', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::TEXT,
          'default' => esc_html__( 'eg.example', 'emyui-core' ),
        
        ]
      );
      $this->add_control(
        'd982',
        [
          'label' => esc_html__( 'Form Submit Button Text', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::TEXT,
          'default' => esc_html__( 'Search', 'emyui-core' ),
        
        ]
      );
      $this->add_control(
        'h4g258',
        [
          'label' => esc_html__( 'WHMCS Link', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::TEXT,
          'default' => esc_html__( '#', 'emyui-core' ),
		  'description' => esc_html__( 'Put your main whmcs homepage link without http:// or https:// and also without / at the end', 'emyui-core' ),
        ]
      );



    $this->end_controls_section();


    $this->start_controls_section(
        'slidd154',
        [
          'label' => esc_html__( 'Domains', 'emyui-core' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
      $repeater = new \Elementor\Repeater();

      $repeater->add_control(
        'h4g33',
        [
            'label' => esc_html__( 'Choose Image', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
            'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
        ]
    );
    $repeater->add_control(
        'h4g335',
        [
            'label' => esc_html__( 'Badge Color', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::SELECT,
            'default' => 'badge-primary',
            'options' => [
                'badge-warning'  => esc_html__( 'warning', 'emyui-core' ),
                'badge-primary' => esc_html__( 'primary', 'emyui-core' ),
                'badge-success' => esc_html__( 'success', 'emyui-core' ),
                'badge-danger' => esc_html__( 'danger', 'emyui-core' ),
                
            ],
        ]
    );
      $repeater->add_control(
        'h4g3',
        [
          'label' => esc_html__( 'Title', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::TEXT,
          'default' => esc_html__( 'Sale', 'emyui-core' ),
        ]
      );
      $repeater->add_control(
        'h4g4',
        [
          'label' => esc_html__( 'Sub Title', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::TEXT,
          'default' => esc_html__( 'is simply dummy text of the printing.', 'emyui-core' ),
        ]
      );
      $repeater->add_control(
        'h4g5',
        [
          'label' => esc_html__( 'Price', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::TEXT,
          'default' => esc_html__( '$11.40', 'emyui-core' ),
        ]
      );
        $this->add_control(
        'h4g6',
        [
          'label' => esc_html__( 'Boxes', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::REPEATER,
          'fields' => $repeater->get_controls(),
  
        ]
      );


      $this->end_controls_section();

  }
  

  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>


         <!-- START HERO AREA -->
         <div class="bg-blackish-blue bg-pattern pattern-8 overflow-hidden dark-mode-texts py-19 py-lg-29 mt-26 rounded-20 mx-md-6">
                <div class="container">
                    <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="1200" data-aos-once="true">
                        <div class="col-md-9 col-lg-7 col-xl-6">
                            <div class="text-center">
                                <p class="coodiv-text-12 coodiv-text-color font-weight-bold text-uppercase mb-4"><?php echo esc_html($settings['h4g1']); ?></p>
                                <h1 class="coodiv-text-3 mb-8"><?php echo esc_html($settings['h4g2']); ?></h1>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <form class="domain-search-form mt-8" action="https://<?php echo esc_html($settings['h4g258']); ?>/cart.php?a=add&domain=register" method="post">
                                <div class="domain-search position-relative">
                                    <input class="domain-search-input-header homapage-domain-search pl-6" type="text" name="query" data-role="input-typewrite" required="" aria-label="Register a Domain Name" placeholder="<?php echo esc_html($settings['d981']); ?>" />
                                    <input value="<?php echo esc_html($settings['d982']); ?>" type="submit" class="btn btn-warning domain-search-button-header position-absolute" role="button" aria-label="Search Domain Name"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="single-slide-boxes suggested-domains feature-section pb-2 pb-lg-15 mt-n5 position-relative coodiv-z-index-2">
                <div class="container">
                    <div class="single-slide-boxes-slider">
                    <?php 
                  if ( $settings['h4g6'] ) {
                  foreach (  $settings['h4g6'] as $item ) { ?>
                        <div class="single-slide">
                            <a href="#" class="domains-box white-bg shadow-2 rounded-10 pl-6 py-7 d-block text-left color-blackish-blue position-relative">
                                <img src="<?php echo esc_url($item['h4g33']['url']); ?>" alt="" />
                                <p class="coodiv-text-12 mb-0 mt-3"><?php echo esc_html($item['h4g4']); ?></p>
                                <span class="sold-side-domain <?php echo esc_html($item['h4g335']); ?> coodiv-text-9 fw-bold"><?php echo esc_html($item['h4g3']); ?> <i><?php echo esc_html($item['h4g5']); ?></i></span>
                            </a>
                        </div>
        
                        <?php }
                } ?>
                    </div>
                </div>
            </div>
            
            <!-- END HERO AREA -->
            
              <style>
                <?php if($settings['bg_style_three']==='type2'){ ?>
               .bg-blackish-blue.bg-pattern.pattern-8.overflow-hidden.dark-mode-texts.py-19.py-lg-29.mt-26.rounded-20.mx-md-6 {
                background: <?php echo $settings['col_color']; ?> !important;
              }  
              <?php } ?>
              <?php if($settings['bg_style_three']==='type3'){ ?>
              .bg-pattern.pattern-8:before {
              opacity: 0 !important;
              }
              <?php } ?>
            </style>
           
          
           


<script>


//----------------------------------------------------/
// single slide boxes slider
//----------------------------------------------------/	
	if(jQuery(".single-slide-boxes-slider").length > 0) {
		$('.single-slide-boxes-slider').slick({
			dots: false,
			infinite: true,
			speed: 500,
			slidesToShow: 4,
			slidesToScroll: 1,
			arrows: true,
			appendArrows: '.single-slide-boxes-arrows',
			responsive: [{
				breakpoint: 1200,
				settings: {
					slidesToShow: 3,
				}
			}, {
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
				}
			}, {
				breakpoint: 480,
				settings: {
					slidesToShow: 1
				}
			}]
		});
	}

</script>


    <?php
  }


}
