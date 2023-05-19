<?php
/**
* Template Name: Gutenberg Template
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/

get_header(); ?>


<?php global $emyuiredux; ?>
<!-- Hero Area -->                 
<div class="blog-background-image-overflow position-relative white-bg light-mode-texts pt-0"> 
<?php
if(class_exists('ReduxFramework') and class_exists('Boostify_Header_Footer_Builder')){ ?>
    <div class="dark-mode-texts pt-25 pb-25 pt-lg-29 pb-lg-27 bg-image" style="background-image: url('<?php echo esc_attr($emyuiredux['imgb1']['url']); ?>"> 
<?php }
else{ ?>
     <div class="dark-mode-texts pt-25 pb-25 pt-lg-29 pb-lg-27 bg-image" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/image/dedicated.jpg"> 
<?php }
?>   
        <div class="container"> 
            <div class="row justify-content-center"> 
                <div class="col-md-9 col-lg-7 col-xl-6"> 
                    <div class="text-center pt-10"> 
                        <h1 class="coodiv-text-4 mb-8"><?php wp_title( ' ' ); ?></h1>
                        <p class="coodiv-text-12 coodiv-text-color font-weight-bold text-uppercase mb-2"><?php the_time( get_option( 'date_format' ) ); ?></p> 
                    </div>                                     
                </div>                                 
            </div>                             
        </div>                         
    </div>                     
</div>



<?php 
if ( have_posts() ) {
while ( have_posts() ) {
the_post();
//
the_content();
//
} // end while
} // end if

 
 
get_footer(); ?>