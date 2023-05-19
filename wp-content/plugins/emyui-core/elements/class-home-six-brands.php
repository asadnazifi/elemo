<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Brands extends Widget_Base{

  public function get_name(){
    return 'brands';
  }

  public function get_title(){
    return esc_html__( 'Brands', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){

    $this->start_controls_section(
      'section_content_brands',
      [
        'label' => esc_html__( 'Headings', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
	$this->add_control(
        'showtitlebrands',
        [
            'label' => esc_html__( 'Show Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::SWITCHER,
            'label_on' => esc_html__( 'Show', 'your-plugin' ),
            'label_off' => esc_html__( 'Hide', 'your-plugin' ),
            'return_value' => 'yes',
            'default' => 'yes',
        ]
    );
  $this->add_control(
			'titlebrands',
			[
				'label' => esc_html__( 'Heading', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Weve helped amazing companies to grow up faster!', 'emyui-core' ),
			
			]
		);  
		$this->add_control(
			'descbrands',
			[
				'label' => esc_html__( 'Description', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Optimizer automatically minifies, compresses and optimizes your static files on the fly and provides a powerful image processing API to resize, crop and manipulate images in real-time.', 'emyui-core' ),
			   
			]
		);
    $this->end_controls_section();
    
	$this->start_controls_section(
		'sectionthree_brands',
		[
		  'label' => esc_html__( 'Brands', 'emyui-core' ),
				  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		]
	  );
	  $repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'brandbrands',
			[
				'label' => esc_html__( 'Brand Logo', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			
			]
		);
	  $this->add_control(
		'repeaterbrandsbrands',
		[
			'label' => esc_html__( 'Brands', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::REPEATER,
			'fields' => $repeater->get_controls(),
		]
		);	

	  $this->end_controls_section();

  }
  

  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>
            <div class="why-section-companies pt-11 pb-9 pt-lg-24 pb-lg-24 bg-default-6">
                <div class="container">
                    <div class="row justify-content-center align-items-center">
					<?php   if ( 'yes' === $settings['showtitlebrands'] ) { ?>
                        <div class="col-md-10-col-lg-9 col-xl-8">
                            <div class="section-title text-center mb-7 mb-lg-11">
                                <h2 class="title coodiv-text-4 mb-9"><?php echo  esc_html($settings['titlebrands']); ?></h2>
                                <p class="coodiv-text-8 px-lg-8 mb-0">
								<?php echo  esc_html($settings['descbrands']); ?></p>
                                <p></p>
                            </div>
                        </div>
						<?php } ?>
                        <div class="col-12 col-md-11 col-lg-10 col-xl-9">
                            <div class="brand-logos d-flex justify-content-center align-items-center mx-n9 flex-wrap">
							<?php if ( $settings['repeaterbrandsbrands'] ) {
    							  foreach (  $settings['repeaterbrandsbrands'] as $item ) { ?>  
                                <div class="single-brand mx-9 py-7 coodiv-opacity-8 aos-init aos-animate" data-aos="zoom-in-right" data-aos-duration="500" data-aos-once="true">
                                    <img src="<?php echo esc_url($item['brandbrands']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $item['brandbrands'] )); ?>" />
								</div>
								<?php }
									 	}	?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php
  }


}
