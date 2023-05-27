<?php
    $this->load->view('includes/header');
?>
<div class="page-content">
    <div id="shopify-section-1586608150816" class="shopify-section index-section index-section--flush">
        <div class="holder fullwidth fullboxed mt-0 full-nopad">
            <div class="container">
                <div class="bnslider-wrapper">
                    <div class="bnslider keep-scale" data-start-width='1920' data-start-height='785'
                        data-start-mwidth='414' data-start-mheight='736' id="bnslider-1586608150816"
                        data-autoplay="true" data-speed="5000">
                        <?php
                        $slider = $this->db->get('sliders')->result_array();
                       
                        foreach($slider as $key => $valslider){
                            ?>
                        <a  target="_self" class="bnslider-slide ">
                            <div class="bnslider-image-mobile lazyload fade-up-fast"
                                data-bgset="<?php echo base_url('admin-assets/uploads/').$valslider['imags'] ?>" data-sizes="auto"></div>
                            <div class="bnslider-image lazyload fade-up-fast"
                                data-bgset="<?php echo base_url('admin-assets/uploads/').$valslider['imags'] ?>" data-sizes="auto"></div>
                            <div class="bnslider-text-wrap bnslider-overlay container">
                                <div class="bnslider-text-content txt-middle txt-left txt-middle-m txt-center-m">
                                    <div class="bnslider-text-content-flex  container ">
                                        
                                    </div>
                                </div>
                            </div>
                        </a>
                            <?php
                        }
                        ?>

                       
                        <!--<a href="#" target="_self" class="bnslider-slide ">-->
                        <!--    <div class="bnslider-image-mobile lazyload fade-up-fast"-->
                        <!--        data-bgset="https://atzean.com/imeasure/assets/image/slider/Fluke_Banner.png" data-sizes="auto"></div>-->
                        <!--    <div class="bnslider-image lazyload fade-up-fast" data-bgset="https://atzean.com/imeasure/assets/image/slider/Fluke_Banner.png"-->
                        <!--        data-sizes="auto"></div>-->
                        <!--    <div class="bnslider-text-wrap bnslider-overlay container">-->
                        <!--        <div class="bnslider-text-content txt-middle txt-right txt-middle-m txt-center-m">-->
                                   
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</a>-->
                    </div>
                    <div class="bnslider-loader"></div>
                    <div class="bnslider-arrows d-sm-none container">
                        <div></div>
                    </div>
                    <div class="bnslider-dots d-none d-sm-block container"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="holder holder-mt-small" id="holderShopFeature">
        <div class="container">
            <div class="row no-gutters justify-content-center">
                <div class="col-sm">
                    <div class="shop-feature-bg row  ">
                        <div class="shop-feature-icon col-auto"><i class="icon-delivery-truck"></i></div>
                        <div class="shop-feature-text col">
                            <div class="shop-feature-title heading-font">Fast Shipping</div>
                            It allows customers to
receive their goods in a
shorter amount of time than
the standard delivery time.
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="shop-feature-bg row  ">
                        <div class="shop-feature-icon col-auto"><i class="icon-return"></i></div>
                        <div class="shop-feature-text col">
                            <div class="shop-feature-title heading-font">Genuine products</div>
                            Genuine products that are offered by brand owners, distributors, or other authorised parties
                            are
                            considered authentic goods.
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="shop-feature-bg row  ">
                        <div class="shop-feature-icon col-auto"><i class="icon-watch"></i></div>
                        <div class="shop-feature-text col">
                            <div class="shop-feature-title heading-font">24/7 Customer Support</div>
                            24/7 Customer service or 24/7 tech support is a customer service strategy that involves
                            providing support 24 hours a day, and 7 days a week.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
        #holderShopFeature .shop-feature-bg .shop-feature-icon {
            color: #ffd800
        }

        #holderShopFeature .shop-feature-bg:hover .shop-feature-icon {
            color: #ffd800
        }

        #holderShopFeature .shop-feature-bg {
            background-color: #f7f7f8;
        }

        #holderShopFeature .shop-feature-bg:hover {
            background: linear-gradient(45deg, rgba(237, 158, 3, 1) 0%, rgba(226, 8, 152, 1) 100%);
        }

        #holderShopFeature .shop-feature-bg .shop-feature-text {
            color: #464b5c
        }

        #holderShopFeature .shop-feature-bg:hover .shop-feature-text {
            color: #ffffff
        }
        </style>
    </div>
    <div class="holder holder-mt-small" id="holderCollectionGrid">
        <div class="container">
            <div class="collection-grid-2 row justify-content-center">
                <?php
                    foreach($products as $key => $value){
                        $image = explode(',', $value['image']);
                        $proUrl = $string = strtolower(str_replace(' ', '-', $value['product_title']));
                        ?>
                <!--<div class="collection-grid-2-item col-9 col-md-quarter col-lg-3">-->
                <!--    <a href="<?php echo base_url('singleproduct/'.$proUrl) ?>" target="_self" class="bnr-wrap collection-grid-2-item-inside">-->
                <!--        <div class="collection-grid-2-img image-container image-hover-scale"-->
                <!--            style="padding-bottom: 77.778%"><img class="lazyload fade-up"-->
                <!--                data-src="<?php echo base_url('assets/images/products/'.$image[0]) ?>" data-sizes="auto"-->
                <!--                alt="Office equipment"></div>-->
                <!--        <h3 class="collection-grid-2-title pb-15 heading-font"><?php echo $value['product_title'] ?></h3>-->
                <!--    </a>-->
                <!--</div>-->
                  <?php
                    }
                ?>
               
            </div>
            <style>
            #holderCollectionGrid .collection-grid-2-title {
                font-size: 16px;
                font-weight: 600;
                color: #464b5c
            }

            #holderCollectionGrid .collection-grid-2-title:hover {
                color: #464b5c
            }
            </style>
        </div>
    </div>
    <div class="holder">
        <div class="container">
            <div class="title-wrap title-md">
                <h2 class="h2-style">FEATURED PRODUCTS</h2>
            </div>
            <div class="prd-grid-wrap position-relative">
                <div
                    class="prd-grid data-to-show-4 data-to-show-lg-3 data-to-show-md-2 data-to-show-sm-2 data-to-show-xs-2 js-category-grid ">
                    <div class='row'>
                        
                    
                    <?php
                    
                        foreach($featuredPro as $key => $value){
                            $image = explode(',', $value['image']);
                            $proUrl = $string = str_replace(' ', '-', $value['product_title']);
                            ?>
                            
                    <div class="prd prd--style2 prd-labels--max prd-labels-shadow col-md-3">
                        <div class="prd-inside">
                            <div class="">
                        <!--<img src="<?php echo base_url('assets/images/products/'.$image[0]) ?>">-->
                                <a href="<?php echo base_url('product/'.$proUrl) ?>" class="">
                                    <img src="<?php echo base_url('assets/images/products/'.$image[0]) ?>">
                                    <div class="foxic-loader"></div>
                                </a>
                               
                            </div>
                            <div class="prd-info">
                                <div class="prd-info-wrap">
                                    
                                    <div class="prd-tag"><a href="<?php echo base_url('product/'.$proUrl) ?>"><?php echo $value['product_title'] ?></a></div>
                                    <h2 class="prd-title"><a href="<?php echo base_url('product/'.$proUrl) ?>"><?php echo $value['pname'] ?></a></h2>
                                    <div class="prd-description">
                                        Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora
                                        torquent per
                                        conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
                                    </div>
                                    <div class="prd-action">
                                        <form action="<?php echo base_url('product/'.$proUrl) ?>">
                                            <button class="btn js-prd-addtocart"
                                                data-product='{"name": "Window Air Conditioner", "path":"image/products/product-07-1.jpg", "url":"#", "aspect_ratio":0.778}'>Add
                                                To Cart</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="prd-hovers">
                                    <div class="prd-circle-labels">
                                        <div><a href="<?php echo base_url('product/'.$proUrl) ?>"
                                                class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0"
                                                title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#"
                                                class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0"
                                                title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
                                        <div class="prd-hide-mobile"><a href="<?php echo base_url('product/'.$proUrl) ?>"
                                                class="circle-label-qview js-prd-quickview"
                                                data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK
                                                    VIEW</span></a></div>
                                    </div>
                                    <div class="prd-price">
                                        <div class="price-old">$ 200</div>
                                        <div class="price-new">$ 180</div>
                                    </div>
                                    <div class="prd-action">
                                        <div class="prd-action-left">
                                            <form action="<?php echo base_url('product/'.$proUrl) ?>">
                                                <button class="btn js-prd-addtocart"
                                                    data-product='{"name": "Window Air Conditioner", "path":"image/products/product-07-1.jpg", "url":"#", "aspect_ratio":0.778}'>Add
                                                    To Cart</button>
                                            </form>
                                        </div>
                                    </div>
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
    </div>
    <div class="title-wrap text-center title-with-behind mt-3">
        <h4 class=" text-center"><a href="<?php echo base_url('all-products') ?>" title="View all">View All</a></h4>
        <!--<div class="h-behind">TOP FISHERMAN</div>-->
        <div class="carousel-arrows" style="margin:0 auto 65px; width:50px;"></div>
    </div>
    <div class="holder holder-mt-medium holder-with-bg holder-pt-medium holder-pb-medium bgcolor">
        <div class="container">
            <div class="title-wrap text-center title-with-behind">
                <h2 class="h1-style text-center"><a href="blog.html" title="View all">OUR BLOG</a></h2>
                <!--<div class="h-behind">TOP FISHERMAN</div>-->
                <div class="carousel-arrows" style="margin:0 auto 65px; width:50px;"></div>
            </div>
            <div class="post-prws post-prws-carousel post-prws--row js-post-prws-carousel"
                data-slick='{"slidesToShow": 3, "responsive": [{"breakpoint": 992,"settings": {"slidesToShow": 3 }},{"breakpoint": 480,"settings": {"slidesToShow": 1 }}]}'>
                <!-- <div class="post-prw-vert col">
                     <a href="#" class="post-prw-img image-hover-scale image-container" style="padding-bottom: 47.16%">
                     <img class="lazyload fade-up w-100" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/skins/fishing/blog/blog-01.png" alt="How to Organize Your Fishing Gear">
                     </a>
                     <h4 class="post-prw-title"><a href="#">How to Organize Your Fishing Gear</a></h4>
                     <div class="post-prw-links">
                        <div class="post-prw-date"><i class="icon-calendar1"></i>
                           May 28, 2020
                        </div>
                        <a href="#" class="post-prw-comments"><i class="icon-chat"></i>2 comments</a>
                     </div>
                  </div> -->
                  <?php
                  foreach($bloglist as $key => $value){
                      $newDate = date("M d,Y", strtotime($value['create_at'])); 
                      ?>
                      
                     
                <div class="post-prw-vert col">
                    <a href="<?php echo base_url('blog/'.$value['id']) ?>" class="post-prw-img image-hover-scale image-container" style="padding-bottom: 47.16%">
                        <img class="lazyload fade-up w-100"
                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-src="<?php echo base_url('admin-assets/uploads/').$value['imags'] ?>" alt="How to Get Hooked on Ice Fishing">
                    </a>
                    <h4 class="post-prw-title"><a href="<?php echo base_url('blog/'.$value['id']) ?>"><?php echo $value['title'] ?></a></h4>
                    <p><?php echo $value['heading'] ?>
                    </p>
                    <div class="post-prw-links">
                        <div class="post-prw-date"><i class="icon-calendar1"></i>
                           <?php echo $newDate ?>
                        </div>
                        <!--<a href="#" class="post-prw-comments"><i class="icon-chat"></i>3 comments</a>-->
                    </div>
                </div>
                 <?php
                  }
                  ?>
               
            </div>
        </div>
    </div>
    <div class="holder holder-mt-medium">
        <div class="container">
            <div class="title-wrap text-left">
                <h2 class="h2-style">OUR PARTNERS</h2>
            </div>
            <ul class="brand-carousel js-brand-carousel slick-arrows-aside-simple"
                data-slick='{"slidesToShow": 5,  "responsive": [{"breakpoint": 992,"settings": {"slidesToShow": 4 }},{"breakpoint": 480,"settings": {"slidesToShow": 2 }}]}'>
                <?php
                foreach($brandslist as $key => $brands){
                    ?>
                    <li>
                        <div>
                            <img class="lazyload lazypreload" data-src="<?php echo base_url('admin-assets/uploads/'.$brands['imags']) ?>" data-sizes="auto" alt="Brand">
                        </div>
                    </li>
                    
                    <?php
                }
                ?>
               
            </ul>
        </div>
    </div>
    	<div class="holder bgcolor py-5">
			<div class="container py-2">
				<div class="title-wrap text-center">
					<h2 class="h1-style">Our Information</h2>
					<p class="h-sub maxW-825">Nor again is there anyone who loves or pursues or desires to obtain pain
						of itself, because it is pain, but because occasionally in which toil and pain</p>
				</div>
			    <div class="text-icn-blocks-row">
					<div class="text-icn-block-hor">
						<div class="icn">
							<i class="icon-location"></i>
						</div>
						<div class="text">
							<h4>Address:</h4>
							<p>395/B, Clerk Colony, Opp. I.T.I. College Pardeshipura, 
							Indore-452010 ( M. P. ) India</p>
						</div>
					</div>
					<div class="text-icn-block-hor">
						<div class="icn">
							<i class="icon-phone"></i>
						</div>
						<div class="text">
							<h4>Phone:</h4>
							<p>+91 99932-99314<br>81092-09414</p>
						</div>
					</div>
					<div class="text-icn-block-hor">
						<div class="icn">
							<i class="icon-info"></i>
						</div>
						<div class="text">
							<h4>Email:</h4>
							<p>i-zone@hotmail.com, marketing@i-zone.in</p>
						</div>
					</div>
					<!--<div class="text-icn-block-hor">-->
					<!--	<div class="icn">-->
					<!--		<i class="icon-call-center"></i>-->
					<!--	</div>-->
					<!--	<div class="text">-->
					<!--		<h4>Quick Help:</h4>-->
					<!--		<p>+3 800 555 35 35<br>+3 800 555 35 35</p>-->
					<!--	</div>-->
					<!--</div>-->
				</div>
			</div>
		</div>
		<div class="holder">
			<div class="container">
				<div class="row vert-margin">
					<div class="col-sm-9">
						<div class="title-wrap">
							<h2 class="h1-style">Get In Touch With Us</h2>
							<div>Nor again is there anyone who loves or pursues or desires to obtain pain of itself,
								because it is pain, but because occasionally in which toil and pain</div>
						</div>
						<form action="<?php echo base_url('Contactus/savecontact') ?>" method="POST">
							<div class="form-confirm">
								<div class="success-confirm">
									Thanks! Your message has been sent. We will get back to you soon!
								</div>
								<div class="error-confirm">
									Oops! There was an error submitting form. Refresh and send again.
								</div>
							</div>
							<div class="form-group">
								<div class="row vert-margin-middle">
									<div class="col-lg">
										<input type="text" name="name" class="form-control form-control--sm"
											placeholder="Name" required>
									</div>
									<div class="col-lg">
										<input type="text" name="lastName" class="form-control form-control--sm"
											placeholder="Last Name" required>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row vert-margin-middle">
									<div class="col-lg">
										<input type="text" name="email" class="form-control form-control--sm"
											placeholder="Email" required>
									</div>
									<div class="col-lg">
										<input type="text" name="phone" class="form-control form-control--sm"
											placeholder="Phone" required>
									</div>
								</div>
							</div>
							<div class="form-group">
								<textarea class="form-control form-control--sm textarea--height-200" name="message"
									placeholder="Message" required></textarea>
							</div>
							<button class="btn" type="submit">Submit</button>
						</form>
					</div>
					<div class="col-sm-9">
						<div class="contact-map">
							<iframe
								src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14718.365332638863!2d75.87185163006228!3d22.74342616152055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396303768e28b55f%3A0x303d377651e6ec2!2sI%20Measure!5e0!3m2!1sen!2sin!4v1680765198085!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
    
</div>
<?php 
    $this->load->view('includes/footer');
?>