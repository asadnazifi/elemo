<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Testimonials extends Widget_Base{

  public function get_name(){
    return 'testimonials';
  }

  public function get_title(){
    return esc_html__( 'Testimonials', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){

    $this->start_controls_section(
      'section_content_testimonials',
      [
        'label' => esc_html__( 'Heading', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
  $this->add_control(
			'titletestimonials',
			[
				'label' => esc_html__( 'Title', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Trusted by over 18.000 happy customers!', 'emyui-core' ),
			
			]
		);  
		$this->add_control(
			'ratingtestimonials',
			[
				'label' => esc_html__( 'Rating', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 0,
				'max' => 5,
				'step' => 1,
				'default' => 5,
			]
		);
	  
		$this->add_control(
			'ratecounttestimonials',
			[
				'label' => esc_html__( 'Rating Count', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 0,
				'max' => 5,
				'step' => 0.1,
				'default' => 4.9,
			]
		);
		$this->add_control(
			'numberreviewtestimonials',
			[
				'label' => esc_html__( 'Number of Reviewers', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 0,
				'max' => 500000,
				'step' => 1,
				'default' => 3223,
			]
		);
    $this->end_controls_section();
    
    $this->start_controls_section(
      'sectiontwo_testimonials',
      [
        'label' => esc_html__( 'First Row Review', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );

	$repeater = new \Elementor\Repeater();

	$repeater->add_control(
		'ratingreviewtestimonials',
		[
			'label' => esc_html__( 'Rating', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::NUMBER,
			'min' => 0,
			'max' => 5,
			'step' => 1,
			'default' => 5,
		]
	);
	$repeater->add_control(
	  'titlereviewtestimonials',
	  [
		  'label' => esc_html__( 'Title', 'emyui-core' ),
		  'type' => \Elementor\Controls_Manager::TEXT,
		  'default' => esc_html__( 'Fastest CDN On Earth', 'emyui-core' ),
	  
	  ]
	);
	$repeater->add_control(
		'datereviewtestimonials',
		[
			'label' => esc_html__( 'Date', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( 'Aug 5, 2020', 'emyui-core' ),
		
		]
	  );
	$repeater->add_control(
		'desctestimonials',
		[
			'label' => esc_html__( 'Reivew', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXTAREA,
			'default' => esc_html__( 'Awesome service. Specially simply great pricing. I am using coodiv.net as my applications CDN and file storage. So far the speed (upload/download) looks good.', 'emyui-core' ),
		
		]
	  );
	  $repeater->add_control(
		'reviewertestimonials',
		[
			'label' => esc_html__( 'Reviewer', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( 'John Deo', 'emyui-core' ),
		
		]
	  );
	$this->add_control(
	  'repeatertestimonials',
	  [
		  'label' => esc_html__( 'Features', 'emyui-core' ),
		  'type' => \Elementor\Controls_Manager::REPEATER,
		  'fields' => $repeater->get_controls(),
		  'default' => [
			[
				'ratingreviewtestimonials' => esc_html__( '5', 'emyui-core' ),
				'titlereviewtestimonials' => esc_html__( 'Fastest CDN On Earth', 'emyui-core' ),
				'datereviewtestimonials' => esc_html__( 'Aug 5, 2020', 'emyui-core' ),
				'desctestimonials' => esc_html__( 'Awesome service. Specially simply great pricing. I am using coodiv.net as my applications CDN and file storage. So far the speed (upload/download) looks good.', 'emyui-core' ),
				'reviewertestimonials' => esc_html__( 'John Deo', 'emyui-core' ),
			],
		],
	  ]
	  );

    $this->end_controls_section();
	$this->start_controls_section(
		'sectionthree_testimonials',
		[
		  'label' => esc_html__( 'Second Row Review', 'emyui-core' ),
				  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		]
	  );
  
	  $repeater = new \Elementor\Repeater();
  
	  $repeater->add_control(
		  'ratingreview2testimonials',
		  [
			  'label' => esc_html__( 'Rating', 'emyui-core' ),
			  'type' => \Elementor\Controls_Manager::NUMBER,
			  'min' => 0,
			  'max' => 5,
			  'step' => 1,
			  'default' => 5,
		  ]
	  );
	  $repeater->add_control(
		'titlereview2testimonials',
		[
			'label' => esc_html__( 'Title', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => esc_html__( 'Fastest CDN On Earth', 'emyui-core' ),
		
		]
	  );
	  $repeater->add_control(
		  'datereview2testimonials',
		  [
			  'label' => esc_html__( 'Date', 'emyui-core' ),
			  'type' => \Elementor\Controls_Manager::TEXT,
			  'default' => esc_html__( 'Aug 5, 2020', 'emyui-core' ),
		  
		  ]
		);
	  $repeater->add_control(
		  'desc2testimonials',
		  [
			  'label' => esc_html__( 'Reivew', 'emyui-core' ),
			  'type' => \Elementor\Controls_Manager::TEXTAREA,
			  'default' => esc_html__( 'Awesome service. Specially simply great pricing. I am using coodiv.net as my applications CDN and file storage. So far the speed (upload/download) looks good.', 'emyui-core' ),
		  
		  ]
		);
		$repeater->add_control(
		  'reviewer2testimonials',
		  [
			  'label' => esc_html__( 'Reviewer', 'emyui-core' ),
			  'type' => \Elementor\Controls_Manager::TEXT,
			  'default' => esc_html__( 'John Deo', 'emyui-core' ),
		  
		  ]
		);
	  $this->add_control(
		'repeater2testimonials',
		[
			'label' => esc_html__( 'Features', 'emyui-core' ),
			'type' => \Elementor\Controls_Manager::REPEATER,
			'fields' => $repeater->get_controls(),
			'default' => [
			  [
				  'ratingreview2testimonials' => esc_html__( '5', 'emyui-core' ),
				  'titlereview2testimonials' => esc_html__( 'Fastest CDN On Earth', 'emyui-core' ),
				  'datereview2testimonials' => esc_html__( 'Aug 5, 2020', 'emyui-core' ),
				  'desc2testimonials' => esc_html__( 'Awesome service. Specially simply great pricing. I am using coodiv.net as my applications CDN and file storage. So far the speed (upload/download) looks good.', 'emyui-core' ),
				  'reviewer2testimonials' => esc_html__( 'John Deo', 'emyui-core' ),
			  ],
		  ],
		]
		);
  
	  $this->end_controls_section();
  }
  

  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>
            <div class="trusted-section overflow-hidden py-18 py-lg-25 pb-lg-35 bg-default-2 bg-pattern pattern-4 position-relative">
                <svg class="bg-wave-box-end-z1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path
                        fill="#ffffff"
                        fill-opacity="1"
                        d="M0,160L26.7,170.7C53.3,181,107,203,160,229.3C213.3,256,267,288,320,293.3C373.3,299,427,277,480,229.3C533.3,181,587,107,640,106.7C693.3,107,747,181,800,208C853.3,235,907,213,960,186.7C1013.3,160,1067,128,1120,106.7C1173.3,85,1227,75,1280,64C1333.3,53,1387,43,1413,37.3L1440,32L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"
                    ></path>
                </svg>

                <div class="container">
                    <div class="row justify-content-center mb-15">
                        <div class="col-md-7 aos-init aos-animate" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                            <div class="section-title text-center pr-lg-7 mb-0 light-mode-texts">
                                <h2 class="title coodiv-text-4 mb-3"><?php echo $settings['titletestimonials']; ?></h2>
                                <p class="coodiv-text-9 mb-4"><?php echo _e('امتیاز ما  ', 'emyui-core');?><strong><?php echo _e(' درجه یک است ', 'emyui-core');  echo $settings['ratecounttestimonials'];?></strong><?php echo _e(' از ۵ نمره کیفی کاربران', 'emyui-core'); ?>  <strong><?php echo $settings['numberreviewtestimonials'];  echo _e(' نظر', 'emyui-core'); ?></strong></p>

                                <div class="reviews-overview text-center">
                                    <span class="reviews-stars">
                                    <?php $ratingnum2=$settings['ratingtestimonials']; 
                                    if($ratingnum2==0){
                                      ?> <span> <?php echo esc_html__( '   No Ratings Found', 'emyui-core' ); ?></span> <?php
                                    }
                                    elseif($ratingnum2==1){
                                      ?>
                                      <i class="feather icon-star-on"></i>
                                      <?php
                                    }
                                    elseif($ratingnum2==2){
                                      ?>
                                      <i class="feather icon-star-on"></i> <i class="feather icon-star-on"></i>
                                      <?php
                                    }
                                    elseif($ratingnum2==3){
                                      ?>
                                      <i class="feather icon-star-on"></i> <i class="feather icon-star-on"></i> <i class="feather icon-star-on"></i>
                                      <?php
                                    }
                                    elseif($ratingnum2==4){
                                      ?>
                                     <i class="feather icon-star-on"></i> <i class="feather icon-star-on"></i> <i class="feather icon-star-on"></i> <i class="feather icon-star-on"></i>
                                      <?php
                                    }
                                    elseif($ratingnum2==5){ ?>
                                     <i class="feather icon-star-on"></i> <i class="feather icon-star-on"></i> <i class="feather icon-star-on"></i> <i class="feather icon-star-on"></i> <i class="feather icon-star-on"></i>
                                     <?php
        
                                    }                            
                                    
                                    ?>
									</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="overflow-hidden position-relative">
                    <div class="reviews-boxes full-width-review-box-container reviews-row-1 d-block d-lg-flex mt-lg-10">
								<?php if ( $settings['repeatertestimonials'] ) {
								foreach (  $settings['repeatertestimonials'] as $item ) { ?>
                        <div class="review-box white-bg rounded-20 shadow-2 py-8 px-10 position-relative mx-6">
                            <div class="rating d-flex justify-content-between">
                                <span class="stars">
								<?php $ratingnum3=$item['ratingreviewtestimonials']; 
                                    if($ratingnum3==0){
                                      ?> <span> <?php echo esc_html__( '   هیچ امتیازی پیدا نشد', 'emyui-core' ); ?></span> <?php
                                    }
                                    elseif($ratingnum3==1){
                                      ?>
                                      <i class="fa fa-star"></i>
                                      <?php
                                    }
                                    elseif($ratingnum3==2){
                                      ?>
                                      <i class="fa fa-star"></i>
									  <i class="fa fa-star"></i>
                                      <?php
                                    }
                                    elseif($ratingnum3==3){
                                      ?>
                                      <i class="fa fa-star"></i>
									  <i class="fa fa-star"></i>
									  <i class="fa fa-star"></i>
                                      <?php
                                    }
                                    elseif($ratingnum3==4){
                                      ?>
                                      <i class="fa fa-star"></i>
									  <i class="fa fa-star"></i>
									  <i class="fa fa-star"></i>
									  <i class="fa fa-star"></i>
                                      <?php
                                    }
                                    elseif($ratingnum3==5){ ?>
                                        <i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
                                     <?php
        
                                    }                            
                                    
                                    ?>
                                </span>
                                <span class="date coodiv-text-11"><?php echo  esc_html($item['datereviewtestimonials']); ?></span>
                            </div>
                            <div class="review-box-body position-relative h-100">
                                <h5 class="coodiv-text-9"><?php echo  esc_html($item['titlereviewtestimonials']); ?></h5>
                                <p class="coodiv-text-11"><?php echo  esc_html($item['desctestimonials']); ?></p>
                                <strong class="coodiv-text-11"><?php echo  esc_html($item['reviewertestimonials']); ?></strong>
                            </div>
                        </div>
						<?php
                                }
                                    } 
									?>
                    </div>

                    <div class="reviews-boxes full-width-review-box-container reviews-row-2 d-flex mt-10 d-none d-lg-flex">
					<?php if ( $settings['repeater2testimonials'] ) {
                                        foreach (  $settings['repeater2testimonials'] as $item ) { ?>
                                <div class="review-box white-bg rounded-20 shadow-2 py-8 px-10 position-relative mx-6">
                                    <div class="rating d-flex justify-content-between">
                                        <span class="stars">
                                        <?php $ratingnum4=$item['ratingreview2testimonials']; 
                                            if($ratingnum4==0){
                                              ?> <span> <?php echo esc_html__( '   No Ratings Found', 'emyui-core' ); ?></span> <?php
                                            }
                                            elseif($ratingnum4==1){
                                              ?>
                                              <i class="fa fa-star"></i>
                                              <?php
                                            }
                                            elseif($ratingnum4==2){
                                              ?>
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                              <?php
                                            }
                                            elseif($ratingnum4==3){
                                              ?>
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                              <?php
                                            }
                                            elseif($ratingnum4==4){
                                              ?>
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                              <i class="fa fa-star"></i>
                                              <?php
                                            }
                                            elseif($ratingnum4==5){ ?>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                             <?php
                
                                            }                            
                                            
                                            ?>
                                        </span>
                                        <span class="date coodiv-text-11"><?php echo  esc_html($item['datereview2testimonials']); ?></span>
                                    </div>
                                    <div class="review-box-body position-relative h-100">
                                        <h5 class="coodiv-text-9"><?php echo  esc_html($item['titlereview2testimonials']); ?></h5>
                                        <p class="coodiv-text-11"><?php echo  esc_html($item['desc2testimonials']); ?></p>
                                        <strong class="coodiv-text-11"><?php echo  esc_html($item['reviewer2testimonials']); ?></strong>
                                    </div>
                                </div>
                                <?php
                                        }
                                            } 
                                            ?>
                    </div>
                </div>
            </div>

    <?php
  }


}
