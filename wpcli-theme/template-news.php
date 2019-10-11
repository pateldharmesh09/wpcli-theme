<?php
/* template name: news */
  get_header();
?>

<body>
    <section class="image-head-wrapper">
            <div class="container">
                 <img src="<?php the_field('banner_image');?>" class="img-responsive" alt="gallery1">
                 <div class="centered"><h1><?php the_field('banner_text');?></h1></div>
            </div>
      </section>
            <div class="clearfix"></div></br></br>
  <?php
  
     $currentpage = get_query_var('paged'); 
   //the query
    $args = array(
                 'posts_per_page' =>4,
                 'post_type'=>'custompost',
                'post_status'=>'publish',
                'paged'=>$currentpage);
    $custompost = new wp_query($args);
  ?>
      
    <div class="container">
        <div class="row">
          <div id="news">

              <ul>
            <?php

               if ($custompost->have_posts() ) : 
              while($custompost->have_posts() ) : 

                       $custompost->the_post(); 
             
                get_template_part('template-parts/content-news');  //content-news.php run
               
                endwhile;
            endif; 
               ?>
              </ul>
           </div>
        </div>
    </div>
           <!-- pagination -->
          <ul class="pagination pagination-lg p-3 mb-2 bg-primary" style="margin-left: 40%;">
                  <li>
                  <!--<?php echo paginate_links( array('total' => $new_query->max_num_pages)); ?> -->
                <?php 
                  $total_page = $custompost->max_num_pages;

                    for ($i=1; $i <= $total_page; $i++) { ?>
                         <a><?php echo $i; ?></a>

                  <?php }  ?>
             </li>
          </ul>

</body>
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
            action: 'MyAjaxnewspage',
            page: page
               },
            success: function(response, textStatus, XMLHttpRequest){
              $('#news').empty();
              $('#news').append(response);

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