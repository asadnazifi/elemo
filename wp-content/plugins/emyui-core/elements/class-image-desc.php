<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Imagedescription extends Widget_Base{

  public function get_name(){
    return 'imagedescription';
  }

  public function get_title(){
    return esc_html__( 'Image Description', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
        'tab0imagedescription',
        [
          'label' => esc_html__( 'Main Tab', 'emyui-core' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
    $this->add_control(
        'titleimagedescription',
        [
            'label' => esc_html__( 'Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Good reason to Switch to us now.', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'descimagedescription',
        [
            'label' => esc_html__( 'Description', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'default' => esc_html__( 'Weve been doing this since since 2019, so we know that to help newbies and pros alike that it takes all kinds of plans. Our tools are designed to grow with you, so youll never outgrow us (unlike with some of those other guys, just sayin). Thats what being unstuckable is all about.

            Our tools are designed to grow with you, so youll never outgrow us (unlike with some of those other guys, just sayin). Thats what being unstuckable is all about.', 'emyui-core' ),
        
        ]
    );
    $this->add_control(
        'imgimagedescription',
        [
            'label' => esc_html__( 'Image', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
        
        ]
    );
       $this->end_controls_section();
       $this->start_controls_section(
        'tab1imagedescription',
        [
          'label' => esc_html__( 'First Tab', 'emyui-core' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
      $this->add_control(
        'img1imagedescription',
        [
            'label' => esc_html__( 'Image', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
        
        ]
    );
    $this->add_control(
        'title1imagedescription',
        [
            'label' => esc_html__( 'Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Unlimited space & bandwith.', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'desc1imagedescription',
        [
            'label' => esc_html__( 'Description', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'default' => esc_html__( 'Our tools are designed to grow with you, so youll never outgrow us (unlike with some of those other guys, just sayin). Thats what being unstuckable is all about.', 'emyui-core' ),
        
        ]
    );
    $this->add_control(
        'iconfeat1tab11imagedescription',
        [
            'label' => esc_html__( 'First Feature Icon', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::ICON,
            'default' => 'feather icon-download',
        ]
    );
    $this->add_control(
        'feat1tab11imagedescription',
        [
            'label' => esc_html__( 'First Feature', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Unlimited web space', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'iconfeat2tab11imagedescription',
        [
            'label' => esc_html__( 'Second Feature Icon', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::ICON,
            'default' => 'feather icon-paperclip',
        ]
    );
    $this->add_control(
        'feat2tab11imagedescription',
        [
            'label' => esc_html__( 'Second Feature', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'To the moon bandwith', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'iconfeat3tab11imagedescription',
        [
            'label' => esc_html__( 'Third Feature Icon', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::ICON,
            'default' => 'feather icon-map-pin',
        ]
    );
    $this->add_control(
        'feat3tab11imagedescription',
        [
            'label' => esc_html__( 'Third Feature', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Free domain', 'emyui-core' ),
    
        ]
    );
       $this->end_controls_section();
       $this->start_controls_section(
        'tab2imagedescription',
        [
          'label' => esc_html__( 'Second Tab', 'emyui-core' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
      $this->add_control(
        'img2imagedescription',
        [
            'label' => esc_html__( 'Image', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
        
        ]
    );
    $this->add_control(
        'title2imagedescription',
        [
            'label' => esc_html__( 'Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Unlimited space & bandwith.', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'desc2imagedescription',
        [
            'label' => esc_html__( 'Description', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'default' => esc_html__( 'Our tools are designed to grow with you, so youll never outgrow us (unlike with some of those other guys, just sayin). Thats what being unstuckable is all about.', 'emyui-core' ),
        
        ]
    );
    $this->add_control(
        'iconfeat1tab21imagedescription',
        [
            'label' => esc_html__( 'First Feature Icon', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::ICON,
            'default' => 'feather icon-download',
        ]
    );
    $this->add_control(
        'feat1tab21imagedescription',
        [
            'label' => esc_html__( 'First Feature', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Unlimited web space', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'iconfeat2tab21imagedescription',
        [
            'label' => esc_html__( 'Second Feature Icon', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::ICON,
            'default' => 'feather icon-paperclip',
        ]
    );
    $this->add_control(
        'feat2tab21imagedescription',
        [
            'label' => esc_html__( 'Second Feature', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'To the moon bandwith', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'iconfeat3tab21imagedescription',
        [
            'label' => esc_html__( 'Third Feature Icon', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::ICON,
            'default' => 'feather icon-map-pin',
        ]
    );
    $this->add_control(
        'feat3tab21imagedescription',
        [
            'label' => esc_html__( 'Third Feature', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Free domain', 'emyui-core' ),
    
        ]
    );
       $this->end_controls_section();
       $this->start_controls_section(
        'tab3imagedescription',
        [
          'label' => esc_html__( 'Third Tab', 'emyui-core' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
      $this->add_control(
        'img3imagedescription',
        [
            'label' => esc_html__( 'Image', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
        
        ]
    );
    $this->add_control(
        'title3imagedescription',
        [
            'label' => esc_html__( 'Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Unlimited space & bandwith.', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'desc3imagedescription',
        [
            'label' => esc_html__( 'Description', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'default' => esc_html__( 'Our tools are designed to grow with you, so youll never outgrow us (unlike with some of those other guys, just sayin). Thats what being unstuckable is all about.', 'emyui-core' ),
        
        ]
    );
    $this->add_control(
        'iconfeat1tab31imagedescription',
        [
            'label' => esc_html__( 'First Feature Icon', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::ICON,
            'default' => 'feather icon-download',
        ]
    );
    $this->add_control(
        'feat1tab31imagedescription',
        [
            'label' => esc_html__( 'First Feature', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Unlimited web space', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'iconfeat2tab31imagedescription',
        [
            'label' => esc_html__( 'Second Feature Icon', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::ICON,
            'default' => 'feather icon-paperclip',
        ]
    );
    $this->add_control(
        'feat2tab31imagedescription',
        [
            'label' => esc_html__( 'Second Feature', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'To the moon bandwith', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'iconfeat3tab31imagedescription',
        [
            'label' => esc_html__( 'Third Feature Icon', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::ICON,
            'default' => 'feather icon-map-pin',
        ]
    );
    $this->add_control(
        'feat3tab31imagedescription',
        [
            'label' => esc_html__( 'Third Feature', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Free domain', 'emyui-core' ),
    
        ]
    );
       $this->end_controls_section();
       $this->start_controls_section(
        'tab4imagedescription',
        [
          'label' => esc_html__( 'Fourth Tab', 'emyui-core' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
      $this->add_control(
        'img4imagedescription',
        [
            'label' => esc_html__( 'Image', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
        
        ]
    );
    $this->add_control(
        'title4imagedescription',
        [
            'label' => esc_html__( 'Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Unlimited space & bandwith.', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'desc4imagedescription',
        [
            'label' => esc_html__( 'Description', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'default' => esc_html__( 'Our tools are designed to grow with you, so youll never outgrow us (unlike with some of those other guys, just sayin). Thats what being unstuckable is all about.', 'emyui-core' ),
        
        ]
    );
    $this->add_control(
        'iconfeat1tab41imagedescription',
        [
            'label' => esc_html__( 'First Feature Icon', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::ICON,
            'default' => 'feather icon-download',
        ]
    );
    $this->add_control(
        'feat1tab41imagedescription',
        [
            'label' => esc_html__( 'First Feature', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Unlimited web space', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'iconfeat2tab41imagedescription',
        [
            'label' => esc_html__( 'Second Feature Icon', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::ICON,
            'default' => 'feather icon-paperclip',
        ]
    );
    $this->add_control(
        'feat2tab41imagedescription',
        [
            'label' => esc_html__( 'Second Feature', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'To the moon bandwith', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'iconfeat3tab41imagedescription',
        [
            'label' => esc_html__( 'Third Feature Icon', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::ICON,
            'default' => 'feather icon-map-pin',
        ]
    );
    $this->add_control(
        'feat3tab41imagedescription',
        [
            'label' => esc_html__( 'Third Feature', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Free domain', 'emyui-core' ),
    
        ]
    );
       $this->end_controls_section();
    }
        
  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>

<div class="why-us-section pt-md-15">
                <div class="container position-relative">
                    <div class="row justify-content-start align-items-center">
                        <div class="col-lg-5 col-md-12">
                            <div class="tab-content" id="ourfeatures-tabContent">
                                <div class="tab-pane fade show active" id="ourfeatures-main" role="tabpanel" aria-labelledby="ourfeatures-main-tab">
                                    <h3 class="coodiv-text-3 mb-6">
                                    <?php echo  esc_html($settings['titleimagedescription']); ?>
                                    </h3>
                                    <p class="coodiv-text-9">
                                    <?php echo  esc_html($settings['descimagedescription']); ?></p>
                                </div>

                                <div class="tab-pane fade" id="ourfeatures-first" role="tabpanel" aria-labelledby="ourfeatures-first-tab">
                                    <h3 class="coodiv-text-3 mb-6">
                                    <?php echo  esc_html($settings['title1imagedescription']); ?>
                                    </h3>
                                    <p class="coodiv-text-9 mb-10"><?php echo  esc_html($settings['desc1imagedescription']); ?></p>
                                    <div class="ourfeatures-box-group">
                                        <span class="ourfeatures-box d-block shadow-2 px-5 py-5"><i class="<?php echo esc_attr( $settings['iconfeat1tab11imagedescription'] ); ?>"></i><?php echo  $settings['feat1tab11imagedescription']; ?></span>
                                        <span class="ourfeatures-box d-block shadow-2 px-5 py-5"><i class="<?php echo esc_attr( $settings['iconfeat2tab11imagedescription'] ); ?>"></i><?php echo  $settings['feat2tab11imagedescription']; ?></span>
                                        <span class="ourfeatures-box d-block shadow-2 px-5 py-5"><i class="<?php echo esc_attr( $settings['iconfeat3tab11imagedescription'] ); ?>"></i><?php echo  $settings['feat3tab11imagedescription']; ?></span>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="ourfeatures-second" role="tabpanel" aria-labelledby="ourfeatures-second-tab">
								
								<h3 class="coodiv-text-3 mb-6">
                                <?php echo  esc_html($settings['title2imagedescription']); ?>
                                    </h3>
                                    <p class="coodiv-text-9 mb-10"><?php echo  esc_html($settings['desc2imagedescription']); ?></p>
                                    <div class="ourfeatures-box-group">
                                    <span class="ourfeatures-box d-block shadow-2 px-5 py-5"><i class="<?php echo esc_attr( $settings['iconfeat1tab21imagedescription'] ); ?>"></i><?php echo  esc_html($settings['feat1tab21imagedescription']); ?></span>
                                        <span class="ourfeatures-box d-block shadow-2 px-5 py-5"><i class="<?php echo esc_attr( $settings['iconfeat2tab21imagedescription'] ); ?>"></i><?php echo  esc_html($settings['feat2tab21imagedescription']); ?></span>
                                        <span class="ourfeatures-box d-block shadow-2 px-5 py-5"><i class="<?php echo esc_attr( $settings['iconfeat3tab21imagedescription'] ); ?>"></i><?php echo  esc_html($settings['feat3tab21imagedescription']); ?></span>
                                    </div>
								
								</div>

                                <div class="tab-pane fade" id="ourfeatures-third" role="tabpanel" aria-labelledby="ourfeatures-third-tab">
								<h3 class="coodiv-text-3 mb-6">
                                <?php echo  esc_html($settings['title3imagedescription']); ?>
                                    </h3>
                                    <p class="coodiv-text-9 mb-10"><?php echo  esc_html($settings['desc3imagedescription']); ?></p>
                                    <div class="ourfeatures-box-group">
                                    <span class="ourfeatures-box d-block shadow-2 px-5 py-5"><i class="<?php echo esc_attr( $settings['iconfeat1tab31imagedescription'] ); ?>"></i><?php echo  esc_html($settings['feat1tab31imagedescription']); ?></span>
                                        <span class="ourfeatures-box d-block shadow-2 px-5 py-5"><i class="<?php echo esc_attr( $settings['iconfeat2tab31imagedescription'] ); ?>"></i><?php echo  esc_html($settings['feat2tab31imagedescription']); ?></span>
                                        <span class="ourfeatures-box d-block shadow-2 px-5 py-5"><i class="<?php echo esc_attr( $settings['iconfeat3tab31imagedescription'] ); ?>"></i><?php echo  esc_html($settings['feat3tab31imagedescription']); ?></span>
                                    </div>
								
								</div>

                                <div class="tab-pane fade" id="ourfeatures-fourth" role="tabpanel" aria-labelledby="ourfeatures-fourth-tab">
								<h3 class="coodiv-text-3 mb-6">
                                <?php echo  esc_html($settings['title4imagedescription']); ?>

                                    </h3>
                                    <p class="coodiv-text-9 mb-10"><?php echo  esc_html($settings['desc4imagedescription']); ?></p>
                                    <div class="ourfeatures-box-group">
                                    <span class="ourfeatures-box d-block shadow-2 px-5 py-5"><i class="<?php echo esc_attr( $settings['iconfeat1tab41imagedescription'] ); ?>"></i><?php echo  esc_html($settings['feat1tab41imagedescription']); ?></span>
                                        <span class="ourfeatures-box d-block shadow-2 px-5 py-5"><i class="<?php echo esc_attr( $settings['iconfeat2tab41imagedescription'] ); ?>"></i><?php echo  esc_html($settings['feat2tab41imagedescription']); ?></span>
                                        <span class="ourfeatures-box d-block shadow-2 px-5 py-5"><i class="<?php echo esc_attr( $settings['iconfeat3tab41imagedescription'] ); ?>"></i><?php echo  esc_html($settings['feat3tab41imagedescription']); ?></span>
                                    </div>
								
								</div>
                            </div>
                        </div>

                        <div class="col-lg-6 offset-lg-1 col-sm-10 mt-n20 d-none d-lg-block">
                            <ul class="content-img tab-image-features position-relative nav" id="ourfeatures-tab" role="tablist" data-aos="zoom-in" data-aos-duration="500" data-aos-once="true">
                                <li class="nav-item" role="presentation">
                                    <a
                                        class="nav-link"
                                        id="ourfeatures-first-tab"
                                        data-toggle="pill"
                                        href="#ourfeatures-first"
                                        role="tab"
                                        aria-controls="ourfeatures-first"
                                        aria-selected="true"
                                        data-aos="zoom-in"
                                        data-aos-duration="700"
                                        data-aos-once="true"
                                    >
                                        <img class="w-100" src="<?php echo esc_url($settings['img1imagedescription']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $settings['img1imagedescription'] )); ?>" />
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a
                                        class="nav-link"
                                        id="ourfeatures-second-tab"
                                        data-toggle="pill"
                                        href="#ourfeatures-second"
                                        role="tab"
                                        aria-controls="ourfeatures-second"
                                        aria-selected="false"
                                        data-aos="zoom-in"
                                        data-aos-duration="800"
                                        data-aos-once="true"
                                    >
                                    <img class="w-100" src="<?php echo esc_url($settings['img2imagedescription']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $settings['img2imagedescription'] )); ?>" />
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a
                                        class="nav-link"
                                        id="ourfeatures-third-tab"
                                        data-toggle="pill"
                                        href="#ourfeatures-third"
                                        role="tab"
                                        aria-controls="ourfeatures-third"
                                        aria-selected="false"
                                        data-aos="zoom-in"
                                        data-aos-duration="900"
                                        data-aos-once="true"
                                    >
                                    <img class="w-100" src="<?php echo esc_url($settings['img3imagedescription']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $settings['img3imagedescription'] )); ?>" />
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a
                                        class="nav-link"
                                        id="ourfeatures-fourth-tab"
                                        data-toggle="pill"
                                        href="#ourfeatures-fourth"
                                        role="tab"
                                        aria-controls="ourfeatures-fourth"
                                        aria-selected="false"
                                        data-aos="zoom-in"
                                        data-aos-duration="1000"
                                        data-aos-once="true"
                                    >
                                    <img class="w-100" src="<?php echo esc_url($settings['img4imagedescription']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $settings['img4imagedescription'] )); ?>" />
                                    </a>
                                </li>
                                <img class="img-fluid" src="<?php echo esc_url($settings['imgimagedescription']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $settings['imgimagedescription'] )); ?>" />
                            </ul>
                        </div>
                    </div>
<script>

</script>
<?php
}
  }

