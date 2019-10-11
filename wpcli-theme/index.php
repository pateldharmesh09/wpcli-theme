<?php
   get_header();  //include header file  
 
    //get_template_part('template-parts/slider');  //include custom slider image 
     
     do_shortcode('[slider]'); // use shortcode in php file
 ?>
     <!--service block-->
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
   
          <!--gallery block-->
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


              <!--resort-overview-->
                     </br></br><center><h1>RESORT OVERVIEW</h1></center>
            <section class="resort-overview-block">
                <div class="container">
                    <div class="row">
                          <?php
                               $args = array(
                                        'post_type'=>'resortdetail',
                                        'post_status'=>'publish');
                                $resortdetail = new wp_query($args);
                        
                             if($resortdetail->have_posts() ) : 
                                    while($resortdetail->have_posts() ) : 
                                          $resortdetail->the_post(); 
                           ?>
                    <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right">
                        <div class="side-A">
                            <div class="product-thumb">
                                <div class="image">
                                  <a href="<?php the_permalink();?>"><?php the_post_thumbnail('medium');?></a>
                                </div>
                            </div>
                        </div>
                            <div class="side-B">
                                <div class="product-desc-side">
                                    <h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
                                    <?php the_excerpt();?>
                                    <div class="links"><a href="<?php the_permalink();?>">READ MORE</a></div>
                                    
                                </div>
                            </div>
                        </div>
                        <?php endwhile;
                                endif; ?>
                        <div class="clear"></div>
                   </div>
                </div>
            </section>

<!-- add script for image popup -->
 <script type="text/javascript">
    
     $(document).ready(function(){

       $(".fancybox").fancybox();
   });  
 </script>
<?php 
     do_shortcode('[blogslider]');  // use shortcode for blogslider in php file
           
     //get_template_part('template-parts/blogslider');
get_footer();
?>