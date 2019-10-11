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
              
               <?php the_post_thumbnail('banner-image');?></br>
           
              
                <h1><?php the_title();?></h1>
                <h3><?php the_content(); ?></h3></br>
               <h4> news type:<?php the_terms($post->ID,'newstype');?></h4>
               <h4> publish date:<?php echo esc_attr( get_post_meta( get_the_ID(), 'published_date', true ));?></h4>
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