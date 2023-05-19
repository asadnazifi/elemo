<?php get_header(); ?>
<div class="hero-area-coodiv position-relative gradient-blue-bg text-page-hero">
                <div class="header-hero-backgrounds">
                    <div id="particles-bg"></div>
                    <div class="t-first"><img class="layer layer2" data-depth="-0.20" src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/header/planet.png" alt="thumbnail" /></div>
                    <div class="t-second"><img class="layer layer2" data-depth="-0.20" src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/header/sat.png" alt="thumbnail" /></div>
                </div>
            </div>

<div class="text-center">
<img class="m404im" src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/404.png" alt="404">
<h2 class="title coodiv-text-4 mb-6 tutme"><?php esc_html_e('Oops! That page can’t be found','emyui'); ?></h2>
        <div class="header-btn ml-auto ml-lg-10 mr-5 d-none d-xs-block position-relative butme"> 
                            <a class="btn btn-red coodiv-text-9" href="<?php echo esc_url(get_home_url()); ?>"><?php esc_html_e( 'Back To Home', 'emyui' ); ?></a>                        
</div>                         
</div>            


<?php get_footer(); ?>