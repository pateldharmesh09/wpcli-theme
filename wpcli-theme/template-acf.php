<?php
/*
   template name:ACF Demo Page
*/
  get_header();
   
 //checkbox demo   
  echo "<h3>Checkbox demo </h3>"; 
   the_field('colors');
   echo "</br>";
  // datepicker demo
   echo "<h3>datepicker demo </h3>";
   the_field('datepicker');
?>


