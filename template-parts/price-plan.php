<section class="ftco-section bg-light">
         <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
               <div class="col-md-7 heading-section text-center ftco-animate">
                  <span class="subheading"><?php echo the_field('pp_subtitle','option'); ?></span>
                  <h2><?php echo the_field('pp_title','option'); ?></h2>
               </div>
            </div>
            <div class="row">
               <?php 
                  $price_plan = get_field('price_plan','options');
                  foreach($price_plan as $pplan){
                     ?>
                      <div class="col-md-6 col-lg-3 ftco-animate">
                  <div class="block-7">
                     <div class="text-center">
                        <span class="excerpt d-block"><?php echo $pplan['price_plan_title'];?></span>
                        <span class="price"><sup>$</sup> <span class="number"><?php echo $pplan['price_plan_prica'];?></span> <sub>/mos</sub></span>
                        <ul class="pricing-text mb-5">
                          <?php echo $pplan['price_paln_details'];?>
                        </ul>
                        <a href="#<?php echo $pplan['price_plan_button_url'];?>" class="btn btn-primary d-block px-2 py-3"><?php echo $pplan['price_plan_button_text'];?></a>
                     </div>
                  </div>
               </div>
               <?php

                  }
               ?>
              
              
            </div>
         </div>
      </section>