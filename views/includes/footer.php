<?php

$this->load->model('admin/Homemodel');
$headerfooter  =  $this->db->get('headerfooter')->result_array();
?>
<footer class="axil-footer-area footer-style-2">
    <!-- Start Footer Top Area  -->
    <div class="footer-top separator-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="axil-footer-widget">
                        <h5 class="widget-title">ABOUT THE STORE</h5>
                        <!-- <div class="logo mb--30">
                            <a href="#">
                                <img class="light-logo" src="<?php echo base_url() ?>assets/images/logo/logo.png" alt="Logo Images">
                            </a>
                        </div> -->
                        <div class="inner">
                            <?php
                            echo $headerfooter[0]['aboute_story'];
                            
                            ?>

                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-sm-6 justify-content-center text-center">
                    <div class="axil-footer-widget">
                        <h5 class="widget-title">USEFUL LINKS</h5>
                        <div class="inner">
                            <?php
                            echo $headerfooter[0]['usefule_link'];
                            
                            ?>
                            
                            <!--<ul>-->
                            <!--    <li><a href="<?php  echo base_url('termandcondition')?>">Terms and Condition</a></li>-->
                            <!--    <li><a href="<?php  echo base_url('shippingpolicy')?>">Corporate and Govt</a></li>-->
                                <!--<li><a href="<?php  echo base_url('RefundPolicy')?>">Refund Policy</a></li>-->
                            <!--    <li><a href="<?php  echo base_url('privatepolicy')?>">Privacy Policy</a></li>-->
                            <!--    <li><a href="<?php  echo base_url('blogs')?>">Blogs</a></li>-->
                            <!--</ul>-->
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="axil-footer-widget">
                        <h5 class="widget-title">CONTACTS</h5>
                        <div class="inner">
                            <?php
                            echo $headerfooter[0]['contact'];
                            
                            ?>
                            <!--<p>-->
                            <!--    Mon to Sun - 11:30 AM to 8.30 PM-->
                            <!--    <br>-->

                            <!--    <a href="tel:+919826722345"><span class="phone">Phone: +919826722345</span></a> -->
                            <!--    <br>-->
                            <!--     <a href="tel:+919302100512"><span class="phone">Phone: +919302100512</span></a>-->
                            <!--    <br>-->

                            <!--    <a href="mailto:sanjayneema@horizoncomputers.co.in"><span class="email">Email: sanjayneema@horizoncomputers.co.in</span></a>-->
                            <!--    <br>-->
                            <!--     <a href="mailto:tarun@horizoncomputers.co.in"><span class="email">Email: tarun@horizoncomputers.co.in</span></a>-->
                                
                            <!--</p>-->
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="col-lg-4 col-sm-6">
                    <div class="axil-footer-widget">
                        <h5 class="widget-title">Subscribe &amp; Follow us..</h5>
                        <div class="axil-footer d-flex align-items-center">
                            <input type="text" name="email" id="email" class="border  axil-footer-inp text-light"
                                placeholder="Email">
                            <i class="far fa-arrow-from-left ml-3" onclick="subsCribefunction()" style="margin-left: -30px; color: #fff; cursor: pointer;"></i>
                        </div>
                                <span id="messages" style="color:red;">  </span>
                    </div>
                </div>
                <!-- <div class="col-lg-4 d-flex align-items-center justify-content-center">
                    <div class="">
                        <ul class="list-unstyled d-flex justify-content-center">
                            <li class="mx-3 bg-light px-4 py-1"><img
                                    src="<?php echo base_url() ?>assets/images/icons/cart/cart-1.png" alt="paypal cart">
                            </li>
                            <li class="mx-3 bg-light px-2 py-1"><img
                                    src="<?php echo base_url() ?>assets/images/icons/cart/cart-2.png" alt="paypal cart">
                            </li>
                            <li class="mx-3 bg-light px-2 py-1"><img
                                    src="<?php echo base_url() ?>assets/images/icons/cart/cart-5.png" alt="paypal cart">
                            </li>
                        </ul>
                    </div>
                </div> -->
                <div class="col-xl-4 d-flex align-items-center justify-content-center">
                    <div class="social-share">
                        <a href="<?php echo  $headerfooter[0]['facebook'];  ?>"><i class="fab fa-facebook-f"></i></a>
                        <a href="<?php echo  $headerfooter[0]['instagram'];  ?>"><i class="fab fa-instagram"></i></a>
                        <a href="<?php echo  $headerfooter[0]['twiter'];  ?>"><i class="fab fa-twitter"></i></a>
                        <a href="<?php echo  $headerfooter[0]['linkdin'];  ?>"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-left d-flex flex-wrap justify-content-center">
                        <ul class="quick-link list-unstyled">
                            <li><a class="text-light" target="_blank"
                                    href="#"><?php echo $headerfooter[0]['footer_text'] ?></a>.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Top Area  -->

</footer>
<!-- End Footer Area  -->

<!-- Product Quick View Modal Start -->
<div class="modal fade quick-view-product" id="quick-view-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="far fa-times"></i></button>
            </div>
            <div class="modal-body">
                <div class="single-product-thumb">
                    <div class="row">
                        <div class="col-lg-7 mb--40">
                            <div class="row">
                                <div class="col-lg-10 order-lg-2">
                                    <div
                                        class="single-product-thumbnail product-large-thumbnail axil-product thumbnail-badge zoom-gallery">
                                        <div class="thumbnail">
                                            <img src="<?php echo base_url() ?>assets/images/product/product-big-01.png"
                                                alt="Product Images">
                                            <div class="label-block label-right">
                                                <div class="product-badget">20% OFF</div>
                                            </div>
                                            <div class="product-quick-view position-view">
                                                <a href="<?php echo base_url() ?>assets/images/product/product-big-01.png"
                                                    class="popup-zoom">
                                                    <i class="far fa-search-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="thumbnail">
                                            <img src="<?php echo base_url() ?>assets/images/product/product-big-02.png"
                                                alt="Product Images">
                                            <div class="label-block label-right">
                                                <div class="product-badget">20% OFF</div>
                                            </div>
                                            <div class="product-quick-view position-view">
                                                <a href="<?php echo base_url() ?>assets/images/product/product-big-02.png"
                                                    class="popup-zoom">
                                                    <i class="far fa-search-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="thumbnail">
                                            <img src="<?php echo base_url() ?>assets/images/product/product-big-03.png"
                                                alt="Product Images">
                                            <div class="label-block label-right">
                                                <div class="product-badget">20% OFF</div>
                                            </div>
                                            <div class="product-quick-view position-view">
                                                <a href="<?php echo base_url() ?>assets/images/product/product-big-03.png"
                                                    class="popup-zoom">
                                                    <i class="far fa-search-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 order-lg-1">
                                    <div class="product-small-thumb small-thumb-wrapper">
                                        <div class="small-thumb-img">
                                            <img src="<?php echo base_url() ?>assets/images/product/product-thumb/thumb-08.png"
                                                alt="thumb image">
                                        </div>
                                        <div class="small-thumb-img">
                                            <img src="<?php echo base_url() ?>assets/images/product/product-thumb/thumb-07.png"
                                                alt="thumb image">
                                        </div>
                                        <div class="small-thumb-img">
                                            <img src="<?php echo base_url() ?>assets/images/product/product-thumb/thumb-09.png"
                                                alt="thumb image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 mb--40">
                            <div class="single-product-content">
                                <div class="inner">
                                    <div class="product-rating">
                                        <div class="star-rating">
                                            <img src="<?php echo base_url() ?>assets/images/icons/rate.png"
                                                alt="Rate Images">
                                        </div>
                                        <div class="review-link">
                                            <a href="#">(<span>1</span> customer reviews)</a>
                                        </div>
                                    </div>
                                    <h3 class="product-title">Serif Coffee Table</h3>
                                    <span class="price-amount">$155.00 - $255.00</span>
                                    <ul class="product-meta">
                                        <li><i class="fal fa-check"></i>In stock</li>
                                        <li><i class="fal fa-check"></i>Free delivery available</li>
                                        <li><i class="fal fa-check"></i>Sales 30% Off Use Code: MOTIVE30</li>
                                    </ul>
                                    <p class="description">In ornare lorem ut est dapibus, ut tincidunt nisi
                                        pretium. Integer ante est, elementum eget magna. Pellentesque sagittis
                                        dictum libero, eu dignissim tellus.</p>

                                    <div class="product-variations-wrapper">

                                        <!-- Start Product Variation  -->
                                        <div class="product-variation">
                                            <h6 class="title">Colors:</h6>
                                            <div class="color-variant-wrapper">
                                                <ul class="color-variant mt--0">
                                                    <li class="color-extra-01 active"><span><span
                                                                class="color"></span></span>
                                                    </li>
                                                    <li class="color-extra-02"><span><span class="color"></span></span>
                                                    </li>
                                                    <li class="color-extra-03"><span><span class="color"></span></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- End Product Variation  -->
  
                                        <!-- Start Product Variation  -->
                                        <div class="product-variation">
                                            <h6 class="title">Size:</h6>
                                            <ul class="range-variant">
                                                <li>xs</li>
                                                <li>s</li>
                                                <li>m</li>
                                                <li>l</li>
                                                <li>xl</li>
                                            </ul>
                                        </div>
                                        <!-- End Product Variation  -->

                                    </div>

                                    <!-- Start Product Action Wrapper  -->
                                    <div class="product-action-wrapper d-flex-center">
                                        <!-- Start Quentity Action  -->
                                        <div class="pro-qty"><input type="text" value="1"></div>
                                        <!-- End Quentity Action  -->

                                        <!-- Start Product Action  -->
                                        <ul class="product-action d-flex-center mb--0">
                                            <li class="add-to-cart"><a href="#" class="axil-btn btn-bg-primary">Add to Cart</a></li>
                                            <li class="wishlist"><a href="#" class="axil-btn wishlist-btn"><i
                                                        class="far fa-heart"></i></a>
                                            </li>
                                        </ul>
                                        <!-- End Product Action  -->

                                    </div>
                                    <!-- End Product Action Wrapper  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Quick View Modal End -->

<!-- Header Search Modal End -->
<div class="header-search-modal" id="header-search-modal">
    <button class="card-close sidebar-close"><i class="fas fa-times"></i></button>
    <div class="header-search-wrap">
        <div class="card-header">
            <form action="#">
                <div class="input-group">
                    <input type="search" class="form-control" name="prod-search" id="prod-search"
                        placeholder="Write Something....">
                    <button type="submit" class="axil-btn btn-bg-primary"><i class="far fa-search"></i></button>
                </div>
            </form>
        </div>
        <div class="card-body">
            <div class="search-result-header">
                <h6 class="title">24 Result Found</h6>
                <a href="#" class="view-all">View All</a>
            </div>
            <div class="psearch-results">
                <div class="axil-product-list">
                    <div class="thumbnail">
                        <a href="single-#">
                            <img src="<?php echo base_url() ?>assets/images/product/electric/product-09.png"
                                alt="Yantiti Leather Bags">
                        </a>
                    </div>
                    <div class="product-content">
                        <div class="product-rating">
                            <span class="rating-icon">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fal fa-star"></i>
                            </span>
                            <span class="rating-number"><span>100+</span> Reviews</span>
                        </div>
                        <h6 class="product-title"><a href="single-#">Media Remote</a></h6>
                        <div class="product-price-variant">
                            <span class="price current-price">$29.99</span>
                            <span class="price old-price">$49.99</span>
                        </div>
                        <div class="product-cart">
                            <a href="#" class="cart-btn"><i class="fal fa-shopping-cart"></i></a>
                            <a href="#" class="cart-btn"><i class="fal fa-heart"></i></a>
                        </div>
                    </div>
                </div>
                <div class="axil-product-list">
                    <div class="thumbnail">
                        <a href="single-#">
                            <img src="<?php echo base_url() ?>assets/images/product/electric/product-09.png"
                                alt="Yantiti Leather Bags">
                        </a>
                    </div>
                    <div class="product-content">
                        <div class="product-rating">
                            <span class="rating-icon">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fal fa-star"></i>
                            </span>
                            <span class="rating-number"><span>100+</span> Reviews</span>
                        </div>
                        <h6 class="product-title"><a href="single-#">Media Remote</a></h6>
                        <div class="product-price-variant">
                            <span class="price current-price">$29.99</span>
                            <span class="price old-price">$49.99</span>
                        </div>
                        <div class="product-cart">
                            <a href="#" class="cart-btn"><i class="fal fa-shopping-cart"></i></a>
                            <a href="#" class="cart-btn"><i class="fal fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header Search Modal End -->


<div class="cart-dropdown" id="cart-dropdown">
    <div class="cart-content-wrap">
        <div class="cart-header">
            <h2 class="header-title">Cart review</h2>
            <button class="cart-close sidebar-close"><i class="fas fa-times"></i></button>
        </div>
        <div class="cart-body">
            <ul class="cart-item-list">
                <li class="cart-item">
                    <div class="item-img">
                        <a href="single-#"><img
                                src="<?php echo base_url() ?>assets/images/product/electric/product-01.png"
                                alt="Commodo Blown Lamp"></a>
                        <button class="close-btn"><i class="fas fa-times"></i></button>
                    </div>
                    <div class="item-content">
                        <div class="product-rating">
                            <span class="icon">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <span class="rating-number">(64)</span>
                        </div>
                        <h3 class="item-title"><a href="single-product-#">Wireless PS Handler</a></h3>
                        <div class="item-price"><span class="currency-symbol">$</span>155.00</div>
                        <div class="pro-qty item-quantity">
                            <input type="number" class="quantity-input" value="15">
                        </div>
                    </div>
                </li>
                <li class="cart-item">
                    <div class="item-img">
                        <a href="single-product-#"><img
                                src="<?php echo base_url() ?>assets/images/product/electric/product-02.png"
                                alt="Commodo Blown Lamp"></a>
                        <button class="close-btn"><i class="fas fa-times"></i></button>
                    </div>
                    <div class="item-content">
                        <div class="product-rating">
                            <span class="icon">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <span class="rating-number">(4)</span>
                        </div>
                        <h3 class="item-title"><a href="single-product-#">Gradient Light Keyboard</a></h3>
                        <div class="item-price"><span class="currency-symbol">$</span>255.00</div>
                        <div class="pro-qty item-quantity">
                            <input type="number" class="quantity-input" value="5">
                        </div>
                    </div>
                </li>
                <li class="cart-item">
                    <div class="item-img">
                        <a href="single-product-#"><img
                                src="<?php echo base_url() ?>assets/images/product/electric/product-03.png"
                                alt="Commodo Blown Lamp"></a>
                        <button class="close-btn"><i class="fas fa-times"></i></button>
                    </div>
                    <div class="item-content">
                        <div class="product-rating">
                            <span class="icon">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <span class="rating-number">(6)</span>
                        </div>
                        <h3 class="item-title"><a href="single-#">HD CC Camera</a></h3>
                        <div class="item-price"><span class="currency-symbol">$</span>200.00</div>
                        <div class="pro-qty item-quantity">
                            <input type="number" class="quantity-input" value="100">
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="cart-footer">
            <h3 class="cart-subtotal">
                <span class="subtotal-title">Subtotal:</span>
                <span class="subtotal-amount">$610.00</span>
            </h3>
            <div class="group-btn">
                <a href="#" class="axil-btn btn-bg-primary viewcart-btn">View Cart</a>
                <a href="#" class="axil-btn btn-bg-secondary checkout-btn">Checkout</a>
            </div>
        </div>
    </div>
</div>

<!-- Offer Modal Start -->
<div class="offer-popup-modal" id="offer-popup-modal">
    <div class="offer-popup-wrap">
        <div class="card-body">
            <button class="popup-close"><i class="fas fa-times"></i></button>
            <div class="content">
                <div class="section-title-wrapper">
                    <h3 class="title">Best Sales Offer<br> Grab Yours</h3>
                </div>
                <div class="poster-countdown countdown"></div>
                <a href="#" class="axil-btn btn-bg-primary">Shop Now <i class="fal fa-long-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="closeMask"></div>
<!-- Offer Modal End -->
<!-- JS
============================================ -->
<!-- Modernizer JS -->
<script src="<?php echo base_url() ?>assets/js/vendor/modernizr.min.js"></script>
<!-- jQuery JS -->
<script src="<?php echo base_url() ?>assets/js/vendor/jquery.js"></script>
<!-- Bootstrap JS -->
<script src="<?php echo base_url() ?>assets/js/vendor/popper.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/vendor/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/vendor/slick.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/vendor/js.cookie.js"></script>
<!-- <script src="<?php echo base_url() ?>assets/js/vendor/jquery.style.switcher.js"></script> -->
<script src="<?php echo base_url() ?>assets/js/vendor/jquery-ui.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/vendor/jquery.countdown.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/vendor/sal.js"></script>
<script src="<?php echo base_url() ?>assets/js/vendor/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/vendor/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/vendor/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/vendor/counterup.js"></script>
<script src="<?php echo base_url() ?>assets/js/vendor/waypoints.min.js"></script>

<!-- Main JS -->
<script src="<?php echo base_url() ?>assets/js/main.js"></script>

</body>

</html>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    
    function subsCribefunction(){
        
        var email = $("#email").val();
        
        if(email==""){
                
                $("#messages").html("Please fill input field");
                
            
        }else{
                 $.ajax({
                 type: "POST",
                 url: "<?php echo base_url('Home/getSubscribe') ?>",
                 data: {  email: email 
                        },
                 success: function(data) {
    
                        Swal.fire({
                        //   position: 'center',
                          icon: 'success',
                          title: 'Thanks for Subscribed Horizono Computer',
                          showConfirmButton: false,
                          timer: 1500
                        });
                        $("#email").val('');
                        $("#messages").hide();
                   }
               });
        }
    }
    
</script>




