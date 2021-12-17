<section class="ftco-section ftco-no-pb ftco-no-pt bg-secondary">
         <div class="container py-5">
            <div class="row">
               <div class="col-md-7 d-flex align-items-center">
                  <h2 class="mb-3 mb-sm-0" style="color:black; font-size: 22px;"><?php echo the_field('cta_title','option');?></h2>
               </div>
               <div class="col-md-5 d-flex align-items-center">
                  <div action="#" class="subscribe-form">
                     <?php echo do_shortcode('[contact-form-7 id="159" title="Cta form"]');?>
                  </div>
               </div>
            </div>
         </div>
      </section>