<?php 
 /*template name: photo */
 get_header();
?>
 <body>
     <section class="image-head-wrapper">
            <div class="container">
                 <img src="<?php the_field('banner_image');?>" class="img-responsive" alt="gallery1">
                 <div class="centered"><h1><?php the_field('banner_text');?></h1></div>
            </div>
      </section></br></br>
            <div class="clearfix"></div>

       <section class="gallary-block">
                <div class="container">
                   <div class="row">
                     <div id="photo">
                             <?php
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
                     </div>
                  </div>       
              </div>          
      </section> 

            <!--pagination -->
              <ul class="pagination pagination-lg p-3 mb-2 bg-primary" style="margin-left: 40%;">
                  <li>
                    <!--<?php echo paginate_links( array('total' => $new_query->max_num_pages)); ?> -->
                  <?php 
                    $total_page = $photo->max_num_pages;

                      for ($i=1; $i <= $total_page; $i++) { ?>
                           <a><?php echo $i; ?></a>

                    <?php }  ?>
               </li>
            </ul>
</body>
   <!-- add script for image popup -->
   <script type="text/javascript">
    
     $(document).ready(function(){

       $(".fancybox").fancybox();

      function find_page_number(element){
    element.find('span').remove();
    return parseInt( element.html());
      }

  $(document).on( 'click', '.pagination a', function( event ) {
    event.preventDefault();
       var page = find_page_number( $(this).clone());
       var ajaxurl ="<?php echo admin_url('admin-ajax.php') ?>";
    $.ajax({
            type: 'POST',
            url: ajaxurl,
            data: {
            action: 'MyAjaxphotopage',
            page: page
               },
            success: function(response, textStatus, XMLHttpRequest){
              $('#photo').empty();
              $('#photo').append(response);

            },
            error: function(MLHttpRequest, textStatus, errorThrown){
            alert(errorThrown);
            }
         });
  });
   });  
 </script>
 <?php 
get_footer();
?>