<?php get_header();
if(class_exists('ReduxFramework') and class_exists('Boostify_Header_Footer_Builder')){
global $emyuiredux;
$ggfsingle = $emyuiredux['optminee'];
} ?>
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
<?php if($ggfsingle == 1){ ?>              
<div class="text-element feature-section bg-default-2 pb-2 pt-lg-13 pb-lg-20 pt-8 position-relative"> 
    <div class="container"> 
        <div class="row justify-content-start container-sidebar"> 
            <div class="col-lg-12 col-md-12 pr-lg-9"> 
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <div class="single-block-container bg-default rounded-20 border-opacity py-10 px-10"> 
                        <?php if (has_post_thumbnail()){ ?>   
                        <div class="single-block mb-12 mb-lg-15"> 
                                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="post-thumnail" class="w-100 mb-9 rounded-20" />                                                                                                 
                            </div> 
                            <?php } ?>                                            
                            <div class="single-block mb-12 mb-lg-15">
                                <?php the_content(); ?>
                               
                            </div>                                             
                            <div class="post-tags-list pt-5"> 
                                <?php $terms = get_the_terms( get_the_ID(), 'post_tag' ) ?>
                                <?php if( !empty( $terms ) ) : ?>
                                    <?php foreach( $terms as $term ) : ?>
                                        <a href="<?php echo esc_url( get_term_link( $term, 'post_tag' ) ) ?>" class="btn btn-sm btn-outline-primary rounded-20 mb-2 mr-1 py-3 coodiv-text-12 font-weight-light"><?php echo esc_html($term->name) ?></a>
                                        <?php get_the_tag_list(); ?>
                               
                                  <?php endforeach; ?>
                                <?php endif; ?>                                                                                                   
                            </div>                                             
                            <!-- Comments Area -->
						<?php 
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				} ?>                                           
                        </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'emyui' ); ?></p>
                <?php endif; ?> 
            </div>                             
            

        </div>                         
    </div>                     
</div>                 
<?php } ?>    

<?php if($ggfsingle == 2){ ?>              
<div class="text-element feature-section bg-default-2 pb-2 pt-lg-13 pb-lg-20 pt-8 position-relative"> 
    <div class="container"> 
        <div class="row justify-content-start container-sidebar"> 
            <div class="col-lg-8 col-md-12 pr-lg-9"> 
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <div class="single-block-container bg-default rounded-20 border-opacity py-10 px-10"> 
                        <?php if (has_post_thumbnail()){ ?>
                            <div class="single-block mb-12 mb-lg-15"> 
                                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="post-thumnail" class="w-100 mb-9 rounded-20" />                                                                                                  
                            </div>   
                            <?php } ?>                                          
                            <div class="single-block mb-12 mb-lg-15">
                                <?php the_content(); ?>
                               
                            </div>                                             
                            <div class="post-tags-list pt-5"> 
                                <?php $terms = get_the_terms( get_the_ID(), 'post_tag' ) ?>
                                <?php if( !empty( $terms ) ) : ?>
                                    <?php foreach( $terms as $term ) : ?>
                                        <a href="<?php echo esc_url( get_term_link( $term, 'post_tag' ) ) ?>" class="btn btn-sm btn-outline-primary rounded-20 mb-2 mr-1 py-3 coodiv-text-12 font-weight-light"><?php echo esc_html($term->name) ?></a>
                                        <?php get_the_tag_list(); ?>
                               
                                  <?php endforeach; ?>
                                <?php endif; ?>                                                                                                   
                            </div>                                             
                            <!-- Comments Area -->
						<?php 
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				} ?>                                           
                        </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'emyui' ); ?></p>
                <?php endif; ?> 
            </div>  
            
            <div id="sidebar" class="widget blog-sidebar col-lg-4 col-md-12 px-0">
                            <div class="sidebar__inner">   	
                            <?php dynamic_sidebar( 'primary' ); ?>
                            </div>
                        </div>
            

        </div>                         
    </div>                     
</div>                 
<?php } ?>  


<?php }
else{ ?>
<div class="text-element feature-section bg-default-2 pb-2 pt-lg-13 pb-lg-20 pt-8 position-relative"> 
    <div class="container"> 
        <div class="row justify-content-start container-sidebar"> 
            <div class="col-lg-12 col-md-12 pr-lg-9"> 
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <div class="single-block-container bg-default rounded-20 border-opacity py-10 px-10" > 
                        <?php if (has_post_thumbnail()){ ?>
                            <div class="single-block mb-12 mb-lg-15"> 
                                 <img src="<?php the_post_thumbnail_url('full'); ?>" alt="post-thumnail" class="w-100 mb-9 rounded-20" />                                                                                                  
                            </div>   
                            <?php } ?>                                           
                            <div class="single-block mb-12 mb-lg-15">
                                <?php the_content(); ?>
                               
                            </div>                                             
                            <div class="post-tags-list pt-5"> 
                                <?php $terms = get_the_terms( get_the_ID(), 'post_tag' ) ?>
                                <?php if( !empty( $terms ) ) : ?>
                                    <?php foreach( $terms as $term ) : ?>
                                        <a href="<?php echo esc_url( get_term_link( $term, 'post_tag' ) ) ?>" class="btn btn-sm btn-outline-primary rounded-20 mb-2 mr-1 py-3 coodiv-text-12 font-weight-light"><?php echo esc_html($term->name) ?></a>
                                        <?php get_the_tag_list(); ?>
                               
                                  <?php endforeach; ?>
                                <?php endif; ?>                                                                                                   
                            </div>                                             
                            <!-- Comments Area -->
						<?php 
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				} ?>                                           
                        </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'emyui' ); ?></p>
                <?php endif; ?> 
            </div>                             
            

        </div>                         
    </div>                     
</div> 
<?php } ?>


<?php get_footer(); ?>
