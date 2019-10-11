<!-- single page for photo page  -->

 <body style="background-color: black; ">
    <div class="container">
        <div class="row">

           <?php
               if (have_posts() ) : 
              while(have_posts() ) : 

                       the_post(); 
             ?> 
              
               <center><?php the_post_thumbnail();?></center>
          <?php   
              endwhile; 
            endif; 
           ?>
             
        </div>
    </div>
</body> 