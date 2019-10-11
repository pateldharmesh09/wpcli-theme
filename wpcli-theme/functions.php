<?php  
    //load stylesheet
   function load_stylesheet()
    {
      wp_enqueue_style('bootstrap',get_template_directory_uri().'/assets/css/bootstrap.min.css');
       wp_enqueue_style('fonts',get_template_directory_uri().'/assets/font-awesome/css/font-awesome.min.css');
       wp_enqueue_style('style',get_template_directory_uri().'/assets/css/style.css');
       wp_enqueue_style('antonio-exotic',get_template_directory_uri().'/assets/fonts/antonio-exotic/stylesheet.css');
       wp_enqueue_style('lightbox',get_template_directory_uri().'/assets/css/lightbox.min.css');
       wp_enqueue_style('responsive',get_template_directory_uri().'/assets/css/responsive.css');
       wp_enqueue_style('mystyle',get_template_directory_uri().'/style.css');
    }
    add_action('wp_enqueue_scripts','load_stylesheet');

  //load scripts
  function load_script()
  {
    wp_enqueue_script('jquery',get_template_directory_uri().'/assets/js/jquery.min.js');
    wp_enqueue_script('bootstrap',get_template_directory_uri().'/assets/js/bootstrap.min.js');
    wp_enqueue_script('lightbox',get_template_directory_uri().'/assets/js/lightbox-plus-jquery.min.js');
    wp_enqueue_script('instafeed',get_template_directory_uri().'/assets/js/instafeed.min.js');
    wp_enqueue_script('custom',get_template_directory_uri().'/assets/js/custom.js');
  }
  add_action('wp_enqueue_scripts','load_script');

  //add FANCYBOX PACKAGE
  function add_fancyboxpkg()
  {
      wp_enqueue_style('css',get_template_directory_uri().'/assets/fancybox/jquery.fancybox.min.css');
      wp_enqueue_script('js',get_template_directory_uri().'/assets/fancybox/jquery.fancybox.min.js');
  }
  add_action('wp_enqueue_scripts','add_fancyboxpkg');


    // code for register menu item
    function thiredtheme_menu_item()
    {
       register_nav_menus(
            array(
                   'header'=>__('header menu'),
                   'footer'=>__('footer menu'))); 
    }
    add_action('init','thiredtheme_menu_item');

    

    // add class for each li tag in theme
    add_filter('nav_menu_css_class','thirdtheme_each_li_css',10,4);

    function thirdtheme_each_li_css($classes,$item,$args,$dept)
    {
         $classes[] = 'thirdtheme_li_class';
         return $classes;
    }



   // class add for all <a> tag in theme
    add_filter('nav_menu_link_attributes','thirdtheme_each_anchor_tag');

    function thirdtheme_each_anchor_tag($attr)
    {
           $attr['class'] = 'thirdtheme_anchor_class';
           return $attr;
    }

    // code for custom  post type 
    function thirdtheme_custom_post_type()
    {
      $args = array(
            'labels'         => array('name' =>__(' my custom post'),
                               'singular name' =>__('my custom post')),
            'public'         => true,
            'show_in_menu'   => true,
            'has_archive'    => true,
            'supports'       => array( 'title', 'editor', 'author', 'thumbnail'));
      register_post_type('custompost',$args);
                  
    }
    add_action('init','thirdtheme_custom_post_type');

    // add feature image code
    function thirdtheme_theme_support()
    {
      add_theme_support('post-thumbnails');
      
      // image size
      add_image_size('small-thumbnail',350,350,true);
      add_image_size('baner-image',1000,400,true);
      
      //post format
       add_theme_support('post-formats',array('aside','gallary','link'));
    }
    add_action('after_setup_theme','thirdtheme_theme_support');

   // custom slider image code
   function thirdtheme_custom_slider()
    {
      add_theme_support('post-thumbnails');
     $args = array(
            'labels'         => array('name' =>__(' custom slider'),
                                      'add_new' =>__('add new slider')),
                                      
            'public'         => true,
            'menu_icon'      => 'dashicons-format-image',
            'show_in_menu'   => true,
            'has_archive'    => true,
            'supports'       => array( 'title', 'thumbnail' ));      
      register_post_type('slider',$args);
    }
    add_action('init','thirdtheme_custom_slider');

   
   //custom galalry block
     function thirdtheme_custom_gallary()
    {
       add_theme_support('post-thumbnails');
       add_image_size('gallary_size',268,281);

         $args = array(
            'labels'         => array('name' =>__('gallary block'),
                                      'add_new' =>__('add new image')),
                                      
            'public'         => true,
            'menu_icon'      => 'dashicons-format-image',
            'show_in_menu'   => true,
            'has_archive'    => true,
            'supports'       => array( 'title','thumbnail','editor','author'));    
      register_post_type('gallary',$args);
    }
    add_action('init','thirdtheme_custom_gallary');

   
  // custom icon block code
    function thirdtheme_custom_icon()
    {
      add_theme_support('post-thumbnails');
      add_image_size('iconsize',55,45);
      $args = array(
            'labels'         => array('name' =>__('icon'),
                                      'add_new' =>__('add new icon')),
                                      
            'public'         => true,
            'menu_icon'      => 'dashicons-art',
            'show_in_menu'   => true,
            'has_archive'    => true,
            'supports'       => array( 'title','editor','thumbnail' ));      
      register_post_type('icon',$args);
    }
    add_action('init','thirdtheme_custom_icon');  

   
   //custom code for resort overview
    function thirdtheme_resort_overview()
    {
      add_theme_support('post-thumbnails');
      add_image_size('medium',278,281);
      $args = array(
            'labels'         => array('name' =>__('resort detail'),
                                      'add_new' =>__('add new detail')),
                                      
            'public'         => true,
            'menu_icon'      => 'dashicons-format-aside',
            'show_in_menu'   => true,
            'has_archive'    => true,
            'supports'       => array( 'title', 'editor', 'author', 'thumbnail','custom-fields','excerpt'));      
      register_post_type('resortdetail',$args);
    }
    add_action('init','thirdtheme_resort_overview'); 



    // custom code for Blog slider 
     function thirdtheme_blog_slider()
    {
      add_theme_support('post-thumbnails');
      add_image_size('small',102,102);
      $args = array(
            'labels'         => array('name' =>__('blog slider'),
                                      'add_new' =>__('add new blog')),
                                      
            'public'         => true,
            'menu_icon'      =>'dashicons-buddicons-buddypress-logo',
            'show_in_menu'   => true,
            'has_archive'    => true,
            'supports'       => array( 'title', 'editor','thumbnail',));      
      register_post_type('blogslider',$args);
    }
    add_action('init','thirdtheme_blog_slider'); 


   //custom code for photo page
    function thirdtheme_photo_page()
    {
      add_theme_support('post-thumbnails');
       add_image_size('medium',400,400);
      $args = array(
            'labels'         => array('name' =>__('photo page'),
                                      'add_new' =>__('add new photo')),
                                      
            'public'         => true,
            'menu_icon'      =>'dashicons-format-image',
            'show_in_menu'   => true,
            'has_archive'    => true,
            'supports'       => array( 'title','thumbnail'));      
      register_post_type('photo',$args);
    }
    add_action('init','thirdtheme_photo_page'); 


  // custom code for room page
    function thirdtheme_room_page()
    {
      add_theme_support('post-thumbnails');
       add_image_size('room_size',268,281); 
      $args = array(
            'labels'         => array('name' =>__('room page'),
                                      'add_new' =>__('add new room photo')),
                                      
            'public'         => true,
            'menu_icon'      =>'dashicons-art',
            'show_in_menu'   => true,
            'has_archive'    => true,
            'supports'       => array( 'title', 'editor', 'author', 'thumbnail','excerpt'));      
      register_post_type('room',$args);
    }
    add_action('init','thirdtheme_room_page'); 


    //custom code for our service on  about us page
     function thirdtheme_about_page()
    {
      $args = array(
            'labels'         => array('name' =>__('our service'),
                                      'add_new' =>__('add services detail')),
                                      
            'public'         => true,
            'menu_icon'      =>'dashicons-buddicons-pm',
            'show_in_menu'   => true,
            'has_archive'    => true,
            'supports'       => array( 'title', 'editor'));      
      register_post_type('our_service',$args);
    }
    add_action('init','thirdtheme_about_page');

    //custom code for our client on about us page
     function thirdtheme_our_client_about_page()
    {
      add_theme_support('post-thumbnails'); 
      //add_image_size('client_image',400,400);
      $args = array(
            'labels'         => array('name' =>__('our client '),
                                      'add_new' =>__('add client image')),
                                      
            'public'         => true,
            'menu_icon'      =>'dashicons-image-filter',
            'supports'       => array( 'title','thumbnail'));      
      register_post_type('our_client',$args);
    }
    add_action('init','thirdtheme_our_client_about_page');

     //custom code for our Team on about us page
     function thirdtheme_our_team_about_page()
    {
      add_theme_support('post-thumbnails'); 
      add_image_size('team_size',200,200);
      $args = array(
            'labels'         => array('name' =>__('our team '),
                                      'add_new' =>__('add Team member')),
                                      
            'public'         => true,
            'menu_icon'      =>'dashicons-smiley',
            'supports'       => array( 'title','editor','thumbnail'));      
      register_post_type('our_team',$args);
    }
    add_action('init','thirdtheme_our_team_about_page');


    //Excerpt length code
    function thirdtheme_excerpt_length($length)
    {
         return 40;
    } 
    add_filter('excerpt_length','thirdtheme_excerpt_length',999);

    
  // Add Shortcode for slider image
    function custom_shortcode_slider() 
    {
       require_once(TEMPLATEPATH.'/shortcode/shortcode.php');
    }
    add_shortcode('slider','custom_shortcode_slider'); 

   
    // add shortcode for blog slider
   function custom_shortcode_blogslider() 
    {
       require_once(TEMPLATEPATH.'/shortcode/shortcode1.php');
    }
    add_shortcode('blogslider','custom_shortcode_blogslider'); 


    // register sidebar  in theme
    function thirdtheme_register_sidebar() 
    {
      register_sidebar( array(
        'name'          => 'footer left',
        'id'            => 'footer_left',
        'description'   => 'this is a left footer',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h1 class="rounded ">',
        'after_title'   => '</h1>'));


      register_sidebar( array(
        'name'          => 'footer center',
        'id'            => 'footer_center',
        'description'   => 'this is a center footer',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded ">',
        'after_title'   => '</h2>'));

      register_sidebar( array(
        'name'          => 'footer right',
        'id'            => 'footer_right',
        'description'   => 'this is a right footer',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded ">',
        'after_title'   => '</h2>'));

    }
    add_action( 'widgets_init','thirdtheme_register_sidebar' );

    
  // register widgts in theme 
     class MyNewWidgets extends WP_Widget {
      function __construct() {
    // Instantiate the parent object
    parent::__construct( 'info', 'ADDRESS widget Area',array(
                          'description'=>'address detail widget'
                   ));
      }
        function widget( $one, $two ) {
          
         // display content on blog page
    ?>
          <?php echo $one['before_widget'];?>
          <?php echo $one['before_title'];?><?php echo $two['title'];?><?php echo $one['after_title']; ?>

          <ul class="list-unstyled footer-contact-list">
                                    <li>
                                        <i class="fa fa-map-marker fa-lg"></i>
                                        <p><a href="https://www.google.com"><?php echo $two['location'];?></a></p>
                                    </li>
                                    <li>
                                        <i class="fa fa-phone fa-lg"></i>
                                        <p><a href="tel:+1-202-555-0100"><?php echo $two['contactno'];?></a></p>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope-o fa-lg"></i>
                                        <p><a href="<?php bloginfo('admin_email'); ?>"><?php echo $two['email'];?></a></p>
                                    </li>
                              </ul> 
             <?php echo $one['after_widget'];?>                
<?php
        }  

      function update( $form, $old_instance ) {
        // Save widget options
           return $form;
        }

      function form( $form ) {
        // Output admin widget options form
           $title    ="";
           $location ="";
           $contactno ="";
           $email    ="";

           if(!empty($form))
           {
             $title    =$form['title'];
             $location =$form['location'];
             $contactno =$form['contactno'];
             $email    =$form['email'];

           }
  ?> 
                    <p>
                   <lable>title:</lable>
                   <input type="text" value ="<?php echo $title;?>" 
                          name="<?php echo $this->get_field_name('title');?>" 
                          id="<?php echo $this->get_field_id('title');?>" class="widefat"/>
                    <lable>location:</lable>
                    <input type="text" value ="<?php echo $location; ?>"
                          name="<?php echo $this->get_field_name('location');?>" 
                          id="<?php echo $this->get_field_id('location');?>" class="widefat"/>
                     <lable>contactno:</lable>
                    <input type="text" value ="<?php echo $contactno;?>"
                          name="<?php echo $this->get_field_name('contactno');?>" 
                          id="<?php echo $this->get_field_id('contactno');?>" class="widefat"/>
                     <lable>email:</lable>
                    <input type="text" value ="<?php echo $email;?>"
                          name="<?php echo $this->get_field_name('email');?>" 
                          id="<?php echo $this->get_field_id('email');?>" class="widefat"/>
                    </p>
 <?php
       }
}   
    function thirdtheme_register_widgets() 
    {
        register_widget( 'MyNewWidgets');  
    }
    add_action( 'widgets_init', 'thirdtheme_register_widgets');
   //end of widgets area 

  
  // AJAX pagination for  post...
 function add_myjavascript()
   {
     wp_localize_script('ajax-login-script','ajax_login_object',
                                 array('ajaxurl' => admin_url('admin-ajax.php')));
    }
    add_action( 'wp_enqueue_scripts','add_myjavascript' ); 

   //AJAX for DEMO
  function MyAjaxFunction()
  {
     $paged = $_POST['page'];
     $args = array(
                 'posts_per_page' =>1,
                 'post_type'=>'post',
                'post_status'=>'publish',
                 'paged'=>$paged);
    $new_query = new wp_query($args);

     if ($new_query->have_posts() ) : 
              while($new_query->have_posts() ) : 

                       $new_query->the_post(); 
   ?>              
            <h2><?php the_title(); ?></h2>
            <h4><p><?php the_content();?></p></h4>
            <h4><?php the_field('test_demo');?></h4>
            <h4> publish date: <?php echo esc_attr(get_post_meta(get_the_ID(),'published_date',true)); ?></h4>
  <?php                
        endwhile;
            endif; 
           wp_reset_postdata();
      die();
    }
   // creating Ajax call for WordPress
   add_action( 'wp_ajax_nopriv_MyAjaxFunction', 'MyAjaxFunction' );
   add_action( 'wp_ajax_MyAjaxFunction', 'MyAjaxFunction' );

  // AJAX for photo page
  function MyAjaxphotopage()
  {
     $paged = $_POST['page'];
     $args = array(
                 'posts_per_page' =>9,
                 'post_type'=>'photo',
                'post_status'=>'publish',
                 'paged'=>$paged);
    $photo = new wp_query($args);

      if ($photo->have_posts() ) : 
              while($photo->have_posts() ) : 

                       $photo->the_post(); 
      ?>              
                           <div class="col-sm-4">
                            <div class="gallery-image">
                                <a href="<?php the_permalink();?>"><?php the_post_thumbnail('medium');?></a>
                                <div class="overlay">
                                     <a class="fancybox" data-fancybox="gallery" data-caption="<?php the_title();?>"><?php the_post_thumbnail(); ?></a>
                                     
                                 </div>
                            </div> 
                        </div>
    <?php                
        endwhile;
            endif; 
           wp_reset_postdata();
      die();
    }
   // creating Ajax call for WordPress
   add_action( 'wp_ajax_nopriv_MyAjaxphotopage', 'MyAjaxphotopage' );
   add_action( 'wp_ajax_MyAjaxphotopage', 'MyAjaxphotopage');

   //AJAX for ROOM page
   function MyAjaxroompage()
   {
            $paged = $_POST['page'];
             $args = array(
                         'posts_per_page' =>2,
                         'post_type'=>'room',
                        'post_status'=>'publish',
                         'paged'=>$paged);
            $room = new wp_query($args);

             if ($room->have_posts() ) : 
                      while($room->have_posts() ) : 

                               $room->the_post();
                               get_template_part('template-parts/content-room'); 
                endwhile;
                    endif; 
                   wp_reset_postdata();
              die();
   }
   add_action( 'wp_ajax_nopriv_MyAjaxroompage', 'MyAjaxroompage' );
   add_action( 'wp_ajax_MyAjaxroompage', 'MyAjaxroompage');         
 
 //AJAX for NEWS page
   function MyAjaxnewspage()
   {
           $paged = $_POST['page'];
             $args = array(
                         'posts_per_page' =>4,
                         'post_type'=>'custompost',
                        'post_status'=>'publish',
                         'paged'=>$paged);
            $custompost = new wp_query($args);

             if ($custompost->have_posts() ) : 
                      while($custompost->have_posts() ) : 

                               $custompost->the_post(); 
                                  get_template_part('template-parts/content-news');  
                endwhile;
                    endif; 
                   wp_reset_postdata();
              die();
    }
   // creating Ajax call for WordPress
   add_action( 'wp_ajax_nopriv_MyAjaxnewspage', 'MyAjaxnewspage' );
   add_action( 'wp_ajax_MyAjaxnewspage', 'MyAjaxnewspage');


 //Custom Taxonomy for News post 
   function custom_taxonomy_news()
   {
    // Add new taxonomy, make it hierarchical (like categories)
   $labels =array(
    'name'              => _x( 'news type', 'thirdtheme' ),
    'singular_name'     => _x( 'news type', 'thirdtheme' ),
    'search_items'      => __( 'Search news', 'thirdtheme' ),
    'all_items'         => __( 'All news', 'thirdtheme' ),
    'parent_item'       => __( 'Parent news', 'thirdtheme' ),
    'edit_item'         => __( 'Edit news type', 'thirdtheme' ),
    'update_item'       => __( 'Update news type', 'thirdtheme' ),
    'add_new_item'      => __( 'Add New news type', 'thirdtheme' ),
    'new_item_name'     => __( 'New news type Name', 'thirdtheme' ),
    'not_found'         => __( 'no news category found.', 'thirdtheme' ),
    'menu_name'         => __( 'news type', 'thirdtheme' ));
   
    $args =array(
      'hierarchical'          => true,
      'labels'                => $labels,
      'show_ui'               => true,
      'show_admin_column'     => true,
      'update_count_callback' => '_update_post_term_count',
      'query_var'             => true,
      'rewrite'               => array( 'slug' => 'category'));

      register_taxonomy('newstype','custompost',$args);

      // Add new taxonomy, NOT hierarchical (like tags)
      $labels =array(
    'name'              => _x( 'news tag', 'thirdtheme' ),
    'singular_name'     => _x( 'news tag', 'thirdtheme' ),
    'search_items'      => __( 'Search tag', 'thirdtheme' ),
    'all_items'         => __( 'All tag', 'thirdtheme' ),
    'edit_item'         => __( 'Edit news tag', 'thirdtheme' ),
    'update_item'       => __( 'Update news tag', 'thirdtheme' ),
    'add_new_item'      => __( 'Add New news tag', 'thirdtheme' ),
    'new_item_name'     => __( 'New news tag Name', 'thirdtheme' ),
    'not_found'         => __( 'no news tag found', 'thirdtheme' ),
    'menu_name'         => __( 'news tag', 'thirdtheme' ));

       $args =array(
      'hierarchical'          => false,
      'labels'                => $labels,
      'show_ui'               => true,
      'show_admin_column'     => true,
      'update_count_callback' => '_update_post_term_count',
      'query_var'             => true,
      'rewrite'               => array( 'slug' => 'tag'));

      register_taxonomy('newstag','custompost',$args);
   }
   add_action('init','custom_taxonomy_news');

  
   //custom metabox demo
   function register_custom_metabox()
   {
    add_meta_box("post"," metabox for published date","demo_display_callback","post","normal","high");
   }
   add_action('add_meta_boxes','register_custom_metabox');
    // display the content on adnin interface
   function demo_display_callback($post)
   {
     ?>
       <form>
         <p >
        <label for="published_date">Published Date</label>
        <input id="published_date" type="date" name="published_date"
               value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'published_date', true ) ); ?>">
    </p>
       </form>  
<?php
   }
    //save the content of metabox 
   function save_meta_box( $post_id ) {
    if ( defined( 'DOING_AUTOSAVE') && DOING_AUTOSAVE ) return;
    if ( $parent_id = wp_is_post_revision( $post_id ) ) {
        $post_id = $parent_id;
    }
    $fields = ['published_date'];
    foreach ( $fields as $field ) {
        if ( array_key_exists( $field, $_POST ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
        }
     }
  }
add_action( 'save_post', 'save_meta_box' );


 //custom metabox for custompost in news page
  function register_custom_metabox_custompost()
  { 
    add_meta_box("custom-post","publish date for news","custompost_display_callback","custompost",
                  "normal","high");
  }
   add_action('add_meta_boxes','register_custom_metabox_custompost'); 

   // display the content on adnin interface
  function custompost_display_callback($post)
  {
   ?>
       <form>
         <p >
        <label for="published_date">Published Date</label>
        <input id="published_date" type="date" name="published_date"
               value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'published_date', true ));?>">
         </p>
       </form>  
<?php
   }
    //save the content of metabox 
   function save_meta_box_custompost( $post_id ) {
    if ( defined( 'DOING_AUTOSAVE') && DOING_AUTOSAVE ) return;
    if ( $parent_id = wp_is_post_revision( $post_id ) ) {
        $post_id = $parent_id;
    }
    $fields = ['published_date'];
    foreach ( $fields as $field ) {
        if ( array_key_exists( $field, $_POST ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
        }
     }
   }
 add_action( 'save_post', 'save_meta_box_custompost' );

   
  //Custom Sub Menu in apperance menu theme of Admin Panel 
  function custom_sub_menu_function() 
   {
      add_theme_page('sub Title name', 'sub Menu name', 'manage_options', 'sub-menu-slug', 'sub_menu_panel');
   }
  function sub_menu_panel()
   { 
        echo'<center><h1>sub menu page display</h1></center>
            <h3>this is a demo of simple sub menu in apperance(theme.php)</h3>'; 
   }
  add_action('admin_menu', 'custom_sub_menu_function');


  //Add a Sub Menu Page to a Custom Post Type
  function submenu_add_pages() 
      {
            add_submenu_page(
             'edit.php?post_type=custompost',
            __( 'Test Settings', 'menu-test' ),
            __( 'Test Settings', 'menu-test' ),
            'manage_options',
            'testsettings',
            'mt_settings_page');
      }
  function mt_settings_page() 
      {
          echo "<h2>this is working demo of sub menu for custom post type</h2>";
      }
    add_action( 'admin_menu', 'submenu_add_pages' );
 
  
  /**
  * this all link are perform using WPCLI-command
  ***/           

   include get_template_directory().'/taxonomies/news_cat.php';
   include get_template_directory().'/post-types/movie.php';
 
 
?>