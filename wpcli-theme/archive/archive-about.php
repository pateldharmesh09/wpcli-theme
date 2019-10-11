<?php
   get_header();

    $args = array('post_type'=>'about',
                                              'post_status'=>'publish');
                                $about = new wp_query($args);

                               if($about->have_posts()):
                                   while($about->have_posts()):
                                              $about->the_post();
                            ?>
                  <div class="container">
                     <div class="row">          
                       <div class="col-sm-6 ">
                            <p><span><?php the_title();?></span></p></br>
                             <?php  the_post_thumbnail('small');?>
                        </div>
                        <div class="col-sm-6 ">
                              <?php the_content();?>
                        </div>
                      <?php endwhile;
                               endif;?>
                      </div>
                  </div>

