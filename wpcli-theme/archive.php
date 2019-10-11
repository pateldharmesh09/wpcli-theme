<?php 

 get_header();
    
    if('custompost'==get_post_type())
     {
        include(TEMPLATEPATH.'/archive/archive-custompost.php');
     }
     elseif('slider'==get_post_type())
     {
        include(TEMPLATEPATH.'/archive/archive-slider.php');
     }
     elseif('gallary'==get_post_type())
     {
        include(TEMPLATEPATH.'/archive/archive-gallary.php');
     }
     elseif('icon'==get_post_type())
     {
        include(TEMPLATEPATH.'/archive/archive-icon.php');
     }
     elseif('resortdetail'==get_post_type())
     {
        include(TEMPLATEPATH.'/archive/archive-resortdetail.php');
     }
     elseif('blogslider'==get_post_type())
     {
        include(TEMPLATEPATH.'/archive/archive-blogslider.php');
     }
     elseif('photo'==get_post_type())
     {
        include(TEMPLATEPATH.'/archive/archive-photo.php');
     }
     elseif('room'==get_post_type())
     {
        include(TEMPLATEPATH.'/archive/archive-room.php');
     }
     elseif('about'==get_post_type())
     {
        include(TEMPLATEPATH.'/archive/archive-about.php');
     }
    else
     {  
         include(TEMPLATEPATH.'/404.php'); 
     } 


?>