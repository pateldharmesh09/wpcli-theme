<?php
  get_header();
?>
    </br></br><center><h1>GALLARY</h1></center>
           <section class="gallery-block gallery-front">
                <div class="container">
                    <div class="row">
                          <?php
                               $args = array(
                                        'post_type'=>'gallary',
                                        'post_status'=>'publish');
                                $gallary = new wp_query($args);
                        
                             if($gallary->have_posts() ) : 
                                   while($gallary->have_posts() ) : 
                                          $gallary->the_post(); 
                            ?>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="gallery-image">
                                <a href="<?php the_permalink();?>"><?php the_post_thumbnail('gallary_size');?></a>
                                <div class="overlay">
                                     <a class="fancybox" data-fancybox="gallery" data-caption="<?php the_title();?>"><?php the_post_thumbnail(); ?></a>
                                     <p><a href="<?php the_permalink();?>"><?php the_title(); ?></a></p>
                               </div>
                            </div>
                        </div> 
                        <?php endwhile;
                                endif; ?>
                 </div>
              </div>
         </section>