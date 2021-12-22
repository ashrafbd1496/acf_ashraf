
<?php

get_header(); ?>

<?php $blog_bg = get_field('blog_brdcm_bg','options'); ?>

      <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo $blog_bg['blogbrdcm_bg']['url']; ?>');"data-stellar-background-ratio="0.5">
         <div class="overlay"></div>
         <div class="container">
            <div class="row no-gutters slider-text align-items-end">
               <div class="col-md-9 ftco-animate pb-5">
                  <p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?php echo site_url(); ?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span><?php echo single_post_title(); ?> <i class="ion-ios-arrow-forward"></i></span></p>
                  <h1 class="mb-0 bread"><?php echo single_post_title(); ?> </h1>
               </div>
            </div>
         </div>
      </section>
      <section class="ftco-section">
         <div class="container">
            <div class="row d-flex">

               <?php 
               if(have_posts()){
                  while (have_posts()) {
                     the_post();

                      get_template_part('/template-parts/blog'); 
                  }
               }
            ?>

            </div>
            <div class="row mt-5">
               <div class="col text-center">
                  <div class="block-27">
                     <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <?php 
         get_template_part('template-parts/cta-form');
       ?>
      <?php get_footer();?>s