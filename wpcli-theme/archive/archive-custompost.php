
<!-- by default this page is called -->
<?php 
 
 get_header();
  
       $paged = ( get_query_var( 'paged' ));   //current page store here
   //the query
    $args = array(
                 'posts_per_page' =>8,
                 'post_type'      =>'custompost',
                 'order'          =>'DESC',
                 'orderby'        =>'date',
                 'paged'          =>$paged,

                 // Using the date_query to filter posts from last week
    
                 'date_query' => array(
                                   array('after' => '2 day ago')), 
                'post_status'=>'publish');
    $custompost = new wp_query($args);

    if ($custompost->have_posts() ) : 
              while($custompost->have_posts() ) : 

                       $custompost->the_post(); 
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

     <ul class="pagination">
         <li>
              <?php echo paginate_links( array('total' => $custompost->max_num_pages)); ?>
            
         </li>
       </ul> 


  