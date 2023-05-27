<?php

        $this->load->view('includes/header');

?>

<main class="main-wrapper">





    <!-- Start Expolre Product Area  -->
    <div class="axil-product-area bg-color-white axil-section-gap">
            <div class="container">
                <div class="section-title-wrapper">
                    <h2 class="title">Apple Macs</h2>
                </div>
                <div
                    class="explore-product-activation slick-layout-wrapper slick-layout-wrapper--15 axil-slick-arrow arrow-top-slide">
                    <div class="slick-single-layout">
                        <div class="row row--15">

                        <?php if(!empty($listes)){ foreach($listes as $producsdet){ 

                            $exloder = explode(',',$producsdet['image']);
                            $produc1 = $exloder[0];
                            ?>
                            <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30 mt--30">
                                <div class="axil-product product-style-one">
                                    <div class="thumbnail">
                                        <a href="#">
                                            <img data-sal="zoom-out" data-sal-delay="200" data-sal-duration="800"
                                                loading="lazy" class="main-img sal-animate"
                                                src="<?php echo base_url('admin-assets/uploads/').$produc1 ?>" alt="Product Images">
                                            <img class="hover-img" src="<?php echo base_url('admin-assets/uploads/').$produc1 ?>" alt="Product Images">
                                        </a>
                                        <div class="label-block label-right">
                                            <div class="product-badget">SALE</div>
                                        </div>

                                    </div>
                                    <div class="product-content">
                                        <div class="inner text-center">
                                            <h5 class="title"><a href="#"><?php echo $producsdet['description'] ?></a></h5>
                                            <div class="product-rating text-center">
                                                <span class="icon">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </span>
                                                <span class="rating-number">(64)</span>
                                            </div>
                                            <div class="product-price-variant my-3">
                                                <span class="price current-price">&#x20b9; <?php echo $producsdet['price'] ?></span>
                                                <span class="price old-price">&#x20b9; <?php echo $producsdet['price']+$producsdet['discount'] ?></span>
                                            </div>
                                            <div class="product-">
                                                <ul class="cart-action">
                                                    <li class="select-option w-50 bg-light">
                                                        <a href="<?php echo base_url('Singleproduct/').$producsdet['id'] ?>">
                                                            Add to Cart
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } }else{?>
                                <span>There are no Products added</span>
                            <?php } ?>
                            <!-- End Single Product  -->
                            <!-- <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30 mt--30">
                                <div class="axil-product product-style-one">
                                    <div class="thumbnail">
                                        <a href="#">
                                            <img data-sal="zoom-out" data-sal-delay="300" data-sal-duration="800"
                                                loading="lazy" src="<?php echo base_url() ?>assets/images/mac2.webp" alt="Product Images"
                                                class="sal-animate">
                                            <img class="hover-img" src="<?php echo base_url() ?>assets/images/mach2.webp" alt="Product Images">
                                        </a>
                                        <div class="label-block label-right">
                                            <div class="product-badget">SALE</div>
                                        </div>

                                    </div>
                                    <div class="product-content">
                                        <div class="inner text-center">
                                            <h5 class="title"><a href="#">Apple 13-inch MacBook Air:
                                                    Apple M1 chip with 8-core CPU and 7-core GPU, 256GB - Silver
                                                    (MGN93HN/A)</a></h5>
                                            <div class="product-rating text-center">
                                                <span class="icon">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </span>
                                                <span class="rating-number">(64)</span>
                                            </div>
                                            <div class="product-price-variant my-3">
                                                <span class="price current-price">$29.99</span>
                                                <span class="price old-price">$49.99</span>
                                            </div>
                                            <div class="product-">
                                                <ul class="cart-action">
                                                    <li class="select-option w-50 bg-light"><a
                                                            href="#">Add to Cart</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- End Single Product  -->
                            <!-- <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30 mt--30">
                                <div class="axil-product product-style-one">
                                    <div class="thumbnail">
                                        <a href="#">
                                            <img data-sal="zoom-out" data-sal-delay="400" data-sal-duration="800"
                                                loading="lazy" src="<?php echo base_url() ?>assets/images/mac2.webp" alt="Product Images"
                                                class="sal-animate">
                                            <img class="hover-img" src="<?php echo base_url() ?>assets/images/mach2.webp" alt="Product Images">
                                        </a>
                                        <div class="label-block label-right">
                                            <div class="product-badget">SALE</div>
                                        </div>

                                    </div>
                                    <div class="product-content">
                                        <div class="inner text-center">
                                            <h5 class="title"><a href="#">Apple 13-inch MacBook Air:
                                                    Apple M1 chip with 8-core CPU and 7-core GPU, 256GB - Space Grey
                                                    (MGN63HN/A)</a></h5>
                                            <div class="product-rating text-center">
                                                <span class="icon">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </span>
                                                <span class="rating-number">(64)</span>
                                            </div>
                                            <div class="product-price-variant my-3">
                                                <span class="price current-price">$29.99</span>
                                                <span class="price old-price">$49.99</span>
                                            </div>
                                            <div class="product-">
                                                <ul class="cart-action">
                                                    <li class="select-option w-50 bg-light"><a
                                                            href="#">Add to Cart</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- End Single Product  -->
                            <!-- <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30 mt--30">
                                <div class="axil-product product-style-one">
                                    <div class="thumbnail">
                                        <a href="#">
                                            <img data-sal="zoom-out" data-sal-delay="500" data-sal-duration="800"
                                                loading="lazy" src="<?php echo base_url() ?>assets/images/mac3.webp" alt="Product Images"
                                                class="sal-animate">
                                            <img class="hover-img" src="<?php echo base_url() ?>assets/images/mach3.webp" alt="Product Images">
                                        </a>
                                        <div class="label-block label-right">
                                            <div class="product-badget">SALE</div>
                                        </div>

                                    </div>
                                    <div class="product-content">
                                        <div class="inner text-center">

                                            <h5 class="title"><a href="#">
                                                    Apple 13-inch MacBook Air: Apple M2 chip with 8-core CPU and 10-core
                                                    GPU, 512GB - Midnight (MLY43HN/A)</a></h5>
                                            <div class="product-rating text-center">
                                                <span class="icon">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </span>
                                                <span class="rating-number">(44)</span>
                                            </div>
                                            <div class="product-price-variant my-3">
                                                <span class="price current-price">$29.99</span>
                                                <span class="price old-price">$49.99</span>
                                            </div>
                                            <div class="product-">
                                                <ul class="cart-action">
                                                    <li class="select-option w-50 bg-light"><a
                                                            href="#">Add to Cart</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- End Single Product  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>


</main>

<!-- Start Footer Area  -->
<?php 
        $this->load->view('includes/footer');
    ?>