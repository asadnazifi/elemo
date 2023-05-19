<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Incidenthistory extends Widget_Base{

  public function get_name(){
    return 'incidenthistory';
  }

  public function get_title(){
    return esc_html__( 'Incident History', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
      'tab0incidenthistory',
      [
        'label' => esc_html__( 'Content', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
    $this->add_control(
      'showtitleincidenthistory',
      [
          'label' => esc_html__( 'Show Title', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::SWITCHER,
          'return_value' => 'yes',
          'default' => 'yes',
      ]
  );

    $this->add_control(
			'titleincidenthistory',
			[
				'label' => esc_html__( 'Title', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'All incident history.', 'emyui-core' ),
			
			]
		);
    $this->add_control(
			'descincidenthistory',
			[
				'label' => esc_html__( 'Description', 'emyui-core' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Platea dictumst quisque sagittis purus. Tincidunt praesent semper feugiat nibh sed pulvinar. Tellus id interdum velit laoreet id donec ultrices tincidunt. Neque aliquam vestibulum morbi blandit cursus. Mi sit amet mauris commodo quis imperdiet.', 'emyui-core' ),
			
			]
		);
    $this->end_controls_section();
    $this->start_controls_section(
      'tab1incidenthistory',
      [
        'label' => esc_html__( 'Incident List', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
    $repeater = new \Elementor\Repeater();

    $repeater->add_control(
      'titleincidenthistory',
      [
          'label' => esc_html__( 'Main Title', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::TEXT,
          'default' => esc_html__( 'Coodiv Subscription and Browsing systems maintenance ', 'emyui-core' ),
  
      ]
  );
  $repeater->add_control(
    'titlelinkincidenthistory',
    [
        'label' => esc_html__( 'Main Title Link', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( '#', 'emyui-core' ),

    ]
);
  $repeater->add_control(
    'subtitleincidenthistory',
    [
        'label' => esc_html__( 'Subtitle', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( '16:22 by server manager', 'emyui-core' ),

    ]
);
$repeater->add_control(
  'title2incidenthistory',
  [
      'label' => esc_html__( 'Second Title', 'emyui-core' ),
      'type' => \Elementor\Controls_Manager::TEXT,
      'default' => esc_html__( 'Hosted Status Pages, Status Notifications, Developer API, Status API, Websites', 'emyui-core' ),

  ]
);
  $repeater->add_control(
      'descincidenthistory',
      [
          'label' => esc_html__( 'Description', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::TEXTAREA,
          'default' => esc_html__( ' Viverra aliquet eget sit amet tellus cras adipiscing. Nunc lobortis mattis aliquam faucibus purus in. Sem nulla pharetra diam sit. At lectus urna duis convallis convallis tellus id interdum velit
          sagittis aliquam. Amet consectetur adipiscing elit pellentesque habitant morbi tristique et....', 'emyui-core' ),
      
      ]
  );
  $repeater->add_control(
    'incincidenthistory',
    [
        'label' => esc_html__( 'Incident', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( 'Planned Maintenance', 'emyui-core' ),
  
    ]
  );
  $repeater->add_control(
    '1colorincidenthistory',
    [
      'label' => esc_html__( 'First Color', 'emyui-core' ),
      'type' => \Elementor\Controls_Manager::COLOR,
    ]
  );
  $repeater->add_control(
    '2colorincidenthistory',
    [
      'label' => esc_html__( 'Second Color', 'emyui-core' ),
      'type' => \Elementor\Controls_Manager::COLOR,
    ]
  );
  $repeater->add_control(
    'monthincidenthistory',
    [
        'label' => esc_html__( 'Month', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( 'March', 'emyui-core' ),
  
    ]
  );
  $repeater->add_control(
    'loc1incidenthistory',
    [
        'label' => esc_html__( 'Location one', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( 'Canada', 'emyui-core' ),
  
    ]
  );
  $repeater->add_control(
    'loc1linkidenthistory',
    [
        'label' => esc_html__( 'Location one', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( '#', 'emyui-core' ),
  
    ]
  );
  $repeater->add_control(
    'loc2incidenthistory',
    [
        'label' => esc_html__( 'Location two', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( 'IRELAND', 'emyui-core' ),
  
    ]
  );
  $repeater->add_control(
    'loc2linkidenthistory',
    [
        'label' => esc_html__( 'Location two', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( '#', 'emyui-core' ),
  
    ]
  );
  $repeater->add_control(
    'loc3incidenthistory',
    [
        'label' => esc_html__( 'Location three', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( 'SYDNEY', 'emyui-core' ),
  
    ]
  );
  $repeater->add_control(
    'loc3linkidenthistory',
    [
        'label' => esc_html__( 'Location three', 'emyui-core' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( '#', 'emyui-core' ),
  
    ]
  );
  $this->add_control(
      'inclistincidenthistory',
      [
          'label' => esc_html__( 'Incident List', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::REPEATER,
          'fields' => $repeater->get_controls(),
          'default' => [
              [
                  'titleincidenthistory' => esc_html__( 'Coodiv Subscription and Browsing systems maintenance', 'emyui-core' ),
                  'subtitleincidenthistory' => esc_html__( '16:22 by server manager', 'emyui-core' ),
                  'title2incidenthistory' => esc_html__( 'Hosted Status Pages, Status Notifications, Developer API, Status API, Websites', 'emyui-core' ),
                  'descincidenthistory' => esc_html__( 'Viverra aliquet eget sit amet tellus cras adipiscing. Nunc lobortis mattis aliquam faucibus purus in. Sem nulla pharetra diam sit. At lectus urna duis convallis convallis tellus id interdum velit
                  sagittis aliquam. Amet consectetur adipiscing elit pellentesque habitant morbi tristique et....', 'emyui-core' ),
                  'incincidenthistory' => esc_html__( 'Planned Maintenance', 'emyui-core' ),
                  'monthincidenthistory' => esc_html__( 'March', 'emyui-core' ),



      
              ],
          ],
      ]
      );
          $this->end_controls_section();
        }


  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>

<div class="main-content-section pb-2 pb-lg-20 border-bottom position-relative coodiv-z-index-2 mt-lg-n25">
                <div class="container">
             <?php   if ( 'yes' === $settings['showtitleincidenthistory'] ) { ?>
                    <div class="row justify-content-start">
                        <div class="section-title text-left mb-11 mb-lg-10 px-10">
                            <h2 class="coodiv-text-7 mb-0"><?php echo  esc_html($settings['titleincidenthistory']); ?></h2>
                            <p class="coodiv-text-9">
                            <?php echo  esc_html($settings['descincidenthistory']); ?></p>
                        </div>
                    </div>
              <?php }?>
                    <div class="incident-list pl-20 position-relative mt-15">
                    <?php		if ( $settings['inclistincidenthistory'] ) {

                                    foreach (  $settings['inclistincidenthistory'] as $item ) {?>
                        <div class="march-month incident-item position-relative border-bottom pt-10 pb-15" >
                            <span class="month-circle gradient-green-bg"><?php echo  esc_html($item['monthincidenthistory']); ?></span>

                            <div class="incident-header d-lg-flex justify-content-between align-items-center">
                                <a href="<?php echo  esc_url($item['titlelinkincidenthistory']); ?>" class="coodiv-text-7 color-blackish-blue font-weight-bold">
                                <?php echo  esc_html($item['titleincidenthistory']); ?><span class="d-block coodiv-text-11 color-blackish-blue-opacity font-weight-light"><?php echo  esc_html($item['subtitleincidenthistory']); ?></span>
                                </a>
                                <span class="bg-gradient-info white-text coodiv-text-12 font-weight-bold px-6 py-2 rounded-20" style="background:linear-gradient(90deg,<?php echo esc_attr( $item['1colorincidenthistory'] ); ?>,<?php echo esc_attr( $item['2colorincidenthistory'] ); ?>) !important"><?php echo  esc_html($item['incincidenthistory']); ?></span>
                            </div>

                            <div class="incident-body d-flex justify-content-between mt-11">
                                <div class="incident-discription">
                                    <h6 class="coodiv-text-10"><?php echo  esc_html($item['title2incidenthistory']); ?></h6>
                                    <p class="coodiv-text-11 mb-3">
                                    <?php echo  esc_html($item['descincidenthistory']); ?>
                                    </p>
                                    <ul class="status-location-list list-inline">
                                    <?php if(empty($item['loc1incidenthistory'])){ }else {   ?>                                  
                                        <li class="list-inline-item"><a href="<?php echo  esc_url($item['loc1linkidenthistory']); ?>"><?php echo  esc_html($item['loc1incidenthistory']); ?></a></li>
                                        <?php }  if(empty($item['loc2incidenthistory'])){ }else {   ?>
                                        <li class="list-inline-item"><a href="<?php echo  esc_url($item['loc2linkidenthistory']); ?>"><?php echo  esc_html($item['loc2incidenthistory']); ?></a></li>
                                        <?php }  if(empty($item['loc3incidenthistory'])){ }else {   ?>
                                        <li class="list-inline-item"><a href="<?php echo  esc_url($item['loc3linkidenthistory']); ?>"><?php echo  esc_html($item['loc3incidenthistory']); ?></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php  }
                          }?>
                    </div>
                </div>
            </div>
<style>
.bg-gradient-info{background:linear-gradient(90deg,<?php echo esc_attr( $settings['1colorincidenthistory'] ); ?>,<?php echo esc_attr( $settings['2colorincidenthistory'] ); ?> !important;)}

</style>
    <?php
  }


}
