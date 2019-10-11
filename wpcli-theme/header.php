
<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="<?php bloginfo('template_directory'); ?>/images/icons/favicon.png"/>
        <title><?php bloginfo('name'); ?></title>

         <?php 
             wp_head();
         ?>
      
    </head>
    <body>
        <div id="page">
            <!---header top-->
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6"> 
                           
                        </div>
                        <div class="col-md-6">
                            <div class="social-grid">
                                <ul class="list-unstyled text-right">
                                    <li><a><i class="fa fa-facebook"></i></a></li>
                                    <li><a><i class="fa fa-twitter"></i></a></li>
                                    <li><a><i class="fa fa-linkedin"></i></a></li>
                                    <li><a><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header-->
            <header class="header-container">
                <div class="container-fluid">
                    <div class="top-row">
                        <div class="row">
                            <div class="col-md-2 col-sm-6 col-xs-6">
                                <div id="logo">
                                   <a href="index.php"><span><?php bloginfo('title');?></span>  <span>&</span> 
                                     <a href="index.php"><span><?php bloginfo('description');?></span></a>
                                </div>                       
                            </div>

                            <div class="col-md-8 col-sm-8 col-xs-12 remove-padd">
                                <nav class="navbar navbar-default">
                                    <div class="navbar-header page-scroll">
                                        <button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>

                                    </div>
                                    <div class="collapse navigation navbar-collapse navbar-ex1-collapse remove-space">

    <!-- dipslay menu item code -->
      <?php

       $location=get_nav_menu_locations();
        $menuid =$location['header'];

       $primarymenu = wp_get_nav_menu_items($menuid);

   ?>
      <ul class="list-unstyled nav1 cl-effect-10 ">
  <?php
       foreach($primarymenu as $key=>$value)
       {
  ?>
           <li><a data-hover="<?php echo $value->title;?>"  href="<?php echo $value->url; ?>">
             <span><?php echo $value->title; ?></span></a></li>
     <?php   
     }
   ?>
    </ul>
                                  

                                    </div>
                                </nav>
                            </div>

                           <div class="col-md-2  col-sm-3 col-xs-12 hidden-sm">
                                <div class="text-right" >
                                  <?php get_search_form(); ?>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </header>