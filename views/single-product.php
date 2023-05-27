<?php

        $this->load->view('includes/header');

?>
<div class="page-content">
    <div class="holder breadcrumbs-wrap mt-0">
        <div class="container">
            <ul class="breadcrumbs">
                <li><a href="<?php echo base_url() ?>">Home</a></li>
                <li><a href="<?php echo base_url() ?>">Product</a></li>
                <li><span><?php echo $singleproduct[0]['pname']  ?></span></li>
            </ul>
        </div>
    </div>
    <div class="holder">
        <div class="container js-prd-gallery" id="prdGallery">
            <div class="row prd-block prd-block-under prd-block--prv-bottom">
                <div class="col-md-auto prd-block-prevnext-wrap">
                    <div class="prd-block-prevnext">
                        <a href="#"><span class="prd-img"><img class="lazyload fade-up"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="images/skins/fashion/products/product-02-1.jpg" alt=""><i
                                    class="icon-arrow-left"></i></span></a>
                        <a href="#"><span class="prd-img"><img class="lazyload fade-up"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="images/skins/fashion/products/product-01-1.jpg" alt=""></span></a>
                        <a href="#"><span class="prd-img"><img class="lazyload fade-up"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="images/skins/fashion/products/product-15-1.jpg" alt=""><i
                                    class="icon-arrow-right"></i></span></a>
                    </div>x
                </div>
            </div>
            <div class="row prd-block prd-block--prv-bottom">
                <div class="col-md-8 col-lg-8 col-xl-8 aside--sticky js-sticky-collision">
                    <div class="aside-content">
                        <!-- Product Gallery -->
                        <div class="mb-2 js-prd-m-holder"></div>
                        <div class="prd-block_main-image">
                            <div class="prd-block_main-image-holder" id="prdMainImage">
                                <div class="product-main-carousel js-product-main-carousel" data-zoom-position="inner">
                                    <?php
                                     $imageArr = explode(',', $singleproduct[0]['image']);
                                   //  print_r($imageArr);die();
                                foreach($imageArr as $key => $valueImg){
                                    ?>
                                    <div data-value="Beige"><span class="prd-img"><img
                                                src="<?php echo base_url('assets/images/products/'.$valueImg) ?>"
                                                data-src="<?php echo base_url('assets/images/products/'.$valueImg) ?>"
                                                class="lazyload fade-up elzoom" alt=""
                                                data-zoom-image="<?php echo base_url('assets/images/products/'.$valueImg) ?>" /></span>
                                    </div>
                                    <?php
                                }
                            ?>

                                </div>
                                <?php
                        if($singleproduct[0]['sales'] == "1"){
                            ?>

                                <div class="prd-block_label-sale-squared justify-content-center align-items-center">
                                    <span>Sale</span>
                                </div>
                                <?php
                        }
                        ?>
                            </div>
                            <div class="prd-block_main-image-links">
                                <a href="images/products//product-01.jpg" class="prd-block_zoom-link"><i
                                        class="icon-zoom-in"></i></a>
                            </div>
                        </div>
                        <div class="product-previews-wrapper">
                            <div class="product-previews-carousel js-product-previews-carousel">
                                <?php
                                $imageArr = explode(',', $singleproduct[0]['image']);
                                foreach($imageArr as $key => $valueImg){
                                    ?>
                                <a href="#" data-value="Beige">
                                    <span class="prd-img">
                                        <img src="<?php echo base_url('assets/images/products/'.$valueImg) ?>"
                                            data-src="<?php echo base_url('assets/images/products/'.$valueImg) ?>"
                                            class="lazyload fade-up" alt="" />
                                    </span>
                                </a>
                                <?php
                                }
                            ?>
                            </div>
                        </div>
                        <!-- /Product Gallery -->
                    </div>
                </div>
                <div class="col-md-10 col-lg-10 col-xl-10 mt-1 mt-md-0">
                    <div class="catagory_txt">
                        <a href=""><?php echo $singleproduct[0]['catname'] ?></a>
                    </div>
                    <div class="prd-block_title-wrap">
                        <h1 class="prd-block_title"><?php echo $singleproduct[0]['pname'] ?></h1>
                    </div>
                    <div class="modal_txt py-1">
                        <span><strong>Model No :</strong></span>&nbsp;&nbsp;<a
                            href=""><?php echo $singleproduct[0]['model_no'] ?></a>
                    </div>
                    <div class="partcode_txt py-1">
                        <span><strong>Part Code :</strong></span>&nbsp;&nbsp;<a
                            href=""><?php echo $singleproduct[0]['part_code'] ?></a>
                    </div>

                    <div class="prd-block_info prd-block_info--style1"
                        data-prd-handle="/products/copy-of-suede-leather-mini-skirt">
                        <div class="prd-block_description prd-block_info_item ">
                            <h3>Overview</h3>
                            <p><?php echo $singleproduct[0]['overview'] ?></p>
                            <div class="mt-1"></div>
                        </div>
                        <div class="prd-block_info_item prd-block_info-when-arrives d-none" data-when-arrives>
                            <div class="prd-block_links prd-block_links m-0 d-inline-flex">
                                <i class="icon-email-1"></i>
                                <div><a href="#" data-follow-up="" data-name="Oversize Cotton Dress"
                                        class="prd-in-stock" data-src="#whenArrives">Inform me when the item arrives</a>
                                </div>
                            </div>
                        </div>
                        <style>
                        .btnGridiant {
                            background: linear-gradient(45deg, rgba(237, 158, 3, 1) 0%, rgba(226, 8, 152, 1) 100%);
                        }
                        </style>
                        <div class="prd-block_info_item mt-3 row row--sm-pad vert-margin-middle">
                            <div class="col"><button type='button' data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    class="btn  w-100  modal-info-link btnGridiant" data-src="#contactModal">Enqure Now
                                </button></div>
                            <div class="col"><a href="tel:7000693062" class="btn " data-fancybox-close>Call Us Now</a>
                            </div>
                            <!-- PoPuP Form -->
                            <div id="contactModal" style="display: none;"
                                class="modal-info-content modal-info-content-sm">
                                <div class="modal-info-heading">
                                    <div class="mb-1"><i class="icon-envelope"></i></div>
                                    <h2><?php echo $singleproduct[0]['pname'] ?></h2>
                                </div>
                                <form action="<?php echo base_url('Singleproduct/addCard') ?>" method="post">
                                    <div class="form-group">
                                        <input type='hidden' name='hdnProName'
                                            value="<?php echo $singleproduct[0]['pname'] ?>" />
                                        <input type='hidden' name='hdnProTitle'
                                            value="<?php echo $singleproduct[0]['product_title'] ?>" />
                                        <input type="hidden" value="<?php echo $singleproduct[0]['id'] ?>"
                                            name="hidenid">
                                        <input type="text" name="name" class="form-control form-control--sm"
                                            placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control form-control--sm"
                                            placeholder="Email" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="mobile" class="form-control form-control--sm"
                                            placeholder="Phone Number">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control textarea--height-170" name="address"
                                            placeholder="Message"
                                            required="">Hi! I need next info about the "<?php echo $singleproduct[0]['pname'] ?>":</textarea>
                                    </div>
                                    <button class="btn" type="submit">Ask our consultant</button>
                                    <p class="p--small mt-15 mb-0">and we will contact you soon</p>
                                </form>
                            </div>
                            <!-- PoPuP Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="holder mt-3 mt-md-5">
        <div class="container">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs product-tab">
                <li class="nav-item"><a href="#Tab1" class="nav-link" data-toggle="tab">Product overview
                        <span class="toggle-arrow"><span></span><span></span></span>
                    </a>
                </li>
                <li class="nav-item"><a href="#Tab2" class="nav-link" data-toggle="tab">Specifications
                        <span class="toggle-arrow"><span></span><span></span></span>
                    </a>
                </li>
                <li class="nav-item"><a href="#Tab3" class="nav-link" data-toggle="tab">Models
                        <span class="toggle-arrow"><span></span><span></span></span>
                    </a>
                </li>
                <!--<li class="nav-item"><a href="#Tab4" class="nav-link" data-toggle="tab">Reviews + Q&A-->
                <!--      <span class="toggle-arrow"><span></span><span></span></span>-->
                <!--   </a>-->
                <!--</li>-->
                <li class="nav-item"><a href="#Tab5" class="nav-link" data-toggle="tab">Manuals + resources
                        <span class="toggle-arrow"><span></span><span></span></span>
                    </a>
                </li>
                <li class="nav-item"><a href="#Tab6" class="nav-link" data-toggle="tab">Accessories
                        <span class="toggle-arrow"><span></span><span></span></span>
                    </a>
                </li>

            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade" id="Tab1">
                    <!--<h4 class="mb-15">Features</h4>-->
                    <div class="row">
                        <div class="col-18 mb-2">
                            <ul class="list-marker">
                                <?php 
                        echo $singleproduct[0]['product_overview']
                        ?>

                            </ul>
                        </div>
                    </div>

                </div>
                <div role="tabpanel" class="tab-pane fade" id="Tab2">
                    <?php 
                        echo $singleproduct[0]['specifications']
                        ?>


                </div>
                <div role="tabpanel" class="tab-pane fade" id="Tab3">
                    <?php 
                echo $singleproduct[0]['models']
                ?>

                </div>
                <div role="tabpanel" class="tab-pane fade" id="Tab4">


                </div>
                <div role="tabpanel" class="tab-pane fade" id="Tab5">
                    <?php 
                echo $singleproduct[0]['resources']
                ?>

                </div>
                <div role="tabpanel" class="tab-pane fade" id="Tab6">
                    <?php 
                echo $singleproduct[0]['accessories']
                ?>

                </div>

            </div>
        </div>
    </div>
    <div class="holder">
        <div class="container">
            <div class="title-wrap text-center">
                <h2 class="h1-style">Similar Products</h2>
                <div class="carousel-arrows carousel-arrows--center"></div>
            </div>
            <div class="prd-grid prd-carousel js-prd-carousel slick-arrows-aside-simple slick-arrows-mobile-lg data-to-show-4 data-to-show-md-3 data-to-show-sm-3 data-to-show-xs-2"
                data-slick='{"slidesToShow": 4, "slidesToScroll": 2, "responsive": [{"breakpoint": 992,"settings": {"slidesToShow": 3, "slidesToScroll": 1}},{"breakpoint": 768,"settings": {"slidesToShow": 2, "slidesToScroll": 1}},{"breakpoint": 480,"settings": {"slidesToShow": 2, "slidesToScroll": 1}}]}'>
                <?php
            foreach($subcate as $key => $value){
                $exloder = explode(',',$value['image']);
                $produc1 = $exloder[0];
                $proUrl = strtolower(str_replace(" ","-",$value['product_title']));
               //  print_r()
                ?>
                <div class="prd prd--style2 prd-labels--max prd-labels-shadow ">
                    <div class="prd-inside">
                        <div class="prd-img-area">
                            <a href="<?php echo base_url('product/'.$proUrl) ?>" class="">
                                <img src="<?php echo base_url('assets/images/products/'). $produc1 ?>"
                                    data-src="<?php echo base_url('assets/images/products/'). $produc1 ?>"
                                    alt="Midi Dress with Belt" class="js-prd-img lazyload fade-up">
                            </a>
                        </div>
                        <div class="prd-info">
                            <div class="prd-info-wrap">
                                <div class="prd-tag"><a
                                        href="<?php echo base_url('product/'.$proUrl) ?>"><?php echo $value['product_title'] ?></a>
                                </div>
                                <h2 class="prd-title"><a
                                        href="<?php echo base_url('product/'.$proUrl) ?>"><?php echo $value['pname'] ?></a>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>

            </div>
        </div>
    </div>
</div>

<?php 
        $this->load->view('includes/footer');
    ?>