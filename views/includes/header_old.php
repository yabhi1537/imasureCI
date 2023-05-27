<?php 
$userid = $this->session->userdata('id');
$this->load->model('admin/Homemodel');
$headerfooter  =  $this->db->get('headerfooter')->result_array();
                $this->db->limit(5); 
$category  =    $this->db->get('category')->result_array();

// print_r($headerfooter);die()
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
   <meta name="description" content="">
   <meta name="author" content="">
   <title>imeasure</title>
   <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
   <!-- Vendor CSS -->
   <link href="<?php echo base_url('assets/') ?>css/vendor/bootstrap.min.css" rel="stylesheet">
   <link href="<?php echo base_url('assets/') ?>css/vendor/vendor.min.css" rel="stylesheet">
   <!-- Custom styles for this template -->
   <link href="<?php echo base_url('assets/') ?>css/style-electronics.css" rel="stylesheet">
   <!-- Custom font -->
   <link href="<?php echo base_url('assets/') ?>fonts/icomoon/icons.css" rel="stylesheet">
   <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet">
   <style type="text/css">
      .prd-price {
         display: none;
      }

      .prd-action {
         display: none !important;
      }

      .prd-circle-labels {
         display: none !important;
      }
   </style>
</head>

<body>
    <header class="hdr-wrap">
         <div class="hdr-content hdr-content-sticky">
            <div class="container">
               <div class="row">
                  <div class="col-auto show-mobile">
                     <!-- Menu Toggle -->
                     <div class="menu-toggle"> <a href="#" class="mobilemenu-toggle"><i class="icon-menu"></i></a> </div>
                     <!-- /Menu Toggle -->
                  </div>
                  <div class="col-auto hdr-logo">
                     <a href="<?php echo base_url() ?>" class="logo"><img srcset="<?php echo base_url('assets/') ?>image/logo.png 1x, <?php echo base_url('assets/') ?>image/logo.png 2x" alt="Logo"></a>
                  </div>
                  <!--<div class="hdr-phone hide-mobile">-->
                  <!--  <i class="icon-phone"></i><span>+ 7 555 35 305</span>-->
                  <!--</div>-->
                  <!--navigation-->
                  <div class="hdr-nav hide-mobile nav-holder-s">
                  </div>
                  <!--//navigation-->
                  <div class="hdr-links-wrap col-auto ml-auto">
                     <div class="hdr-inline-link">
                        <!-- Header Search -->
                        <div class="search_container_desktop">
                           <div class="dropdn dropdn_search dropdn_fullwidth">
                              <a href="#" class="dropdn-link  js-dropdn-link only-icon"><i class="icon-search"></i><span class="dropdn-link-txt">Search</span></a>
                              <div class="dropdn-content">
                                 <div class="container">
                                    <form method="get" action="#" class="search search-off-popular">
                                       <input name="search" type="text" class="search-input input-empty" placeholder="What are you looking for?">
                                       <button type="submit" class="search-button"><i class="icon-search"></i></button>
                                       <a href="#" class="search-close js-dropdn-close"><i class="icon-close-thin"></i></a>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="hdr">
            <div class="hdr-topline hdr-topline--dark js-hdr-top">
               <div class="container">
                  <div class="row flex-nowrap">
                     <div class="col hdr-topline-left hide-mobile">
                        <!-- Header Social -->
                        <div class="hdr-line-separate">
                           <ul class="social-list list-unstyled">
                              <li>
                                 <a href="<?php echo $headerfooter[0]['facebook'] ?>"><i class="icon-facebook"></i></a>
                              </li>
                              <li>
                                 <a href="<?php echo $headerfooter[0]['twiter'] ?>"><i class="icon-twitter"></i></a>
                              </li>
                              
                              <li>
                                 <a href="<?php echo $headerfooter[0]['instagram'] ?>"><i class="icon-instagram"></i></a>
                              </li>
                             
                              <li>
                                 <a href="<?php echo $headerfooter[0]['linkdin'] ?>"><i class="icon-linkedin"></i></a>
                              </li>
                           </ul>
                        </div>
                        <!-- /Header Social -->
                     </div>
                     <div class="col hdr-topline-right hide-mobile">
                        <div class="hdr-inline-link">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="hdr-content">
               <div class="container">
                  <div class="row">
                     <div class="col-auto show-mobile">
                        <!-- Menu Toggle -->
                        <div class="menu-toggle"> <a href="#" class="mobilemenu-toggle"><i class="icon-menu"></i></a> </div>
                        <!-- /Menu Toggle -->
                     </div>
                     <div class="col-auto hdr-logo">
                        <a href="<?php echo base_url() ?>" class="logo"><img srcset="<?php echo base_url('assets/') ?>image/logo.png 1x,<?php echo base_url('assets/') ?>image/logo.png 2x" alt="Logo"></a>
                     </div>
                     <!-- <div class="hdr-phone">
                        <i class="icon-phone"></i><span>+ 7 555 35 305</span>
                        </div> -->
                     <!--navigation-->
                     <div class="hdr-nav hide-mobile nav-holder justify-content-center">
                        <!--mmenu-->
                        <ul class="mmenu mmenu-js">
                           <li class="mmenu-item--simple"><a href="<?php echo base_url('') ?>" class="active">Home</a></li>
                           <li class="mmenu-item--mega">
                              <a href="<?php echo base_url('about-us') ?>">About Us</a>
                           </li>
                           <?php
                           foreach($category as $key => $value){
                           
                           ?>
                           <li class="mmenu-item--mega">
                              <a href="#"><?php echo $value['catname'] ?></a>
                              <div class="mmenu-submenu mmenu-submenu--has-bottom">
                                 <div class="mmenu-submenu-inside">
                                    <div class="container">
                                       <div class="mmenu-cols column-4">
                                      <?php
                                      $this->db->where('category',$value['id']);
                                      $subcategory  =    $this->db->get('subcategory')->result_array();
                                        foreach($subcategory as $key => $sabValue){
                                            $this->db->where('sub_category',$sabValue['id']);
                                            $products  =    $this->db->get('products')->result_array();
                                            $sabCatUrl = $string = strtolower(str_replace(' ', '-', $sabValue['subcat']));
                                            
                                         
                                      ?>
                                            <div class="mmenu-col">
                                                <h3 class="submenu-title">
                                                    <a href="<?php echo base_url('products/').$sabCatUrl ?>"><?php echo $sabValue['subcat'] ?>
                                                   
                                                    </a>
                                                   <!--  <ul class="sub-level">-->
                                                   <!--   <li><a href="category.html">Fluke TiS55+ Thermal Camera</a></li>-->
                                         
                                                   <!--</ul>-->
                                                </h3>
                                                <ul class="submenu-list">
                                                    <?php
                                                    foreach($products as $key => $productsValue){
                                                        $proUrl = $string = strtolower(str_replace(' ', '-', $productsValue['product_title']));
                                                    ?>
                                                        <li><a href="<?php echo base_url('product/'). $proUrl ?>"><?php echo $productsValue['pname'] ?></a></li>
                                                    <?php
                                                    }
                                                    ?>
                                                
                                                
                                             </ul>
                                          </div>
                                          <?php
                                            }
                                          ?>
                                          <!--<div class="mmenu-col">-->
                                          <!--   <h3 class="submenu-title"><a href="category.html">Thermal cameras</a></h3>-->
                                          <!--   <ul class="submenu-list">-->
                                          <!--      <li><a href="category.html" class="active">TiS75+ Thermal Camera</a>-->
                                          <!--         <ul class="sub-level">-->
                                          <!--            <li><a href="category.html">Fluke TiS55+ Thermal Camera</a></li>-->
                                          <!--            <li><a href="category.html">Fluke TiS60+ Thermal Camera</a></li>-->
                                          <!--            <li><a href="category.html">Fluke TiS20+ / TiS20+ MAX Thermal Imaging Camera</a></li>-->
                                          <!--            <li><a href="category.html">Fluke Ti480 PRO Infrared Camera</a></li>-->
                                          <!--            <li><a href="category.html">Fluke TiX580 Infrared Camera</a></li>-->
                                          <!--         </ul>-->
                                          <!--      </li>-->
                                          <!--      <li><a href="category.html">Fluke TiS55+ Thermal Camera</a></li>-->
                                          <!--            <li><a href="category.html">Fluke TiS60+ Thermal Camera</a></li>-->
                                          <!--            <li><a href="category.html">Fluke TiS20+ / TiS20+ MAX Thermal Imaging Camera</a></li>-->
                                          <!--            <li><a href="category.html">Fluke Ti480 PRO Infrared Camera</a></li>-->
                                          <!--            <li><a href="category.html">Fluke TiX580 Infrared Camera</a></li>-->
                                          <!--   </ul>-->
                                          <!--</div>-->
                                          <!--<div class="mmenu-col">-->
                                          <!--   <h3 class="submenu-title"><a href="category.html">Basic Testers</a></h3>-->
                                          <!--   <ul class="submenu-list">-->
                                          <!--      <li><a href="category.html">Fluke T6-1000 PRO Electrical Tester</a></li>-->
                                          <!--      <li><a href="category.html">Fluke T6-1000 Electrical Tester</a></li>-->
                                          <!--      <li><a href="category.html">Fluke T6-600 Electrical Tester</a></li>-->
                                          <!--      <li><a href="category.html">Fluke T5-1000 Voltage, Continuity and Current Tester</a></li>       -->
                                          <!--      <li><a href="category.html">Fluke T5-600 Electrical Tester</a></li>-->
                                          <!--   </ul>-->
                                          <!--</div>-->
                                          <!--<div class="mmenu-col">-->
                                          <!--   <h3 class="submenu-title"><a href="category.html">Power Quality</a></h3>-->
                                          <!--   <ul class="submenu-list">-->
                                          <!--      <li><a href="category.html">Fluke 1770 Series Three-Phase Power Quality Analyzers</a></li>-->
                                          <!--      <li><a href="category.html">Fluke 1732 and 1734 Three-Phase Electrical Energy Loggers</a></li>-->
                                          <!--      <li><a href="category.html">Blouses & Tops</a></li>-->
                                          <!--      <li><a href="category.html">Fluke 1742, 1746 and 1748 Three-Phase Power Quality Loggers</a></li>                                                <li><a href="category.html">Fluke 1760 Three-Phase Energy Logger</a></li>-->
                                          <!--      <li><a href="category.html">Fluke PQ400 Electrical Measurement Window</a></li>-->
                                          <!--   </ul>-->
                                          <!--</div>-->
                                       </div>
                                         
                                    </div>
                                 </div>
                                 </div>
                           </li>
                           <?php
                           }
                           ?>
                           <!--<li class="mmenu-item--simple">-->
                           <!--   <a href="#">HIOKI</a>-->
                           <!--</li>-->
                           <!--<li><a href="#">Testo</a></li>-->
                           <!--<li><a href="#">Megger</a></li>-->
                           <!--<li><a href="#">Brand5</a></li>-->
                           <li><a href="<?php echo base_url('blogs') ?>">Blog</a></li>
                           <li class="mmenu-item--simple">
                              <a href="<?php echo base_url('contact-us') ?>">Contact Us</a>
                           </li>
                           
                        </ul>
                        <!--/mmenu-->
                     </div>
                     <!--//navigation-->
                     <div class="hdr-links-wrap col-auto ml-auto">
                        <div class="hdr-inline-link">
                           <!-- Header Search -->
                           <div class="search_container_desktop">
                              <div class="dropdn dropdn_search dropdn_fullwidth">
                                 <a href="#" class="dropdn-link  js-dropdn-link only-icon"><i class="icon-search"></i><span class="dropdn-link-txt">Search</span></a>
                                 <div class="dropdn-content">
                                    <div class="container">
                                       <form method="get" action="#" class="search search-off-popular">
                                          <input name="search" type="text" class="search-input input-empty" onkeyup="searchFunction()" placeholder="What are you looking for?">
                                          <button type="submit" class="search-button"><i class="icon-search"></i></button>
                                          <a href="#" class="search-close js-dropdn-close"><i class="icon-close-thin"></i></a>
                                       </form>
                                    </div>
                                    <div class="container col-md-8" id="psearch-resultss">
               
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- /Header Search -->
                           <div class="hdr_container_mobile show-mobile">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <div class="header-side-panel">
         <!-- Mobile Menu -->
         <div class="mobilemenu js-push-mbmenu">
            <div class="mobilemenu-content">
               <div class="mobilemenu-close mobilemenu-toggle">Close</div>
               <div class="mobilemenu-scroll">
                  <div class="mobilemenu-search"></div>
                  <div class="nav-wrapper show-menu">
                     <div class="nav-toggle">
                        <span class="nav-back"><i class="icon-angle-left"></i></span>
                        <span class="nav-title"></span>
                        <!--<a href="#" class="nav-viewall">view all</a>-->
                     </div>
                     <ul class="nav nav-level-1">
                        <li>
                           <a href="<?php echo base_url() ?>">Home</a>
                        </li>
                        <li>
                           <a href="<?php echo base_url('about-us') ?>">About-us</a>
                        </li>
                        <?php
                        foreach($category as $key => $value){
                        
                        ?>
                        <li>
                           <a href="#"><?php echo $value['catname'] ?><span class="arrow"><i class="icon-angle-right"></i></span></a>
                           <ul class="nav-level-2">
                                <?php
                                      $this->db->where('category',$value['id']);
                                      $subcategory  =    $this->db->get('subcategory')->result_array();
                                        foreach($subcategory as $key => $sabValue){
                                            $this->db->where('sub_category',$sabValue['id']);
                                            $products  =    $this->db->get('products')->result_array();
                                            $sabCatUrl = $string = strtolower(str_replace(' ', '-', $sabValue['subcat']));
                                      ?>
                              <li>
                                 <a href="<?php echo base_url('products/').$sabCatUrl ?>"><?php echo $sabValue['subcat'] ?><span class="arrow"><i class="icon-angle-right"></i></span></a>
                                 <ul class="nav-level-3">
                                     <?php
                                                 foreach($products as $key => $productsValue){
                                                     $proUrl = $string = strtolower(str_replace(' ', '-', $productsValue['product_title']));
                                                 ?>
                                    <li><a href="<?php echo base_url('product/'). $proUrl ?>"><?php echo $productsValue['pname'] ?></a></li>
                                   <?php
                                                 }
                                   ?>
                                 </ul>
                              </li>
                              <?php
                              
                                        }
                              ?>
                              <!--<li>-->
                              <!--   <a href="category.html">Thermal cameras<span class="arrow"><i class="icon-angle-right"></i></span></a>-->
                              <!--   <ul class="nav-level-3">-->
                              <!--      <li><a href="#">TiS75+ Thermal Camera</a></li>-->
                              <!--      <li><a href="#">Fluke TiS55+ Thermal Camera</a></li>-->
                              <!--      <li><a href="#">Fluke TiS60+ Thermal Camera</a></li>-->
                              <!--      <li><a href="#">Fluke TiS20+ / TiS20+ MAX Thermal Imaging Camera</a></li>-->
                              <!--      <li><a href="#">Fluke Ti480 PRO Infrared Camera</a></li>-->
                              <!--   </ul>-->
                              <!--</li>-->
                              <!--<li>-->
                              <!--   <a href="#">Basic Testers<span class="arrow"><i class="icon-angle-right"></i></span></a>-->
                              <!--   <ul class="nav-level-3">-->
                              <!--      <li><a href="#">Fluke T6-1000 PRO Electrical Tester</a></li>-->
                              <!--      <li><a href="#">Fluke T6-1000 Electrical Tester</a></li>-->
                              <!--      <li><a href="#">Fluke T6-600 Electrical Tester</a></li>-->
                              <!--      <li><a href="#">Fluke T5-1000 Voltage, Continuity and Current Tester</a></li>-->
                              <!--   </ul>-->
                              <!--</li>-->
                              <!--<li>-->
                              <!--   <a href="#">Power Quality<span class="arrow"><i class="icon-angle-right"></i></span></a>-->
                              <!--   <ul class="nav-level-3">-->
                              <!--      <li><a href="#">Fluke 1770 Series Three-Phase Power Quality Analyzers</a></li>-->
                              <!--      <li><a href="#">Fluke 1732 and 1734 Three-Phase Electrical Energy Loggers</a></li>-->
                              <!--      <li><a href="#">Fluke 1742, 1746 and 1748 Three-Phase Power Quality Loggers</a></li>-->
                              <!--      <li><a href="#">Fluke 1736 and 1738 Three-Phase Power Quality Loggers</a></li>-->
                              <!--   </ul>-->
                              <!--</li>-->
                           </ul>
                        </li>
                        <?php
                        }
                        ?>
                        <!--<li>-->
                        <!--   <a href="#">HIOKI<span class="arrow"><i class="icon-angle-right"></i></span></a>-->
                        <!--   <ul class="nav-level-2">-->
                        <!--      <li>-->
                        <!--         <a href="#">Digital multimeters<span class="arrow"><i class="icon-angle-right"></i></span></a>-->
                        <!--         <ul class="nav-level-3">-->
                        <!--            <li><a href="#">Fluke 87V Industrial Multimeter</a></li>-->
                        <!--            <li><a href="#">Fluke 117 Electrician's Multimeter with Non-Contact Voltage</a></li>-->
                        <!--            <li><a href="#">Fluke 179 True-RMS Digital Multimeter</a></li>-->
                        <!--            <li><a href="#">"Fluke 115 Field Technicians Digital Multimeter"</a></li>-->
                        <!--         </ul>-->
                        <!--      </li>-->
                        <!--      <li>-->
                        <!--         <a href="category.html">Thermal cameras<span class="arrow"><i class="icon-angle-right"></i></span></a>-->
                        <!--         <ul class="nav-level-3">-->
                        <!--            <li><a href="#">TiS75+ Thermal Camera</a></li>-->
                        <!--            <li><a href="#">Fluke TiS55+ Thermal Camera</a></li>-->
                        <!--            <li><a href="#">Fluke TiS60+ Thermal Camera</a></li>-->
                        <!--            <li><a href="#">Fluke TiS20+ / TiS20+ MAX Thermal Imaging Camera</a></li>-->
                        <!--            <li><a href="#">Fluke Ti480 PRO Infrared Camera</a></li>-->
                        <!--         </ul>-->
                        <!--      </li>-->
                        <!--      <li>-->
                        <!--         <a href="#">Basic Testers<span class="arrow"><i class="icon-angle-right"></i></span></a>-->
                        <!--         <ul class="nav-level-3">-->
                        <!--            <li><a href="#">Fluke T6-1000 PRO Electrical Tester</a></li>-->
                        <!--            <li><a href="#">Fluke T6-1000 Electrical Tester</a></li>-->
                        <!--            <li><a href="#">Fluke T6-600 Electrical Tester</a></li>-->
                        <!--            <li><a href="#">Fluke T5-1000 Voltage, Continuity and Current Tester</a></li>-->
                        <!--         </ul>-->
                        <!--      </li>-->
                        <!--      <li>-->
                        <!--         <a href="#">Power Quality<span class="arrow"><i class="icon-angle-right"></i></span></a>-->
                        <!--         <ul class="nav-level-3">-->
                        <!--            <li><a href="#">Fluke 1770 Series Three-Phase Power Quality Analyzers</a></li>-->
                        <!--            <li><a href="#">Fluke 1732 and 1734 Three-Phase Electrical Energy Loggers</a></li>-->
                        <!--            <li><a href="#">Fluke 1742, 1746 and 1748 Three-Phase Power Quality Loggers</a></li>-->
                        <!--            <li><a href="#">Fluke 1736 and 1738 Three-Phase Power Quality Loggers</a></li>-->
                        <!--         </ul>-->
                        <!--      </li>-->
                        <!--   </ul>-->
                        <!--</li>-->
                        <!--<li>-->
                        <!--   <a href="#">Testo<span class="arrow"><i class="icon-angle-right"></i></span></a>-->
                        <!--   <ul class="nav-level-2">-->
                        <!--      <li>-->
                        <!--         <a href="#">Digital multimeters<span class="arrow"><i class="icon-angle-right"></i></span></a>-->
                        <!--         <ul class="nav-level-3">-->
                        <!--            <li><a href="#">Fluke 87V Industrial Multimeter</a></li>-->
                        <!--            <li><a href="#">Fluke 117 Electrician's Multimeter with Non-Contact Voltage</a></li>-->
                        <!--            <li><a href="#">Fluke 179 True-RMS Digital Multimeter</a></li>-->
                        <!--            <li><a href="#">"Fluke 115 Field Technicians Digital Multimeter"</a></li>-->
                        <!--         </ul>-->
                        <!--      </li>-->
                        <!--      <li>-->
                        <!--         <a href="category.html">Thermal cameras<span class="arrow"><i class="icon-angle-right"></i></span></a>-->
                        <!--         <ul class="nav-level-3">-->
                        <!--            <li><a href="#">TiS75+ Thermal Camera</a></li>-->
                        <!--            <li><a href="#">Fluke TiS55+ Thermal Camera</a></li>-->
                        <!--            <li><a href="#">Fluke TiS60+ Thermal Camera</a></li>-->
                        <!--            <li><a href="#">Fluke TiS20+ / TiS20+ MAX Thermal Imaging Camera</a></li>-->
                        <!--            <li><a href="#">Fluke Ti480 PRO Infrared Camera</a></li>-->
                        <!--         </ul>-->
                        <!--      </li>-->
                        <!--      <li>-->
                        <!--         <a href="#">Basic Testers<span class="arrow"><i class="icon-angle-right"></i></span></a>-->
                        <!--         <ul class="nav-level-3">-->
                        <!--            <li><a href="#">Fluke T6-1000 PRO Electrical Tester</a></li>-->
                        <!--            <li><a href="#">Fluke T6-1000 Electrical Tester</a></li>-->
                        <!--            <li><a href="#">Fluke T6-600 Electrical Tester</a></li>-->
                        <!--            <li><a href="#">Fluke T5-1000 Voltage, Continuity and Current Tester</a></li>-->
                        <!--         </ul>-->
                        <!--      </li>-->
                        <!--      <li>-->
                        <!--         <a href="#">Power Quality<span class="arrow"><i class="icon-angle-right"></i></span></a>-->
                        <!--         <ul class="nav-level-3">-->
                        <!--            <li><a href="#">Fluke 1770 Series Three-Phase Power Quality Analyzers</a></li>-->
                        <!--            <li><a href="#">Fluke 1732 and 1734 Three-Phase Electrical Energy Loggers</a></li>-->
                        <!--            <li><a href="#">Fluke 1742, 1746 and 1748 Three-Phase Power Quality Loggers</a></li>-->
                        <!--            <li><a href="#">Fluke 1736 and 1738 Three-Phase Power Quality Loggers</a></li>-->
                        <!--         </ul>-->
                        <!--      </li>-->
                        <!--   </ul>-->
                        <!--</li>-->
                        <!--<li>-->
                        <!--   <a href="#">Megger<span class="arrow"><i class="icon-angle-right"></i></span></a>-->
                        <!--   <ul class="nav-level-2">-->
                        <!--      <li>-->
                        <!--         <a href="#">Digital multimeters<span class="arrow"><i class="icon-angle-right"></i></span></a>-->
                        <!--         <ul class="nav-level-3">-->
                        <!--            <li><a href="#">Fluke 87V Industrial Multimeter</a></li>-->
                        <!--            <li><a href="#">Fluke 117 Electrician's Multimeter with Non-Contact Voltage</a></li>-->
                        <!--            <li><a href="#">Fluke 179 True-RMS Digital Multimeter</a></li>-->
                        <!--            <li><a href="#">"Fluke 115 Field Technicians Digital Multimeter"</a></li>-->
                        <!--         </ul>-->
                        <!--      </li>-->
                        <!--      <li>-->
                        <!--         <a href="category.html">Thermal cameras<span class="arrow"><i class="icon-angle-right"></i></span></a>-->
                        <!--         <ul class="nav-level-3">-->
                        <!--            <li><a href="#">TiS75+ Thermal Camera</a></li>-->
                        <!--            <li><a href="#">Fluke TiS55+ Thermal Camera</a></li>-->
                        <!--            <li><a href="#">Fluke TiS60+ Thermal Camera</a></li>-->
                        <!--            <li><a href="#">Fluke TiS20+ / TiS20+ MAX Thermal Imaging Camera</a></li>-->
                        <!--            <li><a href="#">Fluke Ti480 PRO Infrared Camera</a></li>-->
                        <!--         </ul>-->
                        <!--      </li>-->
                        <!--      <li>-->
                        <!--         <a href="#">Basic Testers<span class="arrow"><i class="icon-angle-right"></i></span></a>-->
                        <!--         <ul class="nav-level-3">-->
                        <!--            <li><a href="#">Fluke T6-1000 PRO Electrical Tester</a></li>-->
                        <!--            <li><a href="#">Fluke T6-1000 Electrical Tester</a></li>-->
                        <!--            <li><a href="#">Fluke T6-600 Electrical Tester</a></li>-->
                        <!--            <li><a href="#">Fluke T5-1000 Voltage, Continuity and Current Tester</a></li>-->
                        <!--         </ul>-->
                        <!--      </li>-->
                        <!--      <li>-->
                        <!--         <a href="#">Power Quality<span class="arrow"><i class="icon-angle-right"></i></span></a>-->
                        <!--         <ul class="nav-level-3">-->
                        <!--            <li><a href="#">Fluke 1770 Series Three-Phase Power Quality Analyzers</a></li>-->
                        <!--            <li><a href="#">Fluke 1732 and 1734 Three-Phase Electrical Energy Loggers</a></li>-->
                        <!--            <li><a href="#">Fluke 1742, 1746 and 1748 Three-Phase Power Quality Loggers</a></li>-->
                        <!--            <li><a href="#">Fluke 1736 and 1738 Three-Phase Power Quality Loggers</a></li>-->
                        <!--         </ul>-->
                        <!--      </li>-->
                        <!--   </ul>-->
                        <!--</li>-->
                        <!--<li>-->
                        <!--   <a href="#">Brand5<span class="arrow"><i class="icon-angle-right"></i></span></a>-->
                        <!--   <ul class="nav-level-2">-->
                        <!--      <li>-->
                        <!--         <a href="#">Digital multimeters<span class="arrow"><i class="icon-angle-right"></i></span></a>-->
                        <!--         <ul class="nav-level-3">-->
                        <!--            <li><a href="#">Fluke 87V Industrial Multimeter</li>-->
                        <!--            <li><a href="#">Fluke 117 Electrician's Multimeter with Non-Contact Voltage</a></li>-->
                        <!--            <li><a href="#">Fluke 179 True-RMS Digital Multimeter</a></li>-->
                        <!--            <li><a href="#">"Fluke 115 Field Technicians Digital Multimeter"</a></li>-->
                        <!--         </ul>-->
                        <!--      </li>-->
                        <!--      <li>-->
                        <!--         <a href="category.html">Thermal cameras<span class="arrow"><i class="icon-angle-right"></i></span></a>-->
                        <!--         <ul class="nav-level-3">-->
                        <!--            <li><a href="#">TiS75+ Thermal Camera</a></li>-->
                        <!--            <li><a href="#">Fluke TiS55+ Thermal Camera</a></li>-->
                        <!--            <li><a href="#">Fluke TiS60+ Thermal Camera</a></li>-->
                        <!--            <li><a href="#">Fluke TiS20+ / TiS20+ MAX Thermal Imaging Camera</a></li>-->
                        <!--            <li><a href="#">Fluke Ti480 PRO Infrared Camera</a></li>-->
                        <!--         </ul>-->
                        <!--      </li>-->
                        <!--      <li>-->
                        <!--         <a href="#">Basic Testers<span class="arrow"><i class="icon-angle-right"></i></span></a>-->
                        <!--         <ul class="nav-level-3">-->
                        <!--            <li><a href="#">Fluke T6-1000 PRO Electrical Tester</a></li>-->
                        <!--            <li><a href="#">Fluke T6-1000 Electrical Tester</a></li>-->
                        <!--            <li><a href="#">Fluke T6-600 Electrical Tester</a></li>-->
                        <!--            <li><a href="#">Fluke T5-1000 Voltage, Continuity and Current Tester</a></li>-->
                        <!--         </ul>-->
                        <!--      </li>-->
                        <!--      <li>-->
                        <!--         <a href="#">Power Quality<span class="arrow"><i class="icon-angle-right"></i></span></a>-->
                        <!--         <ul class="nav-level-3">-->
                        <!--            <li><a href="#">Fluke 1770 Series Three-Phase Power Quality Analyzers</a></li>-->
                        <!--            <li><a href="#">Fluke 1732 and 1734 Three-Phase Electrical Energy Loggers</a></li>-->
                        <!--            <li><a href="#">Fluke 1742, 1746 and 1748 Three-Phase Power Quality Loggers</a></li>-->
                        <!--            <li><a href="#">Fluke 1736 and 1738 Three-Phase Power Quality Loggers</a></li>-->
                        <!--         </ul>-->
                        <!--      </li>-->
                        <!--   </ul>-->
                        <!--</li>-->
                        <li>
                           <a href="<?php echo base_url('blogs') ?>">Blog</a>
                        </li>
                        <li>
                           <a href="<?php echo base_url('contact-us') ?>">Contact Us</a>
                        </li>

                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <!-- /Mobile Menu -->
         <div class="dropdn-content account-drop" id="dropdnAccount">
            <div class="dropdn-content-block">
               <div class="dropdn-close"><span class="js-dropdn-close">Close</span></div>
               <ul>
                  <li><a href="account-create.html"><span>Log In</span><i class="icon-login"></i></a></li>
                  <li><a href="account-create.html"><span>Register</span><i class="icon-user2"></i></a></li>
                  <li><a href="checkout.html"><span>Checkout</span><i class="icon-card"></i></a></li>
               </ul>
               <div class="dropdn-form-wrapper">
                  <h5>Quick Login</h5>
                  <form action="#">
                     <div class="form-group">
                        <input type="text" class="form-control form-control--sm is-invalid" placeholder="Enter your e-mail">
                        <div class="invalid-feedback">Can't be blank</div>
                     </div>
                     <div class="form-group">
                        <input type="password" class="form-control form-control--sm" placeholder="Enter your password">
                     </div>
                     <button type="submit" class="btn">Enter</button>
                  </form>
               </div>
            </div>
            <div class="drop-overlay js-dropdn-close"></div>
         </div>
         <div class="dropdn-content minicart-drop" id="dropdnMinicart">
            <div class="dropdn-content-block">
               <div class="dropdn-close"><span class="js-dropdn-close">Close</span></div>
               <div class="minicart-drop-content js-dropdn-content-scroll">
                  <div class="minicart-prd row">
                     <div class="minicart-prd-image image-hover-scale-circle col">
                        <a href="#"><img class="lazyload fade-up" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-1.png" alt=""></a>
                     </div>
                     <div class="minicart-prd-info col">
                        <div class="minicart-prd-tag">FOXic</div>
                        <h2 class="minicart-prd-name"><a href="#">Leather Pegged Pants</a></h2>
                        <div class="minicart-prd-qty"><span class="minicart-prd-qty-label">Quantity:</span><span class="minicart-prd-qty-value">1</span></div>
                        <div class="minicart-prd-price prd-price">
                           <div class="price-old">$200.00</div>
                           <div class="price-new">$180.00</div>
                        </div>
                     </div>
                     <div class="minicart-prd-action">
                        <a href="#" class="js-product-remove" data-line-number="1"><i class="icon-recycle"></i></a>
                     </div>
                  </div>
                  <div class="minicart-prd row">
                     <div class="minicart-prd-image image-hover-scale-circle col">
                        <a href="#"><img class="lazyload fade-up" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fashion/products/product-16-1.jpg" alt=""></a>
                     </div>
                     <div class="minicart-prd-info col">
                        <div class="minicart-prd-tag">FOXic</div>
                        <h2 class="minicart-prd-name"><a href="#">Cascade Casual Shirt</a></h2>
                        <div class="minicart-prd-qty"><span class="minicart-prd-qty-label">Quantity:</span><span class="minicart-prd-qty-value">1</span></div>
                        <div class="minicart-prd-price prd-price">
                           <div class="price-old">$200.00</div>
                           <div class="price-new">$180.00</div>
                        </div>
                     </div>
                     <div class="minicart-prd-action">
                        <a href="#" class="js-product-remove" data-line-number="2"><i class="icon-recycle"></i></a>
                     </div>
                  </div>
                  <div class="minicart-empty js-minicart-empty d-none">
                     <div class="minicart-empty-text">Your cart is empty</div>
                     <div class="minicart-empty-icon">
                        <i class="icon-shopping-bag"></i>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 306 262" style="enable-background:new 0 0 306 262;" xml:space="preserve">
                           <path class="st0" d="M78.1,59.5c0,0-37.3,22-26.7,85s59.7,237,142.7,283s193,56,313-84s21-206-69-240s-249.4-67-309-60C94.6,47.6,78.1,59.5,78.1,59.5z"/>
                        </svg>
                     </div>
                  </div>
                  <a href="#" class="minicart-drop-countdown mt-3">
                     <div class="countdown-box-full">
                        <div class="row no-gutters align-items-center">
                           <div class="col-auto"><i class="icon-gift icon--giftAnimate"></i></div>
                           <div class="col">
                              <div class="countdown-txt">WHEN BUYING TWO
                                 THINGS A THIRD AS A GIFT
                              </div>
                              <div class="countdown js-countdown" data-countdown="2021/07/01"></div>
                           </div>
                        </div>
                     </div>
                  </a>
                  <div class="minicart-drop-info d-none d-md-block">
                     <div class="shop-feature-single row no-gutters align-items-center">
                        <div class="shop-feature-icon col-auto"><i class="icon-truck"></i></div>
                        <div class="shop-feature-text col"><b>SHIPPING!</b> Continue shopping to add more products and receive free shipping</div>
                     </div>
                  </div>
               </div>
               <div class="minicart-drop-fixed js-hide-empty">
                  <div class="loader-horizontal-sm js-loader-horizontal-sm" data-loader-horizontal=""><span></span></div>
                  <div class="minicart-drop-total js-minicart-drop-total row no-gutters align-items-center">
                     <div class="minicart-drop-total-txt col-auto heading-font">Subtotal</div>
                     <div class="minicart-drop-total-price col" data-header-cart-total="">$340</div>
                  </div>
                  <div class="minicart-drop-actions">
                     <a href="cart.html" class="btn btn--md btn--grey"><i class="icon-basket"></i><span>Cart Page</span></a>
                     <a href="checkout.html" class="btn btn--md"><i class="icon-checkout"></i><span>Check out</span></a>
                  </div>
                  <ul class="payment-link mb-2">
                     <li><i class="icon-amazon-logo"></i></li>
                     <li><i class="icon-visa-pay-logo"></i></li>
                     <li><i class="icon-skrill-logo"></i></li>
                     <li><i class="icon-klarna-logo"></i></li>
                     <li><i class="icon-paypal-logo"></i></li>
                     <li><i class="icon-apple-pay-logo"></i></li>
                  </ul>
               </div>
            </div>
            <div class="drop-overlay js-dropdn-close"></div>
         </div>
      </div>
      <script>
          function searchFunction() {
            var products = $("#prod-search").val();
            $("#psearch-resultss").empty();
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