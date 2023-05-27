  <!-- End Header -->
    <main class="main-wrapper">
        <!-- Start Breadcrumb Area  -->
        <div class="axil-breadcrumb-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="inner">
                            <ul class="axil-breadcrumb">
                                <li class="axil-breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="separator"></li>
                                <li class="axil-breadcrumb-item active" aria-current="page">Blogs</li>
                            </ul>
                            <h1 class="title">Blog</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4">
                        <div class="inner">
                            <div class="bradcrumb-thumb">
                                <!--<img src="assets/images/product/product-45.png" alt="Image">-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb Area  -->
        <!-- Start Blog Area  -->
        <div class="axil-blog-area axil-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row g-5">
                            <?php
                            foreach($bloglist as $key => $value){
                                ?>
                            <div class="col-md-4">
                                <div class="content-blog blog-grid">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <a href="<?php echo base_url('blog/').$value['id'] ?>">
                                                <img src="<?php echo base_url('admin-assets/uploads/').$value['imags'] ?>" alt="Blog Images">
                                            </a>
                                           
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="<?php echo base_url('blog/').$value['id'] ?>"> <?php echo $value['heading'] ?></h5>

                                            <div class="read-more-btn">
                                                <a class="axil-btn right-icon" href="<?php echo base_url('blog/').$value['id'] ?>">Read More <i
                                                        class="fal fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                              <?php
                            }
                            
                            ?>
                           
                            
                        </div>
                        <!--<div class="post-pagination">-->
                        <!--    <nav class="navigation pagination" aria-label="Products">-->
                        <!--        <ul class="page-numbers">-->
                        <!--            <li><span aria-current="page" class="page-numbers current">1</span></li>-->
                        <!--            <li><a class="page-numbers" href="#">2</a></li>-->
                        <!--            <li><a class="page-numbers" href="#">3</a></li>-->
                        <!--            <li><a class="page-numbers" href="#">4</a></li>-->
                        <!--            <li><a class="page-numbers" href="#">5</a></li>-->
                        <!--            <li><a class="next page-numbers" href="#"><i class="fal fa-arrow-right"></i></a>-->
                        <!--            </li>-->
                        <!--        </ul>-->
                        <!--    </nav>-->
                        <!--</div>-->
                    </div>
                   

                </div>
                <!-- End post-pagination -->
            </div>
            <!-- End .container -->
        </div>
        <!-- End Blog Area  -->

        
        </div>
        <!-- End Axil Newsletter Area  -->
    </main>

    <div class="service-area">
        <div class="container">
            <div class="row row-cols-xl-4 row-cols-sm-2 row-cols-1 row--20">
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="assets/images/icons/service1.png" alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">Fast &amp; Secure Delivery</h6>
                            <p>Tell about your service.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="assets/images/icons/service2.png " alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">Money Back Guarantee</h6>
                            <p>Within 10 days.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="assets/images/icons/service3.png" alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">24 Hour Return Policy</h6>
                            <p>No question ask.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="assets/images/icons/service4.png" alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">Pro Quality Support</h6>
                            <p>24/7 Live support.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   