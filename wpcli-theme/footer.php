<!---footer-->
            <footer>
                <div class="container-fluid">
                    <div class="row">
                         
                      <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="footer-details">
                                  <?php if ( is_active_sidebar( 'footer_left' ) ) : ?>
                                    <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
                                    
                                   <?php dynamic_sidebar( 'footer_left' ); ?>
                            </div><!-- #end of footer center -->
                                   <?php endif; ?>
                            </div>
                      </div>
                 
                         <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-details">
                                  <?php if ( is_active_sidebar( 'footer_center' ) ) : ?>
                                    <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
                                   <?php dynamic_sidebar( 'footer_center' ); ?>
                            </div><!-- #end of footer center -->
                                   <?php endif; ?>
                            </div>
                      </div>

                       <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-details">
                                  <?php if ( is_active_sidebar( 'footer_right' ) ) : ?>
                                    <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
                                   <?php dynamic_sidebar( 'footer_right' ); ?>
                            </div><!-- #end of footer right -->
                                   <?php endif; ?>
                            </div>
                      </div>
                </div>

                    <div class="copyright">
                        &copy; 2017 All right reserved. Designed by <a href="index.php" target="_blank">addweb team.</a>
                    </div>
            </div>
        </footer>

            <!--back to top-->
            <a style="display: none;" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
                <span><i aria-hidden="true" class="fa fa-angle-up fa-lg"></i></span>
                <span>Top</span>
            </a>

        </div>
        <?php 
             wp_footer();
        ?>
    </body>
</html>
