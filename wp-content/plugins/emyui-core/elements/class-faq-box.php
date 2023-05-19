<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Faqbox extends Widget_Base{

  public function get_name(){
    return 'faqbox';
  }

  public function get_title(){
    return esc_html__( 'FAQ Box', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
        'tab0faqbox',
        [
          'label' => esc_html__( 'Features Tab', 'emyui-core' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
    $this->add_control(
        'titlefaqbox',
        [
            'label' => esc_html__( 'Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'We are always here for your backup.', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'descfaqbox',
        [
            'label' => esc_html__( 'Description', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'default' => esc_html__( 'We share common trends and strategies for improving your rental income.', 'emyui-core' ),
        
        ]
    );
    $this->add_control(
        'title1faqbox',
        [
            'label' => esc_html__( 'First Box Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '1M+', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'desc1faqbox',
        [
            'label' => esc_html__( 'First Box Description', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'default' => esc_html__( 'Customers visit Albino every month to get their service done.', 'emyui-core' ),
        
        ]
    );
    $this->add_control(
        'title2faqbox',
        [
            'label' => esc_html__( 'Second Box Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '4.9/5.0', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'desc2faqbox',
        [
            'label' => esc_html__( 'Second Box Description', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'default' => esc_html__( 'Average customer ratings we have got all over internet.', 'emyui-core' ),
        
        ]
    );
       $this->end_controls_section();
       $this->start_controls_section(
        'ffaqbox',
        [
          'label' => esc_html__( 'FAQ', 'emyui-core' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
      $repeater = new \Elementor\Repeater();

      $repeater->add_control(
        'q1faqbox',
        [
            'label' => esc_html__( 'First Question', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'How Can I Order New Host ?', 'emyui-core' ),
    
        ]
    );
    $repeater->add_control(
        'a1faqbox',
        [
            'label' => esc_html__( 'First Answer', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'default' => esc_html__( 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            it has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 'emyui-core' ),
        
        ]
    );
    $this->add_control(
        'qafaqbox',
        [
            'label' => esc_html__( 'Question & Answer', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::REPEATER,
            'fields' => $repeater->get_controls(),
            'default' => [
                [
                    'q1faqbox' => esc_html__( 'How Can I Order New Host ?', 'emyui-core' ),
                    'a1faqbox' => esc_html__( 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    it has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 'emyui-core' ),
        
                ],
            ],
        ]
        );

       $this->end_controls_section();
       $this->start_controls_section(
        'socialfaqbox',
        [
          'label' => esc_html__( 'Social Accounts', 'emyui-core' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
      $this->add_control(
        'showsocialfaqbox',
        [
            'label' => esc_html__( 'Show Social', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::SWITCHER,
            'return_value' => 'yes',
            'default' => 'yes',
        ]
    );
    
    $this->add_control(
        'icon1faqbox',
        [
            'label' => esc_html__( 'Social Icons', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::ICON,
            'default' => 'fab fa-facebook-f ',
        ]
    );
    $this->add_control(
        'coloricon1faqbox',
        [
            'label' => esc_html__( 'Icon', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::COLOR,
        ]
    );
    $this->add_control(
        'social1faqbox',
        [
            'label' => esc_html__( 'Social Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '1,435,533', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'socials1faqbox',
        [
            'label' => esc_html__( 'Social Subtitle', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Followers', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'sociallink1faqbox',
        [
            'label' => esc_html__( 'Social Link', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '#', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'icon2faqbox',
        [
            'label' => esc_html__( 'Social Icons', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::ICON,
            'default' => 'fab fa-twitter',

        ]
    );
    $this->add_control(
        'coloricon2faqbox',
        [
            'label' => esc_html__( 'Icon Color', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::COLOR,
        ]
    );
    $this->add_control(
        'social2faqbox',
        [
            'label' => esc_html__( 'Social Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '143,32', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'socials2faqbox',
        [
            'label' => esc_html__( 'Social Subtitle', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Followers', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'sociallink2faqbox',
        [
            'label' => esc_html__( 'Social Link', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '#', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'icon3faqbox',
        [
            'label' => esc_html__( 'Social Icons', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::ICON,
            'default' => 'fab fa-youtube',
        ]
    );
    $this->add_control(
        'coloricon3faqbox',
        [
            'label' => esc_html__( 'Icon Color', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::COLOR,
        ]
    );
    $this->add_control(
        'social3faqbox',
        [
            'label' => esc_html__( 'Social Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '32,345', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'socials3faqbox',
        [
            'label' => esc_html__( 'Social Subtitle', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Followers', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'sociallink3faqbox',
        [
            'label' => esc_html__( 'Social Link', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '#', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'icon4faqbox',
        [
            'label' => esc_html__( 'Social Icons', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::ICON,
            'default' => 'fab fa-instagram',
        ]
    );
    $this->add_control(
        'coloricon4faqbox',
        [
            'label' => esc_html__( 'Icon Color', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::COLOR,
        ]
    );
    $this->add_control(
        'social4faqbox',
        [
            'label' => esc_html__( 'Social Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '32,345', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'socials4faqbox',
        [
            'label' => esc_html__( 'Social Subtitle', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Followers', 'emyui-core' ),
    
        ]
    );
    $this->add_control(
        'sociallink4faqbox',
        [
            'label' => esc_html__( 'Social Link', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( '#', 'emyui-core' ),
    
        ]
    );
}
  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>
            <div class="faq-section pt-13 pt-lg-25 pb-15 pb-md-20 pb-lg-32 white-mode-texts with-planet-bg overflow-hidden position-relative border-top">
                <!-- START footer top wave -->
                <svg class="bg-wave-box-end-z1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <defs>
                        <linearGradient id="footer-gradient">
                            <stop offset="0%" stop-color="#212433" />
                            <stop offset="39%" stop-color="#242837" />
                            <stop offset="100%" stop-color="#0e1019" />
                        </linearGradient>
                    </defs>
                    <path
                        fill="url(#footer-gradient)"
                        fill-opacity="1"
                        d="M0,128L80,138.7C160,149,320,171,480,192C640,213,800,235,960,234.7C1120,235,1280,213,1360,202.7L1440,192L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"
                    ></path>
                </svg>
                <!-- END footer top wave -->

                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-10 col-lg-6 col-xl-5">
                            <div class="section-title content-text mb-13 mb-lg-16">
                                <h2 class="title coodiv-text-5 mb-6"><?php echo  esc_html($settings['titlefaqbox']); ?></h2>
                                <p class="coodiv-text-8"><?php echo  esc_html($settings['descfaqbox']); ?></p>
                            </div>
                            <div class="content-widget">
                                <div class="stats-wrapper mt-6 mt-md-0">
                                    <div class="row mx-0">
                                        <div class="box-with-shadow numberbox" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                                            <h3 class="title one"><?php echo  esc_html($settings['title1faqbox']); ?></h3>
                                            <p class="sub-text"><?php echo  esc_html($settings['desc1faqbox']); ?></p>
                                        </div>
                                        <div class="box-with-shadow numberbox" data-aos="fade-left" data-aos-duration="1800" data-aos-once="true">
                                            <h3 class="title two"><?php echo  esc_html($settings['title2faqbox']); ?></h3>
                                            <p class="sub-text"><?php echo  esc_html($settings['desc2faqbox']); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ dinamic filter -->
                        <div class="col-md-10 col-lg-6 col-xl-6 offset-xl-1 mt-9 mt-lg-0" data-aos="fade-left" data-aos-duration="1200" data-aos-once="true">
                            <div class="dinamic-filter-container">
                                <i class="fas fa-search"></i>
                                <input type="text" id="dinamic-filter-input" onkeyup="FilterListSection()" placeholder="جستجوی سوالات متداول..." />
                            </div>
                            <div class="dinamic-filter-list-container">
                            <?php		if ( $settings['qafaqbox'] ) {
                                    $fq2box = 1 ;
                                    foreach (  $settings['qafaqbox'] as $item ) {?>
                                <div class="filter-content-box" id="go-to-qst-0<?php echo esc_attr($fq2box); ?>-content">
                                    <span class="filter-content-close" data-toggle="tooltip" data-placement="bottom" data-original-title="close">
                                        <span class="first-stright"></span>
                                        <span class="second-stright"></span>
                                    </span>
                                    <h5><?php echo  esc_html($item['q1faqbox']); ?></h5>
                                    <p>
                                    <?php echo  esc_html($item['a1faqbox']); ?>
                                    </p>
                                </div>
                                <?php $fq2box= $fq2box+1; }
                            
                               }?>
                                <ul id="dinamic-filter-list">
                                <?php		if ( $settings['qafaqbox'] ) {
                                                $fq2box = 1 ;

                                    foreach (  $settings['qafaqbox'] as $item ) {?>
                                    <li>
                                        <a id="go-to-qst-0<?php echo esc_attr($fq2box); ?>"><?php echo  esc_html($item['q1faqbox']); ?><i class="fas fa-angle-right"></i></a>
                                    </li> 
                                <?php $fq2box= $fq2box + 1;  }
                            
                              }?>

                                </ul>
                            </div>
                        </div>
                        <!-- END FAQ dinamic filter -->
                    </div>
                    
                    <?php
                    if ( 'yes' === $settings['showsocialfaqbox'] ) { ?>
                                        <!-- START social icons -->
                                        <div class="row justify-content-center social-numbers mt-lg-20 mt-10">
                        <a class="d-flex mr-lg-15 fb" href="<?php echo esc_attr( $settings['sociallink1faqbox'] ); ?>">
                            <i class="<?php echo esc_attr( $settings['icon1faqbox'] ); ?>"></i>
                            <h3><?php echo  esc_html($settings['social1faqbox']); ?><span><?php echo  esc_html($settings['socials1faqbox']); ?></span></h3>
                        </a>

                        <a class="d-flex mr-lg-15 tw" href="<?php echo esc_attr( $settings['sociallink2faqbox'] ); ?>">
                            <i class="fab fa-twitter"></i>
                            <h3><?php echo  esc_html($settings['social2faqbox']); ?><span><?php echo  esc_html($settings['socials2faqbox']); ?></span></h3>
                        </a>

                        <a class="d-flex mr-lg-15 you" href="<?php echo esc_attr( $settings['sociallink3faqbox'] ); ?>">
                            <i class="fab fa-youtube"></i>
                            <h3><?php echo  esc_html($settings['social3faqbox']); ?><span><?php echo  esc_html($settings['socials3faqbox']); ?></span></h3>
                        </a>

                        <a class="d-flex mr-lg-15 insta" href="<?php echo esc_attr( $settings['sociallink4faqbox'] ); ?>">
                            <i class="fab fa-instagram"></i>
                            <h3><?php echo  esc_html($settings['social4faqbox']); ?><span><?php echo  esc_html($settings['socials4faqbox']); ?></span></h3>
                        </a>
                    </div>
		<?php 
	}
    ?>

                    <!-- END social icons -->
                </div>
                <!-- END container -->
            </div>
            <!-- END FAQ section -->
            <style>
                .social-numbers a.fb i{color:<?php echo esc_attr( $settings['coloricon1faqbox'] ); ?>!important;}
                .social-numbers a.tw i{color:<?php echo esc_attr( $settings['coloricon2faqbox'] ); ?>!important;}
                .social-numbers a.you i{color:<?php echo esc_attr( $settings['coloricon3faqbox'] ); ?>!important;}
                .social-numbers a.insta i{color:<?php echo esc_attr( $settings['coloricon4faqbox'] ); ?>!important;}
                .social-numbers a.insta i{color:#7b38b3;background:<?php echo esc_attr( $settings['coloricon4faqbox'] ); ?>;-webkit-background-clip:text;-webkit-text-fill-color:transparent}
            </style>
<?php
}
  }

