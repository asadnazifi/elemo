<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Reviewone extends Widget_Base{

  public function get_name(){
    return 'Review';
  }

  public function get_title(){
    return esc_html__( 'Review', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
      'review',
      [
        'label' => esc_html__( 'Contents', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );


    $this->add_control(
			'rmg1',
			[
				'label' => esc_html__( 'Review Logo', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				
			
			]
		);


  
		$this->add_control(
			'hometworating',
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
			'hometworating1',
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
			'hometworating2',
			[
				'label' => esc_html__( 'Number of Reviewers', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 0,
				'max' => 5000,
				'step' => 1,
				'default' => 3223,
			]
		);


    $this->end_controls_section();
}


protected function render(){
$settings = $this->get_settings_for_display();
?>

                    <div class="reviews-overview text-center mt-20 mb-10">
                        <p class="color-blackish-blue-opacity coodiv-text-10 d-lg-flex align-items-center justify-content-center">
                            <img class="website-logo" src="<?php echo esc_url($settings['rmg1']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $settings['rmg1'] )); ?>" /><?php echo _e('امتیاز ما');?><strong><?php echo _e('درجه یک است');?></strong>
                            <span class="reviews-stars ml-5">

                            <?php $ratingnum=$settings['hometworating']; 
                            if($ratingnum==0){
                              ?> <span> <?php echo esc_html__( '   No Ratings Found', 'emyui-core' ); ?></span> <?php
                            }
                            elseif($ratingnum==1){
                              ?>
                              <i class="feather icon-star-on"></i>
                              <?php
                            }
                            elseif($ratingnum==2){
                              ?>
                              <i class="feather icon-star-on"></i> <i class="feather icon-star-on"></i>
                              <?php
                            }
                            elseif($ratingnum==3){
                              ?>
                              <i class="feather icon-star-on"></i> <i class="feather icon-star-on"></i> <i class="feather icon-star-on"></i>
                              <?php
                            }
                            elseif($ratingnum==4){
                              ?>
                             </i> <i class="feather icon-star-on"></i> <i class="feather icon-star-on"></i> <i class="feather icon-star-on"></i> <i class="feather icon-star-on"></i>
                              <?php
                            }
                            elseif($ratingnum==5){ ?>
                             <i class="feather icon-star-on"></i> <i class="feather icon-star-on"></i> <i class="feather icon-star-on"></i> <i class="feather icon-star-on"></i> <i class="feather icon-star-on"></i>
                             <?php

                            }                            
                            
                            ?>
                              
                           
                            </span>
                            <strong><?php echo $settings['hometworating1']; ?></strong>&nbsp;<?php echo esc_html__( 'out of 5 based on', 'emyui-core' ); ?><strong><?php echo $settings['hometworating2'] . esc_html__( '   Reviews', 'emyui-core' ) ?></strong>
                        </p>
                    </div>
                 
                    <?php
  }


}
