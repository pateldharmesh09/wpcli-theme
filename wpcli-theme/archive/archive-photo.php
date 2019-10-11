<?php
 get_header();

 $currentpage = get_query_var('paged');    
                        $args =array('post_type'=>'photo',
                                      'post_status'=>'publish',
                                      'posts_per_page' =>9,
                                       'paged'=>$currentpage);
                        $photo = new wp_query($args);

                        if($photo->have_posts()):
                           while($photo->have_posts()):  
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

                        <?php endwhile;
                                  endif;?>


