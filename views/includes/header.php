<?php 
$userid = $this->session->userdata('id');
$this->load->model('admin/Homemodel');
$headerfooter  =  $this->db->get('headerfooter')->result_array();

// print_r($headerfooter);die();
?>

<!doctype html>
<html class="no-js" lang="en">


 <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php if(!empty($pagename)){ ?>
    <title><?php echo $pagename[0]['title'] ?></title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="<?php echo $pagename[0]['description'] ?>">
    <meta name="keywords" content="<?php echo $pagename[0]['keyword'] ?>">
    <?php }else{ ?>
     <title>Horizon Computer</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="Horizon computer">
    <meta name="keywords" content="Horizon computer">
     
    <?php } ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/images/logo/horizon.png')?>">

    <!-- CSS
    ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/vendor/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/vendor/flaticon/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/vendor/slick.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/vendor/jquery-ui.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/vendor/sal.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/vendor/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/vendor/base.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/fontawesome.css">
    
    
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>


</head>

<style>

li.subcategort {
    /*padding-left: 56px;*/
}
.fa, .fas {
    font-family: "Font Awesome 5 Pro";
    font-weight: 900;
    color: coral;
}
</style>

<body class="sticky-header newsletter-popup-modal">

    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
    <a href="#" class="back-to-top" id="backto-top"><i class="fal fa-arrow-up"></i></a>
    <header class="header axil-header header-style-1 pb-0">

        <div class="axil-header-top">
            <div class="container">
                <div class="row align-items-center">
                    
                    <div class="col-md-12">
                          <div class="row align-items-center">
                              <div class="col-md-4 col-sm-12">
                                <span><b>Customer care</b>&nbsp;<i class='fas fa-headset'></i>  <a href="tel:+91 9826722345"><?php echo $headerfooter[0]['customer_care'] ?></a></span>
                                </div>
                                <div class="col-md-4 col-sm-12">
                               <span><b>Sales</b>&nbsp; <a href = "mailto: <?php echo $headerfooter[0]['sales_email'] ?>"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp; <?php echo $headerfooter[0]['sales_email'] ?> </a></span>
                                </div>
                                
                               <!-- <div class="col-md-5 col-sm-12">-->
                               <!--<span><b>For after sales</b><i class="fa fa-envelope" aria-hidden="true"></i> sanjayneema@horizoncomputers.co.in</span>-->
                               <!-- </div>-->
                                
                                
                                
                            <!--</div>-->
                            <!-- <div class='col-md-3'>-->
                            <!--    <span><i class="fa fa-phone" aria-hidden="true"></i></span>-->
                            <!--</div>-->
                        </div>
                        <!--<h1>Mobile No :</h1>-->
                        <!--<p class="my-2 text-center text-dark fw-bold">Welcome to Horizon Computer</p>-->
                    </div>

                </div>
            </div>
        </div>
        <!-- Start Mainmenu Area  -->
        <div id="axil-sticky-placeholder"></div> 
        <div class="axil-mainmenu">
            <div class="container-fluid p-0">
                <div class="header-navbar justify-content-between rounded-0 py-3">
                    <div class="header-brand">
                        <a href="<?php echo base_url() ?>" class="logo logo-dark">
                            <h2 class="m-0 text-light"><img style="width: 150px;" src='<?php echo base_url('assets/images/logo/horizon.png')?>'   /></h2>
                        </a>
                        <a href="<?php echo base_url() ?>" class="logo logo-light">
                            <img  src="<?php echo base_url() ?>assets/images/logo/logo-light.png" alt="Site Logo">
                        </a>
                    </div>
                    <div class="header-main-nav mx-5">
                        <!-- Start Mainmanu Nav -->
                        <nav class="mainmenu-nav">
                            <button class="mobile-close-btn mobile-nav-toggler"><i class="fas fa-times"></i></button>
                            <div class="mobile-nav-brand">
                                <a href="<?php echo base_url() ?>" class="logo">
                                    <img src="<?php echo base_url() ?>assets/images/logo/horizon.png" alt="Site Logo">
                                </a>
                            </div>

                            <ul class="mainmenu">
                                <li class="">
                                    <a href="<?php echo base_url() ?>">Home</a>
                                    <!--<ul class="axil-submenu">-->
                                    <!--    <li><a href="#">Home - Electronics</a></li>-->
                                    <!--    <li><a href="#">Home - NFT</a></li>-->
                                    <!--    <li><a href="#">Home - Fashion</a></li>-->
                                    <!--    <li><a href="#">Home - Jewellery</a></li>-->
                                    <!--    <li><a href="#">Home - Furniture</a></li>-->
                                    <!--    <li><a href="#">Home - Multipurpose</a></li>-->
                                    <!--    <li><a href="#">RTL-->
                                    <!--            Version</a></li>-->
                                    <!--</ul>-->
                                </li>
 
                                <?php if(!empty($category)){ foreach($category as $key => $categs){ ?>

                                <li class="">
                                    <input type="hidden" id="hdnname[<?php echo $categs['id'] ?>]" value="<?php echo  $categs['id'] ?>">
                                    <a href="<?php echo base_url('products/').$categs['catname'] ?>" id="header"
                                        onclick="subCategoryfunction(<?php echo $categs['id'] ?>)"><?php echo $categs['catname'] ?></a>

                                </li>
                                <?php }}else{ ?>
                                   
                                <li class="">
                                    <a href="#">Shop Mac</a>
                                    <!--<ul class="axil-submenu">-->
                                    <!--    <li><a href="shop-#">Shop With Sidebar</a></li>-->
                                    <!--    <li><a href="#">Shop no Sidebar</a></li>-->
                                    <!--    <li><a href="<?php echo base_url('Singleproduct') ?>">Product Variation 1</a>-->
                                    <!--    </li>-->
                                    <!--    <li><a href="#">Product Variation 2</a></li>-->
                                    <!--    <li><a href="#">Product Variation 3</a></li>-->
                                    <!--    <li><a href="#">Product Variation 4</a></li>-->
                                    <!--    <li><a href="#">Product Variation 5</a></li>-->
                                    <!--    <li><a href="#">Product Variation 6</a></li>-->
                                    <!--    <li><a href="#">Product Variation 7</a></li>-->
                                    <!--</ul>-->
                                </li> 
                                <li class="">
                                    <a href="#">Shop hp</a>
                                    <!--<ul class="axil-submenu">-->
                                    <!--    <li><a href="shop-#">Shop With Sidebar</a></li>-->
                                    <!--    <li><a href="#">Shop no Sidebar</a></li>-->
                                    <!--    <li><a href="<?php echo base_url('Singleproduct') ?>">Product Variation 1</a>-->
                                    <!--    </li>-->
                                    <!--    <li><a href="#">Product Variation 2</a></li>-->
                                    <!--    <li><a href="#">Product Variation 3</a></li>-->
                                    <!--    <li><a href="#">Product Variation 4</a></li>-->
                                    <!--    <li><a href="#">Product Variation 5</a></li>-->
                                    <!--    <li><a href="#">Product Variation 6</a></li>-->
                                    <!--    <li><a href="#">Product Variation 7</a></li>-->
                                    <!--</ul>-->
                                </li>
                                <li class="">
                                    <a href="#">Shop ipad</a>
                                    <!--<ul class="axil-submenu">-->
                                    <!--    <li><a href="shop-#">Shop With Sidebar</a></li>-->
                                    <!--    <li><a href="#">Shop no Sidebar</a></li>-->
                                    <!--    <li><a href="<?php echo base_url('Singleproduct') ?>">Product Variation 1</a>-->
                                    <!--    </li>-->
                                    <!--    <li><a href="#">Product Variation 2</a></li>-->
                                    <!--    <li><a href="#">Product Variation 3</a></li>-->
                                    <!--    <li><a href="#">Product Variation 4</a></li>-->
                                    <!--    <li><a href="#">Product Variation 5</a></li>-->
                                    <!--    <li><a href="#">Product Variation 6</a></li>-->
                                    <!--    <li><a href="#">Product Variation 7</a></li>-->
                                    <!--</ul>-->
                                </li>
                                <li class="">
                                    <a href="#">Shop Watch</a>
                                    <!--<ul class="axil-submenu">-->
                                    <!--    <li><a href="shop-#">Shop With Sidebar</a></li>-->
                                    <!--    <li><a href="#">Shop no Sidebar</a></li>-->
                                    <!--    <li><a href="<?php echo base_url('Singleproduct') ?>">Product Variation 1</a>-->
                                    <!--    </li>-->
                                    <!--    <li><a href="#">Product Variation 2</a></li>-->
                                    <!--    <li><a href="#">Product Variation 3</a></li>-->
                                    <!--    <li><a href="#">Product Variation 4</a></li>-->
                                    <!--    <li><a href="#">Product Variation 5</a></li>-->
                                    <!--    <li><a href="#">Product Variation 6</a></li>-->
                                    <!--    <li><a href="#">Product Variation 7</a></li>-->
                                    <!--</ul>-->
                                </li>
                                <li class="">
                                    <a href="#">Shop Accessories</a>
                                    <!--<ul class="axil-submenu">-->
                                    <!--    <li><a href="shop-#">Shop With Sidebar</a></li>-->
                                    <!--    <li><a href="#">Shop no Sidebar</a></li>-->
                                    <!--    <li><a href="<?php echo base_url('Singleproduct') ?>">Product Variation 1</a>-->
                                    <!--    </li>-->
                                    <!--    <li><a href="#">Product Variation 2</a></li>-->
                                    <!--    <li><a href="#">Product Variation 3</a></li>-->
                                    <!--    <li><a href="#">Product Variation 4</a></li>-->
                                    <!--    <li><a href="#">Product Variation 5</a></li>-->
                                    <!--    <li><a href="#">Product Variation 6</a></li>-->
                                    <!--    <li><a href="#">Product Variation 7</a></li>-->
                                    <!--</ul>-->
                                </li>
                                <?php } ?>
                                <!-- <li class="menu-item-has-children">
                                    <a href="#">Pages</a>
                                    <ul class="axil-submenu">
                                        <li><a href="#">Wishlist</a></li>
                                        <li><a href="#">Cart</a></li>
                                        <li><a href="#">Checkout</a></li>
                                        <li><a href="my-#">Account</a></li>
                                        <li><a href="sign-#">Sign Up</a></li>
                                        <li><a href="sign-#">Sign In</a></li>
                                        <li><a href="forgot-#">Forgot Password</a></li>
                                        <li><a href="reset-#">Reset Password</a></li>
                                        <li><a href="privacy-#">Privacy Policy</a></li>
                                        <li><a href="coming-#">Coming Soon</a></li>
                                        <li><a href="#">404 Error</a></li>
                                        <li><a href="#">Typography</a></li>
                                    </ul>
                                </li> -->
                                <!-- <li><a href="about-#">About</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#">Blog</a>
                                    <ul class="axil-submenu">
                                        <li><a href="#">Blog List</a></li>
                                        <li><a href="blog-#">Blog Grid</a></li>
                                        <li><a href="blog-#">Standard Post</a></li>
                                        <li><a href="blog-#">Gallery Post</a></li>
                                        <li><a href="blog-#">Video Post</a></li>
                                        <li><a href="blog-#">Audio Post</a></li>
                                        <li><a href="blog-#">Quote Post</a></li>
                                    </ul>
                                </li> --> 
                                <li><a href="<?php echo base_url('Accessories') ?>">Accessories</a></li>
                                <li><a href="<?php echo base_url('Contactus') ?>">Contact</a></li>
                                <li><a href="<?php echo base_url('about-us') ?>">About-us</a></li>
                            </ul>
                        </nav>
                        <!-- End Mainmanu Nav -->
                    </div>
                    <div class="header-action">
                        <ul class="action-list">
                            <li class="axil-search">
                                <a href="javascript:void(0)" class="header-search-icon" title="Search">
                                    <i class="flaticon-magnifying-glass"></i>
                                </a>
                            </li>
                            <li class="axil-mobile-toggle">
                                <button class="menu-btn mobile-nav-toggler">
                                    <i class="flaticon-menu-2"></i>
                                </button>
                            </li>
                          
                        </ul>
                    </div>
                                    
                </div>
            </div>
        </div>
        <!-- End Mainmenu Area -->
    </header>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<!--Model in header -->

<div class="header-search-modal" id="header-search-modal">
    <button class="card-close sidebar-close"><i class="fas fa-times"></i></button>
    <div class="header-search-wrap">
        <div class="card-header">
            <form action="#">
                <div class="input-group">
                    <input type="search" class="form-control" name="prod-search" id="prod-search"
                        placeholder="Write Something...." onkeyup="searchFunction()">
                    <button type="submit" class="axil-btn btn-bg-primary"><i class="far fa-search"></i></button>
                </div>
            </form>
        </div>
        <div class="card-body">
            <div class="search-result-header">
                <!--<h6 class="title" id="titiles">0<small>Result Found</small></h6>-->
                <!--<a href="<?php echo base_url() ?>" class="view-all">View All</a>-->
            </div>
            <div class="" id="psearch-resultss">
                <!--<div class="axil-product-list">-->
                <!--    <div class="thumbnail">-->
                <!--        <a href="single-#">-->
                <!--            <img src="<?php echo base_url() ?>assets/images/product/electric/product-09.png"-->
                <!--                alt="Yantiti Leather Bags">-->
                <!--        </a>-->
                <!--    </div>-->
                <!--    <div class="product-content">-->
                <!--        <div class="product-rating">-->
                <!--            <span class="rating-icon">-->
                <!--                <i class="fas fa-star"></i>-->
                <!--                <i class="fas fa-star"></i>-->
                <!--                <i class="fas fa-star"></i>-->
                <!--                <i class="fas fa-star"></i>-->
                <!--                <i class="fal fa-star"></i>-->
                <!--            </span>-->
                <!--            <span class="rating-number"><span>100+</span> Reviews</span>-->
                <!--        </div>-->
                <!--        <h6 class="product-title"><a href="single-#">Media Remote</a></h6>-->
                <!--        <div class="product-price-variant">-->
                <!--            <span class="price current-price">$29.99</span>-->
                <!--            <span class="price old-price">$49.99</span>-->
                <!--        </div>-->
                <!--        <div class="product-cart">-->
                <!--            <a href="#" class="cart-btn"><i class="fal fa-shopping-cart"></i></a>-->
                <!--            <a href="#" class="cart-btn"><i class="fal fa-heart"></i></a>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="axil-product-list">-->
                <!--    <div class="thumbnail">-->
                <!--        <a href="single-#">-->
                <!--            <img src="<?php echo base_url() ?>assets/images/product/electric/product-09.png"-->
                <!--                alt="Yantiti Leather Bags">-->
                <!--        </a>-->
                <!--    </div>-->
                <!--    <div class="product-content">-->
                <!--        <div class="product-rating">-->
                <!--            <span class="rating-icon">-->
                <!--                <i class="fas fa-star"></i>-->
                <!--                <i class="fas fa-star"></i>-->
                <!--                <i class="fas fa-star"></i>-->
                <!--                <i class="fas fa-star"></i>-->
                <!--                <i class="fal fa-star"></i>-->
                <!--            </span>-->
                <!--            <span class="rating-number"><span>100+</span> Reviews</span>-->
                <!--        </div>-->
                <!--        <h6 class="product-title"><a href="single-#">Media Remote</a></h6>-->
                <!--        <div class="product-price-variant">-->
                <!--            <span class="price current-price">$29.99</span>-->
                <!--            <span class="price old-price">$49.99</span>-->
                <!--        </div>-->
                <!--        <div class="product-cart">-->
                <!--            <a href="#" class="cart-btn"><i class="fal fa-shopping-cart"></i></a>-->
                <!--            <a href="#" class="cart-btn"><i class="fal fa-heart"></i></a>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <script>
    function subCategoryfunction(cid) {

        var name = $("#hdnname\\["+cid+"\\]").val();


        
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('Singleproduct/sabCategory') ?>",
            data: {
                catid :name,

            },
            success: function(data) {
                $("#subcategory").html(data);
                // alert();
                return false;
               

            }
        });
    }
    
    
        function searchFunction() {
            var products = $("#prod-search").val();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('Home/searchFilter') ?>",
                data: {
                    product: products
                },
                success: function(data) {
                    // alert();
                    var filecount =  $.parseJSON(data);
                    // console.log(filecount.output);
                    // alert(data.filtercount);
                    // return false;
                    $("#titiles").html(filecount.filtercount)
                    $("#psearch-resultss").html(filecount.output);
                    // return false;
                    // window.location.reload();
        
                }
            });
        }
    </script>