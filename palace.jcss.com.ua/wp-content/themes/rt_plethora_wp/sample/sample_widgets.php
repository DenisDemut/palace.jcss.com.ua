<?php
        function replace_token_url($var){
        $out = $var;
        if (is_string($var)){
            $out = str_replace("@RT_SITE_URL@", get_bloginfo("wpurl"), $var);
        }
        return $out;
    }

    function filter_token_url($value, $oldvalue) {
        if (is_array($value)){
            return multidimensionalArrayMap("replace_token_url", $value);
        }
        else if (is_string($value))
            return replace_token_url($value);
        else
            return $value;
    }

    function multidimensionalArrayMap( $func, $arr )
    {
    $newArr = array();
    foreach( $arr as $key => $value )
        {
        $newArr[ $key ] = ( is_array( $value ) ? multidimensionalArrayMap( $func, $value ) : $func( $value ) );
        }
    return $newArr;
   }

    // unpublish hellow world
     $hello_world = array();
     $hello_world["ID"] = 1;
     $hello_world["post_status"] = "draft";
     wp_update_post( $hello_world );
      
    
        add_filter('pre_update_option_rt_plethora_wp-template-options', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options',array (
  'template_full_name' => 'Plethora',
  'template_author' => 'RocketTheme',
  'grid_system' => '12',
  'template_prefix' => 'plethora-',
  'cookie_time' => '31536000',
  'name' => 'Preset1',
  'copy_lang_files_if_diff' => '1',
  'dropdown_widget_variations' => '1',
  'custom_widget_variations' => '1',
  'blog' => 
  array (
    'cat' => '',
    'post' => 
    array (
      'lead-items' => '1',
      'intro-items' => '3',
      'columns' => '3',
    ),
    'query' => 
    array (
      'type' => 'post',
      'order' => 'date',
      'custom' => '',
    ),
    'content' => 'content',
    'page-heading' => 
    array (
      'enabled' => '0',
      'text' => '',
    ),
    'post-title' => 
    array (
      'enabled' => '1',
      'link' => '0',
    ),
    'meta-author' => 
    array (
      'enabled' => '1',
      'link' => '1',
      'prefix' => 'Written by',
    ),
    'meta-date' => 
    array (
      'enabled' => '1',
      'prefix' => '',
      'format' => 'M j, Y g:i a',
    ),
    'meta-modified' => 
    array (
      'enabled' => '0',
      'prefix' => 'Last Updated on',
      'format' => 'l, d F Y H:i',
    ),
    'meta-comments' => 
    array (
      'enabled' => '1',
      'link' => '0',
    ),
    'meta-category' => 
    array (
      'enabled' => '0',
      'link' => '0',
      'prefix' => '',
    ),
    'meta-category-parent' => 
    array (
      'enabled' => '0',
      'link' => '0',
      'prefix' => '',
    ),
    'readmore' => 
    array (
      'text' => 'Read more ...',
      'show' => 'auto',
    ),
  ),
  'page' => 
  array (
    'page-heading' => 
    array (
      'enabled' => '0',
      'text' => '',
    ),
    'title' => 
    array (
      'enabled' => '1',
      'link' => '1',
    ),
    'meta-author' => 
    array (
      'enabled' => '0',
      'link' => '1',
      'prefix' => 'Written by',
    ),
    'meta-date' => 
    array (
      'enabled' => '0',
      'prefix' => '',
      'format' => 'l, d F Y H:i',
    ),
    'meta-modified' => 
    array (
      'enabled' => '0',
      'prefix' => 'Last Updated on',
      'format' => 'l, d F Y H:i',
    ),
    'meta-comments' => 
    array (
      'enabled' => '0',
      'link' => '0',
    ),
    'featured-image' => '0',
    'comments-form' => 
    array (
      'enabled' => '0',
      'html-tags' => '1',
    ),
  ),
  'single' => 
  array (
    'page-heading' => 
    array (
      'enabled' => '0',
      'text' => '',
    ),
    'title' => 
    array (
      'enabled' => '1',
      'link' => '0',
    ),
    'meta-author' => 
    array (
      'enabled' => '1',
      'link' => '1',
      'prefix' => 'Written by',
    ),
    'meta-date' => 
    array (
      'enabled' => '1',
      'prefix' => '',
      'format' => 'l, d F Y H:i',
    ),
    'meta-modified' => 
    array (
      'enabled' => '0',
      'prefix' => 'Last Updated on',
      'format' => 'l, d F Y H:i',
    ),
    'meta-comments' => 
    array (
      'enabled' => '1',
      'link' => '0',
    ),
    'meta-category' => 
    array (
      'enabled' => '0',
      'link' => '0',
      'prefix' => '',
    ),
    'meta-category-parent' => 
    array (
      'enabled' => '0',
      'link' => '0',
      'prefix' => '',
    ),
    'featured-image' => '0',
    'tags' => '1',
    'footer' => '1',
    'comments-form' => 
    array (
      'enabled' => '1',
      'html-tags' => '1',
    ),
  ),
  'category' => 
  array (
    'count' => '5',
    'content' => 'content',
    'page-heading' => 
    array (
      'enabled' => '1',
      'text' => '',
    ),
    'post-title' => 
    array (
      'enabled' => '1',
      'link' => '0',
    ),
    'meta-author' => 
    array (
      'enabled' => '1',
      'link' => '1',
      'prefix' => 'Written by',
    ),
    'meta-date' => 
    array (
      'enabled' => '1',
      'prefix' => '',
      'format' => 'l, d F Y H:i',
    ),
    'meta-modified' => 
    array (
      'enabled' => '0',
      'prefix' => 'Last Updated on',
      'format' => 'l, d F Y H:i',
    ),
    'meta-comments' => 
    array (
      'enabled' => '1',
      'link' => '0',
    ),
    'meta-category' => 
    array (
      'enabled' => '0',
      'link' => '0',
      'prefix' => '',
    ),
    'meta-category-parent' => 
    array (
      'enabled' => '0',
      'link' => '0',
      'prefix' => '',
    ),
    'readmore' => 
    array (
      'text' => 'Read more ...',
      'show' => 'auto',
    ),
  ),
  'archive' => 
  array (
    'count' => '5',
    'content' => 'content',
    'page-heading' => 
    array (
      'enabled' => '1',
      'text' => '',
    ),
    'post-title' => 
    array (
      'enabled' => '1',
      'link' => '0',
    ),
    'meta-author' => 
    array (
      'enabled' => '1',
      'link' => '1',
      'prefix' => 'Written by',
    ),
    'meta-date' => 
    array (
      'enabled' => '1',
      'prefix' => '',
      'format' => 'l, d F Y H:i',
    ),
    'meta-modified' => 
    array (
      'enabled' => '0',
      'prefix' => 'Last Updated on',
      'format' => 'l, d F Y H:i',
    ),
    'meta-comments' => 
    array (
      'enabled' => '1',
      'link' => '0',
    ),
    'meta-category' => 
    array (
      'enabled' => '0',
      'link' => '0',
      'prefix' => '',
    ),
    'meta-category-parent' => 
    array (
      'enabled' => '0',
      'link' => '0',
      'prefix' => '',
    ),
    'readmore' => 
    array (
      'text' => 'Read more ...',
      'show' => 'auto',
    ),
  ),
  'tag' => 
  array (
    'count' => '5',
    'content' => 'content',
    'page-heading' => 
    array (
      'enabled' => '1',
      'text' => '',
    ),
    'post-title' => 
    array (
      'enabled' => '1',
      'link' => '0',
    ),
    'meta-author' => 
    array (
      'enabled' => '1',
      'link' => '1',
      'prefix' => 'Written by',
    ),
    'meta-date' => 
    array (
      'enabled' => '1',
      'prefix' => '',
      'format' => 'l, d F Y H:i',
    ),
    'meta-modified' => 
    array (
      'enabled' => '0',
      'prefix' => 'Last Updated on',
      'format' => 'l, d F Y H:i',
    ),
    'meta-comments' => 
    array (
      'enabled' => '1',
      'link' => '0',
    ),
    'meta-category' => 
    array (
      'enabled' => '0',
      'link' => '0',
      'prefix' => '',
    ),
    'meta-category-parent' => 
    array (
      'enabled' => '0',
      'link' => '0',
      'prefix' => '',
    ),
    'readmore' => 
    array (
      'text' => 'Read more ...',
      'show' => 'auto',
    ),
  ),
  'search' => 
  array (
    'count' => '5',
    'content' => 'content',
    'page-heading' => 
    array (
      'enabled' => '1',
      'text' => '',
    ),
    'post-title' => 
    array (
      'enabled' => '1',
      'link' => '0',
    ),
    'meta-author' => 
    array (
      'enabled' => '1',
      'link' => '1',
      'prefix' => 'Written by',
    ),
    'meta-date' => 
    array (
      'enabled' => '1',
      'prefix' => '',
      'format' => 'l, d F Y H:i',
    ),
    'meta-modified' => 
    array (
      'enabled' => '0',
      'prefix' => 'Last Updated on',
      'format' => 'l, d F Y H:i',
    ),
    'meta-comments' => 
    array (
      'enabled' => '1',
      'link' => '0',
    ),
    'meta-category' => 
    array (
      'enabled' => '0',
      'link' => '0',
      'prefix' => '',
    ),
    'meta-category-parent' => 
    array (
      'enabled' => '0',
      'link' => '0',
      'prefix' => '',
    ),
    'readmore' => 
    array (
      'text' => 'Read more ...',
      'show' => 'auto',
    ),
  ),
  'thumbnails-enabled' => '1',
  'logo' => 
  array (
    'type' => 'plethora',
    'custom' => 
    array (
      'image' => '',
    ),
  ),
  'accent' => 
  array (
    'color1' => '#E35614',
    'color2' => '#338DE0',
  ),
  'demostyle' => 
  array (
    'type' => 'preset1',
  ),
  'pagesurround' => 
  array (
    'background' => '#F5F5F5',
  ),
  'top' => 
  array (
    'textcolor' => '#808080',
    'background' => '#1C1D1F',
    'layout' => 'a:1:{i:12;a:2:{i:3;a:3:{i:0;i:6;i:1;i:4;i:2;i:2;}i:4;a:4:{i:0;i:3;i:1;i:3;i:2;i:3;i:3;i:3;}}}',
    'showall' => '0',
    'showmax' => '6',
  ),
  'header' => 
  array (
    'textcolor' => '#1C1D1F',
    'background' => '#FFFFFF',
    'layout' => 'a:1:{i:12;a:2:{i:2;a:2:{i:0;i:2;i:1;i:10;}i:3;a:3:{i:0;i:2;i:1;i:7;i:2;i:3;}}}',
    'showall' => '0',
    'showmax' => '6',
  ),
  'feature' => 
  array (
    'textcolor' => '#FFFFFF',
    'background' => '#1C1D1F',
    'layout' => '3,3,3,3',
    'showall' => '0',
    'showmax' => '6',
  ),
  'maintop' => 
  array (
    'textcolor' => '#A8A8A8',
    'background' => '#FFFFFF',
    'layout' => '3,3,3,3',
    'showall' => '0',
    'showmax' => '6',
  ),
  'mainbody' => 
  array (
    'overlay' => 'light',
  ),
  'extension' => 
  array (
    'textcolor' => '#FFFFFF',
    'background' => '#E35614',
    'layout' => '3,3,3,3',
    'showall' => '0',
    'showmax' => '6',
  ),
  'bottom' => 
  array (
    'textcolor' => '#FFFFFF',
    'background' => '#1C1D1F',
    'layout' => '3,3,3,3',
    'showall' => '0',
    'showmax' => '6',
  ),
  'footer' => 
  array (
    'textcolor' => '#808080',
    'background' => '#1C1D1F',
    'layout' => '3,3,3,3',
    'showall' => '0',
    'showmax' => '6',
  ),
  'responsive-menu' => 'panel',
  'thumb' => 
  array (
    'width' => '750',
    'height' => '297',
    'position' => '',
  ),
  'font' => 
  array (
    'family' => 's:plethora',
    'size' => 'default',
    'size-is' => 'default',
  ),
  'pagination' => 
  array (
    'enabled' => '1',
    'show-results' => '1',
    'count' => '8',
  ),
  'wordpress-comments' => '1',
  'customcss' => '',
  'rtl-priority' => '7',
  'childcss-priority' => '100',
  'thumbnails-priority' => '1',
  'styledeclaration-enabled' => '1',
  'chart-enabled' => '1',
  'comingsoon' => 
  array (
    'enabled' => '0',
    'date' => '1',
    'month' => '0',
    'year' => '2020',
  ),
  'email-subscription' => 
  array (
    'enabled' => '1',
  ),
  'feedburner-uri' => '',
  'pagesuffix' => 
  array (
    'enabled' => '0',
    'class' => '',
    'priority' => '2',
  ),
  'feedlinks' => 
  array (
    'enabled' => '1',
    'priority' => '1',
  ),
  'title' => 
  array (
    'format' => '',
    'priority' => '5',
  ),
  'widgetshortcodes' => 
  array (
    'enabled' => '1',
    'priority' => '2',
  ),
  'rokstyle' => 
  array (
    'enabled' => '1',
    'priority' => '5',
  ),
  'analytics' => 
  array (
    'enabled' => '0',
    'code' => '',
    'plugins' => '',
    'priority' => '3',
  ),
  'showcase' => 
  array (
    'layout' => '3,3,3,3',
    'showall' => '0',
    'showmax' => '6',
  ),
  'utility' => 
  array (
    'layout' => '3,3,3,3',
    'showall' => '0',
    'showmax' => '6',
  ),
  'expandedtop' => 
  array (
    'layout' => '3,3,3,3',
    'showall' => '0',
    'showmax' => '6',
  ),
  'mainbodyPosition' => 'a:1:{i:12;a:1:{i:2;a:2:{s:2:"mb";i:8;s:2:"sa";i:4;}}}',
  'mainbottom' => 
  array (
    'layout' => '3,3,3,3',
    'showall' => '0',
    'showmax' => '6',
  ),
  'expandedbottom' => 
  array (
    'layout' => '3,3,3,3',
    'showall' => '0',
    'showmax' => '6',
  ),
  'copyright' => 
  array (
    'layout' => 'a:1:{i:12;a:2:{i:3;a:3:{i:0;i:2;i:1;i:8;i:2;i:2;}i:4;a:4:{i:0;i:3;i:1;i:3;i:2;i:3;i:3;i:3;}}}',
    'showall' => '0',
    'showmax' => '6',
  ),
  'loadposition-enabled' => '1',
  'layout-mode' => 'responsive',
  'maintenancemode' => 
  array (
    'enabled' => '0',
    'message' => 'This site is down for maintenance. Please check back again soon.',
  ),
  'component-enabled' => '1',
  'mainbody-enabled' => '1',
  'rtl-enabled' => '0',
  'autoparagraphs' => 
  array (
    'enabled' => '1',
    'type' => 'both',
    'priority' => '5',
  ),
  'texturize-enabled' => '0',
  'selectivizr-enabled' => '1',
  'less' => 
  array (
    'compression' => '1',
    'compilewait' => '2',
    'debugheader' => '0',
  ),
  'ie7splash-enabled' => '1',
  'demo' => '1',
  'contact' => 
  array (
    'header' => 'Send an email. All fields with an * are required.',
    'email' => '',
    'recaptcha' => 
    array (
      'enabled' => '0',
      'publickey' => '',
      'privatekey' => '',
    ),
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-1', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-1',array (
  'pagesuffix' => 
  array (
    'enabled' => '1',
    'class' => 'menu-home aug14-home',
    'priority' => '2',
  ),
  'showcase' => 
  array (
    'layout' => 'a:1:{i:12;a:2:{i:2;a:2:{i:0;i:8;i:1;i:4;}i:4;a:4:{i:0;i:3;i:1;i:3;i:2;i:3;i:3;i:3;}}}',
    'showall' => '0',
    'showmax' => '6',
  ),
  'feature' => 
  array (
    'textcolor' => '#FFFFFF',
    'background' => '#1C1D1F',
    'layout' => 'a:1:{i:12;a:2:{i:3;a:3:{i:0;i:6;i:1;i:2;i:2;i:4;}i:4;a:4:{i:0;i:3;i:1;i:3;i:2;i:3;i:3;i:3;}}}',
    'showall' => '0',
    'showmax' => '6',
  ),
  'maintop' => 
  array (
    'textcolor' => '#A8A8A8',
    'background' => '#FFFFFF',
    'layout' => 'a:1:{i:12;a:2:{i:3;a:3:{i:0;i:6;i:1;i:2;i:2;i:4;}i:4;a:4:{i:0;i:3;i:1;i:3;i:2;i:3;i:3;i:3;}}}',
    'showall' => '0',
    'showmax' => '6',
  ),
  'mainbody-enabled' => '0',
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-1', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-10', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-10',array (
  'page' => 
  array (
    'title' => 
    array (
      'enabled' => '0',
      'link' => '1',
    ),
  ),
  'pagesuffix' => 
  array (
    'enabled' => '1',
    'class' => 'menu-services',
    'priority' => '2',
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-10', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-11', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-11',array (
  'page' => 
  array (
    'title' => 
    array (
      'enabled' => '0',
      'link' => '1',
    ),
  ),
  'pagesuffix' => 
  array (
    'enabled' => '1',
    'class' => 'menu-pricing-tables',
    'priority' => '2',
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-11', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-12', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-12',array (
  'page' => 
  array (
    'title' => 
    array (
      'enabled' => '0',
      'link' => '1',
    ),
  ),
  'pagesuffix' => 
  array (
    'enabled' => '1',
    'class' => 'menu-portfolio',
    'priority' => '2',
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-12', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-13', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-13',array (
  'category' => 
  array (
    'count' => '4',
    'page-heading' => 
    array (
      'enabled' => '0',
      'text' => '',
    ),
    'post-title' => 
    array (
      'enabled' => '1',
      'link' => '1',
    ),
    'meta-comments' => 
    array (
      'enabled' => '0',
      'link' => '0',
    ),
  ),
  'pagesuffix' => 
  array (
    'enabled' => '1',
    'class' => 'menu-blog',
    'priority' => '2',
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-13', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-14', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-14',array (
  'page' => 
  array (
    'title' => 
    array (
      'enabled' => '0',
      'link' => '1',
    ),
  ),
  'pagesuffix' => 
  array (
    'enabled' => '1',
    'class' => 'menu-faq',
    'priority' => '2',
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-14', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-15', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-15',array (
  'page' => 
  array (
    'title' => 
    array (
      'enabled' => '0',
      'link' => '1',
    ),
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-15', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-16', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-16',array (
  'page' => 
  array (
    'title' => 
    array (
      'enabled' => '0',
      'link' => '1',
    ),
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-16', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-2', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-2',array (
  'page' => 
  array (
    'title' => 
    array (
      'enabled' => '0',
      'link' => '1',
    ),
  ),
  'pagesuffix' => 
  array (
    'enabled' => '1',
    'class' => 'menu-features-overview',
    'priority' => '2',
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-2', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-6', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-6',array (
  'page' => 
  array (
    'title' => 
    array (
      'enabled' => '0',
      'link' => '1',
    ),
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-6', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-7', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-7',array (
  'page' => 
  array (
    'title' => 
    array (
      'enabled' => '0',
      'link' => '1',
    ),
  ),
  'pagesuffix' => 
  array (
    'enabled' => '1',
    'class' => 'menu-pages-overview',
    'priority' => '2',
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-7', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-8', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-8',array (
  'page' => 
  array (
    'title' => 
    array (
      'enabled' => '0',
      'link' => '1',
    ),
  ),
  'pagesuffix' => 
  array (
    'enabled' => '1',
    'class' => 'menu-about-us',
    'priority' => '2',
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-8', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-9', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-9',array (
  'page' => 
  array (
    'title' => 
    array (
      'enabled' => '0',
      'link' => '1',
    ),
  ),
  'pagesuffix' => 
  array (
    'enabled' => '1',
    'class' => 'menu-the-team',
    'priority' => '2',
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-9', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-assignments-1', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-assignments-1',array (
  'templatepage' => 
  array (
    'home' => true,
    'front_page' => true,
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-assignments-1', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-assignments-10', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-assignments-10',array (
  'post_type' => 
  array (
    'page' => 
    array (
      0 => 20,
    ),
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-assignments-10', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-assignments-11', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-assignments-11',array (
  'post_type' => 
  array (
    'page' => 
    array (
      0 => 22,
    ),
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-assignments-11', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-assignments-12', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-assignments-12',array (
  'post_type' => 
  array (
    'page' => 
    array (
      0 => 24,
    ),
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-assignments-12', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-assignments-13', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-assignments-13',array (
  'archive' => 
  array (
    'category' => 
    array (
      0 => 2,
    ),
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-assignments-13', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-assignments-14', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-assignments-14',array (
  'post_type' => 
  array (
    'page' => 
    array (
      0 => 28,
    ),
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-assignments-14', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-assignments-15', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-assignments-15',array (
  'post_type' => 
  array (
    'page' => 
    array (
      0 => 30,
    ),
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-assignments-15', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-assignments-16', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-assignments-16',array (
  'post_type' => 
  array (
    'page' => 
    array (
      0 => 32,
    ),
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-assignments-16', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-assignments-2', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-assignments-2',array (
  'post_type' => 
  array (
    'page' => 
    array (
      0 => 6,
    ),
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-assignments-2', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-assignments-3', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-assignments-3',array (
  'post_type' => 
  array (
    'page' => 
    array (
      0 => 8,
    ),
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-assignments-3', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-assignments-4', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-assignments-4',array (
  'post_type' => 
  array (
    'page' => 
    array (
      0 => 10,
    ),
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-assignments-4', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-assignments-5', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-assignments-5',array (
  'post_type' => 
  array (
    'page' => 
    array (
      0 => 12,
    ),
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-assignments-5', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-assignments-6', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-assignments-6',array (
  'post_type' => 
  array (
    'page' => 
    array (
      0 => 50,
    ),
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-assignments-6', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-assignments-7', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-assignments-7',array (
  'post_type' => 
  array (
    'page' => 
    array (
      0 => 14,
    ),
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-assignments-7', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-assignments-8', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-assignments-8',array (
  'post_type' => 
  array (
    'page' => 
    array (
      0 => 16,
    ),
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-assignments-8', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-assignments-9', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-assignments-9',array (
  'post_type' => 
  array (
    'page' => 
    array (
      0 => 18,
    ),
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-assignments-9', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-sidebar-1', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-sidebar-1',array (
  'wp_inactive_widgets' => 
  array (
  ),
  'showcase' => 
  array (
    0 => 'roksprocket_options-10014',
    1 => 'gantrydivider-10012',
    2 => 'roksprocket_options-10015',
  ),
  'feature' => 
  array (
    0 => 'text-10009',
    1 => 'gantrydivider-10013',
    2 => 'text-10010',
    3 => 'gantrydivider-10014',
    4 => 'text-10011',
  ),
  'maintop' => 
  array (
    0 => 'roksprocket_options-10016',
    1 => 'gantrydivider-10015',
    2 => 'text-10012',
    3 => 'gantrydivider-10016',
    4 => 'roksprocket_options-10017',
  ),
  'bottom' => 
  array (
    0 => 'roksprocket_options-10018',
  ),
  'footer' => 
  array (
    0 => 'text-10013',
    1 => 'gantrydivider-10017',
    2 => 'text-10014',
    3 => 'gantrydivider-10018',
    4 => 'text-10015',
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-sidebar-1', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-sidebar-10', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-sidebar-10',array (
  'wp_inactive_widgets' => 
  array (
  ),
  'showcase' => 
  array (
    0 => 'text-100006',
  ),
  'feature' => 
  array (
    0 => 'text-100007',
  ),
  'maintop' => 
  array (
    0 => 'text-100011',
  ),
  'sidebar' => 
  array (
  ),
  'mainbottom' => 
  array (
    0 => 'text-100009',
  ),
  'extension' => 
  array (
    0 => 'text-100010',
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-sidebar-10', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-sidebar-11', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-sidebar-11',array (
  'wp_inactive_widgets' => 
  array (
  ),
  'showcase' => 
  array (
    0 => 'text-110006',
  ),
  'sidebar' => 
  array (
  ),
  'expandedbottom' => 
  array (
    0 => 'text-110007',
  ),
  'extension' => 
  array (
    0 => 'text-110008',
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-sidebar-11', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-sidebar-12', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-sidebar-12',array (
  'wp_inactive_widgets' => 
  array (
  ),
  'showcase' => 
  array (
    0 => 'text-120006',
  ),
  'expandedtop' => 
  array (
    0 => 'roksprocket_options-120003',
  ),
  'maintop' => 
  array (
    0 => 'roksprocket_options-120004',
  ),
  'sidebar' => 
  array (
  ),
  'extension' => 
  array (
    0 => 'text-120007',
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-sidebar-12', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-sidebar-13', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-sidebar-13',array (
  'wp_inactive_widgets' => 
  array (
  ),
  'showcase' => 
  array (
    0 => 'text-130006',
  ),
  'extension' => 
  array (
    0 => 'text-130007',
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-sidebar-13', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-sidebar-14', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-sidebar-14',array (
  'wp_inactive_widgets' => 
  array (
  ),
  'showcase' => 
  array (
    0 => 'text-140006',
  ),
  'feature' => 
  array (
    0 => 'text-140007',
  ),
  'sidebar' => 
  array (
  ),
  'mainbottom' => 
  array (
    0 => 'roksprocket_options-140003',
  ),
  'extension' => 
  array (
    0 => 'text-140008',
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-sidebar-14', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-sidebar-15', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-sidebar-15',array (
  'wp_inactive_widgets' => 
  array (
  ),
  'showcase' => 
  array (
    0 => 'text-150006',
  ),
  'sidebar' => 
  array (
    0 => 'text-150007',
  ),
  'extension' => 
  array (
    0 => 'text-150008',
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-sidebar-15', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-sidebar-16', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-sidebar-16',array (
  'wp_inactive_widgets' => 
  array (
  ),
  'showcase' => 
  array (
    0 => 'text-160006',
  ),
  'sidebar' => 
  array (
  ),
  'extension' => 
  array (
    0 => 'text-160007',
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-sidebar-16', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-sidebar-2', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-sidebar-2',array (
  'wp_inactive_widgets' => 
  array (
  ),
  'showcase' => 
  array (
    0 => 'text-20005',
  ),
  'sidebar' => 
  array (
  ),
  'footer' => 
  array (
    0 => 'text-20006',
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-sidebar-2', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-sidebar-3', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-sidebar-3',array (
  'wp_inactive_widgets' => 
  array (
  ),
  'sidebar' => 
  array (
  ),
  'expandedbottom' => 
  array (
    0 => 'text-30006',
  ),
  'footer' => 
  array (
    0 => 'text-30007',
    1 => 'gantrydivider-30004',
    2 => 'text-30008',
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-sidebar-3', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-sidebar-4', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-sidebar-4',array (
  'wp_inactive_widgets' => 
  array (
  ),
  'sidebar' => 
  array (
    0 => 'text-40014',
    1 => 'text-40015',
    2 => 'text-40016',
    3 => 'text-40017',
  ),
  'content-bottom' => 
  array (
    0 => 'text-40006',
    1 => 'text-40007',
    2 => 'text-40010',
    3 => 'text-40011',
    4 => 'gantrydivider-40004',
    5 => 'text-40008',
    6 => 'text-40009',
    7 => 'text-40012',
    8 => 'text-40013',
  ),
  'footer' => 
  array (
    0 => 'text-40018',
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-sidebar-4', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-sidebar-5', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-sidebar-5',array (
  'wp_inactive_widgets' => 
  array (
  ),
  'sidebar' => 
  array (
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-sidebar-5', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-sidebar-6', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-sidebar-6',array (
  'wp_inactive_widgets' => 
  array (
  ),
  'expandedtop' => 
  array (
    0 => 'text-60006',
  ),
  'sidebar' => 
  array (
  ),
  'footer' => 
  array (
    0 => 'text-60007',
    1 => 'gantrydivider-60004',
    2 => 'text-60008',
    3 => 'gantrydivider-60005',
    4 => 'text-60009',
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-sidebar-6', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-sidebar-7', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-sidebar-7',array (
  'wp_inactive_widgets' => 
  array (
  ),
  'showcase' => 
  array (
    0 => 'text-70006',
  ),
  'sidebar' => 
  array (
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-sidebar-7', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-sidebar-8', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-sidebar-8',array (
  'wp_inactive_widgets' => 
  array (
  ),
  'showcase' => 
  array (
    0 => 'text-80006',
  ),
  'maintop' => 
  array (
    0 => 'text-80010',
  ),
  'sidebar' => 
  array (
  ),
  'mainbottom' => 
  array (
    0 => 'text-80011',
  ),
  'extension' => 
  array (
    0 => 'text-80009',
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-sidebar-8', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-sidebar-9', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-sidebar-9',array (
  'wp_inactive_widgets' => 
  array (
  ),
  'showcase' => 
  array (
    0 => 'text-90006',
  ),
  'sidebar' => 
  array (
  ),
  'mainbottom' => 
  array (
    0 => 'text-90011',
    1 => 'text-90008',
    2 => 'text-90009',
  ),
  'extension' => 
  array (
    0 => 'text-90010',
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-sidebar-9', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-widgets-1', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-widgets-1',array (
  'widget_roksprocket_options' => 
  array (
    10003 => 
    array (
      'title' => '',
      'module_id' => '6',
      'variations' => 
      array (
        0 => 'box1',
        1 => 'nomarginall',
      ),
      'widget_chrome' => '',
      'custom-variations' => 'fp-feature-02',
    ),
    10014 => 
    array (
      'title' => '',
      'module_id' => '11',
      'widget_chrome' => '',
      'custom-variations' => 'fp-roksprocket-features-showcase',
    ),
    10015 => 
    array (
      'title' => '',
      'module_id' => '12',
      'variations' => 
      array (
        0 => 'box3',
        1 => 'nomarginall',
      ),
      'widget_chrome' => '',
      'custom-variations' => 'fp-roksprocket-tabs-showcase',
    ),
    10016 => 
    array (
      'title' => 'Top News',
      'module_id' => '13',
      'variations' => 
      array (
        0 => 'title1',
      ),
      'widget_chrome' => '',
      'custom-variations' => 'fp-roksprocket-lists-maintop',
    ),
    10017 => 
    array (
      'title' => 'Top Reviews',
      'module_id' => '14',
      'variations' => 
      array (
        0 => 'title1',
      ),
      'widget_chrome' => '',
      'custom-variations' => 'fp-roksprocket-lists-maintop2',
    ),
    10018 => 
    array (
      'title' => '',
      'module_id' => '15',
      'variations' => 
      array (
        0 => 'nopaddingall',
        1 => 'nomarginall',
      ),
      'widget_chrome' => '',
      'custom-variations' => 'fp-roksprocket-strips-bottom',
    ),
    '_multiwidget' => 1,
  ),
  'widget_text' => 
  array (
    10007 => 
    array (
      'title' => '',
      'text' => '<span>You can place any widget into the sidepanel position.</span>',
      'filter' => false,
      'custom-variations' => '',
      'widget_chrome' => '',
      'variations' => 
      array (
        0 => 'box2',
      ),
    ),
    10008 => 
    array (
      'title' => '',
      'text' => '<a href="#" class="fp-sidepanel-social-icon"><span class="fa fa-facebook-square"></span></a>
<a href="#" class="fp-sidepanel-social-icon"><span class="fa fa-twitter-square"></span></a>
<a href="#" class="fp-sidepanel-social-icon"><span class="fa fa-google-plus-square"></span></a>
<a href="#" class="fp-sidepanel-social-icon"><span class="fa fa-flickr"></span></a>
<a href="#" class="fp-sidepanel-social-icon"><span class="fa fa-github-square"></span></a>
<a href="#" class="fp-sidepanel-social-icon"><span class="fa fa-linkedin-square"></span></a>
<a href="#" class="fp-sidepanel-social-icon"><span class="fa fa-pinterest-square"></span></a>
<a href="#" class="fp-sidepanel-social-icon"><span class="fa fa-instagram"></span></a>
<a href="#" class="fp-sidepanel-social-icon"><span class="fa fa-tumblr-square"></span></a>
<a href="#" class="fp-sidepanel-social-icon"><span class="fa fa-trello"></span></a>
<a href="#" class="fp-sidepanel-social-icon"><span class="fa fa-xing-square"></span></a>
<a href="#" class="fp-sidepanel-social-icon"><span class="fa fa-skype"></span></a>',
      'filter' => false,
      'custom-variations' => 'rt-sidepanel-bottom fp-sidepanel-03',
      'widget_chrome' => '',
    ),
    10009 => 
    array (
      'title' => '',
      'text' => '<div class="rt-image-group">
	<div class="rt-image-block">
		<div class="rt-image-item">
			<img src="@RT_SITE_URL@/wp-content/rockettheme/rt_plethora_wp/home/fp-feature-a/img-01.jpg" alt="image" />
		</div>
		<div class="rt-image-tag">
			<span>Free Plugin</span>
		</div>
		<div class="rt-image-content">
			<div class="rt-image-title">
				<span>RokSprocket<span class="hidden-tablet"> is a powerful, switchblade content plugin</span>.</span>
			</div>		
			<div class="rt-image-desc">
				<p>RokSprocket is a multi-purposes content plugin, with a custom, advanced and intuitive user interface<span class="hidden-tablet">, as well as several layout modes with numerous themes</span>.</p>
				<a href="#">Read the whole story <i class="fa fa-angle-double-right"></i></a>
			</div>				
		</div>	
	</div>	
</div>
',
      'filter' => false,
      'custom-variations' => 'fp-feature-a',
      'widget_chrome' => '',
    ),
    10010 => 
    array (
      'title' => '',
      'text' => '<div class="rt-image-group">
	<div class="rt-image-block">
		<div class="rt-image-item">
			<img src="@RT_SITE_URL@/wp-content/rockettheme/rt_plethora_wp/home/fp-feature-b/img-01.jpg" alt="image" />
		</div>
		<div class="rt-image-tag">
			<span>Speed</span>
		</div>
		<div class="rt-image-content">
			<p class="smallmarginbottom">Improve site speed<span class="hidden-tablet"> performance</span></p>
			<span class="rt-text-small"><em>LESS</em></span>
		</div>		
	</div>
	<div class="rt-image-block">
		<div class="rt-image-item">
			<img src="@RT_SITE_URL@/wp-content/rockettheme/rt_plethora_wp/home/fp-feature-b/img-02.jpg" alt="image" />
		</div>
		<div class="rt-image-tag">
			<span>Search</span>
		</div>		
		<div class="rt-image-content">
			<p class="smallmarginbottom">Ajax <span class="hidden-tablet">powered </span>site and Google search</p>	
			<span class="rt-text-small"><em>RokAjaxSearch</em></span>
		</div>		
	</div>		
</div>
',
      'filter' => false,
      'custom-variations' => 'fp-feature-b',
      'widget_chrome' => '',
    ),
    10011 => 
    array (
      'title' => '',
      'text' => '<div class="rt-image-group">
	<div class="rt-image-block">
		<div class="rt-image-item">
			<img src="@RT_SITE_URL@/wp-content/rockettheme/rt_plethora_wp/home/fp-feature-c/img-01.jpg" alt="image" />
		</div>
		<div class="rt-image-tag">
			<span>Layouts</span>
		</div>
		<div class="rt-image-content">
			<div class="rt-image-title">
				<span class="hidden-tablet">Multiple RokSprocket layout and theme options.</span>
				<span class="visible-tablet">Layouts and themes.</span>
			</div>		
			<div class="rt-image-desc">
				<p>Several content display options to <span class="hidden-tablet">choose and </span>configure.</p>
				<a href="#">Read the whole story <i class="fa fa-angle-double-right"></i></a>
			</div>				
		</div>	
	</div>	
</div>
',
      'filter' => false,
      'custom-variations' => 'fp-feature-c',
      'widget_chrome' => '',
    ),
    10012 => 
    array (
      'title' => 'Top Galleries',
      'text' => '<div class="rt-image-group">
	<div class="rt-image-block">
		<div class="rt-image-item">
			<img src="@RT_SITE_URL@/wp-content/rockettheme/rt_plethora_wp/home/fp-maintop-b/img-01.jpg" alt="image" />
		</div>
		<div class="rt-image-tag">
			<span>Error</span>
		</div>
		<div class="rt-image-content">
			<p class="smallmarginbottom">Custom 404 error page override</p>
			<span class="rt-text-small"><em>error.php</em></span>
		</div>		
	</div>
	<div class="rt-image-block">
		<div class="rt-image-item">
			<img src="@RT_SITE_URL@/wp-content/rockettheme/rt_plethora_wp/home/fp-maintop-b/img-02.jpg" alt="image" />
		</div>
		<div class="rt-image-tag">
			<span>Maintenance</span>
		</div>		
		<div class="rt-image-content">
			<p class="smallmarginbottom">Custom maintenance page override</p>	
			<span class="rt-text-small"><em>maintenance.php</em></span>
		</div>		
	</div>
	<div class="rt-image-block">
		<div class="rt-image-item">
			<img src="@RT_SITE_URL@/wp-content/rockettheme/rt_plethora_wp/home/fp-maintop-b/img-03.jpg" alt="image" />
		</div>
		<div class="rt-image-tag">
			<span>Coming Soon</span>
		</div>			
		<div class="rt-image-content">
			<p class="smallmarginbottom">Unique coming soon offline page</p>
			<span class="rt-text-small"><em>comingsoon.php</em></span>	
		</div>		
	</div>		
</div>
',
      'filter' => false,
      'custom-variations' => 'fp-maintop-b',
      'widget_chrome' => '',
      'variations' => 
      array (
        0 => 'title1',
      ),
    ),
    10013 => 
    array (
      'title' => 'About Plethora',
      'text' => '<h4 class="nomarginbottom"><span class="rt-icon-left fa fa-picture-o"></span> <a href="#">RocketLauncher<span class="hidden-tablet"> Package</span></a></h4>
<p class="rt-text-small nomarginbottom">Quickly demo replication</p>
<hr class="clear" />

<h4 class="nomarginbottom"><span class="rt-icon-left fa fa-picture-o"></span> <a href="#">Editable <span class="hidden-tablet">PNG </span>Sources</a></h4>
<p class="rt-text-small nomarginbottom">Adobe&reg; Fireworks PNG Sources</p>
<hr class="clear" />

<h4 class="nomarginbottom"><span class="rt-icon-left fa fa-picture-o"></span> <a href="#"><span class="hidden-tablet">Free </span>Documentation</a></h4>
<p class="rt-text-small nomarginbottom">Online and publicly available</p>
<hr class="clear" />

<h4 class="nomarginbottom"><span class="rt-icon-left fa fa-picture-o"></span> <a href="#">Integrated Addons</a></h4>
<p class="rt-text-small nomarginbottom">Free &amp; GPL RokPlugins</p>',
      'filter' => false,
      'custom-variations' => 'fp-footer-a',
      'widget_chrome' => '',
      'variations' => 
      array (
        0 => 'title1',
      ),
    ),
    10014 => 
    array (
      'title' => 'Sample Pages',
      'text' => '<div class="gantry-width-container rt-center">
	<div class="gantry-width-33">
		<div class="gantry-width-spacer">
			<a href="@RT_SITE_URL@/about-us/" class="rt-icon-item">
				<span class="rt-icon-large"><i class="fa fa-star"></i></span><br />
				<span>About</span>				
			</a>
		</div>
	</div>
	<div class="gantry-width-33">
		<div class="gantry-width-spacer">
			<a href="@RT_SITE_URL@/the-team/" class="rt-icon-item">
				<span class="rt-icon-large"><i class="fa fa-users"></i></span><br />
				<span>Team</span>				
			</a>
		</div>
	</div>
	<div class="gantry-width-33">
		<div class="gantry-width-spacer">
			<a href="@RT_SITE_URL@/services/" class="rt-icon-item">
				<span class="rt-icon-large"><i class="fa fa-briefcase"></i></span><br />
				<span>Service</span>				
			</a>
		</div>
	</div>

	<div class="gantry-width-33">
		<div class="gantry-width-spacer">
			<a href="@RT_SITE_URL@/pricing-tables/" class="rt-icon-item">
				<span class="rt-icon-large"><i class="fa fa-list-alt"></i></span><br />
				<span>Pricing</span>				
			</a>
		</div>
	</div>
	<div class="gantry-width-33">
		<div class="gantry-width-spacer">
			<a href="@RT_SITE_URL@/portfolio/" class="rt-icon-item">
				<span class="rt-icon-large"><i class="fa fa-cogs"></i></span><br />
				<span>Work</span>				
			</a>
		</div>
	</div>
	<div class="gantry-width-33">
		<div class="gantry-width-spacer">
			<a href="@RT_SITE_URL@/category/blog/" class="rt-icon-item">
				<span class="rt-icon-large"><i class="fa fa-file-text"></i></span><br />
				<span>Blog</span>				
			</a>
		</div>
	</div>

	<div class="gantry-width-33">
		<div class="gantry-width-spacer">
			<a href="@RT_SITE_URL@/faq/" class="rt-icon-item">
				<span class="rt-icon-large"><i class="fa fa-comments"></i></span><br />
				<span>FAQ</span>				
			</a>
		</div>
	</div>
	<div class="gantry-width-33">
		<div class="gantry-width-spacer">
			<a href="@RT_SITE_URL@/contact-us/" class="rt-icon-item">
				<span class="rt-icon-large"><i class="fa fa-ticket"></i></span><br />
				<span>Contact</span>				
			</a>
		</div>
	</div>
	<div class="gantry-width-33">
		<div class="gantry-width-spacer">
			<a href="@RT_SITE_URL@/?tmpl=404" class="rt-icon-item">
				<span class="rt-icon-large"><i class="fa fa-chain-broken"></i></span><br />
				<span>Error</span>				
			</a>
		</div>
	</div>				
</div>
',
      'filter' => false,
      'custom-variations' => 'fp-footer-b',
      'widget_chrome' => '',
      'variations' => 
      array (
        0 => 'title1',
      ),
    ),
    10015 => 
    array (
      'title' => 'More Info',
      'text' => '<p>Enter your email address below and subscribe to our newsletter. We hate spam as much as you do.</p>
<form class="rt-form-horizontal" onsubmit="window.open(\'http://feedburner.google.com/fb/a/mailverify?uri=rocketthemeblog\', \'popupwindow\', \'scrollbars=yes,width=550,height=520\');return true" target="popupwindow" method="post" action="http://feedburner.google.com/fb/a/mailverify">
	<input type="text" name="email" class="inputbox" placeholder="Your Email" />
	<input type="hidden" name="uri" value="rocketthemeblog" />
	<input type="hidden" value="en_US" name="loc" />
	<input type="submit" value="Join" class="readon" name="Submit" />
</form>

<div class="gantry-width-container">
	<div class="gantry-width-50">
		<div class="gantry-width-spacer nomarginleft">
			<div class="module-title largemargintop">
				<h2 class="title"><span>Quick Links</span></h2>
			</div>
			<ul class="rt-footer-menu list-group">
				<li><i class="fa fa-star fa-fw"></i><a href="#"> About</a></li>
				<li><i class="fa fa-edit fa-fw"></i><a href="#"> Docs</a></li>
				<li><i class="fa fa-cog fa-fw"></i><a href="#"> Help</a></li>
				<li><i class="fa fa-comment fa-fw"></i><a href="#"> Contact</a></li>
			</ul>
		</div>
	</div>
	<div class="gantry-width-50">
		<div class="gantry-width-spacer">
			<div class="module-title largemargintop">
				<h2 class="title"><span>Elsewhere</span></h2>
			</div>
			<ul class="rt-footer-menu list-group">
				<li><i class="fa fa-twitter fa-fw"></i><a href="#"> Twitter</a></li>
				<li><i class="fa fa-facebook fa-fw"></i><a href="#"> Facebook</a></li>
				<li><i class="fa fa-google-plus fa-fw"></i><a href="#"> Google Plus</a></li>
				<li><i class="fa fa-rss fa-fw"></i><a href="#"> RSS</a></li>
			</ul>
		</div>
	</div>
</div>',
      'filter' => false,
      'custom-variations' => 'fp-footer-c',
      'widget_chrome' => '',
      'variations' => 
      array (
        0 => 'title1',
      ),
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantrydivider' => 
  array (
    10012 => 
    array (
    ),
    10013 => 
    array (
    ),
    10014 => 
    array (
    ),
    10015 => 
    array (
    ),
    10016 => 
    array (
    ),
    10017 => 
    array (
    ),
    10018 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_social' => 
  array (
    '_multiwidget' => 1,
  ),
  'widget_gantry_sideplogo' => 
  array (
    10002 => 
    array (
      'widget_chrome' => '',
      'custom-variations' => '',
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_menu' => 
  array (
    10005 => 
    array (
      'title' => '',
      'nav_menu' => 'main-menu',
      'theme' => 'gantry_dropdown',
      'style' => '',
      'limit_levels' => '0',
      'startLevel' => '0',
      'endLevel' => '0',
      'showAllChildren' => '1',
      'show_empty_menu' => '0',
      'maxdepth' => '10',
      'widget_chrome' => 'sidepanelmenu',
      'custom-variations' => '',
    ),
    '_multiwidget' => 1,
  ),
  'widget_rokajaxsearch' => 
  array (
    '_multiwidget' => 1,
  ),
  'widget_gantry_loginform' => 
  array (
    '_multiwidget' => 1,
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-widgets-1', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-widgets-10', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-widgets-10',array (
  'widget_text' => 
  array (
    100006 => 
    array (
      'title' => 'Services[span class="rt-title-tag"]What We Can Do[/span]',
      'text' => '&nbsp;',
      'filter' => false,
      'custom-variations' => 'rt-title-large rt-nomodulecontent',
      'widget_chrome' => '',
      'variations' => 
      array (
        0 => 'box3',
        1 => 'rt-center',
        2 => 'nomarginall',
      ),
    ),
    100007 => 
    array (
      'title' => '',
      'text' => '<p>The two charts shown below are the sample chart canvas based on Chart.js. Chart.js is an easy, object oriented client side graphs for designers and developers. For more information how to create great looking charts using Chart.js, please visit <a href="http://www.chartjs.org/">Chart.js</a> homepage or download the script <a href="https://github.com/nnnick/Chart.js">here</a>.</p>

<br />

<div class="gantry-row">
	<div class="gantry-width-container">
	<div class="gantry-width-50">
		<div class="gantry-width-spacer">
			<canvas id="myChart-a" width="600" height="320"></canvas>

			<script type="text/javascript">
				var lineChartData = {
					labels : ["Joomla","Wordpress","Magento","phpBB","Kunena","Email","Forum"],
					datasets : [
						{
							fillColor : "transparent",
							strokeColor : "#97DBF2",
							pointColor : "#97DBF2",
							pointStrokeColor : "#97DBF2",
							data : [600,500,900,800,500,400,700]
						},
						{
							fillColor : "transparent",
							strokeColor : "#DE4E33",
							pointColor : "#DE4E33",
							pointStrokeColor : "#DE4E33",
							data : [200,400,600,300,900,200,500]
						},
					]
				},
				options = {
					//Boolean - If we want to override with a hard coded scale
					scaleOverride : true,

					//** Required if scaleOverride is true **
					//Number - The number of steps in a hard coded scale
					scaleSteps : 9,
					//Number - The value jump in the hard coded scale
					scaleStepWidth : 100,
					//Number - The scale starting value
					scaleStartValue : 100,

					//String - Scale label font colour
					scaleFontColor : "#383838",

					//String - Colour of the scale line
					scaleLineColor : "#383838",

					//String - Colour of the grid lines
					scaleGridLineColor : "#383838",

					//Boolean - Whether the line is curved between points
					bezierCurve : false,

					//Number - Radius of each point dot in pixels
					pointDotRadius : 8,

					//Number - Pixel width of point dot stroke
					pointDotStrokeWidth : 5,

					//Number - Pixel width of dataset stroke
					datasetStrokeWidth : 6,

					//Boolean - Whether to fill the dataset with a colour
					datasetFill : true,

				}

				//Get the context of the canvas element we want to select
				var ctx = document.getElementById("myChart-a").getContext("2d");
				var newChartA = new Chart(ctx).Line(lineChartData, options);

			</script>
		</div>
	</div>

	<div class="gantry-width-50">
		<div class="gantry-width-spacer">
			<canvas id="myChart-b" width="600" height="320"></canvas>

			<script type="text/javascript">
				var barChartData = {
					labels : ["January","February","March","April","May","June","July"],
					datasets : [
						{
							fillColor : "#D95240",
							strokeColor : "#D95240",
							data : [600,500,900,800,500,600,900]
						},
						{
							fillColor : "#6FC6A0",
							strokeColor : "#6FC6A0",
							data : [700,300,800,700,600,500,800]
						}
					]
				},
				options = {
					//Boolean - If we want to override with a hard coded scale
					scaleOverride : true,
					
					//** Required if scaleOverride is true **
					//Number - The number of steps in a hard coded scale
					scaleSteps : 9,
					//Number - The value jump in the hard coded scale
					scaleStepWidth : 100,
					//Number - The scale starting value
					scaleStartValue : 100,

					//String - Scale label font colour
					scaleFontColor : "#383838",

					//String - Colour of the scale line
					scaleLineColor : "#383838",

					//String - Colour of the grid lines
					scaleGridLineColor : "#383838"
				}

				//Get the context of the canvas element we want to select
				var ctx = document.getElementById("myChart-b").getContext("2d");
				var newChartB = new Chart(ctx).Bar(barChartData, options);

			</script>
		</div>
	</div>
</div>
</div>

<div class="clear"></div><br />

<p class="success">NOTE: The canvas only works on modern browsers (Firefox, Opera, Chrome, Safari, and Internet Explorer 9+) that support the HTML5 canvas element. <a target="_blank" href="http://www.w3schools.com/html/html5_canvas.asp">Internet Explorer 8 and earlier versions, do not support the canvas element.</a></p>',
      'filter' => false,
      'custom-variations' => '',
      'widget_chrome' => '',
      'variations' => 
      array (
        0 => 'box4',
        1 => 'nomarginall',
      ),
    ),
    100009 => 
    array (
      'title' => '',
      'text' => '<div class="gantry-width-container">
	<div class="gantry-width-25">
	<img src="@RT_SITE_URL@/wp-content/rockettheme/rt_plethora_wp/pages/services/img-02.jpg" alt="image" />
	<div class="gantry-width-spacer">	
		<h4>Grid System</h4>
		<p>Objectively innovate empowered manufactured products with parallel platforms.</p>
	</div>
</div>

<div class="gantry-width-25">
		<img src="@RT_SITE_URL@/wp-content/rockettheme/rt_plethora_wp/pages/services/img-03.jpg" alt="image" />
	<div class="gantry-width-spacer">	
		<h4>Custom Interface</h4>
		<p>Proactively envisioned multimedia based expertise and effective cross-media strategies.</p>
	</div>
</div>

<div class="gantry-width-25">
	<img src="@RT_SITE_URL@/wp-content/rockettheme/rt_plethora_wp/pages/services/img-04.jpg" alt="image" />
	<div class="gantry-width-spacer">	
		<h4>Flexible Layouts</h4>
		<p>Interactively coordinate proactive e-commerce via process-centric outside the box.</p>
	</div>
</div>

<div class="gantry-width-25">
	<img src="@RT_SITE_URL@/wp-content/rockettheme/rt_plethora_wp/pages/services/img-05.jpg" alt="image" />
	<div class="gantry-width-spacer">	
		<h4>Ultimate Control</h4>
		<p>Holistically pontificate installed base portals after maintainable affordable products.</p>
	</div>
</div>
</div>

<div class="clear"></div>',
      'filter' => false,
      'custom-variations' => '',
      'widget_chrome' => '',
      'variations' => 
      array (
        0 => 'nopaddingall',
      ),
    ),
    100010 => 
    array (
      'title' => 'Save Your Time and Effort',
      'text' => '<p>We Always Create the Real Value and Work with All Passion</p>

<p><a href="www.rockettheme.com/wordpress-themes/plethora" class="readon">Purchase Plethora</a></p>',
      'filter' => false,
      'custom-variations' => '',
      'widget_chrome' => '',
      'variations' => 
      array (
        0 => 'rt-center',
      ),
    ),
    100011 => 
    array (
      'title' => '',
      'text' => '<div class="gantry-row">
	<div class="gantry-width-container">
	<div class="gantry-width-50">
		<div class="gantry-width-spacer">
			<h3>Our Core Service</h3>
			<p>Globally incubate standards compliant channels before scalable benefits. Quickly disseminate superior deliverables whereas web-enabled applications.</p>
			<div class="hidden-tablet">
				<h3>We Do Our Best</h3>
				<p>Proactively envisioned multimedia based expertise and cross-media growth strategies.</p>
				<ul>
					<li>HTML5 &amp; CSS3</li>
					<li>Gantry Framework</li>
					<li>RokSprocket Styling</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="gantry-width-50">
		<div class="gantry-width-spacer">
			<span class="rt-image"><img src="@RT_SITE_URL@/wp-content/rockettheme/rt_plethora_wp/pages/services/img-01.jpg" alt="image" /></span>
		</div>
	</div>	
</div>
</div>

<div class="clear"></div>',
      'filter' => false,
      'custom-variations' => 'rt-title-center',
      'widget_chrome' => '',
      'variations' => 
      array (
        0 => 'box1',
        1 => 'nomarginall',
      ),
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_breakcrumbs' => 
  array (
    '_multiwidget' => 1,
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-widgets-10', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-widgets-11', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-widgets-11',array (
  'widget_text' => 
  array (
    110006 => 
    array (
      'title' => 'Pricing[span class="rt-title-tag"]Pick a Plan that Fits You[/span]',
      'text' => '&nbsp;',
      'filter' => false,
      'custom-variations' => 'rt-title-large rt-nomodulecontent',
      'widget_chrome' => '',
      'variations' => 
      array (
        0 => 'box3',
        1 => 'rt-center',
        2 => 'nomarginall',
      ),
    ),
    110007 => 
    array (
      'title' => 'Try it Out for 10 Days Free',
      'text' => '<div class="gantry-width-spacer">
	<p class="nomarginbottom">All plans come with awesome support by email and phone. There is no hidden fee!</p>
</div>

<div class="gantry-width-container">
	<div class="gantry-width-25">
	<ul class="rt-table">
		<li class="rt-table-title">Basic</li>
		<li class="rt-table-price">$28</li>
		<li class="rt-table-description">Globally incubate standards compliant channels</li>
		<li class="rt-table-item">5GB Storage</li>
		<li class="rt-table-item">10 Users</li>
		<li class="rt-table-item">20 Emails</li>
		<li class="rt-table-cta-button"><a class="readon" href="http://www.rockettheme.com/wordpress-themes/plethora">Sign Up</a></li>
	</ul>
</div>

<div class="gantry-width-25">
	<ul class="rt-table">
		<li class="rt-table-title">Standard</li>
		<li class="rt-table-price">$58</li>
		<li class="rt-table-description">Globally incubate standards compliant channels</li>
		<li class="rt-table-item">25GB Storage</li>
		<li class="rt-table-item">20 Users</li>
		<li class="rt-table-item">30 Emails</li>
		<li class="rt-table-cta-button"><a class="readon" href="http://www.rockettheme.com/wordpress-themes/plethora">Sign Up</a></li>
	</ul>
</div>

<div class="gantry-width-25">
	<ul class="rt-table">
		<li class="rt-table-title">Titanium</li>
		<li class="rt-table-price">$88</li>
		<li class="rt-table-description">Globally incubate standards compliant channels</li>
		<li class="rt-table-item">50GB Storage</li>
		<li class="rt-table-item">30 Users</li>
		<li class="rt-table-item">40 Emails</li>
		<li class="rt-table-cta-button"><a class="readon" href="http://www.rockettheme.com/wordpress-themes/plethora">Sign Up</a></li>
	</ul>
</div>

<div class="gantry-width-25">
	<ul class="rt-table rt-table-last-col">
		<li class="rt-table-title">Platinum</li>
		<li class="rt-table-price">$288</li>
		<li class="rt-table-description">Globally incubate standards compliant channels</li>
		<li class="rt-table-item">500GB Storage</li>
		<li class="rt-table-item">100 Users</li>
		<li class="rt-table-item">200 Emails</li>
		<li class="rt-table-cta-button"><a class="readon" href="http://www.rockettheme.com/wordpress-themes/plethora">Sign Up</a></li>
	</ul>
</div>
</div>

<div class="clear"></div>

<div class="gantry-width-spacer">
	<p>Free <strong>10 days trial</strong> on all plans. No credit card needed! Need a bigger plan? <a href="http://www.rockettheme.com/wordpress-themes/plethora">View Professional Plan</a>.</p>
</div>',
      'filter' => false,
      'custom-variations' => '',
      'widget_chrome' => '',
      'variations' => 
      array (
        0 => 'rt-center',
        1 => 'nopaddingright',
        2 => 'nopaddingleft',
        3 => 'nomarginright',
        4 => 'nomarginleft',
      ),
    ),
    110008 => 
    array (
      'title' => 'No Hidden Fee',
      'text' => '<p>No Credit Card Required and No Long-Term Contracts</p>

<p><a href="http://www.rockettheme.com/wordpress-themes/plethora" class="readon">Sign Up</a></p>',
      'filter' => false,
      'custom-variations' => '',
      'widget_chrome' => '',
      'variations' => 
      array (
        0 => 'rt-center',
      ),
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_breakcrumbs' => 
  array (
    '_multiwidget' => 1,
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-widgets-11', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-widgets-12', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-widgets-12',array (
  'widget_text' => 
  array (
    120006 => 
    array (
      'title' => 'Portfolio[span class="rt-title-tag"]What We Have Already Done[/span]',
      'text' => '&nbsp;',
      'filter' => false,
      'custom-variations' => 'rt-title-large rt-nomodulecontent',
      'widget_chrome' => '',
      'variations' => 
      array (
        0 => 'box3',
        1 => 'rt-center',
        2 => 'nomarginall',
      ),
    ),
    120007 => 
    array (
      'title' => 'Our Satisfied Clients',
      'text' => '<p>Will You be the Next to Join Our Happy Clients?</p>

<br />

<div class="gantry-row">
	<div class="gantry-width-container">
	<div class="gantry-width-20">
		<div class="gantry-width-spacer">
			<a href="http://www.rockettheme.com/wordpress-themes/hadron"><img class="rt-transparent-image" src="@RT_SITE_URL@/wp-content/rockettheme/rt_plethora_wp/pages/portfolio/img-18.png" alt="image" /></a>
		</div>
	</div>
	<div class="gantry-width-20">
		<div class="gantry-width-spacer">
			<a href="http://www.rockettheme.com/wordpress-themes/acacia"><img class="rt-transparent-image" src="@RT_SITE_URL@/wp-content/rockettheme/rt_plethora_wp/pages/portfolio/img-19.png" alt="image" /></a>
		</div>
	</div>
	<div class="gantry-width-20">
		<div class="gantry-width-spacer">
			<a href="http://www.rockettheme.com/wordpress-themes/corvus"><img class="rt-transparent-image" src="@RT_SITE_URL@/wp-content/rockettheme/rt_plethora_wp/pages/portfolio/img-20.png" alt="image" /></a>
		</div>
	</div>
	<div class="gantry-width-20">
		<div class="gantry-width-spacer">
			<a href="http://www.rockettheme.com/wordpress-themes/spectral"><img class="rt-transparent-image" src="@RT_SITE_URL@/wp-content/rockettheme/rt_plethora_wp/pages/portfolio/img-21.png" alt="image" /></a>
		</div>
	</div>
	<div class="gantry-width-20">
		<div class="gantry-width-spacer">
			<a href="http://www.rockettheme.com/wordpress-themes/stratos"><img class="rt-transparent-image" src="@RT_SITE_URL@/wp-content/rockettheme/rt_plethora_wp/pages/portfolio/img-22.png" alt="image" /></a>
		</div>
	</div>
</div>
</div>

<div class="clear"></div><br /><br />

<p><a href="http://www.rockettheme.com/wordpress-themes/plethora" class="readon">Join Now</a></p>',
      'filter' => false,
      'custom-variations' => '',
      'widget_chrome' => '',
      'variations' => 
      array (
        0 => 'rt-center',
      ),
    ),
    '_multiwidget' => 1,
  ),
  'widget_roksprocket_options' => 
  array (
    120003 => 
    array (
      'title' => '',
      'module_id' => '1',
      'widget_chrome' => '',
      'custom-variations' => '',
    ),
    120004 => 
    array (
      'title' => 'What Our Clients Say',
      'module_id' => '2',
      'variations' => 
      array (
        0 => 'rt-center',
      ),
      'widget_chrome' => '',
      'custom-variations' => '',
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_breakcrumbs' => 
  array (
    '_multiwidget' => 1,
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-widgets-12', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-widgets-13', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-widgets-13',array (
  'widget_text' => 
  array (
    130006 => 
    array (
      'title' => 'Blog[span class="rt-title-tag"]Read the Latest News[/span]',
      'text' => '&nbsp;',
      'filter' => false,
      'custom-variations' => 'rt-title-large rt-nomodulecontent',
      'widget_chrome' => '',
      'variations' => 
      array (
        0 => 'box3',
        1 => 'rt-center',
        2 => 'nomarginall',
      ),
    ),
    130007 => 
    array (
      'title' => 'Join Our Newsletter',
      'text' => '<div class="gantry-row">
	<div class="gantry-width-60 gantry-block-center">
		<div class="gantry-width-spacer">
			<p><span>Get Updates, Upcoming Themes Info, and Our Great Deals!</span></p>
			<form class="rt-blog-form largemargintop largepaddingtop" action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open(\'http://feedburner.google.com/fb/a/mailverify?uri=rocketthemeblog\', \'popupwindow\', \'scrollbars=yes,width=550,height=520\');return true">
				<input type="text" placeholder="Your Email" alt="Your Email" class="inputbox" name="email">
				<input type="hidden" value="rocketthemeblog" name="uri" />
				<input type="hidden" name="loc" value="en_US" />
				<input type="submit" name="Submit" class="readon" value="Join" />
			</form>
		</div>
	</div>
</div>
<div class="clear"></div>',
      'filter' => false,
      'custom-variations' => '',
      'widget_chrome' => '',
      'variations' => 
      array (
        0 => 'rt-center',
      ),
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_breakcrumbs' => 
  array (
    '_multiwidget' => 1,
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-widgets-13', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-widgets-14', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-widgets-14',array (
  'widget_text' => 
  array (
    140006 => 
    array (
      'title' => 'FAQ[span class="rt-title-tag"]Questions and Answers[/span]',
      'text' => '&nbsp;',
      'filter' => false,
      'custom-variations' => 'rt-title-large rt-nomodulecontent',
      'widget_chrome' => '',
      'variations' => 
      array (
        0 => 'box3',
        1 => 'rt-center',
        2 => 'nomarginall',
      ),
    ),
    140007 => 
    array (
      'title' => '',
      'text' => '<div class="gantry-width-container">
	<div class="gantry-width-33">
		<div class="gantry-width-spacer largemargintop largemarginbottom">
			<img src="@RT_SITE_URL@/wp-content/rockettheme/rt_plethora_wp/pages/faq/img-01.jpg" alt="image" />
			<h4 class="medpaddingtop">Forum Support</h4>
			<p>Objectively innovate empowered manufactured products with parallel platforms.</p>
			<p><a href="http://www.rockettheme.com/forum/wordpress-theme-plethora">Ask Community</a></p>
		</div>
	</div>

	<div class="gantry-width-33">
		<div class="gantry-width-spacer largemargintop largemarginbottom">
			<img src="@RT_SITE_URL@/wp-content/rockettheme/rt_plethora_wp/pages/faq/img-02.jpg" alt="image" />
			<h4 class="medpaddingtop">Ticket &amp; Email</h4>
			<p>Proactively envisioned multimedia based expertise and effective cross-media strategies.</p>
			<p><a href="http://www.rockettheme.com/forum/wordpress-theme-plethora">Send Email</a></p>
		</div>
	</div>

	<div class="gantry-width-33">
		<div class="gantry-width-spacer largemargintop largemarginbottom">
			<img src="@RT_SITE_URL@/wp-content/rockettheme/rt_plethora_wp/pages/faq/img-03.jpg" alt="image" />
			<h4 class="medpaddingtop">Live Chat</h4>
			<p>Interactively coordinate proactive e-commerce via process-centric outside the box.</p>
			<p><a href="http://www.rockettheme.com/forum/wordpress-theme-plethora">Contact Us</a></p>
		</div>
	</div>
</div>

<div class="clear"></div>',
      'filter' => false,
      'custom-variations' => '',
      'widget_chrome' => '',
      'variations' => 
      array (
        0 => 'box1',
        1 => 'rt-center',
        2 => 'nomarginall',
      ),
    ),
    140008 => 
    array (
      'title' => 'FAQ Didn\'t Solve Your Problem?',
      'text' => '<p>Get Direct Access to the Team Via Phone, Email or Live Chat.</p>

<p><a href="http://www.rockettheme.com/forum/wordpress-theme-plethora" class="readon largemargintop">Contact Us</a></p>',
      'filter' => false,
      'custom-variations' => '',
      'widget_chrome' => '',
      'variations' => 
      array (
        0 => 'rt-center',
      ),
    ),
    '_multiwidget' => 1,
  ),
  'widget_roksprocket_options' => 
  array (
    140003 => 
    array (
      'title' => '',
      'module_id' => '3',
      'widget_chrome' => '',
      'custom-variations' => '',
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_breakcrumbs' => 
  array (
    '_multiwidget' => 1,
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-widgets-14', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-widgets-15', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-widgets-15',array (
  'widget_text' => 
  array (
    150006 => 
    array (
      'title' => 'Contact Us[span class="rt-title-tag"]We Would Love to Hear From You[/span]',
      'text' => '&nbsp;',
      'filter' => false,
      'custom-variations' => 'rt-title-large rt-nomodulecontent',
      'widget_chrome' => '',
      'variations' => 
      array (
        0 => 'box3',
        1 => 'rt-center',
        2 => 'nomarginall',
      ),
    ),
    150007 => 
    array (
      'title' => 'Contact Info',
      'text' => '<p><span class="rt-image"><img src="@RT_SITE_URL@/wp-content/rockettheme/rt_plethora_wp/pages/contact-us/img-01.jpg" alt="image" /></span></p>

<p>Plethora is only available as part of the Club Subscription.<span class="hidden-tablet"> Please use the RocketLauncher to install an equivalent of the demo onto your site.</span></p>

<h4>Address</h4>
<p>
	<span>Plethora Theme, LLC</span><br />
	<span>123 WordPress Boulevard</span><br />
	<span>Seattle, WA 00000, USA</span>
</p>

<h4>Email</h4>
<p>
	<span>noreply@plethora-theme.com</span><br />
	<span>noperson@plethora-theme.com</span>
</p>

<h4>Phone</h4>
<p>
	<span>+1(123)456-5555-555</span><br />
	<span>+1(123)456-6666-666</span>
</p>

<h4>Online Support</h4>
<p>
	<span>Skype ID: plethora.theme</span><br />
	<span>BBM PIN: 12ABC345</span>
</p>',
      'filter' => false,
      'custom-variations' => '',
      'widget_chrome' => '',
      'variations' => 
      array (
        0 => 'box1',
        1 => 'title1',
      ),
    ),
    150008 => 
    array (
      'title' => 'Got Billing and Payments Questions?',
      'text' => '<p>Email Us for Questions Involving Payments, Billing, and Membership.</p>

<p><a href="http://www.rockettheme.com/forum/wordpress-theme-plethora" class="readon">Send Email</a></p>',
      'filter' => false,
      'custom-variations' => '',
      'widget_chrome' => '',
      'variations' => 
      array (
        0 => 'rt-center',
      ),
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_breakcrumbs' => 
  array (
    '_multiwidget' => 1,
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-widgets-15', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-widgets-16', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-widgets-16',array (
  'widget_text' => 
  array (
    160006 => 
    array (
      'title' => 'Offline Page[span class="rt-title-tag"]Sample Maintenance Mode Page[/span]',
      'text' => '&nbsp;',
      'filter' => false,
      'custom-variations' => 'rt-title-large rt-nomodulecontent',
      'widget_chrome' => '',
      'variations' => 
      array (
        0 => 'box3',
        1 => 'rt-center',
        2 => 'nomarginall',
      ),
    ),
    160007 => 
    array (
      'title' => 'Maintenance Mode',
      'text' => '<p>Sorry, Our Website is Temporarily Down for Maintenance. Please Check Back Again Soon.</p>

<p><a href="http://www.rockettheme.com/wordpress-themes/plethora" class="readon">Let Me Know</a></p>',
      'filter' => false,
      'custom-variations' => '',
      'widget_chrome' => '',
      'variations' => 
      array (
        0 => 'rt-center',
      ),
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_breakcrumbs' => 
  array (
    '_multiwidget' => 1,
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-widgets-16', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-widgets-2', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-widgets-2',array (
  'widget_text' => 
  array (
    20005 => 
    array (
      'title' => '',
      'text' => '<p class="promo1">Responsive Layout</p>

<p class="promo2">A responsive design automatically adapts itself to a particular viewing environment such as desktop, tablet or mobile, without the need for separate layouts for varying platforms</p>

<p><img src="@RT_SITE_URL@/wp-content/rockettheme/rt_plethora_wp/features/features-overview/responsive-layout.png" alt="image" /></p>',
      'filter' => false,
      'custom-variations' => '',
      'widget_chrome' => '',
      'variations' => 
      array (
        0 => 'rt-center',
      ),
    ),
    20006 => 
    array (
      'title' => 'Complete Features List',
      'text' => '<h4>Plethora Features</h4>

<div class="gantry-row">
	<div class="gantry-width-container">
		<div class="gantry-width-33">
			<div class="gantry-width-spacer">
				<ul class="nomarginbottom">
					<li>Responsive Layout</li>
					<li>1200 Fixed Layout Option</li>
					<li>960 Fixed Layout Option</li>
					<li>Custom Logo Option</li>
					<li>Chart.js</li>
				</ul>
			</div>
		</div>

		<div class="gantry-width-33">
			<div class="gantry-width-spacer">
				<ul class="nomarginbottom">
					<li>6 Preset Styles</li>
					<li>8 Styled Widget Variations</li>
					<li>Dropdown-Menu &amp; Split-Menu</li>
					<li>Mobile Menu</li>
					<li>Custom Typography</li>
				</ul>
			</div>
		</div>

		<div class="gantry-width-33">
			<div class="gantry-width-spacer">
				<ul class="nomarginbottom">
					<li>Offline Page</li>
					<li>Coming Soon Page</li>
					<li>404 Error Page</li>
					<li>Email Subscription Form</li>
					<li>Social Buttons Option</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="clear"></div>

<h4>Gantry Core Features</h4>

<div class="gantry-row">
	<div class="gantry-width-container">
		<div class="gantry-width-33">
			<div class="gantry-width-spacer">
				<ul class="nomarginbottom">
					<li>Configurable Grid Sizes</li>
					<li>Font Selector</li>
					<li>Custom Branding</li>
					<li>Google Analytics</li>
					<li>Page Suffix Support</li>
				</ul>
			</div>
		</div>

		<div class="gantry-width-33">
			<div class="gantry-width-spacer">
				<ul class="nomarginbottom">
					<li>Date Display</li>
					<li>Login Panel</li>
					<li>Custom Copyright</li>
					<li>MainBody &amp; Content Toggle</li>
					<li>IE7 Redirect Page</li>
				</ul>
			</div>
		</div>

		<div class="gantry-width-33">
			<div class="gantry-width-spacer">
				<ul class="nomarginbottom">
					<li>Font Sizer</li>
					<li>Popup Panel</li>
					<li>To-Top Scroller</li>
					<li>Basic RTL Support</li>
					<li>Override Assignment</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="clear"></div>

<h4>Technical Requirements and Support</h4>

<div class="gantry-row">
	<div class="gantry-width-container">
		<div class="gantry-width-33">
			<div class="gantry-width-spacer">
				<ul class="nomarginbottom">
					<li>Gantry Framework 4.1.2+</li>
					<li>PHP 5.2.4+</li>
					<li>MySQL 5.0.4+</li>
				</ul>
			</div>
		</div>

		<div class="gantry-width-33">
			<div class="gantry-width-spacer">
				<ul class="nomarginbottom">
					<li>Apache 2.x+ or Microsoft IIS 7+</li>
					<li>Firefox, Chrome, Safari, Opera, IE8+</li>
					<li>HTML5, CSS3, LESS</li>
				</ul>
			</div>
		</div>

		<div class="gantry-width-33">
			<div class="gantry-width-spacer">
				<ul class="nomarginbottom">
					<li>WordPress 3.2+ Support</li>
					<li>WordPress RocketLauncher</li>
					<li>Adobe Fireworks PNG Sources</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="clear"></div>',
      'filter' => false,
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantrydivider' => 
  array (
    '_multiwidget' => 1,
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-widgets-2', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-widgets-3', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-widgets-3',array (
  'widget_text' => 
  array (
    30006 => 
    array (
      'title' => 'MainBody / Sidebar Layouts',
      'text' => '<p>The layouts for the mainbody area is slightly different from the other widget layouts. The primary difference is that the mainbody is generally displayed along with up to 3 sidebars. This provides the ability for <strong>Plethora</strong> theme to effectively support a four-column layout.</p>

<p>Configure at <strong>Admin Dashboard &rarr; Plethora Theme</strong>, then go to <strong>Layouts</strong> tab and set the varying Mainbody/Sidebar layout possibilities.</p>

<div class="gantry-row gantry-width-container">
	<div class="gantry-width-33">
		<div class="gantry-width-spacer">
			<span class="rt-image"><img src="@RT_SITE_URL@/wp-content/rockettheme/rt_plethora_wp/features/module-positions/position-config-mb1.jpg" alt="image" /></span>
		</div>
	</div>

	<div class="gantry-width-33">
		<div class="gantry-width-spacer">
			<span class="rt-image"><img src="@RT_SITE_URL@/wp-content/rockettheme/rt_plethora_wp/features/module-positions/position-config-mb2.jpg" alt="image" /></span>
		</div>
	</div>

	<div class="gantry-width-33">
		<div class="gantry-width-spacer">
			<span class="rt-image"><img src="@RT_SITE_URL@/wp-content/rockettheme/rt_plethora_wp/features/module-positions/position-config-mb3.jpg" alt="image" /></span>
		</div>
	</div>	
</div>

<div class="clear"></div><br />

<p class="success">Note: If no widgets are placed in the Sidebar position, the Mainbody will become full width.</p>

<div class="rt-mbsb-table hidden-phone gantry-width-container">
	<div class="gantry-width-50 largemarginbottom">
		<div class="largemarginright gantry-width-container">
			<div class="gantry-width-30">
			  <div class="smallmarginall">
			    <table class="table table-bordered gantry-center">
			      <thead>
			        <tr>
			          <th colspan="1"><h5 class="nomarginall">Sidebar</h5></th>
			        </tr>
			      </thead>
			      <tbody>
			        <tr>
			          <td class="rt-sb-table-col">A</td>
			        </tr>
			      </tbody>
			    </table>
			  </div>
			</div>
			<div class="gantry-width-30">
			  <div class="smallmarginall">
			    <table class="table table-bordered gantry-center">
			      <tbody>
			        <tr>
			          <td class="rt-mb-table-col"><h5>Mainbody</h5></td>
			        </tr>
			      </tbody>
			    </table>
			  </div>
			</div>
			<div class="gantry-width-40">
			  <div class="smallmarginall">
			    <table class="table table-bordered gantry-center">
			      <thead>
			        <tr>
			          <th colspan="2"><h5 class="nomarginall">Sidebar</h5></th>
			        </tr>
			      </thead>
			      <tbody>
			        <tr>
			          <td class="rt-sb-table-col">B</td>
			          <td class="rt-sb-table-col">C</td>
			        </tr>
			      </tbody>
			    </table>
			  </div>
			</div>
			<div class="clear"></div>
		</div>
	</div>

	<div class="gantry-width-50 largemarginbottom">
	<div class="largemarginleft gantry-width-container">
		<div class="gantry-width-40">
		  <div class="smallmarginall">
		    <table class="table table-bordered gantry-center">
		      <thead>
		        <tr>
		          <th colspan="2"><h5 class="nomarginall">Sidebar</h5></th>
		        </tr>
		      </thead>
		      <tbody>
		        <tr>
		          <td class="rt-sb-table-col">A</td>
		          <td class="rt-sb-table-col">B</td>
		        </tr>
		      </tbody>
		    </table>
		  </div>
		</div>
		<div class="gantry-width-30">
		  <div class="smallmarginall">
		    <table class="table table-bordered gantry-center">
		      <tbody>
		        <tr>
		          <td class="rt-mb-table-col"><h5>Mainbody</h5></td>
		        </tr>
		      </tbody>
		    </table>
		  </div>
		</div>
		<div class="gantry-width-30">
		  <div class="smallmarginall">
		    <table class="table table-bordered gantry-center">
		      <thead>
		        <tr>
		          <th colspan="1"><h5 class="nomarginall">Sidebar</h5></th>
		        </tr>
		      </thead>
		      <tbody>
		        <tr>
		          <td class="rt-sb-table-col">C</td>
		        </tr>
		      </tbody>
		    </table>
		  </div>
		</div>
		<div class="clear"></div>
		</div>
	</div>

	<div class="clear"></div>

	<div class="gantry-width-50 largemarginbottom">
	<div class="largemarginright gantry-width-container">
		<div class="gantry-width-50">
		  <div class="smallmarginall">
		    <table class="table table-bordered gantry-center">
		      <thead>
		        <tr>
		          <th colspan="3"><h5 class="nomarginall">Sidebar</h5></th>
		        </tr>
		      </thead>
		      <tbody>
		        <tr>
		          <td class="rt-sb-table-col">A</td>
		          <td class="rt-sb-table-col">B</td>
		          <td class="rt-sb-table-col">C</td>
		        </tr>
		      </tbody>
		    </table>
		  </div>
		</div>
		<div class="gantry-width-50">
		  <div class="smallmarginall">
		    <table class="table table-bordered gantry-center">
		      <tbody>
		        <tr>
		          <td class="rt-mb-table-col"><h5>Mainbody</h5></td>
		        </tr>
		      </tbody>
		    </table>
		  </div>
		</div>
		<div class="clear"></div>
		</div>
	</div>

	<div class="gantry-width-50 largemarginbottom">
	<div class="largemarginleft gantry-width-container">
		<div class="gantry-width-70">
		  <div class="smallmarginall">
		    <table class="table table-bordered gantry-center">
		      <tbody>
		        <tr>
		          <td class="rt-mb-table-col"><h5>Mainbody</h5></td>
		        </tr>
		      </tbody>
		    </table>
		  </div>
		</div>
		<div class="gantry-width-30">
		  <div class="smallmarginall">
		    <table class="table table-bordered gantry-center">
		      <thead>
		        <tr>
		          <th colspan="1"><h5 class="nomarginall">Sidebar</h5></th>
		        </tr>
		      </thead>
		      <tbody>
		        <tr>
		          <td class="rt-sb-table-col">A</td>
		        </tr>
		      </tbody>
		    </table>
		  </div>
		</div>
		<div class="clear"></div>
		</div>
	</div>

	<div class="clear"></div>

	<div class="gantry-width-50 largemarginbottom">
	<div class="largemarginright gantry-width-container">
		<div class="gantry-width-60">
		  <div class="smallmarginall">
		    <table class="table table-bordered gantry-center">
		      <tbody>
		        <tr>
		          <td class="rt-mb-table-col"><h5>Mainbody</h5></td>
		        </tr>
		      </tbody>
		    </table>
		  </div>
		</div>
		<div class="gantry-width-40">
		  <div class="smallmarginall">
		    <table class="table table-bordered gantry-center">
		      <thead>
		        <tr>
		          <th colspan="2"><h5 class="nomarginall">Sidebar</h5></th>
		        </tr>
		      </thead>
		      <tbody>
		        <tr>
		          <td class="rt-sb-table-col">A</td>
				  <td class="rt-sb-table-col">B</td>
		        </tr>
		      </tbody>
		    </table>
		  </div>
		</div>
		<div class="clear"></div>
		</div>
	</div>

	<div class="gantry-width-50 largemarginbottom">
	<div class="largemarginleft gantry-width-container">
		<div class="gantry-width-50">
		  <div class="smallmarginall">
		    <table class="table table-bordered gantry-center">
		      <tbody>
		        <tr>
		          <td class="rt-mb-table-col"><h5>Mainbody</h5></td>
		        </tr>
		      </tbody>
		    </table>
		  </div>
		</div>
		<div class="gantry-width-50">
		  <div class="smallmarginall">
		    <table class="table table-bordered gantry-center">
		      <thead>
		        <tr>
		          <th colspan="3"><h5 class="nomarginall">Sidebar</h5></th>
		        </tr>
		      </thead>
		      <tbody>
		        <tr>
		          <td class="rt-sb-table-col">A</td>
		          <td class="rt-sb-table-col">B</td>
		          <td class="rt-sb-table-col">C</td>
		        </tr>
		      </tbody>
		    </table>
		  </div>
		</div>
		<div class="clear"></div>
		</div>
	</div>

	<div class="clear"></div>

	<div class="gantry-width-50 largemarginbottom">
	<div class="largemarginright gantry-width-container">
		<div class="gantry-width-30">
		  <div class="smallmarginall">
		    <table class="table table-bordered gantry-center">
		      <thead>
		        <tr>
		          <th colspan="1"><h5 class="nomarginall">Sidebar</h5></th>
		        </tr>
		      </thead>
		      <tbody>
		        <tr>
		          <td class="rt-sb-table-col">A</td>
		        </tr>
		      </tbody>
		    </table>
		  </div>
		</div>
		<div class="gantry-width-70">
		  <div class="smallmarginall">
		    <table class="table table-bordered gantry-center">
		      <tbody>
		        <tr>
		          <td class="rt-mb-table-col"><h5>Mainbody</h5></td>
		        </tr>
		      </tbody>
		    </table>
		  </div>
		</div>
		<div class="clear"></div>
		</div>
	</div>

	<div class="gantry-width-50 largemarginbottom">
	<div class="largemarginleft gantry-width-container">
		<div class="gantry-width-50">
		  <div class="smallmarginall">
		    <table class="table table-bordered gantry-center">
		      <thead>
		        <tr>
		          <th colspan="2"><h5 class="nomarginall">Sidebar</h5></th>
		        </tr>
		      </thead>
		      <tbody>
		        <tr>
		          <td class="rt-sb-table-col">A</td>
				  <td class="rt-sb-table-col">B</td>
		        </tr>
		      </tbody>
		    </table>
		  </div>
		</div>
		<div class="gantry-width-50">
		  <div class="smallmarginall">
		    <table class="table table-bordered gantry-center">
		      <tbody>
		        <tr>
		          <td class="rt-mb-table-col"><h5>Mainbody</h5></td>
		        </tr>
		      </tbody>
		    </table>
		  </div>
		</div>
		<div class="clear"></div>
		</div>
	</div>
	<div class="clear"></div>
</div>',
      'filter' => false,
      'custom-variations' => '',
      'widget_chrome' => '',
      'variations' => 
      array (
        0 => 'rt-center',
      ),
    ),
    30007 => 
    array (
      'title' => 'Basic: Using Gantry Layouts',
      'text' => '<div class="gantry-width-container">
<div class="gantry-width-25 gantry-width-block">
  <div class="gantry-width-spacer">
    <a href="https://www.youtube.com/watch?v=g0iEalGwdJY" title="Video Tutorial :: Using Gantry Layouts" data-rokbox data-rokbox-size="1280 720">
        <img src="@RT_SITE_URL@/wp-content/rockettheme/rt_plethora_wp/features/module-positions/using-layouts.jpg" alt="Using Layouts" />
    </a>
  </div>
</div>

<div class="gantry-width-75 gantry-width-block">
  <div class="gantry-width-spacer">
    <p>To find out about <strong>Gantry Layouts</strong> and <strong>Widget Widths</strong>, check out this screencast which covers basic concepts of configuring layout with a combination of widget setting and the Gantry layout control.</p>

    <a class="readon smallmargintop" href="http://gantry-framework.org/documentation/wordpress/configure/layouts.md" target="_blank"><span>View : Using Layouts</span></a>
  </div>
</div>
</div>

<div class="clear"></div>',
      'filter' => false,
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    30008 => 
    array (
      'title' => 'Advanced: Adding Positions',
      'text' => '<div class="gantry-width-container">
<div class="gantry-width-25 gantry-width-block">
  <div class="gantry-width-spacer">
    <a href="https://www.youtube.com/watch?v=xYsB2VKmkFU" title="Video Tutorial :: Widget Positions" data-rokbox data-rokbox-size="1280 720">
      <img src="@RT_SITE_URL@/wp-content/rockettheme/rt_plethora_wp/features/module-positions/adding-module-positions.jpg" alt="Adding Module Positions" />
    </a>
  </div>
</div>

<div class="gantry-width-75 gantry-width-block">
  <div class="gantry-width-spacer">
    <p>Check out this quick screencast on <strong>Widget Positions</strong> to get an overview of how widget positions work within Gantry Framework. Click below button to learn how to <strong>add a new row of widget positions</strong>.</p>

    <a class="readon smallmargintop" href="http://gantry-framework.org/documentation/wordpress/customize/" target="_blank"><span>Learn : Adding Positions</span></a>
  </div>    
</div>
</div>

<div class="clear"></div>',
      'filter' => false,
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantrydivider' => 
  array (
    30004 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-widgets-3', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-widgets-4', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-widgets-4',array (
  'widget_gantrydivider' => 
  array (
    40004 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
  'widget_text' => 
  array (
    40006 => 
    array (
      'title' => 'title1',
      'text' => '<p>An example widget using the <strong>title1</strong> widget variation.</p>

<p>Lorem ipsum dolor sit amet, consecetur adipiscing elit donec sit amet nibh.</p>

<a href="#" class="readon">Read More</a>',
      'filter' => false,
      'custom-variations' => '',
      'widget_chrome' => '',
      'variations' => 
      array (
        0 => 'title1',
      ),
    ),
    40007 => 
    array (
      'title' => 'title3',
      'text' => '<p>An example widget using the <strong>title3</strong> widget variation.</p>

<p>Lorem ipsum dolor sit amet, consecetur adipiscing elit donec sit amet nibh.</p>

<a href="#" class="readon">Read More</a>',
      'filter' => false,
      'custom-variations' => '',
      'widget_chrome' => '',
      'variations' => 
      array (
        0 => 'title3',
      ),
    ),
    40008 => 
    array (
      'title' => 'title2',
      'text' => '<p>An example widget using the <strong>title2</strong> widget variation.</p>

<p>Lorem ipsum dolor sit amet, consecetur adipiscing elit donec sit amet nibh.</p>

<a href="#" class="readon">Read More</a>',
      'filter' => false,
      'custom-variations' => '',
      'widget_chrome' => '',
      'variations' => 
      array (
        0 => 'title2',
      ),
    ),
    40009 => 
    array (
      'title' => 'title4',
      'text' => '<p>An example widget using the <strong>title4</strong> widget variation.</p>

<p>Lorem ipsum dolor sit amet, consecetur adipiscing elit donec sit amet nibh.</p>

<a href="#" class="readon">Read More</a>',
      'filter' => false,
      'custom-variations' => '',
      'widget_chrome' => '',
      'variations' => 
      array (
        0 => 'title4',
      ),
    ),
    40010 => 
    array (
      'title' => 'box1',
      'text' => '<p>An example widget using the <strong>box1</strong> widget variation.</p>

<p>Lorem ipsum dolor sit amet, consecetur adipiscing elit donec sit amet nibh.</p>

<a href="#" class="readon">Read More</a>',
      'filter' => false,
      'custom-variations' => '',
      'widget_chrome' => '',
      'variations' => 
      array (
        0 => 'box1',
      ),
    ),
    40011 => 
    array (
      'title' => 'box3',
      'text' => '<p>An example widget using the <strong>box3</strong> widget variation.</p>

<p>Lorem ipsum dolor sit amet, consecetur adipiscing elit donec sit amet nibh.</p>

<a href="#" class="readon">Read More</a>',
      'filter' => false,
      'custom-variations' => '',
      'widget_chrome' => '',
      'variations' => 
      array (
        0 => 'box3',
      ),
    ),
    40012 => 
    array (
      'title' => 'box2',
      'text' => '<p>An example widget using the <strong>box2</strong> widget variation.</p>

<p>Lorem ipsum dolor sit amet, consecetur adipiscing elit donec sit amet nibh.</p>

<a href="#" class="readon">Read More</a>',
      'filter' => false,
      'custom-variations' => '',
      'widget_chrome' => '',
      'variations' => 
      array (
        0 => 'box2',
      ),
    ),
    40013 => 
    array (
      'title' => 'box4',
      'text' => '<p>An example widget using the <strong>box4</strong> widget variation.</p>

<p>Lorem ipsum dolor sit amet, consecetur adipiscing elit donec sit amet nibh.</p>

<a href="#" class="readon">Read More</a>',
      'filter' => false,
      'custom-variations' => '',
      'widget_chrome' => '',
      'variations' => 
      array (
        0 => 'box4',
      ),
    ),
    40014 => 
    array (
      'title' => 'Using a Variation',
      'text' => '<p>Choose any available variations at <strong>Appearance &rarr; Widgets &rarr; <em>Widget</em> &rarr; Widget Variations at the bottom of the widget settings</strong>.</p>
<p class="notice nomarginbottom">You can compound multiple variations together such as: <strong><em>box1 title3</em></strong>.</p>',
      'filter' => false,
      'custom-variations' => '',
      'widget_chrome' => '',
      'variations' => 
      array (
        0 => 'box3',
        1 => 'title3',
      ),
    ),
    40015 => 
    array (
      'title' => 'box2 title3',
      'text' => '<p>An example widget using the <strong>box2 title3</strong> widget variation.</p>

<p>Lorem ipsum dolor sit amet, consecetur adipiscing elit donec sit amet nibh.</p>

<a href="#" class="readon">Read More</a>',
      'filter' => false,
      'custom-variations' => '',
      'widget_chrome' => '',
      'variations' => 
      array (
        0 => 'box2',
        1 => 'title3',
      ),
    ),
    40016 => 
    array (
      'title' => 'box4 title4',
      'text' => '<p>An example widget using the <strong>box4 title4</strong> widget variation.</p>

<p>Lorem ipsum dolor sit amet, consecetur adipiscing elit donec sit amet nibh.</p>

<a href="#" class="readon">Read More</a>',
      'filter' => false,
      'custom-variations' => '',
      'widget_chrome' => '',
      'variations' => 
      array (
        0 => 'box4',
        1 => 'title4',
      ),
    ),
    40017 => 
    array (
      'title' => 'No Suffix',
      'text' => '<p>An example widget using <strong>none widget variations</strong>.</p>

<p>Lorem ipsum dolor sit amet, consecetur adipiscing elit donec sit amet nibh.</p>

<a href="#" class="readon">Read More</a>',
      'filter' => false,
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    40018 => 
    array (
      'title' => 'Additional Widget Variations',
      'text' => '<ul>
  <li><strong>rt-center:</strong> centres the content of the widget.</li>
  <li><strong>rt-uppercase, rt-lowercase:</strong> change the case of the widget title.</li>  
  <li><strong>nomargintop, nomarginright, nomarginbottom, nomarginleft, nomarginall:</strong> removes the various margins around the widget.</li>    
  <li><strong>nopaddingtop, nopaddingright, nopaddingbottom, nopaddingleft, nopaddingall:</strong> removes the various paddings around the widget.</li>    
    <li><strong>(small/med/large)margintop, (small/med/large)marginright, (small/med/large)marginbottom, (small/med/large)marginleft:</strong> increase the paddings around the widget.</li>
  <li><strong>(subsmall/submed/sublarge)margintop, (subsmall/submed/sublarge)marginright, (subsmall/submed/sublarge)marginbottom, (subsmall/submed/sublarge)marginleft, (subsmall/submed/sublarge)marginall:</strong> decrease the paddings around the widget.</li>  
</ul>',
      'filter' => false,
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    '_multiwidget' => 1,
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-widgets-4', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-widgets-5', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-widgets-5',array (
  'widget_text' => 
  array (
    '_multiwidget' => 1,
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-widgets-5', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-widgets-6', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-widgets-6',array (
  'widget_text' => 
  array (
    60006 => 
    array (
      'title' => 'Set Menu Type',
      'text' => '<div class="gantry-width-container">
<div class="gantry-width-50 gantry-width-block">
  <div class="gantry-width-spacer">
      <p class="visible-large">RokNavMenu (part of Gantry Framework core) provides a feature rich platform for displaying the menu, allowing for overrides and plugins for the menu itself, in addition to versatile theming capabilities and so much more.</p>
      
    <p>To find all the parameters for Dropdown Menu &amp; SplitMenu on Plethora template, such as Levels Limiting, please navigate to:</p>
    
    <ul class="dots">
      <li><strong>Appearance &rarr; Widgets</strong></li>
      <li>Then go to <strong>Gantry Menu</strong> widget, and set the Menu parameters</li>
    </ul>
    
    <p class="largemargintop attention">These settings are per widget level so this means that each Gantry Menu widget instance can have different setup.</p>
  </div>
</div>

<div class="gantry-width-50 gantry-width-block">
  <div class="gantry-width-spacer">
    <div class="rt-image rt-center">
      <img src="@RT_SITE_URL@/wp-content/rockettheme/rt_plethora_wp/features/menu-options/menu-setting.jpg" alt="Set Menu" />
    </div>
  </div>
</div>
</div>

<div class="clear"></div>',
      'filter' => false,
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    60007 => 
    array (
      'title' => 'SubText Line',
      'text' => '<p>The option that allows you to insert additional text to the Menu Item Title, including the SubMenu Item Title. There is separate styling for this, making it useful for adding snippets to menu items.</p>',
      'filter' => false,
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    60008 => 
    array (
      'title' => 'Menu Icon',
      'text' => '<p>Gantry Menu provides the option to display a small icon image, powered by FontAwesome, for the menu item. The menu icon can be displayed both for the parent items and the child items.</p>',
      'filter' => false,
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    60009 => 
    array (
      'title' => 'Multi-Columns',
      'text' => '<p>Who needs a single dropdown column when you can have as many as you want? Using the built-in configurable parameters, you can make up to four incredible multi column dropdowns.</p>',
      'filter' => false,
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantrydivider' => 
  array (
    60004 => 
    array (
    ),
    60005 => 
    array (
    ),
    '_multiwidget' => 1,
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-widgets-6', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-widgets-7', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-widgets-7',array (
  'widget_text' => 
  array (
    70006 => 
    array (
      'title' => 'Various Pages[span class="rt-title-tag"]Flexible and adaptable sample pages[/span]',
      'text' => '<p class="promo2">See a range of example page layouts possible with Plethora theme, through its responsive layout and the Gantry Framework grid system</p>',
      'filter' => false,
      'custom-variations' => 'rt-title-large',
      'widget_chrome' => '',
      'variations' => 
      array (
        0 => 'box3',
        1 => 'rt-center',
        2 => 'nomarginall',
      ),
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_breakcrumbs' => 
  array (
    '_multiwidget' => 1,
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-widgets-7', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-widgets-8', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-widgets-8',array (
  'widget_text' => 
  array (
    80006 => 
    array (
      'title' => 'About Us[span class="rt-title-tag"]Welcome to Plethora[/span]',
      'text' => '&nbsp;',
      'filter' => false,
      'custom-variations' => 'rt-title-large rt-nomodulecontent',
      'widget_chrome' => '',
      'variations' => 
      array (
        0 => 'box3',
        1 => 'rt-center',
        2 => 'nomarginall',
      ),
    ),
    80009 => 
    array (
      'title' => 'We Always Try to Create a Difference',
      'text' => '<p>Utilized with Versatile and Flexible Features Powered by the Gantry Framework.</p>

<p><a href="http://www.rockettheme.com/wordpress-themes/plethora" class="readon">Download Plethora</a></p>',
      'filter' => false,
      'custom-variations' => '',
      'widget_chrome' => '',
      'variations' => 
      array (
        0 => 'rt-center',
      ),
    ),
    80010 => 
    array (
      'title' => '',
      'text' => '<div class="gantry-row">
<div class="gantry-width-container">
	<div class="gantry-width-50">
		<div class="gantry-width-spacer">
			<span class="rt-image"><img src="@RT_SITE_URL@/wp-content/rockettheme/rt_plethora_wp/pages/about-us/img-01.jpg" alt="image" /></span>
		</div>
	</div>

	<div class="gantry-width-50">
		<div class="gantry-width-spacer">
			<h3>Introduction</h3>
			<p>Globally incubate standards compliant channels before scalable benefits. Quickly disseminate superior deliverables whereas web-enabled applications. Quickly drive clicks-and-mortar catalysts for change before vertical architectures.</p>
			<div class="hidden-tablet">
				<h3>More About Us</h3>
				<p>Proactively envisioned multimedia based expertise and cross-media growth strategies. Seamlessly visualize quality intellectual capital without superior collaboration and idea-sharing. Holistically pontificate installed base portals after maintainable products.</p>
			</div>
		</div>
	</div>
</div>
</div>

<div class="clear"></div>',
      'filter' => false,
      'custom-variations' => 'rt-title-center',
      'widget_chrome' => '',
      'variations' => 
      array (
        0 => 'box2',
        1 => 'nomarginall',
      ),
    ),
    80011 => 
    array (
      'title' => '',
      'text' => '<div class="gantry-row">
	<div class="gantry-width-container">
		<div class="gantry-width-33">
			<div class="gantry-width-spacer">
				<span class="rt-image"><img src="@RT_SITE_URL@/wp-content/rockettheme/rt_plethora_wp/pages/about-us/img-02.jpg" alt="image" /></span>
				<h4>Our Mission</h4>
				<p>Objectively innovate empowered manufactured products whereas parallel platforms. Holisticly predominate extensible testing procedures for reliable supply chains.</p>
			</div>
		</div>

		<div class="gantry-width-33">
			<div class="gantry-width-spacer">
				<span class="rt-image"><img src="@RT_SITE_URL@/wp-content/rockettheme/rt_plethora_wp/pages/about-us/img-03.jpg" alt="image" /></span>
				<h4>Our Values</h4>
				<p>Proactively envisioned multimedia based expertise and cross-media growth strategies. Seamlessly visualize quality intellectual capital without superior collaboration.</p>
			</div>
		</div>

		<div class="gantry-width-33">
			<div class="gantry-width-spacer">
				<span class="rt-image"><img src="@RT_SITE_URL@/wp-content/rockettheme/rt_plethora_wp/pages/about-us/img-04.jpg" alt="image" /></span>
				<h4>Our Solution</h4>
				<p>Engage worldwide methodologies with web-enabled technology. Interactively coordinate proactive e-commerce via process-centric outside the box thinking.</p>
			</div>
		</div>
	</div>
</div>

<div class="clear"></div>',
      'filter' => false,
      'custom-variations' => '',
      'widget_chrome' => '',
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_breakcrumbs' => 
  array (
    '_multiwidget' => 1,
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-widgets-8', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-override-widgets-9', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-override-widgets-9',array (
  'widget_text' => 
  array (
    90006 => 
    array (
      'title' => 'The Team[span class="rt-title-tag"]Meet the People Behind Plethora[/span]',
      'text' => '&nbsp;',
      'filter' => false,
      'custom-variations' => 'rt-title-large rt-nomodulecontent',
      'widget_chrome' => '',
      'variations' => 
      array (
        0 => 'box3',
        1 => 'rt-center',
        2 => 'nomarginall',
      ),
    ),
    90008 => 
    array (
      'title' => 'Core Developers',
      'text' => '<div class="gantry-row">
	<div class="gantry-width-container">
	<div class="gantry-width-25">
		<div class="gantry-width-spacer">
			<span class="rt-image with-attribution">
				<img src="@RT_SITE_URL@/wp-content/rockettheme/rt_plethora_wp/pages/the-team/img-04.jpg" alt="image" />
				<span class="rt-image rt-attribution"><a href="http://www.flickr.com/photos/johnonolan/5378754404/sizes/l/">by JohnONolan</a></span>
			</span>
			<h3 class="nomarginbottom">Enrik Prifti</h3>
			<h6 class="nomargintop">Programmer</h6>
		</div>
	</div>

	<div class="gantry-width-25">
		<div class="gantry-width-spacer">
			<span class="rt-image with-attribution">
				<img src="@RT_SITE_URL@/wp-content/rockettheme/rt_plethora_wp/pages/the-team/img-05.jpg" alt="image" />
				<span class="rt-image rt-attribution"><a href="http://www.flickr.com/photos/thomasleuthard/5807793226/sizes/l/">by Thomas Leuthard</a></span>
			</span>
			<h3 class="nomarginbottom">Laura Richards</h3>
			<h6 class="nomargintop">Designer</h6>
		</div>
	</div>

	<div class="gantry-width-25">
		<div class="gantry-width-spacer">
			<span class="rt-image with-attribution">
				<img src="@RT_SITE_URL@/wp-content/rockettheme/rt_plethora_wp/pages/the-team/img-06.jpg" alt="image" />
				<span class="rt-image rt-attribution"><a href="http://www.flickr.com/photos/astragony/5959165576/sizes/l/">by Daniele Zedda</a></span>
			</span>
			<h3 class="nomarginbottom">Alex Ward</h3>
			<h6 class="nomargintop">Technical Lead</h6>
		</div>
	</div>

	<div class="gantry-width-25">
		<div class="gantry-width-spacer">
			<span class="rt-image with-attribution">
				<img src="@RT_SITE_URL@/wp-content/rockettheme/rt_plethora_wp/pages/the-team/img-07.jpg" alt="image" />
				<span class="rt-image rt-attribution"><a href="http://www.flickr.com/photos/mr-h/4217144639/sizes/l/">by AllansBrain</a></span>
			</span>
			<h3 class="nomarginbottom">Nora Mirone</h3>
			<h6 class="nomargintop">QA Lead</h6>
		</div>
	</div>
</div>
</div>

<div class="clear"></div>',
      'filter' => false,
      'custom-variations' => '',
      'widget_chrome' => '',
      'variations' => 
      array (
        0 => 'box4',
        1 => 'rt-center',
        2 => 'nomarginall',
      ),
    ),
    90009 => 
    array (
      'title' => 'Support Assistants',
      'text' => '<div class="gantry-row">
	<div class="gantry-width-container">
	<div class="gantry-width-20">
		<div class="gantry-width-spacer">
			<span class="rt-image with-attribution">
				<img src="@RT_SITE_URL@/wp-content/rockettheme/rt_plethora_wp/pages/the-team/img-08.jpg" alt="image" />
				<span class="rt-image rt-attribution"><a href="http://www.flickr.com/photos/carianoff/5327733275/sizes/l/">by carianoff</a></span>
			</span>
			<h3 class="nomarginbottom">John Jensen</h3>
			<h6 class="nomargintop">Email</h6>
		</div>
	</div>

	<div class="gantry-width-20">
		<div class="gantry-width-spacer">
			<span class="rt-image with-attribution">
				<img src="@RT_SITE_URL@/wp-content/rockettheme/rt_plethora_wp/pages/the-team/img-09.jpg" alt="image" />
				<span class="rt-image rt-attribution"><a href="http://www.flickr.com/photos/carianoff/4070347417/sizes/l/">by carianoff</a></span>
			</span>
			<h3 class="nomarginbottom">Tessa Page</h3>
			<h6 class="nomargintop">Ticket</h6>
		</div>
	</div>

	<div class="gantry-width-20">
		<div class="gantry-width-spacer">
			<span class="rt-image with-attribution">
				<img src="@RT_SITE_URL@/wp-content/rockettheme/rt_plethora_wp/pages/the-team/img-10.jpg" alt="image" />
				<span class="rt-image rt-attribution"><a href="http://www.flickr.com/photos/carianoff/5328421868/sizes/l/">by carianoff</a></span>
			</span>
			<h3 class="nomarginbottom">Eric Timofti</h3>
			<h6 class="nomargintop">Chat</h6>
		</div>
	</div>

	<div class="gantry-width-20">
		<div class="gantry-width-spacer">
			<span class="rt-image with-attribution">
				<img src="@RT_SITE_URL@/wp-content/rockettheme/rt_plethora_wp/pages/the-team/img-11.jpg" alt="image" />
				<span class="rt-image rt-attribution"><a href="http://www.flickr.com/photos/carianoff/5328368478/sizes/l/">by carianoff</a></span>
			</span>
			<h3 class="nomarginbottom">Lydia Back</h3>
			<h6 class="nomargintop">Facebook</h6>
		</div>
	</div>

	<div class="gantry-width-20">
		<div class="gantry-width-spacer">
			<span class="rt-image with-attribution">
				<img src="@RT_SITE_URL@/wp-content/rockettheme/rt_plethora_wp/pages/the-team/img-12.jpg" alt="image" />
				<span class="rt-image rt-attribution"><a href="http://www.flickr.com/photos/carianoff/5327739397/sizes/l/">by carianoff</a></span>
			</span>
			<h3 class="nomarginbottom">Luca Coyle</h3>
			<h6 class="nomargintop">Twitter</h6>
		</div>
	</div>
</div>
</div>

<div class="clear"></div>',
      'filter' => false,
      'custom-variations' => '',
      'widget_chrome' => '',
      'variations' => 
      array (
        0 => 'rt-center',
      ),
    ),
    90010 => 
    array (
      'title' => 'We are Hiring',
      'text' => '<p>Join Our Awesome Team with a Great Work Environment</p>

<p><a href="http://www.rockettheme.com/wordpress-themes/plethora" class="readon">Join Plethora</a></p>',
      'filter' => false,
      'custom-variations' => '',
      'widget_chrome' => '',
      'variations' => 
      array (
        0 => 'rt-center',
      ),
    ),
    90011 => 
    array (
      'title' => 'Management Team',
      'text' => '<div class="gantry-row">
	<div class="gantry-width-container">
		<div class="gantry-width-33">
			<div class="gantry-width-spacer">
				<span class="rt-image"><img src="@RT_SITE_URL@/wp-content/rockettheme/rt_plethora_wp/pages/the-team/img-01.jpg" alt="image" /></span>
			</div>
		</div>

		<div class="gantry-width-66">
			<div class="gantry-width-spacer">
				<h3 class="nomarginbottom">Robert Smith</h3>
				<h6 class="nomargintop">CEO of Plethora</h6>
				<p>Globally incubate standards compliant channels before scalable benefits. Quickly disseminate superior deliverables whereas web-enabled applications. <span class="hidden-tablet">Quickly drive clicks-and-mortar catalysts for change before vertical architectures.</span></p>
				<p class="success hidden-tablet">Image attribution: <a href="http://www.flickr.com/photos/astragony/8260117875/sizes/l/">AMaze by Daniele Zedda.</a></p>
			</div>
		</div>
	</div>
</div>

<div class="clear"></div><br />

<div class="gantry-row">
	<div class="gantry-width-container">
		<div class="gantry-width-33">
			<div class="gantry-width-spacer">
				<span class="rt-image"><img src="@RT_SITE_URL@/wp-content/rockettheme/rt_plethora_wp/pages/the-team/img-03.jpg" alt="image" /></span>
			</div>
		</div>

		<div class="gantry-width-66">
			<div class="gantry-width-spacer">
				<h3 class="nomarginbottom">Tayla Parker</h3>
				<h6 class="nomargintop">Accountant</h6>
				<p>Globally incubate standards compliant channels before scalable benefits. Quickly disseminate superior deliverables whereas web-enabled applications. <span class="hidden-tablet">Quickly drive clicks-and-mortar catalysts for change before vertical architectures.</span></p>
				<p class="success hidden-tablet">Image attribution: <a href="http://www.flickr.com/photos/johnonolan/5729506059/sizes/l/">Stare by JohnONolan.</a></p>
			</div>
		</div>
	</div>
</div>

<div class="clear"></div><br />

<div class="gantry-row">
	<div class="gantry-width-container">
		<div class="gantry-width-33">
			<div class="gantry-width-spacer">
				<span class="rt-image"><img src="@RT_SITE_URL@/wp-content/rockettheme/rt_plethora_wp/pages/the-team/img-02.jpg" alt="image" /></span>
			</div>
		</div>

		<div class="gantry-width-66">
			<div class="gantry-width-spacer">
				<h3 class="nomarginbottom">Paul Valdez</h3>
				<h6 class="nomargintop">Administrator</h6>
				<p>Globally incubate standards compliant channels before scalable benefits. Quickly disseminate superior deliverables whereas web-enabled applications. <span class="hidden-tablet">Quickly drive clicks-and-mortar catalysts for change before vertical architectures.</span></p>
				<p class="success hidden-tablet">Image attribution: <a href="http://www.flickr.com/photos/astragony/4728211246/sizes/l/">Bamboo by Daniele Zedda.</a></p>
			</div>
		</div>
	</div>
</div>

<div class="clear"></div>',
      'filter' => false,
      'custom-variations' => 'rt-title-center rt-phone-center',
      'widget_chrome' => '',
    ),
    '_multiwidget' => 1,
  ),
  'widget_gantry_breakcrumbs' => 
  array (
    '_multiwidget' => 1,
  ),
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-override-widgets-9', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rt_plethora_wp-template-options-overrides', 'filter_token_url', 10, 2);

        update_option('rt_plethora_wp-template-options-overrides',array (
  1 => 'Front Page',
  2 => 'Features Overview',
  3 => 'Widget Positions',
  4 => 'Widget Variations',
  5 => 'Typography',
  6 => 'Menu Options',
  7 => 'Pages Overview',
  8 => 'About Us',
  9 => 'The Team',
  10 => 'Services',
  11 => 'Pricing Tables',
  12 => 'Portfolio',
  13 => 'Blog',
  14 => 'FAQ',
  15 => 'Contact Us',
  16 => 'Offline Page',
));

        remove_filter('pre_update_option_rt_plethora_wp-template-options-overrides', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rokajaxsearch_options', 'filter_token_url', 10, 2);

        update_option('rokajaxsearch_options',array (
  'theme' => 'light',
  'load_custom_css' => '1',
  'google_api' => '',
  'show_description' => '1',
  'show_readmore' => '1',
  'read_more' => 'Read More ...',
  'hide_divs' => '',
  'display_content' => 'excerpt',
  'order' => 'date',
  'per_page' => '3',
  'limit' => '10',
  'google_web' => '1',
  'google_blog' => '1',
  'google_images' => '0',
  'google_video' => '0',
  'image_size' => 'MEDIUM',
  'safesearch' => 'MODERATE',
  'pagination' => '1',
  'show_category' => '1',
  'show_estimated' => '1',
  'include_link' => '1',
));

        remove_filter('pre_update_option_rokajaxsearch_options', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rokbox2_options', 'filter_token_url', 10, 2);

        update_option('rokbox2_options',array (
  'viewport_pc' => '100',
  'backwards_compat' => '0',
  'thumb_width' => '150',
  'thumb_height' => '100',
  'thumb_quality' => '90',
  'scripts_in_footer' => '0',
));

        remove_filter('pre_update_option_rokbox2_options', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_rokcommon_configs', 'filter_token_url', 10, 2);

        update_option('rokcommon_configs',array (
  'roksprocket_container' => 
  array (
    'file' => 'wp-content/plugins/wp_roksprocket/container.xml',
    'extension' => 'roksprocket',
    'priority' => 10,
    'type' => 'container',
  ),
  'roksprocket_library' => 
  array (
    'file' => 'wp-content/plugins/wp_roksprocket/lib',
    'extension' => 'roksprocket',
    'priority' => 10,
    'type' => 'library',
  ),
));

        remove_filter('pre_update_option_rokcommon_configs', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_roksocialbuttons', 'filter_token_url', 10, 2);

        update_option('roksocialbuttons',array (
  'addthis_id' => '',
  'enable_twitter' => '1',
  'enable_facebook' => '1',
  'enable_google' => '1',
  'prepend_text' => '',
  'extra_class' => 'rt-socialbuttons',
  'display_position' => '0',
  'add_method' => '2',
  'catid' => 
  array (
    0 => '2',
  ),
));

        remove_filter('pre_update_option_roksocialbuttons', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_widget_rokajaxsearch', 'filter_token_url', 10, 2);

        update_option('widget_rokajaxsearch',array (
  2 => 
  array (
    'title' => 'Search the Blog',
    'variations' => 
    array (
      0 => 'box3',
      1 => 'title2',
    ),
    'widget_chrome' => '',
    'custom-variations' => '',
  ),
  3 => 
  array (
    'title' => '',
    'widget_chrome' => '',
    'custom-variations' => 'fp-rokajaxsearch',
  ),
  '_multiwidget' => 1,
));

        remove_filter('pre_update_option_widget_rokajaxsearch', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_widget_roksprocket_options', 'filter_token_url', 10, 2);

        update_option('widget_roksprocket_options',array (
  3 => 
  array (
    'title' => '',
    'module_id' => '6',
    'variations' => 
    array (
      0 => 'box1',
      1 => 'nomarginall',
    ),
    'widget_chrome' => '',
    'custom-variations' => 'fp-feature-02',
  ),
  9 => 
  array (
    'title' => 'What Our Clients Say',
    'module_id' => '2',
    'variations' => 
    array (
      0 => 'rt-center',
    ),
    'widget_chrome' => '',
    'custom-variations' => '',
  ),
  11 => 
  array (
    'title' => '',
    'module_id' => '10',
    'variations' => 
    array (
      0 => 'rt-center',
    ),
    'widget_chrome' => '',
    'custom-variations' => 'fp-showcase-a fp-showcase-animate',
  ),
  13 => 
  array (
    'title' => 'What Our Clients Say',
    'module_id' => '2',
    'variations' => 
    array (
      0 => 'rt-center',
    ),
    'widget_chrome' => '',
    'custom-variations' => '',
  ),
  '_multiwidget' => 1,
  10003 => 
  array (
    'title' => '',
    'module_id' => '6',
    'variations' => 
    array (
      0 => 'box1',
      1 => 'nomarginall',
    ),
    'widget_chrome' => '',
    'custom-variations' => 'fp-feature-02',
  ),
  10014 => 
  array (
    'title' => '',
    'module_id' => '11',
    'widget_chrome' => '',
    'custom-variations' => 'fp-roksprocket-features-showcase',
  ),
  10015 => 
  array (
    'title' => '',
    'module_id' => '12',
    'variations' => 
    array (
      0 => 'box3',
      1 => 'nomarginall',
    ),
    'widget_chrome' => '',
    'custom-variations' => 'fp-roksprocket-tabs-showcase',
  ),
  10016 => 
  array (
    'title' => 'Top News',
    'module_id' => '13',
    'variations' => 
    array (
      0 => 'title1',
    ),
    'widget_chrome' => '',
    'custom-variations' => 'fp-roksprocket-lists-maintop',
  ),
  10017 => 
  array (
    'title' => 'Top Reviews',
    'module_id' => '14',
    'variations' => 
    array (
      0 => 'title1',
    ),
    'widget_chrome' => '',
    'custom-variations' => 'fp-roksprocket-lists-maintop2',
  ),
  10018 => 
  array (
    'title' => '',
    'module_id' => '15',
    'variations' => 
    array (
      0 => 'nopaddingall',
      1 => 'nomarginall',
    ),
    'widget_chrome' => '',
    'custom-variations' => 'fp-roksprocket-strips-bottom',
  ),
  120003 => 
  array (
    'title' => '',
    'module_id' => '1',
    'widget_chrome' => '',
    'custom-variations' => '',
  ),
  120004 => 
  array (
    'title' => 'What Our Clients Say',
    'module_id' => '2',
    'variations' => 
    array (
      0 => 'rt-center',
    ),
    'widget_chrome' => '',
    'custom-variations' => '',
  ),
  140003 => 
  array (
    'title' => '',
    'module_id' => '3',
    'widget_chrome' => '',
    'custom-variations' => '',
  ),
));

        remove_filter('pre_update_option_widget_roksprocket_options', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_sidebars_widgets', 'filter_token_url', 10, 2);

        update_option('sidebars_widgets',array (
  'wp_inactive_widgets' => 
  array (
  ),
  'top' => 
  array (
    0 => 'gantry_breakcrumbs-2',
    1 => 'gantrydivider-9',
    2 => 'nav_menu-2',
    3 => 'gantrydivider-8',
    4 => 'gantry_social-2',
  ),
  'header' => 
  array (
    0 => 'gantry_logo-2',
    1 => 'gantrydivider-2',
    2 => 'gantry_menu-2',
    3 => 'gantrydivider-6',
    4 => 'rokajaxsearch-3',
  ),
  'drawer' => 
  array (
  ),
  'breadcrumb' => 
  array (
  ),
  'showcase' => 
  array (
  ),
  'feature' => 
  array (
  ),
  'fullwidthtop' => 
  array (
  ),
  'utility' => 
  array (
  ),
  'expandedtop' => 
  array (
  ),
  'maintop' => 
  array (
  ),
  'sidebar' => 
  array (
    0 => 'rokajaxsearch-2',
    1 => 'gantry_menu-4',
    2 => 'gantry_loginform-2',
  ),
  'content-top' => 
  array (
  ),
  'content-bottom' => 
  array (
  ),
  'mainbottom' => 
  array (
  ),
  'expandedbottom' => 
  array (
  ),
  'extension' => 
  array (
  ),
  'fullwidthbottom' => 
  array (
  ),
  'bottom' => 
  array (
  ),
  'footer' => 
  array (
    0 => 'text-4',
    1 => 'gantrydivider-5',
    2 => 'text-5',
  ),
  'copyright' => 
  array (
    0 => 'gantry_branding-2',
    1 => 'gantrydivider-10',
    2 => 'gantry_copyright-2',
    3 => 'gantrydivider-11',
    4 => 'gantry_totop-2',
  ),
  'debug' => 
  array (
  ),
  'analytics' => 
  array (
  ),
  'login' => 
  array (
  ),
  'popup' => 
  array (
  ),
  'array_version' => 3,
));

        remove_filter('pre_update_option_sidebars_widgets', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_posts_per_page', 'filter_token_url', 10, 2);

        update_option('posts_per_page','1');

        remove_filter('pre_update_option_posts_per_page', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_gantry_bugfix_WGANTRYFW_5', 'filter_token_url', 10, 2);

        update_option('gantry_bugfix_WGANTRYFW_5','1');

        remove_filter('pre_update_option_gantry_bugfix_WGANTRYFW_5', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_permalink_structure', 'filter_token_url', 10, 2);

        update_option('permalink_structure','/%postname%/');

        remove_filter('pre_update_option_permalink_structure', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_blogdescription', 'filter_token_url', 10, 2);

        update_option('blogdescription','Designed by RocketTheme');

        remove_filter('pre_update_option_blogdescription', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_show_on_front', 'filter_token_url', 10, 2);

        update_option('show_on_front','posts');

        remove_filter('pre_update_option_show_on_front', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_active_plugins', 'filter_token_url', 10, 2);

        update_option('active_plugins',array (
  0 => 'gantry/gantry.php',
  1 => 'wp_rokajaxsearch/rokajaxsearch.php',
  2 => 'wp_rokbox/rokbox.php',
  3 => 'wp_rokcommon/rokcommon.php',
  4 => 'wp_roksprocket/roksprocket.php',
));

        remove_filter('pre_update_option_active_plugins', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_widget_gantry_breakcrumbs', 'filter_token_url', 10, 2);

        update_option('widget_gantry_breakcrumbs',array (
  2 => 
  array (
    'prefix' => '',
    'widget_chrome' => '',
    'custom-variations' => 'fp-breadcrumbs',
  ),
  '_multiwidget' => 1,
));

        remove_filter('pre_update_option_widget_gantry_breakcrumbs', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_widget_gantrydivider', 'filter_token_url', 10, 2);

        update_option('widget_gantrydivider',array (
  2 => 
  array (
  ),
  5 => 
  array (
  ),
  6 => 
  array (
  ),
  8 => 
  array (
  ),
  9 => 
  array (
  ),
  10 => 
  array (
  ),
  11 => 
  array (
  ),
  '_multiwidget' => 1,
));

        remove_filter('pre_update_option_widget_gantrydivider', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_widget_nav_menu', 'filter_token_url', 10, 2);

        update_option('widget_nav_menu',array (
  2 => 
  array (
    'title' => '',
    'nav_menu' => 11,
    'custom-variations' => 'rt-horizmenu fp-topmenu',
    'widget_chrome' => '',
  ),
  '_multiwidget' => 1,
));

        remove_filter('pre_update_option_widget_nav_menu', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_widget_gantry_social', 'filter_token_url', 10, 2);

        update_option('widget_gantry_social',array (
  2 => 
  array (
    'target' => '_blank',
    'button-1-icon' => 'fa fa-twitter',
    'button-1-text' => '',
    'button-1-link' => '#',
    'button-2-icon' => 'fa fa-facebook',
    'button-2-text' => '',
    'button-2-link' => '#',
    'button-3-icon' => 'fa fa-rss',
    'button-3-text' => '',
    'button-3-link' => '#',
    'button-4-icon' => '',
    'button-4-text' => '',
    'button-4-link' => '',
    'button-5-icon' => '',
    'button-5-text' => '',
    'button-5-link' => '',
    'button-6-icon' => '',
    'button-6-text' => '',
    'button-6-link' => '',
    'widget_chrome' => '',
    'custom-variations' => '',
  ),
  '_multiwidget' => 1,
));

        remove_filter('pre_update_option_widget_gantry_social', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_widget_gantry_logo', 'filter_token_url', 10, 2);

        update_option('widget_gantry_logo',array (
  2 => 
  array (
    'widget_chrome' => '',
    'custom-variations' => '',
  ),
  '_multiwidget' => 1,
));

        remove_filter('pre_update_option_widget_gantry_logo', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_widget_gantry_menu', 'filter_token_url', 10, 2);

        update_option('widget_gantry_menu',array (
  2 => 
  array (
    'title' => '',
    'nav_menu' => 'main-menu',
    'theme' => 'gantry_dropdown',
    'style' => '',
    'limit_levels' => '0',
    'startLevel' => '0',
    'endLevel' => '0',
    'showAllChildren' => '1',
    'show_empty_menu' => '0',
    'maxdepth' => '10',
    'widget_chrome' => 'menu',
    'custom-variations' => '',
  ),
  4 => 
  array (
    'title' => 'Site Menu',
    'nav_menu' => 'main-menu',
    'theme' => 'gantry_splitmenu',
    'style' => '',
    'limit_levels' => '1',
    'startLevel' => '0',
    'endLevel' => '1',
    'showAllChildren' => '1',
    'show_empty_menu' => '0',
    'maxdepth' => '10',
    'variations' => 
    array (
      0 => 'box2',
      1 => 'title3',
    ),
    'widget_chrome' => '',
    'custom-variations' => '',
  ),
  '_multiwidget' => 1,
));

        remove_filter('pre_update_option_widget_gantry_menu', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_widget_rokajaxsearch', 'filter_token_url', 10, 2);

        update_option('widget_rokajaxsearch',array (
  2 => 
  array (
    'title' => 'Search the Blog',
    'variations' => 
    array (
      0 => 'box3',
      1 => 'title2',
    ),
    'widget_chrome' => '',
    'custom-variations' => '',
  ),
  3 => 
  array (
    'title' => '',
    'widget_chrome' => '',
    'custom-variations' => 'fp-rokajaxsearch',
  ),
  '_multiwidget' => 1,
));

        remove_filter('pre_update_option_widget_rokajaxsearch', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_widget_gantry_loginform', 'filter_token_url', 10, 2);

        update_option('widget_gantry_loginform',array (
  2 => 
  array (
    'title' => 'Login Form',
    'user_greeting' => 'Hi,',
    'pretext' => '',
    'posttext' => '',
    'variations' => 
    array (
      0 => 'box4',
      1 => 'title4',
    ),
    'widget_chrome' => '',
    'custom-variations' => '',
  ),
  '_multiwidget' => 1,
));

        remove_filter('pre_update_option_widget_gantry_loginform', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_widget_text', 'filter_token_url', 10, 2);

        update_option('widget_text',array (
  4 => 
  array (
    'title' => 'Plethora Demo',
    'text' => '<p class="hidden-phone">These examples are intended to show how Plethora can be constructed on your site, above and beyond the frontpage demonstration. These include WordPress content with varying widgetized content, mainbody widths and page lengths.</p>

<p class="nomarginbottom">All demo content is for sample purpose only, intended to show a live site. Use the <a href="http://www.rockettheme.com/wordpress/themes/plethora">Plethora RocketLauncher</a> to install an equivalent of the demo onto your site.</p>',
    'filter' => false,
    'custom-variations' => 'rt-phone-center',
    'widget_chrome' => '',
  ),
  5 => 
  array (
    'title' => 'Sample Contact Info',
    'text' => '<p>Completely synergize resource sucking relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.</p>

<div class="gantry-width-container">
	<div class="gantry-width-40">
		<div class="gantry-width-spacer">
			<img src="@RT_SITE_URL@/wp-content/rockettheme/rt_plethora_wp/pages/pages-overview/logo.png" alt="image" />
		</div>	
	</div>

	<div class="gantry-width-60">
		<div class="gantry-width-spacer">
			<span class="rt-intro-text">+1(123)456-5555-555</span><br />
			<span>Plethora Theme, LLC</span><br />
			<span>123 WordPress Boulevard</span><br />
			<span>Seattle, WA 00000, USA</span><br />
			<span><a href="#">noreply@domain.com</a></span>
		</div>
	</div>
</div>
<div class="clear"></div>',
    'filter' => false,
    'custom-variations' => 'rt-phone-center',
    'widget_chrome' => '',
  ),
  '_multiwidget' => 1,
));

        remove_filter('pre_update_option_widget_text', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_widget_gantry_branding', 'filter_token_url', 10, 2);

        update_option('widget_gantry_branding',array (
  2 => 
  array (
    'widget_chrome' => '',
    'custom-variations' => '',
  ),
  '_multiwidget' => 1,
));

        remove_filter('pre_update_option_widget_gantry_branding', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_widget_gantry_copyright', 'filter_token_url', 10, 2);

        update_option('widget_gantry_copyright',array (
  2 => 
  array (
    'text' => '<div class="rt-text-small rt-center">All demo content is for sample purposes only, intended to show a live site. All images are licensed from ShutterStock &amp; PhotoDune for exclusive use on this demo site only. Use the Plethora RocketLauncher for demo replication.</div>',
    'widget_chrome' => '',
    'custom-variations' => '',
  ),
  '_multiwidget' => 1,
));

        remove_filter('pre_update_option_widget_gantry_copyright', 'filter_token_url', 10, 2);

        add_filter('pre_update_option_widget_gantry_totop', 'filter_token_url', 10, 2);

        update_option('widget_gantry_totop',array (
  2 => 
  array (
    'text' => 'Top',
    'widget_chrome' => '',
    'custom-variations' => '',
  ),
  '_multiwidget' => 1,
));

        remove_filter('pre_update_option_widget_gantry_totop', 'filter_token_url', 10, 2);

$gantry_menu_items = array();
function rokimport_get_post_from_guid($guid) {
    global $wpdb;
    $guid = replace_token_url($guid);
    $posts = $wpdb->get_results("SELECT ID FROM " . $wpdb->posts . " WHERE guid = '" . $guid . "'");
    return (count($posts) > 0) ? $posts[0]->ID : 0;
}
function rokimport_get_taxonomy($name, $taxonomy) {
    $taxfield = get_term_by( "slug", $name, $taxonomy);
    return $taxfield->term_id;
}
global $wp_version;
if (version_compare($wp_version,"3.0",">=")){
$importing_menu = wp_get_nav_menu_object("main-menu");$menu_item_mapping = array(0=>0);$menu_item_mapping[167] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[0],'menu-item-type' => 'custom','menu-item-title' => 'Home','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '1','menu-item-attr-title' => '','menu-item-url' => '@RT_SITE_URL@/'));$gantry_menu_items["main-menu"][$menu_item_mapping[167]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
  'gantrymenu_large_direction' => 'rt-dropdown-right-large',
  'gantrymenu_desktop_direction' => 'rt-dropdown-right-desktop',
  'gantrymenu_tablet_direction' => 'rt-dropdown-right-tablet',
);$menu_item_mapping[168] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[0],'menu-item-type' => 'custom','menu-item-title' => 'Features','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '2','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[168]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
  'gantrymenu_large_direction' => 'rt-dropdown-right-large',
  'gantrymenu_desktop_direction' => 'rt-dropdown-right-desktop',
  'gantrymenu_tablet_direction' => 'rt-dropdown-right-tablet',
);$menu_item_mapping[169] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[168],'menu-item-type' => 'post_type','menu-item-title' => 'Features Overview','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '3','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=6'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[169]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
  'gantrymenu_large_direction' => 'rt-dropdown-right-large',
  'gantrymenu_desktop_direction' => 'rt-dropdown-right-desktop',
  'gantrymenu_tablet_direction' => 'rt-dropdown-right-tablet',
);$menu_item_mapping[170] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[168],'menu-item-type' => 'post_type','menu-item-title' => 'Widget Positions','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '4','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=8'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[170]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
  'gantrymenu_large_direction' => 'rt-dropdown-right-large',
  'gantrymenu_desktop_direction' => 'rt-dropdown-right-desktop',
  'gantrymenu_tablet_direction' => 'rt-dropdown-right-tablet',
);$menu_item_mapping[171] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[168],'menu-item-type' => 'post_type','menu-item-title' => 'Widget Variations','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '5','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=10'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[171]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
  'gantrymenu_large_direction' => 'rt-dropdown-right-large',
  'gantrymenu_desktop_direction' => 'rt-dropdown-right-desktop',
  'gantrymenu_tablet_direction' => 'rt-dropdown-right-tablet',
);$menu_item_mapping[172] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[168],'menu-item-type' => 'post_type','menu-item-title' => 'Typography','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '6','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=12'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[172]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
  'gantrymenu_large_direction' => 'rt-dropdown-right-large',
  'gantrymenu_desktop_direction' => 'rt-dropdown-right-desktop',
  'gantrymenu_tablet_direction' => 'rt-dropdown-right-tablet',
);$menu_item_mapping[173] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[168],'menu-item-type' => 'post_type','menu-item-title' => 'Menu Options','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '7','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=50'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[173]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
  'gantrymenu_large_direction' => 'rt-dropdown-right-large',
  'gantrymenu_desktop_direction' => 'rt-dropdown-right-desktop',
  'gantrymenu_tablet_direction' => 'rt-dropdown-right-tablet',
);$menu_item_mapping[174] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[168],'menu-item-type' => 'custom','menu-item-title' => 'Documentation','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '8','menu-item-attr-title' => '','menu-item-url' => 'http://www.rockettheme.com/docs/wordpress/themes/plethora'));$gantry_menu_items["main-menu"][$menu_item_mapping[174]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
  'gantrymenu_large_direction' => 'rt-dropdown-right-large',
  'gantrymenu_desktop_direction' => 'rt-dropdown-right-desktop',
  'gantrymenu_tablet_direction' => 'rt-dropdown-right-tablet',
);$menu_item_mapping[175] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[168],'menu-item-type' => 'custom','menu-item-title' => 'Forum Support','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '9','menu-item-attr-title' => '','menu-item-url' => 'http://www.rockettheme.com/forum/wordpress-theme-plethora'));$gantry_menu_items["main-menu"][$menu_item_mapping[175]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
  'gantrymenu_large_direction' => 'rt-dropdown-right-large',
  'gantrymenu_desktop_direction' => 'rt-dropdown-right-desktop',
  'gantrymenu_tablet_direction' => 'rt-dropdown-right-tablet',
);$menu_item_mapping[176] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[0],'menu-item-type' => 'custom','menu-item-title' => 'Pages','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '10','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[176]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '2',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '320',
  'gantrymenu_column_widths' => '',
  'gantrymenu_large_direction' => 'rt-dropdown-right-large',
  'gantrymenu_desktop_direction' => 'rt-dropdown-right-desktop',
  'gantrymenu_tablet_direction' => 'rt-dropdown-right-tablet',
);$menu_item_mapping[177] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[176],'menu-item-type' => 'post_type','menu-item-title' => 'Pages Overview','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '11','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=14'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[177]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
  'gantrymenu_large_direction' => 'rt-dropdown-right-large',
  'gantrymenu_desktop_direction' => 'rt-dropdown-right-desktop',
  'gantrymenu_tablet_direction' => 'rt-dropdown-right-tablet',
);$menu_item_mapping[178] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[176],'menu-item-type' => 'post_type','menu-item-title' => 'About Us','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '12','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=16'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[178]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
  'gantrymenu_large_direction' => 'rt-dropdown-right-large',
  'gantrymenu_desktop_direction' => 'rt-dropdown-right-desktop',
  'gantrymenu_tablet_direction' => 'rt-dropdown-right-tablet',
);$menu_item_mapping[179] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[176],'menu-item-type' => 'post_type','menu-item-title' => 'The Team','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '13','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=18'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[179]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
  'gantrymenu_large_direction' => 'rt-dropdown-right-large',
  'gantrymenu_desktop_direction' => 'rt-dropdown-right-desktop',
  'gantrymenu_tablet_direction' => 'rt-dropdown-right-tablet',
);$menu_item_mapping[180] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[176],'menu-item-type' => 'post_type','menu-item-title' => 'Services','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '14','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=20'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[180]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
  'gantrymenu_large_direction' => 'rt-dropdown-right-large',
  'gantrymenu_desktop_direction' => 'rt-dropdown-right-desktop',
  'gantrymenu_tablet_direction' => 'rt-dropdown-right-tablet',
);$menu_item_mapping[181] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[176],'menu-item-type' => 'post_type','menu-item-title' => 'Pricing Tables','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '15','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=22'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[181]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
  'gantrymenu_large_direction' => 'rt-dropdown-right-large',
  'gantrymenu_desktop_direction' => 'rt-dropdown-right-desktop',
  'gantrymenu_tablet_direction' => 'rt-dropdown-right-tablet',
);$menu_item_mapping[182] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[176],'menu-item-type' => 'post_type','menu-item-title' => 'Portfolio','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '16','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=24'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[182]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
  'gantrymenu_large_direction' => 'rt-dropdown-right-large',
  'gantrymenu_desktop_direction' => 'rt-dropdown-right-desktop',
  'gantrymenu_tablet_direction' => 'rt-dropdown-right-tablet',
);$menu_item_mapping[183] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[176],'menu-item-type' => 'taxonomy','menu-item-title' => 'Blog','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '17','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_taxonomy('blog', 'category'),'menu-item-object' => 'category'));$gantry_menu_items["main-menu"][$menu_item_mapping[183]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
  'gantrymenu_large_direction' => 'rt-dropdown-right-large',
  'gantrymenu_desktop_direction' => 'rt-dropdown-right-desktop',
  'gantrymenu_tablet_direction' => 'rt-dropdown-right-tablet',
);$menu_item_mapping[184] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[176],'menu-item-type' => 'post_type','menu-item-title' => 'FAQ','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '18','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=28'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[184]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
  'gantrymenu_large_direction' => 'rt-dropdown-right-large',
  'gantrymenu_desktop_direction' => 'rt-dropdown-right-desktop',
  'gantrymenu_tablet_direction' => 'rt-dropdown-right-tablet',
);$menu_item_mapping[185] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[176],'menu-item-type' => 'post_type','menu-item-title' => 'Contact Us','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '19','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=30'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[185]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
  'gantrymenu_large_direction' => 'rt-dropdown-right-large',
  'gantrymenu_desktop_direction' => 'rt-dropdown-right-desktop',
  'gantrymenu_tablet_direction' => 'rt-dropdown-right-tablet',
);$menu_item_mapping[186] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[176],'menu-item-type' => 'post_type','menu-item-title' => 'Offline Page','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '20','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=32'),'menu-item-object' => 'page'));$gantry_menu_items["main-menu"][$menu_item_mapping[186]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
  'gantrymenu_large_direction' => 'rt-dropdown-right-large',
  'gantrymenu_desktop_direction' => 'rt-dropdown-right-desktop',
  'gantrymenu_tablet_direction' => 'rt-dropdown-right-tablet',
);$menu_item_mapping[187] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[176],'menu-item-type' => 'custom','menu-item-title' => 'Coming Soon','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '21','menu-item-attr-title' => '','menu-item-url' => '@RT_SITE_URL@/?tmpl=comingsoon'));$gantry_menu_items["main-menu"][$menu_item_mapping[187]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
  'gantrymenu_large_direction' => 'rt-dropdown-right-large',
  'gantrymenu_desktop_direction' => 'rt-dropdown-right-desktop',
  'gantrymenu_tablet_direction' => 'rt-dropdown-right-tablet',
);$menu_item_mapping[188] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[176],'menu-item-type' => 'custom','menu-item-title' => '404 Error','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '22','menu-item-attr-title' => '','menu-item-url' => '@RT_SITE_URL@/?tmpl=404'));$gantry_menu_items["main-menu"][$menu_item_mapping[188]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
  'gantrymenu_large_direction' => 'rt-dropdown-right-large',
  'gantrymenu_desktop_direction' => 'rt-dropdown-right-desktop',
  'gantrymenu_tablet_direction' => 'rt-dropdown-right-tablet',
);$menu_item_mapping[189] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[0],'menu-item-type' => 'custom','menu-item-title' => 'Styles','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '23','menu-item-attr-title' => '','menu-item-url' => '#'));$gantry_menu_items["main-menu"][$menu_item_mapping[189]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '2',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '235',
  'gantrymenu_column_widths' => '',
  'gantrymenu_large_direction' => 'rt-dropdown-right-large',
  'gantrymenu_desktop_direction' => 'rt-dropdown-right-desktop',
  'gantrymenu_tablet_direction' => 'rt-dropdown-right-tablet',
);$menu_item_mapping[190] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[189],'menu-item-type' => 'custom','menu-item-title' => 'Preset 1','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '24','menu-item-attr-title' => '','menu-item-url' => '@RT_SITE_URL@/?presets=preset1'));$gantry_menu_items["main-menu"][$menu_item_mapping[190]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
  'gantrymenu_large_direction' => 'rt-dropdown-right-large',
  'gantrymenu_desktop_direction' => 'rt-dropdown-right-desktop',
  'gantrymenu_tablet_direction' => 'rt-dropdown-right-tablet',
);$menu_item_mapping[191] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[189],'menu-item-type' => 'custom','menu-item-title' => 'Preset 3','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '25','menu-item-attr-title' => '','menu-item-url' => '@RT_SITE_URL@/?presets=preset3'));$gantry_menu_items["main-menu"][$menu_item_mapping[191]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
  'gantrymenu_large_direction' => 'rt-dropdown-right-large',
  'gantrymenu_desktop_direction' => 'rt-dropdown-right-desktop',
  'gantrymenu_tablet_direction' => 'rt-dropdown-right-tablet',
);$menu_item_mapping[192] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[189],'menu-item-type' => 'custom','menu-item-title' => 'Preset 5','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '26','menu-item-attr-title' => '','menu-item-url' => '@RT_SITE_URL@/?presets=preset5'));$gantry_menu_items["main-menu"][$menu_item_mapping[192]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
  'gantrymenu_large_direction' => 'rt-dropdown-right-large',
  'gantrymenu_desktop_direction' => 'rt-dropdown-right-desktop',
  'gantrymenu_tablet_direction' => 'rt-dropdown-right-tablet',
);$menu_item_mapping[193] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[189],'menu-item-type' => 'custom','menu-item-title' => 'Preset 2','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '27','menu-item-attr-title' => '','menu-item-url' => '@RT_SITE_URL@/?presets=preset2'));$gantry_menu_items["main-menu"][$menu_item_mapping[193]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
  'gantrymenu_large_direction' => 'rt-dropdown-right-large',
  'gantrymenu_desktop_direction' => 'rt-dropdown-right-desktop',
  'gantrymenu_tablet_direction' => 'rt-dropdown-right-tablet',
);$menu_item_mapping[194] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[189],'menu-item-type' => 'custom','menu-item-title' => 'Preset 4','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '28','menu-item-attr-title' => '','menu-item-url' => '@RT_SITE_URL@/?presets=preset4'));$gantry_menu_items["main-menu"][$menu_item_mapping[194]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
  'gantrymenu_large_direction' => 'rt-dropdown-right-large',
  'gantrymenu_desktop_direction' => 'rt-dropdown-right-desktop',
  'gantrymenu_tablet_direction' => 'rt-dropdown-right-tablet',
);$menu_item_mapping[195] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[189],'menu-item-type' => 'custom','menu-item-title' => 'Preset 6','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '29','menu-item-attr-title' => '','menu-item-url' => '@RT_SITE_URL@/?presets=preset6'));$gantry_menu_items["main-menu"][$menu_item_mapping[195]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
  'gantrymenu_large_direction' => 'rt-dropdown-right-large',
  'gantrymenu_desktop_direction' => 'rt-dropdown-right-desktop',
  'gantrymenu_tablet_direction' => 'rt-dropdown-right-tablet',
);$menu_item_mapping[196] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[0],'menu-item-type' => 'custom','menu-item-title' => 'Download','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '30','menu-item-attr-title' => '','menu-item-url' => 'http://www.rockettheme.com/wordpress/themes/plethora'));$gantry_menu_items["main-menu"][$menu_item_mapping[196]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
  'gantrymenu_large_direction' => 'rt-dropdown-right-large',
  'gantrymenu_desktop_direction' => 'rt-dropdown-right-desktop',
  'gantrymenu_tablet_direction' => 'rt-dropdown-right-tablet',
);update_option("gantry_menu_items",$gantry_menu_items);$importing_menu = wp_get_nav_menu_object("top-menu");$menu_item_mapping = array(0=>0);$menu_item_mapping[222] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[0],'menu-item-type' => 'post_type','menu-item-title' => 'About','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '1','menu-item-attr-title' => '','menu-item-object-id' => rokimport_get_post_from_guid('@RT_SITE_URL@/?page_id=6'),'menu-item-object' => 'page'));$gantry_menu_items["top-menu"][$menu_item_mapping[222]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
  'gantrymenu_large_direction' => 'rt-dropdown-right-large',
  'gantrymenu_desktop_direction' => 'rt-dropdown-right-desktop',
  'gantrymenu_tablet_direction' => 'rt-dropdown-right-tablet',
);$menu_item_mapping[223] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[0],'menu-item-type' => 'custom','menu-item-title' => 'Docs','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '2','menu-item-attr-title' => '','menu-item-url' => 'http://www.rockettheme.com/docs/wordpress/themes/plethora'));$gantry_menu_items["top-menu"][$menu_item_mapping[223]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
  'gantrymenu_large_direction' => 'rt-dropdown-right-large',
  'gantrymenu_desktop_direction' => 'rt-dropdown-right-desktop',
  'gantrymenu_tablet_direction' => 'rt-dropdown-right-tablet',
);$menu_item_mapping[224] = wp_update_nav_menu_item($importing_menu->term_id, 0, array('menu-item-parent-id' => $menu_item_mapping[0],'menu-item-type' => 'custom','menu-item-title' => 'Help','menu-item-status' => 'publish','menu-item-target' => '','menu-item-classes' => '','menu-item-description' => '','menu-item-xfn' => '','menu-item-position' => '3','menu-item-attr-title' => '','menu-item-url' => 'http://www.rockettheme.com/forum/wordpress-theme-plethora'));$gantry_menu_items["top-menu"][$menu_item_mapping[224]] = array (
  'gantrymenu_item_subtext' => '',
  'gantrymenu_customimage' => '',
  'gantrymenu_customicon' => '',
  'gantrymenu_columns' => '1',
  'gantrymenu_distribution' => 'evenly',
  'gantrymenu_manual_distribution' => '',
  'gantrymenu_children_group' => '0',
  'gantrymenu_dropdown_width' => '',
  'gantrymenu_column_widths' => '',
  'gantrymenu_large_direction' => 'rt-dropdown-right-large',
  'gantrymenu_desktop_direction' => 'rt-dropdown-right-desktop',
  'gantrymenu_tablet_direction' => 'rt-dropdown-right-tablet',
);update_option("gantry_menu_items",$gantry_menu_items);}