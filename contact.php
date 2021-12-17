
<?php
/**
 * Template Name: Contact
 */

get_header(); ?>

<?php $contact_brdcm_bg = get_field('contact_page_bg','options'); ?>

      <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo $contact_brdcm_bg['contact_page_bg_image']['url'] ;?>');"data-stellar-background-ratio="0.5">
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
      <section class="ftco-section bg-light">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-md-12">
                  <div class="wrapper">
                     <div class="row no-gutters">
                        <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
                           <div class="contact-wrap w-100 p-md-5 p-4">
                              <h3 class="mb-4">Get in touch</h3>
                              <div id="form-message-warning" class="mb-4"></div>
                              <div id="form-message-success" class="mb-4">
                                 Your message was sent, thank you!
                              </div>

                              <div id="contactForm" name="contactForm" class="contactForm">
                                <?php echo do_shortcode('[contact-form-7 id="230" title="Contact Form Acf"]'); ?>
                              </div>

                           </div>
                        </div>
                        <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
                           <div class="info-wrap bg-primary w-100 p-md-5 p-4">
                              <?php 
                                 $form_area_info = get_field('form_area','options');
                               ?>
                              <h3><?php echo $form_area_info['ctfrm_lft_title'];?></h3>
                              <p class="mb-4"><?php echo $form_area_info['ctfrm_lft_description'];?></p>
                              <?php 
                              $ctfrm_lft_icon_area = get_field('ctfrm_lft_icon_area','options');

                              foreach($ctfrm_lft_icon_area as $frmiconarea){
                                 ?>
                                   <div class="dbox w-100 d-flex align-items-start">
                                 <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa <?php echo $frmiconarea['ct_icon'];?>"></span>
                                 </div>
                                 <div class="text pl-3">
                                    <p><span><?php echo $frmiconarea['ct_icon_title']; ?> : </span><?php echo $frmiconarea['ct_icon_description']; ?></p>
                                 </div>
                              </div>
                           

                             <?php }


                               ?>
                            
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div id="map" class="map"></div>

     <?php get_template_part('/template-parts/cta-form'); ?>
     
      <?php get_footer();?>