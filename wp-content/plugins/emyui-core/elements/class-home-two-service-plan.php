<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Serviceplanone extends Widget_Base{

  public function get_name(){
    return 'serviceplan';
  }

  public function get_title(){
    return esc_html__( 'Service Plan', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){

//start slide two
    $this->start_controls_section(
      'slide2home2service1',
      [
        'label' => esc_html__( 'تنظیمات پلن', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );

//

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
                'imdfeature2imghome2service1',
                [
                    'label' => esc_html__( 'ایکون پلن', 'emyui-core' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'default' => [
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],

                ]
            );
            $repeater->add_control(
                'imlinkfeature2home2service155', [
                    'label' => esc_html__( 'نام پلن', 'emyui-core' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__( 'هاست اشتراکی' , 'emyui-core' ),

                ]
            );$repeater->add_control(
          'imlinkfeature2home2service12', [
              'label' => esc_html__( 'englishتایپ ', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'Shear host' , 'emyui-core' ),

          ]
      );
      $repeater->add_control(
          'imlinkfeature2home2service13', [
              'label' => esc_html__( 'توضیحات کوتاه پان', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'چبکی سادگی تیزی' , 'emyui-core' ),

          ]
      );
      $repeater->add_control(
          'imlinkfeature2home2service14', [
              'label' => esc_html__( 'توضیح کامل پلن', 'emyui-core' ),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__( 'برای همپین متنی باید از لورم اسپیوم استفاده کنم برجای این کارا' , 'emyui-core' ),

          ]
      );
        $this->add_control(
            'feature1img2home2service1',
            [
                'label' => esc_html__( 'اضافه کردن پلن', 'emyui-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'list_title' => esc_html__( 'پلن', 'emyui-core' ),
                    ],
                ],
            ]
        );

            $this->end_controls_section();
  }




  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>


	   <!-- START services plans section -->

	   <div class="sevrices-plans pt-11 pb-7 pt-lg-10 pb-lg-15 bg-default-6 fancy-animation-block-two position-relative">
                <div class="container">
                    <div class="row align-items-center" >
                        <?php if($settings['feature1img2home2service1']):?>
                            <?php foreach ($settings['feature1img2home2service1'] as $item):?>
                                <div class="col-lg-4 col-md-6 col-sm-12 box-shadow-1  rounded-3  mb-8" id="cart_df">
                                    <!-- .pricing card -->
                                    <div class="border-bottom-lg-0 pricing-plan-tree h-100 coodiv-hover-shadow-1 bg-white border text-center px-7 pt-6 pb-8 pb-lg-20 position-relative  coodiv-z-index-1  rounded-right-10-0-0">
                                <span class="py-5 coodiv-text-5 blue-text d-block fw-bold">
                                    <img src="<?php echo $item['imdfeature2imghome2service1']['url'];  ?>" alt="ایکون سرور">

                                </span>
                                        <h4 class="coodiv-text-6 mb-0 mt-5 mb-5 font_family_TKT"><?php echo $item['imlinkfeature2home2service155']?></h4>
                                        <p class="coodiv-text-11 mb-15 text-center font_family_TKT"><?php echo $item['imlinkfeature2home2service12']?></p>
                                        <h5 class="coodiv-text-6 mb-0 mt-5 mb-15 font_family_TKT"><?php echo $item['imlinkfeature2home2service13']?></h5>

                                        <p class="fw-100 coodiv-text-12 mt-2 mb-15"><?php echo $item['imlinkfeature2home2service14']?></p>

                                        <a class="btn btn-warning coodiv-text-11 d-block w-100 mt-5 font_family_TKT" href="http://localhost/elemo/contact-us/">هم اکنون خریداری کنید</a>
                                    </div>
                                    <!-- /.pricing carde Ends-->
                                </div>



                            <?php endforeach;?>



                        <?php endif;?>

<?php if( \Elementor\Plugin::$instance->editor->is_edit_mode() ) { ?>

<?php } ?>
    <?php
  }


}
