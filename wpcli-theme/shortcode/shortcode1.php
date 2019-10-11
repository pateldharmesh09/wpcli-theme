<!-----blog slider----->
            <!--blog trainer block-->
            <section class="blog-block-slider">
                <div class="blog-block-slider-fix-image">
                <div id="myCarousel2" class="carousel slide" data-ride="carousel" data-interval="1500" >
                        <div class="container">
                            <!-- Wrapper for slides -->
                        <ol class="carousel-indicators">
                            <?php
                              $blogslide = new wp_query(array('post_type'=>'blogslider',
                                                               'post_status'=>'publish'));
                              $indicator =-1;
                           while($blogslide->have_posts()): $blogslide->the_post(); $indicator++; 
                           ?>
                            <li data-target="#myCarousel2" data-slide-to="<?php echo $indicator;?>" 
                             <?php if($indicator==0):?> class="active" <?php endif; ?> >
                            </li>
                          <?php endwhile; ?>
                        </ol>
                            <div class="carousel-inner" role="listbox">
                                            
                                <?php
                                   $args = array(
                                            'post_type'=>'blogslider',
                                            'post_status'=>'publish');
                                    $blog = new wp_query($args);
                               $activslider =0;
                              if($blog->have_posts() ) : 
                                       while($blog->have_posts() ) : 
                                                  $blog->the_post(); $activslider++ 
                                ?>

                           <?php if($activslider==1): ?>
                                 <div class="item active">
                           <?php else: ?>
                                 <div class="item ">
                           <?php endif; ?>    
                                    <div class="blog-box">
                                        <p><?php the_content(); ?></p>
                                    </div>
                                    <div class="blog-view-box">
                                        <div class="media">
                                            <div class="media-left">
                                               <a href="<?php the_permalink();?>"><?php the_post_thumbnail('small');?></a> 
                                            </div>
                                        <div class="media-body">
                                            <h3 class="media-heading blog-title"><?php the_title();?></h3>
                                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <?php endwhile;
                                        endif; ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </section>
