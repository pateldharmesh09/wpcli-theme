<?php 
 
 get_header();
      if(have_posts()) {
       the_post();
       rewind_posts(); 
        }
         
     if('custompost'==get_post_type())
     {
        include(TEMPLATEPATH.'/single-custompost.php');
     }
     elseif ('room'==get_post_type()) 
     {
        include(TEMPLATEPATH.'/single-room.php');
     }
     elseif('resortdetail'==get_post_type())
     {
        include(TEMPLATEPATH.'/single-room.php');
     }
     elseif('gallary'==get_post_type())
     {
        include(TEMPLATEPATH.'/single-room.php');
     }
     elseif('photo'==get_post_type())
     {
        include(TEMPLATEPATH.'/single-photo.php');
     }
     elseif ('icon'==get_post_type()) 
     {
        include(TEMPLATEPATH.'/single-icon.php');
     }
     elseif ('post'==get_post_type()) 
     {
          // by default wordpress PAGE and POST ..
           the_title();
            the_content();
     }
     else
     {  
         include(TEMPLATEPATH.'/404.php'); 
     } 

get_footer();
?>