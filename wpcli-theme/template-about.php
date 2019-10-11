<?php
 /* template name: about us*/ 
  get_header();
  
?>
      <!-- header image code -->
     <section class="image-head-wrapper">
            <div class="container">
                 <img src="<?php the_field('banner_image');?>" class="img-responsive" alt="gallery1">
                 <div class="centered"><h1><?php the_field('banner_text');?></h1></div>
            </div>
      </section>
      
            <div class="clearfix"></div></br>
   
        <!-- our team on about page--> 
                    <center><h1> Our Team</h1></center> 
            <section class="about-block">
                         
              <div class="container">
                    <div class="row" >
                        <?php
                                $args = array('post_type'=>'our_team',
                                              'post_status'=>'publish');
                                $ourteam = new wp_query($args);

                               if($ourteam->have_posts()):
                                   while($ourteam->have_posts()):
                                              $ourteam->the_post();
                            ?>

                            <div class="col-sm-3">

                                    <?php the_post_thumbnail('team_size');?>
                                <h2> <?php the_title();?></h2>
                                     <?php the_content(); ?>
                            </div>

                            <?php
                                endwhile;
                              endif;

                         ?>
                    </div><hr style="border: 5px solid black; border-radius: 5px;"> 

               </div>  

           </section> 
                   
                  <div class="clearfix"></div></br>

      <!-- our service block on about-->
                    <center><h1>Our Services</h1></center>
           <section class="about-block">
           	             
           	  <div class="container">
                    <div class="row" style="background:#E39838 ">
                    	  <?php
                                $args = array('post_type'=>'our_service',
                                              'post_status'=>'publish');
                                $service = new wp_query($args);

                               if($service->have_posts()):
                                   while($service->have_posts()):
                                              $service->the_post();
                            ?>

                            <div class="col-sm-3">
                            	 <h2><?php the_title();?></h2></br>
                            	      <?php the_content();?>
                            </div>

                            <?php
                                endwhile;
                              endif;

                         ?>
           	        </div><hr style="border: 5px solid black; border-radius: 5px;"> 
           	   </div>     
           </section>
                  <div class="clearfix"></div></br>
   
  
        <!--our client on about page -->
                    <center><h1>some of Our Customer</h1></center>
             <section class="about-block">
                         
              <div class="container">
                    <div class="row" >
                        <?php
                                $args = array('post_type'=>'our_client',
                                              'post_status'=>'publish');
                                $ourclient = new wp_query($args);

                               if($ourclient->have_posts()):
                                   while($ourclient->have_posts()):
                                              $ourclient->the_post();
                            ?>

                            <div class="col-sm-3">
                               <?php  the_post_thumbnail();?>
                            </div>

                            <?php
                                endwhile;
                              endif;

                         ?>
                    </div><hr style="border: 5px solid black; border-radius: 5px;">
               </div>     
           </section>  
                 
  

          

<?php
  get_footer();
?>

          ss