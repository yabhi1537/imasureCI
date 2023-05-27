<?php 
        $userid = $this->session->userdata('id');
        $this->load->view('includes/header');
        $imgArr = explode(',',$singleproduct[0]['image']);
    ?>
<style>
.addtocard {
    background: black;
    color: white;
    width: 223px;
    height: 50px;
    border-radius: 13px;
}

button.savechanges {
    width: 101px;
    height: 41px;
    font-size: 5px;
    border-radius: 5px;
}

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0;
}

.d_flex {
    display: flex;
    margin: 30px;
}
.slick-track {
    display: flex;

}

.pd {
    padding-left: 50px;
}

h5 {
    color: black;
}
.single-product-content .inner .product-variation {
    margin-bottom: 30px;
    display: flex;
    align-items: center;
}
.single-product-content .inner .product-variation .title {
    font-weight: 500;
    font-size: 20px;
    margin-bottom: 0;
    min-width: 114px;
}
.axil-btn{
        width: auto;
    border-radius: 6px !important;
    background-color: var(--color-heading);
    color: var(--color-white);
    padding: 16px 38px 17px;
}
</style>

        <?php
                    $success = $this->session->userdata('success');
                    if($success!=""){?>
        <div class="alert alert-success text-center"><?php echo $success ?></div>
        <?php } ?>
<!-- End Header -->

<main class="main-wrapper">
    <!-- Start Shop Area  -->
    <div class="axil-single-product-area axil-section-gap pb--0 bg-color-white">
        <div class="single-product-thumb mb--40">
            <div class="container">
                <div class="row">
                  
                    <div class="col-lg-7 mb--40">
                        <div class="row">
                            <div class="col-lg-10 order-lg-2">
                                <div class="single-product-thumbnail-wrap zoom-gallery">
                                    <div class="single-product-thumbnail product-large-thumbnail-3 axil-product">
                                        <?php
                                       foreach($imgArr as $key => $valueImg){
                                           
                                        ?>
                                        <div class="thumbnail">
                                            <a href="<?php echo base_url('admin-assets/uploads/accessories/'.$valueImg) ?>"
                                                class="popup-zoom">
                                                <img id="source" src="<?php echo base_url('assets/images/product/'.$valueImg) ?>"
                                                    alt="Product Images">
                                            </a>
                                        </div>
                                        <?php
                                        }
                                    ?>
                                    </div>
                                    <!-- <div class="label-block">
                                        <div class="product-badget">20% OFF</div>
                                    </div> -->
                                    <!--<div class="product-quick-view position-view">-->
                                    <!--    <a href="<?php echo base_url() ?>assets/images/product/product-big-01.png"-->
                                    <!--        class="popup-zoom">-->
                                    <!--        <i class="far fa-search-plus"></i>-->
                                    <!--    </a>-->
                                    <!--</div>-->
                                </div>
                            </div>
                           
                        </div>
                    </div>
                         <div class="col-lg-6 order-lg-1">
                             
                              <div class="product-small-thumb-3 small-thumb-wrapper">
                                  <?php 
                                   $imgArr = explode(',',$singleproduct[0]['image']);
                                    foreach($imgArr as $key => $valueImg){
                                  ?>
                                        <div class="small-thumb-img ">
                                            <img src="<?php echo base_url('assets/images/product/'.$valueImg) ?>" alt="samll-thumb">
                                            
                                        </div>
                                        
                                    <?php } ?>
                                       
                                    </div>

                            </div>

                    <div class="col-lg-5 mb--40">
                        <div class="single-product-content">
                            <div class="inner">
                                <?php if(!empty($singleproduct)){ ?>
                                <h3 class="product-title"><?php echo $singleproduct[0]['pname'] ?></h3>
                                <span class="price-amount d-inline" id="pricess">₹ <?php echo $singleproduct[0]['price'] ?></span>
                                <span class="prd-amt d-inline text-decoration-line-through" id="discounts">₹
                                    <?php echo $singleproduct[0]['price'] + $singleproduct[0]['discount']  ?></span>
                                <?php }else{ ?>
                                <h3 class="product-title"><?php echo $singleproduct[0]['description'] ?></h3>
                                <span class="prd-amt d-inline text-decoration-line-through">₹ 99,900.00</span>
                                <span class="price-amount d-inline">₹ 93,900.00</span>

                                <?php } ?>
                            </div>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="false"
                                            aria-controls="collapseOne">
                                            <h6 class='mb-0'>Key Features</h6>
                                            
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ul class="product-meta list-unstyled">
                                              
                                                <li><i class="fal fa-check mx-3"></i><?php echo $singleproduct[0]['keyfeatures'] ?></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            <h6 class='mb-0'>Product Description</h6>
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="product-variations-wrapper">
                                                <ul>
                                                    <li class="text-dark"><?php echo $singleproduct[0]['description'] ?></li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="product-action-wrapper d-flex-center mt-4">
                                <ul class="product-action d-flex-center mb--0">
                                    <li class="add-to-cart">
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                            class="addtocard">Inqure now</button>
                                    </li>
                                    <li class="add-to-cart"><a href="tel:7000693062" class="axil-btn bg-dark text-light">Call Us Now</a></li>
                                </ul>
                            </div>
                            <div class='col-md-8 mt-3'>
                                <span>Product Category :- <?php echo $singleproduct[0]['category'] ?></span>
                            </div>
                            <!-- End Product Action Wrapper  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="axil-newsletter-area axil-section-gap pt--0">
            <div class="container">
                <div class="etrade-newsletter-wrapper bg_image bg_image--5">
                    <div class="newsletter-content">
                        <!--<span class="title-highlighter highlighter-primary2"><i class="fas fa-envelope-open"></i>Newsletter</span>-->
                        <h4 class="title mb--40 mb_sm--30">Need any help? Speak to Our e-commerce specialist:</h4>
                        <div class="input-group newsletter-form">
                           <h4><a href="tel:+917738584949">+917738584949</a></h4>
                           &nbsp;&nbsp;&nbsp;<a href="tel:+917738584949" class="axil-btn mb--15 ml-3" style="width: 112px; text-align: center;">Call now</a>
                           
                            <!--<button type="submit" class="axil-btn mb--15">Subscribe</button>-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .container -->
        </div>
    <!-- End .single-product-thumb -->

    <!-- Button trigger modal -->


    <!-- Modal -->
    <!-- <div class="col-md-12"> -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?php echo $singleproduct[0]['pname'] ?>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url('Singleproduct/addCard') ?>" method="post">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" required placeholder="Enter Full Name">
                            <input type="hidden" value="<?php echo $singleproduct[0]['id'] ?>" name="hidenid">
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
                            <label for="">Message</label>
                            <textarea class="form-control" name='address' id="address" rows="3" required></textarea>
                                
                            <!--<input type="text" class="form-control" name="address" required placeholder="Enter Address">-->
                        </div>
                </div>
                <div class="modal-footer d-block">
                    <div class='row'>
                        <div class='col-md-4'>
                           
                        </div>
                        <div class='col-md-4'>
                             <button type="submit" class="axil-btn bg-dark text-light  py-3 btn-sm">Submit</button>
                        </div>
                        <!--<div class='col-md-4'>-->
                        <!--    <button type="button" class="axil-btn bg-dark text-light py-3 btn-sm" data-bs-dismiss="modal">Close</button>-->
                        <!--</div>-->
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- </div> -->

    </div>
    <!-- End Shop Area  -->
     <!-- Start Recently Viewed Product Area  -->
    <div class="axil-product-area bg-color-white axil-section-gap pb--50 pb_sm--30">
        <div class="container">
            <div class="section-title-wrapper">
                
                <h2 class="title">Related Product</h2>
            </div>
            <div class="recent-product-activation slick-layout-wrapper--15 axil-slick-arrow arrow-top-slide">
                <?php   foreach($subcate as $subcategory){ ?>
                <div class="slick-single-layout mt-5">
                    <div class="axil-product" style='text-align:center;'>
                        <?php 
                        // $explosdems = explode(",",$subcategory['image']);
                        // $imagenae = $explosdems[0];
                         $subcaturl = strtolower(str_replace(" ","-",$subcategory['pname']));
                        ?>
                        <div class="thumbnail">
                            <a href="<?php echo base_url('accessriess/singleaccesproduct/').$subcaturl ?>">
                                <img src="<?php echo base_url('admin-assets/uploads/accessories/'). $subcategory['image'] ?>" style='max-height:201px;object-fit:contain;' alt="Product Images">
                            </a>
                        </div>
                        <div class="product-content">
                            <div class="inner">
                                <h5 class="title"><a
                                        href="<?php echo base_url('accessriess/singleaccesproduct/').$subcaturl ?>"><?php echo $subcategory['pname'] ?></a>
                                </h5>
                                <div class="product-price-variant">
                                    <span class="price current-price">₹ <?php echo  $subcategory['price'] ?></span>
                                     <span class="prd-amt d-inline text-decoration-line-through" id="discounts">₹
                                    <?php
                                    $noncomma =  str_replace(',', '', $subcategory['price']);
                                     $plushDES = $noncomma + $subcategory['discount'];
                                    $mydes = number_format($plushDES,2);
                                    echo $mydes;
                                    ?></span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>


    <!-- Start Recently Viewed Product Area  -->
   

<script>
function colorFunction(id){
        $.ajax({
        type: "POST",
        url: "<?php echo base_url('admin/variation/Variation/getProducts') ?>",
        data: {
            pid: id
        },
        success: function(data) {
        //   alert(data);
         var product =  JSON.parse(data);
         console.log(product.images);
        //   return false;
            var stock_qty = "https://atzean.com/HorizoneCom/admin-assets/uploads/"+product.images;
            var pricekhs = "₹ "+product.prdt[0].price ;
            var disocuntdd = "₹ "+product.prdt[0].discount ;
            $("#pricess").html(pricekhs);
            $("#discounts").html(disocuntdd);
            $('#source').attr('src', stock_qty);
            // window.location.reload();

        }
    });
    
}


function wishFunction(pid) {

    $.ajax({
        type: "POST",
        url: "<?php echo base_url('Wishlist/saveWishlist') ?>",
        data: {
            productid: pid
        },
        success: function(data) {

            window.location.reload();

        }
    });

}

function saveFunction(pid) {
    // alert(pid);
    // return false;

    $.ajax({
        type: "POST",
        url: "<?php echo base_url('Singleproduct/addCard') ?>",
        data: {
            productid: pid
        },
        success: function(data) {
            alert("data");
            return false;
            // window.location.reload();

        }
    });

}
</script>
<!-- Start Footer Area  -->
<?php 
        $this->load->view('includes/footer');
    ?>