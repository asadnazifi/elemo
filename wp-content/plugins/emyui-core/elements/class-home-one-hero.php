<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Hero_one extends Widget_Base{

  public function get_name(){
    return 'heroone';
  }

  public function get_title(){
    return esc_html__( 'Hero One', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){

    $this->start_controls_section(
      'contentheroone',
      [
        'label' => esc_html__( 'Headings', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
    $this->add_control(
			'tpheroone',
			[
				'label' => esc_html__( 'Top Heading', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'WITH EMYUI', 'emyui-core' ),
			
			]
		);
		$this->add_control(
			'mtpheroone',
			[
				'label' => esc_html__( 'Main Heading', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Choose flexible pricing plan for you', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'fp1heroone',
			[
				'label' => esc_html__( 'First Title Part', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'for your web hosting company', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'fp2heroone',
			[
				'label' => esc_html__( 'Second Title Part', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'for your domains business', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'fp3heroone',
			[
				'label' => esc_html__( 'Third Title Part', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'for your resellers hosting company', 'emyui-core' ),
		
			]
		);
    $this->add_control(
			'fp4heroone',
			[
				'label' => esc_html__( 'Four Title Part', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'and more ...', 'emyui-core' ),
		
			]
		);

		$this->add_control(
			'descheroone',
			[
				'label' => esc_html__( 'Fifth feature Description', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Unlimited boards and workflows. no credit card needed', 'emyui-core' ),
			
			]
		);
		$this->add_control(
			'bg_style_t',
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
			'colt_color',
			[
				'label' => esc_html__( 'Color', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::COLOR,
        'condition' => [
          'bg_style_t' => 'type2'
         ],
		 'selector' => '{{WRAPPER}} .myunset.hero-area-coodiv ,{{WRAPPER}} .minset.header-hero-pricing-plans, .main-text-after-montagne',
			
			]
		);
    $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'background3',
				'label' => esc_html__( 'Background', 'plugin-name' ),
				'types' => [ 'classic', 'gradient', 'video' ],
        'condition' => [
          'bg_style_t' => 'type3'
         ],
				'selector' => '{{WRAPPER}} .myunset.hero-area-coodiv ,{{WRAPPER}} .minset.header-hero-pricing-plans, .main-text-after-montagne',
			]
		);


    $this->end_controls_section();
	$this->start_controls_section(
		'1stboxheroone',
		[
		  'label' => esc_html__( 'First Box', 'emyui-core' ),
				  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		]
	  );
	  $this->add_control(
		'titlebox1heroone',
		[
			'label' => esc_html__( 'First Box Title', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( 'Free', 'emyui-core' ),
	
		]
	);
	$this->add_control(
		'subtitlebox1heroone',
		[
			'label' => esc_html__( 'First Box Subtitle', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( 'For getting started', 'emyui-core' ),
	
		]
	);
	$this->add_control(
		'showbadge1heroone',
		[
			'label' => esc_html__( 'Show Badge', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::SWITCHER,
			'return_value' => 'yes',
			'default' => 'yes',
		]
	);
	$this->add_control(
		'badgebox1heroone',
		[
			'label' => esc_html__( 'Badge', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( 'HOT OPTION', 'emyui-core' ),
	
		]
	);
	$this->add_control(
		'descbox1heroone',
		[
			'label' => esc_html__( 'First Box Description', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXTAREA,
			'default' => esc_html__( 'Unlimited boards and workflows. no credit card needed', 'emyui-core' ),
		
		]
	);
	$this->add_control(
		'showbadge2heroone',
		[
			'label' => esc_html__( 'Show Second Badge', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::SWITCHER,
			'return_value' => 'yes',
			'default' => 'yes',
		]
	);
	$this->add_control(
		'2ndbadgebox1heroone',
		[
			'label' => esc_html__( 'Second Badge', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( 'priorty support', 'emyui-core' ),
	
		]
	);
	$this->add_control(
		'pricebox1heroone',
		[
			'label' => esc_html__( 'First Box Subtitle', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( '$0', 'emyui-core' ),
	
		]
	);
	$this->add_control(
		'periodbox1heroone',
		[
			'label' => esc_html__( 'Period', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( 'free for ever', 'emyui-core' ),
	
		]
	);
	$this->add_control(
		'showbutton1heroone',
		[
			'label' => esc_html__( 'Show First Button', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::SWITCHER,
			'return_value' => 'yes',
			'default' => 'yes',
		]
	);
	$this->add_control(
		'1stbuttonbox1heroone',
		[
			'label' => esc_html__( 'First Button', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( 'CONTACT US', 'emyui-core' ),
	
		]
	);
	$this->add_control(
		'1stbuttonlinkbox1heroone',
		[
			'label' => esc_html__( 'First Button Link', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( '#', 'emyui-core' ),
	
		]
	);
	$this->add_control(
		'showbutton2heroone',
		[
			'label' => esc_html__( 'Show Second Button', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::SWITCHER,
			'return_value' => 'yes',
			'default' => 'yes',
		]
	);
	$this->add_control(
		'2ndbuttonbox1heroone',
		[
			'label' => esc_html__( 'Second Button', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( 'START FREE TRIAL', 'emyui-core' ),
	
		]
	);
	$this->add_control(
		'2ndtbuttonlinkbox1heroone',
		[
			'label' => esc_html__( 'Second Button Link', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( '#', 'emyui-core' ),
	
		]
	);
    $this->end_controls_section();
    $this->start_controls_section(
		'2ndboxheroone',
		[
		  'label' => esc_html__( 'Second Box', 'emyui-core' ),
				  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		]
	  );
	  $this->add_control(
		'titlebox2heroone',
		[
			'label' => esc_html__( 'First Box Title', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( 'Free', 'emyui-core' ),
	
		]
	);
	$this->add_control(
		'subtitlebox2heroone',
		[
			'label' => esc_html__( 'First Box Subtitle', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( 'For getting started', 'emyui-core' ),
	
		]
	);
	$this->add_control(
		'show2badge1heroone',
		[
			'label' => esc_html__( 'Show Badge', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::SWITCHER,
			'return_value' => 'yes',
			'default' => 'yes',
		]
	);
	$this->add_control(
		'badge2box2heroone',
		[
			'label' => esc_html__( 'Badge', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( 'HOT OPTION', 'emyui-core' ),
	
		]
	);
	$this->add_control(
		'descbox2heroone',
		[
			'label' => esc_html__( 'First Box Description', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXTAREA,
			'default' => esc_html__( 'Unlimited boards and workflows. no credit card needed', 'emyui-core' ),
		
		]
	);
	$this->add_control(
		'show2badge2heroone',
		[
			'label' => esc_html__( 'Show Second Badge', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::SWITCHER,
			'return_value' => 'yes',
			'default' => 'yes',
		]
	);
	$this->add_control(
		'2ndbadge2box2heroone',
		[
			'label' => esc_html__( 'Second Badge', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( 'priorty support', 'emyui-core' ),
	
		]
	);
	$this->add_control(
		'pricebox2heroone',
		[
			'label' => esc_html__( 'First Box Subtitle', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( '$0', 'emyui-core' ),
	
		]
	);
	$this->add_control(
		'periodbox2heroone',
		[
			'label' => esc_html__( 'Period', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( 'free for ever', 'emyui-core' ),
	
		]
	);
	$this->add_control(
		'show2button1heroone',
		[
			'label' => esc_html__( 'Show First Button', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::SWITCHER,
			'return_value' => 'yes',
			'default' => 'yes',
		]
	);
	$this->add_control(
		'1stbuttonbox2heroone',
		[
			'label' => esc_html__( 'First Button', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( 'CONTACT US', 'emyui-core' ),
	
		]
	);
	$this->add_control(
		'1stbuttonlinkbox2heroone',
		[
			'label' => esc_html__( 'First Button Link', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( '#', 'emyui-core' ),
	
		]
	);
	$this->add_control(
		'show2button2heroone',
		[
			'label' => esc_html__( 'Show Second Button', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::SWITCHER,
			'return_value' => 'yes',
			'default' => 'yes',
		]
	);
	$this->add_control(
		'2ndbuttonbox2heroone',
		[
			'label' => esc_html__( 'Second Button', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( 'START FREE TRIAL', 'emyui-core' ),
	
		]
	);
	$this->add_control(
		'2ndtbuttonlinkbox2heroone',
		[
			'label' => esc_html__( 'Second Button Link', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( '#', 'emyui-core' ),
	
		]
	);
    $this->end_controls_section();
	$this->start_controls_section(
		'3rdboxheroone',
		[
		  'label' => esc_html__( 'Third Box', 'emyui-core' ),
				  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		]
	  );
	  $this->add_control(
		'titlebox3heroone',
		[
			'label' => esc_html__( 'First Box Title', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( 'Free', 'emyui-core' ),
	
		]
	);
	$this->add_control(
		'subtitlebox3heroone',
		[
			'label' => esc_html__( 'First Box Subtitle', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( 'For getting started', 'emyui-core' ),
	
		]
	);
	$this->add_control(
		'show3badge1heroone',
		[
			'label' => esc_html__( 'Show Badge', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::SWITCHER,
			'return_value' => 'yes',
			'default' => 'yes',
		]
	);
	$this->add_control(
		'badge3box3heroone',
		[
			'label' => esc_html__( 'Badge', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( 'HOT OPTION', 'emyui-core' ),
	
		]
	);
	$this->add_control(
		'descbox3heroone',
		[
			'label' => esc_html__( 'First Box Description', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXTAREA,
			'default' => esc_html__( 'Unlimited boards and workflows. no credit card needed', 'emyui-core' ),
		
		]
	);
	$this->add_control(
		'show3badge2heroone',
		[
			'label' => esc_html__( 'Show Second Badge', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::SWITCHER,
			'return_value' => 'yes',
			'default' => 'yes',
		]
	);
	$this->add_control(
		'2ndbadge2box3heroone',
		[
			'label' => esc_html__( 'Second Badge', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( 'priorty support', 'emyui-core' ),
	
		]
	);
	$this->add_control(
		'pricebox3heroone',
		[
			'label' => esc_html__( 'First Box Subtitle', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( '$0', 'emyui-core' ),
	
		]
	);
	$this->add_control(
		'periodbox3heroone',
		[
			'label' => esc_html__( 'Period', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( 'free for ever', 'emyui-core' ),
	
		]
	);
	$this->add_control(
		'show3buttonheroone',
		[
			'label' => esc_html__( 'Show First Button', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::SWITCHER,
			'return_value' => 'yes',
			'default' => 'yes',
		]
	);
	$this->add_control(
		'1stbuttonbox3heroone',
		[
			'label' => esc_html__( 'First Button', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( 'CONTACT US', 'emyui-core' ),
	
		]
	);
	$this->add_control(
		'1stbuttonlinkbox3heroone',
		[
			'label' => esc_html__( 'First Button Link', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( '#', 'emyui-core' ),
	
		]
	);
	$this->add_control(
		'show3button2heroone',
		[
			'label' => esc_html__( 'Show Second Button', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::SWITCHER,
			'return_value' => 'yes',
			'default' => 'yes',
		]
	);
	$this->add_control(
		'2ndbuttonbox3heroone',
		[
			'label' => esc_html__( 'Second Button', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( 'START FREE TRIAL', 'emyui-core' ),
	
		]
	);
	$this->add_control(
		'2ndtbuttonlinkbox3heroone',
		[
			'label' => esc_html__( 'Second Button Link', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( '#', 'emyui-core' ),
	
		]
	);
    $this->end_controls_section();
  }
  

  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>

            <!-- START HERO AREA -->
            <div class="hero-area-coodiv <?php if($settings['bg_style_t']==='type1'): ?>sunset-version<?php endif; ?><?php if($settings['bg_style_t'] ==='type2' || $settings['bg_style_t'] ==='type3'): ?>myunset<?php endif; ?> position-relative">

				<?php if($settings['bg_style_t']==='type1'): ?>
                <!-- START hero area animations -->
                <div class="header-hero-backgrounds">
                    <div id="particles-bg"></div>
                    <span class="back-mountain-light"></span>
                    <span class="sunset-main-mountain"></span>
                    <span class="sunsetcloud"></span>
                    <span class="back-mountain-sun" data-aos="fade-down-left" data-aos-duration="500" data-aos-once="true"></span>
                    <span class="sunset-fog"></span>
                    <div class="sunset-version-base-img"><span></span></div>
                    <span class="sunset-main-trees-left"></span>
                    <span class="sunset-main-trees-right"></span>

                    <div class="t-first"><img class="layer layer2" data-depth="-0.20" src="<?php echo esc_url(get_template_directory_uri()); ?>/image/header/sunset-version/moon.png" alt="" /></div>
                    <div class="t-second"><img class="layer layer2" data-depth="-0.20" src="<?php echo esc_url(get_template_directory_uri()); ?>/image/header/sat.png" alt="" /></div>
                </div>
                <div class="shape-1 coodiv-abs-tr" data-aos="fade-up" data-aos-duration="500" data-aos-once="true"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/image/header/helf-circle-01.png" alt="" /></div>
                <div class="shape-2 coodiv-abs-tr" data-aos="fade-down-left" data-aos-duration="800" data-aos-delay="300" data-aos-once="true"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/image/header/helf-circle-02.png" alt="" /></div>
                <div class="shape-3 coodiv-abs-tr" data-aos="fade-down-left" data-aos-duration="1100" data-aos-delay="600" data-aos-once="true"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/image/header/helf-circle-03.png" alt="" /></div>
                <!-- END hero area animations -->
				<?php endif; ?>

                <div class="container position-relative coodiv-z-index-2">
                    <!-- END HERO MAIN CONTENTS -->
                    <div class="row justify-content-center">
                        <!-- row -->
                        <div class="col-md-9 col-lg-7 col-xl-9">
                            <!-- column -->
                            <!-- START MAIN CONTENTS -->
                            <div class="hero-content dark-mode-texts mb-15 mb-lg-10 text-center text-md-center">
                                <h4 class="coodiv-text-12 text-uppercase mb-3 coodiv-color-green-opacity-7"><?php echo  esc_html($settings['tpheroone']); ?></h4>
                                <h1 class="coodiv-text-3 text-white d-block mb-0"><?php echo  esc_html($settings['mtpheroone']); ?></h1>
                                <h1 class="coodiv-text-3 position-relative mb-5"><span id="typed" class="strike-bottom green d-inline-block"></span></h1>
                                <p class="coodiv-text-9 px-7 mb-0 coodiv-color-white-opacity-9 mb-10"><?php echo  esc_html($settings['descheroone']); ?></p>
                            </div>
                            <!-- END MAIN CONTENTS -->
                        </div>
                        <!-- END column -->
                    </div>
                    <!-- END row -->
                </div>
                <!-- END hero MAIN CONTENTS -->
            </div>
            <!-- END HERO AREA -->
            <div class="<?php if($settings['bg_style_t'] ==='type2' || $settings['bg_style_t'] ==='type3'): ?>minset <?php endif; ?>header-hero-pricing-plans position-relative coodiv-z-index-2">
                <div class="container">
                    <div class="row justify-content-center">
					<div class="col-md-12 col-lg-4">
                            <div class="pricing-plans-special border rounded-10 pt-10 pb-8 px-9 white-bg shadow-2 h-100">
                                <div class="pricing-plans-special-header d-flex justify-content-between align-items-center">
                                    <h5 class="coodiv-text-6 mb-0"><?php echo  esc_html($settings['titlebox1heroone']); ?></h5>
									<?php if ( 'yes' === $settings['showbadge1heroone'] ) { ?>
                                    <span class="badge badge-light coodiv-color-black-opacity-3"><i class="feather icon-zap coodiv-color-yellow-opacity-visible"></i> <?php echo  esc_html($settings['badgebox1heroone']); ?></span> <?php }?>
                                </div>
                                <p class="coodiv-text-10"><?php echo  esc_html($settings['subtitlebox1heroone']); ?></p>
                                <p class="coodiv-text-11 mt-8"><?php echo  esc_html($settings['descbox1heroone']); ?></p>
								<?php if ( 'yes' === $settings['showbadge2heroone'] ) { ?>
							<span class="badge badge-pill badge-warning"><?php echo  esc_html($settings['2ndbadgebox1heroone']); ?></span> <?php }?>

                                <div class="pricing d-flex align-items-center mt-10 mb-9">
                                    <span class="coodiv-text-3 font-weight-bold color-blackish-blue mr-4"><?php echo  esc_html($settings['pricebox1heroone']); ?></span>
                                    <span class="coodiv-text-12 line-height-20">
									<?php echo $settings['periodbox1heroone']; // phpcs:ignore ?>
                                    </span>
                                </div>
								<?php if ( 'yes' === $settings['showbutton1heroone'] ) { ?>
								<a href="<?php echo  esc_url($settings['1stbuttonlinkbox1heroone']); ?>"><button type="button" class="btn btn-dark d-block w-100 mb-2 coodiv-text-12"><?php echo  esc_html($settings['1stbuttonbox1heroone']); ?></button></a><?php }?>
								<?php if ( 'yes' === $settings['showbutton2heroone'] ) { ?>
                                <a href="<?php echo  esc_url($settings['2ndtbuttonlinkbox1heroone']); ?>"><button type="button" class="btn btn-outline-dark d-block w-100 coodiv-text-12"><?php echo  esc_html($settings['2ndbuttonbox1heroone']); ?></button></a><?php }?>
                            </div>
                        </div>   
                        <div class="col-md-12 col-lg-4">
                            <div class="pricing-plans-special border rounded-10 pt-10 pb-8 px-9 white-bg shadow-2 h-100">
                                <div class="pricing-plans-special-header d-flex justify-content-between align-items-center">
                                    <h5 class="coodiv-text-6 mb-0"><?php echo  esc_html($settings['titlebox2heroone']); ?></h5>
									<?php if ( 'yes' === $settings['show2badge1heroone'] ) { ?>
                                    <span class="badge badge-light coodiv-color-black-opacity-3"><i class="feather icon-zap coodiv-color-yellow-opacity-visible"></i> <?php echo  esc_html($settings['badge2box2heroone']); ?></span> <?php }?>
                                </div>
                                <p class="coodiv-text-10"><?php echo  esc_html($settings['subtitlebox2heroone']); ?></p>
                                <p class="coodiv-text-11 mt-8"><?php echo  esc_html($settings['descbox2heroone']); ?></p>
								<?php if ( 'yes' === $settings['show2badge2heroone'] ) { ?>
							<span class="badge badge-pill badge-warning"><?php echo  esc_html($settings['2ndbadge2box2heroone']); ?></span> <?php }?>

                                <div class="pricing d-flex align-items-center mt-10 mb-9">
                                    <span class="coodiv-text-3 font-weight-bold color-blackish-blue mr-4"><?php echo  esc_html($settings['pricebox2heroone']); ?></span>
                                    <span class="coodiv-text-12 line-height-20">
									<?php echo  $settings['periodbox2heroone']; // phpcs:ignore ?>
                                    </span>
                                </div>
								<?php if ( 'yes' === $settings['show2button1heroone'] ) { ?>
								<a href="<?php echo  esc_url($settings['1stbuttonlinkbox2heroone']); ?>"><button type="button" class="btn btn-dark d-block w-100 mb-2 coodiv-text-12"><?php echo  esc_html($settings['1stbuttonbox2heroone']); ?></button></a><?php }?>
								<?php if ( 'yes' === $settings['show2button2heroone'] ) { ?>
                                <a href="<?php echo  esc_url($settings['2ndtbuttonlinkbox2heroone']); ?>"><button type="button" class="btn btn-outline-dark d-block w-100 coodiv-text-12"><?php echo  esc_html($settings['2ndbuttonbox2heroone']); ?></button></a><?php }?>
                            </div>
                        </div>     
						<div class="col-md-12 col-lg-4">
                            <div class="pricing-plans-special border rounded-10 pt-10 pb-8 px-9 white-bg shadow-2 h-100">
                                <div class="pricing-plans-special-header d-flex justify-content-between align-items-center">
                                    <h5 class="coodiv-text-6 mb-0"><?php echo  esc_html($settings['titlebox3heroone']); ?></h5>
									<?php if ( 'yes' === $settings['show3badge1heroone'] ) { ?>
                                    <span class="badge badge-light coodiv-color-black-opacity-3"><i class="feather icon-zap coodiv-color-yellow-opacity-visible"></i> <?php echo  esc_html($settings['badge3box3heroone']); ?></span> <?php }?>
                                </div>
                                <p class="coodiv-text-10"><?php echo  esc_html($settings['subtitlebox3heroone']); ?></p>
                                <p class="coodiv-text-11 mt-8"><?php echo  esc_html($settings['descbox3heroone']); ?></p>
								<?php if ( 'yes' === $settings['show3badge2heroone'] ) { ?>
							<span class="badge badge-pill badge-warning"><?php echo  esc_html($settings['2ndbadge2box3heroone']); ?></span> <?php }?>

                                <div class="pricing d-flex align-items-center mt-10 mb-9">
                                    <span class="coodiv-text-3 font-weight-bold color-blackish-blue mr-4"><?php echo  esc_html($settings['pricebox3heroone']); ?></span>
                                    <span class="coodiv-text-12 line-height-20">
									<?php echo  $settings['periodbox3heroone']; // phpcs:ignore ?>
                                    </span>
                                </div>
								<?php if ( 'yes' === $settings['show3buttonheroone'] ) { ?>
								<a href="<?php echo  esc_url($settings['1stbuttonlinkbox3heroone']); ?>"><button type="button" class="btn btn-dark d-block w-100 mb-2 coodiv-text-12"><?php echo  esc_html($settings['1stbuttonbox3heroone']); ?></button></a><?php }?>
								<?php if ( 'yes' === $settings['show3button2heroone'] ) { ?>
                                <a href="<?php echo  esc_url($settings['2ndtbuttonlinkbox3heroone']); ?>"><button type="button" class="btn btn-outline-dark d-block w-100 coodiv-text-12"><?php echo  esc_html($settings['2ndbuttonbox3heroone']); ?></button></a><?php }?>
                            </div>
                        </div>                                
                    </div>
                </div>
            </div>
<script>
if(jQuery("#typed").length > 0) {
	var typed = new Typed('#typed', {
		strings: ['<?php echo  esc_html($settings['fp1heroone']); ?>', '<?php echo  esc_html($settings['fp2heroone']); ?>', '<?php echo  esc_html($settings['fp3heroone']); ?>', '<?php echo  esc_html($settings['fp4heroone']); ?>'],
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
