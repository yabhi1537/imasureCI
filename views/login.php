<?php

        $this->load->view('includes/header');

?>

<main class="main-wrapper">





    <!-- Start Expolre Product Area  -->
    <div class="axil-product-area bg-color-white axil-section-gap">
        <div class="container col-md-5">
            <h2 class="text-center">Login</h2>
            <form action="<?php echo base_url('LoginController/login') ?>" method="post">
                <?php
                    $success = $this->session->userdata('success');
                    if($success!=""){?>
                <div class="alert alert-success"><?php echo $success ?></div>
                <?php } ?>
                <?php
                    $failure = $this->session->userdata('failure');
                    if($failure!=""){?>
                <div class="alert alert-danger"><?php echo $failure ?></div>
                <?php } ?>
                <div class="form-group">
                    <!-- <label for="exampleInputEmail1">Email address</label> -->
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter email" name="username" required autocomplete="off">

                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" required id="exampleInputPassword1" placeholder="Password">
                </div>

                <button type="submit" class="btn btn-primary col-md-2 btn-lg">Submit</button>
            </form>

        </div>
    </div>
    <!-- End Expolre Product Area  -->

    <!-- apple iphones  start-->

    <!-- apple iphones end -->

    <!-- apple ipad start-->

    <!-- apple ipad end-->

    <!-- apple watch start-->
    <!-- <section class="py-5">
            <div class="container">
                <div class="section-title-wrapper">
                    <h2 class="title">Apple Watch</h2>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                        <div class="axil-product product-style-one">
                            <div class="thumbnail">
                                <a href="#" tabindex="0">
                                    <img data-sal="zoom-out" data-sal-delay="200" data-sal-duration="800" loading="lazy" class="main-img sal-animate" src="<?php echo base_url() ?>assets/images/product/electric/product-01.png" alt="Product Images">
                                    <img class="hover-img" src="<?php echo base_url() ?>assets/images/product/electric/product-08.png" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">SALE</div>
                                </div>
                               
                            </div>
                            <div class="product-content">
                                <div class="inner text-center">
                                    <h5 class="title"><a href="#" tabindex="0">Apple Watch Series 8 GPS + Cellular 45mm Graphite Stainless Steel Case with Graphite Milanese Loop (MNKX3HN/A)</a></h5>
                                   
                                    <div class="product-price-variant my-3">
                                        <span class="price current-price">$29.99</span>
                                        <span class="price old-price">$49.99</span>
                                    </div>
                                    <div class="product-">
                                        <ul class="cart-action">
                                            <li class="select-option w-50 bg-light">
                                                <a href="#" tabindex="0">
                                                    Add to Cart
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product  
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                        <div class="axil-product product-style-one">
                            <div class="thumbnail">
                                <a href="#" tabindex="0">
                                    <img data-sal="zoom-out" data-sal-delay="300" data-sal-duration="800" loading="lazy" src="<?php echo base_url() ?>assets/images/product/electric/product-02.png" alt="Product Images" class="sal-animate">
                                    <img class="hover-img" src="<?php echo base_url() ?>assets/images/product/electric/product-06.png" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">SALE</div>
                                </div>
                                
                            </div>
                            <div class="product-content">
                                <div class="inner text-center">
                                    <h5 class="title"><a href="#" tabindex="0">Apple Watch Series 8 GPS + Cellular 45mm Gold Stainless Steel Case with Gold Milanese Loop (MNKQ3HN/A)</a></h5>
                                    
                                    <div class="product-price-variant my-3">
                                        <span class="price current-price">$29.99</span>
                                        <span class="price old-price">$49.99</span>
                                    </div>
                                    <div class="product-">
                                        <ul class="cart-action">
                                            <li class="select-option w-50 bg-light"><a href="#" tabindex="0">Add to Cart</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product  
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                        <div class="axil-product product-style-one">
                            <div class="thumbnail">
                                <a href="#" tabindex="0">
                                    <img data-sal="zoom-out" data-sal-delay="400" data-sal-duration="800" loading="lazy" src="<?php echo base_url() ?>assets/images/product/electric/product-03.png" alt="Product Images" class="sal-animate">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">SALE</div>
                                </div>
                                
                            </div>
                            <div class="product-content">
                                <div class="inner text-center">
                                    <h5 class="title"><a href="#" tabindex="0">Apple Watch Series 8 GPS + Cellular 45mm Silver Stainless Steel Case with Silver Milanese Loop (MNKJ3HN/A)</a></h5>
                                    
                                    <div class="product-price-variant my-3">
                                        <span class="price current-price">$29.99</span>
                                        <span class="price old-price">$49.99</span>
                                    </div>
                                    <div class="product-">
                                        <ul class="cart-action">
                                            <li class="select-option w-50 bg-light"><a href="#" tabindex="0">Add to Cart</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product  
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                        <div class="axil-product product-style-one">
                            <div class="thumbnail">
                                <a href="#" tabindex="0">
                                    <img data-sal="zoom-out" data-sal-delay="500" data-sal-duration="800" loading="lazy" src="<?php echo base_url() ?>assets/images/product/electric/product-04.png" alt="Product Images" class="sal-animate">
                                    <img class="hover-img" src="<?php echo base_url() ?>assets/images/product/electric/product-05.png" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">SALE</div>
                                </div>
                                
                            </div>
                            <div class="product-content">
                                <div class="inner text-center">
                                    
                                    <h5 class="title"><a href="#" tabindex="0">Apple Watch Series 8 GPS + Cellular 41mm Graphite Stainless Steel Case with Graphite Milanese Loop (MNJM3HN/A)
                                    </a></h5>
                                    
                                    <div class="product-price-variant my-3">
                                        <span class="price current-price">$29.99</span>
                                        <span class="price old-price">$49.99</span>
                                    </div>
                                    <div class="product-">
                                        <ul class="cart-action">
                                            <li class="select-option w-50 bg-light"><a href="#" tabindex="0">Add to Cart</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product  
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center mt--20 mt_sm--0">
                        <a href="#" class="axil-btn btn-bg-lighter btn-load-more">View All</a>
                    </div>
                </div>
            </div>
        </section> -->
    <!-- apple watch end -->

    <!-- apple accessories start-->
    <!-- <section class="py-5">
            <div class="container">
                <div class="section-title-wrapper">
                    <h2 class="title">Apple Accessories</h2>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                        <div class="axil-product product-style-one">
                            <div class="thumbnail">
                                <a href="#" tabindex="0">
                                    <img data-sal="zoom-out" data-sal-delay="200" data-sal-duration="800" loading="lazy" class="main-img sal-animate" src="<?php echo base_url() ?>assets/images/product/electric/product-01.png" alt="Product Images">
                                    <img class="hover-img" src="<?php echo base_url() ?>assets/images/product/electric/product-08.png" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">SALE</div>
                                </div>
                               
                            </div>
                            <div class="product-content">
                                <div class="inner text-center">
                                    <h5 class="title"><a href="#" tabindex="0">EarPods with Lightning Connector (MMTN2ZM/A)</a></h5>
                                   
                                    <div class="product-price-variant my-3">
                                        <span class="price current-price">$29.99</span>
                                        <span class="price old-price">$49.99</span>
                                    </div>
                                    <div class="product-">
                                        <ul class="cart-action">
                                            <li class="select-option w-50 bg-light">
                                                <a href="#" tabindex="0">
                                                    Add to Cart
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                        <div class="axil-product product-style-one">
                            <div class="thumbnail">
                                <a href="#" tabindex="0">
                                    <img data-sal="zoom-out" data-sal-delay="300" data-sal-duration="800" loading="lazy" src="<?php echo base_url() ?>assets/images/product/electric/product-02.png" alt="Product Images" class="sal-animate">
                                    <img class="hover-img" src="<?php echo base_url() ?>assets/images/product/electric/product-06.png" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">SALE</div>
                                </div>
                                
                            </div>
                            <div class="product-content">
                                <div class="inner text-center">
                                    <h5 class="title"><a href="#" tabindex="0">Apple Pencil (1st Generation) (MK0C2ZM/A)</a></h5>
                                    
                                    <div class="product-price-variant my-3">
                                        <span class="price current-price">$29.99</span>
                                        <span class="price old-price">$49.99</span>
                                    </div>
                                    <div class="product-">
                                        <ul class="cart-action">
                                            <li class="select-option w-50 bg-light"><a href="#" tabindex="0">Add to Cart</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                        <div class="axil-product product-style-one">
                            <div class="thumbnail">
                                <a href="#" tabindex="0">
                                    <img data-sal="zoom-out" data-sal-delay="400" data-sal-duration="800" loading="lazy" src="<?php echo base_url() ?>assets/images/product/electric/product-03.png" alt="Product Images" class="sal-animate">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">SALE</div>
                                </div>
                                
                            </div>
                            <div class="product-content">
                                <div class="inner text-center">
                                    <h5 class="title"><a href="#" tabindex="0">Apple Pencil (2nd Generation) (MU8F2ZM/A)</a></h5>
                                    
                                    <div class="product-price-variant my-3">
                                        <span class="price current-price">$29.99</span>
                                        <span class="price old-price">$49.99</span>
                                    </div>
                                    <div class="product-">
                                        <ul class="cart-action">
                                            <li class="select-option w-50 bg-light"><a href="#" tabindex="0">Add to Cart</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                        <div class="axil-product product-style-one">
                            <div class="thumbnail">
                                <a href="#" tabindex="0">
                                    <img data-sal="zoom-out" data-sal-delay="500" data-sal-duration="800" loading="lazy" src="<?php echo base_url() ?>assets/images/product/electric/product-04.png" alt="Product Images" class="sal-animate">
                                    <img class="hover-img" src="<?php echo base_url() ?>assets/images/product/electric/product-05.png" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">SALE</div>
                                </div>
                                
                            </div>
                            <div class="product-content">
                                <div class="inner text-center">
                                    
                                    <h5 class="title"><a href="#" tabindex="0">Apple 12W USB Power Adapter (MGN03HN/A)</a></h5>
                                    
                                    <div class="product-price-variant my-3">
                                        <span class="price current-price">$29.99</span>
                                        <span class="price old-price">$49.99</span>
                                    </div>
                                    <div class="product-">
                                        <ul class="cart-action">
                                            <li class="select-option w-50 bg-light"><a href="#" tabindex="0">Add to Cart</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-lg-12 text-center mt--20 mt_sm--0">
                        <a href="#" class="axil-btn btn-bg-lighter btn-load-more">View All</a>
                    </div>
                </div>
            </div>
        </section> -->
    <!-- apple accessories end-->





</main>

<!-- Start Footer Area  -->
<?php 
        $this->load->view('includes/footer');
    ?>