<?php

        $this->load->view('includes/header');

?>
<style>
.addtocard {
    background: black;
    color: white;
    width: 223px;
    height: 50px;
    border-radius: 13px;
}
</style>

<main class="main-wrapper">
    <section>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="<?php echo base_url() ?>assets/images/banner_img11.png"
                        alt="First slide">
                </div>
                
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo base_url() ?>assets/images/banner_img12.png"
                        alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

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

                        <?php foreach($products as $producsdet){ 

                            $exloder = explode(',',$producsdet['image']);
                            $produc1 = $exloder[0];
                            $prnameurl = strtolower(str_replace(" ","-",$producsdet['product_title']));
                            ?>
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30 mt--30">
                            <div class="axil-product product-style-one">
                                <div class="thumbnail">
                                    <a href="<?php echo base_url('singleproduct/').$prnameurl ?>">
                                        <img data-sal="zoom-out" data-sal-delay="200" data-sal-duration="800"
                                            loading="lazy" class="main-img sal-animate"
                                            src="<?php echo base_url('assets/images/product/'). $produc1 ?>"
                                            alt="Product Images">
                                        <img class="hover-img"
                                            src="<?php echo base_url('assets/images/product/'). $produc1 ?>"
                                            alt="Product Images">
                                    </a>
                                    <?php
                                    if($producsdet['sales'] > 0){
                                        ?>
                                    <div class="label-block label-right">
                                        <div class="product-badget">SALE</div>
                                    </div>
                                        
                                        <?php
                                    }
                                    
                                    ?>

                                </div>
                                <div class="product-content">
                                    <div class="inner text-center">
                                        <h5 class="title">
                                        <input type="hidden" name="hidname[<?php echo $producsdet['id'] ?>]" id='hidname[<?php echo $producsdet['id'] ?>]' value='<?php echo $producsdet['description'] ?>'>    
                                        <a
                                        
                                              class='textoverplay'  href="<?php echo base_url('singleproduct/').$prnameurl ?>"><?php echo $producsdet['product_title'] ?></a>
                                        </h5>
                                        <!--<div class="product-rating text-center">-->
                                        <!--    <span class="icon">-->
                                        <!--        <i class="fas fa-star"></i>-->
                                        <!--        <i class="fas fa-star"></i>-->
                                        <!--        <i class="fas fa-star"></i>-->
                                        <!--        <i class="fas fa-star"></i>-->
                                        <!--        <i class="fas fa-star"></i>-->
                                        <!--    </span>-->
                                        <!--    <span class="rating-number">(64)</span>-->
                                        <!--</div>-->
                                        <div class="product-price-variant my-3">
                                            <span class="price current-price">&#x20b9;
                                                <?php echo $producsdet['price'] ?></span>
                                            <span class="price old-price">&#x20b9;
                                                <?php echo $producsdet['price'] ?></span>
                                        </div>
                                        <div class="product-">
                                            <ul class="cart-action">
                                                <li class="select-option w-50 bg-light">
                                                    <a href="<?php echo base_url('singleproduct/').$prnameurl ?>" style='margin-left:-45px;' class="addtocard">Add To Cart</a>
                                                    <!-- <button type="button" onclick='request(<?php echo $producsdet["pname"] ?>)' class="addtocard">Add To Cart</button> -->
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
                    <a href="<?php echo base_url('products/mac')?>" class="axil-btn btn-bg-lighter btn-load-more">View All</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Expolre Product Area  -->
 <section class="py-5 overflow-hidden">
           
            <div class="row">
                <div class="col-md-12">
                   <img  src="<?php echo base_url('admin-assets/uploads/banner.1@3x.jpg') ?>" />
                </div>
                <!-- End Single Product  -->
                
            </div>
           
    </section>
  
    <!-- apple ipad start-->
    <section class="py-5">
        <div class="container">
            <div class="section-title-wrapper">
                <h2 class="title">Apple iPad</h2>
            </div>
            <div class="row">
                
                <?php  
               
                foreach($ipad as $ipadss){ 
                $prnameurl = strtolower(str_replace(" ","-",$ipadss['product_title']));
                ?>
                <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30 prod-sect">
                    <div class="axil-product product-style-one">
                        <div class="thumbnail">
                            <a href="<?php echo base_url('singleproduct/').$prnameurl ?>" tabindex="0">
                                <?php
                                     $img = explode(',',$ipadss['image']);
                                     if(isset($img[1])){
                                         $myimg = $img[1];
                                     }else{
                                         $myimg = $ipadss['image'];
                                     }
                                    ?>
                                <img data-sal="zoom-out" data-sal-delay="200" data-sal-duration="800" loading="lazy"
                                    class="main-img sal-animate"
                                    src="<?php echo base_url('assets/images/product/'). $myimg ?>"
                                    alt="Product Images">
                                    
                                    <img class="hover-img"
                                    src="<?php echo base_url('assets/images/product/'). $myimg ?>"
                                    alt="Product Images">
                            </a>
                            <?php
                            if($ipadss['sales'] > 0){
                                ?>
                            <div class="label-block label-right">
                                <div class="product-badget">SALE</div>
                            </div>
                                
                                <?php
                            }
                            ?>
                        </div>
                        <div class="product-content">
                            <div class="inner text-center">
                                <h5 class="title">
                                    <a class='textoverplay' href="<?php echo base_url('singleproduct/').$prnameurl ?>"
                                        tabindex="0"><?php echo $ipadss['description'] ?></a>
                                        </h5>

                                <div class="product-price-variant my-3">
                                    <span class="price current-price"><?php echo $ipadss['price'] ?></span>
                                    <span
                                        class="price old-price"><?php 
                                        
                                        if ($ipadss['discount'] > 0) {
                                            echo $ipadss['qty'] + $ipadss['price'];
                                            
                                        } else {
                                            // do some error handling...
                                        echo $ipadss['price'];
                                        }
                                        ?>
                                        </span>
                                </div>
                                <div class="product-">
                                    <ul class="cart-action">
                                        <li class="select-option w-50 bg-light">
                                            <a href="<?php echo base_url('singleproduct/').$prnameurl ?>" style="margin-left:-45px;" class="addtocard" tabindex="0">Add To Cart</a>
                                            <!--<a href="<?php echo base_url('singleproduct/').$ipadss['pname'] ?>"-->
                                            <!--    tabindex="0">-->
                                            <!--    Add to Cart-->
                                            <!--</a>-->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                } ?>
                <!-- End Single Product  -->
               
            </div>
            <div class="row">
                <div class="col-lg-12 text-center mt--20 mt_sm--0">
                    <a href="<?php echo base_url('products/ipad') ?>" class="axil-btn btn-bg-lighter btn-load-more">View All</a>
                </div>
            </div>
        </div>
    </section>
     <section class="py-5 overflow-hidden">
           
            <div class="row">
                <div class="col-md-12">
                   <img src="<?php echo base_url('admin-assets/uploads/banner@3x.jpg') ?>" />
                </div>
                <!-- End Single Product  -->
                
            </div>
           
    </section>
    
      <section class="py-5">
        <div class="container">
            <div class="section-title-wrapper">
                <h2 class="title">Apple IPhone</h2>
            </div>
            <div class="row">
                <?php  foreach($iphone as $ipadss){ 
                $prnameurl = strtolower(str_replace(" ","-",$ipadss['product_title']));
                ?>
                <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30 prod-sect">
                    <div class="axil-product product-style-one">
                        <div class="thumbnail">
                           
                                 <?php
                                     $img = explode(',',$ipadss['image']);
                                     if(isset($img[1])){
                                         $myimg = $img[1];
                                     }else{
                                         $myimg = $ipadss['image'];
                                     }
                                 ?>
                            <a href="<?php echo base_url('singleproduct/').$prnameurl ?>" tabindex="0">
                                <img data-sal="zoom-out" data-sal-delay="200" data-sal-duration="800" loading="lazy"
                                    class="main-img sal-animate"
                                    src="<?php echo base_url('assets/images/product/'). $myimg ?>"
                                    alt="Product Images">
                                    
                                        <img class="hover-img"
                                    src="<?php echo base_url('assets/images/product/'). $myimg ?>"
                                    alt="Product Images">
                            </a>
                            <?php
                            if($ipadss['sales'] > 0){
                                ?>
                            <div class="label-block label-right">
                                <div class="product-badget">SALE</div>
                            </div>
                                
                                <?php
                            }
                            ?>
                        </div>
                        <div class="product-content">
                            <div class="inner text-center">
                                <h5 class="title">
                                    <a class='textoverplay' href="<?php echo base_url('singleproduct/').$prnameurl ?>"
                                        tabindex="0"><?php echo $ipadss['pname'] ?></a>
                                        </h5>

                                <div class="product-price-variant my-3">
                                    <span class="price current-price"><?php echo $ipadss['price'] ?></span>
                                    <span
                                        class="price old-price"><?php 
                                        
                                        if ($ipadss['discount'] > 0) {
                                            echo $ipadss['qty'] + $ipadss['price'];
                                            
                                        } else {
                                            // do some error handling...
                                        echo $ipadss['price'];
                                        }
                                        ?>
                                        </span>
                                    
                                </div>
                                <div class="product-">
                                    <ul class="cart-action">
                                        <li class="select-option w-50 bg-light">
                                            <a href="<?php echo base_url('singleproduct/').$prnameurl ?>" style="margin-left:-45px;" class="addtocard" tabindex="0">Add To Cart</a>
                                            <!--<a href="<?php echo base_url('singleproduct/').$prnameurl ?>"-->
                                            <!--    tabindex="0">-->
                                            <!--    Add to Cart-->
                                            <!--</a>-->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <!-- End Single Product  -->
                
            </div>
            <div class="row">
                <div class="col-lg-12 text-center mt--20 mt_sm--0">
                    <a href="<?php echo base_url('products/iphone') ?>" class="axil-btn btn-bg-lighter btn-load-more">View All</a>
                </div>
            </div>
        </div>
    </section>
    <!-- apple ipad end-->

    <div class="axil-why-choose-area  pb_sm--30 py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 px-0">
                    <div class="service-box px-3 border-0">
                        <div class="icon">
                            <img src="<?php echo base_url() ?>assets/images/telephone-call.png" alt="Service">
                        </div>
                        <h6 class="title">For Sales</h6>
                        <p>Call us:- <a href="tel:+919826722345">+919826722345</a></p>
                    </div>
                </div>
                <div class="col-lg-3 px-0">
                    <div class="service-box px-3 border-0">
                        <div class="icon">
                            <img src="<?php echo base_url() ?>assets/images/telephone-call.png" alt="Service">
                        </div>
                        <h6 class="title">for after sales</h6>
                        <p>Call us:- <a href="tel:+919302100512">+919302100512</a></p>
                    </div>
                </div>
                <div class="col-lg-3 px-0">
                    <div class="service-box px-3 border-0">
                        <div class="icon">
                            <img src="<?php echo base_url() ?>assets/images/email.png" alt="Service">
                        </div>
                        <h6 class="title">for after Sales</h6>
                        <p>Contact us:- <a href = "mailto: sanjayneema@horizoncomputers.co.in">sanjayneema@horizoncomputers.co.in</a></p>
                    </div>
                </div>
                <div class="col-lg-3 px-0">
                    <div class="service-box px-3 border-0">
                        <div class="icon">
                            <img src="<?php echo base_url() ?>assets/images/email.png" alt="Service">
                        </div>
                        <h6 class="title">For Sales</h6>
                        <p>Contact us:- <a href = "mailto: tarun@horizoncomputers.co.in">tarun@horizoncomputers.co.in</a></p>
                    </div>
                </div>

            </div>
        </div>
    </div>




</main>


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
                        <!--<div class="product-rating">-->
                        <!--    <span class="icon">-->
                        <!--        <i class="fas fa-star"></i>-->
                        <!--        <i class="fas fa-star"></i>-->
                        <!--        <i class="fas fa-star"></i>-->
                        <!--        <i class="fas fa-star"></i>-->
                        <!--        <i class="fas fa-star"></i>-->
                        <!--    </span>-->
                        <!--    <span class="rating-number">(64)</span>-->
                        <!--</div>-->
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
                        <!--<div class="product-rating">-->
                        <!--    <span class="icon">-->
                        <!--        <i class="fas fa-star"></i>-->
                        <!--        <i class="fas fa-star"></i>-->
                        <!--        <i class="fas fa-star"></i>-->
                        <!--        <i class="fas fa-star"></i>-->
                        <!--        <i class="fas fa-star"></i>-->
                        <!--    </span>-->
                        <!--    <span class="rating-number">(4)</span>-->
                        <!--</div>-->
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
                        <!--<div class="product-rating">-->
                        <!--    <span class="icon">-->
                        <!--        <i class="fas fa-star"></i>-->
                        <!--        <i class="fas fa-star"></i>-->
                        <!--        <i class="fas fa-star"></i>-->
                        <!--        <i class="fas fa-star"></i>-->
                        <!--        <i class="fas fa-star"></i>-->
                        <!--    </span>-->
                        <!--    <span class="rating-number">(6)</span>-->
                        <!--</div>-->
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

<div class="cart-dropdown" id="cart-dropdown">
    <div class="cart-content-wrap">
        <div class="cart-header">
            <h2 class="header-title">Cart reviews</h2>
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
                        <!--<div class="product-rating">-->
                        <!--    <span class="icon">-->
                        <!--        <i class="fas fa-star"></i>-->
                        <!--        <i class="fas fa-star"></i>-->
                        <!--        <i class="fas fa-star"></i>-->
                        <!--        <i class="fas fa-star"></i>-->
                        <!--        <i class="fas fa-star"></i>-->
                        <!--    </span>-->
                        <!--    <span class="rating-number">(64)</span>-->
                        <!--</div>-->
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
                        <!--<div class="product-rating">-->
                        <!--    <span class="icon">-->
                        <!--        <i class="fas fa-star"></i>-->
                        <!--        <i class="fas fa-star"></i>-->
                        <!--        <i class="fas fa-star"></i>-->
                        <!--        <i class="fas fa-star"></i>-->
                        <!--        <i class="fas fa-star"></i>-->
                        <!--    </span>-->
                        <!--    <span class="rating-number">(4)</span>-->
                        <!--</div>-->
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
                        <!--<div class="product-rating">-->
                        <!--    <span class="icon">-->
                        <!--        <i class="fas fa-star"></i>-->
                        <!--        <i class="fas fa-star"></i>-->
                        <!--        <i class="fas fa-star"></i>-->
                        <!--        <i class="fas fa-star"></i>-->
                        <!--        <i class="fas fa-star"></i>-->
                        <!--    </span>-->
                        <!--    <span class="rating-number">(6)</span>-->
                        <!--</div>-->
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
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title proHeding" id="exampleModalLabel">
                    
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?php echo base_url('Singleproduct/addCard') ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="hidden" name="hidenid" id='hidenid'>
                        <input type="hidden" name="hidurl" id='hidurl' value='1'>
                        <input type="text" class="form-control" name="name" required placeholder="Enter Full Name">

                    </div>
                    <div class="form-group">
                        <label for="">Email </label>
                        <input type="email" class="form-control" name="email" required placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label for="">Mobile Number</label>
                        <input type="number" class="form-control" name="mobile" required
                            placeholder="Enter Mobile Number">
                    </div>
                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" class="form-control" name="address" required placeholder="Enter Address">
                    </div>
                </div>
                <div class="modal-footer w-0">
                    <button type="submit" class="savechanges btn btn-primary">Save
                        changes</button>
                    <button type="button" class="savechanges btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
    function request(id){
        // alert(id);
        // alert(proname);
        $("#hidenid").val(id);
        $(".proHeding").html( $("#hidname\\["+id+"\\]").val());
        $("#exampleModal").modal('show');
    }
</script>
<!-- Start Footer Area  -->
<?php 
        $this->load->view('includes/footer');
    ?>