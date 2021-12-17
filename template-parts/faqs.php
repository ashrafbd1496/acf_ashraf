<section class="ftco-section ftco-no-pt bg-light ftco-faqs">
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <div class="img-faqs w-100">

                    <?php
                    $faqs = get_field('faqs','options');
                     if($faqs){
                           ?>
                           <div class="img mb-4 mb-sm-0" style="background-image: url(<?php echo $faqs['faq_image_one']['url'];?>);">
                        </div>
                           <div class="img img-2 mb-4 mb-sm-0" style="background-image:url(<?php echo $faqs['faq_image_two']['url'];?>);">
                     </div>
                                   
                  </div>
               </div>

               <div class="col-lg-6 pl-lg-5">
                  <div class="heading-section mb-5 mt-5 mt-lg-0">
                     <span class="subheading"><?php echo $faqs['faq_subtitle'];?></span>
                     <h2 class="mb-3"><?php echo $faqs['faq_title'];?></h2>
                     <p><?php echo $faqs['faq_description'];?></p>
                  </div>
                  <?php                        
                     }                   
                    ?>  

                  <div id="accordion" class="myaccordion w-100" aria-multiselectable="true">

                     <?php 
                     $faq_items = get_field('faq_items','options');
                     if($faq_items){
                        $i = 0;
                        foreach($faq_items as $faq_item){
                           $i++;
                           ?>
                           <div class="card">
                        <div class="card-header p-0" id="heading<?php echo $i; ?>" role="tab">
                           <h2 class="mb-0">
                              <button href="#collapse<?php echo $i; ?>" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapse<?php echo $i; ?>">
                                 <p class="mb-0"><?php echo $faq_item['faq_item_title'] ;?></p>
                                 <i class="fa" aria-hidden="true"></i>
                              </button>
                           </h2>
                        </div>
                        <div class="collapse <?php if($i==1){echo 'show';} ?>" id="collapse<?php echo $i; ?>" role="tabpanel" aria-labelledby="heading<?php echo $i; ?>">
                           <div class="card-body py-3 px-0">
                           <?php echo $faq_item['faq_item_details'] ;?>
                           </div>
                        </div>
                     </div>

                     <?php

                        }
                     }
                     ?>
                  
                  </div>
               </div>
            </div>
         </div>
      </section>