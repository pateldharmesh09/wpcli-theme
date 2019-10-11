
<?php
    if(isset($_GET['submit']))
    {
      $search = $_GET['s'];

         if($search =="")
          {
            include(TEMPLATEPATH.'/404.php'); 
          }
         else
          {
              get_header();
              ?>
                 <!--  search part code is here -->
                   <div class="container">
                      <div class="row">

                      
                        <h3 style="color:red;">search for:- <?php the_search_query();?></h3>

                           <?php

                             if (have_posts() ) : 
                            while(have_posts() ) : 
                                  the_post(); 
                           ?> 
                                    <?php the_post_thumbnail();?></br>
                                   <h1><?php the_title();?></h1>
                                  <h3><?php the_content(); ?></h3>
                                  <h3><?php the_category();?></h3>
                                  <h3><?php the_date('F j, Y');?></3>
                                 <h3><?php the_author(); ?></h3>
                        <?php   
                            endwhile; 
                          endif;
                        ?>
                           
                      </div>
                  </div>
           <?php
              get_footer();
         }
    }
?>


