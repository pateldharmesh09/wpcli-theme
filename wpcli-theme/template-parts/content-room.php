<!-- content for room detail -->

<div class="col-sm-12 remove-padd-right">
  <div class="side-A">
      <div class="product-thumb">
          <div class="image">
            <a href="<?php the_permalink();?>"><?php the_post_thumbnail('room_size');?></a>   
          </div></br></br>
      </div>
  </div>
      <div class="side-B">
          <div class="product-desc-side">
              <h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
              <h4><?php the_excerpt();?></h4>
              
              <div class="links"><a href="<?php the_permalink();?>">READ MORE</a></div>
              
          </div>
      </div>
</div></br></br>