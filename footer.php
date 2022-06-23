<?php 
   //Redux global variable
   global $redux_demo;
?>
 <!-- Footer Area End -->
 <footer class="footer-area pt-50 pb-50">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-6">
                  <div class="single-footer footer-logo">
                     <h3>halim</h3>
                     <p>Lorem ipsum dolor adipisicing amet, consectetur sit elit. Aspernatur incidihil quo officia.</p>
                  </div>
               </div>
               <div class="col-lg-2 col-md-6">
                  <div class="single-footer">
                    
                     
                     <?php dynamic_sidebar( 'footer-1' ); ?>
                    
                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
                  <div class="single-footer">
                     <h4>latest post</h4>
                     
                     <ul>
                        <li><a href="#">lorem ipsum dummy text</a></li>
                        <li><a href="#">lorem ipsum dummy text</a></li>
                        <li><a href="#">lorem ipsum dummy text</a></li>
                        <li><a href="#">lorem ipsum dummy text</a></li>
                        <li><a href="#">lorem ipsum dummy text</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="single-footer contact-box">
                     <h4>Contact Us</h4>
                     <ul>
                        <li><i class="fa fa-map-marker"></i> <?php echo $redux_demo['footer-address']; ?> </li>
                        <li><i class="fa fa-mobile"></i> <?php echo $redux_demo['footer-phone']; ?> </li>
                        <li><i class="fa fa-phone"></i> <?php echo $redux_demo['footer-tele-phone']; ?> </li>
                        <li><i class="fa fa-envelope"></i> <?php echo $redux_demo['footer-email']; ?> </li>
                        <li><i class="fa fa-globe"></i> <?php echo $redux_demo['footer-website']; ?> </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="row copyright">
               <div class="col-md-6">
                  <p> <?php echo $redux_demo['footer-copyright']; ?></p>
               </div>
               <div class="col-md-6 text-right">
                  <ul>
                     <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                     <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                     <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                     <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                     <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </footer>

      
      <?php wp_footer(); ?>
   </body>
</html>
