<?php

        $this->load->view('includes/header');

?>

<main class="main-wrapper">





    <div class="axil-product-area bg-color-white axil-section-gap">
        <div class="container">
            <div class="section-title-wrapper">
                <h2 class="title">Apple Macs</h2>
            </div>
            <div
                class="explore-product-activation slick-layout-wrapper slick-layout-wrapper--15 axil-slick-arrow arrow-top-slide">
                <div class="slick-single-layout">
                    <div class="row row--15">

                        <?php foreach($products as $producsdet){ 

                            $exloder = explode(',',$producsdet['image']);
                            $produc1 = $exloder[0];
                            ?>
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30 mt--30">
                            <div class="axil-product product-style-one">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img data-sal="zoom-out" data-sal-delay="200" data-sal-duration="800"
                                            loading="lazy" class="main-img sal-animate"
                                            src="<?php echo base_url('admin-assets/uploads/').$produc1 ?>"
                                            alt="Product Images">
                                        <img class="hover-img"
                                            src="<?php echo base_url('admin-assets/uploads/').$produc1 ?>"
                                            alt="Product Images">
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
                                            <span class="price current-price">&#x20b9;
                                                <?php echo $producsdet['price'] ?></span>
                                            <span class="price old-price">&#x20b9;
                                                <?php echo $producsdet['price']+$producsdet['discount'] ?></span>
                                        </div>
                                        <div class="product-">
                                            <ul class="cart-action">
                                                <li class="select-option w-50 bg-light">
                                                    <a
                                                        href="<?php echo base_url('Singleproduct/').$producsdet['id'] ?>">
                                                        Add to Cart
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center mt--20 mt_sm--0">
                    <a href="#" class="axil-btn btn-bg-lighter btn-load-more">View All</a>
                </div>
            </div>

        </div>
    </div>

    <section class="py-5">
        <div class="container">

            <div class="row justify-content-between">







</main>

<!-- Start Footer Area  -->
<?php 
        $this->load->view('includes/footer');
    ?>