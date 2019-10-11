<?php
  get_header();
?>

<!doctype html>
<!DOCTYPE html>
<html>
<head>
  <title><?php the_title(); ?></title>
</head>
<body> 
	     <?php 
			if ( have_posts() ) : 
			    while ( have_posts() ) :
			            the_post(); 

			              // Display post content
			                the_content();
			      endwhile; 
			endif; 
		?>
</body>
</html>
<?php
     get_footer();
?> 