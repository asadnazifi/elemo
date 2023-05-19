<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Helpcenterq extends Widget_Base{

  public function get_name(){
    return 'helpcenterq';
  }

  public function get_title(){
    return esc_html__( 'Help Center Questions', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){

    $this->start_controls_section(
      'tab0helpcenterq',
      [
        'label' => esc_html__( 'Heading', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
	$this->add_control(
		'showtitlehelpcenterq',
		[
			'label' => esc_html__( 'Show Title', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::SWITCHER,
			'return_value' => 'yes',
			'default' => 'yes',
		]
	);
    $this->add_control(
			'titlehelpcenterq',
			[
				'label' => esc_html__( 'ُTitle', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Search at popular topics.', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'deschelpcenterq',
			[
				'label' => esc_html__( 'Description', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Our extraordinary Technical Support and Customer Service is one of the main reasons why our clients rate FastCloud as the number.', 'emyui-core' ),
			
			]
		);

    $this->end_controls_section();
    
    $this->start_controls_section(
      'tab1helpcenterq',
      [
        'label' => esc_html__( 'Features', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
    $this->add_control(
			'videolinkhelpcenterq',
			[
				'label' => esc_html__( 'Video Link', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'https://www.youtube.com/watch?v=HQRxks2lqTY', 'emyui-core' ),
			
			]
		);
		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
		  'q1helpcenterq',
		  [
			  'label' => esc_html__( 'First Question', 'emyui-core' ),
			  'type' => \Elementor\Controls_Manager::TEXT,
			  'default' => esc_html__( 'how can i order new host ?', 'emyui-core' ),
		
		  ]
		);
		$repeater->add_control(
		  'a1helpcenterq',
		  [
			  'label' => esc_html__( 'First Answer', 'emyui-core' ),
			  'type' => \Elementor\Controls_Manager::TEXTAREA,
			  'default' => esc_html__( 'Lorem Ipsum Dolor Sit Amet, Consectetuer Adipiscing Elit. Aenean Commodo Ligula Eget Dolor. Lorem Ipsum Dolor Sit Amet, Consectetuer Adipiscing Elit. Aenean Commodo Ligula Eget Dolor.', 'emyui-core' ),
		  
		  ]
		);
		$this->add_control(
		  'qahelpcenterq',
		  [
			  'label' => esc_html__( 'Question & Answer', 'emyui-core' ),
			  'type' => \Elementor\Controls_Manager::REPEATER,
			  'fields' => $repeater->get_controls(),
			  'default' => [
				  [
					  'q1helpcenterq' => esc_html__( 'how can i order new host ?', 'emyui-core' ),
					  'a1helpcenterq' => esc_html__( 'Lorem Ipsum Dolor Sit Amet, Consectetuer Adipiscing Elit. Aenean Commodo Ligula Eget Dolor. Lorem Ipsum Dolor Sit Amet, Consectetuer Adipiscing Elit. Aenean Commodo Ligula Eget Dolor.', 'emyui-core' ),
		  
				  ],
			  ],
		  ]
		  );	
		  $this->add_control(
			'showbuttonhelpcenterq',
			[
				'label' => esc_html__( 'Show Button', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);	
		$this->add_control(
			'buttonhelpcenterq',
			[
				'label' => esc_html__( 'button', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'View all Topics', 'emyui-core' ),
			
			]
		);
		$this->add_control(
			'buttonlihelpcenterq',
			[
				'label' => esc_html__( 'button Link', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '#', 'emyui-core' ),
			
			]
		);
						
    $this->end_controls_section();
  }
  

  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>
            <div class="search-at-popular-post-section bg-default-2 pb-2 pt-lg-5 pb-lg-30 position-relative">
                <svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
                    <defs>
                        <filter id="roundedsvg">
                            <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur" />
                            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                            <feComposite in="SourceGraphic" in2="goo" operator="atop" />
                        </filter>
                    </defs>
                </svg>
                <svg class="bg-wave-box-end-z1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path
                        fill="#ffffff"
                        fill-opacity="1"
                        d="M0,160L26.7,170.7C53.3,181,107,203,160,229.3C213.3,256,267,288,320,293.3C373.3,299,427,277,480,229.3C533.3,181,587,107,640,106.7C693.3,107,747,181,800,208C853.3,235,907,213,960,186.7C1013.3,160,1067,128,1120,106.7C1173.3,85,1227,75,1280,64C1333.3,53,1387,43,1413,37.3L1440,32L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"
                    ></path>
                </svg>

                <div class="container">
                    <div class="row justify-content-center align-items-center position-relative coodiv-z-index-2">
                        <div class="col-11 col-md-9 col-lg-9 order-lg-1" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
						<?php if ( 'yes' === $settings['showtitlehelpcenterq'] ) { ?>
                            <div class="hero-content mt-11 mt-lg-0">
                                <h1 class="title coodiv-text-5 mb-5 text-center"><?php echo  esc_html($settings['titlehelpcenterq']); ?></h1>
                                <p class="coodiv-text-9 mb-11 text-center"><?php echo  esc_html($settings['deschelpcenterq']); ?></p>
                            </div>
							<?php }?>
                        </div>
                    </div>

                    <div class="row justify-content-center mt-10 container-sidebar mx-0">
                        <!-- FAQ Accordion -->
                        <div id="sidebar" class="col-md-10 col-lg-5 sidebar-question pl-0">
                            <div class="sidebar__inner search-box-topics-sidebar">
							<a class="searchtoggle d-block d-lg-none"><i class="feather icon-search"></i></a>
                                <!-- FAQ Accordion -->
                                <div class="dinamic-filter-container">
                                    <i class="fas fa-search"></i>
                                    <input type="text" id="dinamic-filter-input" onkeyup="FilterListSection()" placeholder="جستجوی سوالات متداول..." />
                                </div>
                                <div class="dinamic-filter-list-container">
                                    <ul id="dinamic-filter-list">
									<?php		if ( $settings['qahelpcenterq'] ) {
                                                $fq3box = 1 ;

                                    foreach (  $settings['qahelpcenterq'] as $item ) {?>
                                        <li>
                                            <a class="animated-link" href="#go-to-qst-0<?php echo esc_html($fq3box);?>"><?php echo  esc_html($item['q1helpcenterq']); ?><i class="fas fa-angle-right"></i></a>
                                        </li>
										<?php $fq3box= $fq3box + 1;  }
                            
						}?>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-10 col-lg-7" data-aos="fade-left" data-aos-duration="1200" data-aos-once="true">
                            <div class="video-support-coodiv rounded-8 coodiv-hover-shadow-2 position-relative w-100">
                                <div id="particles-bg"></div>
                                <a class="video-trigger circle-xl bg-white coodiv-abs-center coodiv-abs-hover-y focus-reset coodiv-z-index-2" data-fancybox="" href="https://www.youtube.com/watch?v=HQRxks2lqTY" tabindex="-1">
                                    <i class="feather icon-play coodiv-text-6 text-green"></i>
                                </a>
                            </div>

                            <div class="questions-reponses white-bg shadow-2 rounded-10 mt-9 pl-5 pr-10 pt-10 pb-8">
                                <ul class="questions-reponses-list list-group pl-14">
								<?php		if ( $settings['qahelpcenterq'] ) {
                                                $fq4box = 1 ;

                                    foreach (  $settings['qahelpcenterq'] as $item ) {?>
                                    <li id="go-to-qst-0<?php echo esc_html($fq4box);?>">
                                        <h6><?php echo  esc_html($item['q1helpcenterq']); ?></h6>
                                        <p class="coodiv-text-11">
										<?php echo  esc_html($item['a1helpcenterq']); ?>
                                        </p>
                                    </li>
									<?php $fq4box= $fq4box + 1;  }
                            
						}?>
                                </ul>
                            </div>
                        </div>
                    </div>
					<?php if ( 'yes' === $settings['showbuttonhelpcenterq'] ) { ?>
                    <div class="row justify-content-center position-relative mt-20 px-lg-0 px-10">
                        <a class="btn btn-warning coodiv-text-9 col-lg-4" href="<?php echo  esc_url($settings['buttonlihelpcenterq']); ?>"><?php echo  esc_html($settings['buttonhelpcenterq']); ?></a>
                    </div>
					<?php }?>
                </div>
            </div>
			
		
    <?php
  }


}
