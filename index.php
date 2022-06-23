<?php get_header(); ?>

     <!-- Latest News Area Start -->
     <section class="blog-area pb-100 pt-100" id="blog">
        <div class="container">
            <div class="row section-title">
                <div class="col-md-6 text-right">
                    <h3><span>who we are?</span> latest news</h3>
                </div>
                <div class="col-md-6">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d </p>
                </div>
            </div>
            <div class="row">

               <?php 
                   $args = [
                     'post_type'         => 'post',
                     'posts_per_page'    => 9,
                     'order'             => 'DESC',
                     'orderby'           => 'date',
                     
                     
                 ];
                 $query = new WP_Query($args);
                    while($query->have_posts()) {
                     $query->the_post();

                     ?>
                     
                     <div class="col-md-4">
                    <div class="single-blog">
                        <img src="<?php the_post_thumbnail_url('webar-image-size'); ?>" alt="" />
                        <div class="post-content">
                            <div class="post-title">
                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            </div>
                            <div class="pots-meta">
                                <ul>
                                    <li><a href="#">25 oct 2018</a></li>
                                    <li><a href="#">admin</a></li>
                                </ul>
                            </div>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>" class="box-btn">read more <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                     
                     <?php

                    }
                        
               ?>
                
               
               
            </div>
        </div>
    </section>
    <!-- Latest News Area End -->

<?php get_footer(); ?>
