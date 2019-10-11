<!-- content for news detail -->

<div class="col-sm-12 remove-padd-right">
  <div class="side-A">
         <div class="product-thumb">
          <div class="image">
          <a href="<?php the_permalink();?>"><?php the_post_thumbnail('small-thumbnail');?></a></div></br></br>
      </div>
  </div>
      <div class="side-B">
          <div class="product-desc-side">
              <h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
                             <h4><?php the_excerpt();?></h4>
               <h5> news type:<?php the_terms($post->ID,'newstype');?></h5>
             <h5> publish date:<?php echo esc_attr( get_post_meta( get_the_ID(), 'published_date', true ));?></h5>
              <h4><a href="<?php the_permalink();?>"><?php the_author(); ?></a></h4>
             <div class="links"><a href="<?php the_permalink();?>">READ MORE</a></div>
           </div>
      </div>
</div>


<!--
<div class="col-sm-12">
      <div class="col-sm-4">
      <a href="<?php the_permalink();?>"><?php the_post_thumbnail('small-thumbnail');?></a>
      </br></br></br>
      </div>
      <div class="col-sm-8">
                          <li>
          <h1><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1>
          <h4><?php the_content(); ?></h4>
          <a href="<?php the_permalink();?>"><?php the_date('F j, Y');?></a>
          <h4><a href="<?php the_permalink();?>"><?php the_author(); ?></a></h4>
          
          <a href="<?php the_permalink();?>"><button type="submit" name="button" class="btn btn-primary">Read more</button></a>
      </li></br>
      </div>
</div>  -->