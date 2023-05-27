<?php 
        $userid = $this->session->userdata('id');
        $this->load->view('includes/header');
        $imgArr = explode(',',$singleproduct[0]['image']);
    ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
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

.axil-btn {
    width: auto;
    border-radius: 6px !important;
    background-color: var(--color-heading);
    color: var(--color-white);
    padding: 16px 38px 17px;
}

.star-rating {
    /* border:solid 1px #ccc; */
    display: flex;
    flex-direction: row-reverse !important;
    font-size: 1.5em !important;
    justify-content: space-around !important;
    padding: 0 .2em !important;
    text-align: center !important;
    width: 5em !important;
    margin-left: 176px !important;
}

.star-rating input {
    display: none !important;

}

.star-rating label {
    color: #ccc !important;
    cursor: pointer;
    position: static !important;
    padding: 19px !important;
    font-size: 40px !important;
}

.star-rating :checked~label {
    color: #f90 !important;
}

.star-rating label:hover,
.star-rating label:hover~label {
    color: #fc0 !important;
}

li.text-ratings {
    font-size: 24px;
    list-style: none;
}

.ratings {

    height: 216px;
    overflow: scroll;
}
</style>


<?php
    $success = $this->session->userdata('success');
    if($success!=""){?>
<div class="alert alert-success text-center"><?php echo $success ?></div>
<?php } ?>
<!-- End Header -->
<?php if($singleproduct[0]['video']!=""){ ?>
<div class="">
    <video class="w-100" id="background-video" autoplay loop muted
        poster="<?php echo base_url('admin-assets/uploads/').$singleproduct[0]['video'] ?>">
        <source src="<?php echo base_url('admin-assets/uploads/').$singleproduct[0]['video'] ?>" type="video/mp4">
    </video>
</div>
<?php } ?>
<main class="main-wrapper">
    <!-- Start Shop Area  -->
    <div class="axil-single-product-area axil-section-gap pb--0 bg-color-white">
        <div class="single-product-thumb mb--40">
            <div class="container">
                <div class="row">
                     <div class="col-lg-6 mb--40">
                            <div class="row" id='imageSection'>
                                <div class="col-lg-12">
                                    <div id='bigImage' class="product-large-thumbnail-2 single-product-thumbnail axil-product slick-layout-wrapper--15 axil-slick-arrow arrow-both-side-3">
                                        <?php
                                            foreach($imgArr as $key => $value){
                                                ?>
                                                <div class="thumbnail">
                                                    <img  src="<?php echo base_url('assets/images/product/'). $value ?>" alt="Product Images">
                                                </div>
                                                <?php
                                            }
                                        ?>
                                       
                                    </div>
                                </div>
                                
                                <div class="col-lg-12">
                                    <div id='multipleImg'  class="small-thumb-wrapper product-small-thumb-2 small-thumb-style-two small-thumb-style-three">
                                        <?php
                                        foreach($imgArr as $key => $value){
                                            ?>
                                            <div class="small-thumb-img ">
                                                <img  src="<?php echo base_url('assets/images/product/'). $value ?>" alt="samll-thumb">
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    <div class="col-lg-6 mb--40">
                        <div class="single-product-content">
                            <div class="inner">
                                <?php if(!empty($singleproduct)){ ?>
                                <h3 class="product-title"><?php echo $singleproduct[0]['pname'] ?></h3>
                                <span class="price-amount d-inline" id="pricess">₹
                                    <?php echo $singleproduct[0]['price'] ?></span>
                                <span class="prd-amt d-inline text-decoration-line-through" id="discounts">₹
                                    <?php
                                    $noncomma =  str_replace(',', '', $singleproduct[0]['price']);
                                     $plushDES = $noncomma + $singleproduct[0]['discount'];
                                    $mydes = number_format($plushDES,2);
                                    echo $mydes;
                                    ?></span>
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
                                                
                                                <?php
                                                    
                                                    $featureArr =  explode("|",$singleproduct[0]['feature']) ;
                                                    foreach($featureArr as $key => $value){
                                                        ?>
                                                        <li class="text-dark"><?php echo $value?></li>
                                                        
                                                        <?php
                                                    }
                                                    ?>
                                                
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
                                                    <?php
                                                    
                                                    $descriptionArr =  explode("|",$singleproduct[0]['description']) ;
                                                    foreach($descriptionArr as $key => $value){
                                                        ?>
                                                        <li class="text-dark"><?php echo $value?></li>
                                                        
                                                        <?php
                                                    }
                                                    ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            <h6 class='mb-0'>Ratings and Review</h6>
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="product-variations-wrapper">
                                                <ul class="ratings">
                                                    <?php if(!empty($mincount)){ 
                                                        $roundfigure = round($mincount,1 );
                                                    ?>
                                                    <div class="row d-flex">
                                                        <div class="star-rating">
                                                            <input type="radio" id="5-stars" name="rating" value="5" />
                                                            <label for="5-stars" class="star"
                                                                style="color:#fc0!important;">&#9733;</label>
                                                            <li class="text-ratings"><?php echo $roundfigure ?></li>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                    <?php foreach($review as $reviewss){
                                                    if(!empty($reviewss['review'])){
                                                   ?>

                                                    <li class="text-dark">
                                                        <?php echo $reviewss['review'] ?>(<?php echo $reviewss['name'] ?>)
                                                    </li>
                                                    <?php } } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                            aria-expanded="false" aria-controls="collapseFive">
                                            <h6 class='mb-0'>Add Ratings</h6>
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="product-variations-wrapper">
                                                <form>
                                                    <span id="aletmessage" style="color:red;"></span>
                                                    <input type="text" name="name" id="ratingname"
                                                        placeholder="Enter Your name" class="form-control mt-3"
                                                        style="height: 32px; border: 1px solid blue;" required />
                                                    <div class="star-rating">
                                                        <input type="radio" id="5-stars" name="rating" value="5"
                                                            onclick="ratingFunction(5)" />
                                                        <label for="5-stars" class="star">&#9733;</label>
                                                        <input type="radio" id="4-stars" name="rating" value="4"
                                                            onclick="ratingFunction(4)" />
                                                        <label for="4-stars" class="star">&#9733;</label>
                                                        <input type="radio" id="3-stars" name="rating" value="3"
                                                            onclick="ratingFunction(3)" />
                                                        <label for="3-stars" class="star">&#9733;</label>
                                                        <input type="radio" id="2-stars" name="rating" value="2"
                                                            onclick="ratingFunction(2)" />
                                                        <label for="2-stars" class="star">&#9733;</label>
                                                        <input type="radio" id="1-star" name="rating" value="1"
                                                            onclick="ratingFunction(1)" />
                                                        <label for="1-star" class="star">&#9733;</label>
                                                    </div>
                                                    <input type="hidden" name="pid" id="prdid"
                                                        value="<?php echo $singleproduct[0]['id'] ?>" />
                                                    <input type="hidden" name="ratings" id="ratingnumber" value="" />
                                                    <textarea id="reviewss" class="form-control" name="review" rows="10"
                                                        cols="5"></textarea>

                                                    <button type="button" class="addtocard mt-3 mb-4"
                                                        onclick="saveRatings()"
                                                        placeholder="Start writing here....">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                            aria-expanded="false" aria-controls="collapseSix">
                                            <h6 class='mb-0'>Warrenty</h6>
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="product-variations-wrapper">
                                               <ul>
                                                    <?php
                                                    
                                                    $warrentyArr =  explode("|",$singleproduct[0]['warrenty']) ;
                                                    foreach($warrentyArr as $key => $value){
                                                        ?>
                                                        <li class="text-dark"><?php echo $value?></li>
                                                        
                                                        <?php
                                                    }
                                                    ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseSevan"
                                            aria-expanded="false" aria-controls="collapseSix">
                                            <h6 class='mb-0'>Delivery</h6>
                                        </button>
                                    </h2>
                                    <div id="collapseSevan" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="product-variations-wrapper">
                                                <ul>
                                                    <?php
                                                    
                                                    $deliveryArr =  explode("|",$singleproduct[0]['delivery']) ;
                                                    foreach($deliveryArr as $key => $value){
                                                        ?>
                                                        <li class="text-dark"><?php echo $value?></li>
                                                        
                                                        <?php
                                                    }
                                                    ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-variation mt-4 d-flex ml-4">
                                <h6 class="title">Colors:</h6>
                                <div class="color-variant-wrapper ml-4">
                                    <ul class="color-variant mt-0">
                                        <?php
                                        
                                         if($singleproduct[0]['color']!= ""){
                                             ?>
                                             <li class="color-extra-03 ml-3" onclick="colorFunction('0000')">
                                            <span>
                                                <span class="color" style="background: <?php echo $singleproduct[0]['color'] ?>;"></span>
                                            </span>
                                        </li>
                                             <?php
                                         }
                                         if(!empty($colors)){ 
                                        
                                        $i=1; foreach($colors as $key => $colours){ ?>
                                        <li class="color-extra-03 ml-3" onclick="colorFunction(<?php echo $colours["id"] ?>)">
                                            <span>
                                                <span class="color" style="background: <?php echo $colours['color'] ?>;"></span>
                                            </span>
                                        </li>
                                        <?php $i++; } ?>
                                        <?php }
                                
                            ?>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="product-action-wrapper d-flex-center mt-4">
                                <ul class="product-action d-flex-center mb--0">
                                    <li class="add-to-cart">
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                            class="addtocard"><b>Inqure now</b></button>
                                    </li>
                                    <li class="add-to-cart"><a href="tel:7000693062"
                                            class="axil-btn bg-dark text-light">Call Us Now</a></li>
                                </ul>
                            </div>
                            <div class='col-md-8 mt-3'>
                                <a href='<?php echo base_url("products/".$singleproduct[0]['catname'])?>'><span>Product Category :- <?php echo $singleproduct[0]['catname'] ?></span></a>
                            </div>
                            <?php 
                            $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                            ?>

                            <span id="copyText2" style="display:none;"> <?php echo $actual_link ?></span>

                            <div class='col-md-8 mt-3'>
                                <button type="button" class="addtocard" id='answer-example-share-button'><i
                                        class="fa fa-share-alt" aria-hidden="true"></i> Share now</button>
                            </div>
                            <span id="message"></span>
                            <!-- End Product Action Wrapper  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="axil-newsletter-area axil-section-gap pt--0">
        <div class="">
            <div class="etrade-newsletter-wrapper bg_image bg_image--5">
                <div class="newsletter-content">
                    <!--<span class="title-highlighter highlighter-primary2"><i class="fas fa-envelope-open"></i>Newsletter</span>-->
                    <h4 class="title mb--40 mb_sm--30">Need any help? Speak to Our e-commerce specialist:</h4>
                    <div class="input-group newsletter-form">
                        <h4><a href="tel:+917738584949">+917738584949</a></h4>
                        &nbsp;&nbsp;&nbsp;<a href="tel:+917738584949" class="axil-btn mb--15 ml-3"
                            style="width: 112px; text-align: center;">Call now</a>

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
                            <input type='hidden' name='hdnProName' value="<?php echo $singleproduct[0]['pname'] ?>" />
                            <input type='hidden' name='hdnProTitle' value="<?php echo $singleproduct[0]['product_title'] ?>" />
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
                        </div>
                </div>
                <div class="modal-footer d-block">
                    <div class='row'>
                        <div class='col-md-4'>

                        </div>
                        <div class='col-md-4'>
                            <button type="submit" class="axil-btn bg-dark text-light  py-3 btn-sm">Submit</button>
                        </div>
                       
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
  
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
                        $explosdems = explode(",",$subcategory['image']);
                        $imagenae = $explosdems[0];
                        $subcaturl = strtolower(str_replace(" ","-",$subcategory['product_title']));
                        ?>
                        <div class="thumbnail">
                            <a href="<?php echo base_url('singleproduct/').$subcaturl ?>">
                                <img src="<?php echo base_url('assets/images/product/'). $imagenae ?>" style='max-height:201px;object-fit:contain;' alt="Product Images">
                            </a>
                        </div>
                        <div class="product-content">
                            <div class="inner">
                                <h5 class="title"><a
                                        href="<?php echo base_url('singleproduct/').$subcaturl ?>"><?php echo $subcategory['pname'] ?></a>
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

    <div class="axil-product-area bg-color-white axil-section-gap">
        <div class="container">
            <div class="section-title-wrapper">

                <h2 class="title" style="text-transform: capitalize;"><?php echo $singleproduct[0]['catname'] ?>
                    Accessories</h2>
            </div>
            <div class="recent-product-activation slick-layout-wrapper--15 axil-slick-arrow arrow-top-slide">
                <?php   foreach($categorynamedata as $catgrname){
                        if($catgrname['id'] != $singleproduct[0]['id']){
                            
                        
                    $explosdems = explode(",",$catgrname['image']);
                    $imagenae = $explosdems[0];
                    $subcaturl = strtolower(str_replace(" ","-",$catgrname['pname']));
                ?>
                <div class="slick-single-layout mt-4">
                    <div class="axil-product">
                        <div class="thumbnail">
                            <a href="<?php echo base_url('accessriess/singleproduct/').$subcaturl ?>">
                                <img src="<?php echo base_url('assets/images/product/'). $imagenae ?>"
                                    alt="Product Images" style="max-height: 201px;object-fit: contain;">
                            </a>
                        </div>
                        <div class="product-content">
                            <div class="inner" style='text-align:center'>
                                <h5 class="title"><a
                                        href="<?php echo base_url('accessriess/singleaccesproduct/').$subcaturl ?>"><?php echo $catgrname['pname'] ?></a>
                                </h5>
                                <div class="product-price-variant">
                                    <span class="price current-price">₹ <?php echo  $catgrname['price'] ?></span>
                                    <span class="prd-amt d-inline text-decoration-line-through" id="discounts">₹
                                    <?php
                                    $noncomma =  str_replace(',', '', $catgrname['price']);
                                     $plushDES = $noncomma + $catgrname['discount'];
                                    $mydes = number_format($plushDES,2);
                                    echo $mydes;
                                    ?></span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <?php
                        }
                } ?>
            </div>
        </div>
    </div>
   
</main>



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.slick/1.4.1/slick.min.js"></script>
<!--<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>-->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
// $( document ).ready(function() {
$(".slick-slider").slick({
    slidesToShow: 6,
    infinite: true,
    slidesToScroll: 6,
    autoplay: true,
    autoplaySpeed: 1000
    // dots: false, Boolean
    // arrows: false, Boolean
});
// });

$(document).ready(function() {
    $("#reviewss").hide();
    
    $('#answer-example-share-button').on('click', () => {
        if (navigator.share) {
            navigator.share({
                title: 'Web Share API Draft',
                text: 'Take a look at this spec!',
                url: 'https://wicg.github.io/web-share/#share-method',
            })
            .then(() => console.log('Successful share'))
            .catch((error) => console.log('Error sharing', error));
        } else {
            console.log('Share not supported on this browser, do it the old way.');
        }
    });
});

function ratingFunction(id) {
    $("#ratingnumber").val(id);
    $("#reviewss").show();
}
</script>
<script>
function saveRatings() {
    var name = $("#ratingname").val();
    var reviewss = $("#reviewss").val();
    var rating = $("#ratingnumber").val();
    var pid = $("#prdid").val();
    if (name != "" && rating != "") {

        $.ajax({
            type: "POST",
            url: "<?php echo base_url('Singleproduct/getRatings') ?>",
            data: {
                rating: rating,
                name: name,
                pid: pid,
                review: reviewss
            },
            success: function(data) {

                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Thanks for rating us',
                    showConfirmButton: false,
                    timer: 1500
                });
                $("#ratingname").val('');
                $("#reviewss").val('');

            }
        });
    } else {
        $("#aletmessage").html("Please fill details");
    }
}

function colorFunction(id) {
    
    var pidself = $("#prdid").val();
    $.ajax({
        type: "POST",
        url: "<?php echo base_url('Singleproduct/getProducts/') ?>",
        data: {
            pid: id,
            pidself:pidself
        },
        async: false,
        success: function(data) {
            var htmlData = JSON.parse(data);
            // console.log(htmlData.html);
            $('#imageSection').empty();
            $("#imageSection").html(htmlData.html);
           
            $(".slick-slider").slick({
                slidesToShow: 4,
                infinite: true,
                slidesToScroll: 1,
                autoplay: false,
                autoplaySpeed: 100000
                // dots: false, Boolean
                // arrows: false, Boolean
            });
            
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

function getImage(id){
    var imgSrc  = $("#hdnImg\\["+id+"\\]").val();
    var baseurl = "<?php echo base_url('assets/images/product/') ?>";
   // alert(imgSrc);
    $("#signleImg").attr('src',baseurl+imgSrc);
    $(".actv").removeClass('imgActive');
    $("#actv"+id).addClass('imgActive');
}


function withoutJquery() {

    console.time('time1');
    var temp = $("<input>");
    $("body").append(temp);
    temp.val($('#copyText2').text()).select();
    document.execCommand("copy");
    temp.remove();
    console.timeEnd('time1');
   // $("#message").addClass('success-msg').html("Link Ready to Share");

    $("#message").show().delay(10000).fadeOut();
}
</script>
<!-- Start Footer Area  -->
<?php 
        $this->load->view('includes/footer');
    ?>