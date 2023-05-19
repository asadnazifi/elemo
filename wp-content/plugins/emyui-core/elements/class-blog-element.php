<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Blogelement extends Widget_Base{

  public function get_name(){
    return 'blogelement';
  }

  public function get_title(){
    return esc_html__( 'Blog', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
        'tab0blogelement',
        [
          'label' => esc_html__( 'Main Tab', 'emyui-core' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
    $this->add_control(
        'titleblogelement',
        [
            'label' => esc_html__( 'Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Get inspired by the worlds best designers', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
      'subtitleblogelement',
      [
          'label' => esc_html__( 'Subtitle', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::TEXT,
          'default' => esc_html__( 'OUR LATEST NEWS', 'emyui-core' ),
  
      ]
  );
  $this->add_control(
    'numberblogelement',
    [
      'label' => esc_html__( 'Number Of Posts', 'emyui-core' ),
      'type' => \Elementor\Controls_Manager::NUMBER,
      'min' => 1,
      'step' => 1,
      'default' => 3,
    ]
  );

        
       $this->end_controls_section();
    }
        
  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>

            <div class="blog-section pt-15 pb-14 pt-lg-25 bn-lg-20 position-relative">
                <div class="container">
                    <!-- container -->

                    <!-- START title -->
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-7 col-md-8">
                            <div class="section-title text-center mb-11 mb-lg-21">
                                <h3 class="sub-badge coodiv-text-12 text-uppercase text-red mb-7 font_family_TKT"><?php echo esc_html($settings['subtitleblogelement']); ?></h3>
                                <h2 class="title coodiv-text-4 mb-0 font_family_TKT"><?php echo esc_html($settings['titleblogelement']); ?></h2>
                            </div>
                        </div>
                    </div>
                    <!-- END title -->

   <!-- row -->



                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-7">

                                            <?php
                                            $npel= 1;
                                            $args_cbew = array(
                                                'post_type' => array('post'),
                                                'posts_per_page' => $npel ,
                                                'order' => 'DESC',

                                            );

                                            $cbew = new \WP_Query( $args_cbew );

                                            if ( $cbew->have_posts() ) {
                                                while ( $cbew->have_posts() ) {
                                                    $cbew->the_post();
                                                    ?>
                                                    <div class="font_family_TKT">
                                                        <span>مطالعه مقالات آموزشی</span>
                                                    </div>
                                                    <div class="font_family_TKT">
                                                        <h3>آخرین مطالب وبلاگ</h3>
                                                    </div>
                                                    <div  class="rounded-10">
                                                        <img  src="<?php the_post_thumbnail_url();?>" alt="عکس داخل متن">
                                                    </div>
                                                    <div class="row justify-content-between mb-4 mt-4 p-4 font_family_TKT">
                                                        <div class="text"><?php the_title()?></div>
                                                        <div class="icon pl-10 font_family_TKT "><i class="fa fa-clock"></i><?php echo get_the_date( 'd M' );?></div>
                                                    </div>
                                                <?php	}
                                            } else {

                                            }

                                            wp_reset_postdata();
                                            ?>
                                            <?php
                                            $npel= 2;
                                            $args_cbew = array(
                                                'post_type' => array('post'),
                                                'posts_per_page' => $npel ,
                                                'order' => 'DESC',

                                            );

                                            $cbew = new \WP_Query( $args_cbew );

                                            if ( $cbew->have_posts() ) {
                                                while ( $cbew->have_posts() ) {
                                                    $cbew->the_post();
                                                    ?>

                                                    <div class="single-post coodiv-hover-rotate-img row mb-4 ">
                                                        <div class="case-img w-40">
                                                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo esc_attr(get_post_meta ( $image_id, '_wp_attachment_image_alt', true )); ?>" class="w-100 rounded-10" />
                                                        </div>
                                                        <div class="single-post-content position-relative p-3 font_family_TKT">

                                                            <a href="<?php the_permalink(); ?>" class="single-post-title font_family_TKT"><?php the_title(); ?></a>
                                                            <p class="mt-15 font_family_TKT"><i class="fa fa-clock"></i><?php echo get_the_date( 'd M' );?></p>
                                                        </div>

                                                    </div>
                                                <?php	}
                                            } else {

                                            }

                                            wp_reset_postdata();
                                            ?>


                                        </div>
                                        <div class="col-lg-5 mt-5">
                                            <?php

                                            // Custom WP query cbew
                                            $npel= $settings['numberblogelement'];
                                            $args_cbew = array(
                                                'post_type' => array('post'),
                                                'posts_per_page' => $npel ,
                                                'order' => 'DESC',

                                            );

                                            $cbew = new \WP_Query( $args_cbew );

                                            if ( $cbew->have_posts() ) {
                                                while ( $cbew->have_posts() ) {
                                                    $cbew->the_post();
                                                    ?>
                                                    <div class="single-post coodiv-hover-rotate-img row mb-4 ">
                                                        <div class="case-img w-40">
                                                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo esc_attr(get_post_meta ( $image_id, '_wp_attachment_image_alt', true )); ?>" class="w-100 rounded-10" />
                                                        </div>
                                                        <div class="single-post-content position-relative p-3 font_family_TKT">

                                                            <a href="<?php the_permalink(); ?>" class="single-post-title font_family_TKT"><?php the_title(); ?></a>
                                                            <p class="mt-5 font_family_TKT"><i class="fa fa-clock font_family_TKT"></i><?php echo get_the_date( 'd M' );?></p>
                                                        </div>

                                                    </div>
                                                <?php	}
                                            } else {

                                            }

                                            wp_reset_postdata();
                                            ?>
                                        </div>
                                    </div>
                                </div>
                 
                              
           
                <!-- END container -->
            </div>

<?php
}
  }

