<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Hero_two extends Widget_Base{

  public function get_name(){
    return 'herotwo';
  }

  public function get_title(){
    return esc_html__( 'Hero Two', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){

    $this->start_controls_section(
      'section_content',
      [
        'label' => esc_html__( 'Headings', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
	$this->add_control(
		'earth',
		[
			'label' => esc_html__( 'Includ earth', 'plugin-name' ),
			'type' => \Elementor\Controls_Manager::SWITCHER,
			'label_on' => esc_html__( 'Show', 'your-plugin' ),
			'label_off' => esc_html__( 'Hide', 'your-plugin' ),
			'return_value' => 'yes',
			'default' => 'yes',
		]
	);
	$this->add_control(
		'bg_style_frwo',
		[
			'label' => esc_html__( 'Background Style', 'plugin-name' ),
			'type' => \Elementor\Controls_Manager::SELECT,
			'default' => 'type1',
			'options' => [
				'type1'  => esc_html__( 'Default', 'plugin-name' ),
				'type2' => esc_html__( 'Custom Background', 'plugin-name' ),
				
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
			'bg_style_frwo' => 'type2'
			],
			'selector' => '{{WRAPPER}} .hero-area-coodiv.position-relative',
		]
	);

    $this->add_control(
			'tp',
			[
				'label' => esc_html__( 'Top Heading', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'EMYUI TEMPLATE', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'fp1',
			[
				'label' => esc_html__( 'First Title Part', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'for your web hosting company', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'fp2',
			[
				'label' => esc_html__( 'Second Title Part', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'for your domains business', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'fp3',
			[
				'label' => esc_html__( 'Third Title Part', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'for your resellers hosting company', 'emyui-core' ),
		
			]
		);
    $this->add_control(
			'fp4',
			[
				'label' => esc_html__( 'Four Title Part', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'and more ...', 'emyui-core' ),
		
			]
		);


    $this->end_controls_section();
    
    $this->start_controls_section(
      'section_content1',
      [
        'label' => esc_html__( 'Domains', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
	$this->add_control(
		'd9915',
		[
			'label' => esc_html__( 'Form Placeholder', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( 'eg.example', 'emyui-core' ),
		
		]
	);
	$this->add_control(
		'd9926',
		[
			'label' => esc_html__( 'Form Submit Button Text', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( 'Search', 'emyui-core' ),
		
		]
	);
	$this->add_control(
		'd154',
		[
			'label' => esc_html__( 'WHMCS Link', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( '#', 'emyui-core' ),
			'description' => esc_html__( 'Put your main whmcs homepage link without http:// or https:// and also without / at the end', 'emyui-core' ),
		
		]
	);
    $this->add_control(
			'd1',
			[
				'label' => esc_html__( 'First Domain', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '$6.99', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'sale1',
			[
				'label' => esc_html__( 'Is it Offer?', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

    $this->add_control(
			'imd1',
			[
				'label' => esc_html__( 'First Domain Image', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				
			
			]
		);

    $this->add_control(
			'd2',
			[
				'label' => esc_html__( 'Second Domain', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '$6.99', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'sale2',
			[
				'label' => esc_html__( 'Is it Offer?', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
    $this->add_control(
			'imd2',
			[
				'label' => esc_html__( 'Second Domain Image', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			
			]
		);

    $this->add_control(
			'd3',
			[
				'label' => esc_html__( 'Third Domain', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '$6.99', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'sale3',
			[
				'label' => esc_html__( 'Is it Offer?', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
    $this->add_control(
			'imd3',
			[
				'label' => esc_html__( 'Third Domain Image', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			
			]
		);

    $this->add_control(
			'd4',
			[
				'label' => esc_html__( 'Fourth Domain', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '$6.99', 'emyui-core' ),
		
			]
		);
    $this->add_control(
			'sale4',
			[
				'label' => esc_html__( 'Is it Offer?', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
    $this->add_control(
			'imd4',
			[
				'label' => esc_html__( 'Fourth Domain Image', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			
			]
		);


    $this->add_control(
			'd5',
			[
				'label' => esc_html__( 'Fifth Domain', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '$6.99', 'emyui-core' ),
		
			]
		);
    $this->add_control(
			'sale5',
			[
				'label' => esc_html__( 'Is it Offer?', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
    $this->add_control(
			'imd5',
			[
				'label' => esc_html__( 'Fifth Domain Image', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			
			]
		);



    $this->end_controls_section();
  }
  

  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>



            <!-- START HERO AREA -->
            <div class="<?php if($settings['bg_style_frwo'] ==='type2'): ?>myunset<?php endif; ?> hero-area-coodiv position-relative" style="background-size: 84% 60% !important;">
			<?php if($settings['bg_style_frwo']==='type1'){ ?>
			    <!-- START hero area animations -->
                <div class="header-hero-backgrounds">
                    <div id="particles-bg"></div>
					<?php if($settings['earth']==='yes'){ ?>
                    <span class="header-erath"></span>
					<?php } ?>
                    <span class="montains-02"></span>
                    <span class="montains-01"></span>
                    <div class="t-first"><img class="layer layer2" data-depth="-0.20" src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/header/planet.png" alt="" /></div>
                    <div class="t-second"><img class="layer layer2" data-depth="-0.20" src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/header/sat.png" alt="" /></div>
                </div>
                <div class="shape-1 coodiv-abs-tr" data-aos="fade-down-left" data-aos-duration="500" data-aos-once="true"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/header/helf-circle-01.png" alt="" /></div>
                <div class="shape-2 coodiv-abs-tr" data-aos="fade-down-left" data-aos-duration="800" data-aos-delay="300" data-aos-once="true"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/header/helf-circle-02.png" alt="" /></div>
                <div class="shape-3 coodiv-abs-tr" data-aos="fade-down-left" data-aos-duration="1100" data-aos-delay="600" data-aos-once="true"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/header/helf-circle-03.png" alt="" /></div>
                <!-- END hero area animations -->
				<?php } ?>
				 
                <div class="container"> <!-- END HERO MAIN CONTENTS -->
                    <div class="row justify-content-center"> <!-- row -->
                        <div class="col-md-9 col-lg-7 col-xl-9"> <!-- column -->
						    <!-- START MAIN CONTENTS -->

                            <h1 class=" position-relative mb-5 left-400 font_family_TKT font-4"><?php echo  $settings['fp2']?></h1>
                            <h4 class="coodiv-text-12 text-uppercase mb-3 coodiv-color-white-opacity-7 position-relative font_family_TKT left-400"><?php echo  $settings['tp']; ?></h4>
                            <p data-i18n="[html]genaral.homapgesubtitle" class="coodiv-text-9 px-7 mb-0 coodiv-color-white-opacity-7 mb-10"></p>
                            <div class="hero-content dark-mode-texts mt-34 mb-lg-30 text-center text-md-center">


                                <form class="domain-header-search-form d-flex flex-wrap bg-white" action="https://<?php echo $settings['d154']; ?>/cart.php?a=add&domain=register" method="post">
                                    <div class="single-input w-100 w-sm-50 w-lg-35 py-4 col-md-8 pr-lg-0">
                                        <input type="text" class="inputdomainsearch" placeholder="<?php echo  $settings['d9915']; ?>" autocapitalize="none" name="query" size="20" />
                                    </div>
                                    <div class="single-input w-100 w-lg-30 d-flex align-items-center justify-content-center border-0 pb-4 pt-lg-4 pt-0 pl-lg-0 col-md-4">
                                        <input value="<?php echo  $settings['d9926']; ?>" type="submit" class="btn btn-primary search-btn rounded-right-10-0 full-border-radius-10-sm"/>
                                    </div>
                                </form>
								<i class="feather fe-icon"></i>




                                <div class="row domain-box-sale-header" data-aos="fade-down" data-aos-duration="1100" data-aos-delay="200" data-aos-once="true">
                                    <div class="col">
                                        <img src="<?php echo esc_url($settings['imd1']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $settings['imd1'] )); ?>" />
                                        <h5><?php if ( 'yes' === $settings['sale1'] ) { ?><span><?php echo _e('sale','emyui-core'); ?></span> <?php } ?><?php echo esc_html($settings['d1']); ?></h5>
                                    </div>

                                    <div class="col">
                                        <img src="<?php echo $settings['imd2']['url']; ?>" alt="<?php echo \Elementor\Control_Media::get_image_alt( $settings['imd2'] ); ?>" />
                                        <h5><?php if ( 'yes' === $settings['sale2'] ) { ?><span><?php echo _e('sale','emyui-core'); ?></span> <?php } ?><?php echo  $settings['d2']; ?></h5>
                                    </div>

                                    <div class="col">
                                        <img src="<?php echo $settings['imd3']['url']; ?>" alt="<?php echo \Elementor\Control_Media::get_image_alt( $settings['imd3'] ); ?>" />
                                        <h5><?php if ( 'yes' === $settings['sale3'] ) { ?><span><?php echo _e('sale','emyui-core'); ?></span> <?php } ?><?php echo  $settings['d3']; ?></h5>
                                    </div>

                                    <div class="col">
                                        <img src="<?php echo $settings['imd4']['url']; ?>" alt="<?php echo \Elementor\Control_Media::get_image_alt( $settings['imd4'] ); ?>" />
                                        <h5><?php if ( 'yes' === $settings['sale4'] ) { ?><span><?php echo _e('sale','emyui-core'); ?></span> <?php } ?><?php echo  $settings['d4']; ?></h5>
                                    </div>

                                    <div class="col">
                                        <img src="<?php echo $settings['imd5']['url']; ?>" alt="<?php echo \Elementor\Control_Media::get_image_alt( $settings['imd5'] ); ?>" />
                                        <h5><?php if ( 'yes' === $settings['sale5'] ) { ?><span><?php echo _e('sale','emyui-core'); ?></span> <?php } ?><?php echo  $settings['d5']; ?></h5>
                                    </div>
                                </div>
                            </div><!-- END MAIN CONTENTS -->
                        </div> <!-- END column -->
                    </div> <!-- END row -->
                </div> <!-- END hero MAIN CONTENTS -->

           
                <?php if($settings['bg_style_frwo']==='type1'){ ?>
                <div class="wave-shape-bottom"> <!-- START hero area buttom SVG waves -->
                    <svg class="w-100 light-shape default-shape" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                        <path
                            fill="#fff"
                            fill-opacity="1"
                            d="M0,32L60,80C120,128,240,224,360,229.3C480,235,600,149,720,138.7C840,128,960,192,1080,197.3C1200,203,1320,149,1380,122.7L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
                        ></path>
                    </svg>
                </div> <!-- END hero area buttom SVG waves -->
				<?php } ?>					
            </div> <!-- END HERO AREA -->
        
<script>
	

	  
if(jQuery("#typed").length > 0) {
	var typed = new Typed('#typed', {
		strings: ['<?php echo  $settings['fp1']; ?>', '<?php echo  $settings['fp2']; ?>', '<?php echo  $settings['fp3']; ?>', '<?php echo  $settings['fp4']; ?>'],
		typeSpeed: 120,
		backSpeed: 50,
		smartBackspace: true,
		loop: true
	});
}

</script>


    <?php
  }


}






