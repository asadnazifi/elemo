<?php get_header();
if(class_exists('ReduxFramework') and class_exists('Boostify_Header_Footer_Builder')){ 
global $emyuiredux; 
$ggf = $emyuiredux['optmine'];
} 
function emyui_limit_words($string, $word_limit)
{
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,$word_limit));
}

?>

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
                        <h1 class="coodiv-text-4 mb-8"><?php wp_title( '  ' ); ?></h1> 
                    </div>                                     
                </div>                                 
            </div>                             
        </div>                         
    </div>                     
</div>                 
<div class="breadcrumb-container bg-default-2"> 
    <div class="container pt-10"> 
        <div class="row justify-content-center"> 
            <div class="col-lg-12"> 
                <nav aria-label="breadcrumb"> 
                    <ol class="breadcrumb bg-default rounded-20"> 
                        <li class="breadcrumb-item">
                            <a href="<?php echo esc_url( home_url() ); ?>"><?php esc_html_e( 'HomePage', 'emyui' ); ?></a>
                        </li>                                         
                        <li class="breadcrumb-item">
                            <a href="<?php echo esc_url( get_post_type_archive_link( 'post' ) ); ?>"><?php wp_title( ' ' ); ?></a>
                        </li>                                                                                  
                        <li class="ml-auto"> 
                            <a class="breadcrumb-back d-block" href="<?php echo esc_url( home_url() ); ?>"><i class="feather icon-chevron-left"></i></a> 
                        </li>                                         
                    </ol>                                     
                </nav>                                 
            </div>                             
        </div>                         
    </div>                     
</div>  


<?php if(class_exists('ReduxFramework') and class_exists('Boostify_Header_Footer_Builder')){ ?>
<?php if($ggf == 1){ ?>
    <div class="blog-section bg-default-2 pb-2 pt-lg-10 pb-lg-20 pt-8 position-relative"> 
    <div class="container"> 
        <div class="container-sidebar row justify-content-center"> 
            <div class="single-post-container col-lg-12 col-md-12"> 
                <div class="helf-single-post-width row justify-content-start mb-lg-10"> 
                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                        <div <?php post_class( 'col-lg-4 col-md-12 emymarg' ); ?>>
                                <div class="single-post full-img-fluid-post coodiv-hover-rotate-img"> 
                                <?php if ( has_post_thumbnail() ) { ?>
                                    <div class="case-img overflow-hidden"> 
                                          <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php get_bloginfo( 'name' ); ?>" class="rounded-10" />
                                    </div>     
                                    <?php } ?>                                                
                                    <div class="single-post-content"> 
                                        <div class="media"> 
                                            <a href="#" class="review-avatar mr-7 shadow-2"> <?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?> </a> 
                                            <div class="media-body review-content"> 
                                                <div class="d-flex align-items-center"> 
                                                    <div class="review-author-wrap"> 
                                                        <a href="<?php echo get_author_posts_url( false, get_the_author_meta( 'user_nicename', false ) ) ?>" class="single-post-category"><?php echo get_the_author_meta( 'display_name', false ) ?></a> 
                                                        <a href="<?php echo esc_url( get_permalink() ); ?>" class="single-post-title"><?php the_title(); ?></a> 
                                                    </div>                                                                     
                                                                                                                   
                                                </div>                                                                 
                                            </div>                                                             
                                        </div>                                                         
                                        <div class="review-text mt-5"> 
                                            <p class="coodiv-text-11 white-text font-weight-light"><?php echo emyui_limit_words(get_the_excerpt(),20). "..."; ?></p> 
                                        </div>                                                         
                                    </div>                                                     
                                    <div class="single-post-footer justify-content-between"> 
                                        <a class="comments" href="<?php echo esc_url( get_permalink() ); ?>"><i class="feather icon-message-circle"></i> <span><?php 

$comcountc = get_comments_number();

if($comcountc == 1){
    echo get_comments_number();  esc_html_e( ' Comment', 'emyui' );
}
elseif($comcountc > 1){
    echo get_comments_number();  esc_html_e( ' Comments', 'emyui' );
}
elseif($comcountc == 0){
    esc_html_e( 'No Comments', 'emyui' );
}

?></span></a> 
                                        
                                    </div>                                                     
                                </div>                                                 
                            </div>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'emyui' ); ?></p>
                    <?php endif; ?>                                                                           
                </div>                                                                                                   
            </div>                             
        </div>    
                    
        <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
        $total_post_count = wp_count_posts();
        $published_post_count = $total_post_count->publish;
        $total_pages = ceil( $published_post_count / $posts_per_page );  
        ?>           
            <div class="older-newes-buttons row justify-content-center position-relative mt-20 mb-10 mb-lg-0"> 
                <a class="btn btn-white coodiv-text-11 font-weight-light col-lg-4 rounded-left-10 rounded-right-0 icon-btn" href="<?php echo get_next_posts_page_link() ?>"><i class="feather icon-chevron-left"></i></a>
                <?php for( $paged = 1; $paged <= $total_pages; $paged++) : ?>
                    <a class="btn btn-white coodiv-text-11 font-weight-light col-lg-4 rounded-left-10 rounded-right-0 icon-btn mian" href="<?php echo esc_url( get_pagenum_link( $paged ) ) ?>"><?php echo esc_html($paged); ?></a>
                <?php endfor; ?>
                <a class="btn btn-white coodiv-text-11 font-weight-light col-lg-4 rounded-left-10 rounded-right-0 icon-btn baad" href="<?php echo get_previous_posts_page_link() ?>"><i class="feather icon-chevron-right"></i></a> 
                     <div class="comnon"><?php the_posts_pagination(); wp_link_pages();  comment_form(); wp_list_comments(); the_comments_navigation(); ?> </div> 
            </div>
    </div>   
</div> 


<?php } ?>

<?php if($ggf == 2){ ?>


<div class="blog-section bg-default-2 pb-2 pt-lg-10 pb-lg-20 pt-8 position-relative">
                <div class="container">
                    <div class="container-sidebar row justify-content-start">
                        <div class="single-post-container col-lg-8 col-md-12">
                            <div class="helf-single-post-width row justify-content-start mb-10">
                            <?php 
                            if ( have_posts() ) : 
                                while ( have_posts() ) : the_post();  ?>

<div class="col-lg-6 col-md-12 emymarg">
                                    <div class="single-post full-img-fluid-post coodiv-hover-rotate-img">
                                    <?php if ( has_post_thumbnail() ) { ?>
                                        <div class="case-img overflow-hidden">
                                            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php get_bloginfo( 'name' ); ?>" class="rounded-10" />
                                        </div>
                                        <?php } ?>
                                        <div class="single-post-content">
                                            <div class="media">
                                                <a href="<?php echo esc_url( get_permalink() ); ?>" class="review-avatar mr-7 shadow-2">
                                                <?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?>
                                                </a>
                                                <div class="media-body review-content">
                                                    <div class="d-flex align-items-center">
                                                        <div class="review-author-wrap">
                                                            <a href="<?php echo get_author_posts_url( false, get_the_author_meta( 'user_nicename', false ) ) ?>" class="single-post-category"><?php echo get_the_author_meta( 'display_name', false ) ?></a>
                                                            <a href="<?php echo esc_url( get_permalink() ); ?>" class="single-post-title"><?php the_title(); ?></a>
                                                        </div>
                                                        <!-- action -->
                                                       
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="review-text mt-5">
                                                <p class="coodiv-text-11 white-text font-weight-light">
                                                <?php echo emyui_limit_words(get_the_excerpt(),20). "..."; ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="single-post-footer justify-content-between">
                                            <a class="comments" href="<?php echo esc_url( get_permalink() ); ?>"><i class="feather icon-message-circle"></i> <span><?php 

$comcountc = get_comments_number();

if($comcountc == 1){
    echo get_comments_number();  esc_html_e( ' Comment', 'emyui' );
}
elseif($comcountc > 1){
    echo get_comments_number();  esc_html_e( ' Comments', 'emyui' );
}
elseif($comcountc == 0){
    esc_html_e( 'No Comments', 'emyui' );
}

?></span></a>
                                          
                                        </div>
                                    </div>
                                </div>



                              <?php  endwhile; 
                            endif; 
                            ?>
                                

                                
                            </div>

                           
                        </div>

                        <div id="sidebar" class="widget blog-sidebar col-lg-4 col-md-12 px-0">
                            <div class="sidebar__inner">   	
                            <?php dynamic_sidebar( 'primary' ); ?>
                            </div>
                        </div>
                    </div>


                    <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
        $total_post_count = wp_count_posts();
        $published_post_count = $total_post_count->publish;
        $total_pages = ceil( $published_post_count / $posts_per_page );  
        ?>           
            <div class="older-newes-buttons row justify-content-center position-relative mt-20 mb-10 mb-lg-0"> 
                <a class="btn btn-white coodiv-text-11 font-weight-light col-lg-4 rounded-left-10 rounded-right-0 icon-btn" href="<?php echo get_next_posts_page_link() ?>"><i class="feather icon-chevron-left"></i></a>
                <?php for( $paged = 1; $paged <= $total_pages; $paged++) : ?>
                    <a class="btn btn-white coodiv-text-11 font-weight-light col-lg-4 rounded-left-10 rounded-right-0 icon-btn mian" href="<?php echo esc_url( get_pagenum_link( $paged ) ) ?>"><?php echo esc_html($paged); ?></a>
                <?php endfor; ?>
                <a class="btn btn-white coodiv-text-11 font-weight-light col-lg-4 rounded-left-10 rounded-right-0 icon-btn baad" href="<?php echo get_previous_posts_page_link() ?>"><i class="feather icon-chevron-right"></i></a> 
                     <div class="comnon"><?php the_posts_pagination(); wp_link_pages();  comment_form(); wp_list_comments(); the_comments_navigation(); ?> </div> 
            </div>
                </div>
            </div>


<?php } ?>


<?php if($ggf == 3){ ?>
    <div class="blog-section bg-default-2 pb-2 pt-lg-10 pb-lg-20 pt-8 position-relative">
                <div class="container">
                    <div class="container-sidebar row justify-content-start">
     
                        <div class="single-post-container col-lg-8 col-md-12 emymarg">
                        <?php 
                            if ( have_posts() ) : 
                                while ( have_posts() ) : the_post();  ?>
                            <div class="single-post full-img-fluid-post coodiv-hover-rotate-img">
                            <?php if ( has_post_thumbnail() ) { ?>
                                <div class="case-img overflow-hidden">
                                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php get_bloginfo( 'name' ); ?>" class="rounded-10" />
                                </div>
                                <?php } ?>
                                <div class="single-post-content">
                                    <div class="media">
                                        <a href="<?php echo esc_url( get_permalink() ); ?>" class="review-avatar mr-7 shadow-2">
                                        <?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?>
                                        </a>
                                        <div class="media-body review-content">
                                            <div class="d-flex align-items-center">
                                                <div class="review-author-wrap">
                                                    <a href="<?php echo get_author_posts_url( false, get_the_author_meta( 'user_nicename', false ) ) ?>" class="single-post-category"><?php echo get_the_author_meta( 'display_name', false ) ?></a>
                                                    <a href="<?php echo esc_url( get_permalink() ); ?>" class="single-post-title"><?php the_title(); ?></a>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>

                                    <div class="review-text mt-5">
                                        <p class="coodiv-text-11 white-text font-weight-light"><?php echo emyui_limit_words(get_the_excerpt(),20). "..."; ?></p>
                                    </div>
                                </div>
                                <div class="single-post-footer justify-content-between">
                                    <a class="comments" href="<?php echo esc_url( get_permalink() ); ?>"><i class="feather icon-message-circle"></i> <span><?php 

$comcountc = get_comments_number();

if($comcountc == 1){
    echo get_comments_number();  esc_html_e( ' Comment', 'emyui' );
}
elseif($comcountc > 1){
    echo get_comments_number();  esc_html_e( ' Comments', 'emyui' );
}
elseif($comcountc == 0){
   esc_html_e( 'No Comments', 'emyui' );
}

?></span></a>
                                 
                                </div>
                            </div>

                            <?php  endwhile; 
                            endif; 
                            ?>
                        </div>
                       
                        <div id="sidebar" class="widget blog-sidebar col-lg-4 col-md-12 px-0">
                            <div class="sidebar__inner">
                            <?php dynamic_sidebar( 'primary' ); ?>
                            </div>
                        </div>
                    </div>

                    <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
        $total_post_count = wp_count_posts();
        $published_post_count = $total_post_count->publish;
        $total_pages = ceil( $published_post_count / $posts_per_page );  
        ?>           
            <div class="older-newes-buttons row justify-content-center position-relative mt-20 mb-10 mb-lg-0"> 
                <a class="btn btn-white coodiv-text-11 font-weight-light col-lg-4 rounded-left-10 rounded-right-0 icon-btn" href="<?php echo get_next_posts_page_link() ?>"><i class="feather icon-chevron-left"></i></a>
                <?php for( $paged = 1; $paged <= $total_pages; $paged++) : ?>
                    <a class="btn btn-white coodiv-text-11 font-weight-light col-lg-4 rounded-left-10 rounded-right-0 icon-btn mian" href="<?php echo esc_url( get_pagenum_link( $paged ) ) ?>"><?php echo esc_html($paged); ?></a>
                <?php endfor; ?>
                <a class="btn btn-white coodiv-text-11 font-weight-light col-lg-4 rounded-left-10 rounded-right-0 icon-btn baad" href="<?php echo get_previous_posts_page_link() ?>"><i class="feather icon-chevron-right"></i></a> 
                     <div class="comnon"><?php the_posts_pagination(); wp_link_pages();  comment_form(); wp_list_comments(); the_comments_navigation(); ?> </div> 
            </div>
                </div>
            </div>
    
<?php } ?>


<?php } else{ ?>
    <div class="blog-section bg-default-2 pb-2 pt-lg-10 pb-lg-20 pt-8 position-relative nosetup"> 
    <div class="container"> 
        <div class="container-sidebar row justify-content-center"> 
            <div class="single-post-container col-lg-12 col-md-12"> 
                <div class="helf-single-post-width row justify-content-start mb-lg-10"> 
                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                        
                            <div class="col-lg-4 col-md-12 emymarg <?php if(is_sticky()){ ?>stickp<?php } ?>">
                                <div class="single-post full-img-fluid-post coodiv-hover-rotate-img"> 
                                <?php if ( has_post_thumbnail() ) { ?>
                                    <div class="case-img overflow-hidden"> 
                                         <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php get_bloginfo( 'name' ); ?>" class="rounded-10" />
                                    </div>  
                                     <?php } ?>                                                   
                                    <div class="single-post-content"> 
                                        <div class="media"> 
                                            <a href="#" class="review-avatar mr-7 shadow-2"> <?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?> </a> 
                                            <div class="media-body review-content"> 
                                                <div class="d-flex align-items-center"> 
                                                    <div class="review-author-wrap"> 
                                                        <a href="<?php echo get_author_posts_url( false, get_the_author_meta( 'user_nicename', false ) ) ?>" class="single-post-category"><?php echo get_the_author_meta( 'display_name', false ) ?></a> 
                                                        <a href="<?php echo esc_url( get_permalink() ); ?>" class="single-post-title"><?php the_title(); ?></a> 
                                                    </div>                                                                     
                                                                                                                   
                                                </div>                                                                 
                                            </div>                                                             
                                        </div>                                                         
                                        <div class="review-text mt-5"> 
                                            <p class="coodiv-text-11 white-text font-weight-light"><?php echo emyui_limit_words(get_the_excerpt(),20). "..."; ?></p> 
                                        </div>                                                         
                                    </div>                                                     
                                    <div class="single-post-footer justify-content-between"> 
                                        <a class="comments" href="<?php echo esc_url( get_permalink() ); ?>"><i class="feather icon-message-circle"></i> <span><?php 

$comcountc = get_comments_number();

if($comcountc == 1){
    echo get_comments_number();  esc_html_e( ' Comment', 'emyui' );
}
elseif($comcountc > 1){
    echo get_comments_number();  esc_html_e( ' Comments', 'emyui' );
}
elseif($comcountc == 0){
    esc_html_e( 'No Comments', 'emyui' );
}

?></span></a> 
                                        
                                    </div>                                                     
                                </div>                                                 
                            </div>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'emyui' ); ?></p>
                    <?php endif; ?>                                                                           
                </div>                                                                                                   
            </div>                             
        </div>    
                    
        <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
        $total_post_count = wp_count_posts();
        $published_post_count = $total_post_count->publish;
        $total_pages = ceil( $published_post_count / $posts_per_page );  
        ?>           
            <div class="older-newes-buttons row justify-content-center position-relative mt-20 mb-10 mb-lg-0"> 
                <a class="btn btn-white coodiv-text-11 font-weight-light col-lg-4 rounded-left-10 rounded-right-0 icon-btn" href="<?php echo get_next_posts_page_link() ?>"><i class="feather icon-chevron-left"></i></a>
                <?php for( $paged = 1; $paged <= $total_pages; $paged++) : ?>
                    <a class="btn btn-white coodiv-text-11 font-weight-light col-lg-4 rounded-left-10 rounded-right-0 icon-btn mian" href="<?php echo esc_url( get_pagenum_link( $paged ) ) ?>"><?php echo esc_html($paged); ?></a>
                <?php endfor; ?>
                <a class="btn btn-white coodiv-text-11 font-weight-light col-lg-4 rounded-left-10 rounded-right-0 icon-btn baad" href="<?php echo get_previous_posts_page_link() ?>"><i class="feather icon-chevron-right"></i></a> 
                     <div class="comnon"><?php the_posts_pagination(); wp_link_pages();  comment_form(); wp_list_comments(); the_comments_navigation(); ?> </div> 
            </div>
      
    </div>   
</div> 

<?php } ?>


<?php get_footer(); ?>




