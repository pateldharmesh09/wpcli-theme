<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <!-- search result display code here -->
    <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
     <div class="form-group">
       <input type="text" value="<?php the_search_query();?>" name="s" 
                    placeholder="search here">
        <!--
         <?php
              $args = array(
        'show_option_all'    => '',
        'show_option_none'   => '  ',
        'orderby'            => 'ID',
        'echo'               => 1,
        'selected'           => 0,
        'name'               => 'cat',
        'class'              => 'postform',
        'taxonomy'           => 'newstype');
              wp_dropdown_categories($args);
          ?> -->  

       <input type="submit" name="submit" value="search" class="btn btn-primary">
     </div> 
   </form>

</body>
</html>

