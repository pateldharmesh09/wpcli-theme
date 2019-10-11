<!-- shortcode for slider image -->

 
 <div id="myCarousel1" class="carousel slide" data-ride="carousel" data-interval="1500"> 
            
                <ol class="carousel-indicators">
                 <?php
                    $dataslide = new wp_query(array('post_type'=>'slider'));
                     $indicator =-1;
                  while($dataslide->have_posts()): $dataslide->the_post(); $indicator++; 
                  ?>
                    <li data-target="#myCarousel1" data-slide-to="<?php echo $indicator;?>" 
                     <?php if($indicator==0): ?> class="active" <?php endif; ?> ></li>
                  <?php endwhile; ?>
                </ol>
                         
                <div class="carousel-inner" role="listbox">

                  <?php
                       $args = array(
                                'post_type'=>'slider',
                                'post_status'=>'publish');
                        $slider = new wp_query($args);
                   $activslider =0;
                  if($slider->have_posts() ) : 
                           while($slider->have_posts() ) : 
                                      $slider->the_post(); $activslider++ 
                    ?>
                       
                       <?php if($activslider==1) : ?>
                             <div class="item active"> 
                       <?php else : ?>
                           <div class="item">     
                       <?php endif; ?>
                                <?php the_post_thumbnail(); ?>
                        
                        <div class="carousel-caption">
                            <h1><?php the_title(); ?></h1>
                            <h4><?php the_content();?></h4>
                            </br>
                           <ul>
                           <li class="btn btn-info"><a href="#">SHOW more Info</a></li>
                           </ul>
                       </div>
                    
                       
                    </div>
                  <?php
                       endwhile;
                     endif;  
                  ?>
               </div>

          <a class="left carousel-control" href="#myCarousel1" data-slide="prev"> <img src="<?php bloginfo('template_directory');?>/images/icons/left-arrow.png"  onmouseout="this.src = '<?php bloginfo('template_directory'); ?>/images/icons/left-arrow.png'" alt="left"></a>

          <a class="right carousel-control" href="#myCarousel1" data-slide="next"><img src="<?php bloginfo('template_directory');?>/images/icons/right-arrow.png" onmouseover="this.src = '<?php bloginfo('template_directory'); ?>/images/icons/right-arrow-hover.png'" alt="left"></a>

            </div>
            <div class="clearfix"></div>


    