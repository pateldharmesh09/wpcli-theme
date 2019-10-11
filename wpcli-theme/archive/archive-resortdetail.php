<?php
 get_header();
?>
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