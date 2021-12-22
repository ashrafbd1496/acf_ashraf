<?php 

/**
 * Template Name: Home
 */
?>
<?php

get_header();?>
      <div class="hero-wrap">
         <div class="home-slider owl-carousel">
            <?php
              $sliders = get_field('sliders','options');
              if($sliders)
               {
                  foreach($sliders as $slider){
                     ?>
                     <div class="slider-item" style="background-image:url(<?php echo $slider['slider_image']['url'];?>;">
                     <div class="overlay"></div>
                     <div class="container">
                        <div class="row no-gutters slider-text align-items-center justify-content-center">
                           <div class="col-md-8 ftco-animate">
                              <div class="text w-100 text-center">
                                       <h2><?php echo $slider['slider_subtitle'];?></h2>
                                       <h1 class="mb-4"><?php echo $slider['slider_title'];?></h1>
                                       <p><a href="<?php echo $slider['slider_button_url'];?>" class="btn btn-white"><?php echo $slider['slider_button_text'];?></a></p>                         
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php
                  }   
                          
               } 
               ?>              
             </div>
      </div>
      
       <?php get_template_part('/template-parts/features'); ?>

      <section class="ftco-section bg-light ftco-no-pt">
         <?php get_template_part('/template-parts/services'); ?>
      </section>

      <?php get_template_part('/template-parts/counters'); ?>

      <?php get_template_part('/template-parts/testimonies'); ?>

      <?php get_template_part('/template-parts/faqs'); ?>
      
      
      <section class="ftco-section">
         <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
               <div class="col-md-7 heading-section text-center ftco-animate">
                     <?php 
                     $blog = get_field('blog','option');                                          
                     ?>
                  <span class="subheading"><?php echo $blog['blog_subtitile']; ?></span>
                  <h2><?php echo $blog['blog_title']; ?></h2>
               </div>
            </div>
            <div class="row d-flex">

              <?php
      $args = array(
         'post_type' => 'post',
         'posts_per_page' => 3,
         'order' => 'DESC'
      );
      $query = new WP_Query($args);
         while($query -> have_posts()){
            $query ->the_post();
            
             get_template_part('/template-parts/blog'); 
  
         }
   
   ?>
              
            </div>
         </div>
      </section>

       <?php get_template_part('/template-parts/cta-form'); ?>
      
        <?php get_template_part('/template-parts/price-plan'); ?>
      
      <?php get_footer();?>
     