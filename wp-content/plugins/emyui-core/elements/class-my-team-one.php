<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Myteamone extends Widget_Base{

  public function get_name(){
    return 'myteamone';
  }

  public function get_title(){
    return esc_html__( 'Our Team one', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
        'contentmyteamone',
        [
          'label' => esc_html__( 'Content', 'emyui-core' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
  
      $this->add_control(
          'titlemyteamone',
          [
              'label' => esc_html__( 'Title', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Who we are', 'emyui-core' ),
      
          ]
      );
      $this->add_control(
        'subtitlemyteamone',
        [
            'label' => esc_html__( 'Sub Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'OUR TEAM
            ', 'emyui-core' ),
    
        ]
    );
      $this->add_control(
          'descmyteamone',
          [
              'label' => esc_html__( 'Description', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => esc_html__( 'We are technologists, designers, marketers, and educators but first and foremost, we are friends and colleagues. Our mission is to provide an easy-to-use, no-code, end-to-end automation solution that empowers individuals and teams to digitize business processes on their own. We believe in giving everyone the opportunity and power to focus on doing what they love while bringing teams, partners, and customers closer together in the process.', 'emyui-core' ),
      
          ]
      );
  
       $this->end_controls_section();
       $this->start_controls_section(
        'teammemberteamone',
        [
          'label' => esc_html__( 'Our Team Members', 'emyui-core' ),
                  'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
      );
          
       $repeater = new \Elementor\Repeater();

       $repeater->add_control(
               'imgteamone',
               [
                   'label' => esc_html__( 'image box', 'emyui-core' ),
                   'type' => \Elementor\Controls_Manager::MEDIA,
                   'default' => [
                       'url' => \Elementor\Utils::get_placeholder_image_src(),
                   ],
               
               ]
           );
           $repeater->add_control(
               'nameteamone', [
                   'label' => esc_html__( 'Feature', 'emyui-core' ),
                   'type' => \Elementor\Controls_Manager::TEXT,
                   'default' => esc_html__( 'Nedjai Mohamed' , 'emyui-core' ),
                   'label_block' => true,
               ]
           );
           $repeater->add_control(
            'jobteamone', [
                'label' => esc_html__( 'Feature', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'UI / UX Designer' , 'emyui-core' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'sociallogo1teamone', [
                'label' => esc_html__( 'Social Account', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::ICON,
				'default' => 'fa fa-facebook',
            ]
        );
        $repeater->add_control(
            'sociallink1teamone', [
                'label' => esc_html__( 'Social Link', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '#' , 'emyui-core' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'sociallogo2teamone', [
                'label' => esc_html__( 'Social Account', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::ICON,
				'default' => 'fa fa-twitter',
            ]
        );
        $repeater->add_control(
            'sociallink2teamone', [
                'label' => esc_html__( 'Social Link', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '#' , 'emyui-core' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'sociallogo3teamone', [
                'label' => esc_html__( 'Social Account', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::ICON,
				'default' => 'fa fa-instagram',
            ]
        );
        $repeater->add_control(
            'sociallink3teamone', [
                'label' => esc_html__( 'Social Link', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '#' , 'emyui-core' ),
                'label_block' => true,
            ]
        );
       $this->add_control(
           'memberteamone',
           [
               'label' => esc_html__( 'Features img', 'emyui-core' ),
               'type' => \Elementor\Controls_Manager::REPEATER,
               'fields' => $repeater->get_controls(),
               'default' => [
                   [
                       'list_title' => esc_html__( 'img', 'emyui-core' ),
                   ],
               ],
           ]
       );
       $this->end_controls_section();
    }
        
  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>

<div class="our-team-section pt-15 pt-lg-20 pb-lg-30 bg-default-1">
                <div class="container">
                    <div class="row justify-content-center align-items-center position-relative coodiv-z-index-2 mb-lg-10">
                        <div class="col-11 col-md-9 col-lg-9 order-lg-1" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
                            <div class="hero-content mt-11 mt-lg-0 text-center">
                                <h4 class="pre-title coodiv-text-12 text-red text-uppercase mb-2"><?php echo esc_html($settings['subtitlemyteamone']); ?></h4>
                                <h1 class="title coodiv-text-5 mb-5"><?php echo esc_html($settings['titlemyteamone']); ?></h1>
                                <p class="coodiv-text-9 mb-11"><?php echo esc_html($settings['descmyteamone']); ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="our-team-group row justify-content-center mb-10">
                         <?php if ( $settings['memberteamone'] ) {
                                			foreach (  $settings['memberteamone'] as $item ) {
			                                    	 ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="our-team-item white-bg border-opacity shadow-2 px-7 pt-7 pb-10 rounded-20 mb-15">
                                <img class="rounded-20 w-100 mb-8" src="<?php echo esc_url($item['imgteamone']['url']); ?>" alt="<?php echo esc_attr(\Elementor\Control_Media::get_image_alt( $item['imgteamone'] )); ?>" />
                                <h5 class="team-title coodiv-text-6 d-block pl-3 mb-6"><?php echo esc_html($item['nameteamone']); ?><small class="d-block color-blackish-blue-opacity coodiv-text-10"><?php echo esc_html($item['jobteamone']) ; ?></small></h5>
                                <div class="team-social-accounts d-flex px-3">
                                    <a href="<?php echo esc_url($item['sociallink1teamone']); ?>"><i class="<?php echo esc_attr( $item['sociallogo1teamone'] ); ?>"></i></a>
                                    <a href="<?php echo esc_url($item['sociallink2teamone']); ?>"><i class="<?php echo esc_attr( $item['sociallogo2teamone'] ); ?>"></i></a>
                                    <a href="<?php echo esc_url($item['sociallink3teamone']); ?>"><i class="<?php echo esc_attr( $item['sociallogo3teamone'] ); ?>"></i></a>
                                </div>
                            </div>
                        </div>
                        <?php } }?>
                    </div>
                </div>
            </div>

    <?php
  }


}
