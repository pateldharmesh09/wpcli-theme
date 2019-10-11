<?php
/*
 website link :-https://developer.wordpress.org/reference/functions/get_post_types/
                https://wordpress.stackexchange.com/questions/175365/how-to-list-all-custom-post-types-names-not-posts

  template name:Custom Post List 
*/
  get_header();

            echo "<h2>List Of My Custom Post Type</h2></br>";
				
            	 $args = array(

				   'public'       => true,
				    'has_archive' => true,
				   '_builtin'     => false); 
				  
				$output = 'names'; // 'names' or 'objects' (default: 'names')
				$operator = 'and'; // 'and' or 'or' (default: 'and')
				  
				$post_types = get_post_types($args,$output, $operator );
				  
				/*if ( $post_types ) 
				{                             // If there are any custom public post types.
				  
				  foreach ( $post_types  as $post_type ) 
				    {
				        echo '<h3>' . $post_type . '</h3>';
				         get_post_type_archive_link( $post_type );
				    }
				 } */

				 foreach ( $post_types as $post_type) {
    
        printf(
            '<a href="%1$s">%2$s</a><br>',
            get_post_type_archive_link( $post_type ),
           '<h3>' . $post_type . '</h3>'
        );

    }

 get_footer();
 
?>