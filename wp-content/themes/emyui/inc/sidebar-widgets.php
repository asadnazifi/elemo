<?php 

if ( function_exists( 'lazyblocks' ) ) :

    lazyblocks()->add_block( array(
        'id' => 1203,
        'title' => 'Custom List',
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M4 14h4v-4H4v4zm0 5h4v-4H4v4zM4 9h4V5H4v4zm5 5h12v-4H9v4zm0 5h12v-4H9v4zM9 5v4h12V5H9z" /></svg>',
        'keywords' => array(
        ),
        'slug' => 'lazyblock/custom-list',
        'description' => '',
        'category' => 'text',
        'category_label' => 'text',
        'supports' => array(
            'customClassName' => true,
            'anchor' => false,
            'align' => array(
                0 => 'wide',
                1 => 'full',
            ),
            'html' => false,
            'multiple' => true,
            'inserter' => true,
        ),
        'ghostkit' => array(
            'supports' => array(
                'spacings' => false,
                'display' => false,
                'scrollReveal' => false,
                'frame' => false,
                'customCSS' => false,
            ),
        ),
        'controls' => array(
            'control_205b704ebd' => array(
                'type' => 'text',
                'name' => 'list-title',
                'default' => 'Categories',
                'label' => 'List Title',
                'help' => '',
                'child_of' => '',
                'placement' => 'content',
                'width' => '100',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'placeholder' => '',
                'characters_limit' => '',
            ),
            'control_3858904792' => array(
                'type' => 'repeater',
                'name' => 'list-repeater',
                'default' => '',
                'label' => 'List Repeater',
                'help' => '',
                'child_of' => '',
                'placement' => 'content',
                'width' => '100',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'rows_min' => '',
                'rows_max' => '',
                'rows_label' => 'Lists',
                'rows_add_button_label' => '',
                'rows_collapsible' => 'true',
                'rows_collapsed' => 'true',
                'placeholder' => '',
                'characters_limit' => '',
            ),
            'control_e39893482c' => array(
                'type' => 'text',
                'name' => 'title',
                'default' => 'Graphic Design',
                'label' => 'Title',
                'help' => '',
                'child_of' => 'control_3858904792',
                'placement' => 'content',
                'width' => '100',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'placeholder' => '',
                'characters_limit' => '',
            ),
            'control_0a69b54800' => array(
                'type' => 'text',
                'name' => 'number',
                'default' => '90',
                'label' => 'Number',
                'help' => '',
                'child_of' => 'control_3858904792',
                'placement' => 'content',
                'width' => '100',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'placeholder' => '',
                'characters_limit' => '',
            ),
            'control_1228ab482f' => array(
                'type' => 'text',
                'name' => 'url-c',
                'default' => '#',
                'label' => 'URL',
                'help' => '',
                'child_of' => 'control_3858904792',
                'placement' => 'content',
                'width' => '100',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'placeholder' => '',
                'characters_limit' => '',
            ),
        ),
        'code' => array(
            'output_method' => 'php',
            'editor_html' => '',
            'editor_callback' => '',
            'editor_css' => '',
            'frontend_html' => '<div class="bg-white rounded-20 border-opacity mb-10 mrup">
                            <a
                                    class="blog-sidebar-header d-flex align-items-center justify-content-between px-7 py-7 rounded-top-20 coodiv-text-12 font-weight-bold text-blackish-blue text-uppercase"
                                    data-toggle="collapse"
                                    href="#first-sidebar"
                                    role="button"
                                    aria-expanded="true"
                                    aria-controls="first-sidebar"
                            >
                            <?php echo esc_attr__($attributes[\'list-title\']); ?> <i class="feather icon-chevron-down coodiv-text-10 arrow"></i>
                            </a>
                            <ul class="category-list-sidebar list-unstyled px-7 mb-0 collapse show" id="first-sidebar">
                                
                                    <?php foreach( $attributes[\'list-repeater\'] as $inner ): ?>
                                    <li>
                                            <a class="d-flex justify-content-between align-items-center py-2" href="<?php echo esc_url($inner[\'url-c\']); ?>">
                                                    <span class="coodiv-text-11 font-weight-light"><?php echo esc_html__($inner[\'title\']); ?></span> <span class="px-6 coodiv-text-12 badge badge-pill"><?php echo esc_html__($inner[\'number\']); ?></span>
                                            </a>
                                    </li>
                                    <?php endforeach; ?>
    
                            </ul>
                    </div>',
            'frontend_callback' => '',
            'frontend_css' => '',
            'show_preview' => 'never',
            'single_output' => true,
        ),
        'condition' => array(
        ),
    ) );
    
    lazyblocks()->add_block( array(
        'id' => 1199,
        'title' => 'Latest Posts',
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5 2c0-.55-.45-1-1-1s-1 .45-1 1v4H1v6h6V6H5V2zm4 14c0 1.3.84 2.4 2 2.82V23h2v-4.18c1.16-.41 2-1.51 2-2.82v-2H9v2zm-8 0c0 1.3.84 2.4 2 2.82V23h2v-4.18C6.16 18.4 7 17.3 7 16v-2H1v2zM21 6V2c0-.55-.45-1-1-1s-1 .45-1 1v4h-2v6h6V6h-2zm-8-4c0-.55-.45-1-1-1s-1 .45-1 1v4H9v6h6V6h-2V2zm4 14c0 1.3.84 2.4 2 2.82V23h2v-4.18c1.16-.41 2-1.51 2-2.82v-2h-6v2z" /></svg>',
        'keywords' => array(
        ),
        'slug' => 'lazyblock/latest-posts',
        'description' => '',
        'category' => 'widgets',
        'category_label' => 'widgets',
        'supports' => array(
            'customClassName' => true,
            'anchor' => false,
            'align' => array(
                0 => 'wide',
                1 => 'full',
            ),
            'html' => false,
            'multiple' => true,
            'inserter' => true,
        ),
        'ghostkit' => array(
            'supports' => array(
                'spacings' => false,
                'display' => false,
                'scrollReveal' => false,
                'frame' => false,
                'customCSS' => false,
            ),
        ),
        'controls' => array(
        ),
        'code' => array(
            'output_method' => 'php',
            'editor_html' => '',
            'editor_callback' => '',
            'editor_css' => '',
            'frontend_html' => '<div class="bg-white rounded-20 border-opacity mb-10">
            <a
                    class="blog-sidebar-header d-flex align-items-center justify-content-between px-7 py-7 rounded-top-20 coodiv-text-12 font-weight-bold text-blackish-blue text-uppercase"
                    data-toggle="collapse"
                    href="#second-sidebar"
                    role="button"
                    aria-expanded="true"
                    aria-controls="second-sidebar"
            >
                 <?php echo _e(\'Popular Post\',\'emyui\') // phpcs:ignore ?><i class="feather icon-chevron-down coodiv-text-10 arrow"></i>
            </a>
            <ul class="popular-post-sidebar list-unstyled px-7 mb-0 collapse show" id="second-sidebar">
    
            <?php
                    // Custom WP query wpos
                    $args_wpos = array(
                            \'post_type\' => array(\'post\'),
                            \'posts_per_page\' => 3,
                            \'ignore_sticky_posts\' => true,
                            \'order\' => \'DESC\',
                    );
    
                    $wpos = new \\WP_Query( $args_wpos );
    
                    if ( $wpos->have_posts() ) {
                            while ( $wpos->have_posts() ) {
                                    $wpos->the_post(); ?>
    
                    <li class="d-flex align-items-center">
                            <a href="<?php echo esc_url( get_permalink() ); ?>" class="popular-post-sidebar-img overflow-hidden mr-6">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="thumbnail" class="w-100 rounded-10" />
                            </a>
                            <div class="popular-post-sidebar-info">
                                    <a class="coodiv-text-10 color-blackish-blue d-block" href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a>
                                    <span class="coodiv-text-12 color-blackish-blue-opacity"><?php echo get_the_date(); ?></span>
                                    <span class="popular-post-sidebar-comment"><i class="feather icon-message-circle"></i><?php 
    
    $comcountc = get_comments_number();
    
    if($comcountc == 1){
            echo get_comments_number();   esc_html_e( \' Comment\', \'emyui\' );
    }
    elseif($comcountc > 1){
            echo get_comments_number();   esc_html_e( \' Comments\', \'emyui\' );
    }
    elseif($comcountc == 0){
        esc_html_e( \'No Comments\', \'emyui\' );
    }
    
    ?></span>
                            </div>
                    </li>
    
    
    
                    <?php        }
                    } 
    
                    wp_reset_postdata();
    
            ?>
                 
    
                
            </ul>
    </div>',
            'frontend_callback' => '',
            'frontend_css' => '',
            'show_preview' => 'never',
            'single_output' => false,
        ),
        'condition' => array(
        ),
    ) );
    
    lazyblocks()->add_block( array(
        'id' => 1194,
        'title' => 'Special Offer',
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1.41 16.09V20h-2.67v-1.93c-1.71-.36-3.16-1.46-3.27-3.4h1.96c.1 1.05.82 1.87 2.65 1.87 1.96 0 2.4-.98 2.4-1.59 0-.83-.44-1.61-2.67-2.14-2.48-.6-4.18-1.62-4.18-3.67 0-1.72 1.39-2.84 3.11-3.21V4h2.67v1.95c1.86.45 2.79 1.86 2.85 3.39H14.3c-.05-1.11-.64-1.87-2.22-1.87-1.5 0-2.4.68-2.4 1.64 0 .84.65 1.39 2.67 1.91s4.18 1.39 4.18 3.91c-.01 1.83-1.38 2.83-3.12 3.16z" /></svg>',
        'keywords' => array(
        ),
        'slug' => 'lazyblock/special-offer',
        'description' => '',
        'category' => 'widgets',
        'category_label' => 'widgets',
        'supports' => array(
            'customClassName' => true,
            'anchor' => false,
            'align' => array(
                0 => 'wide',
                1 => 'full',
            ),
            'html' => false,
            'multiple' => true,
            'inserter' => true,
        ),
        'ghostkit' => array(
            'supports' => array(
                'spacings' => false,
                'display' => false,
                'scrollReveal' => false,
                'frame' => false,
                'customCSS' => false,
            ),
        ),
        'controls' => array(
            'control_3b396047b5' => array(
                'type' => 'text',
                'name' => 'first-text-part',
                'default' => 'Special Offer for You,',
                'label' => 'First Text Part',
                'help' => '',
                'child_of' => '',
                'placement' => 'content',
                'width' => '100',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'placeholder' => '',
                'characters_limit' => '',
            ),
            'control_25dbcd44cc' => array(
                'type' => 'text',
                'name' => 'first-text-part-copy',
                'default' => '30% Off',
                'label' => 'Second Text Part',
                'help' => '',
                'child_of' => '',
                'placement' => 'content',
                'width' => '100',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'placeholder' => '',
                'characters_limit' => '',
            ),
            'control_5cc8f74702' => array(
                'type' => 'text',
                'name' => 'third-text-part',
                'default' => 'for any Plan',
                'label' => 'Third Text Part',
                'help' => '',
                'child_of' => '',
                'placement' => 'content',
                'width' => '100',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'placeholder' => '',
                'characters_limit' => '',
            ),
            'control_bcd9794ac2' => array(
                'type' => 'text',
                'name' => 'button-text',
                'default' => 'Get Started',
                'label' => 'Button Text',
                'help' => '',
                'child_of' => '',
                'placement' => 'content',
                'width' => '100',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'placeholder' => '',
                'characters_limit' => '',
            ),
            'control_64d9ec46c1' => array(
                'type' => 'url',
                'name' => 'button-url',
                'default' => '#',
                'label' => 'Button URL',
                'help' => '',
                'child_of' => '',
                'placement' => 'content',
                'width' => '100',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'placeholder' => '',
                'characters_limit' => '',
            ),
        ),
        'code' => array(
            'output_method' => 'php',
            'editor_html' => '',
            'editor_callback' => '',
            'editor_css' => '',
            'frontend_html' => '    <div class="banner-widget-sidebar bg-gradient-info shadow-2 text-white py-13 px-10 rounded-20 position-relative dark-bg">
                            <svg class="banner-widget-sidebar-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 604 178">
                                    <path
                                            d="M1920,0V146.85c-14.7,5.55-28.79,12.05-49,18.15-9.73,2.94-42.25,12.77-72,13-72.59.56-78.87-56.38-182-90-38.62-12.59-65.18-13.55-99-40a187.6,187.6,0,0,1-43-48Z"
                                            transform="translate(-1316)"
                                            style="fill: #ffffff; opacity: 0.2;"
                                    ></path>
                                    <path d="M1882,0c9.29,27.61-36.45,83.32-63,79-12.19-2-14.6-15.7-38-25-17.81-7.08-24.76-2.45-37-9-9.63-5.15-21.36-16.58-28-45Z" transform="translate(-1316)" style="fill: #ffffff; opacity: 0.1;"></path>
                            </svg>
    
                            <div class="d-block">
                                    <div class="position-relative">
                                            <h3 class="coodiv-text-7 font-weight-light">
                                                    <span class="d-block"><?php echo esc_html__($attributes[\'first-text-part\']); ?></span> <span class="font-weight-light strike-bottom yellow"><?php echo esc_html__($attributes[\'first-text-part-copy\']); ?></span><span class="d-block"><?php echo esc_html__($attributes[\'third-text-part\']); ?></span>
                                            </h3>
                                            <a href="<?php echo esc_url( $attributes[\'button-url\'] ); ?>" class="btn rounded-20 btn-white mt-3 coodiv-text-12"><?php echo esc_html__($attributes[\'button-text\']); ?></a>
                                    </div>
                            </div>
                    </div>',
            'frontend_callback' => '',
            'frontend_css' => '',
            'show_preview' => 'never',
            'single_output' => true,
        ),
        'condition' => array(
        ),
    ) );
    
endif;


?>