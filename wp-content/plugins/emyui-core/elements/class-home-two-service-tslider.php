<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Tslider extends Widget_Base{

  public function get_name(){
    return 'tslider';
  }

  public function get_title(){
    return esc_html__( 'TSlider', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
      'comp',
      [
        'label' => esc_html__( 'components', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
    $this->add_control(
        'fiti',
        [
            'label' => esc_html__( 'Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'big companies, we chose to works with it', 'emyui-core' ),
           
        ]
    );
    $this->add_control(
      'fidescription',
      [
          'label' => esc_html__( 'Description', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::TEXT,
          'default' => esc_html__( 'Based on 64,627 Authentic User Reviews by paying customerson 4,250 Different Hosting Services.', 'emyui-core' ),
         
      ]
  );

  $repeater = new \Elementor\Repeater();

  $repeater->add_control(
      'mainti1', [
          'label' => esc_html__( 'Title', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::TEXT,
          'default' => esc_html__( 'Do I need to relicense an item each time I use it?' , 'emyui-core' ),
      ]
  );
  $repeater->add_control(
      'subti1', [
          'label' => esc_html__( 'Sub Title', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::TEXT,
          'default' => esc_html__( 'Yes you do. You need a license for each end project. This ensures contributors are paid for your usage of each asset & you and your clients have the legal right to use the item.' , 'emyui-core' ),
      ]
  );
  $repeater->add_control(
    'desreap', [
        'label' => esc_html__( 'Description', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( 'Yes you do. You need a license for each end project. This ensures contributors are paid for your usage of each asset & you and your clients have the legal right to use the item.' , 'emyui-core' ),
    ]
);
$repeater->add_control(
    'imd33',
    [
        'label' => esc_html__( 'Image', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::MEDIA,
    
    ]
);
  $this->add_control(
      'boxes12',
      [
          'label' => esc_html__( 'Boxes', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::REPEATER,
          'fields' => $repeater->get_controls(),
          'default' => [
              [
                  'mainti1' => esc_html__( 'WordPress', 'emyui-core' ),
                  'subti1' => esc_html__( 'Life-time', 'emyui-core' ),
                  'desreap' => esc_html__( 'Better Pricing, Fast SSD Storage and Real 24/7 Technical Support with wordpress you can use anything', 'emyui-core' ),
              ],
            ],
           
            ]
  );



          $this->end_controls_section();
        }


  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>

    		     <!-- START companies boxes -->
                 <div class="single-slide-boxes pt-13 pt-lg-10 pb-2 pb-lg-22 border-bottom">
                <div class="container"><!-- START container -->
                    <div class="row justify-content-center align-items-center pb-9 pb-sm-0">
                        <div class="col-sm-8 col-md-6 col-lg-8 col-xl-8">
                            <div class="section-title mb-9 mb-sm-13 mb-lg-21 text-center">
                                <h2 class="title coodiv-text-4 mb-6"><?php echo esc_html($settings['fiti']); ?></h2>
                                <p class="coodiv-text-8">
                                <?php echo esc_html($settings['fidescription']); ?>
                                </p>
                                <div class="single-slide-boxes-arrows mx-auto"></div><!-- slider arrows -->
                            </div>
                        </div>
                    </div>

                    <!-- START SLIDER complany box -->
					<div class="single-slide-boxes-slider" data-aos="fade-up" data-aos-duration="1200" data-aos-once="true">
					
                    <?php
                            if ( $settings['boxes12'] ) {
			
			                    foreach (  $settings['boxes12'] as $item ) { ?>
                        <!-- START single complany box -->
						<div class="single-slide">
                            <a href="#" class="companies-box d-flex flex-column">
                                <div class="d-flex mb-lg-7">
                                    <div class="company-logo">
                                        <img src="<?php echo esc_url($item['imd33']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $settings['imd33'] )); ?>" />
                                    </div>
                                    <div class="text-title">
                                        <h3><?php echo esc_html($item['mainti1']); ?> <span><?php echo esc_html($item['subti1']); ?></span></h3>
                                    </div>
                                </div>
                                <div class="mb-auto">
                                    <p class="coodiv-text-11 coodiv-color-blackish-blue-opacity-7 mb-0"> <?php echo esc_html($item['desreap']); ?></p>
                                </div>
                            </a>
                        </div>
						<!-- END single complany box -->
                        <?php    }
		
           
    } ?>

						
                    </div> <!-- END SLIDER complany box -->
                </div> <!-- END container -->
            </div> <!-- END companies boxes -->

<?php if( \Elementor\Plugin::$instance->editor->is_edit_mode() ) { ?>

  

              <script>
        
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




<?php } ?>






    <?php
  }


}
