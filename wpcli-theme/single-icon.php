<?php 
 get_header();
?>
 
    <div class="container">
        <div class="row">

           <?php
               if (have_posts() ) : 
              while(have_posts() ) : 

                       the_post(); 
             ?> 
              
               <?php the_post_thumbnail();?></br>
           
              
                <h1><?php the_title();?></h1>
                <h3><?php the_content(); ?></h3>
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
?>
