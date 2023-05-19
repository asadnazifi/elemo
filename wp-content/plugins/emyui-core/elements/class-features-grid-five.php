<?php

namespace WPC\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly


class Feafive extends Widget_Base{

  public function get_name(){
    return 'feafive';
  }

  public function get_title(){
    return esc_html__( 'نظرات کاربران', 'emyui-core' );
  }

  public function get_icon(){
    return 'eicon-archive-posts';
  }

  public function get_categories(){
    return ['emyuielements'];
  }

  protected function register_controls(){
    
    $this->start_controls_section(
      'headingss',
      [
        'label' => esc_html__( 'Headings', 'emyui-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
    $this->add_control(
        'ti212',
        [
            'label' => esc_html__( 'Show Headings', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::SWITCHER,
            'label_on' => esc_html__( 'Show', 'your-plugin' ),
            'label_off' => esc_html__( 'Hide', 'your-plugin' ),
            'return_value' => 'yes',
            'default' => 'yes',
        ]
    );
    $this->add_control(
        'ti213',
        [
            'label' => esc_html__( 'Main Title', 'emyui-core' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'condition' => [ 'ti212' => 'yes' ],
            'default' => esc_html__( 'OUR MAIN FEATURES', 'emyui-core' ),
           
        ]
    );
    $this->add_control(
      'ti214',
      [
          'label' => esc_html__( 'Sub Title', 'emyui-core' ),
          'type' => \Elementor\Controls_Manager::TEXT,
          'condition' => [ 'ti212' => 'yes' ],
          'default' => esc_html__( 'Level up your web hosting with these must-haves.', 'emyui-core' ),
         
      ]
  );
 
    $this->end_controls_section();


      }

  protected function render(){
    $settings = $this->get_settings_for_display();
    ?>


<div class="service-section bg-default-4 pt-15 pb-13 py-lg-25 font_family_TKT">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-7 col-md-9">
                            <div class="section-title text-center mb-11 mb-lg-19 px-lg-3">
                                <h4 class="pre-title coodiv-text-12 text-red text-uppercase mb-7 font_family_TKT"><?php echo esc_html($settings['ti213']); ?></h4>
                                <h2 class="title coodiv-text-4 font_family_TKT"><?php echo esc_html($settings['ti214']); ?></h2>
                            </div>
                        </div>
                    </div>

                </div>
      <div class="mt-36 rtl container">
          <div class="row">
              <div class="col-lg-4 mt-10 lg:mt-0">
                  <div class="text-sm text-gray-500 font_family_TKT">
                      انچه مشتریان درباره ما می گویند
                  </div>
                  <div class="text-xl mt-2 font_family_TKT">
                      <span>افتخار میزبانی</span>
                      <br />
                      <span class="d-flex items-center font_family_TKT">
              از 181,111 کاربر
              <a href="#" class="text-blue-500">
                <div class="d-flex items-center text-sm mx-1 font_family_TKT">
                  <span>مشاهده برخی مشتریان</span>
                  <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="16"
                          height="16"
                          fill="currentColor"
                          class="bi bi-arrow-left-short"
                          viewBox="0 0 16 16"
                  >
                    <path
                            fill-rule="evenodd"
                            d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"
                    ></path>
                  </svg>
                </div>
              </a>
            </span>
                  </div>
                  <div class="mt-2">
                      <button class="btn_reg btn_theme text-white me-1 border-0 font_family_TKT">ثبت نظر</button>
                      <button class="btn_reg border border-black bg_withe font_family_TKT">مشاهده همه</button>
                  </div>
              </div>
              <div class="col-lg-8 mt-10 lg:mt-0 ">
                  <div
                          class="userComments rounded-15 bg-white padding p-6 shadow-lg userCommentSection " style="height: 256px">
                      <!-- // slides -->
                      <div class="swiper mySwiper">
                          <div class="swiper-wrapper">
                              <!-- // slide 1 -->
                              <div class="swiper-slide ">
                                  <div class="px-3 z-10">
                                      <!-- // user info -->
                                      <div class="d-flex justify-content-between items-center">
                                          <div class="d-flex  items-center">
                                              <div class="w-30">
                                                  <img
                                                          src="<?php echo get_template_directory_uri()?>/image/logo-main-black.png"
                                                          alt="alt"
                                                          class="rounded-circle"
                                                  />
                                              </div>
                                              <div class="mx-3 font_family_TKT">
                                                  <div>ملیکا شقاقی</div>
                                                  <div class="text-sm text-gray-500 text-bold mt-2">
                                                      userWeb.ir
                                                  </div>
                                              </div>
                                          </div>
                                          <div>
                                              <svg
                                                      xmlns="http://www.w3.org/2000/svg"
                                                      width="50"
                                                      height="50"
                                                      fill="#d8dee3"
                                                      class="bi bi-chat-quote-fill"
                                                      viewBox="0 0 16 16"
                                              >
                                                  <path
                                                          d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM7.194 6.766a1.688 1.688 0 0 0-.227-.272 1.467 1.467 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 5.734 6C4.776 6 4 6.746 4 7.667c0 .92.776 1.666 1.734 1.666.343 0 .662-.095.931-.26-.137.389-.39.804-.81 1.22a.405.405 0 0 0 .011.59c.173.16.447.155.614-.01 1.334-1.329 1.37-2.758.941-3.706a2.461 2.461 0 0 0-.227-.4zM11 9.073c-.136.389-.39.804-.81 1.22a.405.405 0 0 0 .012.59c.172.16.446.155.613-.01 1.334-1.329 1.37-2.758.942-3.706a2.466 2.466 0 0 0-.228-.4 1.686 1.686 0 0 0-.227-.273 1.466 1.466 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 10.07 6c-.957 0-1.734.746-1.734 1.667 0 .92.777 1.666 1.734 1.666.343 0 .662-.095.931-.26z"
                                                  />
                                              </svg>
                                          </div>
                                      </div>
                                      <!-- // user comment -->
                                      <div class="mt-3 text-gray-600">
                                          <p class="text-base">
                                              لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                                              چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون
                                              بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                                          </p>
                                      </div>
                                  </div>
                              </div>
                              <!-- // slide 2 -->
                              <div class="swiper-slide ">
                                  <div class="px-3 z-10">
                                      <!-- // user info -->
                                      <div class="flex justify-between items-center">
                                          <div class="flex items-center">
                                              <div>
                                                  <img
                                                          src="./src/pictures/user2.jpg"
                                                          alt="alt"
                                                          class="rounded-circle"
                                                  />
                                              </div>
                                              <div class="mx-3">
                                                  <div>نام کاربر</div>
                                                  <div class="text-sm text-gray-500 text-bold mt-2">
                                                      userTest.ir
                                                  </div>
                                              </div>
                                          </div>
                                          <div>
                                              <svg
                                                      xmlns="http://www.w3.org/2000/svg"
                                                      width="50"
                                                      height="50"
                                                      fill="#d8dee3"
                                                      class="bi bi-chat-quote-fill"
                                                      viewBox="0 0 16 16"
                                              >
                                                  <path
                                                          d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM7.194 6.766a1.688 1.688 0 0 0-.227-.272 1.467 1.467 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 5.734 6C4.776 6 4 6.746 4 7.667c0 .92.776 1.666 1.734 1.666.343 0 .662-.095.931-.26-.137.389-.39.804-.81 1.22a.405.405 0 0 0 .011.59c.173.16.447.155.614-.01 1.334-1.329 1.37-2.758.941-3.706a2.461 2.461 0 0 0-.227-.4zM11 9.073c-.136.389-.39.804-.81 1.22a.405.405 0 0 0 .012.59c.172.16.446.155.613-.01 1.334-1.329 1.37-2.758.942-3.706a2.466 2.466 0 0 0-.228-.4 1.686 1.686 0 0 0-.227-.273 1.466 1.466 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 10.07 6c-.957 0-1.734.746-1.734 1.667 0 .92.777 1.666 1.734 1.666.343 0 .662-.095.931-.26z"
                                                  />
                                              </svg>
                                          </div>
                                      </div>
                                      <!-- // user comment -->
                                      <div class="mt-3 text-gray-600">
                                          <p class="text-base">
                                              لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                                              چاپ و با استفاده از طراحان بلکه روزنامه و مجلهست
                                          </p>
                                      </div>
                                  </div>
                              </div>
                              <!-- // slide 3 -->
                              <div class="swiper-slide !opacity-0">
                                  <div class="px-3 z-10">
                                      <!-- // user info -->
                                      <div class="flex justify-between items-center">
                                          <div class="flex items-center">
                                              <div>
                                                  <img
                                                          src="./src/pictures/user1.jpg"
                                                          alt="alt"
                                                          class="rounded-circle"
                                                  />
                                              </div>
                                              <div class="mx-3">
                                                  <div>سینا ضیایی</div>
                                                  <div class="text-sm text-gray-500 text-bold mt-2">
                                                      sinaZ.info
                                                  </div>
                                              </div>
                                          </div>
                                          <div>
                                              <svg
                                                      xmlns="http://www.w3.org/2000/svg"
                                                      width="50"
                                                      height="50"
                                                      fill="#d8dee3"
                                                      class="bi bi-chat-quote-fill"
                                                      viewBox="0 0 16 16"
                                              >
                                                  <path
                                                          d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM7.194 6.766a1.688 1.688 0 0 0-.227-.272 1.467 1.467 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 5.734 6C4.776 6 4 6.746 4 7.667c0 .92.776 1.666 1.734 1.666.343 0 .662-.095.931-.26-.137.389-.39.804-.81 1.22a.405.405 0 0 0 .011.59c.173.16.447.155.614-.01 1.334-1.329 1.37-2.758.941-3.706a2.461 2.461 0 0 0-.227-.4zM11 9.073c-.136.389-.39.804-.81 1.22a.405.405 0 0 0 .012.59c.172.16.446.155.613-.01 1.334-1.329 1.37-2.758.942-3.706a2.466 2.466 0 0 0-.228-.4 1.686 1.686 0 0 0-.227-.273 1.466 1.466 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 10.07 6c-.957 0-1.734.746-1.734 1.667 0 .92.777 1.666 1.734 1.666.343 0 .662-.095.931-.26z"
                                                  />
                                              </svg>
                                          </div>
                                      </div>
                                      <!-- // user comment -->
                                      <div class="mt-3 text-gray-600">
                                          <p class="text-base">
                                              لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                                              چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون
                                              بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                              برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با
                                              هدف بهبود ابزارهای کاربردی می باشد
                                          </p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- // pagination btns -->
                          <div class="d-flex justify-content-end mt-2">
                              <div class="swiper-button-next__custom m-5 fon">
                                  <i class=" po-costum-next fa fa-arrow-right font-30"></i>
                              </div>
                              <div class="swiper-button-prev__custom m-5">
                                  <i class=" po-costum-prev fa fa-arrow-left font-30 "></i>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <script>
          var swiper = new Swiper(".mySwiper", {
              pagination: {
                  el: ".swiper-pagination",
                  type: "fraction",
              },
              navigation: {
                  nextEl: ".swiper-button-next__custom",
                  prevEl: ".swiper-button-prev__custom",
              },
          });

      </script>
    <?php
  }


}
