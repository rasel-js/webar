<?php echo get_header(); ?>
 <!-- Single portfolio start-->
 <div class="section single-portfolio pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="single-portfolio">
                        <h2><?php the_title();?></h2>
                        <img src="<?php echo the_post_thumbnail_url(); ?>" alt="portfolio img">
                        <p><?php the_content(); ?></p>
                       

                        
                      

                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="sidebar one">
                        <div class="title">
                            <h4>used tools</h4>
                        </div>
                        <ul>
                            <li> <i class="fas fa-arrow-alt-right"></i> HTML</li>
                            <li> <i class="fas fa-arrow-alt-right"></i> CSS</li>
                            <li> <i class="fas fa-arrow-alt-right"></i> Jquery</li>
                            <li> <i class="fas fa-arrow-alt-right"></i> Bootstrap</li>
                            <li> <i class="fas fa-arrow-alt-right"></i> Animation</li>
                        </ul>
                    </div>
                    <div class="sidebar two">
                        <div class="title">
                            <h4>project features</h4>
                        </div>
                        <ul>
                            <li> <i class="fas fa-arrow-alt-right"></i> Modern Header</li>
                            <li> <i class="fas fa-arrow-alt-right"></i> Animated Slider</li>
                            <li> <i class="fas fa-arrow-alt-right"></i> Filteriable Portfolio</li>
                            <li> <i class="fas fa-arrow-alt-right"></i> Smooth Scroll</li>
                            <li> <i class="fas fa-arrow-alt-right"></i> Daynamic Content/li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- Single portfolio end-->


    <?php echo get_footer(); ?>



