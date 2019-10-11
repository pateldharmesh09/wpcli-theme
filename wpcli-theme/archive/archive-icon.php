<?php
   get_header();
?>

  </br></br> <center><h1>SERVICES</h1></center>
            <section class="service-block">
                <div class="container">
                    <div class="row">
                    <?php
                       $args = array(
                                'post_type'=>'icon',
                                'post_status'=>'publish');
                        $icon = new wp_query($args);
                
                  if($icon->have_posts() ) : 
                           while($icon->have_posts() ) : 
                                      $icon->the_post(); 
                    ?>
                        <div class="col-md-3 col-sm-3 col-xs-6 width-50">
                            <div class="service-details text-center">
                                <div class="service-image">
                                <a href="<?php the_permalink();?>"><?php the_post_thumbnail('iconsize');?></a>
                              </br>
                                </div>
                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4></br>
                            </div>
                        </div>
                         <?php endwhile;
                              endif; ?>
                       </div>
                    </div>
           </section> 
