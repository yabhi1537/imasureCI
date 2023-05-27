<?php 
$userid = $this->session->userdata('id');
$this->load->model('admin/Homemodel');
$headerfooter  =  $this->db->get('headerfooter')->result_array();
                $this->db->limit(5); 
$category  =    $this->db->get('category')->result_array();


// print_r($headerfooter);die();
?>
<footer class="page-footer footer-style-6 ">
      <div class="footer-top">
         <div class="container">
            <div class="row mt-0">
               <div class="col-lg col-xl last-mobile">
                  <div class="footer-block">
                     <div class="footer-logo">
                        <a href="<?php echo base_url() ?>"><img class="lazyload fade-up" src="<?php echo base_url('assets/') ?>image/logo.png"
                              data-srcset="<?php echo base_url('assets/') ?>image/logo.png 1x, <?php echo base_url('assets/') ?>image/logo.png 2x" alt="Logo"></a>
                     </div>
                     <div class="collapsed-content">
                        <p><?php echo $headerfooter[0]['aboute_story'] ?></p>
                     </div>
                    
                     
                  </div>
               </div>
               <div class="col-lg col-xl">
                  <div class="footer-block collapsed-mobile">
                     <div class="title">
                        <h4>Quick Links</h4>
                        <span class="toggle-arrow"><span></span><span></span></span>
                     </div>
                     <div class="collapsed-content">
                        <ul>
                            <?php echo $headerfooter[0]['usefule_link'] ?>
                           <!--<li><a href="<?php // echo $headerfooter[0]['usefule_link'] ?>"></a></li>-->
                           <!--<li><a href="<?php echo base_url('about-us')?>">About Us</a></li>-->
                           <!--<li><a href="<?php echo base_url('blogs') ?>">Blogs</a></li>-->
                           <!--<li><a href="<?php echo base_url('contact-us')?>">Contact Us</a></li>-->
                           
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg col-xl">
                  <div class="footer-block collapsed-mobile">
                     <div class="title">
                        <h4>Brands</h4>
                        <span class="toggle-arrow"><span></span><span></span></span>
                     </div>
                     <div class="collapsed-content">
                        <ul>
                             <?php
                            foreach($category as $key => $value){
                                $sabCatUrl = $string = strtolower(str_replace(' ', '-', $value['catname']));
                                ?>
                                 <li><a href="<?php echo base_url('products/').$sabCatUrl  ?>"><?php echo $value['catname'] ?></a></li>
                             <?php
                            }
                             ?>
                           <!--<li><a href="#">Fluke Process Instruments</a></li>-->
                           <!--<li><a href="#">Fluke Networks</a></li>-->
                           <!--<li><a href="#">Fluke</a></li>-->
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg col-xl">
                  <div class="footer-block collapsed-mobile">
                     <div class="title">
                        <h4>Address:</h4>
                        <p><?php echo $headerfooter[0]['contact'] ?></p>
                        <h4>Number:</h4>
                        <a href="#"><?php echo $headerfooter[0]['customer_care'] ?></a>
                        <h4>Email:</h4>
                        <a href="#"><?php echo $headerfooter[0]['sales_email'] ?></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="footer-bottom footer-bottom--bg">
         <div class="container">
            <div class="footer-copyright text-center">
               <a href="#"><?php echo $headerfooter[0]['footer_text'] ?></a>
            </div>
         </div>
      </div>
   </footer>
   <div class="footer-sticky">
      <!--  sticky add to cart -->
      <div class="sticky-addcart js-stickyAddToCart closed">
         <div class="container">
            <div class="row">
               <div class="col-auto sticky-addcart_image">
                  <a href="#">
                     <img src="images/skins/fashion/products/product-01-1.jpg" alt="" />
                  </a>
               </div>
               <div class="col col-sm-5 col-lg-4 col-xl-5 sticky-addcart_info">
                  <h1 class="sticky-addcart_title">Leather Pegged Pants</h1>
                  <div class="sticky-addcart_price">
                     <span class="sticky-addcart_price--actual">$180.00</span>
                     <span class="sticky-addcart_price--old">$210.00</span>
                  </div>
               </div>
               <div class="col-auto sticky-addcart_options  prd-block prd-block_info--style1">
                  <div class="select-wrapper">
                     <select class="form-control form-control--sm">
                        <option value="">--Please choose an option--</option>
                     </select>
                  </div>
               </div>
               <div class="col-auto sticky-addcart_actions">
                  <div class="prd-block_qty">
                     <span class="option-label">Quantity:</span>
                     <div class="qty qty-changer">
                        <button class="decrease"></button>
                        <input type="number" class="qty-input" value="1" data-min="1" data-max="1000">
                        <button class="increase"></button>
                     </div>
                  </div>
                  <div class="btn-wrap">
                     <button class="btn js-prd-addtocart" data-fancybox data-src="#modalCheckOut">Add to cart
                     </button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--added to cart-->
      <div class="popup-addedtocart js-popupAddToCart closed" data-close="50000">
         <div class="container">
            <div class="row">
               <div class="popup-addedtocart-close js-popupAddToCart-close"><i class="icon-close"></i></div>
               <div class="popup-addedtocart-cart js-open-drop" data-panel="#dropdnMinicart"><i class="icon-basket"></i>
               </div>
               <div class="col-auto popup-addedtocart_logo">
                  <img src="<?php echo base_url('assets/') ?>image/logo.png"
                     data-src="<?php echo base_url('assets/') ?>image/logo.png" class="lazyload fade-up" alt="">
               </div>
               <div class="col popup-addedtocart_info">
                  <div class="row">
                     <a href="#" class="col-auto popup-addedtocart_image">
                        <span class="image-container w-100">
                           <img src="images/skins/fashion/products/product-01-1.jpg" alt="" />
                        </span>
                     </a>
                     <div class="col popup-addedtocart_text">
                        <a href="#" class="popup-addedtocart_title"></a>
                        <span class="popup-addedtocart_message">Added to <a href="cart.html"
                              class="underline">Cart</a></span>
                        <span class="popup-addedtocart_error_message"></span>
                     </div>
                  </div>
               </div>
               <div class="col-auto popup-addedtocart_actions">
                  <span>You can continue</span> <a href="#" class="btn btn--grey btn--sm js-open-drop"
                     data-panel="#dropdnMinicart"><i class="icon-basket"></i><span>Check Cart</span></a> <span>or</span>
                  <a href="checkout.html" class="btn btn--invert btn--sm"><i class="icon-envelope-1"></i><span>Check
                        out</span></a>
               </div>
            </div>
         </div>
      </div>
      <!--  select options -->
      <div class="sticky-addcart popup-selectoptions js-popupSelectOptions closed" data-close="500000">
         <div class="container">
            <div class="row">
               <div class="popup-selectoptions-close js-popupSelectOptions-close"><i class="icon-close"></i></div>
               <div class="col-auto sticky-addcart_image sticky-addcart_image--zoom">
                  <a href="#" data-caption="">
                     <span class="image-container"><img src="#" alt="" /></span>
                  </a>
               </div>
               <div class="col col-sm-5 col-lg-4 col-xl-5 sticky-addcart_info">
                  <h1 class="sticky-addcart_title"><a href="#">&nbsp;</a></h1>
                  <div class="sticky-addcart_price">
                     <span class="sticky-addcart_price--actual"></span>
                     <span class="sticky-addcart_price--old"></span>
                  </div>
                  <div class="sticky-addcart_error_message">Error Message</div>
               </div>
               <div class="col-auto sticky-addcart_options prd-block prd-block_info--style1">
                  <div class="select-wrapper">
                     <select class="form-control form-control--sm sticky-addcart_options_select">
                        <option value="none">Select Option please..</option>
                     </select>
                     <div class="invalid-feedback">Can't be blank</div>
                  </div>
               </div>
               <div class="col-auto sticky-addcart_actions">
                  <div class="prd-block_qty">
                     <span class="option-label">Quantity:</span>
                     <div class="qty qty-changer">
                        <button class="decrease"></button>
                        <input type="number" class="qty-input" value="2" data-min="1" data-max="10000">
                        <button class="increase"></button>
                     </div>
                  </div>
                  <div class="btn-wrap">
                     <button class="btn js-prd-addtocart">Add to cart</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- back to top -->
      <a class="back-to-top js-back-to-top compensate-for-scrollbar" href="#" title="Scroll To Top">
         <i class="icon icon-angle-up"></i>
      </a>
      <!-- loader -->
      <div class="loader-horizontal js-loader-horizontal">
         <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 100%"></div>
         </div>
      </div>
   </div>
   <!-- payment note -->
   <!-- <div class="footer-sticky">
         <div class="payment-notification-wrap js-pn" data-visible-time="3000" data-hidden-time="3000" data-delay="500"
         	 data-from="Aberdeen,Bakersfield,Birmingham,Cambridge,Youngstown"
         	 data-products='[{"productname":"Leather Pegged Pants", "productlink":"#","productimage":"images/skins/fashion/products/product-01-1.jpg"},{"productname":"Black Fabric Backpack", "productlink":"#","productimage":"images/skins/fashion/products/product-28-1.jpg"},{"productname":"Combined Chunky Sneakers", "productlink":"#","productimage":"images/skins/fashion/products/product-23-1.jpg"}]'>
         	<div class="payment-notification payment-notification--squared">
         		<div class="payment-notification-inside">
         			<div class="payment-notification-container">
         				<a href="#" class="payment-notification-image js-pn-link">
         					<img src="images/products/product-01.jpg" class="js-pn-image" alt="">
         				</a>
         				<div class="payment-notification-content-wrapper">
         					<div class="payment-notification-content">
         						<div class="payment-notification-text">Someone purchased</div>
         						<a href="#" class="payment-notification-name js-pn-name js-pn-link">Applewatch</a>
         						<div class="payment-notification-bottom">
         							<div class="payment-notification-when"><span class="js-pn-time">32</span> min ago</div>
         							<div class="payment-notification-from">from <span class="js-pn-from">Riverside</span></div>
         						</div>
         					</div>
         				</div>
         			</div>
         			<div class="payment-notification-close"><i class="icon-close-bold"></i></div>
         			<div class="payment-notification-qw prd-hide-mobile js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i></div>
         		</div>
         	</div>
         </div>
         </div> -->
   <script src="<?php echo base_url('assets/') ?>js/vendor-special/lazysizes.min.js"></script>
   <script src="<?php echo base_url('assets/') ?>js/vendor-special/ls.bgset.min.js"></script>
   <script src="<?php echo base_url('assets/') ?>js/vendor-special/ls.aspectratio.min.js"></script>
   <script src="<?php echo base_url('assets/') ?>js/vendor-special/jquery.min.js"></script>
   <script src="<?php echo base_url('assets/') ?>js/vendor-special/jquery.ez-plus.js"></script>
   <script src="<?php echo base_url('assets/') ?>js/vendor-special/instafeed.min.js"></script>
   <script src="<?php echo base_url('assets/') ?>js/vendor/vendor.min.js"></script>
   <script src="<?php echo base_url('assets/') ?>js/app-html.js"></script>
</body>

</html>