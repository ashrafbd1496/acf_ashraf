<?php
/**
 * Template Name: About
 */
get_header();?>
<?php $breadCrumbg = get_field('bc_bg','options'); ?>

      <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo $breadCrumbg['brdcrum_bg']['url'] ;?>');" data-stellar-background-ratio="0.5">
         <div class="overlay"></div>
         <div class="container">
            <div class="row no-gutters slider-text align-items-end">
               <div class="col-md-9 ftco-animate pb-5">
                  <p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?php echo site_url(); ?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span><?php echo the_title(); ?><i class="ion-ios-arrow-forward"></i></span></p>
                  <h1 class="mb-0 bread"><?php echo the_title(); ?></h1>
               </div>
            </div>
         </div>
      </section>
      <section class="ftco-section ftco-no-pt bg-light">
         <div class="container">
            <div class="row d-flex no-gutters">
               <div class="col-md-6 d-flex">
                  <?php $about_welcome = get_field('about_welcome','options'); ?>
                  <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url('<?php echo $about_welcome['wimage']['url'] ?>);">
                  </div>
               </div>
               <div class="col-md-6 pl-md-5 py-md-5">
                  <div class="heading-section pl-md-4 pt-md-5">
                     <span class="subheading"><?php echo $about_welcome['wsubtitle']; ?></span>
                     <h2 class="mb-4"><?php echo $about_welcome['wtitle']; ?></h2>
                     <p><?php echo $about_welcome['wdescription']; ?>
                     
                  </div>
               </div>
            </div>
         </div>
      </section>

      <?php get_template_part('/template-parts/counters'); ?>

       <?php get_template_part('/template-parts/testimonies'); ?>

     <?php get_template_part('/template-parts/faqs'); ?>
      
       <?php get_template_part('/template-parts/cta-form'); ?>

   <?php get_footer();?>
