<?php 
/* template name:room */
get_header();
?>
    <section class="image-head-wrapper">
            <div class="container">
                 <img src="<?php the_field('banner_image');?>" class="img-responsive" alt="gallery1">
                 <div class="centered"><h1><?php the_field('banner_text');?></h1></div>
            </div>
      </section>
            <div class="clearfix"></div></br>
            <center><h1>OUR ROOM </h1></center>

            <!--room page block block-->
            <section class="gallery-block gallery-front">
                <div class="container">

                 <div class="row">
                   <div id="demo">

                            <?php
                                  $currentpage = get_query_var('paged');
                                $args = array('posts_per_page' =>2,
                                              'post_type'=>'room',
                                              'post_status'=>'publish',
                                               'paged'=>$currentpage);
                                $room = new wp_query($args);

                               if($room->have_posts()):
                                   while($room->have_posts()):
                                              $room->the_post();
                            
                            get_template_part('template-parts/content-room'); 
                         endwhile; 
                            endif;?>
                    </div>    
                    </div>
                </div>
          </section>
               <!-- pagination -->
            <ul class="pagination pagination-lg p-3 mb-2 bg-primary" style="margin-left: 40%;">
               <li>
                    <!--<?php echo paginate_links( array('total' => $new_query->max_num_pages)); ?> -->
                    <?php 
                      $total_page = $room->max_num_pages;
                           for ($i=1; $i <= $total_page; $i++) { ?>
                             <a><?php echo $i; ?></a>
                    <?php }  ?>
               </li>
           </ul>

  <script type="text/javascript">
    $('document').ready(function(){

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
            action: 'MyAjaxroompage',
            page: page
               },
            success: function(response, textStatus, XMLHttpRequest){
              $('#demo').empty();
              $('#demo').append(response);

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