<?php 
 
 get_header();
  
   //the query
    $args = array(
                 
                 'post_type'=>'room',
                'post_status'=>'publish');
    $room = new wp_query($args);


    if ($room->have_posts() ) : 
              while($room->have_posts() ) : 

                       $room->the_post(); 
             ?>
                
              <div class="container">
                <div class="row">

                    <div class="col-sm-3">       
                         <h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
                           <?php the_excerpt();?>
                             
                      <div class="links"><a href="<?php the_permalink();?>">READ MORE</a></div>
                     </div>
               <?php
                endwhile;
            endif;
        ?>

    </div>
   </div> 
                        
   

