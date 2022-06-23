<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <?php 
         //Redux global variable
         global $redux_demo;
      ?>
      
      <?php wp_head(); ?>
   </head>

   <body <?php body_class(); ?>>
      <section class="header-top">
         <div class="container">
            <div class="row">
               <div class="col-md-6 col-sm-12">
                  <div class="header-left">
                     <a href=""><i class="fa fa-envelope"></i> <?php echo $redux_demo['top-email']; ?> </a>
                     <a href=""><i class="fa fa-phone"></i> <?php echo $redux_demo['top-phone']; ?> </a>
                  </div>
               </div>
               <div class="col-md-6 col-sm-12 text-right">
                  <div class="header-social">

                     <?php if(!empty($redux_demo['top-social-link']['Facebook'])):?>
                     <a href="<?php echo $redux_demo['top-social-link']['Facebook']; ?>"><i class="fab fa-facebook-f"></i></a>
                     <?php endif;?>
                     
                     <?php if(!empty($redux_demo['top-social-link']['Twitter'])):?>
                     <a href="<?php echo $redux_demo['top-social-link']['Twitter']; ?>"><i class="fab fa-twitter"></i></a>
                     <?php endif;?>

                     <?php if(!empty($redux_demo['top-social-link']['YouTube'])):?>
                     <a href="<?php echo $redux_demo['top-social-link']['YouTube']; ?>"><i class="fab fa-youtube"></i></a>
                     <?php endif;?>


                     <?php if(!empty($redux_demo['top-social-link']['Linkedin'])):?>
                     <a href="<?php echo $redux_demo['top-social-link']['Linkedin']; ?>"><i class="fab fa-linkedin-in"></i></a>
                     <?php endif;?>

                     <?php if(!empty($redux_demo['top-social-link']['Google+'])):?>
                     <a href="<?php echo $redux_demo['top-social-link']['Google+']; ?>"><i class="fab fa-google-plus-g"></i></a>
                     <?php endif;?>

                     <?php if(!empty($redux_demo['top-social-link']['Instagram'])):?>
                     <a href="<?php echo $redux_demo['top-social-link']['Instagram']; ?>"><i class="fab fa-instagram"></i></a>
                     <?php endif;?>

                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Header Area Start -->
      <header class="header header-fixed">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <nav class="navbar navbar-expand-md navbar-light">
                     <a class="navbar-brand" href="#"> <?php echo $redux_demo['logo-name']; ?> </a>
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse ml-auto mainmenu" id="navbarNav">
                        <?php 
                           wp_nav_menu( array(
                              'theme_location' => 'primary_menu',
                              'menu_class'     => 'navbar-nav ml-auto'
                          ) );
                        ?>
                        
                     </div>
                  </nav>
               </div>
            </div>
         </div>
      </header>
      <!-- Header Area Start -->






