<?php
 /* template name: AJAX pagination */
  get_header();
?>
 <div id="demo">
    <?php
        $paged = ( get_query_var( 'paged' ));  //current page store here
   //the query
    $args = array(
                 'posts_per_page' =>1,
                 'post_type'=>'post',
                'post_status'=>'publish',
                 'paged'=>$paged);
    $new_query= new wp_query($args);

     if ($new_query->have_posts() ) : 
              while($new_query->have_posts() ) : 

                       $new_query->the_post();
             ?>         

                      <h2><?php the_title(); ?></h2>
                       <h4><p><?php the_content();?></p></h4>
                      <h4><?php the_field('test_demo');?></h4>
                   <h4>  publish date: <?php echo esc_attr(get_post_meta(get_the_ID(),'published_date',true)); ?></h4>
          <?php            
            endwhile;
            endif;
        ?>
  </div>
          <ul class="pagination">
         <li>
              <!--<?php echo paginate_links( array('total' => $new_query->max_num_pages)); ?> -->
            <?php 
              $total_page = $new_query->max_num_pages;

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
            action: 'MyAjaxFunction',
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
 <!--        
 <script type="text/javascript">
 $(document).ready(function() {
  
   $("#pagination a").click(function(){ 
       var page =2;
      var ajaxurl ="<?php echo admin_url('admin-ajax.php') ?>";
    $.ajax({
            type: 'POST',
            url: ajaxurl,
            data: {
            action: 'MyAjaxFunction',
            page: page
            },
            success: function(response, textStatus, XMLHttpRequest){
              $('#demo').append(response);

            },
            error: function(MLHttpRequest, textStatus, errorThrown){
            alert(errorThrown);
            }
         });
     });
 });     

</script> -->

<!--
  <script type="text/javascript">
   $(document).ready(function(){
   $('#PaginationExample a').on('click', function(e){
  e.preventDefault();
  var link = $(this).attr('href');
 
  $('#contentInner').load(link+' #contentInner');
   
  });
   
  });
  </script>  -->  