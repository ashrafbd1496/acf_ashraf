

<?php
/**
 * Template Name: Services
 */
get_header();?>
<?php $service_bg = get_field('service_bg','options'); ?>
      <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo $service_bg['service_brdcm_bg']['url'] ;?>');" data-stellar-background-ratio="0.5">
         <div class="overlay"></div>
         <div class="container">
            <div class="row no-gutters slider-text align-items-end">
               <div class="col-md-9 ftco-animate pb-5">
                  <p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?php echo site_url(); ?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span><?php echo the_title(); ?> <i class="ion-ios-arrow-forward"></i></span></p>
                  <h1 class="mb-0 bread"><?php echo the_title(); ?></h1>
               </div>
            </div>
         </div>
      </section>

      <section class="ftco-section">
         <?php get_template_part('/template-parts/services'); ?>
      </section>

      <?php get_template_part('/template-parts/features'); ?>

        <?php get_template_part('/template-parts/price-plan'); ?>

       <?php get_template_part('/template-parts/cta-form'); ?>

      <?php get_footer();?>