<footer class="footer">
         <div class="container-fluid px-lg-5">
            <div class="row">
               <div class="col-md-9 py-5">
                  <div class="row">
                     <div class="col-md-4 mb-md-0 mb-4">
                        <h2 class="footer-heading"><?php echo the_field('fabout_title','option'); ?></h2>
                        <p><?php echo the_field('faboutus_description','option'); ?></p>
                        <ul class="ftco-footer-social p-0">
                           <?php 
                              $Fsocial = get_field('fsocial','options');
                             foreach($Fsocial as $social){
                              ?>

                               <li class="ftco-animate"><a href="<?php echo $social['fsocial_icon_url']; ?>" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="fa <?php echo $social['fsocial_icon']; ?>"></span></a></li>

                           <?php
                             }
                           ?>
                          
                        </ul>
                     </div>
                     <div class="col-md-8">
                        <div class="row justify-content-center">
                           <div class="col-md-12 col-lg-10">
                              <div class="row">
                                 <div class="col-md-4 mb-md-0 mb-4">
                                    <h2 class="footer-heading">Services</h2>
                                    <ul class="list-unstyled">
                                       <li><a href="#" class="py-1 d-block">Market Analysis</a></li>
                                       <li><a href="#" class="py-1 d-block">Accounting Advisor</a></li>
                                       <li><a href="#" class="py-1 d-block">General Consultancy</a></li>
                                       <li><a href="#" class="py-1 d-block">Structured Assestment</a></li>
                                    </ul>
                                 </div>
                                 <div class="col-md-4 mb-md-0 mb-4">
                                    <h2 class="footer-heading">Discover</h2>
                                    <ul class="list-unstyled">
                                       <li><a href="#" class="py-1 d-block">About us</a></li>
                                       <li><a href="#" class="py-1 d-block">Contract us</a></li>
                                       <li><a href="#" class="py-1 d-block">Terms &amp; Conditions</a></li>
                                       <li><a href="#" class="py-1 d-block">Policies</a></li>
                                    </ul>
                                 </div>
                                 <div class="col-md-4 mb-md-0 mb-4">
                                    <h2 class="footer-heading">Resources</h2>
                                    <ul class="list-unstyled">
                                       <li><a href="#" class="py-1 d-block">Security</a></li>
                                       <li><a href="#" class="py-1 d-block">Global</a></li>
                                       <li><a href="#" class="py-1 d-block">Charts</a></li>
                                       <li><a href="#" class="py-1 d-block">Privacy</a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row mt-md-5">
                     <div class="col-md-12">
                        <p class="copyright">
                           <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                           Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Ashraf <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://webdevbd.net" target="_blank">Webdevbd</a>
                         
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 py-md-5 py-4 aside-stretch-right pl-lg-5">
                  <h2 class="footer-heading">Free consultation</h2>
                  <form action="#" class="form-consultation">
                     <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name">
                     </div>
                     <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email">
                     </div>
                     <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject">
                     </div>
                     <div class="form-group">
                        <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
                     </div>
                     <div class="form-group">
                        <button type="submit" class="form-control submit px-3">Send A Message</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </footer>
      <!-- loader -->
      <div id="ftco-loader" class="show fullscreen">
         <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
         </svg>
      </div>
     <?php wp_footer();?>
   </body>
</html>

