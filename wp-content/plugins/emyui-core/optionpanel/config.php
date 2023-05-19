<?php
 
if (!class_exists('Redux'))
    {
    return;
    }



    $opt_name = "emyuiredux";
    $theme    = wp_get_theme();


    $args = array(
        'opt_name' => $opt_name,
        'display_name' => $theme->get('Name') ,
        'display_version' => $theme->get('Version') ,
        'menu_type' => 'menu',
        'allow_sub_menu' => true,
        'menu_title' => esc_html__('EMYUI تنظیمات', 'emyui-core'),
        'page_title' => esc_html__('تنظیمات قالب', 'emyui-core') ,
        'google_api_key' => '',
        'google_update_weekly' => false,
        'async_typography' => true,
        'admin_bar' => true,
        'admin_bar_icon' => 'dashicons-admin-settings',
        'admin_bar_priority' => 50,
        'global_variable' => $opt_name,
        'dev_mode' => false,
        'update_notice' => false,
        'customizer' => true,
        'page_priority' => null,
        'page_parent' => 'themes.php',
        'page_permissions' => 'manage_options',
        'menu_icon' => 'dashicons-admin-settings',
        'last_tab' => '',
        'page_icon' => 'icon-themes',
        'page_slug' => 'themeoptions',
        'save_defaults' => true,
        'default_show' => false,
        'default_mark' => '',
        'show_import_export' => true
    );

    Redux::setArgs( $opt_name, $args );

    Redux::setSection($opt_name, array(
        'title' => esc_html__('تنظیمات عمومی', 'emyui') ,
        'id' => esc_html__('general', 'emyui') ,
        'icon' => 'el el-website',
        'fields'  => array(
            array(
                'id'       => 'opt2',
                'type'     => 'media', 
                'url'      => true,
                'title'    => esc_html__('آدرس لوگو', 'emyui'),
                'subtitle' => esc_html__('لوگو خود را آپلود کنید', 'emyui'),
                'default'  => array(
                    'url'=>'https://emyui.pdthemes.de/wp-content/themes/emyui/image/logo-main-white.png'
                ),
            ),
            array(
                'id'       => 'opt3',
                'type'     => 'switch', 
                'title'    => esc_html__('پیش بارگزاری', 'emyui'),
                'subtitle' => esc_html__('فعال یا غیر فعال کردن', 'emyui'),
                'default'  => true,
            ),
          
        ),
        
       
    ));



     Redux::setSection($opt_name, array(
         'title' => esc_html__('تنظیمات بلاگ', 'emyui') ,
         'id' => esc_html__('blog', 'emyui') ,
         'icon' => 'el el-website',
         'fields'  => array(
            array(
                'id'       => 'imgb1',
                'type'     => 'media', 
                'url'      => true,
                'title'    => esc_html__('بنر بلاگ', 'emyui'),
                'default'  => array(
                    'url'=>'https://emyui.pdthemes.de/wp-content/themes/emyui/image/unsplash/56.jpeg'
                ),
            ),
            array(
                'id'       => 'optmine',
                'type'     => 'select',
                'title'    => esc_html__('طرح بندی بلاگ', 'emyui'), 
                'desc'     => esc_html__('This option will change your blog page design completly', 'emyui'),
                // Must provide key => value pairs for select options
                'options'  => array(
                    '1' => 'طرح بندی یک بدون سایدبار',
                    '2' => 'طرح بندی یک با سایدبار',
                    '3' => 'طرح بندی دوم با سایدبار',
               
                ),
                'default'  => '2',
            ),
            array(
                'id'       => 'imgb2',
                'type'     => 'media', 
                'url'      => true,
                'title'    => esc_html__('بنر بلاگ تک صفحه', 'emyui'),
                'default'  => array(
                    'url'=>'https://emyui.pdthemes.de/wp-content/themes/emyui/image/unsplash/56.jpeg'
                ),
            ),
			 array(
                'id'       => 'optminee',
                'type'     => 'select',
                'title'    => esc_html__('طرح بندی صفحه تک بلاگ', 'emyui'), 
                'desc'     => esc_html__('This option will change your blog page design completly', 'emyui'),
                // Must provide key => value pairs for select options
                'options'  => array(
                    '1' => 'بدون سایدبار',
                    '2' => 'همراه سایدبار',
                   
               
                ),
                'default'  => '2',
            ),
            
        ),
    ));

    Redux::setSection($opt_name, array(
        'title' => esc_html__('تنظیمات فوتر', 'emyui') ,
        'id' => esc_html__('footer', 'emyui') ,
        'icon' => 'el el-website',
        'fields'  => array(
            array(
                'id'    => 'opt-text3',   
                'type'  => 'textarea',
                'title'    => esc_html__('توضیحات فوتر', 'emyui'),
                'subtitle' => esc_html__('توضیحات فوتر را اینجا قرار دهید ', 'emyui'),
                'default'  => esc_html__('ماموریت ما آسان کردن زندگی برای توسعه دهندگان وب سایت و مشتریان آنها است. ما این کار را با ارائه خدمات میزبانی وب آسان، سریع و قابل اعتماد انجام می دهیم.', 'emyui'),
            ),
            array(
                'id'    => 'opt-text5',   
                'type'  => 'text',
                'title'    => esc_html__('اایمیل فوتر', 'emyui'),
                'subtitle' => esc_html__('ایمیل فوتر را اینجا قرار دهید', 'emyui'),
                'default'  => esc_html__('support@coodiv.net', 'emyui'),
                

            ),
            array(
                'id'    => 'opt-text6',   
                'type'  => 'text',
                'title'    => esc_html__('شماره تلفن فوتر', 'emyui'),
                'subtitle' => esc_html__('شماره تلفن خود را اینجا قرار دهید', 'emyui'),
                'default'  => esc_html__('+123-456-6788-99', 'emyui'),

            ),
            array(
                'id'    => 'opt-text66',   
                'type'  => 'text',
                'title'    => esc_html__('عنوان ستون دوم', 'emyui'),
                'subtitle' => esc_html__('عنوان ستون دوم را وارد کنید', 'emyui'),
                'default'  => esc_html__('میزبانی وب', 'emyui'),

            ),
          
                array(
                    'id'    => 'opt-text77',   
                    'type'  => 'text',
                    'title'    => esc_html__('عنوان ستون سوم', 'emyui'),
                    'subtitle' => esc_html__('عنوان ستون سوم را وارد کنید', 'emyui'),
                    'default'  => esc_html__('دامنه ها', 'emyui'),
    
                ),
               
                    array(
                        'id'    => 'opt-text88',   
                        'type'  => 'text',
                        'title'    => esc_html__('عنوان ستون چهارم', 'emyui'),
                        'subtitle' => esc_html__('عنوان ستون چهارم را وارد کنید', 'emyui'),
                        'default'  => esc_html__('پشتیبانی', 'emyui'),
        
                    ),
                   

            array(
                'id'   => 'info_normal',
                'type' => 'info',
                'desc' => esc_html__('ناحیه کپی رایت', 'emyui')
            ),
            array(
                'id'    => 'opt-text7',   
                'type'  => 'text',
                'title'    => esc_html__('متن کپی رایت', 'emyui'),
                'subtitle' => esc_html__('متن کپی رایت را وارد کنید', 'emyui'),
                'default'  => esc_html__('تمامی حقوق محفوظ است. بومی سازی توسط امیرحسین گروسی و محمد خلیلی', 'emyui'),

            ),
            
            array(
                'id'       => 'opt21',
                'type'     => 'media', 
                'url'      => true,
                'title'    => esc_html__('نشان اول', 'emyui'),
                'default'  => array(
                    'url'=>'https://emyui.pdthemes.de/wp-content/themes/emyui/image/payment/visa.png'
                ),
            ),
            array(
                'id'       => 'opt22',
                'type'     => 'media', 
                'url'      => true,
                'title'    => esc_html__('نشان دوم', 'emyui'),
                'default'  => array(
                    'url'=>'https://emyui.pdthemes.de/wp-content/themes/emyui/image/payment/mastercard.png'
                ),
            ),
            array(
                'id'       => 'opt23',
                'type'     => 'media', 
                'url'      => true,
                'title'    => esc_html__('نشان سوم', 'emyui'),
                'default'  => array(
                    'url'=>'https://emyui.pdthemes.de/wp-content/themes/emyui/image/payment/discover.png'
                ),
            ),
            array(
                'id'       => 'opt24',
                'type'     => 'media', 
                'url'      => true,
                'title'    => esc_html__('نشان چهارم', 'emyui'),
                'default'  => array(
                    'url'=>'https://emyui.pdthemes.de/wp-content/themes/emyui/image/payment/amex.png'
                ),
            ),
            array(
                'id'       => 'opt25',
                'type'     => 'media', 
                'url'      => true,
                'title'    => esc_html__('نشان پنجم', 'emyui'),
                'default'  => array(
                    'url'=>'https://emyui.pdthemes.de/wp-content/themes/emyui/image/payment/jcb.png'
                ),
            ),
            array(
                'id'       => 'opt26',
                'type'     => 'media', 
                'url'      => true,
                'title'    => esc_html__('نشان ششم', 'emyui'),
                'default'  => array(
                    'url'=>'https://emyui.pdthemes.de/wp-content/themes/emyui/image/payment/maestro.png'
                ),
            ),
            
                
                
         ),
    ));
    Redux::setSection($opt_name, array(
        'title' => esc_html__('کد سفارشی', 'emyui') ,
        'id' => esc_html__('custom-code', 'emyui') ,
        'icon' => 'el el-website',
        'fields'  => array(
            array(
                'id'    => 'opt71',   
                'type'  => 'textarea',
                'title'    => esc_html__('کد کاستوم هدر', 'emyui'),
                'subtitle' => esc_html__('کد را اینجا قرار دهید ', 'emyui'),
                'desc'     => esc_html__('تگ های مربوطه را استفاده کنید', 'emyui'),
            ),
            array(
                'id'    => 'opt72',   
                'type'  => 'textarea',
                'title'    => esc_html__('کد کاستوم فوتر', 'emyui'),
                'subtitle' => esc_html__('کد را اینجا قرار دهید ', 'emyui'),
                'desc'     => esc_html__('تگ های مربوطه را استفاده کنید', 'emyui'),
            ),
            
        ),
    ));
 
