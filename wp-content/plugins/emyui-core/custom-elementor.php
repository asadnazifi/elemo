<?php
namespace WPC;

// use Elementor\Plugin;

class Widget_Loader{

  private static $_instance = null;

  public static function instance()
  {
    if (is_null(self::$_instance)) {
      self::$_instance = new self();
    }
    return self::$_instance;
  }


  private function include_widgets_files(){
    require_once(__DIR__ . '/elements/class-home-two-hero.php');
    require_once(__DIR__ . '/elements/class-home-two-service-plan.php');
    require_once(__DIR__ . '/elements/class-home-two-review.php');
    require_once(__DIR__ . '/elements/class-home-two-service-tabs.php');
    require_once(__DIR__ . '/elements/class-home-two-service-whyus.php');
    require_once(__DIR__ . '/elements/class-home-two-service-tslider.php');
    require_once(__DIR__ . '/elements/class-hero-about.php');
    require_once(__DIR__ . '/elements/class-home-four-hero.php');
    require_once(__DIR__ . '/elements/class-home-browser.php');
    require_once(__DIR__ . '/elements/class-home-two-teamwork.php');
    require_once(__DIR__ . '/elements/class-features-one.php');
    require_once(__DIR__ . '/elements/class-features-two.php');
    require_once(__DIR__ . '/elements/class-features-grid-one.php');
    require_once(__DIR__ . '/elements/class-features-grid-two.php');
    require_once(__DIR__ . '/elements/class-features-faq.php');
    require_once(__DIR__ . '/elements/class-home-three-hero.php');
    require_once(__DIR__ . '/elements/class-features-grid-three.php');
    require_once(__DIR__ . '/elements/emyui-header-button.php');
    require_once(__DIR__ . '/elements/emyui-header-mega-one.php');
    require_once(__DIR__ . '/elements/emyui-header-mega-two.php');
    require_once(__DIR__ . '/elements/emyui-header-mega-three.php');
    require_once(__DIR__ . '/elements/emyui-header-mega-four.php');
    require_once(__DIR__ . '/elements/emyui-header-mega-five.php');
    require_once(__DIR__ . '/elements/emyui-header-mega-six.php');
    require_once(__DIR__ . '/elements/class-home-three-data-map.php');
    require_once(__DIR__ . '/elements/class-features-grid-five.php');
    require_once(__DIR__ . '/elements/class-main-pricing.php');
    require_once(__DIR__ . '/elements/class-main-pricing-two.php');
    require_once(__DIR__ . '/elements/class-server-status.php');
    require_once(__DIR__ . '/elements/class-about-section-two.php');
    require_once(__DIR__ . '/elements/class-feature-three.php');
    require_once(__DIR__ . '/elements/class-my-team-one.php');
    require_once(__DIR__ . '/elements/class-feature-four.php');
    require_once(__DIR__ . '/elements/class-feature-five.php');
    require_once(__DIR__ . '/elements/class-home-one-hero.php');
    require_once(__DIR__ . '/elements/class-feature-six.php');
    require_once(__DIR__ . '/elements/class-image-desc.php');
    require_once(__DIR__ . '/elements/class-image-price-box.php');
    require_once(__DIR__ . '/elements/class-three-step-start.php');
    require_once(__DIR__ . '/elements/class-video-back.php');
    require_once(__DIR__ . '/elements/class-blog-element.php');
    require_once(__DIR__ . '/elements/class-faq-box.php');
    require_once(__DIR__ . '/elements/class-help-center-hero.php');
    require_once(__DIR__ . '/elements/class-help-center-question.php');
    require_once(__DIR__ . '/elements/class-feature-seven.php');
    require_once(__DIR__ . '/elements/class-social-accounts.php');
    require_once(__DIR__ . '/elements/class-incident-history-hero.php');
    require_once(__DIR__ . '/elements/class-incident-history.php');
    require_once(__DIR__ . '/elements/class-service-plan-two.php');
    require_once(__DIR__ . '/elements/class-how-order.php');
    require_once(__DIR__ . '/elements/class-price-box-two.php');
    require_once(__DIR__ . '/elements/class-hero-minecraft.php');
    require_once(__DIR__ . '/elements/class-minecraft-box.php');
    require_once(__DIR__ . '/elements/class-hero-wordpress-hosting.php');
    require_once(__DIR__ . '/elements/class-feature-eight.php');
    require_once(__DIR__ . '/elements/class-contact.php');
    require_once(__DIR__ . '/elements/class-two-box.php');
    require_once(__DIR__ . '/elements/class-feature-ninth-style.php');
    require_once(__DIR__ . '/elements/class-home-five-hero.php');
    require_once(__DIR__ . '/elements/class-features-ten.php');
    require_once(__DIR__ . '/elements/class-app-download-box.php');
    require_once(__DIR__ . '/elements/class-three-step-second-style.php');
    require_once(__DIR__ . '/elements/class-home-five-testimonials.php');
    require_once(__DIR__ . '/elements/class-price-box-three.php');
    require_once(__DIR__ . '/elements/class-home-six-hero.php');
    require_once(__DIR__ . '/elements/class-home-six-brands.php');
    require_once(__DIR__ . '/elements/class-features-eleven.php');
    require_once(__DIR__ . '/elements/class-image-emy.php');
    require_once(__DIR__ . '/elements/class-heading.php');
    require_once(__DIR__ . '/elements/class-offer-free-trial.php');
    require_once(__DIR__ . '/elements/class-home-eight-hero.php');
	require_once(__DIR__ . '/elements/class-domain-one.php');
    require_once(__DIR__ . '/elements/class-domain-two.php');

  }

  
  public function register_widgets(){
    $this->include_widgets_files();
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Hero_two());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Serviceplanone());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Reviewone());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Serviceplanonetab());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Whyus());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Tslider());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Heroabout());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Herofour());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Browser());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Teamwork());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Feaone());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Featwo());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Gridone());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Gridtwo());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Faqone());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Hero_three());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Gridtthree());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Emyheaderbut());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Emymegaone());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Emymegatwo());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Emymegathree());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Emymegafour());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Emymegafive());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Emymegasix());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Datamap());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Feafive());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Mainpricing());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Mainpricingtwo());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Serverstatus());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Aboutcontent());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Featurethree());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Myteamone());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Featurefour());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Featurefive());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Hero_one());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Featuresix());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Imagedescription());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Imagepricebox());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Threestep());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Videobackground());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Blogelement());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Faqbox());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Helphero());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Helpcenterq());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Featureseven());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Socialaccounts());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Incidenthistoryhero());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Incidenthistory());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Serviceplantwo());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Howorder());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Priceboxtwo());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Herominecraft());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Minecraftbox());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Herowordpresshosting());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Featureight());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Contactt());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Twobox());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Featurenine());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Hero_five());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Featuresten());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Appdownloadbox());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Threestepsecondstyle());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Testimonials());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Priceboxthree());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Hero_six());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Brands());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Feature_eleven());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Imageemy());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\headingwidget());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Offer());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Heroeight());
	\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Domainone());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Domaintwo());

  }

  public function __construct(){
    add_action('elementor/widgets/widgets_registered', [$this, 'register_widgets'], 99);
  }
}

// Instantiate Plugin Class
Widget_Loader::instance();





