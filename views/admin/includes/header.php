<?php 
$admin = $this->session->userdata('id');
$name = $this->session->userdata('name');
$adminimg = $this->session->userdata('profile');


if(empty($admin)){
  redirect('admin/LoginController');
}
?>

<!DOCTYPE html>
<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html lang="en" class="light-style layout-menu-fixed " dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

  
<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template-free/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Dec 2022 12:37:05 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Horizon</title>
    
    <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/images/logo/horizon.png')?>" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="<?php echo base_url('admin-assets/vendor/fonts/boxicons.css') ?>" />
    
    

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url('admin-assets/vendor/css/core.css') ?>" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?php echo base_url('admin-assets/vendor/css/theme-default.css') ?>" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?php echo base_url('admin-assets/css/demo.css') ?>" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?php echo base_url('admin-assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') ?>" />
    
    <link rel="stylesheet" href="<?php echo base_url('admin-assets/vendor/libs/apex-charts/apex-charts.css') ?>" />

    <!-- Page CSS -->
    
    <!-- Helpers -->
    <script src="<?php echo base_url('admin-assets/vendor/js/helpers.js') ?>"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?php echo base_url('admin-assets/js/config.js') ?>"></script>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'GA_MEASUREMENT_ID');
    </script>
    <!-- Custom notification for demo -->
    <!-- beautify ignore:end -->

</head>

<body>

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">







            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">


                <div class="app-brand demo ">
                    <a href="index-2.html" class="app-brand-link">
                        <span class="app-brand-logo demo">

                        </span>
                        <span class="app-brand-text demo menu-text fw-bolder ms-2"><img style="width: 150px;" src='<?php echo base_url('assets/images/logo/horizon.png')?>'   /></span>
                    </a>

                    <a href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">

                    <!-- Dashboard -->
                    <li class="menu-item ">
                        <a href="<?php echo base_url('admin/HomeController') ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>


                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div data-i18n="Account Settings">Product Managment</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="<?php echo base_url('Admin/Add-product'); ?>" class="menu-link">
                                    <div data-i18n="Account">Product</div>
                                </a>
                            </li>
                            <!--<li class="menu-item">-->
                            <!--    <a href="<?php echo base_url('admin/product/Productfeatures') ?>" class="menu-link">-->
                            <!--        <div data-i18n="Notifications">Key Features</div>-->
                            <!--    </a>-->
                            <!--</li>-->
                            <!--<li class="menu-item">-->
                            <!--    <a href="<?php echo base_url('admin/product/Deliverycontent') ?>" class="menu-link">-->
                            <!--        <div data-i18n="Connections">Delivery Contents</div>-->
                            <!--    </a>-->
                            <!--</li>-->

                            <!--<li class="menu-item">-->
                            <!--    <a href="<?php echo base_url('admin/product/WarrentyController') ?>" class="menu-link">-->
                            <!--        <div data-i18n="Connections">Apply Warrenty</div>-->
                            <!--    </a>-->
                            <!--</li>-->

                            <!--<li class="menu-item">-->
                            <!--    <a href="<?php echo base_url('admin/product/Productdescription') ?>" class="menu-link">-->
                            <!--        <div data-i18n="Connections">Product Description</div>-->
                            <!--    </a>-->
                            <!--</li>-->
                             <li class="menu-item">
                                <a href="<?php echo base_url('admin/BulkController'); ?>" class="menu-link">
                                    <div data-i18n="Account">Bulk Product</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div data-i18n="Account Settings">Category</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="<?php echo base_url('admin/category/CategoryController'); ?>" class="menu-link">
                                    <div data-i18n="Account">Category</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="<?php echo base_url('admin/category/SubcategoryController/'); ?>" class="menu-link">
                                    <div data-i18n="Account">Sub-Category</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="<?php echo base_url('admin/category/SubcategoryminController/'); ?>" class="menu-link">
                                    <div data-i18n="Account">Sub-Category_mini</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div data-i18n="Account Settings">Accessories</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="<?php echo base_url('admin/accessories/Accessories/addAccessories'); ?>" class="menu-link">
                                    <div data-i18n="Account">Add Accessories</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="<?php echo base_url('admin/accessories/Accessories/'); ?>" class="menu-link">
                                    <div data-i18n="Account">All Accessories</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div data-i18n="Account Settings">Variation</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="<?php echo base_url('admin/variation/Variation/addvariation'); ?>" class="menu-link">
                                    <div data-i18n="Account">Add Variation</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="<?php echo base_url('admin/variation/Variation/mediaPage'); ?>" class="menu-link">
                                    <div data-i18n="Account">Media</div>
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                    

                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div data-i18n="Account Settings">Request</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="<?php echo base_url('admin/request/RequestContoller'); ?>" class="menu-link">
                                    <div data-i18n="Account">Users Request</div>
                                </a>
                            </li>
                            <!-- <li class="menu-item">
                                <a href="<?php echo base_url('admin/category/SubcategoryController/'); ?>" class="menu-link">
                                    <div data-i18n="Account">Sub-Category</div>
                                </a>
                            </li> -->
                            
                        </ul>
                    </li>
                    
                    
                      <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div data-i18n="Account Settings">Contact us</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="<?php echo base_url('admin/Contactus'); ?>" class="menu-link">
                                    <div data-i18n="Account">Users Request</div>
                                </a>
                            </li>
                          
                            
                        </ul>
                    </li>
                    
                     <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div data-i18n="Account Settings">Banners</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="<?php echo base_url('admin/BannerController'); ?>" class="menu-link">
                                    <div data-i18n="Account">Upload Banners</div>
                                </a>
                            </li>
                            
                            <li class="menu-item">
                                <a href="<?php echo base_url('admin/PageController'); ?>" class="menu-link">
                                    <div data-i18n="Account">Pages</div>
                                </a>
                            </li>
                          
                            
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo base_url('admin/blogs'); ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div data-i18n="Account">Blogs</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo base_url('admin/headerfooter'); ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div data-i18n="Account">Header Footer</div>
                        </a>
                    </li>
                    
                    
                    <!-- <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
        <div data-i18n="Authentications">Authentications</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="auth-login-basic.html" class="menu-link" target="_blank">
            <div data-i18n="Basic">Login</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="auth-register-basic.html" class="menu-link" target="_blank">
            <div data-i18n="Basic">Register</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="auth-forgot-password-basic.html" class="menu-link" target="_blank">
            <div data-i18n="Basic">Forgot Password</div>
          </a>
        </li>
      </ul>
    </li> -->
                    <!-- <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-cube-alt"></i>
        <div data-i18n="Misc">Misc</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="pages-misc-error.html" class="menu-link">
            <div data-i18n="Error">Error</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="pages-misc-under-maintenance.html" class="menu-link">
            <div data-i18n="Under Maintenance">Under Maintenance</div>
          </a>
        </li>
      </ul>
    </li> -->
                    <!-- Components -->
                    <!-- <li class="menu-header small text-uppercase"><span class="menu-header-text">Components</span></li> -->
                    <!-- Cards -->
                    <!-- <li class="menu-item">
      <a href="cards-basic.html" class="menu-link">
        <i class="menu-icon tf-icons bx bx-collection"></i>
        <div data-i18n="Basic">Cards</div>
      </a>
    </li> -->
                    <!-- User interface -->
                    <!-- <li class="menu-item">
      <a href="javascript:void(0)" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-box"></i>
        <div data-i18n="User interface">User interface</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="ui-accordion.html" class="menu-link">
            <div data-i18n="Accordion">Accordion</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-alerts.html" class="menu-link">
            <div data-i18n="Alerts">Alerts</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-badges.html" class="menu-link">
            <div data-i18n="Badges">Badges</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-buttons.html" class="menu-link">
            <div data-i18n="Buttons">Buttons</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-carousel.html" class="menu-link">
            <div data-i18n="Carousel">Carousel</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-collapse.html" class="menu-link">
            <div data-i18n="Collapse">Collapse</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-dropdowns.html" class="menu-link">
            <div data-i18n="Dropdowns">Dropdowns</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-footer.html" class="menu-link">
            <div data-i18n="Footer">Footer</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-list-groups.html" class="menu-link">
            <div data-i18n="List Groups">List groups</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-modals.html" class="menu-link">
            <div data-i18n="Modals">Modals</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-navbar.html" class="menu-link">
            <div data-i18n="Navbar">Navbar</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-offcanvas.html" class="menu-link">
            <div data-i18n="Offcanvas">Offcanvas</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-pagination-breadcrumbs.html" class="menu-link">
            <div data-i18n="Pagination &amp; Breadcrumbs">Pagination &amp; Breadcrumbs</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-progress.html" class="menu-link">
            <div data-i18n="Progress">Progress</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-spinners.html" class="menu-link">
            <div data-i18n="Spinners">Spinners</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-tabs-pills.html" class="menu-link">
            <div data-i18n="Tabs &amp; Pills">Tabs &amp; Pills</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-toasts.html" class="menu-link">
            <div data-i18n="Toasts">Toasts</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-tooltips-popovers.html" class="menu-link">
            <div data-i18n="Tooltips & Popovers">Tooltips &amp; popovers</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="ui-typography.html" class="menu-link">
            <div data-i18n="Typography">Typography</div>
          </a>
        </li>
      </ul>
    </li> -->

                    <!-- Extended components -->
                    <!-- <li class="menu-item">
      <a href="javascript:void(0)" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-copy"></i>
        <div data-i18n="Extended UI">Extended UI</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="extended-ui-perfect-scrollbar.html" class="menu-link">
            <div data-i18n="Perfect Scrollbar">Perfect scrollbar</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="extended-ui-text-divider.html" class="menu-link">
            <div data-i18n="Text Divider">Text Divider</div>
          </a>
        </li>
      </ul>
    </li> -->

                    <!-- <li class="menu-item">
      <a href="icons-boxicons.html" class="menu-link">
        <i class="menu-icon tf-icons bx bx-crown"></i>
        <div data-i18n="Boxicons">Boxicons</div>
      </a>
    </li> -->

                    <!-- Forms & Tables -->
                    <!-- <li class="menu-header small text-uppercase"><span class="menu-header-text">Forms &amp; Tables</span></li> -->
                    <!-- Forms -->
                    <!-- <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-detail"></i>
        <div data-i18n="Form Elements">Form Elements</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="forms-basic-inputs.html" class="menu-link">
            <div data-i18n="Basic Inputs">Basic Inputs</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="forms-input-groups.html" class="menu-link">
            <div data-i18n="Input groups">Input groups</div>
          </a>
        </li>
      </ul>
    </li> -->
                    <!-- <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-detail"></i>
        <div data-i18n="Form Layouts">Form Layouts</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="form-layouts-vertical.html" class="menu-link">
            <div data-i18n="Vertical Form">Vertical Form</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="form-layouts-horizontal.html" class="menu-link">
            <div data-i18n="Horizontal Form">Horizontal Form</div>
          </a>
        </li>
      </ul>
    </li> -->
                    <!-- Tables -->
                    <!-- <li class="menu-item">
      <a href="tables-basic.html" class="menu-link">
        <i class="menu-icon tf-icons bx bx-table"></i>
        <div data-i18n="Tables">Tables</div>
      </a>
    </li> -->
                    <!-- Misc -->
                    <!-- <li class="menu-header small text-uppercase"><span class="menu-header-text">Misc</span></li> -->
                    <!-- <li class="menu-item">
      <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues" target="_blank" class="menu-link">
        <i class="menu-icon tf-icons bx bx-support"></i>
        <div data-i18n="Support">Support</div>
      </a>
    </li> -->
                    <!-- <li class="menu-item">
      <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/" target="_blank" class="menu-link">
        <i class="menu-icon tf-icons bx bx-file"></i>
        <div data-i18n="Documentation">Documentation</div>
      </a>
    </li> -->
                </ul>

            </aside>
            <div class="layout-page">





                <!-- Navbar -->




                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">











                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>


                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">





                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                                <i class="bx bx-search fs-4 lh-0"></i>
                                <input type="text" class="form-control border-0 shadow-none" placeholder="Search..."
                                    aria-label="Search...">
                            </div>
                        </div>
                        <!-- /Search -->


                        <ul class="navbar-nav flex-row align-items-center ms-auto">



                            <!-- Place this tag where you want the button to render. -->
                            <!-- <li class="nav-item lh-1 me-3">
                                <a class="github-button"
                                    href="https://github.com/themeselection/sneat-html-admin-template-free"
                                    data-icon="octicon-star" data-size="large" data-show-count="true"
                                    aria-label="Star themeselection/sneat-html-admin-template-free on GitHub">Star</a>
                            </li> -->



                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="<?php echo base_url('admin-assets/img/avatars/').$adminimg ?>" alt
                                            class="w-px-40 h-auto rounded-circle">
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="<?php echo base_url('admin-assets/img/avatars/').$adminimg ?>"
                                                            alt class="w-px-40 h-auto rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block"><?php echo $name ?></span>
                                                    <small class="text-muted">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?php echo base_url('admin/Profile') ?>">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-cog me-2"></i>
                                            <span class="align-middle">Settings</span>
                                        </a>
                                    </li>

                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item"
                                            href="<?php echo base_url('admin/LoginController/logout') ?>">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->


                        </ul>
                    </div>



                </nav>